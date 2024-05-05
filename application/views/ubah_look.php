<div class="container">
    <div class="col-mt-3">
        <div class="col-md-6">
            <div class="card">
        <div class="card-header"> 
            form tambah data look
        </div>
        <div class="card-body">
           <form action="" method="post">
           <input type="hidden" name="id"  value="<?= $look['id_look']; ?>">
            <div class="form-group">
                <label for="tanggal_pengangkutan">tanggal pengangkutan</label>
                <input type="date" name="tanggal_pengangkutan" class="form-control" id="tanggal_pengangkutan" value="<?= $look['tanggal_pengangkutan'] ?>">
                <small  class="form-text text-danger"><?= form_error('tanggal_pengangkutan'); ?></small>
            </div>
            <div class="form-group">
                <label for="kuantitas">kuantitas</label>
                <input type="text" name="kuantitas" class="form-control" id="kuantitas" value="<?= $look['kuantitas']; ?>" >
                <small  class="form-text text-danger"><?= form_error('kuantitas'); ?></small>
            </div>
            <div class="form-group">
                <label for="satuan">satuan</label>
                <input type="text" name="satuan" class="form-control" id="satuan " value="<?= $look['satuan'] ?>" >
                <small  class="form-text text-danger"><?= form_error('satuan'); ?></small>
            </div>
            <div class="form-group">
                <label for="manifest">manifest</label>
                <input type="text" name="manifest" class="form-control" id="manifest" value="<?= $look['manifest'] ?>" >
                <small  class="form-text text-danger"><?= form_error('manifest'); ?></small>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah data</button>
            </form>
        </div>
            </div>
        </div>   
    </div>
</div>