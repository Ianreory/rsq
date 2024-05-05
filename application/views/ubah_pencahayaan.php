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
                <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= $pencahayaan['tanggal']; ?>">
                <small  class="form-text text-danger"><?= form_error('tanggal'); ?></small>
            </div>
            <div class="form-group">
            <label for="lokasi">lokasi</label>
            <select class="form-control" name="lokasi" id="lokasi" class="form-control" id="hasil" value="<?= $pencahayaan['lokasi']; ?>">
                <option></option>
                <option>R. ISOLASI</option>
                <option>VK</option>
                <option>R. RECOVARY</option>
                <option>R. PRE OP</option>
                <option>R. LORONG IGD</option>
                <option>IGD</option>
                <option>RADIOLOGI (SEMENTARA)</option>
                <option>LORONG CSSD</option>
                <option>GIZI</option>
            </select>
            <small  class="form-text text-danger"><?= form_error('lokasi'); ?></small>
            </div>
            <div class="form-group">
                <label for="hasil">hasil (lux)</label>
                <input type="text" name="hasil" class="form-control" id="hasil" value="<?= $pencahayaan['hasil']; ?>">
                <small  class="form-text text-danger"><?= form_error('hasil'); ?></small>
            </div>
            <div class="form-group">
                <label for="petugas">petugas</label>
                <input type="text" name="petugas" class="form-control" id="petugas" value="<?= $pencahayaan['petugas']; ?>">
                <small  class="form-text text-danger"><?= form_error('petugas'); ?></small>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah data</button>
            </form>
        </div>
            </div>
        </div>   
    </div>
</div>