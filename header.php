    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0;  ">
            <label><font color="white" face="arrial" size="6" style="padding: 10px 5px 5px 15px;float: right;">
                <img width="50px" style="border-radius: 500px;" src="<?=$icon?>"><?=$organisasi?>
            </font></label>
            <div style="padding: 10px 50px 5px 50px; float: right;">
                <!-- <a href="?page=akun&id=<?=$_Akun?>" title="Akun"><img style="border-radius: 200px; " width="50px" src="gambar/user/<?=$akun['Fhoto']?>" alt="Pengguna"></a> -->
                <a  style=" padding: 10px 5px 5px 15px; float: right;" onclick="return confirm('yakin ingin meninggalkan halaman ini?')" href="logout.php" class="" title="Keluar"><i class="fa fa-power-off fa-2x"></i></a>
            </div>
            <div style=" padding: 10px 50px 5px 50px; float: right;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </nav> 
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
               <ul class="nav" id="main-menu">
                    <li>
                        <a  href="index.php"><i class="fa fa-dashboard fa-2x"></i> Dashboard</a>
                    </li>
                    <?php if ($_SESSION['admin']) {?>
                    <li>
                        <a href="#"><i class="fa fa-laptop fa-2x"></i> Data Master<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a  href="?page=barang"></i> Data Barang</a></li>
                            <li><a  href="?page=suplier"></i> Data Suplier</a></li>
                            <li><a  href="?page=pembelian"></i> Data Pembelian</a></li>
                        </ul>
                     </li>
                     <?php } ?>
                    <li>
                        <a  href="?page=transaksi"><i class="fa fa-edit fa-2x"></i></i> Data Transaksi</a>
                    </li>
                   

                    <?php if ($_SESSION['admin']) {?> 
                     
                    <li>
                        <a  href="?page=pengguna"><i class="fa fa-user fa-2x"></i></i> Data Pengguna</a>
                    </li>
                    <?php } ?>   
                    <li>
                        <a href="#"><i class="fa fa-calendar fa-2x"></i> Laporan<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="cetak.php?page=barang" target="_blank"></i> Laporan Barang</a></li>
                            <li><a href="cetak.php?page=suplier" target="_blank"></i> Laporan Suplier</a></li>
                            <li><a href="cetak.php?page=pengguna" target="_blank"></i> Laporan Pengguna</a></li>
                            <li><a href="index.php?page=pembelian&aksi=cetak"  target="_blank"></i> Laporan Pembelian</a></li>
                            <li><a href="cetak.php?page=transaksi" target="_blank"></i> Laporan Transaksi</a></li>
                        </ul>
                     </li>  
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        