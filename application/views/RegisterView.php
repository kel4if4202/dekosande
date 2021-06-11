<!-- Dimas -->
<?= $this->session->flashdata('message'); ?>
<div class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="<?= site_url('UserController/tambahUser') ?>">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="no_hp"
                                            placeholder="No Handphone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" name="password"
                                            placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nik"
                                        placeholder="NIK">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="date" class="form-control form-control-user" name="tgl_lahir" placeholder="YYYY-MM-DD">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <select value="Pencari" name="peran" class="form-control" >
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
                                <button type="submit" href="<?= site_url('Welcome/login') ?>" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                            </form>
                            <div class="text-center">
                                <a class="small" href="<?= site_url('Welcome/login') ?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</div>