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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-mail">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path
                                        d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" />
                                    <path d="M3 7l9 6l9 -6" />
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
                                {{-- <a href="{{ route('export.diagnosa') }}" class="btn btn-secondary">Export to Excel</a> --}}
                                <a href="{{ route('export.pdf') }}" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-file-type-pdf" width="44" height="44"
                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                        <path d="M5 12v-7a2 2 0 0 1 2 -2h7l5 5v4" />
                                        <path d="M5 18h1.5a1.5 1.5 0 0 0 0 -3h-1.5v6" />
                                        <path d="M17 18h2" />
                                        <path d="M20 15h-3v6" />
                                        <path d="M11 15v6h1a2 2 0 0 0 2 -2v-2a2 2 0 0 0 -2 -2h-1z" />
                                    </svg>
                                    Export to PDF</a>
                                <a href="{{ route('print.diagnosis') }}" target="_blank" class="btn btn-secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-printer"
                                        width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path
                                            d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                        <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                        <path
                                            d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                                    </svg>
                                    Cetak Diagnosa
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
                                        <table style="width:100%; font-family: 'Trebuchet MS', Helvetica, sans-serif;"
                                            class="display table table-vcenter card-table table-sm table-bordered table-hover"
                                            id="example">
                                            <thead>
                                                <tr class="text-center">
                                                    <th class="text-center">Opsi</th>
                                                    <th class="text-center">Nama Penyakit</th>
                                                    <th class="text-center">CF</th>
                                                    <th class="text-center">Presentase</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($diagnosa as $item)
                                                    <tr class="text-center">
                                                        <td>
                                                            <a href="javascript:void(0)"
                                                                data-bs-target="#modal-view{{ $item->id_diagnosa }}"
                                                                data-bs-toggle="modal"
                                                                class="btn btn-outline-info btn-sm btn-icon edit-btn"><i
                                                                    class="fa-solid fa-fw fa-eye"></i>
                                                            </a>
                                                            <form id="deleteForm{{ $item->id_diagnosa }}"
                                                                action="/destroy/diagnosa/{{ $item->id_diagnosa }}" method="POST"
                                                                class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="button"
                                                                    class="btn btn-outline-danger btn-sm btn-icon"
                                                                    onclick="confirmDelete(event, {{ $item->id_diagnosa }})">
                                                                    <i class="fa-solid fa-fw fa-trash-can"></i>
                                                                </button>
                                                            </form>
                                                        </td>
                                                        <td>{{ $item->penyakit->kode_penyakit }}</td>
                                                        <td>{{ $item->cf }}</td>
                                                        <td>{{ $item->presentase }}</td>
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
    @foreach ($diagnosa as $item)
        <div class="modal modal-blur fade" id="modal-view{{ $item->id_diagnosa }}" tabindex="-1" role="dialog"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-white">
                        <h5 class="modal-title"><svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-polygon" width="44" height="44"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 5m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M19 8m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M5 11m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M15 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                <path d="M6.5 9.5l3.5 -3" />
                                <path d="M14 5.5l3 1.5" />
                                <path d="M18.5 10l-2.5 7" />
                                <path d="M13.5 17.5l-7 -5" />
                            </svg> View {{ $judul }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form method="post" action="#">
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
                                    value="{{ $item->penyakit->nama_penyakit }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">CF</label>
                                <input type="text" class="form-control border border-dark" name="cf"
                                    id="cf" placeholder="Masukkan Kode Penyakit" value="{{ $item->cf }}"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Presentase</label>
                                <input type="text" class="form-control border border-dark" name="presentase"
                                    id="presentase" placeholder="Masukkan Kode Penyakit" value="{{ $item->presentase }}"
                                    readonly>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal"><i
                                    class="fa-solid fa-fw fa-arrow-rotate-left"></i> Kembali</a>
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
