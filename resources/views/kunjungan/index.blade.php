@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 mb-2 text-gray-800">Kunjungan</h1>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ url('/kunjungan/create') }}">
                    <button type="button" class="btn btn-primary">
                        Add Data
                    </button>
                </a>
            </div>
        </div>

        <!-- DataTales Example -->
        @if ($message = Session::get('status'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        @if ($message = Session::get('statuserror'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $message }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-4">
                        <h6 class="m-0 font-weight-bold text-primary">List Data</h6>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <form method="get">
                            <div class="input-group">
                                <input type="text" class="form-control border-0 small w-25" placeholder="Search for..."
                                    aria-label="Search" aria-describedby="basic-addon2" name="q">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No. Registrasi</th>
                                <th>Tanggal</th>
                                <th>Pasien</th>
                                <th>Poli</th>
                                <th>Dokter</th>
                                <th>Instalasi</th>
                                <th>Penjab</th>
                                <th class="text-center">#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $row)
                                <tr>
                                    <td>{{ $row->no_registrasikunjungan }}</td>
                                    <td>{{ $row->tanggal_kunjungan }}</td>
                                    <td>{{ $row->no_rm }} - {{$row->nama_pasien}}</td>
                                    <td>{{ $row->nama_poli }}</td>
                                    <td>{{ $row->kode_dokter }} - {{$row->nama_dokter}}</td>
                                    <td>{{ $row->instalasi }}</td>
                                    <td>{{ $row->nama_penjamin }}</td>
                                    <td class="text-center">
                                        @if ($row->poli=='GIG')
                                        <a href="{{ url('/kunjungan/' . $row->id . '/input-rm') }}" class="btn btn-sm btn-secondary m-1">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        @endif
                                        <a href="{{ url('/kunjungan/' . $row->id . '/edit') }}" class="btn btn-sm btn-success m-1">
                                            <i class="fas fa-wrench"></i>
                                        </a>
                                        <a href="{{ url('/kunjungan/' . $row->id) }}" class="btn btn-sm btn-warning m-1">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="{{ url('/kunjungan/' . $row->id) }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-sm btn-danger m-1" type="submit"
                                                onclick="return confirm('Delete Data ?');">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$data->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom_js')
@endpush
