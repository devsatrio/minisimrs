@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 mb-2 text-gray-800">Kunjungan</h1>
            </div>
        </div>

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
            <div class="card-body">
                @php
                    $date_kunjungan = Date('Y-m-d');
                @endphp
                @if ($data)
                    <div class="row">
                        <div class="col-md-2">
                            <b>No. Kunjungan</b><br>
                            {{ $data->no_registrasikunjungan }}
                            <input type="hidden" value="{{ $data->no_registrasikunjungan }}" id="no_registrasikunjungan">
                        </div>
                        <div class="col-md-2">
                            <b>Tanggal Kunjungan</b><br>
                            {{ $data->tanggal_kunjungan }}
                            @php
                                $date_kunjungan = $data->tanggal_kunjungan;
                            @endphp
                        </div>
                        <div class="col-md-3">
                            <b>Pasien</b><br>
                            {{ $data->no_rm }} -
                            {{ $data->nama_pasien }}
                            <input type="hidden" value="{{ $data->no_rm }}" id="no_rm">
                        </div>
                        <div class="col-md-2">
                            <b>Poliklinik</b><br>
                            {{ $data->nama_poli }}
                        </div>
                        <div class="col-md-3">
                            <b>Dokter</b><br>
                            {{ $data->kode_dokter }} -
                            {{ $data->nama_dokter }}
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <div class="card mb-4 py-3 border-left-primary">
            <div class="card-body pt-1 pb-1">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-secondary btn-sm active mr-1 ml-1" id="pills-diagnosa-tab" data-toggle="pill"
                            data-target="#pills-diagnosa" type="button" role="tab" aria-controls="pills-diagnosa"
                            aria-selected="true">Diagnosa</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-secondary btn-sm mr-1 ml-1" id="pills-pemeriksaan-fisik-tab"
                            data-toggle="pill" data-target="#pills-pemeriksaan-fisik" type="button" role="tab"
                            aria-controls="pills-pemeriksaan-fisik" aria-selected="false">Pemeriksaan Fisik</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-secondary btn-sm mr-1 ml-1" id="pills-pemeriksaan-odontogram-tab"
                            data-toggle="pill" data-target="#pills-pemeriksaan-odontogram" type="button" role="tab"
                            aria-controls="pills-pemeriksaan-odontogram" aria-selected="false">Pemeriksaan
                            Odontogram</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn btn-success btn-sm mr-1 ml-1" id="pills-resume-medis-tab" style="display:none;"
                            data-toggle="pill" data-target="#pills-resume-medis" type="button" role="tab"
                            aria-controls="pills-resume-medis" aria-selected="false">Resume Medis</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-diagnosa" role="tabpanel"
                        aria-labelledby="pills-diagnosa-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Diagnosa</label>
                                    <textarea id="diagnosa" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button class="btn btn-primary btn-lg float-right" onclick="simpan_diagnosa()"
                                    type="button">Simpan</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-pemeriksaan-fisik" role="tabpanel"
                        aria-labelledby="pills-pemeriksaan-fisik-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Keluhan Utama</label>
                                    <textarea id="keluhan_utama" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>SPO2</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="spo2">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1">%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Suhu</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="suhu">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1">C</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nadi</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="nadi">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1">x/menit</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pernafasan</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" id="pernafasaan">
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="basic-addon1">x/menit</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Tekanan Darah (mmHg)</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Sistolik</span>
                                            </div>
                                            <input type="text" class="form-control" id="sistolik">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">Diastolik</span>
                                            </div>
                                            <input type="text" class="form-control" id="diastolik">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button class="btn btn-primary btn-lg float-right" onclick="simpan_pemeriksaan_fisik()"
                                    type="button">Simpan</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-pemeriksaan-odontogram" role="tabpanel"
                        aria-labelledby="pills-pemeriksaan-odontogram-tab">
                        <div class="form-group">
                            <label>Tgl Pemeriksaan</label>
                            <input type="date" class="form-control" id="tgl_pemeriksaan"
                                value="{{ $date_kunjungan }}">
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
                                    <select id="occulusi" class="form-control">
                                        <option>Normal Bite</option>
                                        <option>Cross Bite</option>
                                        <option>Steep Bite</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Torus Palatinus</label>
                                    <select id="torus_palatinus" class="form-control">
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
                                    <select id="torus_madibularis" class="form-control">
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
                                    <select id="palatum" class="form-control">
                                        <option>Dalam</option>
                                        <option>Sedang</option>
                                        <option>Rendah</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Diastema</label>
                                    <select id="diastema" class="form-control">
                                        <option>Tidak Ada</option>
                                        <option>Ada</option>
                                    </select>
                                </div>
                                <textarea id="ket_diastema" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gigi Anomali</label>
                                    <select id="gigi_anomali" class="form-control">
                                        <option>Tidak Ada</option>
                                        <option>Ada</option>
                                    </select>
                                </div>
                                <textarea id="ket_gigi_anomali" class="form-control"></textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Lain Lain</label>
                                    <textarea id="lain_lain" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">D</div>
                                    </div>
                                    <input type="number" min="0" class="form-control" id="input_d">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">M</div>
                                    </div>
                                    <input type="number" min="0" class="form-control" id="input_m">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">F</div>
                                    </div>
                                    <input type="number" min="0" class="form-control" id="input_f">
                                    <div class="input-group-append">
                                        <button class="btn btn-warning" type="button"
                                            onclick="hitungDMF()">Hitung</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-4">
                                <button class="btn btn-primary btn-lg float-right" onclick="simpan_asessmen()"
                                    type="button">Simpan</button>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-resume-medis" role="tabpanel"
                        aria-labelledby="pills-resume-medis-tab">
                        <br>
                        <div class="row">
                            <div class="col-md-12" id="resume_medis_view">
                                <table width="100%" border="0">
                                    <tr>
                                        <td colspan="5" align="center">
                                            <h4>RUMAH SAKIT UMBRELLA CORPORATION</h4>
                                            <span>Jl. Sigura - Gura No.17, Karangbesuki, Kec. Sukun, Racoon City, west
                                                java</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">

                                            <hr style="border:1px solid #000; margin:5px 0;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" align="center">
                                            <br>
                                            <H6>RESUME MEDIS</h6>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>No. Kunjungan</b><br>
                                            <span id="rmd_no_kunjungan"></span>
                                        </td>
                                        <td>
                                            <b>Tgl. Kunjungan</b><br>
                                            <span id="rmd_tgl_kunjungan"></span>
                                        </td>
                                        <td>
                                            <b>Pasien</b><br>
                                            <span id="rmd_pasien"></span>
                                        </td>
                                        <td>
                                            <b>PoliKlinik</b><br>
                                            <span id="rmd_poli"></span>
                                        </td>
                                        <td>
                                            <b>Dokter</b><br>
                                            <span id="rmd_dokter"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <br>
                                            <b>Diagnosa</b><br>
                                            <span id="rmd_diagnosa"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <br>
                                            <b>Ringkasan / Riwayat Pemeriksaan Fisik</b><br>
                                            <div style="margin-left:20px;">
                                                <table width="100%">
                                                    <tr>
                                                        <td width="10%">Keluhan Utama</td>
                                                        <td width="2%">:</td>
                                                        <td>
                                                            <span id="rmd_keluhan_utama"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tekanan Darah</td>
                                                        <td>:</td>
                                                        <td>
                                                            <span id="rmd_sistolik"></span> / <span
                                                                id="rmd_diastolik"></span> mmHg
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Suhu</td>
                                                        <td>:</td>
                                                        <td>
                                                            <span id="rmd_suhu"></span> C
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nadi</td>
                                                        <td>:</td>
                                                        <td>
                                                            <span id="rmd_nadi"></span> /menit
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pernafasan</td>
                                                        <td>:</td>
                                                        <td>
                                                            <span id="rmd_pernafasan"></span> /menit
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>SPO2</td>
                                                        <td>:</td>
                                                        <td>
                                                            <span id="rmd_spo"></span> %
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="vertical-align: top;">Odontogram</td>
                                                        <td style="vertical-align: top;">:</td>
                                                        <td>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3" align="center">
                                                            <table border="1" width="100%"
                                                                id="table_ketodontogram_satu">
                                                            </table>
                                                            <canvas id="rmd_odontogram" style="margin-top: 15px;">
                                                                Browser anda tidak support canvas, silahkan update browser
                                                                anda.
                                                            </canvas>
                                                            <table border="1" width="100%"
                                                                id="table_ketodontogram_dua">
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="vertical-align: top;">
                                                            occulusi
                                                        </td>
                                                        <td style="vertical-align: top;"> : </td>
                                                        <td style="vertical-align: top;">
                                                            <span id="rmd_occulusi"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="vertical-align: top;">
                                                            Torus Palatinus
                                                        </td>
                                                        <td style="vertical-align: top;"> : </td>
                                                        <td style="vertical-align: top;">
                                                            <span id="rmd_torus_palatinus"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="vertical-align: top;">
                                                            Torus Madibularis
                                                        </td>
                                                        <td style="vertical-align: top;"> : </td>
                                                        <td style="vertical-align: top;">
                                                            <span id="rmd_torus_madibularis"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="vertical-align: top;">
                                                            Palatum
                                                        </td>
                                                        <td style="vertical-align: top;"> : </td>
                                                        <td style="vertical-align: top;">
                                                            <span id="rmd_palatum"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="vertical-align: top;">
                                                            Diastema
                                                        </td>
                                                        <td style="vertical-align: top;"> : </td>
                                                        <td style="vertical-align: top;">
                                                            <span id="rmd_diastema"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="vertical-align: top;">
                                                            Gigi Anomali
                                                        </td>
                                                        <td style="vertical-align: top;"> : </td>
                                                        <td style="vertical-align: top;">
                                                            <span id="rmd_gigi_anomali"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="vertical-align: top;">
                                                            Lain Lain
                                                        </td>
                                                        <td style="vertical-align: top;"> : </td>
                                                        <td style="vertical-align: top;">
                                                            <span id="rmd_lain_lain"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="vertical-align: top;">
                                                            D M F
                                                        </td>
                                                        <td style="vertical-align: top;"> : </td>
                                                        <td style="vertical-align: top;">
                                                            <span id="rmd_dmf"></span>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">
                                            <br>
                                            <b>Tindakan</b><br>
                                            <div id="rmd_tindakan"></div>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            @if ($data)
                                <div class="col-md-12 mt-4">
                                    <a href="{{ url('/kunjungan/print-resume-medis/' . $data->no_registrasikunjungan . '/' . $data->no_rm) }}"
                                        target="blank()" class="btn btn-success btn-lg float-right" id="btn_cetak_resume"
                                        style="display: none;">Cetak</a>
                                </div>
                            @endif
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
                    <input type="hidden" id="mdl-kode-gigi">
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Keterangan</label>
                        <textarea class="form-control" id="mdl-keterangan-gigi"></textarea>
                    </div>
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
