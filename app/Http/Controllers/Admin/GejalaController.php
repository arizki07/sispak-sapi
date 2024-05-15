<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GejalaModel;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gejala = GejalaModel::all();
        return view('pages.admin.data_gejala.index', [
            'active' => 'Gejala',
            'judul' => 'Data Gejala',
            'gejala' => $gejala
        ]);
    }

    public function storeGejala(Request $request)
    {
        try {
            $request->validate([
                'nama_gejala' => 'required',
                'kode_gejala' => 'required',
            ]);

            $gejala = new GejalaModel();
            $gejala->nama_gejala = $request->input('nama_gejala');
            $gejala->kode_gejala = $request->input('kode_gejala');
            $gejala->save();

            return redirect()->route('gejala.index')->with('success', 'Data Gejala Berhasil di Tambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Data Gejala Gagal di Tambahkan. Silahkan Coba Lagi!');
        }
    }

    public function updateG(Request $request, $id)
    {
        $request->validate([
            'nama_gejala' => 'required',
            'kode_gejala' => 'required',
        ]);

        $gejala = GejalaModel::find($id);

        if (!$gejala) {
            return redirect()->route('gejala.index')->with('error', 'Data gejala tidak ditemukan');
        }

        $gejala->nama_gejala = $request->input('nama_gejala');
        $gejala->kode_gejala = $request->input('kode_gejala');
        $gejala->save();

        if ($gejala->save()) {
            return redirect()->route('gejala.index')->with('success', 'Data Gejala Berhasil di Update');
        } else {
            return redirect()->route('gejala.index')->with('error', 'Data Gejala Gagal di Update. Silahkan Coba Lagi!');
        }
    }

    public function destroyG($id)
    {
        $gejala = GejalaModel::find($id);

        if (!$gejala) {
            return redirect()->route('gejala.index')->with('error', 'Data gejala tidak ditemukan');
        }

        if ($gejala->delete()) {
            return redirect()->route('gejala.index')->with('success', 'Data gejala berhasil dihapus');
        } else {
            return redirect()->route('gejala.index')->with('error', 'Gagal menghapus data gejala');
        }
    }
}
