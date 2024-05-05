<div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
  <div class="card-header">informasi akun</div>
  <div class="card-body">
    <h5 class="card-title"><?= $user['name']; ?></h5>
    <p class="card-text"><?= $user['email']; ?></p>
    <p class="card-text"><small class="text-muted">Member since <?= date('d F Y,', $user['date_created']); ?></small></p>
  </div>
</div>