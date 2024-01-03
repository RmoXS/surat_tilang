<div class="container p-5 my-5 border">
<div class="card">
  <div class="card-header">SURAT TILANG</div>
  <div class="card-body">
  <table class="table table-bordered">
  <?php foreach( $surat as $sr ) : ?>
    <tbody>
      <tr>
        <td class="col-sm-3">NO SURAT</td>
        <td><?= $sr['id_surat']; ?></td>
      </tr>
      <tr>
        <td class="col-sm-3">NAMA PETUGAS</td>
        <td><?= $sr['nama_ptgs']; ?></td>
      </tr>
      <tr>
        <td class="col-sm-3">NO SIM</td>
        <td><?= $sr['nmr_sim']; ?></td>
      </tr>
      <tr>
        <td class="col-sm-3">NO PLAT</td>
        <td><?= $sr['nmr_plat']; ?></td>
      </tr>
      <tr>
        <td class="col-sm-3">PELANGGARAN</td>
        <td><?= $sr['jenis_pelanggaran']; ?></td>
      </tr>
      <tr>
        <td class="col-sm-3">TINDAKAN</td>
        <td><?= $sr['tindakan']; ?></td>
      </tr>
      <tr>
        <td class="col-sm-3">WAKTU / TANGGAL</td>
        <td><?= $sr['tanggal']; ?></td>
      </tr>
      <tr>
        <td class="col-sm-3">LOKASI</td>
        <td><?= $sr['lokasi']; ?></td>
      </tr>
      <tr>
        <td class="col-sm-3">DENDA</td>
        <td><?= $sr['denda']; ?></td>
      </tr>
    </tbody>
    <?php endforeach; ?>
  </table>
  </div>
  <div class="card-footer">POLDA DAERAH ISTIMEWA YOGYAKARTA</div>
</div>
</div>