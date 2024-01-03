<div class="container">
    
    <div class="card p-5">
    <div class="card-header">
    <h5 class="card-title">Registrasi Admin</h5>
    </div>
        <form action="<?= base_url('auth/registration'); ?>" method="post">
        <div class="mb-3 mt-3">
            <input type="text" class="form-control" id="email" placeholder="Masukkan Nama....." name="nama">
        </div>
        <div class=" mb-3">
            <input type="password" class="form-control" id="pswd1" placeholder="Masukkan password....." name="pswd">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Registrasi</button>
        <hr>
        </form>
        <div class="text-center">
            <a href="<?= base_url(); ?>login">
                LOGIN
            </a>
        </div>
    </div>
</div>

