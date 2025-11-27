

var data_odontogram = [
    // Rahang Atas Kanan (Quadrant 1)
    { nomor_gigi: 18, keterangan: null },
    { nomor_gigi: 17, keterangan: null },
    { nomor_gigi: 16, keterangan: null },
    { nomor_gigi: 15, keterangan: null },
    { nomor_gigi: 14, keterangan: null },
    { nomor_gigi: 13, keterangan: null },
    { nomor_gigi: 12, keterangan: null },
    { nomor_gigi: 11, keterangan: null },

    // Rahang Atas Kiri (Quadrant 2)
    { nomor_gigi: 21, keterangan: null },
    { nomor_gigi: 22, keterangan: null },
    { nomor_gigi: 23, keterangan: null },
    { nomor_gigi: 24, keterangan: null },
    { nomor_gigi: 25, keterangan: null },
    { nomor_gigi: 26, keterangan: null },
    { nomor_gigi: 27, keterangan: null },
    { nomor_gigi: 28, keterangan: null },

    // Rahang Bawah Kiri (Quadrant 3)
    { nomor_gigi: 38, keterangan: null },
    { nomor_gigi: 37, keterangan: null },
    { nomor_gigi: 36, keterangan: null },
    { nomor_gigi: 35, keterangan: null },
    { nomor_gigi: 34, keterangan: null },
    { nomor_gigi: 33, keterangan: null },
    { nomor_gigi: 32, keterangan: null },
    { nomor_gigi: 31, keterangan: null },

    // Rahang Bawah Kanan (Quadrant 4)
    { nomor_gigi: 41, keterangan: null },
    { nomor_gigi: 42, keterangan: null },
    { nomor_gigi: 43, keterangan: null },
    { nomor_gigi: 44, keterangan: null },
    { nomor_gigi: 45, keterangan: null },
    { nomor_gigi: 46, keterangan: null },
    { nomor_gigi: 47, keterangan: null },
    { nomor_gigi: 48, keterangan: null },

    { nomor_gigi: 55, keterangan: null },
    { nomor_gigi: 54, keterangan: null },
    { nomor_gigi: 53, keterangan: null },
    { nomor_gigi: 52, keterangan: null },
    { nomor_gigi: 51, keterangan: null },

    { nomor_gigi: 61, keterangan: null },
    { nomor_gigi: 62, keterangan: null },
    { nomor_gigi: 63, keterangan: null },
    { nomor_gigi: 64, keterangan: null },
    { nomor_gigi: 65, keterangan: null },

    { nomor_gigi: 85, keterangan: null },
    { nomor_gigi: 84, keterangan: null },
    { nomor_gigi: 83, keterangan: null },
    { nomor_gigi: 82, keterangan: null },
    { nomor_gigi: 81, keterangan: null },

    { nomor_gigi: 71, keterangan: null },
    { nomor_gigi: 72, keterangan: null },
    { nomor_gigi: 73, keterangan: null },
    { nomor_gigi: 74, keterangan: null },
    { nomor_gigi: 75, keterangan: null },
];


var odontogram_keterangan = [
    { nomor_aksi: 100, ket_aksi: null },//aksi hapus
    { nomor_aksi: 1, ket_aksi: 'amf' },
    { nomor_aksi: 2, ket_aksi: 'cof' },
    { nomor_aksi: 3, ket_aksi: 'fis' },
    { nomor_aksi: 4, ket_aksi: 'nvt' },
    { nomor_aksi: 5, ket_aksi: 'rct' },
    { nomor_aksi: 6, ket_aksi: 'non' },
    { nomor_aksi: 7, ket_aksi: 'une' },
    { nomor_aksi: 8, ket_aksi: 'pre' },
    { nomor_aksi: 9, ket_aksi: 'uno' },
    { nomor_aksi: 10, ket_aksi: 'car' },
    { nomor_aksi: 11, ket_aksi: 'cfr' },
    { nomor_aksi: 12, ket_aksi: 'fmc' },
    { nomor_aksi: 13, ket_aksi: 'poc' },
    { nomor_aksi: 14, ket_aksi: 'rrx' },
    { nomor_aksi: 15, ket_aksi: 'mis' },
    { nomor_aksi: 16, ket_aksi: 'ipx' },
    { nomor_aksi: 17, ket_aksi: 'prd / fld' },
    { nomor_aksi: 18, ket_aksi: null },
    { nomor_aksi: 19, ket_aksi: null },
    { nomor_aksi: 20, ket_aksi: null },
    { nomor_aksi: 21, ket_aksi: null },
    { nomor_aksi: 22, ket_aksi: null },
    { nomor_aksi: 23, ket_aksi: null },
    { nomor_aksi: 24, ket_aksi: null },
    { nomor_aksi: 25, ket_aksi: null },
    { nomor_aksi: 26, ket_aksi: null },
];

var groupedDMF = {
    D: ["cof", "fis", "car", "cfr", "poc", "rrx", "mis", "ipx"],
    M: ["non", "une", "uno", "prd / fld"],
    F: ["amf", "rct", "nvt", "fmc", "pre"]
};


