<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tugas Besar DKP (Website Company Profile)">
    <meta name="author" content="Aprimivi Manda">
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <title>Robotics Company</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/css_saya.css" rel="stylesheet">
</head>

<body id="page-top">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top">
                ROBOTICS COMPANY
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                MENU
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#layanan">LAYANAN</a></li>
                    <li class="nav-item"><a class="nav-link" href="#galeri">GALERI</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tentang">TENTANG</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">KONTAK</a></li>
                    <?php if ($email_admin === 'admin_aprimivimanda@gmail.com') { ?>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('member') ?>">MEMBER</a></li>
                    <?php } ?>
                    <?php if (session()->get('namaLogin')) { ?>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('logout'); ?>">LOGOUT</a></li>
                    <?php } else { ?>
                        <li class="nav-item"><a class="nav-link" href="<?= base_url('login'); ?>">LOGIN</a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Selamat Datang <?= session()->get('namaLogin') ? "($nama_member)" : ''; ?> di Website Perusahaan Kami!</div>
            <div class="masthead-heading">ROBOTICS COMPANY</div>
            <a class="btn btn-primary btn-xl rounded-pill" href="#layanan">LIHAT LEBIH DETAIL</a>
        </div>
    </header>

    <section class="page-section" id="layanan">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">LAYANAN KAMI</h2>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa-solid fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa-solid fa-cart-shopping fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Penjualan Produk</h4>
                    <p class="text-muted">Robot yang kami produksi telah dipasarkan hingga ke seluruh penjuru dunia dengan proses pengiriman yang cepat & gratis ongkir.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa-solid fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa-solid fa-robot fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Desain Robot</h4>
                    <p class="text-muted">Kami memberikan pelayanan desain robot yang sesuai dengan permintaan pasar, dengan desain yang modern dan canggih.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa-solid fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa-solid fa-cogs fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Garansi Mesin</h4>
                    <p class="text-muted">Apabila terjadi kerusakan yang terjadi pada mesin robot yang kami produksi, kami memberikan layanan servis selama 1 tahun penuh secara gratis.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#23282e" fill-opacity="1" d="M0,128L48,149.3C96,171,192,213,288,213.3C384,213,480,171,576,181.3C672,192,768,256,864,250.7C960,245,1056,171,1152,138.7C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>

    <section class="page-section" id="galeri">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">GALERI KAMI</h2>
            </div>
            <div class="row">
                <?php foreach ($galeri as $g) : ?>
                    <div class="col-lg-4 col-md-4 col-sm-12 mb-4">
                        <div class="galeri-item">
                            <img class="img-fluid" src="assets/img/galeri/<?= $g['Nama_File'] ?>">
                            <div class="galeri-caption">
                                <div class="galeri-caption-heading"><?= $g['Judul'] ?></div>
                                <div class="galeri-caption-subheading text-muted"><?= $g['Deskripsi'] ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,149.3C384,139,480,85,576,80C672,75,768,117,864,154.7C960,192,1056,224,1152,202.7C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>

    <section class="page-section" id="tentang">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">TENTANG KAMI</h2>
            </div>
            <h4>DESKRIPSI SINGKAT</h4>
            <p class="text-justify text-muted">Perusahaan kami merupakan perusahaan start up dalam bidang usaha teknologi yang menawarkan berbagai jenis solusi menggunakan teknologi advance robotics. Pengembangan teknologi dilakukan atas permintaan dari client yaitu beberapa lembaga kenegaraan dan perindustrian. Oleh karena itu, perusahaan ini, secara mandiri diharapkan dapat mengurangi jumlah impor teknologi dengan membangun karya nyata yang merupakan hasil riset dari dalam negeri. Seiring berjalannya waktu dan bertambahnya jumlah permintaan, perusahaan akan melakukan kerjasama dengan instansi pemerintah, lembaga penelitian, industri, serta universitas yang ada di Indonesia. Harapan dari kerjasama ini adalah kontribusi yang nyata untuk menyelesaikan berbagai permasalahan yang ada di Indonesia serta mewujudkan negara yang mandiri dalam mendukung pertumbuhan teknologi.</p>
            <h4>VISI</h4>
            <p class="text-muted">Menjadi perusahaan teknologi robot kelas dunia yang inovatif dan berkualitas</p>
            <h4>MISI</h4>
            <ul class="text-justify text-muted">
                <li>Berkomitmen untuk menjaga standar kualitas produksi</li>
                <li>Membangun strategi kemitraan yang kuat dengan semua pihak dengan berpegang teguh pada etika bisnis</li>
                <li>Membangun sumber daya manusia yang handal dan cerdas serta memegang teguh etika bisnis di bidang teknologi industri robot</li>
            </ul>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#23282e" fill-opacity="1" d="M0,192L48,170.7C96,149,192,107,288,85.3C384,64,480,64,576,90.7C672,117,768,171,864,170.7C960,171,1056,117,1152,90.7C1248,64,1344,64,1392,64L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>

    <section class="page-section" id="kontak">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">HUBUNGI KAMI</h2>
            </div>
            <form action="<?= base_url('home/kirim') ?>" method="POST" id="kontakForm">
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" <?= session()->get('namaLogin') ? '' : 'disabled'; ?> id="name" type="text" placeholder="Nama Anda *" name="inputNama" value="<?= session()->get('namaLogin'); ?>" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" <?= session()->get('namaLogin') ? '' : 'disabled'; ?> id="email" type="email" placeholder="Alamat Email *" name="inputEmail" value="<?= session()->get('emailLogin'); ?>" required>
                        </div>
                        <div class="form-group mb-md-0">
                            <input class="form-control" <?= session()->get('namaLogin') ? '' : 'disabled'; ?> id="phone" type="number" placeholder="Nomor Telepon *" name="inputTelepon" value="<?= session()->get('noTelepon'); ?>" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group form-group-textarea mb-md-0">
                            <textarea class="form-control" <?= session()->get('namaLogin') ? '' : 'disabled'; ?> id="message" placeholder="Ketik Pesan Anda *" name="inputPesan" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="text-center"><button class="btn btn-primary btn-xl rounded-pill" <?= session()->get('namaLogin') ? '' : 'disabled'; ?> id="submitButton" type="submit">KIRIM PESAN</button></div>
            </form>
        </div>
    </section>

    <script src="js/javascript_saya.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if (session()->get('pesan_berhasil')) : ?>
        <script>
            swal("<?= session()->getFlashdata('pesan_berhasil'); ?>", "Pesan anda berhasil dikirim! Terimakasih telah mengunjungi website kami.", "success");
        </script>
    <?php endif; ?>
    <?php if (session()->get('upaya_gagal')) : ?>
        <script>
            swal("<?= session()->getFlashdata('upaya_gagal'); ?>", "Anda bukan admin! Menu tersebut hanya bisa diakses oleh admin.", "error");
        </script>
    <?php endif; ?>
</body>

</html>