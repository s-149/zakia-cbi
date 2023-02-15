
<script type="text/javascript" >
    function validasi(form){
        if (form.No_faktur.value=="") {
            alert("No_faktur Tidak Boleh Kosong");
            form.No_faktur.focus();
            return(false);
        }if (form.Kd_supplier.value=="") {
            alert("Kd_supplier Tidak Boleh Kosong");
            form.Kd_supplier.focus();
            return(false);
            
        }if (form.Tgl_beli.value=="") {
            alert("Tgl_beli Tidak Boleh Kosong");
            form.Tgl_beli.focus();
            return (false);
        }if (form.Total_beli.value=="") {
            alert("Total_beli Tidak Boleh Kosong");
            form.Total_beli.focus();
            return(false);
        }if (form.Total_bayar.value=="") {
            alert("Total_bayar Tidak Boleh Kosong");
            form.Total_bayar.focus();
            return(false);
        }

        return(true);
    }
</script>

<div class="panel panel-default">
<div class="panel-heading">
		Tambah Data Pembelian
 </div> 
<div class="panel-body">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data" onsubmit="return validasi(this)" >
                <div class="form-group">
                    <label>No_faktur</label>
                    <input class="form-control" name="No_faktur" id="No_faktur" />
                    
                </div>

                <div class="form-group">
                    <label> Kd_supplier</label>
                    <select class="form-control" name="Kd_supplier" id="Kd_supplier">
                        <option value=""> == Pilih Kode Suplier == </option>
                        <?php
                        $_sql = $koneksi->query("select * from tsupplier ");
                        while ($_data= $_sql->fetch_assoc()) {  ?>
                        <option value="<?php echo $_data['Kd_supplier'];?>"><?php echo $_data['Kd_supplier'];?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label>Tgl_beli</label>
                    <input type="date" class="form-control" name="Tgl_beli" id="Tgl_beli">
                </div>
                
                <div class="form-group">
                    <label>Total_beli</label>
                    <input type="number" class="form-control" name="Total_beli" id="Total_beli" />
                </div>

                <div class="form-group">
                    <label>Total_bayar</label>
                    <input type="number" class="form-control" name="Total_bayar" id="Total_bayar" />
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
 	$Kd_supplier = $_POST ['Kd_supplier'];
 	$Tgl_beli = $_POST ['Tgl_beli'];
    $Total_beli = $_POST['Total_beli'];
    $Total_bayar = $_POST['Total_bayar'];

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {        
       
 		
 		$sql = $koneksi->query("insert into `tpembelianmaster`(`No_faktur`, `Kd_supplier`, `Tgl_beli`, `Total_beli`, `Total_bayar`)values('$No_faktur', '$Kd_supplier', '$Tgl_beli', '$Total_beli', '$Total_bayar')");

        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Data Berhasil Disimpan");
                        window.location.href="?page=pembelian";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Proses terhenti, Silahkan ulangi kembali.");
                        window.location.href="?page=pembelian&aksi=tambah";

                    </script>

                ';

            }
        
        
    }

 ?>                

