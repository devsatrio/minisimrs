<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Resume Medis</title>
    <link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body>
    <input type="hidden" value="{{ $norm }}" id="no_rm">
    <input type="hidden" value="{{ $kunjungan }}" id="no_registrasikunjungan">
    <table width="100%" border="0">
        <tr>
            <td colspan="5" align="center">
                <br>
                <h3>RUMAH SAKIT UMBRELLA CORPORATION</h3>
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
    </table>
    <br>
    <b>Diagnosa</b><br>
    <span id="rmd_diagnosa"></span>
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
                    <span id="rmd_sistolik"></span> / <span id="rmd_diastolik"></span> mmHg
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
                    <table border="1" width="100%" id="table_ketodontogram_satu">
                    </table>
                    <canvas id="rmd_odontogram" style="margin-top: 15px;">
                        Browser anda tidak support canvas, silahkan update browser
                        anda.
                    </canvas>
                    <table border="1" width="100%" id="table_ketodontogram_dua">
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
    <table>
        <tr>
            <td colspan="5">
            </td>
        </tr>
        <tr>
            <td colspan="5">

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
    <table width="100%">
        <t>
            <td width="70%"></td>
            <td width="30%" align="center">
                <span id="rmd_tgl_kunjungan_ttd"></span><br>
                <b>Dokter</b>
                <br><br><br><br><br><br>
                <span id="rmd_nama_dokter"></span>
            </td>
        </t>
    </table>
</body>

