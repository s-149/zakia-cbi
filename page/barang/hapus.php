 <?php
 
    $id=$_GET['id'];

        $sql = $koneksi->query("delete from tbarang where Kd_barang='$id'");

        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Data Berhasil Dihapus");
                        window.location.href="?page=barang";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Proses terhenti, Silahkan ulangi kembali.");
                        window.location.href="?page=barang";

                    </script>

                ';

            }

 ?>                

