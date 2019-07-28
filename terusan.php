
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$sekolah_asal = $_POST['sekolah_asal'];
		$agama_id = $_POST['agama_id'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO data_siswa(nama,alamat,jenis_kelamin,sekolah_asal,agama_id) VALUES('$nama','$alamat','$jenis_kelamin','$sekolah_asal','$agama_id')");

		$header = "location:input.php";

		if($nama == ""){
			$header = $header . ($header == "location:input.php" ? "?" : "&") . "nama=kosong";
		}
		if ($alamat == "") {
			$header = $header . ($header == "location:input.php" ? "?" : "&") . "alamat=kosong";
		}
		if ($jenis_kelamin == "") {
			$header = $header . ($header == "location:input.php" ? "?" : "&") . "jenis_kelamin=kosong";
		}
		if ($sekolah_asal == "") {
			$header = $header . ($header == "location:input.php" ? "?" : "&") . "sekolah_asal=kosong";
		}
		if ($agama_id == "") {
			$header = $header . ($header == "location:input.php" ? "?" : "&") . "agama_id=kosong";
		}

		header($header);

	}
	?>
<script>
	window.location="index.php"
</script>
