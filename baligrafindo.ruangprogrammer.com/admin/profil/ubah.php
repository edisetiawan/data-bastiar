<?php 
        $id = $_GET['id'];
        $row = mysql_fetch_array(mysql_query("SELECT * FROM profil where idprofil = '".$id."' "));
        $gambar = $row['gambar'];
        if (isset($_POST['ubahprofil'])) {
            if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
                          $fileName = $_FILES['gambar']['name'];
                          $move = move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$fileName);
                     if ($move) {
                          $queryubahprofil = mysql_query(" UPDATE profil SET
                                                                 judul_profil = '".$_POST['judul_profil']."',deskripsi = '".$_POST['deskripsi']."',
                                                                        gambar='".$fileName."' where idprofil = '".$id."' ");
                     }
                        
                     }else{
                          $queryubahprofil = mysql_query(" UPDATE profil SET 
                                                                judul_profil = '".$_POST['judul_profil']."',
                                                                deskripsi = '".$_POST['deskripsi']."',
                                                                gambar='' where idprofil = '".$id."' ");
                          }
                     if ($queryubahprofil) {
                           echo "<script> alert('Terimakasih Data Berhasil Disimpan'); location.href='index.php?hal=profil/daftar' </script>";exit;
                     }else{
                           echo "<script> alert(' Data Gagal Disimpan'); location.href='index.php?hal=profil/ubah&id=$id' </script>";exit;
                     } 
        }
 ?>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Data Profil Baru</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Data</a>
        </li>
        <li class="active">
            <strong>Ubah Profil Baru</strong>
        </li>
    </ol>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div align="right">
            <div class="btn-group">
                <a class="btn btn-info btn-xs" type="button" href="index.php?hal=profil/daftar" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                <a  class="btn btn-success btn-xs" type="button" href="index.php?hal=profil/tambah"  ><span class="fa fa-plus"></span> Tambah</a>
            </div>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Form Ubah Profil Baru</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>

            <div class="ibox-content">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="col-md-8">
                                <form class="role" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Judul Profil</label>
                                        <input type="text" class="form-control" name="judul_profil" required placeholder="ISI DENGAN JUDUL PROFIL" value="<?php echo $row['judul_profil']; ?>">
                                    </div>
                                   <div class="form-group">
                                        <label>Deskripsi</label>
                                       <textarea class="form-control" name="deskripsi" required placeholder="ISI DENGAN DESKRIPSI PROFIL" style="height:200px;"><?php echo $row['deskripsi']; ?></textarea>
                                    </div>
                                   <div class="form-group">
                                        <label>Ubah Gambar</label>
                                        <input type="file" name="gambar" >
                                        <img src="../gambar/<?php echo $gambar; ?>" class="img-rounded" width="150">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="ubahprofil" class="btn btn-flat btn-primary"><span class="fa fa-edit"></span> UBAH </button>
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