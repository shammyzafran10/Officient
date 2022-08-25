<div class="container" style="margin-top: 80px">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header text-center">
                    ADD DATA PENGUMUMAN
                </div>
                <div class="card-body">
                    <form action="" method="POST">

                        <div class="form-group">
                            <label>NAMA USER</label>
                            <input type="text" required name="id_user" class="form-control">

                        </div>

                        <div class="form-group">
                            <label>ISI PENGUMUMAN</label>
                            <input type="varchar" name="isi_pengumuman" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label>LAMPIRAN</label>
                            <input type="int" name="lamiran" required class="form-control">
                        </div>

                        <div class="form-group">
                            <label>TANGGAL PENGUMUMAN</label>
                            <input type="date" name="tanggal_berdiri" required class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">SIMPAN</button>
                        <button type="reset" class="btn btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>