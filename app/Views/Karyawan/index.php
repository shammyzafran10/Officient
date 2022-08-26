
<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-16">
          <div class="card">
            <div class="card-header text-center bg-success p-2 text-white ">
              Data Karyawan
            </div>
            <br>
            <div class="card-body table-responsive">
              <a href="<?= base_url('/Tambah-Karyawan')?>" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              
              <?php
              if (!empty(session()->getFlashdata('success'))){?>
                <div class="alert alert-success">
                <?= session()->getFlashData('success');  ?>
              </div>
             <?php }  ?>
             

              <table class="table table-bordered" id="myTable">
                    <thead >
    <tr>
        <th>NO</th>        
        <th>Foto </th>
        <th>Nama </th>
        <th>Jabatan</th>
        <th>Status</th>
        <th>NIK</th>
        <th>JK</th>
        <th>Alamat</th>
        <th>No HP</th>
        <th>Email</th>
        <th>Jenjang Pendidikan</th>
        <th>No Rek</th>  
        <th>Aksi</th>  
    </tr>
    </thead>
    <tbody>
        <?php 
        $no=1; foreach ($karyawan as $value ) {?>
        <tr>
        <td><?= $no++; ?></td>
        <td><?= $value['foto']; ?></td>
        <td><?= $value['nama_karyawan']; ?></td>
        <td><?= $value['id_jabatan']; ?></td>
        <td><?= $value['id_status']; ?></td>
        <td><?= $value['nik']; ?></td>
        <td><?= $value['jenis_kelamin']; ?></td>
        <td><?= $value['alamat']; ?></td>
        <td><?= $value['no_hp']; ?></td>
        <td><?= $value['email']; ?></td>
        <td><?= $value['jenjang_pendidikan']; ?></td>
        <td><?= $value['no_rek']; ?></td>
       
        <td class="text-center">
                        <a href="<?= base_url('/Edit-Karyawan/'. $value['id_karyawan']) ?>" class="btn btn-sm btn-primary mb-2"> <i class="bi bi-pencil-square"></i> Edit</a>
                        <a href="#" class="btn btn-sm btn-dark"> <i class="bi bi-trash"></i>Hapus</a>
                      </td>
                        </td>
       
    </tr>
    <?php 
        
} ?>
    </tbody>
</table>
</div>
          </div>
      </div>
    </div>