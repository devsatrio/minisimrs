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
        <div class="row">
            <div class="col-md-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Data</h6>

            </div>
            @if ($data)
                <form action="{{ url('/kunjungan/'.$data->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Kode Registrasi</label>
                            <input type="text" readonly class="form-control" readonly value="{{$data->no_registrasikunjungan}}" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Kunjungan</label>
                            <input type="date" readonly class="form-control" name="tanggal" value="{{$data->tanggal_kunjungan}}" required>
                        </div>
                        <div class="form-group">
                            <label>Pasien</label>
                            <select name="pasien" disabled class="form-control">
                                @foreach ($pasien as $row_pasien)
                                    <option value="{{ $row_pasien->no_rm }}" @if($data->no_rm==$row_pasien->no_rm) selected @endif>{{ $row_pasien->nama_pasien }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Instalasi</label>
                            <select name="instalasi" disabled class="form-control">
                                <option value="Rawat Jalan" @if($data->instalasi=='Rawat Jalan') selected @endif>Rawat Jalan</option>
                                <option value="IGD" @if($data->instalasi=='IGD') selected @endif>IGD</option>
                                <option value="Rawat Inap" @if($data->instalasi=='Rawat Inap') selected @endif>Rawat Inap</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Poli</label>
                            <select name="poli" disabled class="form-control">
                                @foreach ($poli as $row_poli)
                                    <option value="{{ $row_poli->kode_poli }}" @if($data->poli==$row_poli->kode_poli) selected @endif>{{ $row_poli->nama_poli }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Dokter</label>
                            <select name="dokter" disabled class="form-control">
                                @foreach ($dokter as $row_dokter)
                                    <option value="{{ $row_dokter->kode_dokter }}" @if($data->kode_dokter==$row_dokter->kode_dokter) selected @endif>{{ $row_dokter->nama_dokter }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Penjamin</label>
                            <select name="penjamin" disabled class="form-control">
                                @foreach ($penjab as $row_penjab)
                                    <option value="{{ $row_penjab->id }}" @if($data->penjamin_id==$row_penjab->id) selected @endif>{{ $row_penjab->nama_penjamin }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary" onclick="history.go(-1)">Kembali</button>
                    </div>
                </form>
            @endif
        </div>
            </div>
            <div class="col-md-5">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Riwayat Tindakan</h6>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No Registrasi</th>
                                    <th scope="col">No Transaksi</th>
                                    <th scope="col">Nama Tindakan</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Qty</th>
                                    <th scope="col">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_billing as $row_billing)
                                    <tr>
                                        <td>{{$row_billing->no_registrasikunjungan}}</td>
                                        <td>{{$row_billing->no_transaksi}}</td>
                                        <td>{{$row_billing->nama_tindakan}}</td>
                                        <td>{{"Rp " . number_format($row_billing->harga,0)}}</td>
                                        <td>{{$row_billing->qty}}</td>
                                        <td>{{"Rp " . number_format($row_billing->subtotal,0)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
