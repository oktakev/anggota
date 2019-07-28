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
  <!--Navbar start -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Amadeus</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li  class="active"><a href="about.php">Input Data</a></li>
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
<?php
include_once("config.php");
if(isset($_POST['update']))
{ 
  $id = $_POST['siswa_id'];
  $nama=$_POST['nama'];
  $alamat=$_POST['alamat'];
  $jenis_kelamin=$_POST['jenis_kelamin'];
  $sekolah_asal=$_POST['sekolah_asal'];
  $agama_id=$_POST['agama_id'];
      
  $result = mysqli_query($mysqli, "UPDATE data_siswa SET nama='$nama',alamat='$alamat',jenis_kelamin='$jenis_kelamin',sekolah_asal='$sekolah_asal',agama_id='$agama_id' WHERE siswa_id=$id");
    
  header("Location: index.php");
}
?>

<?php
  
$id = $_GET['siswa_id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM data_siswa WHERE siswa_id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
  $nama = $user_data['nama'];
  $alamat = $user_data['alamat'];
  $jenis_kelamin = $user_data['jenis_kelamin'];
  $sekolah_asal = $user_data['sekolah_asal'];
  $agama_id = $user_data['agama_id'];
}
?>
<div class="container">
  

  <div class="main">

    <div class="middle">
      <h3>Edit Anggota</h3>
      <p>
          <div class="row">
          <div>
          </div>
          <div class="col-md-12">
            <div class="section-row">
              <form action="edit.php" method="post">
                <div class="form-group">
                  <input type="hidden" name="siswa_id" value=<?php echo $_GET['siswa_id'];?>><br>
                  <label>Nama Lengkap :</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $nama;?>">
                </div>
                  <label>Alamat :</label>
                <div class="form-group">
                    <textarea class="form-control" name="alamat"><?php echo $alamat;?></textarea>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <br>
                    <input type="radio" name="jenis_kelamin" value="Laki-Laki"<?php if($user_data['jenis_kelamin']=='Laki-Laki') echo 'checked'?>>Laki-Laki 
                    <input type="radio" name="jenis_kelamin" value="Perempuan"<?php if($user_data['jenis_kelamin']=='Perempuan') echo 'checked'?>>Perempuan
                  </div>
                    <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control" name="agama_id">
                    <option value="">-- Pilih --</option>
                    <option value="1"<?php if ($agama_id=="1") { echo "selected=\"selected\""; } ?>>Islam</option>
                    <option value="2"<?php if ($agama_id=="2") { echo "selected=\"selected\""; } ?>>Kristen</option>
                    <option value="3"<?php if ($agama_id=="3") { echo "selected=\"selected\""; } ?>>Katholik</option>
                    <option value="4"<?php if ($agama_id=="4") { echo "selected=\"selected\""; } ?>>Hindu</option>
                    <option value="5"<?php if ($agama_id=="5") { echo "selected=\"selected\""; } ?>>Budha</option>
                  </select>
                </div>
                <label>Sekolah Asal</label>
                <div class="form-group">
                  <input type="text" name="sekolah_asal" class="form-control" value="<?php echo $sekolah_asal;?>">

                  </div>
                </div>
  <button type="submit" name="update" class="btn btn-primary">Send</button>
  <input type="button" class="btn btn-danger" value="Kembali" onclick="window.location.href='index.php'" />
</form>
</div>
</div>
      </p>
    </div> <!--/ .middle -->
            <?php
          include_once("config.php");
          $sqlCountComn = mysqli_query($mysqli, "select count(siswa_id) ttl from data_siswa");
            $countcomn = mysqli_fetch_assoc($sqlCountComn);
        ?>
    
  </div>
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
          <li><a href="index.php">List Anggota</a></li>
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