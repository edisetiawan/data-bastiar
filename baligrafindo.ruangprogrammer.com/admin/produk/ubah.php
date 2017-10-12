
<?php 
        $id  = $_GET['id'];
        $row = mysql_fetch_array(mysql_query("SELECT * FROM produk p join kategori_produk k on p.idkategori_produk = k.idkategori_produk where p.idproduk = '".$id."'"));
        $gambar  = $row['gambar'];

        if (isset($_POST['ubah'])) {
            
            if (!empty($_FILES) && $_FILES['gambar']['size'] >0 && $_FILES['gambar']['error'] == 0) {
                          $fileName = $_FILES['gambar']['name'];
                          $move = move_uploaded_file($_FILES['gambar']['tmp_name'], '../gambar/'.$fileName);
                     if ($move) {
                          $queryubah = mysql_query("UPDATE produk set 
                                                  nama_produk = '".$_POST['nama_produk']."'
                                                  ,idkategori_produk = '".$_POST['idkategori_produk']."',
                                                  deskripsi_produk = '".$_POST['deskripsi_produk']."',
                                                  gambar = '".$fileName."'

                                                  WHERE idproduk = '".$id."'");

                     }
                        
                     }else{
                          $queryubah = mysql_query("UPDATE produk set 
                                                  nama_produk = '".$_POST['nama_produk']."'
                                                  ,idkategori_produk = '".$_POST['idkategori_produk']."',
                                                  deskripsi_produk = '".$_POST['deskripsi_produk']."'
                                                  WHERE idproduk = '".$id."'");
                          }
                     if ($queryubah) {
                           echo "<script> alert('Terimakasih Data Berhasil Disimpan'); location.href='index.php?hal=produk/daftar' </script>";exit;
                     }else{
                           echo "<script> alert(' Data Gagal Disimpan'); location.href='index.php?hal=produk/ubah&id=$id' </script>";exit;
                     }
        }
 ?>
 
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Data Produk </h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Data</a>
        </li>
        <li class="active">
            <strong>Tambah Produk </strong>
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
                <h5>Form Tambah Produk </h5>
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
                                        <input type="text" class="form-control" name="nama_produk" required placeholder="ISI DENGAN JUDUL PRODUK" value="<?php echo $row['nama_produk']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori Produk</label>
                                     <select class="form-control select2" name="idkategori_produk" required>
                                       <option value="null">Pilih Kategori Produk</option>
                                          <?php 
                                              $querykategori = mysql_query("SELECT * from kategori_produk order by idkategori_produk ASC ");
                                              while ($kategori  = mysql_fetch_array($querykategori)) {
                                           ?>
                                           <option value="<?php echo $kategori['idkategori_produk']; ?>"
                                             <?php if($kategori['idkategori_produk']=='$row[idkategori_produk]'){echo "selected=selected";}?>>
                                             <?php echo $row['kategori']; ?>
                                             </option>
                                             <?php } ?>
                                     </select>
                                    </div>
                                    
                                   <div class="form-group">
                                        <label>Deskripsi</label>
                                       <textarea class="form-control" name="deskripsi_produk" required placeholder="ISI DENGAN DESKRIPSI PRODUK" style="height:200px;"><?php echo $row['deskripsi_produk']; ?></textarea>
                                    </div>
                                   <div class="form-group">
                                        <label>Ubah Gambar</label>
                                        <img src="../gambar/<?php echo $gambar; ?>" class="img-rounded" width="100">
                                        <input type="file" name="gambar">
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