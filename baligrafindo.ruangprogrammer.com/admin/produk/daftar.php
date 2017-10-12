<!-- ini untuk fungsi menghapus data -->
<?php 
        if (isset($_GET['hapus'])) {
            $hapusproduk = mysql_query("DELETE FROM produk where idproduk = '".$_GET['hapus']."'");
            if ($hapusproduk) {
                 echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=produk/daftar' </script>";exit;
            }
        }
 ?>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Data Produk</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Data</a>
        </li>
        <li class="active">
            <strong>Data Produk</strong>
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
                <h5>Data Produk</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover datatable" id="tabel">
            <thead>
            <tr>
                <th>No</th>
                <th>Judul produk</th>
                <th>Tanggal Posting</th>
                <th>Kategori Produk</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                    <?php 
                        $no=1;
                        // for select / show data produk
                        $sql = mysql_query("SELECT * FROM produk p join kategori_produk k on p.idkategori_produk = k.idkategori_produk order by p.idproduk DESC");
                        while ($row = mysql_fetch_array($sql)) {
                            $gambar = $row['gambar'];
                            echo "<tr class='gradeX'>
                                    <td>".$no++."</td>
                                    <td>".$row['nama_produk']."</td>
                                    <td>".$row['tgl_posting']."</td>
                                     <td>".$row['kategori']."</td>
                                    <td>".$row['deskripsi_produk']."</td>
                                    <td><img src='../gambar/".$gambar."' class='img-thumbnail' width='100' height='100'></td>
                                    <td>
                                        <a class='btn btn-xs btn-info' href='index.php?hal=produk/ubah&id=".$row['idproduk']."'><span class='fa fa-pencil-square-o'></span> Ubah</a>
                                        <a class='btn btn-xs btn-danger' href='index.php?hal=produk/daftar&hapus=".$row['idproduk']."'><span class='fa fa-trash'></span> Hapus</a> 
                                    </td>
                                </tr>";       
                        }
                     ?>
                    </tbody>
                    </table>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            
        </div>