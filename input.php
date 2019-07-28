<?php
function valid($var) {
  if(isset($_GET[$var])){
    if($_GET[$var] == "kosong"){
      echo "<h5 style='color:red'>Nama Belum Di Masukkan !</h5>";
    }
  }
}
function validalamat($var) {
  if(isset($_GET[$var])){
    if($_GET[$var] == "kosong"){
      echo "<h5 style='color:red'>Alamat Belum Di Masukkan !</h5>";
    }
  }
}
function validkelamin($var) {
  if(isset($_GET[$var])){
    if($_GET[$var] == "kosong"){
      echo "<h5 style='color:red'>Pilih Jenis Kelamin !</h5>";
    }
  }
}
function validagama($var) {
  if(isset($_GET[$var])){
    if($_GET[$var] == "kosong"){
      echo "<h5 style='color:red'>Pilih Agama anda !</h5>";
    }
  }
}
function validsekolah($var) {
  if(isset($_GET[$var])){
    if($_GET[$var] == "kosong"){
      echo "<h5 style='color:red'>Pilih asal sekolah !</h5>";
    }
  }
}
?>

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
      <li  class="active"><a href="about.php">Input Anggota</a></li>
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

    <div class="middle">
      <h3>Input Anggota</h3>
      <p>
          <div class="row">
          <div>
          </div>
          <div class="col-md-12">
            <div class="section-row">
              <form action="terusan.php" method="post">
                <div class="form-group">
                  <label>Nama Lengkap :</label>
                    <?php
                      valid('nama');
                    ?>                    
                    <input type="text" class="form-control" name="nama" placeholder="Isi Nama Lengkap">
                </div>
                  <label>Alamat :</label>
                  <?php
                      validalamat('alamat');
                    ?>   
                <div class="form-group">
                    <textarea class="form-control" name="alamat" placeholder="Masukkan Alamat"></textarea>
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                   <?php
                      validkelamin('jenis_kelamin');
                    ?>  
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                      </label>
                    </div>
                    <div class="form-group">
                  <label>Agama</label>
                  <?php
                      validagama('agama_id');
                    ?> 
                  <select class="form-control" name="agama_id">
                    <option value="">Pilih Agama</option>
                    <?php 
                      include_once("config.php");
                      $sql = mysqli_query($mysqli, "select * from agama");
                      while($d=mysqli_fetch_assoc($sql)){
                        echo "<option value='".$d['agama_id']."'>".$d['agama']."</option>";
                      }
                    ?>
                  </select>
                </div>
                <label>Sekolah Asal</label>
                <?php
                      validsekolah('sekolah_asal');
                    ?> 
                <div class="form-group">
                  <input type="text" name="sekolah_asal" class="form-control" placeholder="Masukkan asal sekolah">

                  </div>
                </div>
  <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
  <button type="Reset" class="btn btn-danger">Reset</button>
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