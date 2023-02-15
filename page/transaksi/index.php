<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Transaksi
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                 <?php if ($_SESSION['admin']) {?>   
                <a href="?page=transaksi&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
                <?php } ?>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No_faktur</th>
                        <th>Kd_barang</th>
                        <th>Jumlah_barang</th>
                        <th>Jumlah_bayar</th>
                        <th>PPN</th>
                        <?php if ($_SESSION['admin']) {?>
                        <th width="19%">Aksi</th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from tpembeliandetail ");

                        while ($data= $sql->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['No_faktur'];?></td>
                        <td><?php echo $data['Kd_barang'];?></td>
                        <td><?php echo $data['Jumlah_barang'];?></td>
                        <td><?php echo BuatRp($data['Jumlah_bayar']);?>.00</td>
                        <td><?php echo BuatRp($data['PPN']);?>.00</td>
                        <?php if ($_SESSION['admin']) {?>

                         <td>
                            <a href="?page=transaksi&aksi=ubah&id=<?php echo $data['No']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=transaksi&aksi=hapus&id=<?php echo $data['No']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

                        </td>
                        <?php } ?>
                    </tr>


                    <?php  } ?>
                </tbody>

                </table>
              </div>
    </div>
 </div>
</div>
</div>                          