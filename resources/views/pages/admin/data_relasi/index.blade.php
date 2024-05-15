@extends('layouts.main')
@section('content')
    @include('components.alert')
    <style>
        td.cuspad0 {
            padding-top: 3px;
            padding-bottom: 3px;
            padding-right: 13px;
            padding-left: 13px;
        }

        td.cuspad1 {
            text-transform: uppercase;
        }

        td.cuspad2 {
            /* padding-top: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        padding-bottom: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        padding-right: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        padding-left: 0.5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        margin-top: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        margin-bottom: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        margin-right: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        margin-left: 5px; */
        }

        .unselectable {
            -webkit-user-select: none;
            -webkit-touch-callout: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            color: #cc0000;
            font-weight: bolder;
        }
    </style>
    <div class="page">
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
                <div class="container-xl">
                    <div class="row g-2 align-items-center">
                        <div class="col">
                            <!-- Page pre-title -->
                            <h2 class="page-title">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-stack-pop"
                                    width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M7 9.5l-3 1.5l8 4l8 -4l-3 -1.5" />
                                    <path d="M4 15l8 4l8 -4" />
                                    <path d="M12 11v-7" />
                                    <path d="M9 7l3 -3l3 3" />
                                </svg>
                                {{ $judul }}

                            </h2>
                            <div class="page-pretitle">
                                <ol class="breadcrumb" aria-label="breadcrumbs">
                                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i>
                                            Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#"><svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-stack-pop" width="44" height="44"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M7 9.5l-3 1.5l8 4l8 -4l-3 -1.5" />
                                                <path d="M4 15l8 4l8 -4" />
                                                <path d="M12 11v-7" />
                                                <path d="M9 7l3 -3l3 3" />
                                            </svg> {{ $judul }}</a></li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                                <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                                    data-bs-target="#modal-shif" data-bs-backdrop="static" data-bs-keyboard="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-stack-pop"
                                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M7 9.5l-3 1.5l8 4l8 -4l-3 -1.5" />
                                        <path d="M4 15l8 4l8 -4" />
                                        <path d="M12 11v-7" />
                                        <path d="M9 7l3 -3l3 3" />
                                    </svg>
                                    Tambah Relasi
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page body -->
            <div class="page-body">
                <div class="container-xl">
                    <div class="row row-cards">
                        <div class="col-12">
                            <div class="card card-xl border-success shadow rounded">
                                <div class="card-stamp card-stamp-lg">
                                    <div class="card-stamp-icon bg-success">
                                        <i class="fa-solid fa-users"></i>
                                    </div>
                                </div>
                                <table style="width:100%; font-family: 'Trebuchet MS', Helvetica, sans-serif;"
                                    class="display table table-vcenter card-table table-sm table-bordered table-hover text-nowrap"
                                    id="example">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Opsi</th>
                                            <th>Nama Penyakit</th>
                                            <th>Nama Gejala</th>
                                            <th>MB</th>
                                            <th>MD</th>
                                            <th>CF</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($relasi as $item)
                                            <tr class="text-center">
                                                <td>
                                                    <a href="javascript:void(0)"
                                                        data-bs-target="#modal-edit-relasi{{ $item->id_relasi }}"
                                                        data-bs-toggle="modal"
                                                        class="btn btn-outline-info btn-sm btn-icon edit-btn"><i
                                                            class="fa-solid fa-fw fa-edit"></i>
                                                    </a>
                                                    <form id="deleteForm{{ $item->id_relasi }}"
                                                        action="/destroy/relasi/{{ $item->id_relasi }}" method="POST"
                                                        class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button"
                                                            class="btn btn-outline-danger btn-sm btn-icon"
                                                            onclick="confirmDelete(event, {{ $item->id_relasi }})">
                                                            <i class="fa-solid fa-fw fa-trash-can"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>{{ $item->penyakit->nama_penyakit }}</td>
                                                <td>{{ $item->gejala->nama_gejala }}</td>
                                                <td>{{ $item->mb }}</td>
                                                <td>{{ $item->md }}</td>
                                                <td>{{ $item->cf }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal tambah lamaran --}}
    <div class="modal modal-blur fade" id="modal-shif" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-stack-pop" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M7 9.5l-3 1.5l8 4l8 -4l-3 -1.5" />
                            <path d="M4 15l8 4l8 -4" />
                            <path d="M12 11v-7" />
                            <path d="M9 7l3 -3l3 3" />
                        </svg> Buat {{ $judul }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="relasi/store">
                    @csrf
                    <div class="modal-body">
                        <div class="card-stamp card-stamp-lg">
                            <div class="card-stamp-icon bg-primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Penyakit</label>
                            <select class="form-control border border-dark" name="id_penyakit" id="id_penyakit">
                                <option value="">--- Pilih Penyakit ---</option>
                                @foreach ($penyakit as $p)
                                    <option value="{{ $p->id_penyakit }}">{{ $p->nama_penyakit }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Gejala</label>
                            <select class="form-control border border-dark" name="id_gejala" id="id_gejala">
                                <option value="">--- Pilih Gejala ---</option>
                                @foreach ($gejala as $g)
                                    <option value="{{ $g->id_gejala }}">{{ $g->nama_gejala }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 mb-0">
                                <label class="form-label">MB</label>
                                <input type="number" step="0.01" class="form-control border border-dark"
                                    placeholder="Isi nilai MB" name="mb">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 mb-0">
                                <label class="form-label">MD</label>
                                <input type="number" step="0.01" class="form-control border border-dark"
                                    placeholder="Isi nilai MD" name="md">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 mb-0">
                                <label class="form-label">CF</label>
                                <input type="number" step="0.01" class="form-control border border-dark"
                                    placeholder="Isi nilai CF" name="cf">
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal"><i
                                class="fa-solid fa-fw fa-arrow-rotate-left"></i> Kembali</a>
                        <button type="submit" class="btn btn-primary ms-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy"
                                width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M14 4l0 4l-6 0l0 -4" />
                            </svg>
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal Tambah --}}

    {{-- Modal tambah lamaran --}}
    @foreach ($relasi as $item)
        <div class="modal modal-blur fade" id="modal-edit-relasi{{ $item->id_relasi }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-stack-pop" width="44" height="44"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M7 9.5l-3 1.5l8 4l8 -4l-3 -1.5" />
                                <path d="M4 15l8 4l8 -4" />
                                <path d="M12 11v-7" />
                                <path d="M9 7l3 -3l3 3" />
                            </svg> Buat {{ $judul }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="{{ route('relasi.update', $item->id_relasi) }}">
                        @csrf
                        <div class="modal-body">
                            <div class="card-stamp card-stamp-lg">
                                <div class="card-stamp-icon bg-primary">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Penyakit</label>
                                <select class="form-control border border-dark" name="id_penyakit" id="id_penyakit">
                                    <option value="">Pilih Penyakit</option>
                                    @foreach ($penyakit as $p)
                                        <option value="{{ $p->id_penyakit }}"
                                            {{ $p->id_penyakit == $item->id_penyakit ? 'selected' : '' }}>
                                            {{ $p->nama_penyakit }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Gejala</label>
                                <select class="form-control border border-dark" name="id_gejala" id="id_gejala">
                                    <option value="">Pilih Gejala</option>
                                    @foreach ($gejala as $g)
                                        <option value="{{ $g->id_gejala }}"
                                            {{ $g->id_gejala == $item->id_gejala ? 'selected' : '' }}>
                                            {{ $g->nama_gejala }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 mb-0">
                                    <label class="form-label">MB</label>
                                    <input type="number" step="0.01" class="form-control border border-dark"
                                        placeholder="Isi nilai MB" name="mb" value="{{ $item->mb }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 mb-0">
                                    <label class="form-label">MD</label>
                                    <input type="number" step="0.01" class="form-control border border-dark"
                                        placeholder="Isi nilai MD" name="md" value="{{ $item->md }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 mb-0">
                                    <label class="form-label">CF</label>
                                    <input type="number" step="0.01" class="form-control border border-dark"
                                        placeholder="Isi nilai CF" name="cf" value="{{ $item->cf }}">
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal"><i
                                    class="fa-solid fa-fw fa-arrow-rotate-left"></i> Kembali</a>
                            <button type="submit" class="btn btn-primary ms-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-device-floppy"
                                    width="24" height="24" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                    <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    <path d="M14 4l0 4l-6 0l0 -4" />
                                </svg>
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- End Modal Tambah --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "pageLength": 10, // Set initial page length
                "lengthMenu": [10, 25, 50, "All"], // Define options for page length
                "language": {
                    "lengthMenu": "Tampilkan _MENU_ data per halaman",
                    "zeroRecords": "Data tidak ditemukan",
                    "info": "Menampilkan halaman _PAGE_ dari _PAGES_",
                    "infoEmpty": "Tidak ada data yang tersedia",
                    "infoFiltered": "(difilter dari total _MAX_ data)",
                    "search": "Cari:",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Selanjutnya",
                        "previous": "Sebelumnya"
                    }
                }
            });
        });
    </script>
@endsection
