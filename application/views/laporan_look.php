
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
    