const teethTable = [
    { leftAdult: "11", leftChild: "51", rightChild: "61", rightAdult: "21", hasDoubleInput: true, is_table: 'tabel_satu' },
    { leftAdult: "12", leftChild: "52", rightChild: "62", rightAdult: "22", hasDoubleInput: true, is_table: 'tabel_satu' },
    { leftAdult: "13", leftChild: "53", rightChild: "63", rightAdult: "23", hasDoubleInput: true, is_table: 'tabel_satu' },
    { leftAdult: "14", leftChild: "54", rightChild: "64", rightAdult: "24", hasDoubleInput: true, is_table: 'tabel_satu' },
    { leftAdult: "15", leftChild: "55", rightChild: "65", rightAdult: "25", hasDoubleInput: true, is_table: 'tabel_satu' },
    { leftAdult: "16", leftChild: null, rightChild: null, rightAdult: "26", hasDoubleInput: false, is_table: 'tabel_satu' },
    { leftAdult: "17", leftChild: null, rightChild: null, rightAdult: "27", hasDoubleInput: false, is_table: 'tabel_satu' },
    { leftAdult: "18", leftChild: null, rightChild: null, rightAdult: "28", hasDoubleInput: false, is_table: 'tabel_satu' },
    { leftAdult: "48", leftChild: null, rightChild: null, rightAdult: "38", hasDoubleInput: false, is_table: 'tabel_dua' },
    { leftAdult: "47", leftChild: null, rightChild: null, rightAdult: "37", hasDoubleInput: false, is_table: 'tabel_dua' },
    { leftAdult: "46", leftChild: null, rightChild: null, rightAdult: "36", hasDoubleInput: false, is_table: 'tabel_dua' },
    { leftAdult: "45", leftChild: "85", rightChild: "75", rightAdult: "35", hasDoubleInput: true, is_table: 'tabel_dua' },
    { leftAdult: "44", leftChild: "84", rightChild: "74", rightAdult: "34", hasDoubleInput: true, is_table: 'tabel_dua' },
    { leftAdult: "43", leftChild: "83", rightChild: "73", rightAdult: "33", hasDoubleInput: true, is_table: 'tabel_dua' },
    { leftAdult: "42", leftChild: "82", rightChild: "72", rightAdult: "32", hasDoubleInput: true, is_table: 'tabel_dua' },
    { leftAdult: "41", leftChild: "81", rightChild: "71", rightAdult: "31", hasDoubleInput: true, is_table: 'tabel_dua' }
];

var odontogram_arr = [];
var odontogram_bridge_arr = [];
var final_odontogram_arr = [];

var savedData;

$(document).ready(function () {
    init_table();
    init_table_resume();

    get_data_odontogram();
    get_data_diagnosa();
    get_data_pemeriksaan_fisik();
    get_resume_medis();
});

