<html>
<head>
	<title>Cetak Data Inventaris HMJ TI</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 8pt;
		}
	</style>

	<table width="100%">
    <tr>
    <td width="25" align="center"><img src="cetak/logoakakom.png" width="250%"></td>
    <td width="50" align="center"><h5>HIMPUNAN MAHASISWA JURUSAN TEKNIK INFORMATIKA</h5><br><h6>STMIK Akakom Yogyakarta</h6></td>
    <td width="25" align="center"><img src="cetak/logohmjti.png" width="250%"></td>
    </tr>
    </table>
    <hr>
    <h6 align="center">Data Inventaris</h6>
	<table class='table table-bordered'>
		<thead>
                    <tr style="text-align: center;">
                      <th>No</th>
                      <th>Nama Barang</th>
                      <th>Satuan</th>
                      <th>Jumlah</th>
                      <th>Kondisi</th>
                      <th>Sumber Barang</th>
                    </tr>
              </thead>
              <tbody>
              @foreach($inventaris as $ang)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ang->nama_barang }}</td>
                    <td>{{ $ang->satuan }}</td>
                    <td>{{ $ang->jumlah }}</td>
                    <td>{{ $ang->kondisi }}</td>
                    <td>{{ $ang->sumber_barang }}</td>
                    </tr>
                    @endforeach
              </tbody>
	</table>
</body>
</html>