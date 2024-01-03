
    <!-- Nav tabs -->
    <ul class="nav nav-pills mt-2 ml-2">
        <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="pill" href="#home">Data Pelanggar</a>
        <!-- </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#menu1">Data Penilang</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="pill" href="#menu2">Deskripsi Kejadian</a>
        </li> -->
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div class="tab-pane container active" id="home">
            <div id="home" class="container tab-pane active"><br>
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title">INFORMASI PELANGGAR</h5>
                        </div>
                        <div class="card-body">
                            <?= validation_errors(); ?>
                            <form>
                            <div class="mb-3">
                                    <label for="text1" class="form-label">Petugas</label>
                                    <input type="text" class="form-control" name="nama_ptgs" id="text1">
                                </div>
                                <div class="mb-3">
                                    <label for="text1" class="form-label">Nama Pelanggar</label>
                                    <input type="text" class="form-control" name="nama_pl" id="text1">
                                </div>
                                <div class="mb-3">
                                    <label for="text2" class="form-label">Alamat Pelanggar</label>
                                    <input type="text" class="form-control" name="alamat_pl" id="text2">
                                </div>
                                <div class="mb-3">
                                    <label for="text3" class="form-label">Nomor SIM</label>
                                    <input type="text" class="form-control" name="nrm_sim" id="text3">
                                </div>
                                <div class="mb-3">
                                    <label for="text4" class="form-label">Plat Kendaraan</label>
                                    <input type="text" class="form-control" name="nmr_plat" id="text3">
                                </div>
                                <div class="mb-3">
                                    <label for="text1" class="form-label">Jenis Pelanggaran</label>
                                    <input type="text" class="form-control" name="pelanggaran" id="text1">
                                </div>
                                <div class="mb-3">
                                    <label for="text1" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control" name="lokasi" id="text1">
                                </div>
                                <div class="mb-3">
                                    <label for="text1" class="form-label">Tindakan</label>
                                    <input type="text" class="form-control" name="tindakan" id="text1">
                                </div>
                                <div class="mb-3">
                                    <label for="text1" class="form-label">Tanggal</label>
                                    <input type="date" class="form-control" name="tanggal" id="text1">
                                </div>
                                <div class="mb-3">
                                    <label for="text1" class="form-label">Denda</label>
                                    <input type="text" class="form-control" name="denda" id="text1">
                                </div>
                                <button type="submit" class="btn btn-primary" name="tambah">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="tab-pane container fade" id="menu1"><br>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">INFORMASI PETUGAS</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="text1" class="form-label">Nama Petugas</label>
                                <input type="text" class="form-control" id="text1">
                            </div>
                            <div class="mb-3">
                                <label for="text2" class="form-label">Jabatan</label>
                                <input type="text" class="form-control" id="text2">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- <div class="tab-pane container fade" id="menu2"><br>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Deskripsi Kejadian</h5>
                    </div>
                    <div class="card-body">
                        <form>
                        <div class="mb-3">
                                <label for="text1" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" id="text1">
                            </div>
                            <div class="mb-3">
                                <label for="text1" class="form-label">Jenis Pelanggaran</label>
                                <input type="text" class="form-control" id="text1">
                            </div>
                            <div class="mb-3">
                                <label for="text1" class="form-label">Lokasi</label>
                                <input type="text" class="form-control" id="text1">
                            </div>
                            <div class="mb-3">
                                <label for="text1" class="form-label">Tindak Polisi</label>
                                <input type="text" class="form-control" id="text1">
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    </div>

    
   
