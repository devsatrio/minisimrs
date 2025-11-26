<!DOCTYPE html>
<html>

<head>
    <title>Odontogram</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('customjs/create_rm/jquery.odontogram.js') }}"></script>
    <style type="text/css">
        canvas {
            border: 1px solid #a9a9a9;
        }
    </style>
</head>

<body>
    <canvas id="odontogram" style="margin-top: 15px;">
        Browser anda tidak support canvas, silahkan update browser anda.
    </canvas>
    <br>
    <button type="button" id="ODONTOGRAM_MODE_HAPUS">ODONTOGRAM_MODE_HAPUS</button>
    <button type="button" id="ODONTOGRAM_MODE_DEFAULT">ODONTOGRAM_MODE_DEFAULT</button>
    <button type="button" id="ODONTOGRAM_MODE_AMF">ODONTOGRAM_MODE_AMF</button>
    <button type="button" id="ODONTOGRAM_MODE_COF">ODONTOGRAM_MODE_COF</button>
    <button type="button" id="ODONTOGRAM_MODE_FIS">ODONTOGRAM_MODE_FIS</button>
    <button type="button" id="ODONTOGRAM_MODE_NVT">ODONTOGRAM_MODE_NVT</button>
    <button type="button" id="ODONTOGRAM_MODE_RCT">ODONTOGRAM_MODE_RCT</button>
    <button type="button" id="ODONTOGRAM_MODE_NON">ODONTOGRAM_MODE_NON</button>
    <button type="button" id="ODONTOGRAM_MODE_UNE">ODONTOGRAM_MODE_UNE</button>
    <button type="button" id="ODONTOGRAM_MODE_PRE">ODONTOGRAM_MODE_PRE</button>
    <button type="button" id="ODONTOGRAM_MODE_ANO">ODONTOGRAM_MODE_ANO</button>
    <button type="button" id="ODONTOGRAM_MODE_CARIES">ODONTOGRAM_MODE_CARIES</button>
    <button type="button" id="ODONTOGRAM_MODE_CFR">ODONTOGRAM_MODE_CFR</button>
    <button type="button" id="ODONTOGRAM_MODE_FMC">ODONTOGRAM_MODE_FMC</button>
    <button type="button" id="ODONTOGRAM_MODE_POC">ODONTOGRAM_MODE_POC</button>
    <button type="button" id="ODONTOGRAM_MODE_RRX">ODONTOGRAM_MODE_RRX</button>
    <button type="button" id="ODONTOGRAM_MODE_MIS">ODONTOGRAM_MODE_MIS</button>
    <button type="button" id="ODONTOGRAM_MODE_IPX">ODONTOGRAM_MODE_IPX</button>
    <button type="button" id="ODONTOGRAM_MODE_FRM_ACR">ODONTOGRAM_MODE_FRM_ACR</button>
    <button type="button" id="ODONTOGRAM_MODE_BRIDGE">ODONTOGRAM_MODE_BRIDGE</button>
    <button type="button" id="ODONTOGRAM_MODE_ARROW_TOP_LEFT">ODONTOGRAM_MODE_ARROW_TOP_LEFT</button>
    <button type="button" id="ODONTOGRAM_MODE_ARROW_TOP_RIGHT">ODONTOGRAM_MODE_ARROW_TOP_RIGHT</button>
    <button type="button" id="ODONTOGRAM_MODE_ARROW_TOP_TURN_LEFT">ODONTOGRAM_MODE_ARROW_TOP_TURN_LEFT</button>
    <button type="button" id="ODONTOGRAM_MODE_ARROW_TOP_TURN_RIGHT">ODONTOGRAM_MODE_ARROW_TOP_TURN_RIGHT</button>
    <button type="button" id="ODONTOGRAM_MODE_ARROW_BOTTOM_LEFT">ODONTOGRAM_MODE_ARROW_BOTTOM_LEFT</button>
    <button type="button" id="ODONTOGRAM_MODE_ARROW_BOTTOM_RIGHT">ODONTOGRAM_MODE_ARROW_BOTTOM_RIGHT</button>
    <button type="button" id="ODONTOGRAM_MODE_ARROW_BOTTOM_TURN_LEFT">ODONTOGRAM_MODE_ARROW_BOTTOM_TURN_LEFT</button>
    <button type="button" id="ODONTOGRAM_MODE_ARROW_BOTTOM_TURN_RIGHT">ODONTOGRAM_MODE_ARROW_BOTTOM_TURN_RIGHT</button>
    <button type="button" id="download">DOWNLOAD</button>


    <script type="text/javascript">
        $("#odontogram").odontogram('init', {
            width: "900px",
            height: "420px"
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
            }]
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
        $('#odontogram').on('change', function(_, geometry) {
            console.log(geometry)
        })
    </script>
</body>

</html>
