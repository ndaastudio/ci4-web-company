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

<body>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand">
                ROBOTICS COMPANY
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                MENU
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">BERANDA</a></li>
                    <li class="nav-item"><a class="nav-link active" href="<?= base_url('member'); ?>">DATA MEMBER</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('pesan'); ?>">PESAN MEMBER</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url('galeri'); ?>">TAMBAH GALERI</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="page-section">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading">MEMBER</h2>
                <h3 class="section-subheading text-muted">Member yang telah registrasi akan ditampilkan disini.</h3>
            </div>
            <div class="table-responsive-md mb-4">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">NO.</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">DOMISILI</th>
                            <th scope="col">GENDER</th>
                            <th scope="col">NOMOR TELEPON</th>
                            <th scope="col">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 + (4 * ($halamanSekarang - 1)); ?>
                        <?php foreach ($member as $m) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $m['Nama'] ?></td>
                                <td><?= $m['Domisili'] ?></td>
                                <td><?= $m['Gender'] ?></td>
                                <td><?= $m['Telepon'] ?></td>
                                <td>
                                    <a href="<?= base_url('edit') ?>/<?= $m['ID']; ?>" type="button" class="btn btn-warning">EDIT</a>
                                    <a type="button" class="btn btn-danger" onclick="konfirmasiHapus('<?= base_url('hapus') ?>/<?= $m['ID']; ?>')">HAPUS</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?= $pager->links('data_user', 'pagination_saya'); ?>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <?php if (session()->get('hapus_berhasil')) : ?>
        <script>
            swal("<?= session()->getFlashdata('hapus_berhasil'); ?>", "Data yang anda pilih berhasil dihapus.", "success");
        </script>
    <?php endif; ?>
    <?php if (session()->get('simpan_berhasil')) : ?>
        <script>
            swal("<?= session()->getFlashdata('simpan_berhasil'); ?>", "Data member berhasil diubah.", "success");
        </script>
    <?php endif; ?>
    <?php if (session()->get('upaya_gagal')) : ?>
        <script>
            swal("<?= session()->getFlashdata('upaya_gagal'); ?>", "Anda bukan admin! Menu tersebut hanya bisa diakses oleh admin.", "error");
        </script>
    <?php endif; ?>
    <script>
        function konfirmasiHapus(url) {
            swal({
                    title: "Konfirmasi!",
                    text: "Anda yakin ingin menghapus data member ini?",
                    icon: "warning",
                    buttons: ["BATAL", "HAPUS"],
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.open(url, '_self');
                    } else {
                        false;
                    }
                });
        }
    </script>
</body>

</html>