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
              <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
              <tr class="text-center">
                    <th>no</th>
                    <th>tanggal</th>
                    <th>lokasi</th>
                    <th>hasil (lux)</th>
                    <th>petugas</th>
                    <th>aksi</th>
              </tr>
            </thead>
                  <?php $no = 1;
                  foreach($tbl_pencahayaan as $pcn) : ?>
                  <tbody>
              <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $pcn['tanggal'] ?></td>
                    <td><?= $pcn['lokasi'] ?></td>
                    <td><?= $pcn['hasil'] ?></td>
                    <td><?= $pcn['petugas'] ?></td>
                    <td>
                    <a href="<?= base_url();  ?>pencahayaan/ubah/<?= $pcn['id_pencahayaan']; ?>" class="btn btn-primary btn-sm"class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="<?= base_url();  ?>pencahayaan/hapus/<?= $pcn['id_pencahayaan']; ?>"onclick="return confirm('yakin?');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  <?php endforeach ?>
                </table>
        </div>        
</div>