<div class="container" style="margin-top: 100px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
             TAMBAHKAN KARYAWAN
            </div>
            <div class="card-body table-responsive">
              <form role="form" action=<?= base_url('/simpan')?> method="post" >
                      <div class="form-group">
                        <label for="Nama" class="col-md-2 col-form-label">Nama</label>
                        <div class="col-md-10">
                          <input class="form-control" type="text" name="nama_karyawan" value="" id="nama_karyawan"  required>
                        </div>
                        <div class="form-group">
                        <label for="id_jabatan" class="col-md-2 col-form-label">Jabatan</label>
                        <div class="col-md-10 mb-2">
                        <select class="form-control" name="id_jabatan" id="id_jabatan">
                          <option selected>Pilih Jabatan</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="id_status" class="form-label">Status</label>
                        <select class="form-control" name="id_status" id="id_status">
                          <option selected>Pilih Status</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="NIK" class="col-md-2 col-form-label">NIK</label>
                        <div class="col-md-10">
                          <input class="form-control" type="text" name="nik" value="" id="nik" required>
                        </div>
                      <div class="form-group">
                        <label for="Jenis Kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-select" name="jenis_kelamin" id="jenis_kelmain" >
                          <option selected>Pilih Jenis Kelamin</option>
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                        <div>
                          <label for="Alamat" class="form-label">Alamat</label>
                          <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Phone" class="col-md-2 col-form-label">Phone</label>
                        <div class="col-md-10">
                          <input class="form-control" type="tel" name="no_hp" value="" id="no_hp" required>
                        </div>
                      <div class="form-group">
                        <label for="Email" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                          <input class="form-control" type="email" name="email" value="" id="email" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="Jenjang Pendidikan" class="form-label">Jenjang Pendidikan</label>
                        <select class="form-select" name="jenjang_pendidikan" id="jenjang_pendidikan" >
                          <option selected>Pilih Jenjang Pendidikan</option>
                          <option value="SD">SD/MI/Sederajat</opt-MI-SEDERAJATion>
                          <option value="SMP">SMP/MTS/Sederajat</option>
                          <option value="SMA/SMK">SMA/SMK/MA/Sederajat</option>
                          <option value="D1">D1</option>
                          <option value="D2">D2</option>
                          <option value="D3">D3</option>

                        </select>
                      </div>
                      <div class="form-group">
                        <label for="No Rek" class="col-md-2 col-form-label">No Rekening</label>
                        <div class="col-md-10">
                          <input class="form-control" type="text" name="no_rek" value="" id="no_rek" required>
                        </div>
                        <div class="mb-3">
                        <label for="Foto" class="form-label">Foto</label>
                        <input class="form-control" type="file" name="foto" id="foto" >
                        </div>                    
                   </div>
                   <div class="card-footer">
                    <button type="submit"   class="btn btn-primary" >Simpan</button>
                   </div>
                   
</form>
                  <div class="card-footer">
                <a href="<?= base_url('/data') ?>" class="btn btn-danger">Back</a>
                  </div>
                  </div>
        </div>
      </div>
    </div>