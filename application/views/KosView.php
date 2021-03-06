<!-- Zaky -->

<!-- Booking Kost : MODAL
    Delete Kost : Button
 -->

<div>
    <!-- Navigation-->
    <?php $this->load->view('template/Navbar');?>
    

    <!-- Product section-->
    <section class="py-5">
    <?= $this->session->flashdata('message_booking'); ?>
       
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                
                <div class="col-md-6" >
                    <img style="height: 500px;" class="d-block w-100" src="<?= base_url('asset/upload/'.$user->nama_file) ?>" alt="First slide">    
                </div>
                <div class="col-md-6">
                    <h1 class="display-5 fw-bolder"><?= $user->namaKos ?></h1>
                    <div class="fs-5 mb-5">
                        <span>Rp<?= $user->hargaKos ?>/Tahun</span>
                    </div>
                    <p class="lead"><?= $user->deskripsi?></p>
                    <div class="d-flex">
                        <button class="btn btn-outline-dark flex-shrink-0" type="button" onclick="document.location.href='<?= site_url('BookingController/input_booking/'.$user->idKos) ?>'">
                            <i class="bi-cart-fill me-1"></i>
                            Booking Kost
                        </button>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Related items section-->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Kost Lainnya</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                
                <?php 
                    $i = 1;
                    foreach($kos as $data) {
                        echo '
                            <div class="col mb-5">
                                <div class="card h-100">
                                    <!-- Product image-->
                                    <img style="height: 250px;" class="card-img-top" src="'.base_url('asset/upload/'.$data['nama_file']).'" alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Kost name-->
                                            <h5 class="fw-bolder"> '.$data["namaKos"].' </h5>
                                            <!-- Kost price-->
                                            Rp'.$data["hargaKos"].'<br>
                                            <!-- Alamat Kost-->
                                            '.$data["alamatKos"].'
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="'.site_url('KostController/data_kost_id/'.$data["idKos"]).'">View Kost</a></div>
                                    </div>
                                </div>
                            </div>
                        ';
                        if ($i++ == 4) break;
                    

                    }
                ?>
            
            </div>
        </div>
    </section>
    <!-- Footer-->
    <?php $this->load->view('template/Footer');?>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</div>