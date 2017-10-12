<?php 
        include '../koneksi/koneksi.php';
        if(isset($_POST['login']))
          {
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            
            $no = 0;
            $sql="SELECT * from pengguna where email = '$email' and password ='$password'";
            $result = mysql_query($sql);
            while($log=mysql_fetch_array($result))
              {
                $idpengguna = $log['idpengguna'];
                $email = $log['email'];
                $namalengkap = $log['namalengkap'];
                $password = md5($log['password']);
                $no++;
              }
          
            if($no>0)
            {
              $_SESSION['idpengguna'] = $idpengguna ;
              $_SESSION['email'] = $email;
              $_SESSION['namalengkap'] = $namalengkap ;
              $_SESSION['password'] = $password;
              
              echo "<script> alert('Terimakasih Anda Telah Sukses Login'); location.href='index.php' </script>";exit;
            }
          
            else
            {
              
              echo "<script> alert('Maaf Data Yang Anda Masukkan Salah'); location.href='index.php?hal=login' </script>";exit;
            }
          }
 ?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PT Bali Media Grafindo</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown" style="background-color:white; margin-top:80px;  ">
        <div class="row">

            <div class="col-md-6">
                <h2 class="font-bold">PT Bali Media Grafindo</h2>

                <p>
                   PT Bali Media Grafindo
                   Mencapai 1 dekade sejak awa lpendirian PT Bali Media Grafindo berfokus pada penyediaan teknologi dan material pendukung industry grafika.Dengan filosofi kerja yang selalu mengutamakan layanan terbaik dan turut serta dalam mengembangkan industri grafika di Indonesia.<br> <a href="../index.php" class="btn btn-flat btn-sm btn-info"> <span class="fa fa-desktop"></span> Lihat Website</a>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-contentLogin">
                    <img src="../gambar/logo.png" class="img-responsive">
                    <form class="m-t" role="form" method="POST">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password" required="">
                        </div>
                        <button type="submit" name="login" class="btn btn-primary block full-width m-b"><span class="fa fa-sign-in"></span> Login</button>
                    </form>
                    <p class="m-t">
                        <small style="color:white;" class="pull-right">PT Bali Media Grafindo - 2016</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright PT Bali Media Grafindo
            </div>
            <div class="col-md-6 text-right">
               <small>© 2016-2017</small>
            </div>
        </div>
    </div>
</body>
</html>
