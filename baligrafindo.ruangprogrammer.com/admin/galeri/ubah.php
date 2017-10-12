<?php 
        $id = $_GET['id'];
        $row = mysql_fetch_array(mysql_query("SELECT * FROM galeri g join album a on g.idalbum = a.idalbum where g.idgaleri = '".$id."' "));
        $gambar = $row['gambar'];

        // skrip untuk ubah data galeri
        if (isset($_POST['ubah'])) {
             if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
                          $fileName = $_FILES['gambar']['name'];
                          $move = move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$fileName);
                     if ($move) {
                          $queryinsert = mysql_query("UPDATE galeri set judul_foto = '".$_POST['judul_foto']."',
                          gambar='".$fileName."',idalbum='".$_POST['idalbum']."' where idgaleri = '".$id."' ");
                     }
                     }else{
                          $queryinsert = mysql_query("UPDATE galeri set judul_foto = '".$_POST['judul_foto']."',idalbum='".$_POST['idalbum']."' where idgaleri = '".$id."' ");
                          }
                     if ($queryinsert) {
                           echo "<script> alert('Terimakasih Data Berhasil Disimpan'); location.href='index.php?hal=galeri/daftar' </script>";exit;
                     }else{
                           echo "<script> alert(' Data Gagal Disimpan'); location.href='index.php?hal=galeri/ubah&id=$id' </script>";exit;
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
            <strong>Ubah Galeri <?php echo $row['judul_foto']; ?></strong>
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
                <h5>Form Ubah Galeri Foto </h5>
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
                                        <input type="text" class="form-control" name="judul_foto"  placeholder="ISI DENGAN NAMA FOTO" value="<?php echo $row['judul_foto']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Album</label>
                                        <select class="form-control" name="idalbum" >
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
                                        <img src="../gambar/<?php echo $gambar; ?>" width="100" class="img-thumbnail">
                                        <label>Upload Foto</label>
                                        <input type="file" name="gambar" >
                                    </div> 
                                    
                                    <div class="form-group">
                                        <button type="submit" name="ubah" class="btn btn-flat btn-primary"><span class="fa fa-edit"></span> UBAH </button>
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