function init_table() {
    var td_table = '';
    var td_table_dua = '';
    for (let index = 0; index < teethTable.length; index++) {
        if (teethTable[index]['is_table'] == 'tabel_satu') {
            td_table = td_table + '<tr>';
            if (teethTable[index]['leftAdult'] != null) {
                if (teethTable[index]['leftChild'] != null) {
                    td_table = td_table + `<td class="text-center" style="width:8%"><button class="btn btn-sm m-1 btn-success" type="button" onclick="directEdit('` + teethTable[index]['leftAdult'] + `')">` + teethTable[index]['leftAdult'] + '</button>' +
                        `<button class="btn btn-sm m-1 btn-success" type="button" onclick="directEdit('` + teethTable[index]['leftChild'] + `')">[` + teethTable[index]['leftChild'] + ']</button></td>' +
                        '<td class="p-1"><div class="row">' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['leftAdult'] + ': </span>' +
                        '<span class="viewketgigi" id="viewketgigi' + teethTable[index]['leftAdult'] + '"></span>' +
                        '</div>' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['leftChild'] + ': </span>' +
                        '<span class="viewketgigi" id="viewketgigi' + teethTable[index]['leftChild'] + '"></span>' +
                        '</div></div>' +
                        '</td>';
                } else {
                    td_table = td_table + `<td class="text-center" style="width:8%"><button class="btn btn-sm m-1 btn-success" type="button" onclick="directEdit('` + teethTable[index]['leftAdult'] + `')">` + teethTable[index]['leftAdult'] + '</button></td>' +
                        '<td class="p-1">' +
                        '<span class="viewketgigi" id="viewketgigi' + teethTable[index]['leftAdult'] + '"></span>' +
                        '</td>';
                }
            }

            if (teethTable[index]['rightAdult'] != null) {
                if (teethTable[index]['rightChild'] != null) {
                    td_table = td_table + '<td class="p-1"><div class="row">' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['rightChild'] + ': </span>' +
                        '<span class="viewketgigi" id="viewketgigi' + teethTable[index]['rightChild'] + '"></span>' +
                        '</div>' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['rightAdult'] + ': </span>' +
                        '<span class="viewketgigi" id="viewketgigi' + teethTable[index]['rightAdult'] + '"></span>' +
                        '</div></div>' +
                        `</td><td class="text-center" style="width:8%"><button class="btn btn-sm m-1 btn-success" type="button" onclick="directEdit('` + teethTable[index]['rightChild'] + `')"> [` + teethTable[index]['rightChild'] + `]</button><button class="btn btn-sm m-1 btn-success" type="button" onclick="directEdit('` + teethTable[index]['rightAdult'] + `')">` + teethTable[index]['rightAdult'] + '</button></td>';
                } else {
                    td_table = td_table + '<td class="p-1">' +
                        '<span class="viewketgigi" id="viewketgigi' + teethTable[index]['leftAdult'] + '"></span>' +
                        '</td>' +
                        `</td><td class="text-center" style="width:8%"><button class="btn btn-sm m-1 btn-success" type="button" onclick="directEdit('` + teethTable[index]['rightAdult'] + `')">` + teethTable[index]['rightAdult'] + '</button></td>';
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
                    td_table_dua = td_table_dua + `<td class="text-center" style="width:8%"><button class="btn btn-sm m-1 btn-success" type="button" onclick="directEdit('` + teethTable[index]['leftAdult'] + `')">` + teethTable[index]['leftAdult'] +
                        `</button><button class="btn btn-sm m-1 btn-success" type="button" onclick="directEdit('` + teethTable[index]['leftChild'] + `')">[` + teethTable[index]['leftChild'] + ']</button></td>' +
                        '<td class="p-1"><div class="row">' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['leftAdult'] + ': </span>' +
                        '<span class="viewketgigi" id="viewketgigi' + teethTable[index]['leftAdult'] + '"></span>' +
                        '</div>' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['leftChild'] + ': </span>' +
                        '<span class="viewketgigi" id="viewketgigi' + teethTable[index]['leftChild'] + '"></span>' +
                        '</div></div>' +
                        '</td>';
                } else {
                    td_table_dua = td_table_dua + `<td class="text-center" style="width:8%"><button class="btn btn-sm m-1 btn-success" type="button" onclick="directEdit('` + teethTable[index]['leftAdult'] + `')">` + teethTable[index]['leftAdult'] + '</button></td>' +
                        '<td class="p-1">' +
                        '<span class="viewketgigi" id="viewketgigi' + teethTable[index]['leftAdult'] + '"></span>' +
                        '</td>';
                }
            }

            if (teethTable[index]['rightAdult'] != null) {
                if (teethTable[index]['rightChild'] != null) {
                    td_table_dua = td_table_dua + '<td class="p-1"><div class="row">' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['rightChild'] + ': </span>' +
                        '<span class="viewketgigi" id="viewketgigi' + teethTable[index]['rightChild'] + '"></span>' +
                        '</div>' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['rightAdult'] + ': </span>' +
                        '<span class="viewketgigi" id="viewketgigi' + teethTable[index]['rightAdult'] + '"></span>' +
                        '</div>' +
                        '</div>' +
                        `</td><td class="text-center" style="width:8%"><button class="btn btn-sm m-1 btn-success" type="button" onclick="directEdit('` + teethTable[index]['rightChild'] + `')"> [` + teethTable[index]['rightChild'] +
                        `]</button> <button class="btn btn-sm m-1 btn-success" type="button" onclick="directEdit('` + teethTable[index]['rightAdult'] + `')">` + teethTable[index]['rightAdult'] + '</button></td>';
                } else {
                    td_table_dua = td_table_dua + '<td class="p-1">' +
                        '<span class="viewketgigi" id="viewketgigi' + teethTable[index]['rightAdult'] + '"></span>' +
                        '</td>' +
                        `</td><td class="text-center" style="width:8%"><button class="btn btn-sm m-1 btn-success" type="button" onclick="directEdit('` + teethTable[index]['rightAdult'] + `')">` + teethTable[index]['rightAdult'] + '</button></td>';
                }
            }
            td_table_dua = td_table_dua + '</tr>';
        }
    }
    $('#table_satu').html(td_table);
    $('#table_dua').html(td_table_dua);
}

