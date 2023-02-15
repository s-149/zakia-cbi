<?php
	error_reporting(0);
    session_start();

    include "koneksi.php";

    if($_SESSION['admin'] || $_SESSION['user']){

      // memanggil data login tiap user

      $UserName=$_SESSION['user'];

    include "rupiah.php";
    include "variabel.php";

    include "kepala.php";
    include "header.php";

                      
            $page = $_GET['page'];
            $aksi = $_GET['aksi'];


                if ($page=="") 
                    {
                        include "home.php";
                    }

                else 
                    {
                        if ($aksi == "") 
                            {
                                include "page/".$page."/index.php";
                            }
                        else 
                            {
                                include "page/".$page."/".$aksi.".php";
                            }
                    }

    include "kaki.php";

    }else{
        header("location:login.php");
    }
?>
