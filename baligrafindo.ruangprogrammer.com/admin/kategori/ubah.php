<?php 
           $id = $_GET['id'];
           $row = mysql_fetch_array(mysql_query("SELECT * FROM kategori_produk where idkategori_produk = '".$id."'"));
            if (isset($_POST['ubah'])) {
                $queryubahkategori = mysql_query("UPDATE kategori_produk set kategori = '".$_POST['kategori']."' where idkategori_produk = '".$id."' "); 
                if ($queryubahkategori) {
                      echo "<script> alert('Data Berhasil Diubah'); location.href='index.php?hal=kategori/daftar' </script>";exit;
                }else{
                      echo "<script> alert('Data Gagal Berhasil Diubah'); location.href='index.php?hal=kategori/ubah&id=$id' </script>";exit;
                }
            }
 ?>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Data Kategori Produk Baru</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Data</a>
        </li>
        <li class="active">
            <strong>Tambah Kategori Produk Baru</strong>
        </li>
    </ol>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div align="right">
            <div class="btn-group">
                <a class="btn btn-info btn-xs" type="button" href="index.php?hal=kategori/daftar" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                <a  class="btn btn-success btn-xs" type="button" href="index.php?hal=kategori/tambah"  ><span class="fa fa-plus"></span> Tambah</a>
            </div>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Form Tambah Kategori Produk Baru</h5>
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
                                        <label>Kategori Produk</label>
                                        <input type="text" class="form-control" name="kategori" required placeholder="ISI DENGAN NAMA KATEGORI" value="<?php echo $row['kategori']; ?>">
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