function init_table_resume() {
    var td_table = '';
    var td_table_dua = '';
    for (let index = 0; index < teethTable.length; index++) {
        if (teethTable[index]['is_table'] == 'tabel_satu') {
            td_table = td_table + '<tr>';
            if (teethTable[index]['leftAdult'] != null) {
                if (teethTable[index]['leftChild'] != null) {
                    td_table = td_table + `<td class="text-center" style="width:8%">` + teethTable[index]['leftAdult'] + '' +
                        `[` + teethTable[index]['leftChild'] + ']</td>' +
                        '<td class="p-1"><div class="row">' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['leftAdult'] + ': </span>' +
                        '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['leftAdult'] + '"></span>' +
                        '</div>' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['leftChild'] + ': </span>' +
                        '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['leftChild'] + '"></span>' +
                        '</div></div>' +
                        '</td>';
                } else {
                    td_table = td_table + `<td class="text-center" style="width:8%">` + teethTable[index]['leftAdult'] + '</td>' +
                        '<td class="p-1">' +
                        '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['leftAdult'] + '"></span>' +
                        '</td>';
                }
            }

            if (teethTable[index]['rightAdult'] != null) {
                if (teethTable[index]['rightChild'] != null) {
                    td_table = td_table + '<td class="p-1"><div class="row">' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['rightChild'] + ': </span>' +
                        '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['rightChild'] + '"></span>' +
                        '</div>' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['rightAdult'] + ': </span>' +
                        '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['rightAdult'] + '"></span>' +
                        '</div></div>' +
                        `</td><td class="text-center" style="width:8%">[` + teethTable[index]['rightChild'] + `]` + teethTable[index]['rightAdult'] + '</td>';
                } else {
                    td_table = td_table + '<td class="p-1">' +
                        '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['leftAdult'] + '"></span>' +
                        '</td>' +
                        `</td><td class="text-center" style="width:8%">` + teethTable[index]['rightAdult'] + '</td>';
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
                    td_table_dua = td_table_dua + `<td class="text-center" style="width:8%">` + teethTable[index]['leftAdult'] +
                        `[` + teethTable[index]['leftChild'] + ']</td>' +
                        '<td class="p-1"><div class="row">' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['leftAdult'] + ': </span>' +
                        '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['leftAdult'] + '"></span>' +
                        '</div>' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['leftChild'] + ': </span>' +
                        '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['leftChild'] + '"></span>' +
                        '</div></div>' +
                        '</td>';
                } else {
                    td_table_dua = td_table_dua + `<td class="text-center" style="width:8%">` + teethTable[index]['leftAdult'] + '</td>' +
                        '<td class="p-1">' +
                        '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['leftAdult'] + '"></span>' +
                        '</td>';
                }
            }

            if (teethTable[index]['rightAdult'] != null) {
                if (teethTable[index]['rightChild'] != null) {
                    td_table_dua = td_table_dua + '<td class="p-1"><div class="row">' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['rightChild'] + ': </span>' +
                        '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['rightChild'] + '"></span>' +
                        '</div>' +
                        '<div class="col-md-6">' +
                        '<span>' + teethTable[index]['rightAdult'] + ': </span>' +
                        '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['rightAdult'] + '"></span>' +
                        '</div>' +
                        '</div>' +
                        `</td><td class="text-center" style="width:8%">[` + teethTable[index]['rightChild'] +
                        `]` + teethTable[index]['rightAdult'] + '</td>';
                } else {
                    td_table_dua = td_table_dua + '<td class="p-1">' +
                        '<span class="rmd_viewketgigi" id="rmd_viewketgigi' + teethTable[index]['rightAdult'] + '"></span>' +
                        '</td>' +
                        `</td><td class="text-center" style="width:8%">` + teethTable[index]['rightAdult'] + '</td>';
                }
            }
            td_table_dua = td_table_dua + '</tr>';
        }
    }
    $('#table_ketodontogram_satu').html(td_table);
    $('#table_ketodontogram_dua').html(td_table_dua);
}

function init_value_odontogram() {
    $('.viewketgigi').html('');
    for (let index = 0; index < data_odontogram.length; index++) {
        $('#viewketgigi' + data_odontogram[index]['nomor_gigi']).html(data_odontogram[index]['keterangan']);
    }
}

function init_value_odontogram_resume(data_odontogram_resume) {
    console.log(data_odontogram_resume);
    $('.rmd_viewketgigi').html('');
    for (let index = 0; index < data_odontogram_resume.length; index++) {
        $('#rmd_viewketgigi' + data_odontogram_resume[index]['nomor_gigi']).html(data_odontogram_resume[index]['keterangan']);
    }
}

function get_data_odontogram() {
    var norm = $('#no_rm').val();
    var noreg = $('#no_registrasikunjungan').val();
    $.ajax({
        type: 'GET',
        url: '/kunjungan/get-odontogram/' + noreg + '/' + norm,
        success: function (data) {
            if (data.length > 0) {
                $.each(data, function (key, value) {
                    savedData = JSON.parse(value.gambar_odontogram);
                    data_odontogram = JSON.parse(value.keterangan_odontogram);
                    final_odontogram_arr = JSON.parse(value.gambar_odontogram);
                    $('#tgl_pemeriksaan').val(value.tgl_pemeriksaan);
                    $('#occulusi').val(value.occulusi);
                    $('#torus_palatinus').val(value.torus_palatinus);
                    $('#torus_madibularis').val(value.torus_madibularis);
                    $('#palatum').val(value.palatum);
                    $('#diastema').val(value.diastema);
                    $('#ket_diastema').val(value.ket_diastema);
                    $('#gigi_anomali').val(value.gigi_anomali);
                    $('#ket_gigi_anomali').val(value.ket_gigi_anomali);
                    $('#lain_lain').val(value.lain_lain);
                    $('#input_d').val(value.input_d);
                    $('#input_f').val(value.input_f);
                    $('#input_m').val(value.input_m);
                    $("#pills-pemeriksaan-odontogram-tab").removeClass("btn-secondary");
                    $("#pills-pemeriksaan-odontogram-tab").addClass("btn-success");
                });
                odontogram_init_all_function();
            } else {
                odontogram_init_all_function();
            }
        }, complete: function () {
            init_value_odontogram();
        }
    });
}

