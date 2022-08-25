<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    DATA PERUSAHAAN
                </div>
                <div class="card-body table-responsive">
                    <a href="index.php?page=perusahaan&act=tambah" class="btn btn-md btn-success" style="margin-bottom: 10px"><i class="bi bi-plus-square-fill"></i> ADD DATA</a>
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">NAMA PERUSAHAAN</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">JAM MASUK</th>
                                <th scope="col">JAM PULANG</th>
                                <th scope="col">JAM TERLAMBAT</th>
                                <th scope="col">NO HP</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">REKENING</th>
                                <th scope="col">NPWP</th>
                                <th scope="col">TANGGAL BERDIRI</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $no = 1;
                            foreach ($perusahaan as $value) {
                            ?>

                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $value['nama_perusahaan'] ?></td>
                                    <td><?php echo $value['alamat_perusahaan'] ?></td>
                                    <td><?php echo $value['jam_masuk'] ?></td>
                                    <td><?php echo $value['jam_pulang'] ?></td>
                                    <td><?php echo $value['jam_terlambat'] ?></td>
                                    <td><?php echo $value['no_hp'] ?></td>
                                    <td><?php echo $value['email'] ?></td>
                                    <td><?php echo $value['no_rek_perusahaan'] ?></td>
                                    <td><?php echo $value['npwp'] ?></td>
                                    <td><?php echo $value['tanggal_berdiri'] ?></td>

                                    <td class="text-center">
                                        <a href="" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square">Update</i></a>
                                        <a href="" class="btn btn-sm btn-danger"><i class="bi bi-trash"></i>Delete</a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>