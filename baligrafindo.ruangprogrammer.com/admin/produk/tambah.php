<?php 
            if (isset($_POST['simpan'])) {
                    if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
                          $fileName = $_FILES['gambar']['name'];
                          $move = move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$fileName);
                     if ($move) {
                          $queryinsert = mysql_query("INSERT into produk (tgl_posting,nama_produk,deskripsi_produk,gambar,idkategori_produk) values (NOW(),'$_POST[nama_produk]','$_POST[deskripsi_produk]','$fileName','$_POST[idkategori_produk]')");
                     }
                        
                     }else{
                          $queryinsert = mysql_query("INSERT into produk (tgl_posting,nama_produk,deskripsi_produk,gambar,idkategori_produk) values (NOW(),'$_POST[nama_produk]','$_POST[deskripsi_produk]','','$_POST[idkategori_produk]')");
                          }
                     if ($queryinsert) {
                           echo "<script> alert('Terimakasih Data Berhasil Disimpan'); location.href='index.php?hal=produk/daftar' </script>";exit;
                     }else{
                           echo "<script> alert(' Data Gagal Disimpan'); location.href='index.php?hal=produk/tambah' </script>";exit;
                     } 
            }
 ?>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Data Produk Baru</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Data</a>
        </li>
        <li class="active">
            <strong>Tambah Produk Baru</strong>
        </li>
    </ol>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div align="right">
            <div class="btn-group">
                <a class="btn btn-info btn-xs" type="button" href="index.php?hal=produk/daftar" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                <a  class="btn btn-success btn-xs" type="button" href="index.php?hal=produk/tambah"  ><span class="fa fa-plus"></span> Tambah</a>
            </div>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Form Tambah Produk Baru</h5>
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
                                        <label>Judul Produk</label>
                                        <input type="text" class="form-control" name="nama_produk" required placeholder="ISI DENGAN JUDUL PRODUK">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori Produk</label>
                                     <select class="form-control select2" name="idkategori_produk" required>
                                       <option value="null">Pilih Kategori Produk</option>
                                          <?php 
                                              $querykategori = mysql_query("SELECT * from kategori_produk order by idkategori_produk ASC ");
                                              while ($kategori  = mysql_fetch_array($querykategori)) {
                                           ?>
                                           <option value="<?php echo $kategori['idkategori_produk']; ?>">
                                              <?php echo $kategori['kategori']; ?>
                                           </option>
                                           <?php } ?>
                                     </select>
                                    </div>
                                    
                                   <div class="form-group">
                                        <label>Deskripsi</label>
                                       <textarea class="form-control" name="deskripsi_produk" required placeholder="ISI DENGAN DESKRIPSI PRODUK" style="height:200px;"></textarea>
                                    </div>
                                   <div class="form-group">
                                        <label>Upload Gambar</label>
                                        <input type="file" name="gambar" required >
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