function get_data_diagnosa() {
    var norm = $('#no_rm').val();
    var noreg = $('#no_registrasikunjungan').val();
    $.ajax({
        type: 'GET',
        url: '/kunjungan/get-diagnosa/' + noreg + '/' + norm,
        success: function (data) {
            if (data.length > 0) {
                $.each(data, function (key, value) {
                    $('#diagnosa').val(value.diagnosa);
                    $("#pills-diagnosa-tab").removeClass("btn-secondary");
                    $("#pills-diagnosa-tab").addClass("btn-success");
                });
            }
        }, complete: function () {
        }
    });
}

function get_data_pemeriksaan_fisik() {
    var norm = $('#no_rm').val();
    var noreg = $('#no_registrasikunjungan').val();
    $.ajax({
        type: 'GET',
        url: '/kunjungan/get-pemeriksaan-fisik/' + noreg + '/' + norm,
        success: function (data) {
            if (data.length > 0) {
                $.each(data, function (key, value) {
                    $('#keluhan_utama').val(value.keluhan_utama);
                    $('#spo2').val(value.spo);
                    $('#suhu').val(value.suhu);
                    $('#nadi').val(value.nadi);
                    $('#pernafasaan').val(value.pernafasaan);
                    $('#sistolik').val(value.sistolik);
                    $('#diastolik').val(value.diastolik);
                    $("#pills-pemeriksaan-fisik-tab").removeClass("btn-secondary");
                    $("#pills-pemeriksaan-fisik-tab").addClass("btn-success");
                });
            }
        }, complete: function () {
        }
    });
}

function get_resume_medis() {
    var norm = $('#no_rm').val();
    var noreg = $('#no_registrasikunjungan').val();
    $.ajax({
        type: 'GET',
        url: '/kunjungan/get-resume-medis/' + noreg + '/' + norm,
        success: function (data) {
            if (data.diagnosa.length > 0 && data.pemeriksaan_fisik.length > 0 && data.odontogram.length > 0) {
                $.each(data.kunjungan, function (key_k, val_k) {
                    $('#rmd_no_kunjungan').html(val_k.no_registrasikunjungan);
                    $('#rmd_tgl_kunjungan').html(val_k.tanggal_kunjungan);
                    $('#rmd_pasien').html(val_k.no_rm + ' - ' + val_k.nama_pasien);
                    $('#rmd_poli').html(val_k.nama_poli);
                    $('#rmd_dokter').html(val_k.nama_dokter);
                });
                $.each(data.diagnosa, function (key, value) {
                    $('#rmd_diagnosa').html(value.diagnosa);
                });
                $.each(data.pemeriksaan_fisik, function (key_pf, val_pf) {
                    $('#rmd_keluhan_utama').html(val_pf.keluhan_utama);
                    $('#rmd_sistolik').html(val_pf.sistolik);
                    $('#rmd_diastolik').html(val_pf.diastolik);
                    $('#rmd_suhu').html(val_pf.suhu);
                    $('#rmd_nadi').html(val_pf.nadi);
                    $('#rmd_pernafasan').html(val_pf.pernafasaan);
                    $('#rmd_spo').html(val_pf.spo);
                });
                $('#pills-resume-medis-tab').show();
                $('#btn_cetak_resume').show();

                var value_odontogram;
                var keterangan_odontogram;
                var tr_keterangan_odontogram='';
                $.each(data.odontogram, function (key_od, val_od) {
                    value_odontogram = JSON.parse(val_od.gambar_odontogram);
                    keterangan_odontogram = JSON.parse(val_od.keterangan_odontogram);
                    $('#rmd_occulusi').html(val_od.occulusi);
                    $('#rmd_torus_palatinus').html(val_od.torus_palatinus);
                    $('#rmd_torus_madibularis').html(val_od.torus_madibularis);
                    $('#rmd_palatum').html(val_od.palatum);
                    var diastema;
                    if(val_od.ket_diastema!=''){
                        diastema=val_od.diastema+', '+val_od.ket_diastema;
                    }else{
                        diastema=val_od.diastema;
                    }

                    var val_gigi_anomali;
                    if(val_od.ket_gigi_anomali!=''){
                        val_gigi_anomali=val_od.gigi_anomali+', '+val_od.ket_gigi_anomali;
                    }else{
                        val_gigi_anomali=val_od.gigi_anomali;
                    }
                    $('#rmd_diastema').html(diastema);
                    $('#rmd_gigi_anomali').html(val_gigi_anomali);
                    $('#rmd_lain_lain').html(val_od.lain_lain);
                    $('#rmd_dmf').html(val_od.input_d+' '+val_od.input_m+' '+val_od.input_f);
                });

                init_value_odontogram_resume(keterangan_odontogram);
                // for (let i = 0; i < keterangan_odontogram.length; i++) {
                //     if (keterangan_odontogram[i].keterangan && keterangan_odontogram[i].keterangan !== "") {
                //         tr_keterangan_odontogram=tr_keterangan_odontogram+'<tr>'+
                //         '<td width="11%">&nbsp;Gigi Nomor '+keterangan_odontogram[i].nomor_gigi+'</td>'+
                //         '<td>&nbsp;'+keterangan_odontogram[i].keterangan+'</td></tr>';
                //     }
                // }
                // $('#table_ket_odontogram').html(tr_keterangan_odontogram);
                init_odontogram_resume(value_odontogram);
            }
        }, complete: function () {
        }
    });
}


