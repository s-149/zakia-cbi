
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
		Tambah Data Transaksi
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" onsubmit="return validasi(this)" >
                <div class="form-group">
                    <label>No_faktur</label>
                    <select class="form-control" name="No_faktur" id="No_faktur">
                        <option value=""> == Pilih No Faktur == </option>
                        <?php
                        $_sql1 = $koneksi->query("select * from tpembelianmaster ");
                        while ($_data1= $_sql1->fetch_assoc()) {  ?>
                        <option value="<?php echo $_data1['No_faktur'];?>"><?php echo $_data1['No_faktur'];?></option>
                        <?php } ?>
                    </select>
                    
                </div>

                <div class="form-group">
                    <label>Kd_barang</label>
                    <select class="form-control" name="Kd_barang" id="Kd_barang">
                        <option value=""> == Pilih Kode Barang == </option>
                        <?php
                        $_sql = $koneksi->query("select * from tbarang ");
                        while ($_data= $_sql->fetch_assoc()) {  ?>
                        <option value="<?php echo $_data['Kd_barang'];?>"><?php echo $_data['Kd_barang'];?></option>
                        <?php } ?>
                    </select>
                    
                </div>

                <div class="form-group">
                    <label>Jumlah_barang</label>
                    <input type="number" class="form-control" name="Jumlah_barang" id="Jumlah_barang" />
                </div>
                
                <!-- <div class="form-group">
                    <label>Jumlah_bayar</label>
                    <input type="number" class="form-control" name="Jumlah_bayar" id="Jumlah_bayar" />
                </div> -->

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
    //$Jumlah_bayar = $_POST['Jumlah_bayar'];
 	$simpan = $_POST ['simpan'];

////////////////////////////////////////////////////////////////////////////////////////////////////////

    // mendefinisikan PPN (11%)

////////////////////////////////////////////////////////////////////////////////////////////////////////

    // memanggil data barang yang dipilih
    $PPN1=mysqli_fetch_array(mysqli_query($koneksi,"select * from `tbarang` where `Kd_barang`='$Kd_barang' "));
    $PPN2=$PPN1['Harga'];
    // mencari titik awal persen
    $PPN3=$PPN2/100;
    // menjumlahkan ppn untuk satu barang
    $PPN4=$PPN3*11;
    // menjumlahkan hasil akhir ppn
    $PPN=$PPN4*$Jumlah_barang;

////////////////////////////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////////////////////////

    // mendefinisikan Jumlah barang

////////////////////////////////////////////////////////////////////////////////////////////////////////

    // memanggil data barang yang dipilih
    $_barang1=mysqli_fetch_array(mysqli_query($koneksi,"select * from `tbarang` where `Kd_barang`='$Kd_barang' "));
    $_barang2=$_barang1['Jumlah_barang'];
    // menjumlahkan hasil akhir jumlah barang
    $_barang=$_barang2+$Jumlah_barang;

////////////////////////////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////////////////////////

    // mendefinisikan Jumlah bayar

////////////////////////////////////////////////////////////////////////////////////////////////////////

    // memanggil data barang yang dipilih
    $_bayar1=mysqli_fetch_array(mysqli_query($koneksi,"select * from `tbarang` where `Kd_barang`='$Kd_barang' "));
    $_bayar2=$_bayar1['Harga'];
    // menjumlahkan hasil akhir jumlah barang
    $_bayar=$_bayar2*$Jumlah_barang;

////////////////////////////////////////////////////////////////////////////////////////////////////////



 	if ($simpan) {        
       
 		
 		$sql = $koneksi->query("insert into `tpembeliandetail`(`No_faktur`, `Kd_barang`, `Jumlah_barang`, `Jumlah_bayar`,`PPN`)values('$No_faktur', '$Kd_barang', '$Jumlah_barang', '$_bayar','$PPN')");
        $_sql = $koneksi->query("update  tbarang set Jumlah_barang='$_barang' where Kd_barang='$Kd_barang'");

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
                        window.location.href="?page=transaksi&aksi=tambah";

                    </script>

                ';

            }
        
        
    }

 ?>                

