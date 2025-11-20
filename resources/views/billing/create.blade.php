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
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Data</h6>

            </div>

            <form action="{{ url('/billing') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Kunjungan</label>
                        <select name="registrasi" class="form-control">
                            @foreach ($kunjungan as $row_kunjungan)
                                <option value="{{ $row_kunjungan->no_registrasikunjungan }}">
                                    {{ $row_kunjungan->no_registrasikunjungan }} ({{ $row_kunjungan->no_rm }} -
                                    {{ $row_kunjungan->nama_pasien }})</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="row" id="item">
                    </div>
                    <div>
                        <button type="button" class="btn btn-sm btn-warning" onclick="additemchild()">Add Item</button>
                        <br><br>
                    </div>
                    <div class="form-group">
                        <label>Total</label>
                        <input type="text" class="form-control subtotal" name="total" id="total" readonly required>
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

@push('custom_js')
    <script>
        var jumlahchild = 0
        $(document).ready(function() {
            jumlahchild = 0;
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
                '<button class="btn btn-danger" type="button" onclick="deleteitem('+jumlahchild+')">' +
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
            $('#item'+jumlahchild).remove();
            hitungtotal();
        }

        function hitungtotal() {
            var values = [];
            var total = 0;
            $("input[name='subtotal[]']").each(function() {
                values.push($(this).val());
                total=total+parseInt($(this).val());
            });

            $('#total').val(total);
        }
    </script>
@endpush
