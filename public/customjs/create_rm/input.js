

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
]

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

$(document).ready(function () {


    init_table();
    init_value_odontogram();
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

function init_value_odontogram() {
    $('.viewketgigi').html('');
    for (let index = 0; index < data_odontogram.length; index++) {
        $('#viewketgigi' + data_odontogram[index]['nomor_gigi']).html(data_odontogram[index]['keterangan']);
    }
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
            console.log(data_odontogram[i]);
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
    return null; // jika tidak ditemukan
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
$("#odontogram").odontogram('init', {
    width: "900px",
    height: "330px"
});

const savedData = {
    teeth: [{
        code: 'AMF',
        pos: '18-R'
    },
    {
        code: 'CARIES',
        pos: '84-M'
    }
    ],
    bridges: [{
        "name": "BRIDGE",
        "startVert": [{
            "x": "373.125",
            "y": "245.625"
        },
        {
            "x": "415",
            "y": "287.5"
        }
        ],
        "endVert": [{
            "x": "455",
            "y": "245.625"
        },
        {
            "x": "496.875",
            "y": "287.5"
        }
        ],
        "options": {
            "strokeStyle": "#555"
        }
    },
    {
        "name": "BRIDGE",
        "startVert": [
            {
                "x": "113.75",
                "y": "245.625"
            },
            {
                "x": "155.625",
                "y": "287.5"
            }
        ],
        "endVert": [
            {
                "x": "269.375",
                "y": "245.625"
            },
            {
                "x": "311.25",
                "y": "287.5"
            }
        ],
        "options": {
            "strokeStyle": "#555"
        }
    }
    ]
};

// 1. Ambil instance odontogram
const odonto = $("#odontogram").data('odontogram');

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

$('#odontogram').on('change', function (_, geometry) {
    console.log(geometry);
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