<script src="{{ asset('sbadmin/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('sbadmin/js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('customjs/create_rm/jquery.odontogram.js') }}"></script>
<script>
    const teethTable = [{
            leftAdult: "11",
            leftChild: "51",
            rightChild: "61",
            rightAdult: "21",
            hasDoubleInput: true,
            is_table: 'tabel_satu'
        },
        {
            leftAdult: "12",
            leftChild: "52",
            rightChild: "62",
            rightAdult: "22",
            hasDoubleInput: true,
            is_table: 'tabel_satu'
        },
        {
            leftAdult: "13",
            leftChild: "53",
            rightChild: "63",
            rightAdult: "23",
            hasDoubleInput: true,
            is_table: 'tabel_satu'
        },
        {
            leftAdult: "14",
            leftChild: "54",
            rightChild: "64",
            rightAdult: "24",
            hasDoubleInput: true,
            is_table: 'tabel_satu'
        },
        {
            leftAdult: "15",
            leftChild: "55",
            rightChild: "65",
            rightAdult: "25",
            hasDoubleInput: true,
            is_table: 'tabel_satu'
        },
        {
            leftAdult: "16",
            leftChild: null,
            rightChild: null,
            rightAdult: "26",
            hasDoubleInput: false,
            is_table: 'tabel_satu'
        },
        {
            leftAdult: "17",
            leftChild: null,
            rightChild: null,
            rightAdult: "27",
            hasDoubleInput: false,
            is_table: 'tabel_satu'
        },
        {
            leftAdult: "18",
            leftChild: null,
            rightChild: null,
            rightAdult: "28",
            hasDoubleInput: false,
            is_table: 'tabel_satu'
        },
        {
            leftAdult: "48",
            leftChild: null,
            rightChild: null,
            rightAdult: "38",
            hasDoubleInput: false,
            is_table: 'tabel_dua'
        },
        {
            leftAdult: "47",
            leftChild: null,
            rightChild: null,
            rightAdult: "37",
            hasDoubleInput: false,
            is_table: 'tabel_dua'
        },
        {
            leftAdult: "46",
            leftChild: null,
            rightChild: null,
            rightAdult: "36",
            hasDoubleInput: false,
            is_table: 'tabel_dua'
        },
        {
            leftAdult: "45",
            leftChild: "85",
            rightChild: "75",
            rightAdult: "35",
            hasDoubleInput: true,
            is_table: 'tabel_dua'
        },
        {
            leftAdult: "44",
            leftChild: "84",
            rightChild: "74",
            rightAdult: "34",
            hasDoubleInput: true,
            is_table: 'tabel_dua'
        },
        {
            leftAdult: "43",
            leftChild: "83",
            rightChild: "73",
            rightAdult: "33",
            hasDoubleInput: true,
            is_table: 'tabel_dua'
        },
        {
            leftAdult: "42",
            leftChild: "82",
            rightChild: "72",
            rightAdult: "32",
            hasDoubleInput: true,
            is_table: 'tabel_dua'
        },
        {
            leftAdult: "41",
            leftChild: "81",
            rightChild: "71",
            rightAdult: "31",
            hasDoubleInput: true,
            is_table: 'tabel_dua'
        }
    ];

    $(document).ready(function() {
        init_table_resume();
        get_resume_medis();
    });
    setTimeout(function() {
        window.print();       // cetak halaman
        setTimeout(function() {
            window.close();   // tutup window setelah print
        }, 500); // jeda 0.5 detik
    }, 800);

    function init_value_odontogram_resume(data_odontogram_resume) {
        console.log(data_odontogram_resume);
        $('.rmd_viewketgigi').html('');
        for (let index = 0; index < data_odontogram_resume.length; index++) {
            if (data_odontogram_resume[index]['keterangan'] == null || data_odontogram_resume[index]['keterangan'] ==
                '') {
                $('#rmd_viewketgigi' + data_odontogram_resume[index]['nomor_gigi']).html('sou');
            } else {
                $('#rmd_viewketgigi' + data_odontogram_resume[index]['nomor_gigi']).html(data_odontogram_resume[index][
                    'keterangan'
                ]);
            }
        }
    }

    function init_table_resume() {
        var td_table = '';
        var td_table_dua = '';
        for (let index = 0; index < teethTable.length; index++) {
            if (teethTable[index]['is_table'] == 'tabel_satu') {
                td_table = td_table + '<tr>';
                if (teethTable[index]['leftAdult'] != null) {
                    if (teethTable[index]['leftChild'] != null) {
                        td_table = td_table + `<td class="text-center" style="width:8%">` + teethTable[index][
                                'leftAdult'
                            ] + '' +
                            `[` + teethTable[index]['leftChild'] + ']</td>' +
                            '<td class="p-1">' +
                            '<span>' + teethTable[index]['leftAdult'] + ': </span>' +
                            '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['leftAdult'] +
                            '"></span>&nbsp;&nbsp;' +
                            '<span>' + teethTable[index]['leftChild'] + ': </span>' +
                            '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['leftChild'] +
                            '"></span>' +
                            '</td>';
                    } else {
                        td_table = td_table + `<td class="text-center" style="width:8%">` + teethTable[index][
                                'leftAdult'
                            ] + '</td>' +
                            '<td class="p-1">' +
                            '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['leftAdult'] +
                            '"></span>' +
                            '</td>';
                    }
                }

                if (teethTable[index]['rightAdult'] != null) {
                    if (teethTable[index]['rightChild'] != null) {
                        td_table = td_table + '<td class="p-1">' +
                            '<span>' + teethTable[index]['rightChild'] + ': </span>' +
                            '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['rightChild'] +
                            '"></span>&nbsp;&nbsp;' +
                            '<span>' + teethTable[index]['rightAdult'] + ': </span>' +
                            '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['rightAdult'] +
                            '"></span>' +
                            `</td><td class="text-center" style="width:8%">[` + teethTable[index]['rightChild'] + `]` +
                            teethTable[index]['rightAdult'] + '</td>';
                    } else {
                        td_table = td_table + '<td class="p-1">' +
                            '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['rightAdult'] +
                            '"></span>' +
                            '</td>' +
                            `</td><td class="text-center" style="width:8%">` + teethTable[index]['rightAdult'] +
                            '</td>';
                    }
                }
                td_table = td_table + '</tr>';
            }
        }
        for (let index = 0; index < teethTable.length; index++) {
            if (teethTable[index]['is_table'] == 'tabel_dua') {
                td_table_dua = td_table_dua + '<tr>';
                if (teethTable[index]['leftAdult'] != null) {
                    if (teethTable[index]['leftChild'] != null) {
                        td_table_dua = td_table_dua + `<td class="text-center" style="width:8%">` + teethTable[index][
                                'leftAdult'
                            ] +
                            `[` + teethTable[index]['leftChild'] + ']</td>' +
                            '<td class="p-1">' +
                            '<span>' + teethTable[index]['leftAdult'] + ': </span>' +
                            '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['leftAdult'] +
                            '"></span>&nbsp;&nbsp;' +
                            '<span>' + teethTable[index]['leftChild'] + ': </span>' +
                            '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['leftChild'] +
                            '"></span>' +
                            '</td>';
                    } else {
                        td_table_dua = td_table_dua + `<td class="text-center" style="width:8%">` + teethTable[index][
                                'leftAdult'
                            ] + '</td>' +
                            '<td class="p-1">' +
                            '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['leftAdult'] +
                            '"></span>' +
                            '</td>';
                    }
                }

                if (teethTable[index]['rightAdult'] != null) {
                    if (teethTable[index]['rightChild'] != null) {
                        td_table_dua = td_table_dua + '<td class="p-1">' +
                            '<span>' + teethTable[index]['rightChild'] + ': </span>' +
                            '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['rightChild'] +
                            '"></span>&nbsp;&nbsp;' +
                            '<span>' + teethTable[index]['rightAdult'] + ': </span>' +
                            '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['rightAdult'] +
                            '"></span>' +
                            `</td><td class="text-center" style="width:8%">[` + teethTable[index]['rightChild'] +
                            `]` + teethTable[index]['rightAdult'] + '</td>';
                    } else {
                        td_table_dua = td_table_dua + '<td class="p-1">' +
                            '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['rightAdult'] +
                            '"></span>' +
                            '</td>' +
                            `</td><td class="text-center" style="width:8%">` + teethTable[index]['rightAdult'] +
                            '</td>';
                    }
                }
                td_table_dua = td_table_dua + '</tr>';
            }
        }
        $('#table_ketodontogram_satu').html(td_table);
        $('#table_ketodontogram_dua').html(td_table_dua);
    }

    function get_resume_medis() {
        var norm = $('#no_rm').val();
        var noreg = $('#no_registrasikunjungan').val();
        $.ajax({
            type: 'GET',
            url: '/kunjungan/get-resume-medis/' + noreg + '/' + norm,
            success: function(data) {
                if (data.diagnosa.length > 0 && data.pemeriksaan_fisik.length > 0 && data.odontogram
                    .length > 0) {
                    $.each(data.kunjungan, function(key_k, val_k) {
                        $('#rmd_no_kunjungan').html(val_k.no_registrasikunjungan);
                        $('#rmd_tgl_kunjungan').html(val_k.tanggal_kunjungan);
                        $('#rmd_tgl_kunjungan_ttd').html(val_k.tanggal_kunjungan);
                        $('#rmd_pasien').html(val_k.no_rm + ' - ' + val_k.nama_pasien);
                        $('#rmd_poli').html(val_k.nama_poli);
                        $('#rmd_dokter').html(val_k.nama_dokter);
                        $('#rmd_nama_dokter').html(val_k.nama_dokter);
                    });
                    $.each(data.diagnosa, function(key, value) {
                        $('#rmd_diagnosa').html(value.diagnosa);
                    });
                    $.each(data.pemeriksaan_fisik, function(key_pf, val_pf) {
                        $('#rmd_keluhan_utama').html(val_pf.keluhan_utama);
                        $('#rmd_sistolik').html(val_pf.sistolik);
                        $('#rmd_diastolik').html(val_pf.diastolik);
                        $('#rmd_suhu').html(val_pf.suhu);
                        $('#rmd_nadi').html(val_pf.nadi);
                        $('#rmd_pernafasan').html(val_pf.pernafasaan);
                        $('#rmd_spo').html(val_pf.spo);
                    });

                    var list_tindakan = '';
                    $.each(data.tindakan, function(key_t, val_t) {
                        list_tindakan = list_tindakan + '<li>' + val_t.nama_tindakan + ' x ' + val_t
                            .qty + '</li>';
                    });
                    $('#pills-resume-medis-tab').show();
                    $('#btn_cetak_resume').show();

                    var value_odontogram;
                    var keterangan_odontogram;
                    $.each(data.odontogram, function(key_od, val_od) {
                        value_odontogram = JSON.parse(val_od.gambar_odontogram);
                        keterangan_odontogram = JSON.parse(val_od.keterangan_odontogram);
                        $('#rmd_occulusi').html(val_od.occulusi);
                        $('#rmd_torus_palatinus').html(val_od.torus_palatinus);
                        $('#rmd_torus_madibularis').html(val_od.torus_madibularis);
                        $('#rmd_palatum').html(val_od.palatum);
                        var diastema;
                        if (val_od.ket_diastema != '') {
                            diastema = val_od.diastema + ', ' + val_od.ket_diastema;
                        } else {
                            diastema = val_od.diastema;
                        }

                        var val_gigi_anomali;
                        if (val_od.ket_gigi_anomali != '') {
                            val_gigi_anomali = val_od.gigi_anomali + ', ' + val_od.ket_gigi_anomali;
                        } else {
                            val_gigi_anomali = val_od.gigi_anomali;
                        }
                        $('#rmd_diastema').html(diastema);
                        $('#rmd_gigi_anomali').html(val_gigi_anomali);
                        $('#rmd_lain_lain').html(val_od.lain_lain);
                        $('#rmd_dmf').html(val_od.input_d + ' ' + val_od.input_m + ' ' + val_od
                            .input_f);
                    });

                    $('#rmd_tindakan').html('<ul>' + list_tindakan + '</ul>');
                    init_value_odontogram_resume(keterangan_odontogram);
                    init_odontogram_resume(value_odontogram);
                }
            },
            complete: function() {}
        });
    }

    function init_odontogram_resume(value_odontogram) {
        $("#rmd_odontogram").odontogram('init', {
            width: "1200px",
            height: "430px"
        });
        const rmd_odonto = $("#rmd_odontogram").data('odontogram');
        if (value_odontogram !== undefined) {
            // 2. Konversi data gigi biasa ke format geometry
            const teethGeometry = rmd_odonto.setGeometryByPos(value_odontogram.teeth); // Ini return objek geometry

            // 3. Tambahkan bridge sebagai objek literal (bukan instance!)
            // Gunakan key khusus agar tidak bentrok
            if (!teethGeometry["BRIDGES"]) teethGeometry["BRIDGES"] = [];
            for (const bridge of value_odontogram.bridges) {
                // Pastikan x/y tetap string atau number — tidak masalah karena convertGeomFromObject parse otomatis
                teethGeometry["BRIDGES"].push(bridge);
            }

            // 4. Set SEMUA geometri sekaligus
            $("#rmd_odontogram").odontogram('setGeometry', teethGeometry);
        }
    }
</script>

</html>
