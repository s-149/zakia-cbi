
<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Pembelian
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=pembelian&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No_faktur</th>
                        <th>Kd_supplier</th>
                        <th>Tgl_beli</th>
                        <th>Total_beli</th>
                        <th>Total_bayar</th>
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from tpembelianmaster ");

                        while ($data= $sql->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['No_faktur'];?></td>
                        <td><?php echo $data['Kd_supplier'];?></td>
                        <td><?php echo $data['Tgl_beli'];?></td>
                        <td><?php echo $data['Total_beli'];?></td>
                        <td><?php echo $data['Total_bayar'];?></td>

                         <td>
                            <a href="?page=pembelian&aksi=ubah&id=<?php echo $data['No_faktur']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=pembelian&aksi=hapus&id=<?php echo $data['No_faktur']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

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