@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 mb-2 text-gray-800">Kunjungan</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Add Data</h6>

            </div>

            <form action="{{ url('/kunjungan') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Tanggal Kunjungan</label>
                        <input type="date" class="form-control" name="tanggal" required>
                    </div>
                    <div class="form-group">
                        <label>Pasien</label>
                        <select name="pasien" class="form-control">
                            @foreach ($pasien as $row_pasien)
                                <option value="{{$row_pasien->no_rm}}">{{$row_pasien->nama_pasien}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Instalasi</label>
                        <select name="instalasi" class="form-control">
                            <option value="Rawat Jalan">Rawat Jalan</option>
                            <option value="IGD">IGD</option>
                            <option value="Rawat Inap">Rawat Inap</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Poli</label>
                        <select name="poli" class="form-control">
                            @foreach ($poli as $row_poli)
                                <option value="{{$row_poli->kode_poli}}">{{$row_poli->nama_poli}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Dokter</label>
                        <select name="dokter" class="form-control">
                            @foreach ($dokter as $row_dokter)
                                <option value="{{$row_dokter->kode_dokter}}">{{$row_dokter->nama_dokter}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Penjamin</label>
                        <select name="penjamin" class="form-control">
                            @foreach ($penjab as $row_penjab)
                                <option value="{{$row_penjab->id}}">{{$row_penjab->nama_penjamin}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="button" class="btn btn-secondary" onclick="history.go(-1)">Kembali</button>
                    <button type="submit" class="btn btn-primary float-right">Save changes</button>
                </div>
            </form>
        </div>
    </div>
@endsection
