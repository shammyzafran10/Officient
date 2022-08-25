<div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-footer ">
            <div class="card-body table-responsive">
              <a href="<?= base_url('/tambah')?>" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              
                <?php
                if (!empty (session()->getFlashData('success'))) { ?>
                     <div class="alert alert-success">
                  <?= session()->getFlashData('success');?>
                  </div>
               <?php }?>
        
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                  <th scope="col">NO</th>
                  <th scope="col">Nama_Jabatan</th>
                  <th scope="col">GAJI_HARIAN</th>
                  <th scope="col">aksi</th>
                  
                    
                  </tr>
                </thead>
                <tbody>
                <?php 
        $no=1; foreach ($jabatan as $value ) {?>
        <tr>
        <td><?= $no++; ?></td>
        <td><?= $value['nama_jabatan']; ?></td>
        <td><?= $value['nominal_gaji']; ?></td>
        
                      
                      
                      <td class="text-center">
                        <a href="" class="btn btn-sm btn-primary"> <i class="bi bi-pencil-square"></i></a>
                        <a href="" class="btn btn-sm btn-dark"> <i class="bi bi-trash"></i></a>
                      </td>
                  </tr>

                <?php }?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>