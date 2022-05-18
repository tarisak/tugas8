<!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>Formulir Registrasi Data Pibadi</title>
    <style>
        .warning {color: #FF0000;}
    </style>
    </head>
    <body>
        <?php 
        $error_nama ="";
        $error_nik ="";
        $error_jk="";
        $error_nisn="";
        $error_tempatL="";
        $error_tanggalL="";
        $error_agama="";
        $error_khusus="";
        $error_alamat="";
        $error_rt="";
        $error_rw="";
        $error_dusun="";
        $error_desa="";
        $error_kecamatan="";
        $error_kode="";
        $error_tempatT="";
        $error_transpor="";
        $error_hp="";
        $error_telp="";
        $error_email="";
        $error_penerimaKPS="";
        $error_noKPS="";
        $error_kwn="";
        $error_negara="";
       
       
        $nama="";
        $nik="";
        $jk="";
        $nisn="";
        $tempatL="";
        $tanggalL="";
        $agama="";
        $khusus="";
        $alamat="";
        $rt="";
        $rw="";
        $dusun="";
        $desa="";
        $kecamatan="";
        $kode="";
        $tempatT="";
        $transpor="";
        $hp="";
        $telp="";
        $email="";
        $penerima_KPS="";
        $no_KPS="";
        $kwn="";
        $negara="";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
          if(empty($_POST["nama"]))
          {
              $error_nama = "Nama tidak boleh kosong";
          }
          else
          {
              $nama= cek_input ($_POST["nama"]);
              if(!preg_match("/^{a-zA-Z]*$/",$nama))
                  {
                      $nameErr= "Inputan hanya boleh huruf dan spasi";
                  }
          }
          if(empty($_POST["nisn"]))
          {
              $error_nisn= "NISN tidak boleh kosong";
          }
          else
          {
              $nisn = cek_input ($_POST["nisn"]);
              if(!is_numeric($nisn))
              {
                  $error_nisn = "Nomor NISN hanya boleh angka";
              }
          }
          if(empty($_POST["telp"]))
          {
              $error_telp = "Nomor telp peserta tidak boleh kosong";
          }
          else
          {
              $telp = cek_input ($_POST["telp"]);
              if(!is_numeric($telp))
              {
                  $error_telp = "Nomor telp peserta hanya boleh angka";
              }
          }

          if(empty($_POST["nik"]))
          {
              $error_nik= "No NIK tidak boleh kosong";
          }
          else
          {
              $nik = cek_input ($_POST["nik"]);
              if(!is_numeric($nik))
              {
                  $error_nik = "No NIK hanya boleh angka";
              }
          }

          if(empty($_POST["rt"]))
          {
              $error_rt = "RT tidak boleh kosong";
          }
          else
          {
              $rt = cek_input ($_POST["rt"]);
              if(!is_numeric($rt))
              {
                  $error_rt = "RT hanya boleh angka";
              }
          }

          if(empty($_POST["email"]))
          {
              $error_email = "Email tidak boleh kosong";
          }
          else
          {
              $email= cek_input($_POST["email"]);
              if(!filter_var($email, FILTER_VALIDATE_EMAIL))
                  {
                      $error_email = "Format email invalid";
                  }

          }
      }

      function cek_input($data){
          $data = trim($data);
          $data= stripslashes($data);
          $data= htmlspecialchars($data);
          return $data;
      }
        ?>
  <div class="row">
  <div class="col-md-6">
  <div class="card">
    <div class="card-header">
      DATA PRIBADI
    </div>
    <div class="card-body">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  
  <div class="form-group row">
  <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" name="nama" class="form-control <?php echo($error_nama !="" ? "is-invalid" : "");?>" 
      id="nama" placeholder="Nama Lengkap" requiredvalue="<?php echo $nama; ?>">
      <span class="warning" ><?php echo $error_nama; ?></span>
    </div>
  </div>    
      
  <div class="form-group row">
  <label for="jk" class="col-sm-2 col-form-label ">Jenis Kelamin</label>
    <div class="col-sm-10">
    <input type="radio" name="jk" value="Laki-Laki">Laki-Laki</label> 
      <input type="radio" name="jk" value="Perempuan">Perempuan</label> 
      <span class="warning" ><?php echo $error_jk; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="nisn" class="col-sm-2 col-form-label ">NISN</label>
    <div class="col-sm-10">
      <input type="text" name="nisn" class="form-control <?php echo($error_nisn !="" ? "is-invalid" : "");?>" 
      id="nisn" placeholder="NISN" value="<?php echo $nisn; ?>">
      <span class="warning" ><?php echo $error_nisn; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="nik" class="col-sm-2 col-form-label "> NIK </label>
    <div class="col-sm-10">
    <input type="text" name="nik" class="form-control <?php echo($error_nik !="" ? "is-invalid" : "");?>" 
      id="nik" placeholder="NIK" value="<?php echo $nik; ?>">
      <span class="warning" ><?php echo $error_nik; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="tempatL" class="col-sm-2 col-form-label ">Tempat Lahir</label>
    <div class="col-sm-10">
      <input type="text" name="tempatL" class="form-control <?php echo($error_tempatL !="" ? "is-invalid" : "");?>" 
      id="tempatL" placeholder="Tempat Lahir" value="<?php echo $tempatL; ?>">
      <span class="warning" ><?php echo $error_tempatL; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="tanggalL" class="col-sm-2 col-form-label ">Tanggal Lahir</label>
    <div class="col-sm-10">
      <input type="text" name="tanggalL" class="form-control <?php echo($error_tanggalL !="" ? "is-invalid" : "");?>" 
      id="tanggalL" placeholder="Tanggal Lahir" value="<?php echo $tanggalL; ?>">
      <span class="warning" ><?php echo $error_tanggalL; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="agama" class="col-sm-2 col-form-label "> Agama </label>
    <div class="col-sm-10">
    <select name="agama">
            <option value="Islam"> Islam </option>
            <option value="Kristen"> Kristen/Protestan</option>
            <option value="Katholik"> Katholik</option>
            <option value="Hindu"> Hindu </option>
            <option value="Budha"> Budha </option>
            <option value="Khong Hu Chu"> Khong Hu Chu </option>
            <option value="Lainnya"> Lainnya </option>
            </select>
      <span class="warning" ><?php echo $error_agama; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="khusus" class="col-sm-2 col-form-label "> Berkbutuhan Khusus </label>
    <div class="col-sm-10">
    <select name="khusus">
            <option value="Tidak"> Tidak </option>
            <option value="Netra"> Netra</option>
            <option value="Rungu"> Rungu</option>
            <option value="Grahita ringan"> Grahita ringan </option>
            <option value="Grahita sedang"> Grahita sedang </option>
            <option value="Daksa ringan"> Daksa ringan </option>
            <option value="Daksa sedang"> Daksa sedang </option>
            <option value="Laras"> Laras </option>
            <option value="Wicara"> Wicara </option>
            <option value="Tuna ganda"> Tuna ganda </option>
            <option value="Hiper aktif"> Hiper aktif </option>
            <option value="Cerdas istimewa"> Cerdas istimewa </option>
            <option value="Bakat istimewa"> Bakat istimewa </option>
            <option value="Kesulitan belajar"> Kesulitan belajar </option>
            <option value="Narkoba"> Narkoba </option>
            <option value="Indigo"> Indigo </option>
            <option value="Down sindrome"> Down sindrome </option>
            <option value="Autis"> Autis </option>
            </select>
      <span class="warning" ><?php echo $error_khusus; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="alamat" class="col-sm-2 col-form-label ">Alamat Jalan</label>
    <div class="col-sm-10">
      <input type="text" name="alamat" class="form-control <?php echo($error_alamat !="" ? "is-invalid" : "");?>" 
      id="alamat" placeholder="Alamat Jalan" value="<?php echo $alamat; ?>">
      <span class="warning" ><?php echo $error_alamat; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="rt" class="col-sm-2 col-form-label ">RT</label>
    <div class="col-sm-10">
      <input type="text" name="rt" class="form-control <?php echo($error_rt !="" ? "is-invalid" : "");?>" 
      id="rt" placeholder="RT" value="<?php echo $rt; ?>">
      <span class="warning" ><?php echo $error_rt; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="rw" class="col-sm-2 col-form-label ">RW</label>
    <div class="col-sm-10">
      <input type="text" name="rw" class="form-control <?php echo($error_rw !="" ? "is-invalid" : "");?>" 
      id="rw" placeholder="RW" value="<?php echo $rw; ?>">
      <span class="warning" ><?php echo $error_rw; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="dusun" class="col-sm-2 col-form-label ">Nama Dusun</label>
    <div class="col-sm-10">
      <input type="text" name="dusun" class="form-control <?php echo($error_dusun !="" ? "is-invalid" : "");?>" 
      id="dusun" placeholder="Dusun" value="<?php echo $dusun; ?>">
      <span class="warning" ><?php echo $error_dusun; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="desa" class="col-sm-2 col-form-label ">Desa</label>
    <div class="col-sm-10">
      <input type="text" name="desa" class="form-control <?php echo($error_desa !="" ? "is-invalid" : "");?>" 
      id="desa" placeholder="desa" value="<?php echo $desa; ?>">
      <span class="warning" ><?php echo $error_desa; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="kecamatan" class="col-sm-2 col-form-label ">Kecamatan</label>
    <div class="col-sm-10">
      <input type="text" name="kecamatan" class="form-control <?php echo($error_kecamatan !="" ? "is-invalid" : "");?>" 
      id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>">
      <span class="warning" ><?php echo $error_kecamatan; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="kode" class="col-sm-2 col-form-label ">Kode Pos</label>
    <div class="col-sm-10">
      <input type="text" name="kode" class="form-control <?php echo($error_kode !="" ? "is-invalid" : "");?>" 
      id="kode" placeholder="Kode Pos" value="<?php echo $kode; ?>">
      <span class="warning" ><?php echo $error_kode; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="tempatT" class="col-sm-2 col-form-label "> Tempat Tinggal </label>
    <div class="col-sm-10">
    <select name="tempatT">
            <option value="Bersama orang tua">Bersama orang tua </option>
            <option value="Wali"> Wali</option>
            <option value="Kos"> Kos </option>
            <option value="Asrama"> Asrama </option>
            <option value="Panti asuhan"> Panti asuhan </option>
            <option value="Lainnya"> Lainnya </option>
            </select>
      <span class="warning" ><?php echo $error_tempatT; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="transpor" class="col-sm-2 col-form-label "> Moda transportasi </label>
    <div class="col-sm-10">
    <select name="transpor">
            <option value="Jalan kaki">Jalan kaki</option>
            <option value="Kendaraan pribadi"> Kendaraan pribadi</option>
            <option value="Kendaraan umum"> Kendaraan umum/angkot/pete-pete </option>
            <option value="Jemputan sekolah">Jemputan sekolah  </option>
            <option value="Kereta api"> Kereta api </option>
            <option value="Ojek"> Ojek </option>
            <option value="Andong/Bendi/Sado/Dokar/Delman/Beca"> Andong/Bendi/Sado/Dokar/Delman/Beca </option>
            <option value="Perahu penyebrangan/Rakit/Getek"> Perahu penyebrangan/Rakit/Getek </option>
            <option value="Lainnya"> Lainnya </option>
            </select>
      <span class="warning" ><?php echo $error_transpor; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="hp" class="col-sm-2 col-form-label ">Nomor HP</label>
    <div class="col-sm-10">
      <input type="text" name="hp" class="form-control <?php echo($error_hp="" ? "is-invalid" : "");?>" 
      id="hp" placeholder="Nomor HP" value="<?php echo $hp; ?>">
      <span class="warning" ><?php echo $error_hp; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="telp" class="col-sm-2 col-form-label ">Nomor Telpon</label>
    <div class="col-sm-10">
      <input type="text" name="telp" class="form-control <?php echo($error_telp="" ? "is-invalid" : "");?>" 
      id="telp" placeholder="Nomor Telpon" value="<?php echo $telp; ?>">
      <span class="warning" ><?php echo $error_telp; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="email" class="col-sm-2 col-form-label ">Email Pribadi</label>
    <div class="col-sm-10">
      <input type="text" name="email" class="form-control <?php echo($error_email="" ? "is-invalid" : "");?>" 
      id="email" placeholder="Email Pribadi" value="<?php echo $email; ?>">
      <span class="warning" ><?php echo $error_email; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="penerima_KPS" class="col-sm-2 col-form-label ">Penerima KPS/PKH/KIP</label>
    <div class="col-sm-10">
    <input type="radio" name="penerima_KPS" value="Ya">Ya</label> 
      <input type="radio" name="penerima_KPS" value="Tidak">Tidak</label> 
      <span class="warning" ><?php echo $error_penerimaKPS; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="no_KPS" class="col-sm-2 col-form-label ">No.KPS/PKH/KIP</label>
    <div class="col-sm-10">
      <input type="text" name="no_KPS" class="form-control <?php echo($error_noKPS="" ? "is-invalid" : "");?>" 
      id="no_KPS" placeholder="No.KPS/PKH/KIP" value="<?php echo $no_KPS; ?>">
      <span class="warning" ><?php echo $error_noKPS; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="kwn" class="col-sm-2 col-form-label ">Kewarganegaraan</label>
    <div class="col-sm-10">
    <input type="radio" name="kwn" value="Indonesia">Indonesia(WNI)</label> 
      <input type="radio" name="kwn" value="Asing">Asing(WNA)</label> 
      <span class="warning" ><?php echo $error_kwn; ?></span>
    </div>
  </div>

  <div class="form-group row">
  <label for="negara" class="col-sm-2 col-form-label ">Nama Negara</label>
    <div class="col-sm-10">
      <input type="text" name="negara" class="form-control <?php echo($error_negara="" ? "is-invalid" : "");?>" 
      id="negara" placeholder="Nama Negara" value="<?php echo $negara; ?>">
      <span class="warning" ><?php echo $error_negara; ?></span>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
     <button type="submit" name="Submit" class="btn btn-primary" style="background-color:orange; color:black;">Submit</button>
    </div>
  </div>

    </form>
        </div> 
      </div>
    </div>
  </div>

  <?php 
  include("koneksi.php");

  if(isset($_POST['Submit'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $nisn = $_POST['nisn'];
    $tempatL= $_POST['tempatL'];
    $tanggalL = $_POST['tanggalL'];
    $agama= $_POST['agama'];
    $khusus = $_POST['khusus'];
    $alamat = $_POST['alamat'];
    $rt = $_POST['rt'];
    $rw = $_POST['rw'];
    $dusun = $_POST['dusun'];
    $desa= $_POST['desa'];
    $kecamatan = $_POST['kecamatan'];
    $kode = $_POST['kode'];
    $tempatT = $_POST['tempatT'];
    $transpor= $_POST['transpor'];
    $hp= $_POST['hp'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $penerima_KPS = $_POST['penerima_KPS'];
    $no_KPS = $_POST['no_KPS'];
    $kwn= $_POST['kwn'];
    $negara = $_POST['negara'];
 
    $sql = "INSERT INTO pribadi (nik,nama,jk,nisn,tempatL,tanggalL,agama,khusus,alamat,rt,rw,dusun,desa,kecamatan,kode,tempatT,transpor,hp,telp,email,penerima_KPS,no_KPS,kwn,negara) 
    VALUES ('$nik','$nama','$jk','$nisn',' $tempatL','$tanggalL','$agama','$khusus','$alamat','$rt','$rw','$dusun','$desa','$kecamatan','$kode','$tempatT','$transpor','$hp','$telp','$email','$penerima_KPS','$no_KPS','$kwn','$negara')";
    $pribadi= mysqli_query($conn, $sql);

        if ($pribadi) {
          echo "Tambah data berhasil";
          exit;
        }
    else {
      echo "Gagal";
      exit;
    }
  }
  ?>

</body>
</html>