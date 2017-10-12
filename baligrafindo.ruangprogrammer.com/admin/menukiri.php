<nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-responsive" src="../gambar/logo.png"  width="250" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Administrator</strong>
                             </span> <span class="text-muted text-xs block"><?php echo $_SESSION['namalengkap']; ?><b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="index.php?hal=pengguna/profilpengguna&id=<?php echo $_SESSION['idpengguna']; ?>">Profil</a></li>
                                <li class="divider"></li>
                                <li><a href="index.php?logout=1">Keluar</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            <span class="fa fa-home fa-2x"></span>
                        </div>
                    </li>
                    <li class="active">
                        <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">HOME</span> </a>
                    </li>
                    <li>
                        <a href="index.php?hal=pengguna/daftar"><i class="fa fa-users"></i> <span class="nav-label">MASTER PENGGUNA</span></a>
                    </li>
                    <li>
                        <a href="index.php?hal=profil/daftar"><i class="fa fa-home"></i> <span class="nav-label">MASTER PROFIL</span>  </a>
                    </li>
                    <li>
                        <a href="index.php?hal=berita/daftar"><i class="fa fa-calendar"></i> <span class="nav-label">DATA BERITA</span></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">OLAH PRODUK</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="index.php?hal=kategori/daftar"><span class="fa fa-tags"></span> KATEGORI PRODUK</a></li>
                            <li><a href="index.php?hal=produk/daftar"><span class="fa fa-book"></span> PRODUK</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-picture-o"></i> <span class="nav-label">DATA GALERI FOTO</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="index.php?hal=album/daftar"><span class="fa fa-tag"></span> ALBUM FOTO</a></li>
                            <li><a href="index.php?hal=galeri/daftar"><span class="fa fa-camera"></span> GALERI FOTO</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.php?hal=testimoni/daftar"><i class="fa fa-envelope"></i> <span class="nav-label">TESTIMONI</span></a>
                    </li>
                </ul>

            </div>
        </nav>