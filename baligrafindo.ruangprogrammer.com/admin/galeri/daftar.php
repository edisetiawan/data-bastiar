<!-- ini untuk fungsi menghapus data -->
<?php 
        if (isset($_GET['hapus'])) {
            $hapusgaleri = mysql_query("DELETE FROM galeri where idgaleri = '".$_GET['hapus']."'");
            if ($hapusgaleri) {
                 echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=galeri/daftar' </script>";exit;
            }
        }
 ?>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Data Galeri</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Data</a>
        </li>
        <li class="active">
            <strong>Data Galeri</strong>
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
                <h5>Data Galeri</h5>
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
                <th>Nama Album</th>
                <th>Judul Foto</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                    <?php 
                        $no=1;
                        // for select / show data galeri
                        $sql = mysql_query("SELECT * FROM galeri g join album a on g.idalbum = a.idalbum ORDER BY g.idgaleri DESC");
                        while ($row = mysql_fetch_array($sql)) {
                            $gambar = $row['gambar'];
                            echo "<tr class='gradeX'>
                                    <td>".++$no."</td>
                                    <td>".$row['album']."</td>
                                    <td>".$row['judul_foto']."</td>
                                    <td align='center'><img src='../gambar/".$gambar."' class='img-thumbnail' width='100' height='100'></td>
                                    <td>
                                        <a class='btn btn-xs btn-info' href='index.php?hal=galeri/ubah&id=".$row['idgaleri']."'><span class='fa fa-pencil-square-o'></span> Ubah</a>
                                        <a class='btn btn-xs btn-danger' href='index.php?hal=galeri/daftar&hapus=".$row['idgaleri']."'><span class='fa fa-trash'></span> Hapus</a> 
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