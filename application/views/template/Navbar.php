<div>
<!-- Search Kost -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">DEKOSANDE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= site_url('Welcome/index')?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('KostController') ?>">List kost</a>
                </li>
            </ul>

            <?php if($this->session->userdata('data_login') == False) {?>

                <a class="btn btn-outline-light" href="<?= site_url('Welcome/login') ?>">Login</a>

            <?php } else {?>

                <button style="margin-right:20px"class="btn btn-outline-light" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                        History
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>

                <!-- <a class="btn btn-outline-light mr-2" href="<?= site_url('Welcome/logout') ?>">Logout</a> -->
                <a class="btn btn-outline-light " href="<?= site_url('Welcome/profile') ?>">Profile</a>

            <?php } ?>

            <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>
</div>