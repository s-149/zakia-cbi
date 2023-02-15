<?php
    
    $id=$_GET['id'];
    $sql = $koneksi->query("select * from tsupplier where Kd_supplier='$id'");
    $data = $sql->fetch_assoc();

?>

<script type="text/javascript" >
    function validasi(form){
        if (form.Kd_supplier.value=="") {
            alert("Kd_supplier Tidak Boleh Kosong");
            form.Kd_supplier.focus();
            return(false);
        }if (form.Nama_supplier.value=="") {
            alert("Nama_supplier Tidak Boleh Kosong");
            form.Nama_supplier.focus();
            return(false);
            
        }if (form.Alamat.value=="") {
            alert("Alamat Tidak Boleh Kosong");
            form.Alamat.focus();
            return (false);
        }if (form.Email.value=="") {
            alert("Email Tidak Boleh Kosong");
            form.Email.focus();
            return(false);
        }if (form.Tlp.value=="") {
            alert("Tlp Tidak Boleh Kosong");
            form.Tlp.focus();
            return(false);
        }
        // if (form.Website.value=="") {
        //     alert("Website Tidak Boleh Kosong");
        //     form.Website.focus();
        //     return(false);
        // }

        return(true);
    }
</script>

<div class="panel panel-default">
<div class="panel-heading">
		Edit Data Suplier
 </div> 
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    <form method="POST" enctype="multipart/form-data" onsubmit="return validasi(this)" >
                                        <div class="form-group">
                                            <label>Kd_supplier</label>
                                            <input class="form-control" name="Kd_supplier" value="<?php echo $data['Kd_supplier'];?>" />
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Nama_supplier</label>
                                            <input class="form-control" name="Nama_supplier" type="Nama_supplier" id="pass" value="<?php echo $data['Nama_supplier'];?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea class="form-control" name="Alamat" id="Alamat" rows="5"><?php echo $data['Alamat'];?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="Email"  id="pass" value="<?php echo $data['Email'];?>"/>
                                            
                                        </div>

                                        <div class="form-group">
                                            <label>Tlp</label>
                                            <input type="number" class="form-control" name="Tlp" id="Tlp" value="<?php echo $data['Tlp'];?>" />
                                        </div>

                                        <!-- <div class="form-group">
                                            <label>Website</label>
                                            <input type="number" class="form-control" name="Website" id="Website" value="<?php // echo $data['Website'];?>" />
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

 	$Kd_supplier = $_POST ['Kd_supplier'];
 	$Nama_supplier = $_POST ['Nama_supplier'];
    $Alamat = $_POST ['Alamat'];
    $Email = $_POST ['Email'];
    $Tlp = $_POST ['Tlp'];
    //$Website = $_POST ['Website'];

 	$simpan = $_POST ['simpan'];


 	if ($simpan) {   
       
        
        $sql = $koneksi->query("update  tsupplier set Kd_supplier='$Kd_supplier', Nama_supplier='$Nama_supplier', Alamat='$Alamat', Email='$Email', Tlp='$Tlp' where Kd_supplier='$id'");

        if ($sql) 
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Data Berhasil Disimpan");
                        window.location.href="?page=suplier";

                    </script>

                ';
            }
        else
            {
                print'

                    <script type="text/javascript">
                    
                        alert ("Proses terhenti, Silahkan ulangi kembali.");
                        window.location.href="index.php?id=".$id."&page=suplier&aksi=ubah";

                    </script>

                ';

            }
        
        
    }

 ?>                

