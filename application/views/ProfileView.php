<!-- Rendi -->
<?= $this->session->flashdata('profile'); ?>
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
          <form id="profileForm" method="POST" action="<?php echo site_url('UserController/updateUser') ?>">
            <div class="form-group">
              <label for="nik" class="col-form-label">NIK</label>
              <input type="text" id="NIK" name="NIK" class="form-control" value="<?= $this->session->userdata('data_login')['NIK'] ?>">
             
            </div>
            <div class="form-group">
              <label for="no_hp" class="col-form-label">No hp</label>
              <input type="text" id="no_hp" name="no_hp" class="form-control" value="<?= $this->session->userdata('data_login')['no_hp'] ?>">
            </div>
            <div class="form-group">
              <label for="username" class="col-form-label">Nama</label>
              <input type="text" id="nama" name="nama" class="form-control" value="<?= $this->session->userdata('data_login')['nama'] ?>">
            </div>
            <div class="form-group">
              <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
              <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" value="<?= $this->session->userdata('data_login')['jenis_kelamin'] ?>">
            </div>
            <div class="form-group">
              <label for="email" class="col-form-label">Email</label>
              <input type="text" id="email" name="email" class="form-control" value="<?= $this->session->userdata('data_login')['email'] ?>">
            </div>
            <div class="form-group">
              <label for="tlahir" class="col-form-label">Tanggal Lahir</label>
              <input type="text" id="tlahir" name="tlahir" class="form-control" value="<?= $this->session->userdata('data_login')['tlahir'] ?>">
            </div>
            <div class="form-group">
              <label for="password" class="col-form-label">Password</label>
              <input type="password" id="tlahir" name="password" class="form-control" >
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
