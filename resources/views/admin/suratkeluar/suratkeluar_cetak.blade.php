<html>
<head>
	<title>Cetak Data Surat Keluar HMJ TI</title>
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
    <h6 align="center">Data Surat Keluar</h6>
	<table class='table table-bordered'>
		<thead>
                    <tr style="text-align: center;">
                      <th>No</th>
                      <th>Nomor Surat</th>
                      <th>Nama Kegiatan</th>
                      <th>Perihal</th>
                      <th>Tanggal Surat Keluar</th>
                      <th>Tujuan</th>
                    </tr>
              </thead>
              <tbody>
              @foreach($suratkeluar as $ang)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ang->no_surat }}</td>
                    <td>{{ $ang->nama_kegiatan }}</td>
                    <td>{{ $ang->hal }}</td>
                    <td>{{ $ang->tanggal_surat_keluar}}</td>
                    <td>{{ $ang->tujuan}}</td>
                    </tr>
                    @endforeach
              </tbody>
	</table>
</body>
</html>