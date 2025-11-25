

var data_odontogram = [
    // Rahang Atas Kanan (Quadrant 1)
    { nomor_gigi: 18, keterangan: 'sou car' },
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
    { nomor_gigi: 28, keterangan: 'met' },

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
    { nomor_gigi: 48, keterangan: 'test' },
];

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
    $("#odontogram").odontogram('init', {
        width: "900px",
        height: "310px"
    });

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
                    td_table = td_table + '<td class="p-1">' + teethTable[index]['leftAdult'] + ' [' + teethTable[index]['leftChild'] + ']</td>' +
                        '<td class="p-1"><div class="row">' +
                        '<div class="col-md-6"><div class="input-group mb-2 mr-sm-2">' +
                        '<div class="input-group-prepend">' +
                        '<div class="input-group-text">' + teethTable[index]['leftAdult'] + '</div>' +
                        '</div>' +
                        '<input type="text" class="form-control input-gigi" id="inputgigi' + teethTable[index]['leftAdult'] + '" placeholder="Kondisi Gigi ' + teethTable[index]['leftAdult'] + '...">' +
                        '</div></div>' +
                        '<div class="col-md-6"><div class="input-group mb-2 mr-sm-2">' +
                        '<div class="input-group-prepend">' +
                        '<div class="input-group-text">' + teethTable[index]['leftChild'] + '</div>' +
                        '</div>' +
                        '<input type="text" class="form-control input-gigi" id="inputgigi' + teethTable[index]['leftChild'] + '" placeholder="Kondisi Gigi ' + teethTable[index]['leftChild'] + '...">' +
                        '</div></div>' +
                        '</div>' +
                        '</td>';
                } else {
                    td_table = td_table + '<td class="p-1">' + teethTable[index]['leftAdult'] + '</td>' +
                        '<td class="p-1">' +
                        '<div class="input-group input-group-sm">' +
                        '<input type="text" class="form-control input-gigi" id="inputgigi' + teethTable[index]['leftAdult'] + '" placeholder="Kondisi Gigi ' + teethTable[index]['leftAdult'] + '...">' +
                        '</div>' +
                        '</td>';
                }
            }

            if (teethTable[index]['rightAdult'] != null) {
                if (teethTable[index]['rightChild'] != null) {
                    td_table = td_table + '<td class="p-1"><div class="row">' +
                        '<div class="col-md-6"><div class="input-group mb-2 mr-sm-2">' +
                        '<div class="input-group-prepend">' +
                        '<div class="input-group-text">' + teethTable[index]['rightChild'] + '</div>' +
                        '</div>' +
                        '<input type="text" class="form-control input-gigi" id="inputgigi' + teethTable[index]['rightChild'] + '" placeholder="Kondisi Gigi ' + teethTable[index]['rightChild'] + '...">' +
                        '</div></div>' +
                        '<div class="col-md-6"><div class="input-group mb-2 mr-sm-2">' +
                        '<div class="input-group-prepend">' +
                        '<div class="input-group-text">' + teethTable[index]['rightAdult'] + '</div>' +
                        '</div>' +
                        '<input type="text" class="form-control input-gigi" id="inputgigi' + teethTable[index]['rightAdult'] + '" placeholder="Kondisi Gigi ' + teethTable[index]['rightAdult'] + '...">' +
                        '</div></div>' +
                        '</div>' +
                        '</td><td class="p-1"> [' + teethTable[index]['rightChild'] + '] ' + teethTable[index]['rightAdult'] + '</td>';
                } else {
                    td_table = td_table + '<td class="p-1">' +
                        '<div class="input-group input-group-sm">' +
                        '<input type="text" class="form-control input-gigi" id="inputgigi' + teethTable[index]['rightAdult'] + '" placeholder="Kondisi Gigi ' + teethTable[index]['rightAdult'] + '...">' +
                        '</div>' +
                        '</td><td class="p-1">' + teethTable[index]['rightAdult'] + '</td>';
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
                    td_table_dua = td_table_dua + '<td class="p-1">' + teethTable[index]['leftAdult'] + ' [' + teethTable[index]['leftChild'] + ']</td>' +
                        '<td class="p-1"><div class="row">' +
                        '<div class="col-md-6"><div class="input-group mb-2 mr-sm-2">' +
                        '<div class="input-group-prepend">' +
                        '<div class="input-group-text">' + teethTable[index]['leftAdult'] + '</div>' +
                        '</div>' +
                        '<input type="text" class="form-control input-gigi" id="inputgigi' + teethTable[index]['leftAdult'] + '" placeholder="Kondisi Gigi ' + teethTable[index]['leftAdult'] + '...">' +
                        '</div></div>' +
                        '<div class="col-md-6"><div class="input-group mb-2 mr-sm-2">' +
                        '<div class="input-group-prepend">' +
                        '<div class="input-group-text">' + teethTable[index]['leftChild'] + '</div>' +
                        '</div>' +
                        '<input type="text" class="form-control input-gigi" id="inputgigi' + teethTable[index]['leftChild'] + '" placeholder="Kondisi Gigi ' + teethTable[index]['leftChild'] + '...">' +
                        '</div></div>' +
                        '</div>' +
                        '</td>';
                } else {
                    td_table_dua = td_table_dua + '<td class="p-1">' + teethTable[index]['leftAdult'] + '</td>' +
                        '<td class="p-1">' +
                        '<div class="input-group input-group-sm">' +
                        '<input type="text" class="form-control input-gigi" id="inputgigi' + teethTable[index]['leftAdult'] + '" placeholder="Kondisi Gigi ' + teethTable[index]['leftAdult'] + '...">' +
                        '</div>' +
                        '</td>';
                }
            }

            if (teethTable[index]['rightAdult'] != null) {
                if (teethTable[index]['rightChild'] != null) {
                    td_table_dua = td_table_dua + '<td class="p-1"><div class="row">' +
                        '<div class="col-md-6"><div class="input-group mb-2 mr-sm-2">' +
                        '<div class="input-group-prepend">' +
                        '<div class="input-group-text">' + teethTable[index]['rightChild'] + '</div>' +
                        '</div>' +
                        '<input type="text" class="form-control input-gigi" id="inputgigi' + teethTable[index]['rightChild'] + '" placeholder="Kondisi Gigi ' + teethTable[index]['rightChild'] + '...">' +
                        '</div></div>' +
                        '<div class="col-md-6"><div class="input-group mb-2 mr-sm-2">' +
                        '<div class="input-group-prepend">' +
                        '<div class="input-group-text">' + teethTable[index]['rightAdult'] + '</div>' +
                        '</div>' +
                        '<input type="text" class="form-control input-gigi" id="inputgigi' + teethTable[index]['rightAdult'] + '" placeholder="Kondisi Gigi ' + teethTable[index]['rightAdult'] + '...">' +
                        '</div></div>' +
                        '</div>' +
                        '</td><td class="p-1"> [' + teethTable[index]['rightChild'] + '] ' + teethTable[index]['rightAdult'] + '</td>';
                } else {
                    td_table_dua = td_table_dua + '<td class="p-1">' +
                        '<div class="input-group input-group-sm">' +
                        '<input type="text" class="form-control input-gigi" id="inputgigi' + teethTable[index]['rightAdult'] + '" placeholder="Kondisi Gigi ' + teethTable[index]['rightAdult'] + '...">' +
                        '</div>' +
                        '</td><td class="p-1">' + teethTable[index]['rightAdult'] + '</td>';
                }
            }
            td_table_dua = td_table_dua + '</tr>';
        }
    }
    $('#table_satu').html(td_table);
    $('#table_dua').html(td_table_dua);
}

function init_value_odontogram() {
    $('.input-gigi').val('');
    for (let index = 0; index < data_odontogram.length; index++) {
        $('#inputgigi' + data_odontogram[index]['nomor_gigi']).val(data_odontogram[index]['keterangan']);
    }
}

function get_click_action(nomor_gigi,mode) {
    
}


// $("#odontogram").odontogram('setGeometryByPos', [
//     { code: 'AMF', pos: '18-R' },
//     { code: 'AMF', pos: '18-L' },
//     { code: 'CARIES', pos: '83-L' },
//     { code: 'POC', pos: '84' },
// ]);
$('#odontogram').on('change', function (_, geometry) {
    console.log(geometry)
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