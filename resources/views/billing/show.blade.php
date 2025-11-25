@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 mb-2 text-gray-800">Billing</h1>
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
        @if ($data)
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Show Data</h6>

                </div>

                <form action="{{ url('/billing/'.$data->id) }}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>No. Transaksi</label>
                                    <input type="text" class="form-control" readonly value="{{$data->no_transaksi}}">
                                </div>
                            </div>
                            <div class="col-md-8">
                        <div class="form-group">
                            <label>Kunjungan</label>
                            <select name="registrasi" class="form-control" disabled>
                                @foreach ($kunjungan as $row_kunjungan)
                                    <option value="{{ $row_kunjungan->no_registrasikunjungan }}"
                                        @if ($row_kunjungan->no_registrasikunjungan == $data->no_registrasikunjungan) selected @endif>
                                        {{ $row_kunjungan->no_registrasikunjungan }} ({{ $row_kunjungan->no_rm }} -
                                        {{ $row_kunjungan->nama_pasien }})</option>
                                @endforeach
                            </select>
                        </div>
                            </div>
                        </div>
                        @php
                            $i = 1;
                        @endphp
                        <div class="row" id="item">
                            @foreach ($data_detail as $row_data_detail)
                                @php
                                    $i++;
                                @endphp
                                <div class="col-md-12" id="item{{ $i }}">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Nama Tindakan</label>
                                                <input type="text"
                                                    class="form-control inpt-tindakan{{ $i }} tindakan"
                                                    name="tindakan[]" value="{{ $row_data_detail->nama_tindakan }}"
                                                    required readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Harga</label>
                                                <input type="number" min="0"
                                                    onkeyup="hitungsubtotal('{{ $i }}')"
                                                    value="{{ $row_data_detail->harga }}"
                                                    class="form-control inpt-harga' + jumlahchild + ' harga" name="harga[]"
                                                    required readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Qty</label>
                                                <input type="text" type="number" min="0"
                                                    onkeyup="hitungsubtotal('{{ $i }}')"
                                                    value="{{ $row_data_detail->qty }}"
                                                    class="form-control inpt-qty{{ $i }} qty" name="qty[]"
                                                    required readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Subtotal</label>
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control inpt-subtotal{{ $i }} subtotal"
                                                    name="subtotal[]" required readonly
                                                    value="{{ $row_data_detail->subtotal }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @php
                            $i++;
                        @endphp
                        <input type="hidden" value="{{ $i }}" id="last_id_item">
                        <div class="form-group">
                            <label>Total</label>
                            <input type="text" class="form-control subtotal" value="{{$data->total_harga}}" name="total" id="total" readonly
                                required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="button" class="btn btn-secondary" onclick="history.go(-1)">Kembali</button>
                    </div>
                </form>
            </div>
        @endif
    </div>
@endsection

@push('custom_js')
    <script>
        var jumlahchild = $('#last_id_item').val();
        $(document).ready(function() {
            jumlahchild = $('#last_id_item').val();;
        });

        function additemchild() {
            jumlahchild++;
            var child_new = '<div class="col-md-12" id="item' + jumlahchild + '">' +
                '<div class="row">' +
                '<div class="col-md-3">' +
                '<div class="form-group">' +
                '<label>Nama Tindakan</label>' +
                '<input type="text" class="form-control inpt-tindakan' + jumlahchild +
                ' tindakan" name="tindakan[]" required>' +
                '</div>' +
                '</div>' +
                '<div class="col-md-3">' +
                '<div class="form-group">' +
                '<label>Harga</label>' +
                '<input type="number" min="0" onkeyup="hitungsubtotal(' + jumlahchild +
                ')" class="form-control inpt-harga' + jumlahchild + ' harga" name="harga[]"  required>' +
                '</div>' +
                '</div>' +
                '<div class="col-md-3">' +
                '<div class="form-group">' +
                '<label>Qty</label>' +
                '<input type="text" type="number" min="0" onkeyup="hitungsubtotal(' + jumlahchild +
                ')" class="form-control inpt-qty' + jumlahchild + ' qty" name="qty[]" required>' +
                '</div>' +
                '</div>' +
                '<div class="col-md-3">' +
                '<label>Subtotal</label>' +
                '<div class="input-group">' +
                '<input type="text" class="form-control inpt-subtotal' + jumlahchild +
                ' subtotal" name="subtotal[]" required readonly>' +
                '<button class="btn btn-danger" type="button" onclick="deleteitem(' + jumlahchild + ')">' +
                '<i class="fas fa-trash"></i>' +
                ' </button>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</div>';
            $('#item').append(child_new)
        }

        function hitungsubtotal(jumlahchild) {
            var subtotal = 0;
            var harga = 0;
            var qty = 0;

            if ($('.inpt-harga' + jumlahchild).val() !== '') {
                harga = $('.inpt-harga' + jumlahchild).val();
            }


            if ($('.inpt-qty' + jumlahchild).val() !== '') {
                qty = $('.inpt-qty' + jumlahchild).val();
            }
            subtotal = harga * qty;

            $('.inpt-subtotal' + jumlahchild).val(subtotal)
            hitungtotal();
        }

        function deleteitem(jumlahchild) {
            $('#item' + jumlahchild).remove();
            hitungtotal();
        }

        function hitungtotal() {
            var values = [];
            var total = 0;
            $("input[name='subtotal[]']").each(function() {
                values.push($(this).val());
                total = total + parseInt($(this).val());
            });

            $('#total').val(total);
        }
    </script>
@endpush
