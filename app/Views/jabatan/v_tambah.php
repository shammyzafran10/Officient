<div class="container" style="margin-top: 100px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
             TAMBAHKAN JABATAN
            </div>
            <div class="card-body table-responsive">
              <form role="form" action="<?= base_url('simpan')?>" method="post">
                
                <div class="form-group">
                  <label>NAMA</label>
                  <input type="text" name="nama_jabatan" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>GAJI HARIAN</label>
                  <input type="number" name="nominal_gaji" class="form-control" required>
                </div>
                <br>
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
