<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">
                    DATA PENGUMUMAN
                </div>
                <div class="card-body table-responsive">
                    <a href="<?= base_url('pengumuman/tambah') ?>" class="btn btn-md btn-success" style="margin-bottom: 10px"><i class="bi bi-plus-square-fill"></i> ADD DATA</a>
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">NO</th>
                                <th scope="col">NAMA USER</th>
                                <th scope="col">ISI PENGUMUMAN</th>
                                <th scope="col">LAMPIRAN</th>
                                <th scope="col">TANGGAL PENGUMUMAN</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>


                            <?php
                            $no = 1;
                            foreach ($pengumuman as $value) {
                            ?>
                                <tr>

                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $value['id_user'] ?></td>
                                    <td><?php echo $value['isi_pengumuman'] ?></td>
                                    <td><?php echo $value['lampiran'] ?></td>
                                    <td><?php echo $value['tanggal_pengumuman'] ?></td>

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