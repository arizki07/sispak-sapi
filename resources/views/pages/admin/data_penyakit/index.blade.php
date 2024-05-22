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
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-snowflake"
                                    width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M14 21v-5.5l4.5 2.5" />
                                    <path d="M10 21v-5.5l-4.5 2.5" />
                                    <path d="M3.5 14.5l4.5 -2.5l-4.5 -2.5" />
                                    <path d="M20.5 9.5l-4.5 2.5l4.5 2.5" />
                                    <path d="M10 3v5.5l-4.5 -2.5" />
                                    <path d="M14 3v5.5l4.5 -2.5" />
                                    <path d="M12 11l1 1l-1 1l-1 -1z" />
                                </svg>
                                {{ $judul }}
                            </h2>
                            <div class="page-pretitle mt-2">
                                <ol class="breadcrumb" aria-label="breadcrumbs">
                                    <li class="breadcrumb-item"><a href="{{ url('dashboard') }}"><i class="fa fa-home"></i>
                                            Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><a href="#">
                                            {{-- <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-brand-snowflake" width="44"
                                                height="41" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <path d="M14 21v-5.5l4.5 2.5" />
                                                <path d="M10 21v-5.5l-4.5 2.5" />
                                                <path d="M3.5 14.5l4.5 -2.5l-4.5 -2.5" />
                                                <path d="M20.5 9.5l-4.5 2.5l4.5 2.5" />
                                                <path d="M10 3v5.5l-4.5 -2.5" />
                                                <path d="M14 3v5.5l4.5 -2.5" />
                                                <path d="M12 11l1 1l-1 1l-1 -1z" />
                                            </svg> --}}
                                            {{ $judul }}
                                        </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-auto ms-auto d-print-none">
                            <div class="btn-list">
                                <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                                    data-bs-target="#modal-shif" data-bs-backdrop="static" data-bs-keyboard="false">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-brand-snowflake" width="44" height="44"
                                        viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 21v-5.5l4.5 2.5" />
                                        <path d="M10 21v-5.5l-4.5 2.5" />
                                        <path d="M3.5 14.5l4.5 -2.5l-4.5 -2.5" />
                                        <path d="M20.5 9.5l-4.5 2.5l4.5 2.5" />
                                        <path d="M10 3v5.5l-4.5 -2.5" />
                                        <path d="M14 3v5.5l4.5 -2.5" />
                                        <path d="M12 11l1 1l-1 1l-1 -1z" />
                                    </svg>
                                    Tambah Penyakit
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
                                <div class="card-body">
                                    <div style="overflow-x: auto;">
                                        <table id="example"
                                            class="display table table-vcenter card-table table-sm table-bordered table-hover"
                                            style="width:100%; font-family: 'Trebuchet MS', Helvetica, sans-serif;">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Opsi</th>
                                                    <th class="text-center">Nama Penyakit</th>
                                                    <th class="text-center">Kode Penyakit</th>
                                                    <th class="text-center">Deksripsi</th>
                                                    <th class="text-center">Solusi Penyakit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($penyakit as $item)
                                                    <tr class="text-center">
                                                        <td>
                                                            <a href="javascript:void(0)"
                                                                data-bs-target="#modal-edit{{ $item->id_penyakit }}"
                                                                data-bs-toggle="modal"
                                                                class="btn btn-outline-info btn-sm btn-icon edit-btn"><i
                                                                    class="fa-solid fa-fw fa-edit"></i>
                                                            </a>
                                                            <form id="deleteForm{{ $item->id_penyakit }}"
                                                                action="/destroy/penyakit/{{ $item->id_penyakit }}" method="POST"
                                                                class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button"
                                                                    class="btn btn-outline-danger btn-sm btn-icon"
                                                                    onclick="confirmDelete(event, {{ $item->id_penyakit }})">
                                                                    <i class="fa-solid fa-fw fa-trash-can"></i>
                                                                </button>
                                                            </form>

                                                        </td>
                                                        <td>{{ $item->nama_penyakit }}</td>
                                                        <td>{{ $item->kode_penyakit }}</td>
                                                        {{-- <td>{{ $item->deskripsi }}</td> --}}
                                                        <td>
                                                            <a type="button" href="#" class="btn btn-outline-primary btn-sm btn-icon" data-bs-toggle="modal"
                                                            data-bs-target="#deskripsi-{{ $item->id_penyakit }}">
                                                                <i class="fa-solid fa-fw fa-eye"></i>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a type="button" href="#" class="btn btn-outline-primary btn-sm btn-icon" data-bs-toggle="modal"
                                                            data-bs-target="#solusi-{{ $item->id_penyakit }}">
                                                                <i class="fa-solid fa-fw fa-eye"></i>
                                                            </a>
                                                        </td>
                                                        {{-- <td>{{ $item->solusi_penyakit }}</td> --}}
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
        </div>
    </div>
    {{-- Modal tambah lamaran --}}
    <div class="modal modal-blur fade" id="modal-shif" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title"><svg xmlns="http://www.w3.org/2000/svg"
                            class="icon icon-tabler icon-tabler-brand-snowflake" width="44" height="44"
                            viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M14 21v-5.5l4.5 2.5" />
                            <path d="M10 21v-5.5l-4.5 2.5" />
                            <path d="M3.5 14.5l4.5 -2.5l-4.5 -2.5" />
                            <path d="M20.5 9.5l-4.5 2.5l4.5 2.5" />
                            <path d="M10 3v5.5l-4.5 -2.5" />
                            <path d="M14 3v5.5l4.5 -2.5" />
                            <path d="M12 11l1 1l-1 1l-1 -1z" />
                        </svg> Buat {{ $judul }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="post" action="{{ route('store.penyakit') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="card-stamp card-stamp-lg">
                            <div class="card-stamp-icon bg-primary">
                                <i class="fa-solid fa-pen-to-square"></i>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Penyakit</label>
                            <input type="text" class="form-control border border-dark" name="nama_penyakit"
                                id="nama_penyakit" placeholder="Masukkan Nama penyakit">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kode Penyakit</label>
                            <input type="text" class="form-control border border-dark" name="kode_penyakit"
                                id="kode_penyakit" placeholder="Masukkan Kode Penyakit">
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 mb-0">
                                <label class="form-label">Deskripsi</label>
                                <textarea rows="5" class="form-control border border-dark" placeholder="Isi Deskripsi dari penyakit"
                                    name="deskripsi"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3 mb-0">
                                <label class="form-label">Solusi Penyakit</label>
                                <textarea rows="5" class="form-control border border-dark" placeholder="Isi Solusi penyakit"
                                    name="solusi_penyakit"></textarea>
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
    @foreach ($penyakit as $item)
        <div class="modal modal-blur fade" id="modal-edit{{ $item->id_penyakit }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-snowflake" width="44" height="44"
                                viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 21v-5.5l4.5 2.5" />
                                <path d="M10 21v-5.5l-4.5 2.5" />
                                <path d="M3.5 14.5l4.5 -2.5l-4.5 -2.5" />
                                <path d="M20.5 9.5l-4.5 2.5l4.5 2.5" />
                                <path d="M10 3v5.5l-4.5 -2.5" />
                                <path d="M14 3v5.5l4.5 -2.5" />
                                <path d="M12 11l1 1l-1 1l-1 -1z" />
                            </svg> Buat
                            {{ $judul }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="{{ route('update.penyakit', $item->id_penyakit) }}">
                        @csrf
                        <div class="modal-body">
                            <div class="card-stamp card-stamp-lg">
                                <div class="card-stamp-icon bg-primary">
                                    <i class="fa-solid fa-pen-to-square"></i>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Penyakit</label>
                                <input type="text" class="form-control border border-dark" name="nama_penyakit"
                                    id="nama_penyakit" placeholder="Masukkan Nama penyakit"
                                    value="{{ $item->nama_penyakit }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kode Penyakit</label>
                                <input type="text" class="form-control border border-dark" name="kode_penyakit"
                                    id="kode_penyakit" placeholder="Masukkan Kode Penyakit"
                                    value="{{ $item->kode_penyakit }}">
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 mb-0">
                                    <label class="form-label">Deskripsi</label>
                                    <textarea rows="5" class="form-control border border-dark" placeholder="Isi Deskripsi dari penyakit"
                                        name="deskripsi">{{ $item->deskripsi }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3 mb-0">
                                    <label class="form-label">Solusi Penyakit</label>
                                    <textarea rows="5" class="form-control border border-dark" placeholder="Isi Solusi penyakit"
                                        name="solusi_penyakit">{{ $item->solusi_penyakit }}</textarea>
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

        <div class="modal modal-blur fade" id="deskripsi-{{ $item->id_penyakit }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-snowflake" width="44" height="44"
                                viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 21v-5.5l4.5 2.5" />
                                <path d="M10 21v-5.5l-4.5 2.5" />
                                <path d="M3.5 14.5l4.5 -2.5l-4.5 -2.5" />
                                <path d="M20.5 9.5l-4.5 2.5l4.5 2.5" />
                                <path d="M10 3v5.5l-4.5 -2.5" />
                                <path d="M14 3v5.5l4.5 -2.5" />
                                <path d="M12 11l1 1l-1 1l-1 -1z" />
                            </svg> Deskripsi Penyakit {{ $item->nama_penyakit }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{ $item->deskripsi }}</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-fw fa-arrow-rotate-left"></i> Close</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal modal-blur fade" id="solusi-{{ $item->id_penyakit }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-brand-snowflake" width="44" height="44"
                                viewBox="0 0 24 24" stroke-width="1.0" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M14 21v-5.5l4.5 2.5" />
                                <path d="M10 21v-5.5l-4.5 2.5" />
                                <path d="M3.5 14.5l4.5 -2.5l-4.5 -2.5" />
                                <path d="M20.5 9.5l-4.5 2.5l4.5 2.5" />
                                <path d="M10 3v5.5l-4.5 -2.5" />
                                <path d="M14 3v5.5l4.5 -2.5" />
                                <path d="M12 11l1 1l-1 1l-1 -1z" />
                            </svg> Solusi Penyakit {{ $item->nama_penyakit }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>{{ $item->solusi_penyakit }}</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal"><i class="fa-solid fa-fw fa-arrow-rotate-left"></i> Close</a>
                    </div>
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
