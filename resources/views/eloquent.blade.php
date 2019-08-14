<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Halo Eloquent</title>
		<!-- CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
        <center><h1>Data Mahasiswa</h1></center> <br>
		<div class="col-sm-8 col-sm-offset-2">
            
			@foreach ($mahasiswa as $temp)
				<h3> <small><b>{{$temp->nama}}</b> [{{$temp->nim}}]</small></h3>
				<h5>Hobi : 
					@foreach($temp->hobi as $tampung) 
						<small>{{$tampung->hobi}}</small> 
					@endforeach
				</h5>
				<h4>
					<li>Nama Wali : <strong>{{$temp->wali->nama}}</strong></li>
                    <li>Dosen Pembimbing : <strong>{{$temp->dosen->nama}}</strong></li>
				</h4>
				<hr/>
			@endforeach
		</div>
	</body>
</html>