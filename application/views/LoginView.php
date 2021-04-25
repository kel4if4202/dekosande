<?= $this->session->flashdata('message'); ?>
<div class="container-fluid " >
  <div class="row">
    <div style="height: 90vh; width: 100%" class="d-flex align-items-stretch">
      <div class="p-3 mb-2 text-black col-6 d-flex align-items-center justify-content-center flex-column ">
      <h1 style=" color: #FF4F5A; font-size: 50;
        -webkit-text-stroke-width: 0.5px;
        -webkit-text-stroke-color: black;"><?= $title ?></h1>
        <form class='p-5' method="POST" action="<?php echo site_url('Welcome/login') ?>" style= 'background-color: #FF4F5A; border-radius: 25px'>
        <div class="form-group">
          <!-- <label class='text-light' for="username">Nomor</label> -->
          <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor HP">
        </div>
        <div class="form-group">
          <!-- <label class='text-light' for="password">Password</label> -->
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="d-flex align-items-center">
          <button type="submit" class="btn btn-light mr-auto">Login</button>
        <a class='text-light' href="<?= site_url('Welcome/register') ?>">Sign up</a>
      </div>
      </form>
      </div>
    </div>
  </div>
</div>