<!-- ini untuk fungsi menghapus data -->
<?php 
        if (isset($_GET['hapus'])) {
            $hapustestimoni = mysql_query("DELETE FROM testimoni where idtestimoni = '".$_GET['hapus']."'");
            if ($hapustestimoni) {
                 echo "<script> alert('Data Berhasil Dihapus'); location.href='index.php?hal=testimoni/daftar' </script>";exit;
            }
        }
 ?>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Data Testimoni</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Data</a>
        </li>
        <li class="active">
            <strong> Testimoni</strong>
        </li>
    </ol>
</div>
</div>  

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Master Testimoni</h5>
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
                <th>Tanggal Publish</th>
                <th>Nama Pengunjung</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
                    <?php 
                        $no=1;
                        // for select / show data testimoni
                        $sql = mysql_query("SELECT * FROM testimoni ORDER BY idtestimoni DESC");
                        while ($row = mysql_fetch_array($sql)) {
                            echo "<tr class='gradeX'>
                                    <td>".$no++."</td>
                                    <td>".$row['tgl_posting']."</td>
                                    <td>".$row['namapengunjung']."</td>
                                    <td>".$row['email']."</td>
                                    <td>".$row['pesan']."</td>
                                    <td>
                                        <a class='btn btn-xs btn-danger' href='index.php?hal=testimoni/daftar&hapus=".$row['idtestimoni']."'><span class='fa fa-trash'></span> Hapus</a> 
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