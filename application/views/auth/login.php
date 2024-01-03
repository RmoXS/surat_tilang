<div class="container">
    
    <div class="card p-5">
    <div class="card-header">
    <h5 class="card-title">Login Admin</h5>
    </div>
        <form action="/action_page.php">
        <div class="mb-3 mt-3">
            <input type="text" class="form-control" id="email" placeholder="Masukkan Nama....." name="nama">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" id="pwd" placeholder="Masukkan password....." name="pswd">
        </div>
        <button type="submit" class="btn btn-primary">LOGIN</button>
        <hr>
        </form>
        <div class="text-center">
            <a href="<?= base_url(); ?>login/registration">
                Buat Akun?
            </a>
        </div>
    </div>
</div>

