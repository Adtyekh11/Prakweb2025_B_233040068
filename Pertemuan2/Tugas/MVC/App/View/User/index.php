<link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">


<div class="container mt-4">
  <div class="row">

  
<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash(); ?>
  </div>
</div>


    <div class="col-6">
      <!-- Tombol Tambah -->
      <button type="button" class="btn btn-primary mb-4 TombolTambahData" data-bs-toggle="modal" data-bs-target="#FormModal">
        Tambah Data Pelanggan
      </button>


 <!-- Tombol search -->
      <div class="row justify-content-left"> 
    <div class="col-lg-15">
        <form action="<?= BASEURL; ?>/user/cari" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Pelanggan.." name="keyword" id="keyword" autocomplete="off">
                <button class="btn btn-primary" type="submit" id="TombolCari">Cari</button>
            </div>
        </form>
    </div>
</div>
      

      <h3>Daftar Pelanggan</h3>
      <ul class="list-group">
        <?php foreach ($data['user'] as $user) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            <?= $user['name']; ?>
          <!-- Tombol detail -->
            <div>
              <a href="<?= BASEURL; ?>/user/detail/<?= $user['id']; ?>" 
                 class="btn btn-primary btn-sm me-1">Detail</a>
            <!-- Tombol Edit -->
                  <a href="<?= BASEURL; ?>/user/edit/<?= $user['id']; ?>" 
                 class="btn btn-warning btn-sm me-1 TampilModalUbah" data-bs-toggle="modal" data-bs-target="#FormModal" data-id="<?= $user['id']; ?>">Edit</a>
          <!-- Tombol Hapus -->
              <a href="<?= BASEURL; ?>/user/hapus/<?= $user['id']; ?>" 
                 class="btn btn-danger btn-sm" onclick="return confirm('yakin?')">Hapus</a>
            </div>
          </li>
        <?php endforeach; ?>
      </ul>

      <!-- Tombol kembali -->
      <a href="<?= BASEURL; ?>/Tamplate/header<?= $user['id']; ?>" 
         class="btn btn-secondary btn-lg mt-3">Kembali</a>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="FormModal" tabindex="-1" aria-labelledby="JudulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="JudulModal">Tambah Data Pelanggan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/User/Tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="mb-3">
              <label for="name">Nama</label> 
              <input type="text" class="form-control" name="name" id="name" required>
          </div>

          <div class="mb-3">
              <label for="email">Email</label> 
              <input type="email" class="form-control" name="email" id="email" required>
          </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/script.js"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>



