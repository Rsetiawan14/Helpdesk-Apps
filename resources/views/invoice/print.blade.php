<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:40px;
            width:750px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:740px;
        }
        td, tr, th{
            padding:12px;
            border:1px solid #333;
            width:185px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <caption>
                Form Helpdesk Rajawali Nusindo
            </caption>
            <thead>
                <tr>
                    <th colspan="3">Ticketing Report <strong>#{{ $data_mstreport->id }}</strong></th>
                    <th>{{ date('d-m-Y', strtotime($data_mstreport->tgl_req)) }}</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <h4>Pemohon: </h4>
                        <p>Nama {{ $data_mstreport->nama_req }}<br>
                           Jenis Laporan {{ $data_mstreport->laporan }}<br>
                           Keterangan {{ $data_mstreport->catatan_req }}<br>
                        </p>
                    </td>
                    <td colspan="2">
                        <h4>Diselesaikan Oleh: </h4>
                        <p>Nama {{ $data_mstreport->nama_tech }}<br>
                        Tanggal {{ date('d-m-Y', strtotime($data_mstreport->tgl_tech)) }}<br>
                        Catatan {{ $data_mstreport->catatan_tech }} <br>
                        </p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th colspan="2">Tanda Tangan Pemohon</th>
                    <th colspan="2">Tanda Tangan</th>
                </tr>
                
                <tr>
                    <td colspan="2"></td>
                    <td colspan="2"></td>
                </tr>
            </tbody>
            <tfoot>
            </tfoot>
        </table>
    </div>
</body>
</html>