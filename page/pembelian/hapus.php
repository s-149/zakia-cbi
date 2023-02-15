
 <?php


    $id=$_GET['id'];

        $sql = $koneksi->query("delete from tpembelianmaster where No_faktur='$id'");

        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Data Berhasil Dihapus");
                        window.location.href="?page=pembelian";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Proses terhenti, Silahkan ulangi kembali.");
                        window.location.href="?page=pembelian";

                    </script>

                ';

            }

 ?>                

