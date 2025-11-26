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
                <h6 class="m-0 font-weight-bold text-primary">Detail Kunjungan</h6>

            </div>
        </div>
        <div class="card mb-4 py-3 border-left-primary">
            <div class="card-body pt-1 pb-1">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-secondary btn-sm mr-1 ml-1" id="pills-diagnosa-tab" data-toggle="pill"
                            data-target="#pills-diagnosa" type="button" role="tab" aria-controls="pills-diagnosa"
                            aria-selected="true">Diagnosa</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-secondary btn-sm mr-1 ml-1" id="pills-pemeriksaan-fisik-tab"
                            data-toggle="pill" data-target="#pills-pemeriksaan-fisik" type="button" role="tab"
                            aria-controls="pills-pemeriksaan-fisik" aria-selected="false">Pemeriksaan Fisik</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-secondary btn-sm active mr-1 ml-1" id="pills-pemeriksaan-odontogram-tab"
                            data-toggle="pill" data-target="#pills-pemeriksaan-odontogram" type="button" role="tab"
                            aria-controls="pills-pemeriksaan-odontogram" aria-selected="false">Pemeriksaan
                            Odontogram</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-diagnosa" role="tabpanel" aria-labelledby="pills-diagnosa-tab">
                        ...1</div>
                    <div class="tab-pane fade" id="pills-pemeriksaan-fisik" role="tabpanel"
                        aria-labelledby="pills-pemeriksaan-fisik-tab">...2
                    </div>
                    <div class="tab-pane fade show active" id="pills-pemeriksaan-odontogram" role="tabpanel"
                        aria-labelledby="pills-pemeriksaan-odontogram-tab">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tgl Pemeriksaan</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                        <table border="1" width="100%" id="table_satu">
                        </table>
                        <div class="text-center">
                            <canvas id="odontogram" style="margin-top: 15px;">
                                Browser anda tidak support canvas, silahkan update browser anda.
                            </canvas>
                            <div id="form_ket_odontogram" class="row" style="display: none;">
                                <div class="col-md-6  offset-md-3">
                                    Edit Kondisi Gigi <b><span id="label_gigi"></span></b>
                                    <div class="form-group">
                                        <input type="hidden" id="inp-kode-gigi">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" id="inp-keterangan-gigi"></textarea>
                                    </div>

                                    <button type="button" class="btn btn-primary mb-2"
                                        onclick="saveKeteranganOdontogram()">Submit</button>
                                    <button type="button"
                                        class="btn btn-danger mb-2 "onclick="closeFormOdontogram()">Close</button>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group ml-1 mr-1" role="group" aria-label="First group">
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_HAPUS">Hapus</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_DEFAULT">Default</button>
                                    </div>
                                    <div class="btn-group ml-1 mr-1" role="group" aria-label="Second group">
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_AMF">AMF</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_COF">COF</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_FIS">FIS</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_NVT">NVT</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_RCT">RCT</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_NON">NON</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_UNE">UNE</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_PRE">PRE</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_ANO">ANO</button>
                                    </div>
                                    <div class="btn-group ml-1 mr-1" role="group" aria-label="Third group">
                                        <button type="button" id="ODONTOGRAM_MODE_CARIES"
                                            class="btn btn-sm btn-secondary mb-1 button-action">CAR</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_CFR">CFR</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_FMC">FMC</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_POC">POC</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_RRX">RRX</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_MIS">MIS</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_IPX">IPX</button>
                                        <button type="button" class="btn btn-sm btn-secondary mb-1 button-action"
                                            id="ODONTOGRAM_MODE_FRM_ACR">ACR</button>
                                        <button type="button" id="ODONTOGRAM_MODE_BRIDGE"
                                            class="btn btn-secondary btn-sm mb-1 button-action">Bridge</button>
                                    </div>

                                    <div class="btn-group ml-1 mr-1" role="group" aria-label="Fourth group">
                                        <button type="button" id="ODONTOGRAM_MODE_ARROW_TOP_LEFT"
                                            class="btn btn-secondary btn-sm mb-1 button-action">Arrow Top <br>
                                            Left</button>
                                        <button type="button" id="ODONTOGRAM_MODE_ARROW_TOP_RIGHT"
                                            class="btn btn-secondary btn-sm mb-1 button-action">Arrow Top <br>
                                            Right</button>
                                        <button type="button" id="ODONTOGRAM_MODE_ARROW_TOP_TURN_LEFT"
                                            class="btn btn-secondary btn-sm mb-1 button-action">Arrow Top <br> Turn
                                            Left</button>
                                        <button type="button" id="ODONTOGRAM_MODE_ARROW_TOP_TURN_RIGHT"
                                            class="btn btn-secondary btn-sm mb-1 button-action">Arrow Top <br> Turn
                                            Right</button>
                                    </div>
                                    <div class="btn-group ml-1 mr-1" role="group" aria-label="Fifth group">
                                        <button type="button" id="ODONTOGRAM_MODE_ARROW_BOTTOM_LEFT"
                                            class="btn btn-secondary btn-sm mb-1 button-action">Arrow Bottom <br>
                                            Left</button>
                                        <button type="button" id="ODONTOGRAM_MODE_ARROW_BOTTOM_RIGHT"
                                            class="btn btn-secondary btn-sm mb-1 button-action">Arrow Bottom <br>
                                            Right</button>
                                        <button type="button" id="ODONTOGRAM_MODE_ARROW_BOTTOM_TURN_LEFT"
                                            class="btn btn-secondary btn-sm mb-1 button-action">Arrow Bottom <br> Turn
                                            Left</button>
                                        <button type="button" id="ODONTOGRAM_MODE_ARROW_BOTTOM_TURN_RIGHT"
                                            class="btn btn-secondary btn-sm mb-1 button-action">Arrow Bottom <br> Turn
                                            Right</button>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <table border="1" width="100%" id="table_dua"></table>
                        <br>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Occulusi</label>
                                    <select id="inputState" class="form-control">
                                        <option>Normal Bite</option>
                                        <option>Cross Bite</option>
                                        <option>Steep Bite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Torus Palatinus</label>
                                    <select id="inputState" class="form-control">
                                        <option>Tidak Ada</option>
                                        <option>Kecil</option>
                                        <option>Sedang</option>
                                        <option>Besar</option>
                                        <option>Multiple</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Torus Mandibularis</label>
                                    <select id="inputState" class="form-control">
                                        <option>Tidak Ada</option>
                                        <option>Sisi Kiri</option>
                                        <option>Sisi Kanan</option>
                                        <option>Kedua Sisi</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Palatum</label>
                                    <select id="inputState" class="form-control">
                                        <option>Dalam</option>
                                        <option>Sedang</option>
                                        <option>Rendah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Diastema</label>
                                    <select id="inputState" class="form-control">
                                        <option>Tidak Ada</option>
                                        <option>Ada</option>
                                    </select>
                                </div>
                                <textarea name="" id="" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gigi Anomali</label>
                                    <select id="inputState" class="form-control">
                                        <option>Tidak Ada</option>
                                        <option>Ada</option>
                                    </select>
                                </div>
                                <textarea name="" id="" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Lain Lain</label>
                                    <textarea name="" id="" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">D</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                        placeholder="Username">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">M</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                        placeholder="Username">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">F</div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroupUsername"
                                        placeholder="Username">
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button class="btn btn-primary btn-lg float-right" type="button">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editgigimodal" tabindex="-1" aria-labelledby="editgigimodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editgigimodalLabel">Edit Keterangan Gigi <span id="mdl-label"></span>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <input type="hidden" id="mdl-kode-gigi">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Keterangan</label>
                            <textarea class="form-control" id="mdl-keterangan-gigi"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary"
                        onclick="saveKeteranganOdontogrammodal()">Simpan</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('custom_js')
    <script src="{{ asset('customjs/create_rm/jquery.odontogram.js') }}"></script>
    <script src="{{ asset('customjs/create_rm/input.js') }}"></script>
@endpush
