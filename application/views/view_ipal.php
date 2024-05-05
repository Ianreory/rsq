<div class="card">
<?php if( $this->session->flashdata('flash4') ) : ?>

<div class="row mt-3">
  <div class="col-md-6">
  <div class="alert alert-success alert-dismissible fade show" role="alert">Data ipal
  <strong>berhasil</strong> <?= $this->session->flashdata('flash4'); ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span></button>
  </div>
  </div>
</div>
<?php endif; ?>
              <div class="card-header">
                <a href="<?=base_url('ipal/tambah') ?>" class="btn btn-primary"><i class="fas fas-plus">tambah data</i></a>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                  <thead>
                  <tr class="text-center">
                    <th rowspan="2">no</th>
                    <th>tanggal</th>
                    <th colspan="10">SARANA PRASARANA IPAL</th>
                    <th>debit air</th>
                    <th>selisih air </th>
                    <th rowspan="2" class="text-align-center">petugas</th>
                    <th>aksi</th>
                  </tr>
                  <tr class="text-center">
                    <th>tanggal</th>
                    <th>uv</th>
                    <th>water meter</th>
                    <th>pompa air</th>
                    <th>aerator</th>
                    <th>aerator aquarium</th>
                    <th>ballast</th>
                    <th>pelampung</th>
                    <th>pipa</th>
                    <th>biobal</th>
                    <th>tandon air</th>
                    <th>m3</th>
                    <th>m3</th>
                    <th>aksi</th>
                  </tr>
                  </thead>
                  <?php $no = 1;
                  foreach($tbl_ipal as $ipl) : ?>
                  <tbody>
                  <tr class="text-center">
                    <td><?= $no++ ?></td>
                    <td><?= $ipl['tanggal'] ?></td>
                    <td><?= $ipl['uv'] ?></td>
                    <td><?= $ipl['water_meter'] ?></td>
                    <td><?= $ipl['pompa_air'] ?></td>
                    <td><?= $ipl['aerator'] ?></td>
                    <td><?= $ipl['aerator_aquarium'] ?></td>
                    <td><?= $ipl['ballast'] ?></td>
                    <td><?= $ipl['pelampung']?></td>
                    <td><?= $ipl['pipa'] ?></td>
                    <td><?= $ipl['biobal'] ?></td>
                    <td><?= $ipl['tandon_air'] ?></td>
                    <td><?= $ipl['debit_air_m3']?></td>
                    <td><?= $ipl['selisih_debit_m3'] ?></td>
                    <td><?= $ipl['petugas_cek']?></td>
                    <td>
                    <a href="<?= base_url();  ?>ipal/ubah/<?= $ipl['id_ipal']; ?>" class="btn btn-primary btn-sm"class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                    <a href="<?= base_url();  ?>ipal/hapus/<?= $ipl['id_ipal']; ?>"onclick="return confirm('yakin?');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                    </td>
                  </tr>
                  </tbody>
                <?php endforeach ?>
                </table>
        </div>        
</div>
