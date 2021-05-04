<div class="card">
    <div class="card-header card-primary">
        Buat Data Siswa
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url('siswa/update/'.$data_edit->id) ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">NISN</label>
                <input type="text" class="form-control" name="nisn" value="<?= $data_edit->nisn ?>" placeholder="NISN">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Siswa</label>
                <input type="text" class="form-control" name="nama_siswa" value="<?= $data_edit->nama_siswa ?>" placeholder="Nama Siswa">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>