<div class="container">
    <div class="col-mt-3">
        <div class="col-md-6">
            <div class="card">
        <div class="card-header"> 
            form tambah data pencahayaan
        </div>
        <div class="card-body">
           <form action="" method="post">
            <div class="form-group">
                <label for="tanggal">tanggal</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal">
                <small  class="form-text text-danger"><?= form_error('tanggal'); ?></small>
            </div>
            <div class="form-group">
            <label for="lokasi">lokasi</label>
            <input type="text" name="lokasi" class="form-control" id="lokasi">
            <small  class="form-text text-danger"><?= form_error('lokasi'); ?></small>
            </div>
            <div class="form-group">
                <label for="hasil">hasil (lux)</label>
                <input type="text" name="hasil" class="form-control" id="hasil" >
                <small  class="form-text text-danger"><?= form_error('hasil'); ?></small>
            </div>
            <div class="form-group">
                <label for="petugas">petugas</label>
                <input type="text" name="petugas" class="form-control" id="petugas" >
                <small  class="form-text text-danger"><?= form_error('petugas'); ?></small>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah data</button>
            </form>
        </div>
            </div>
        </div>   
    </div>
</div>