function get_click_action(nomor_gigi, mode) {
    $('#label_gigi').html(nomor_gigi);
    var data_gigi = cariGigi(nomor_gigi);
    var ket_tindakan = cariKetOdontogram(mode);
    var keterangan = '';

    if (mode != 100) {
        if (data_gigi.keterangan == null) {
            if (ket_tindakan.ket_aksi != null) {
                keterangan = ket_tindakan.ket_aksi;
            } else {
                keterangan = '';
            }
        } else {
            if (ket_tindakan.ket_aksi != null) {
                var final_ket = tambahKata(data_gigi.keterangan, ket_tindakan.ket_aksi);
                keterangan = final_ket;
            } else {
                keterangan = data_gigi.keterangan;
            }
        }

        $('#inp-kode-gigi').val(nomor_gigi);
        $('#inp-keterangan-gigi').val(keterangan);
        $('#form_ket_odontogram').show();
        $(".button-action").attr("disabled", true);
    } else {
        updateKeteranganGigi(nomor_gigi, null);
        init_value_odontogram();
    }
}

function directEdit(nomor_gigi) {
    var data_gigi = cariGigi(nomor_gigi);
    var keterangan = data_gigi.keterangan;
    $('#mdl-label').html(nomor_gigi);
    $('#mdl-kode-gigi').val(nomor_gigi);
    $('#mdl-keterangan-gigi').val(keterangan);

    $('#editgigimodal').modal({
        backdrop: 'static',
        keyboard: false
    });
}

function saveKeteranganOdontogram() {
    var kode_gigi = $('#inp-kode-gigi').val();
    var keterangan = $('#inp-keterangan-gigi').val();
    updateKeteranganGigi(kode_gigi, keterangan);
    closeFormOdontogram();
    init_value_odontogram();
}

function saveKeteranganOdontogrammodal() {
    var kode_gigi = $('#mdl-kode-gigi').val();
    var keterangan = $('#mdl-keterangan-gigi').val();
    updateKeteranganGigi(kode_gigi, keterangan);
    closeFormOdontogram();
    init_value_odontogram();
    $('#editgigimodal').modal('toggle');
}

function updateKeteranganGigi(nomor, kataBaru) {
    for (let i = 0; i < data_odontogram.length; i++) {
        if (data_odontogram[i].nomor_gigi == nomor) {
            data_odontogram[i].keterangan = kataBaru;
            break;
        }
    }
}

function tambahKata(kalimat, kata) {
    const arr = kalimat.trim().split(/\s+/);
    const sudahAda = arr.some(k => k.includes(kata));
    if (sudahAda) {
        return kalimat.trim();
    }
    return (kalimat.trim() + " " + kata).trim();
}

function cariGigi(nomor) {
    for (let i = 0; i < data_odontogram.length; i++) {
        if (data_odontogram[i].nomor_gigi == nomor) {
            return data_odontogram[i];
        }
    }
    return null;
}

function closeFormOdontogram() {
    $(".button-action").attr("disabled", false);
    $('#form_ket_odontogram').hide();
}

function cariKetOdontogram(nomor) {
    for (let i = 0; i < odontogram_keterangan.length; i++) {
        if (odontogram_keterangan[i].nomor_aksi == nomor) {
            return odontogram_keterangan[i];
        }
    }
    return null;
}

