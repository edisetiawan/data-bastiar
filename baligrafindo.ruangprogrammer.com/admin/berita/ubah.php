<!-- ini untuk menampilkan data yang akan diubah -->
<?php 
    $id  = $_GET['id'];
    $row = mysql_fetch_array(mysql_query("SELECT * FROM berita where idberita = '".$id."' "));
    $gambar  = $row['gambar'];
 ?>
<?php 
            if (isset($_POST['ubahberita'])) {
                    if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
                          $fileName = $_FILES['gambar']['name'];
                          $move = move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$fileName);
                     if ($move) {
                          $queryubahberita = mysql_query("UPDATE berita SET judul_berita = '".$_POST['judul_berita']."',deskripsi='".$_POST['deskripsi']."' , tgl_posting = NOW(), gambar = '".$fileName."' where idberita = '".$id."'  ");
                     }
                        
                     }else{
                          $queryubahberita = mysql_query("UPDATE berita SET judul_berita = '".$_POST['judul_berita']."',deskripsi='".$_POST['deskripsi']."' , tgl_posting = NOW() where idberita = '".$id."'  ");
                          }
                     if ($queryubahberita) {
                           echo "<script> alert('Terimakasih Data Berhasil Diubah'); location.href='index.php?hal=berita/daftar' </script>";exit;
                     }else{
                           echo "<script> alert(' Data Gagal Diubah'); location.href='index.php?hal=berita/ubah&id=$id' </script>";exit;
                     } 
            }
 ?>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Data Berita </h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Data</a>
        </li>
        <li class="active">
            <strong>Ubah Berita </strong>
        </li>
    </ol>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div align="right">
            <div class="btn-group">
                <a class="btn btn-info btn-xs" type="button" href="index.php?hal=berita/daftar" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                <a  class="btn btn-success btn-xs" type="button" href="index.php?hal=berita/Ubah"  ><span class="fa fa-plus"></span> Ubah</a>
            </div>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Form Ubah Berita </h5>
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
                                        <label>Judul berita</label>
                                        <input type="text" class="form-control" name="judul_berita" required placeholder="ISI DENGAN JUDUL berita" value="<?php echo $row['judul_berita']; ?>">
                                    </div>
                                   <div class="form-group">
                                        <label>Deskripsi</label>
                                       <textarea class="form-control" name="deskripsi" required placeholder="ISI DENGAN DESKRIPSI berita" style="height:200px;"><?php echo $row['deskripsi']; ?></textarea>
                                    </div>
                                   <div class="form-group">
                                        <label>Ubah Gambar</label>
                                        <img src="../gambar/<?php echo $gambar; ?>" class="img-thumbnail" width="100">
                                        <input type="file" name="gambar">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="ubahberita" class="btn btn-flat btn-primary"><span class="fa fa-edit"></span> UBAH </button>
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