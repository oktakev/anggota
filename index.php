<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ini</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<!--Navbar start -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Amadeus</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="input.php">Input Anggota</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>	
	<!--End of navbar-->

	<!--Jumbtron start-->
<!--<div class="jumbotron">
  <h2>Original</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p> 
  <hr>
</div>-->
	<!--End of Jumbtron-->

	<!--Container start-->
<div class="container">
	

	<div class="main">
		<?php
			include_once("config.php");
			$result = mysqli_query($mysqli, "SELECT data_siswa.siswa_id,data_siswa.nama,data_siswa.alamat,data_siswa.jenis_kelamin,data_siswa.sekolah_asal,agama.agama FROM data_siswa JOIN agama ON data_siswa.agama_id = agama.agama_id ORDER BY siswa_id DESC");
			$no = 1;
		?>
		<div class="middle">
			<h3>Daftar Anggota</h3>
				<table class="table table-bordered">
        			<thead class="thead-light">
					<tr>
						<th>#</th>
        				<th>Nama</th> 
        				<th>Alamat</th> 
        				<th>Jenis Kelamin</th> 
        				<th>Sekolah Asal</th>
        				<th>Agama</th>
        				<th>Action</th>
    				</tr>
    			<?php  
				    while($user_data = mysqli_fetch_array($result)) {         
				        echo "<tr>";
				        echo "<td>".$no++;"<td>";
				        echo "<td>".$user_data['nama']."</td>";
				        echo "<td>".$user_data['alamat']."</td>";
				        echo "<td>".$user_data['jenis_kelamin']."</td>";
				        echo "<td>".$user_data['sekolah_asal']."</td>";
				        echo "<td>".$user_data['agama']."</td>";    
				        echo "<td><a href='edit.php?siswa_id=$user_data[siswa_id]'>Edit</a> | 
				        <a onClick=\"javascript: return confirm('Apakah anda yakin');\" href='delete.php?siswa_id=".$user_data['siswa_id']."'>Delete</a></td></tr>";
				        }
				?>
			</thead>
				</table>
				<?php
					include_once("config.php");
					$sqlCountComn = mysqli_query($mysqli, "select count(siswa_id) ttl from data_siswa");
    				$countcomn = mysqli_fetch_assoc($sqlCountComn);
				?>
		</div> <!--/ .middle -->

		<div class="left">
			<div class="alert alert-info">
  				<strong>Info !</strong> <br>
				Jumlah Anggota yang mendaftar sampai saat ini berjumlah <strong><?php echo $countcomn['ttl'] ?> </strong>orang
			</div>
		</div>
		<div class="right">
			<h3>Pilihan</h3>
			<p>
				<ul>
					<li><a href="input.php">Tambah Anggota Baru</a></li>
					<li><a href="#">Lorem ipsum dolor sit amet, consectetur </a></li>
					<li><a href="#">Lorem ipsum dolor sit amet, consectetur </a></li>
					<li><a href="#">Lorem ipsum dolor sit amet, consectetur </a></li>
					<li><a href="#">Lorem ipsum dolor sit amet, consectetur </a></li>
					<li><a href="#">Lorem ipsum dolor sit amet, consectetur </a></li>
				</ul>
			</p>
		</div> <!--/ .right -->

	</div> 
</div>
	<!--End of container-->

<!--footer start-->
	<div class="footer">
		<p class="tulis">Copyright &copy; 0000</a></p>
	</div> 
	<!--end of footer-->
</body>

</html>
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>