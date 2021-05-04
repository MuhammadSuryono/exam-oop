<div class="card">
    <div class="card-header card-primary">
        Buat Data Siswa
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url('siswa/store') ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">NISN</label>
                <input type="text" class="form-control" name="nisn" placeholder="NISN">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Siswa</label>
                <input type="text" class="form-control" name="nama_siswa" placeholder="Nama Siswa">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Siswa</label>
                <select class="form-control" name="nama_kelas">
                    <option value="" selected>Pilih Kelas</option>
                    <?php
                    foreach ($data_kelas as $kelas) {
                        echo '<option value="'.$kelas->nama_kelas.'">'.$kelas->kode_kelas.' - '.$kelas->nama_kelas.'</option>';
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>