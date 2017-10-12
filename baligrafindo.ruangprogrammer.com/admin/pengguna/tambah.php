<?php 
            if (isset($_POST['simpan'])) {
                $querysimpanpengguna = mysql_query("INSERT INTO pengguna (namalengkap,email,password,nohp,alamat) 
                                                                VALUES ('$_POST[namalengkap]','$_POST[email]',md5($_POST[password]),'$_POST[nohp]','$_POST[alamat]')"); 
                if ($querysimpanpengguna) {
                      echo "<script> alert('Data Berhasil Diubah'); location.href='index.php?hal=pengguna/daftar' </script>";exit;
                }else{
                      echo "<script> alert('Data Gagal Berhasil Diubah'); location.href='index.php?hal=pengguna/tambah' </script>";exit;
                }
            }
 ?>
<div class="row wrapper border-bottom white-bg page-heading">
<div class="col-lg-10">
    <h2>Master Pengguna Baru</h2>
    <ol class="breadcrumb">
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a>Master</a>
        </li>
        <li class="active">
            <strong>Tambah Pengguna Baru</strong>
        </li>
    </ol>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        <div align="right">
            <div class="btn-group">
                <a class="btn btn-info btn-xs" type="button" href="index.php?hal=pengguna/daftar" ><span class="glyphicon glyphicon-th-list"></span> Daftar</a>                    
                <a  class="btn btn-success btn-xs" type="button" href="index.php?hal=pengguna/tambah"  ><span class="fa fa-plus"></span> Tambah</a>
            </div>
        </div>
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Form Tambah Pengguna Baru</h5>
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
                                        <label>Nama Lengkap</label>
                                        <input type="text" class="form-control" name="namalengkap" required placeholder="ISI DENGAN NAMA LENGKAP PENGGUNA">
                                    </div>
                                    <div class="form-group">
                                        <label>Email : </label><i>* Email Akan Dijadikan Untuk Login Aplikasi </i>
                                        <input type="email" class="form-control" name="email" required placeholder="ISI DENGAN EMAIL PENGGUNA">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" required placeholder="ISI DENGAN PASSWORD PENGGUNA" required>
                                    </div>
                                   <div class="form-group">
                                        <label>No.Hp</label>
                                        <input type="text" class="form-control" name="nohp" required placeholder="ISI DENGAN NO Hp PENGGUNA">
                                    </div>
                                   <div class="form-group">
                                        <label>Alamat</label>
                                       <textarea class="form-control" name="alamat" required placeholder="ISI DENGAN ALAMAT PENGGUNA" style="height: 200"></textarea>
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