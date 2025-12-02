<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">

<div class="container mt-5">
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $data['user']['name']; ?></h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">
        ID : <?= $data['user']['id']; ?>
      </h6>
      <p class="card-text">
        EMAIL : <?= $data['user']['email']; ?>
      </p>
      <a href="<?= BASEURL; ?>/user" class="btn btn-primary btn-sm">Kembali</a>
    </div>
  </div>
</div>
