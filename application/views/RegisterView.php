<!-- Dimas -->
<?= $this->session->flashdata('message'); ?>
<div class="container-fluid ">
    <div class="row">
        <div style="height: 90vh; width: 100%" class="d-flex align-items-stretch">
            <div class="p-3 mb-2 text-black col-6 d-flex align-items-center justify-content-center flex-column">
                <h1 style=" color: #FF4F5A; font-size: 50;
        -webkit-text-stroke-width: 0.5px;
        -webkit-text-stroke-color: black;">Register</h1>
                <form class='p-5' method="POST" action="<?= site_url('UserController/tambahUser') ?>" style='background-color: #FF4F5A; border-radius: 25px'>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="no_hp" placeholder="Nomor HP">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nik" placeholder="NIK">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="tgl_lahir" placeholder="YYYY-MM-DD">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <select name="peran" class="form-control">
                                <option disabled selected>--Peran--</option>
                                <option value="Pencari">Pencari</option>
                                <option value="Penjual">Penjual</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <select name="jeniskelamin" class="form-control">
                                <option disabled selected>--Jenis Kelamin--</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button type="submit" class="btn btn-light mr-auto" id="register" href="<?= site_url('Welcome/login') ?>">Register</button>
                        <a class='text-light' href="<?= site_url('Welcome/login') ?>">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>