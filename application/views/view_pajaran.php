<div class="card">
  <?php if( $this->session->flashdata('flash1') ) : ?>

            <div class="row mt-3">
              <div class="col-md-6">
              <div class="alert alert-success alert-dismissible fade show" role="alert">Data pajaran
              <strong>berhasil</strong> <?= $this->session->flashdata('flash1'); ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
              </div>
              </div>
            </div>
            <?php endif; ?>
              <div class="card-header">
                <a href="<?=base_url() ?>Pajaran/tambah" class="btn btn-primary"><i class="fas fas-plus">tambah data</i></a>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead class="text-center">
                  <tr>
                    <th>no</th>
                    <th>tanggal kejadian</th>
                    <th>tanggal terima laporan</th>
                    <th>kejadian</th>
                    <th>tindak lanjut</th>
                    <th>kondisi pasca terpapar</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <?php $no = 1;
                  foreach($tbl_pajaran as $pjn) : ?>
                  <tbody>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $pjn['tanggal_kejadian'] ?></td>
                    <td><?= $pjn['tanggal_terima'] ?></td>
                    <td><?= $pjn['kejadian'] ?></td>
                    <td><?= $pjn['tindak'] ?></td>
                    <td><?= $pjn['kondisi'] ?></td>
                    <td>
                      <a href="<?= base_url();  ?>pajaran/ubah/<?= $pjn['id_pajaran']; ?>" class="btn btn-primary btn-sm"class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="<?= base_url();  ?>pajaran/hapus/<?= $pjn['id_pajaran']; ?>"onclick="return confirm('yakin?');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                  <?php endforeach ?>
                </table>
        </div>        
</div>
