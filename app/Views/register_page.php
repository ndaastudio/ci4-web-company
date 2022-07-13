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
                <h2 class="section-heading-form">HALAMAN REGISTRASI</h2>
                <h3 class="section-subheading-form text-muted">Silahkan daftar jika belum mempunyai akun. Sudah punya akun? <a href="<?= base_url('login') ?>" class="link-info">Login Sekarang!</a></h3>
            </div>
            <form action="<?= base_url('register/daftar') ?>" method="POST" id="kontakForm">
                <div class="row align-items-stretch">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control <?= ($cek_valid_input->hasError('inputEmail')) ? 'is-invalid' : ''; ?>" type="email" placeholder="Alamat Email *" name="inputEmail" value="<?= old('inputEmail'); ?>">
                            <div class="invalid-feedback">
                                <?= $cek_valid_input->getError('inputEmail'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control <?= ($cek_valid_input->hasError('inputPassword')) ? 'is-invalid' : ''; ?>" type="password" placeholder="Password *" name="inputPassword" value="<?= old('inputPassword'); ?>">
                            <div class="invalid-feedback">
                                <?= $cek_valid_input->getError('inputPassword'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control <?= ($cek_valid_input->hasError('inputNama')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Nama Anda *" name="inputNama" value="<?= old('inputNama'); ?>">
                            <div class="invalid-feedback">
                                <?= $cek_valid_input->getError('inputNama'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control <?= ($cek_valid_input->hasError('inputDomisili')) ? 'is-invalid' : ''; ?>" type="text" placeholder="Domisili *" name="inputDomisili" value="<?= old('inputDomisili'); ?>">
                            <div class="invalid-feedback">
                                <?= $cek_valid_input->getError('inputDomisili'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <select class="form-select form-select-lg form-control <?= ($cek_valid_input->hasError('inputGender')) ? 'is-invalid' : ''; ?>" name="inputGender">
                                <option selected value="">Gender (Pria/Wanita) *</option>
                                <option value="Pria">Pria</option>
                                <option value="Wanita">Wanita</option>
                            </select>
                            <div class="invalid-feedback">
                                <?= $cek_valid_input->getError('inputGender'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="form-control <?= ($cek_valid_input->hasError('inputTelepon')) ? 'is-invalid' : ''; ?>" type="number" placeholder="Nomor Telepon *" name="inputTelepon" value="<?= old('inputTelepon'); ?>">
                            <div class="invalid-feedback">
                                <?= $cek_valid_input->getError('inputTelepon'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <button class="btn btn-primary btn-xl rounded-pill w-100 mt-4" id="submitButton" type="submit">DAFTAR</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if (session()->get('upaya_gagal')) : ?>
        <script>
            swal("<?= session()->getFlashdata('upaya_gagal'); ?>", "Anda bukan admin! Menu tersebut hanya bisa diakses oleh admin.", "error");
        </script>
    <?php endif; ?>
</body>

</html>