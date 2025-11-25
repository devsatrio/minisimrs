@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 mb-2 text-gray-800">Pasien</h1>
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
                <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>

            </div>

            @if ($data)
                <form action="{{ url('/pasien/'.$data->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label>No.Rm</label>
                            <input type="text" class="form-control" name="no_rm" value="{{$data->no_rm}}" required>
                            <input type="hidden" class="form-control" name="old_no_rm" value="{{$data->no_rm}}" required>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama" value="{{$data->nama_pasien}}" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tanggal" value="{{$data->tanggal_lahir}}" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <select name="jk" class="form-control">
                                <option value="Laki - Laki" @if($data->jenis_kelamin=='Laki - Laki')
                                    selelcted
                                @endif>Laki - Laki</option>
                                <option value="Perempuan" @if($data->jenis_kelamin=='Perempuan')
                                    selelcted
                                @endif>Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3" required>{!!$data->alamat!!}</textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary" onclick="history.go(-1)">Kembali</button>
                        <button type="submit" class="btn btn-primary float-right">Save changes</button>
                    </div>
                </form>
            @endif
        </div>
    </div>
@endsection
