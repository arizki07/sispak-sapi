<?php

namespace App\Http\Controllers\Diagnosa;

use App\Http\Controllers\Controller;
use App\Models\CFUserModel;
use App\Models\DiagnosaGejalaModel;
use App\Models\DiagnosaModel;
use App\Models\GejalaModel;
use App\Models\PenyakitModel;
use App\Models\RelasiModel;
use Illuminate\Http\Request;

class MulaiDiagnosaController extends Controller
{
    public function index()
    {
        $gejala = GejalaModel::all();
        $diagnosa = DiagnosaModel::all();
        $listCFUser = CFUserModel::all();

        return view('pages.diagnosa.index', [
            'gejala' => $gejala,
            'diagnosa' => $diagnosa,
            'listCFUser' => $listCFUser,
        ]);
    }

    public function mulai()
    {
        $gejala = GejalaModel::all();
        $diagnosa = DiagnosaModel::all();
        $listCFUser = CFUserModel::all();

        return view('pages.diagnosa.mulai_diagnosa', [
            'gejala' => $gejala,
            'diagnosa' => $diagnosa,
            'listCFUser' => $listCFUser,

        ]);
    }

    public function start(Request $request)
    {
        $relasiModel = new RelasiModel();
        $diagnosaModel = new DiagnosaModel();
        $diagnosaGejalaModel = new DiagnosaGejalaModel();
        $gejalaModel = new GejalaModel();
        $penyakitModel = new PenyakitModel();
        $CFUserModel = new CFUserModel();

        $username = $request->input('username');
        $listSelectedGejala = $request->input('selectedGejala');
        $listCF = $request->input('cf');

        if (empty($listSelectedGejala) || empty($listCF)) {
            return redirect()->back()->withInput()->with('error', 'Pilih Gejala Minimal 1 disertakan dengan tingkat kepercayaannya');
        }

        $mergedData = [];
        foreach ($listSelectedGejala as $key => $idGejala) {
            $cfUserId = $listCF[$key];
            $cfKepercayaan = $CFUserModel->where('id', $cfUserId)->first();

            $mergedData[$key] = [
                'id_gejala' => $idGejala,
                'tingkat_kepercayaan' => $cfKepercayaan['nama_nilai'],
                'cf_user' => $cfKepercayaan['cf'],
            ];
        }

        $cf = [];
        $listGejala = [];
        $penyakitCodes = [];
        $anyar = [];

        // Proses konversi
        foreach ($mergedData as $key => $val) {
            $relation = $relasiModel->where('id_gejala', $val['id_gejala'])->get();
            $gejala = $gejalaModel->find($val['id_gejala']);

            if ($relation->count() > 0) {
                $listGejalaValue['id_gejala'] = $gejala->id_gejala;
                $listGejalaValue['kode_gejala'] = $gejala->kode_gejala;
                $listGejalaValue['nama_gejala'] = $gejala->nama_gejala;
                $listGejalaValue['tingkat_kepercayaan'] = $val['tingkat_kepercayaan'];
                $listGejalaValue['cf_user'] = $val['cf_user'];
                $listGejalaValue['nilai_cf'] = 0;
                $listGejalaValue['id_penyakit'] = 0;
                $listGejalaValue['kode_penyakit'] = [];

                foreach ($relation as $rel) {
                    $penyakit = $penyakitModel->find($rel->id_penyakit);

                    $value['id_gejala'] = $gejala->id_gejala;
                    $value['kode_gejala'] = $gejala->kode_gejala;
                    $value['nama_gejala'] = $gejala->nama_gejala;
                    $value['tingkat_kepercayaan'] = $val['tingkat_kepercayaan'];
                    $value['cf_user'] = $val['cf_user'];
                    $value['cf'] = $rel->cf;
                    $value['nilai_cf'] = 0;
                    $value['id_penyakit'] = $rel->id_penyakit;
                    $value['kode_penyakit'][] = $penyakit ? $penyakit->kode_penyakit : '';

                    $value['nilai_cf'] = $val['cf_user'] * $rel->cf;

                    $listGejalaValue['nilai_cf'] = $val['cf_user'] * $rel->cf;
                    $listGejalaValue['id_penyakit'] = $val['cf_user'] * $rel->cf;
                    $listGejalaValue['kode_penyakit'][] = $penyakit ? $penyakit->kode_penyakit : '';

                    $cf[] = $value;

                    if (!in_array($penyakit->kode_penyakit, $penyakitCodes)) {
                        $penyakitCodes[] = $penyakit->kode_penyakit;
                    }
                }

                $listGejala[] = $listGejalaValue;
            }
        }

        $cfCombine = 0;
        $groupByPenyakit = [];

        foreach ($cf as $apa) {
            $groupByPenyakit[$apa['id_penyakit']][] = $apa;
        }

        $anyar = [];

        if (count($cf) > 1) {
            for ($i = 0; $i < count($cf) - 1; $i++) {
                $user = $groupByPenyakit[$cf[$i]['id_penyakit']];

                if (count($user) > 1) {
                    for ($j = 0; $j < count($user); $j++) {
                        $pakar = $user[$j];

                        if ($j == 0) {
                            $cfCombine = $pakar['nilai_cf'] + $user[$j + 1]['nilai_cf'] * (1.0 - $pakar['nilai_cf']);

                            if (count($user) - 1 == 1) {
                                $anyar[$i]["nilai_cf"] = $cfCombine;
                                $anyar[$i]["id_penyakit"] = $cf[$i]['id_penyakit'];
                                break;
                            }
                        } else {
                            if ($j + 1 == count($user)) {
                                $anyar[$i]["nilai_cf"] = $cfCombine;
                                $anyar[$i]["id_penyakit"] = $cf[$i]['id_penyakit'];
                                break;
                            }
                            $cfCombine = $cfCombine + $user[$j + 1]['nilai_cf'] * (1.0 - $cfCombine);
                        }
                    }
                } else {
                    $cfCombine = $cf[$i]['nilai_cf'];
                    $anyar[$i]["nilai_cf"] = $cfCombine;
                    $anyar[$i]["id_penyakit"] = $cf[$i]['id_penyakit'];
                }
            }
        } else {
            $cfCombine = $cf[0]['nilai_cf'];
            $anyar[0]["nilai_cf"] = $cfCombine;
            $anyar[0]["id_penyakit"] = $cf[0]['id_penyakit'];
        }

        $listPenyakit = [];

        $hasDuplicates = count($anyar) != count(array_values(array_unique($anyar, SORT_REGULAR)));

        if ($hasDuplicates) {
            $anyar = array_values(array_unique($anyar, SORT_REGULAR));
        }

        foreach ($anyar as $i => $value) {
            $penyakitData = $penyakitModel->find($value['id_penyakit']);
            $listPenyakit[$i]['kode_penyakit'] = $penyakitData->kode_penyakit;
            $listPenyakit[$i]['nama_penyakit'] = $penyakitData->nama_penyakit;
            $listPenyakit[$i]['deskripsi'] = $penyakitData->deskripsi;
            $listPenyakit[$i]['solusi'] = $penyakitData->solusi_penyakit;
            $listPenyakit[$i]['nilai_cf'] = $value['nilai_cf'];
        }

        $nilaiPenyakitTerbesar = max($anyar)['nilai_cf'];
        $idPenyakitTerbesar = max($anyar)['id_penyakit'];

        $penyakitData = $penyakitModel->find($idPenyakitTerbesar);
        $kodePenyakit = $penyakitData->kode_penyakit;
        $namaPenyakit = $penyakitData->nama_penyakit;
        $deskripsi = $penyakitData->deskripsi;
        $solusi = $penyakitData->solusi_penyakit;

        $diagnosaModel->id_penyakit = $idPenyakitTerbesar;

        $diagnosaModel->cf = $nilaiPenyakitTerbesar;
        $diagnosaModel->presentase = number_format($nilaiPenyakitTerbesar * 100, 2);

        $diagnosaModel->save();
        $idDiagnosa = $diagnosaModel->id_diagnosa;

        $diagnosaGejala = [];

        foreach ($cf as $val) {
            // dd($val);
            $cfUser = CFUserModel::where('nama_nilai', $val['tingkat_kepercayaan'])->first();
            $diagnosaGejala[] = [
                'id_diagnosa' => $idDiagnosa,
                'id_gejala' => $val['id_gejala'],
                'id_penyakit' => $val['id_penyakit'],
                'id_cf_user' => $cfUser->id,
                'cf_hasil' => $val['nilai_cf'],
                'cf_pakar' => $val['cf'],
            ];
        }


        $diagnosaGejalaModel->insert($diagnosaGejala);



        $resultDiagnosa = [
            'nama_user' => $username,
            'tingkat_kepercayaan' => $nilaiPenyakitTerbesar,
            'gejala' => $listGejala,
            'presentase' => number_format($nilaiPenyakitTerbesar * 100, 2),
            'deskripsi' => $deskripsi,
            'solusi_penyakit' => $solusi,
            'nama_penyakit' => $namaPenyakit,
            'kode_penyakit' => $kodePenyakit,
        ];

        $data['resultDiagnosa'] = $resultDiagnosa;
        $data['resultDiagnosa']['gejala'] = $listGejala;
        $data['penyakitCodes'] = $penyakitCodes;
        $data['cf'] = $cf;
        $data['listPenyakit'] = $listPenyakit;

        return view('pages.diagnosa.hasil_diagnosa', $data);
    }
}