function hitungDMF() {
    const count = { D: 0, M: 0, F: 0 };
    const details = [];

    data_odontogram.forEach(g => {
        const raw = (g.keterangan || "").toLowerCase().trim();
        if (!raw) return;

        // Normalisasi keterangan
        const norm = raw.replace(/[^a-z0-9]+/g, " ").replace(/\s+/g, " ").trim();

        // cek per kategori
        const hasD = groupedDMF.D.some(code => norm.includes(code));
        const hasM = groupedDMF.M.some(code => norm.includes(code));
        const hasF = groupedDMF.F.some(code => norm.includes(code));

        let kategori = null;

        // PRIORITAS WHO
        if (hasD) {
            kategori = "D";
        } else if (hasM) {
            kategori = "M";
        } else if (hasF) {
            kategori = "F";
        }

        if (kategori) {
            count[kategori]++;
            details.push({
                nomor_gigi: g.nomor_gigi,
                keterangan: g.keterangan,
                kategori
            });
        }
    });

    var label_detail = '';
    for (let idetail = 0; idetail < details.length; idetail++) {
        label_detail = label_detail + '<li> Gigi Nomor ' + details[idetail].nomor_gigi + ' - ' + details[idetail].keterangan + ' - ' + details[idetail].kategori + '</li>';

    }
    //   console.log(count);
    //   console.log(details);
    $('#input_d').val(count.D);
    $('#input_m').val(count.M);
    $('#input_f').val(count.F);
    Swal.fire({
        title: "<strong>Rincian Perhitungan <u>DMF</u></strong>",
        icon: "info",
        html: `
    Detail Perhitungan : <ul>`+ label_detail + `</ul>`,
        showCloseButton: true,
        showCancelButton: false,
        focusConfirm: false,
        showConfirmButton: false,
    });
}

function simpan_asessmen() {
    Swal.fire({
        title: "Simpan Pemeriksaan?",
        showCancelButton: true,
        confirmButtonText: "Save",
        denyButtonText: `Don't save`
    }).then((result) => {
        if (result.value) {
            if ($('#tgl_pemeriksaan').val() == '' ||
                $('#input_d').val() == '' ||
                $('#input_m').val() == '' ||
                $('#input_f').val() == '') {
                Swal.fire("Semua data harus diisi", "", "info");
            } else {
                if (final_odontogram_arr.length <= 0) {
                    Swal.fire("Odontogram harus diisi", "", "info");
                } else {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: 'POST',
                        url: '/kunjungan/simpan-odontogram',
                        data: {
                            '_token': $('input[name=_token]').val(),
                            'no_rm': $('#no_rm').val(),
                            'no_registrasikunjungan': $('#no_registrasikunjungan').val(),
                            'tgl_pemeriksaan': $('#tgl_pemeriksaan').val(),
                            'occulusi': $('#occulusi').val(),
                            'torus_palatinus': $('#torus_palatinus').val(),
                            'torus_madibularis': $('#torus_madibularis').val(),
                            'palatum': $('#palatum').val(),
                            'diastema': $('#diastema').val(),
                            'ket_diastema': $('#ket_diastema').val(),
                            'gigi_anomali': $('#gigi_anomali').val(),
                            'ket_gigi_anomali': $('#ket_gigi_anomali').val(),
                            'lain_lain': $('#lain_lain').val(),
                            'input_d': $('#input_d').val(),
                            'input_m': $('#input_m').val(),
                            'input_f': $('#input_f').val(),
                            'final_odontogram_arr': JSON.stringify(final_odontogram_arr),
                            'data_odontogram': JSON.stringify(data_odontogram)
                        },
                        success: function () {
                            $("#pills-pemeriksaan-odontogram-tab").removeClass("btn-secondary");
                            $("#pills-pemeriksaan-odontogram-tab").addClass("btn-success");
                            Swal.fire("Saved!", "", "success");
                        }, complete: function () {
                        }, error: function () {
                        }
                    });
                }
            }
        }
    });
}

function simpan_diagnosa() {
    Swal.fire({
        title: "Simpan Diagnosa?",
        showCancelButton: true,
        confirmButtonText: "Save",
        denyButtonText: `Don't save`
    }).then((result) => {
        if (result.value) {
            if ($('#diagnosa').val() == '') {
                Swal.fire("Semua data harus diisi", "", "info");
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '/kunjungan/simpan-diagnosa',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'no_rm': $('#no_rm').val(),
                        'no_registrasikunjungan': $('#no_registrasikunjungan').val(),
                        'diagnosa': $('#diagnosa').val()
                    },
                    success: function () {
                        $("#pills-diagnosa-tab").removeClass("btn-secondary");
                        $("#pills-diagnosa-tab").addClass("btn-success");
                        Swal.fire("Saved!", "", "success");
                    }, complete: function () {
                    }, error: function () {
                    }
                });
            }
        }
    });
}

function simpan_pemeriksaan_fisik() {
    Swal.fire({
        title: "Simpan Pemeriksaan Fisik?",
        showCancelButton: true,
        confirmButtonText: "Save",
        denyButtonText: `Don't save`
    }).then((result) => {
        if (result.value) {
            if ($('#diagnosa').val() == '') {
                Swal.fire("Semua data harus diisi", "", "info");
            } else {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: 'POST',
                    url: '/kunjungan/simpan-pemeriksaan-fisik',
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'no_rm': $('#no_rm').val(),
                        'no_registrasikunjungan': $('#no_registrasikunjungan').val(),
                        'keluhan_utama': $('#keluhan_utama').val(),
                        'spo2': $('#spo2').val(),
                        'suhu': $('#suhu').val(),
                        'nadi': $('#nadi').val(),
                        'pernafasaan': $('#pernafasaan').val(),
                        'sistolik': $('#sistolik').val(),
                        'diastolik': $('#diastolik').val()
                    },
                    success: function () {
                        $("#pills-pemeriksaan-fisik-tab").removeClass("btn-secondary");
                        $("#pills-pemeriksaan-fisik-tab").addClass("btn-success");
                        Swal.fire("Saved!", "", "success");
                    }, complete: function () {
                    }, error: function () {
                    }
                });
            }
        }
    });
}

