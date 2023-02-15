<?php
    
    // metta
    $description="Sistem Pembelian";
    $author="MR S-149 dan Team Peneliti CBI (Sabar, Zakia";
    $keyword="Sistem Pemasaran, Vanila ";

    // title
    $title="SISTEM PEMBELIAN";

    // nama/organisasi/lembaga (Sesingkat Mungkin memberi nama pada variabel ini,gunakan huruf kapital)
    $organisasi="MI DAARUSSA’ADAH";

    // icon
    $icon="images/logo/logo.jpeg";

    $Tahun_Sekarang=date('Y');
    $KodeTransaksi=date('d_M_Y_h_i_s');

    // mendefinisikan Akses User

      $akun=mysqli_fetch_array(mysqli_query($koneksi,"select * from `tb_user` where `username` ='$UserName'"));
      $Fhoto=$akun['foto'];
      $Level=$akun['level'];

    // mendefinisikan Data Suplier

      $suplier=mysqli_fetch_array(mysqli_query($koneksi,"select * from `tsupplier`"));

/**
    // jumlah user

    $login="select * from `user` ";
    $query=mysqli_query($koneksi,$login);
    $jml_user=0;
        while($data=mysqli_fetch_array($query)) 
            { 
                $jml_user++;
            }

    **/
?> 