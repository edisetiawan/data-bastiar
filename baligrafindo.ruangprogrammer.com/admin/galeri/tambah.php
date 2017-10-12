<?php 
            if (isset($_POST['simpan'])) {
                    if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
                          $fileName = $_FILES['gambar']['name'];
                          $move = move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$fileName);
                     if ($move) {
                          $queryinsert = mysql_query("INSERT into galeri (judul_foto,gambar,idalbum) values ('".$_POST['judul_foto']."','".$fileName."','".$_POST['idalbum']."')");
                     }
                     }else{
                          $queryinsert = mysql_query("INSERT into galeri (judul_foto,gambar,idalbum) values ('".$_POST['judul_foto']."','','".$_POST['idalbum']."')");
                          }
                     if ($queryinsert) {
                           echo "<script> alert('Terimakasih Data Berhasil Disimpan'); location.href='index.php?hal=galeri/daftar' </script>";exit;
                     }else{
                           echo "<script> alert(' Data Gagal Disimpan'); location.href='index.php?hal=galeri/tambah' </script>";exit;
                     } 

            }
 ?>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Data Galeri Baru</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Data</a>
        </li>
        <li class="active">
            <strong>Tambah Galeri Baru</strong>
        </li>
    </ol>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div align="right">
            <div class="btn-group">
                <a class="btn btn-info btn-xs" type="button" href="index.php?hal=galeri/daftar" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                <a  class="btn btn-success btn-xs" type="button" href="index.php?hal=galeri/tambah"  ><span class="fa fa-plus"></span> Tambah</a>
            </div>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Form Tambah Galeri Foto Baru</h5>
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
                                <form class="role" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Galeri Foto</label>
                                        <input type="text" class="form-control" name="judul_foto" required placeholder="ISI DENGAN NAMA FOTO" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Album</label>
                                        <select class="form-control" name="idalbum" required>
                                            <option value="null">Pilih Album</option>
                                            <?php 

                                            $queryalbum = mysql_query("SELECT * FROM album order by idalbum ASC");
                                            while ($row = mysql_fetch_array($queryalbum)) {
                                                echo "<option value='".$row['idalbum']."'>".$row['album']."</option>";
                                            }
                                             ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Upload Foto</label>
                                        <input type="file" name="gambar" required>
                                    </div> 
                                    
                                    <div class="form-group">
                                        <button type="submit" name="simpan" class="btn btn-flat btn-primary"><span class="fa fa-save"></span> SIMPAN </button>
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