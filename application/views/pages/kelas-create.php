<div class="card">
    <div class="card-header card-primary">
        Buat Data Kelas
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url('kelas/store') ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Kelas</label>
                <input type="text" class="form-control" name="nama_kelas" placeholder="Nama Kelas">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>