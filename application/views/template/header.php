<!DOCTYPE html>
<html lang="en">

<head>
    <title>Laporan Tilang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">LAPORAN TILANG</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Pelanggaran</a>
        <a class="nav-link" href="<?= base_url(); ?>pelanggar">Catatan pelanggaran</a>
        <a class="btn btn-warning" href="<?= base_url(); ?>surat">Buat Surat Tilang</a>
        <!-- <a class="btn btn-primary mx-2" href="<?= base_url(); ?>login">Login Admin</a> -->
      </div>
    </div>
  </div>
</nav>