$("#odontogram").odontogram('init', {
    width: "1200px",
    height: "430px"
});

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

function odontogram_init_all_function() {
    // 1. Ambil instance odontogram
    const odonto = $("#odontogram").data('odontogram');

    if (savedData !== undefined) {
        // 2. Konversi data gigi biasa ke format geometry
        const teethGeometry = odonto.setGeometryByPos(savedData.teeth); // Ini return objek geometry

        // 3. Tambahkan bridge sebagai objek literal (bukan instance!)
        // Gunakan key khusus agar tidak bentrok
        if (!teethGeometry["BRIDGES"]) teethGeometry["BRIDGES"] = [];
        for (const bridge of savedData.bridges) {
            // Pastikan x/y tetap string atau number — tidak masalah karena convertGeomFromObject parse otomatis
            teethGeometry["BRIDGES"].push(bridge);
        }

        // 4. Set SEMUA geometri sekaligus
        $("#odontogram").odontogram('setGeometry', teethGeometry);
    }

    $('#odontogram').on('change', function (_, geometry) {
        odontogram_arr = [];
        odontogram_bridge_arr = [];
        final_odontogram_arr = [];
        Object.keys(geometry).forEach(key => {
            const items = geometry[key];
            items.forEach(item => {
                if (item.name == 'BRIDGE') {
                    odontogram_bridge_arr.push(item);
                } else {
                    odontogram_arr.push({
                        code: item.name,
                        pos: item.pos ?? "" // kalau tidak ada pos, kosong
                    });
                }
            });
        });
        final_odontogram_arr = {
            teeth: odontogram_arr,
            bridges: odontogram_bridge_arr,
        };
        // console.log(geometry);
        // console.log(final_odontogram_arr);
    })

    $("#ODONTOGRAM_MODE_HAPUS").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_HAPUS);
    });
    $("#ODONTOGRAM_MODE_DEFAULT").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_DEFAULT);
    });
    $("#ODONTOGRAM_MODE_AMF").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_AMF);
    });
    $("#ODONTOGRAM_MODE_COF").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_COF);
    });
    $("#ODONTOGRAM_MODE_FIS").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_FIS);
    });
    $("#ODONTOGRAM_MODE_NVT").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_NVT);
    });
    $("#ODONTOGRAM_MODE_RCT").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_RCT);
    });
    $("#ODONTOGRAM_MODE_NON").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_NON);
    });
    $("#ODONTOGRAM_MODE_UNE").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_UNE);
    });
    $("#ODONTOGRAM_MODE_PRE").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_PRE);
    });
    $("#ODONTOGRAM_MODE_ANO").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_ANO);
    });
    $("#ODONTOGRAM_MODE_CARIES").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_CARIES);
    });
    $("#ODONTOGRAM_MODE_CFR").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_CFR);
    });
    $("#ODONTOGRAM_MODE_FMC").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_FMC);
    });
    $("#ODONTOGRAM_MODE_POC").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_POC);
    });
    $("#ODONTOGRAM_MODE_RRX").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_RRX);
    });
    $("#ODONTOGRAM_MODE_MIS").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_MIS);
    });
    $("#ODONTOGRAM_MODE_IPX").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_IPX);
    });
    $("#ODONTOGRAM_MODE_FRM_ACR").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_FRM_ACR);
    });
    $("#ODONTOGRAM_MODE_BRIDGE").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_BRIDGE);
    });
    $("#ODONTOGRAM_MODE_ARROW_TOP_LEFT").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_ARROW_TOP_LEFT);
    })
    $("#ODONTOGRAM_MODE_ARROW_TOP_RIGHT").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_ARROW_TOP_RIGHT);
    })
    $("#ODONTOGRAM_MODE_ARROW_TOP_TURN_LEFT").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_ARROW_TOP_TURN_LEFT);
    })
    $("#ODONTOGRAM_MODE_ARROW_TOP_TURN_RIGHT").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_ARROW_TOP_TURN_RIGHT);
    })
    $("#ODONTOGRAM_MODE_ARROW_BOTTOM_LEFT").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_ARROW_BOTTOM_LEFT);
    })
    $("#ODONTOGRAM_MODE_ARROW_BOTTOM_RIGHT").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_ARROW_BOTTOM_RIGHT);
    })
    $("#ODONTOGRAM_MODE_ARROW_BOTTOM_TURN_LEFT").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_ARROW_BOTTOM_TURN_LEFT);
    })
    $("#ODONTOGRAM_MODE_ARROW_BOTTOM_TURN_RIGHT").click(function () {
        $("#odontogram").odontogram('setMode', ODONTOGRAM_MODE_ARROW_BOTTOM_TURN_RIGHT);
    })
}
