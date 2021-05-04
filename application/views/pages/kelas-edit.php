<div class="card">
    <div class="card-header card-primary">
        Buat Data Kelas
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url('kelas/update/'.$data_edit->id) ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Kelas</label>
                <input type="text" class="form-control" name="kode_kelas" value="<?= $data_edit->kode_kelas ?>" placeholder="Kode Kelas">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Kelas</label>
                <input type="text" class="form-control" name="nama_kelas" value="<?= $data_edit->nama_kelas ?>" placeholder="Nama Kelas">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>