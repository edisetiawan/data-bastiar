<?php 
      $id = $_GET['id'];
      $row  = mysql_fetch_array(mysql_query("SELECT * FROM pengguna where idpengguna = '".$id."'"));
      // ini untuk fungsi ubah pengguna 
      if (isset($_POST['ubahpengguna'])) {
          $queryubahpengguna = mysql_query("UPDATE pengguna SET 
                                                                namalengkap = '$_POST[namalengkap]',
                                                                email       = '$_POST[email]',
                                                                nohp        = '$_POST[nohp]',
                                                                alamat      = '$_POST[alamat]'
                                                            WHERE idpengguna = '".$id."' "); 
          if ($queryubahpengguna) {
             echo "<script> alert('Data Berhasil Diubah'); location.href='index.php?hal=pengguna/daftar' </script>";exit;  
          }else{
              echo "<script> alert('Data Gagal Diubah'); location.href='index.php?hal=pengguna/ubah&id=$id' </script>";exit;  
          }

      }
 ?>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Master Pengguna </h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Master</a>
        </li>
        <li class="active">
            <strong>Ubah Pengguna / <?php echo $row['namalengkap']; ?></strong>
        </li>
    </ol>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div align="right">
            <div class="btn-group">
                <a class="btn btn-info btn-xs" type="button" href="index.php?hal=pengguna/daftar" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                <a  class="btn btn-success btn-xs" type="button" href="index.php?hal=pengguna/tambah"  ><span class="fa fa-plus"></span> Tambah</a>
            </div>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Form Ubah Pengguna </h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <form class="role" method="POST">
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" name="namalengkap" required placeholder="ISI DENGAN NAMA LENGKAP PENGGUNA"  value="<?php echo $row['namalengkap']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email : </label><i>* Email Akan Dijadikan Untuk Login Aplikasi </i>
                                        <input type="email" class="form-control" name="email" required placeholder="ISI DENGAN EMAIL PENGGUNA" value="<?php echo $row['email']; ?>">
                                    </div>
                                   <div class="form-group">
                                        <label>No.Hp</label>
                                        <input type="text" class="form-control" name="nohp" required placeholder="ISI DENGAN NO Hp PENGGUNA" value="<?php echo $row['nohp']; ?>">
                                    </div>
                                   <div class="form-group">
                                        <label>Alamat</label>
                                       <textarea class="form-control" name="alamat" required placeholder="ISI DENGAN ALAMAT PENGGUNA" style="height: 200"><?php echo $row['alamat']; ?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="ubahpengguna" class="btn btn-flat btn-primary"><span class="fa fa-edit"></span> UBAH </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
            </div>
        </div>
    </div>
    </div>          
</div>