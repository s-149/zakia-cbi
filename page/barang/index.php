<div class="row">
<div class="col-md-12">
<!-- Advanced Tables -->
<div class="panel panel-default">
    <div class="panel-heading">
         Data Barang
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <div>
                <a href="?page=barang&aksi=tambah" class="btn btn-success" style="margin-top: 8px;"><i class="fa fa-plus"></i> Tambah Data</a>
            </div><br>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kd_barang</th>
                        <th>Nama_barang</th>
                        <th>Jumlah_barang</th>
                        <th>Satuan</th>
                        <th>Harga</th>
                        <th width="19%">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                        $no = 1;

                        $sql = $koneksi->query("select * from tbarang ");

                        while ($data= $sql->fetch_assoc()) {       
                       
                    ?>

                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['Kd_barang'];?></td>
                        <td><?php echo $data['Nama_barang'];?></td>
                        <td><?php echo $data['Jumlah_barang'];?></td>
                        <td><?php echo $data['Satuan'];?></td>
                        <td><?php echo BuatRp($data['Harga']);?>.00</td>

                         <td>
                            <a href="?page=barang&aksi=ubah&id=<?php echo $data['Kd_barang']; ?>" class="btn btn-warning" ><i class="fa fa-edit"></i> Ubah</a>
                            <a onclick="return confirm('Anda yakin ingin menghapus?')" href="?page=barang&aksi=hapus&id=<?php echo $data['Kd_barang']; ?>" class="btn btn-danger" ><i class="fa fa-trash"></i> Hapus</a>

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