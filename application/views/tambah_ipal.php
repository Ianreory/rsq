<div class="container">
    <div class="col-mt-3">
        <div class="col-md-6">
            <div class="card">
        <div class="card-header"> 
            form tambah data ipal
        </div>
        <div class="card-body">
           <form action="" method="post">
            <div class="form-group">
                <label for="tanggal">tanggal pengangkutan</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal">
                <small  class="form-text text-danger"><?= form_error('tanggal'); ?></small>
            </div>
            <div class="form-group">
                <label for="uv">uv</label>
                <input type="text" name="uv" class="form-control" id="uv" >
                <small  class="form-text text-danger"><?= form_error('uv'); ?></small>
            </div>
            <div class="form-group">
                <label for="water_meter">water meter</label>
                <input type="text" name="water_meter" class="form-control" id="water_meter" >
                <small  class="form-text text-danger"><?= form_error('water_meter'); ?></small>
            </div>
            <div class="form-group">
                <label for="pompa_air">pompa air</label>
                <input type="text" name="pompa_air" class="form-control" id="pompa_air" >
                <small  class="form-text text-danger"><?= form_error('pompa_air'); ?></small>
            </div>
            <div class="form-group">
                <label for="aerator">aerator</label>
                <input type="text" name="aerator" class="form-control" id="aerator">
                <small  class="form-text text-danger"><?= form_error('aerator'); ?></small>
            </div>
            <div class="form-group">
                <label for="aerator_aquarium">aerator_aquarium</label>
                <input type="text" name="aerator_aquarium" class="form-control" id="aerator_aquarium" >
                <small  class="form-text text-danger"><?= form_error('aerator_aquarium'); ?></small>
            </div>
            <div class="form-group">
                <label for="ballast">ballast</label>
                <input type="text" name="ballast" class="form-control" id="ballast" >
                <small  class="form-text text-danger"><?= form_error('ballast'); ?></small>
            </div>
            <div class="form-group">
                <label for="pelampung">pelampung</label>
                <input type="text" name="pelampung" class="form-control" id="pelampung" >
                <small  class="form-text text-danger"><?= form_error('pelampung'); ?></small>
            </div>
            <div class="form-group">
                <label for="pipa">pipa</label>
                <input type="text" name="pipa" class="form-control" id="pipa" >
                <small  class="form-text text-danger"><?= form_error('pipa'); ?></small>
            </div>
            <div class="form-group">
                <label for="biobal">biobal</label>
                <input type="text" name="biobal" class="form-control" id="biobal" >
                <small  class="form-text text-danger"><?= form_error('biobal'); ?></small>
            </div>
            <div class="form-group">
                <label for="tandon_air">tandon air</label>
                <input type="text" name="tandon_air" class="form-control" id="tandon_air" >
                <small  class="form-text text-danger"><?= form_error('tandon_air'); ?></small>
            </div>
            <div class="form-group">
                <label for="debit_air_m3">debit air m3</label>
                <input type="text" name="debit_air_m3" class="form-control" id="debit_air_m3" >
                <small  class="form-text text-danger"><?= form_error('debit_air_m3'); ?></small>
            </div>
            <div class="form-group">
                <label for="selisih_debit_m3">selisih debit m3</label>
                <input type="text" name="selisih_debit_m3" class="form-control" id="selisih_debit_m3" >
                <small  class="form-text text-danger"><?= form_error('selisih_debit_m3'); ?></small>
            </div>
            <div class="form-group">
                <label for="petugas_cek">petugas cek</label>
                <input type="text" name="petugas_cek" class="form-control" id="petugas_cek" >
                <small  class="form-text text-danger"><?= form_error('petugas_cek'); ?></small>
            </div>
            <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah data</button>
            </form>
        </div>
            </div>
        </div>   
    </div>
</div>