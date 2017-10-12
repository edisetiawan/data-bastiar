<!-- ini untuk fungsi menghapus data -->
<?php 
        if (isset($_GET['hapus'])) {
            $hapusberita = mysql_query("DELETE FROM berita where idberita = '".$_GET['hapus']."'");
            if ($hapusberita) {
                 echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=berita/daftar' </script>";exit;
            }
        }
 ?>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Data Berita</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Data</a>
        </li>
        <li class="active">
            <strong>Data Berita</strong>
        </li>
    </ol>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div align="right">
            <div class="btn-group">
                <a class="btn btn-info btn-xs" type="button" href="index.php?hal=berita/daftar" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                <a  class="btn btn-success btn-xs" type="button" href="index.php?hal=berita/tambah"  ><span class="fa fa-plus"></span> Tambah</a>
            </div>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Data Berita</h5>
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
                <th>Judul berita</th>
                <th>Tanggal Posting</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                    <?php 
                        $no=1;
                        // for select / show data berita
                        $sql = mysql_query("SELECT * FROM berita ORDER BY idberita DESC");
                        while ($row = mysql_fetch_array($sql)) {
                            $gambar = $row['gambar'];
                            echo "<tr class='gradeX'>
                                    <td>".$no++."</td>
                                    <td>".$row['tgl_posting']."</td>
                                    <td>".$row['judul_berita']."</td>
                                    <td>".$row['deskripsi']."</td>
                                    <td><img src='../gambar/".$gambar."' class='img-thumbnail' width='100' height='100'></td>
                                    <td>
                                        <a class='btn btn-xs btn-info' href='index.php?hal=berita/ubah&id=".$row['idberita']."'><span class='fa fa-pencil-square-o'></span> Ubah</a>
                                        <a class='btn btn-xs btn-danger' href='index.php?hal=berita/daftar&hapus=".$row['idberita']."'><span class='fa fa-trash'></span> Hapus</a> 
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