
<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Suplier
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=suplier&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kd_supplier</th>
                        <th>Nama_supplier</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Tlp</th>
                        <!-- <th>Website</th> -->
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from tsupplier ");

                        while ($data= $sql->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['Kd_supplier'];?></td>
                        <td><?php echo $data['Nama_supplier'];?></td>
                        <td><?php echo $data['Alamat'];?></td>
                        <td><?php echo $data['Email'];?></td>
                        <td><?php echo $data['Tlp'];?></td>
                        <!-- <td><?php // echo $data['Website'];?></td> -->

                         <td>
                            <a href="?page=suplier&aksi=ubah&id=<?php echo $data['Kd_supplier']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=suplier&aksi=hapus&id=<?php echo $data['Kd_supplier']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                        </td>
                    </tr>


                    <?php  } ?>
                </tbody>

                </table>
              </div>
    </div>
 </div>
</div>
</div>                          