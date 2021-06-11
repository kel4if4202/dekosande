<?php $this->load->view('template/Navbar');?>

<div class="container  mb-5 d-flex justify-content-center" style="margin-top: 100px;">
    <div class="card p-5">
        <div>
            <h4 class="heading">Upgrade your plan</h4>
            <p class="text">Please make the payment to start enjoying all the features of our premium plan as soon as possible</p>
        </div>
        <div class="pricing p-3 rounded mt-4 d-flex justify-content-between">
            <div class="images d-flex flex-row align-items-center"> 
                <div class="d-flex flex-column ml-4"> <span class="business"><?= $data->namaKos ?></span> </div>
            </div>
            <!--pricing table-->
            <div class="d-flex flex-row align-items-center"> <sup class="dollar font-weight-bold">IDR</sup> <span class="amount ml-1 mr-1"><?= $data->biaya ?></span> <span class="year font-weight-bold">/ year</span> </div> <!-- /pricing table-->
        </div> <span class="detail mt-5">Payment details</span>
        <div class="credit rounded mt-4 d-flex justify-content-between align-items-center">
            <div class="d-flex flex-row align-items-center"> <img src="https://i.imgur.com/qHX7vY1.png" class="rounded" width="70">
                <div class="d-flex flex-column ml-3"> <span class="business">OVO/Dana/Gopay</span> <span class="plan"><?= $data->no_hp ?></span> </div>
            </div>
        </div>
        <div class="mt-3"> <button class="btn btn-primary btn-block payment-button" onclick=document.location.href="<?= site_url('BookingController/pembayaran/'.$data->idBooking) ?>">Proceed to payment <i class="fa fa-long-arrow-right"></i></button> </div>
    </div>
</div>