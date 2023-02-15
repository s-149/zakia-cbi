<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from tbarang where Kd_barang='$id'");
    $data = $sql->fetch_assoc();

?>
    <script type="text/javascript" >
        function validasi(form){
            if (form.Kd_barang.value=="") {
                alert("Kd_barang Tidak Boleh Kosong");
                form.Kd_barang.focus();
                return(false);
            }if (form.Nama_barang.value=="") {
                alert("Nama_barang Tidak Boleh Kosong");
                form.Nama_barang.focus();
                return(false);
                
            }if (form.Jumlah_barang.value=="") {
                alert("Jumlah_barang Tidak Boleh Kosong");
                form.Jumlah_barang.focus();
                return (false);
            }if (form.Satuan.value=="") {
                alert("Satuan Tidak Boleh Kosong");
                form.Satuan.focus();
                return(false);
            }if (form.Harga.value=="") {
                alert("Harga Tidak Boleh Kosong");
                form.Harga.focus();
                return(false);
            }

            return(true);
        }
    </script>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                        		Edit Data Barang
                         </div> 
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" enctype="multipart/form-data" onsubmit="return validasi(this)" >
                                        <div class="form-group">
                                            <label>Kd_barang</label>
                                            <input class="form-control" name="Kd_barang" value="<?php echo $data['Kd_barang'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama_barang</label>
                                            <input class="form-control" name="Nama_barang" type="Nama_barang" id="pass" value="<?php echo $data['Nama_barang'];?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah_barang</label>
                                            <input type="number" class="form-control" name="Jumlah_barang" id="Jumlah_barang" value="<?php echo $data['Jumlah_barang'];?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Satuan</label>
                                            <input class="form-control" name="Satuan"  id="pass" value="<?php echo $data['Satuan'];?>"/>
                                        </div>
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" class="form-control" name="Harga" id="Harga" value="<?php echo $data['Harga'];?>" />
                                        </div>
                                        <div>
                                        	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>
                                    </form>
                                </div>
                            </div>  
                        </div>  
                    </div>


 <?php

 	$Kd_barang = $_POST ['Kd_barang'];
 	$Nama_barang = $_POST ['Nama_barang'];
    $Jumlah_barang = $_POST ['Jumlah_barang'];
    $Satuan = $_POST ['Satuan'];
    $Harga = $_POST ['Harga'];

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {   
       
        
        $sql = $koneksi->query("update  tbarang set Kd_barang='$Kd_barang', Nama_barang='$Nama_barang', Jumlah_barang='$Jumlah_barang', Satuan='$Satuan', Harga='$Harga' where Kd_barang='$id'");

        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Data Berhasil Disimpan");
                        window.location.href="?page=barang";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Proses terhenti, Silahkan ulangi kembali.");
                        window.location.href="index.php?id=".$id."&page=barang&aksi=ubah";

                    </script>

                ';

            }
        
        
    }

 ?>                

