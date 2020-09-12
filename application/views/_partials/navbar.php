<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand d-flex justify-content-center align-items-center" href="<?= base_url(); ?>">
            <img class="w-50" src="<?= base_url('assets/img/covid19-68.png'); ?>" alt="">
            <h5 class="ml-2">Covid-19</h5>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mt-2 mr-lg-4">
                    <span id="time" class="text-white "></span>
                  </li>      
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url(); ?>">Beranda<span class="sr-only">(current)</span></a>
                  </li>             

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Lainnya
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('deteksi') ?>">Deteksi Dini</a>
                        <a class="dropdown-item" href="<?= base_url('lapor') ?>">Lapor Sigap</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
