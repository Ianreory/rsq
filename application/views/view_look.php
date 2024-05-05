<div class="card">
<?php if( $this->session->flashdata('flash3') ) : ?>

<div class="row mt-3">
  <div class="col-md-6">
  <div class="alert alert-success alert-dismissible fade show" role="alert">Data look book
  <strong>berhasil</strong> <?= $this->session->flashdata('flash3'); ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  </div>
  </div>
</div>
<?php endif; ?>
              <div class="card-header">
                <a href="<?=base_url() ?>look/tambah" class="btn btn-primary"><i class="fas fas-plus">tambah data</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row"> 
<div class="col-md-4">
   <form action="<?= base_url('look'); ?>" method="post">
   <div class="input-group mb-3">
</div>
   </form>
</div>
</div>

                <table id="" class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr class="text-center">
                    <th>no</th>
                    <th>tanggal pengangkutan</th>
                    <th>kuantitas</th>
                    <th>satuan</th>
                    <th>manifest</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <?php $no = 1;
                  foreach($tbl_look as $lok) : ?>
                  <tbody>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $lok['tanggal_pengangkutan'] ?></td>
                    <td><?= $lok['kuantitas'] ?></td>
                    <td><?= $lok['satuan'] ?></td>
                    <td><?= $lok['manifest'] ?></td>
                    <td>
                    <a href="<?= base_url();  ?>look/ubah/<?= $lok['id_look']; ?>" class="btn btn-primary btn-sm"class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="<?= base_url();  ?>look/hapus/<?= $lok['id_look']; ?>"onclick="return confirm('yakin?');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  <?php endforeach ?>
                </table>
               
             </div>        
</div>