<div class="container">
    <div class="col-mt-3">
        <div class="col-md-6">
            <div class="card">
        <div class="card-header"> 
            form ubah data pajaran
        </div>
        <div class="card-body">
           <form action="" method="post">
           <input type="hidden" name="id"  value="<?= $pajaran['id_pajaran']; ?>">
            <div class="form-group">
                <label for="tanggal_kejadian">tanggal kejadian</label>
                <input type="date" name="tanggal_kejadian" class="form-control" id="tanggal_kejadian" value="<?= $pajaran['tanggal_kejadian']; ?>">
                <small  class="form-text text-danger"><?= form_error('tanggal_kejadian'); ?></small>
            </div>
            <div class="form-group">
                <label for="tanggal_terima">tanggal terima laporan</label>
                <input type="date" name="tanggal_terima" class="form-control" id="tanggal_terima" value="<?= $pajaran['tanggal_terima']; ?>">
                <small  class="form-text text-danger"><?= form_error('tanggal_terima'); ?></small>
            </div>
            <div class="form-group">
                <label for="kejadian">kejadian</label>
                <input type="text" name="kejadian" class="form-control" id="kejadian" value="<?= $pajaran['kejadian']; ?>">
                <small  class="form-text text-danger"><?= form_error('kejadian'); ?></small>
            </div>
            <div class="form-group">
                <label for="tindak">tindak lanjut</label>
                <input type="text" name="tindak" class="form-control" id="tindak"value="<?= $pajaran['tindak']; ?>" >
                <small  class="form-text text-danger"><?= form_error('tindak'); ?></small>
            </div>
            <div class="form-group">
                <label for="kondisi">kondisi pasca terpapar</label>
                <input type="text" name="kondisi" class="form-control" id="kondisi" value="<?= $pajaran['kondisi']; ?>">
                <small  class="form-text text-danger"><?= form_error('kondisi'); ?></small>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right">ubah</button>
            </form>
        </div>
            </div>
        </div>   
    </div>
</div>