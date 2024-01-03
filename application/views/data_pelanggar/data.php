

<div class="container mt-3">
  <h2>Data Pelanggaran Kota Yogyakarta</h2>           
  <table class="table table-bordered">
    
    <thead>
      <tr>
        <th>Tanggal Pelanggaran</th>
        <th>Nama Pelanggar</th>
        <th>Nomor SIM</th>
        <th>Nomor Plat</th>
        <th>Tempat Pelanggaran</th>
        <th>Jenis Pelanggaran</th>
      </tr>
    </thead>
    <?php foreach( $pelanggar as $pl ) : ?>
    <tbody>
      <tr>
        <td><?= $pl['tanggal']; ?></td>
        <td><?= $pl['nama_pl']; ?></td>
        <td><?= $pl['nmr_sim']; ?></td>
        <td><?= $pl['nmr_plat']; ?></td>
        <td><?= $pl['lokasi']; ?></td>
        <td><?= $pl['jenis_pelanggaran']; ?></td>
        <td><a href=" <?= base_url(); ?>pelanggar/hapus/<?= $pl['id_surat'];?> " class="btn btn-danger">Kasus Selesai</a></td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
</div>
