<div class="card">
<?php if( $this->session->flashdata('flash2') ) : ?>

<div class="row mt-3">
  <div class="col-md-6">
  <div class="alert alert-success alert-dismissible fade show" role="alert">Data pencahayaan
  <strong>berhasil</strong> <?= $this->session->flashdata('flash2'); ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  </div>
  </div>
</div>
<?php endif; ?>
    <div class="card-header">
       <a href="<?=base_url() ?>Pencahayaan/tambah" class="btn btn-primary"><i class="fas fas-plus">tambah data</i></a>
    </div>
          <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
              <tr>
                    <th>no</th>
                    <th>tanggal</th>
                    <th>lokasi</th>
                    <th>hasil (lux)</th>
                    <th>petugas</th>
                    <th>aksi</th>
              </tr>
            </thead>
                 
                </table>
        </div>        
</div>