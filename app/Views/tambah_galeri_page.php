<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tugas Besar DKP (Website Company Profile)">
    <meta name="author" content="Aprimivi Manda">
    <link rel="shortcut icon" href="/assets/favicon.ico" type="image/x-icon">
    <title>Robotics Company</title>
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="/css/css_saya.css" rel="stylesheet">
</head>

<body class="login-register">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand">
                ROBOTICS COMPANY
            </a>
        </div>
    </nav>

    <section class="page-section" id="kontak">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">TAMBAH GALERI</h2>
            </div>
            <form action="<?= base_url('tambahgaleri/tambah') ?>" method="POST" enctype="multipart/form-data" id="kontakForm">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control <?= ($cek_valid_input->hasError('inputGambar')) ? 'is-invalid' : ''; ?>" type="file" id="formFileMultiple" name="inputGambar" multiple>
                            <div class="invalid-feedback">
                                <?= $cek_valid_input->getError('inputGambar'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control <?= ($cek_valid_input->hasError('inputJudul')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Judul Galeri *" name="inputJudul" value="<?= old('inputJudul'); ?>">
                            <div class="invalid-feedback">
                                <?= $cek_valid_input->getError('inputJudul'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control <?= ($cek_valid_input->hasError('inputDeskripsi')) ? 'is-invalid' : ''; ?>" id="message" placeholder="Deskripsi *" name="inputDeskripsi"><?= old('inputDeskripsi'); ?></textarea>
                            <div class="invalid-feedback">
                                <?= $cek_valid_input->getError('inputDeskripsi'); ?>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-xl mt-4 mb-2 rounded-pill w-100" id="submitButton" type="submit">TAMBAHKAN</button>
                        <a href="<?= base_url('galeri') ?>" class="btn btn-warning btn-xl rounded-pill w-100">KEMBALI</a>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if (session()->get('upload_berhasil')) : ?>
        <script>
            swal("<?= session()->getFlashdata('upload_berhasil'); ?>", "Galeri baru berhasil ditambahkan.", "success");
        </script>
    <?php endif; ?>
</body>

</html>