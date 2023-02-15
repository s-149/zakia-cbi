<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from tsupplier where No='$id'");
    $data = $sql->fetch_assoc();

?>

<script type="text/javascript" >
    function validasi(form){
        if (form.No_faktur.value=="") {
            alert("No_faktur Tidak Boleh Kosong");
            form.No_faktur.focus();
            return(false);
        }if (form.Kd_barang.value=="") {
            alert("Kd_barang Tidak Boleh Kosong");
            form.Kd_barang.focus();
            return(false);
            
        }if (form.Jumlah_barang.value=="") {
            alert("Jumlah_barang Tidak Boleh Kosong");
            form.Jumlah_barang.focus();
            return (false);
        }if (form.Jumlah_bayar.value=="") {
            alert("Jumlah_bayar Tidak Boleh Kosong");
            form.Jumlah_bayar.focus();
            return(false);
        }

        return(true);
    }
</script>

<div class="panel panel-default">
<div class="panel-heading">
		Edit Data Transaksi
 </div> 
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form method="POST" enctype="multipart/form-data" onsubmit="return validasi(this)" >
                                        <div class="form-group">
                                            <label>No_faktur</label>
                                            <input class="form-control" name="No_faktur" value="<?php echo $data['No_faktur'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Kd_barang</label>
                                            <input class="form-control" name="Kd_barang" type="Kd_barang" id="pass" value="<?php echo $data['Kd_barang'];?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah_barang</label>
                                            <textarea class="form-control" name="Jumlah_barang" id="Jumlah_barang" rows="5"><?php echo $data['Jumlah_barang'];?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah_bayar</label>
                                            <input class="form-control" name="Jumlah_bayar"  id="pass" value="<?php echo $data['Jumlah_bayar'];?>"/>
                                            
                                        </div>

                                        <div>
                                        	
                                        	<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>
                                 </div>

                                 </form>
                              </div>
 </div>  
 </div>  
 </div>


 <?php

 	$No_faktur = $_POST ['No_faktur'];
 	$Kd_barang = $_POST ['Kd_barang'];
    $Jumlah_barang = $_POST ['Jumlah_barang'];
    $Jumlah_bayar = $_POST ['Jumlah_bayar'];

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {   
       
        
        $sql = $koneksi->query("update  tpembeliandetail set No_faktur='$No_faktur', Kd_barang='$Kd_barang', Jumlah_barang='$Jumlah_barang', Jumlah_bayar='$Jumlah_bayar' where No='$id'");

        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Data Berhasil Disimpan");
                        window.location.href="?page=transaksi";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Proses terhenti, Silahkan ulangi kembali.");
                        window.location.href="index.php?id=".$id."&page=transaksi&aksi=ubah";

                    </script>

                ';

            }
        
        
    }

 ?>                

