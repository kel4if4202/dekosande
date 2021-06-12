<!-- Zaky -->

<?php $this->load->view('template/Navbar');?>


<div>
    
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">DEKOSANDE</h1>
                <p class="lead fw-normal text-white-50 mb-0">Temukan Kostmu !!</p>
            </div>
        </div>
        <!-- <?php $this->load->view('template/Carousel');?>  -->

    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                
               
                <?php 
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
                                            <!-- Deskripsi Kost -->
                                            '.$data["deskripsi"].'<br>
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
                    

                    }
                ?>
                
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <?php $this->load->view('template/Footer');?>
    
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</div>

