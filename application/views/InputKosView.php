<!-- Dendy -->

<?php $this->load->view('template/Navbar');?>

<div class="py-5 mt-5">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-12 p-3 p-md-0 d-flex flex-column align-items-center">
        <img src="<?= base_url('asset/0.jpg') ?>" alt="bendi.png" style="border-radius: 100px; border: 1px solid white; box-shadow: 1px 5px 15px rgba(0, 0, 0, 0.5);" width="200px" height="200px">
        <h3 class="my-3 text-wrap text-center">Profil <?= $this->session->userdata('nama'); ?></h3>
      </div>
      <div class="col-md-9 col-12 p-3 p-md-0 p-3">
        <div class="ml-md-5 ml-0">
          <form id="profileForm" method="POST" action='<?= site_url("KostController/inputKos")?>'>
            <div class="form-group">
              <label for="namaKos" class="col-form-label">Nama Kos</label>
              <input type="text" id="namaKos" name="namaKos" class="form-control">
            </div>
            <div class="form-check">
              <input type="radio" id="laki-laki" name="jenisKos" class="form-check-input" value='1'>
              <label for="laki-laki" class="form-check-label">Laki-Laki</label>
            </div>
            <div class="form-check">
              <input type="radio" id="perempuan" name="jenisKos" class="form-check-input" value='0'>
              <label for="perempuan" class="form-check-label">Perempuan</label>
            </div>
            <div class="form-group">
              <label for="hargaKos" class="col-form-label">Harga Kos</label>
              <input type="text" id="hargaKos" name="hargaKos" class="form-control">
            </div>
            <div class="form-group">
              <label for="alamatKos" class="col-form-label">Alamat Kos</label>
              <input type="text" id="alamatKos" name="alamatKos" class="form-control">
            </div>
            <div class="form-group">
              <label for="deskripsi" class="col-form-label">Deskripsi</label>
              <input type="text" id="deskripsi" name="deskripsi" class="form-control">
            </div>
            <div class="form-group">
              <input type="hidden" id="hidden" name="hidden" class="form-control">
            </div>
            <div class="form-button text-right">
              <button type="submit" class="btn btn-primary" data-target="#modal" data-toggle="modal">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
