<div class="card">
    <div class="card-header card-primary">
        Buat Data Kelulusan
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url('kelulusan/store') ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Siswa</label>
                <select class="form-control" name="nisn">
                    <option value="" selected>Pilih Nama Siswa</option>
                    <?php
                    foreach ($data_siswa as $siswa) {
                        echo '<option value="'.$siswa->nisn.'">'.$siswa->nisn.' - '.$siswa->nama_siswa.'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Total Nilai</label>
                <input type="number" class="form-control" name="total_nilai" placeholder="0">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select class="form-control" name="status">
                    <option value="" selected>Pilih Status</option>
                    <option value="lulus">Lulus</option>
                    <option value="tidak lulus">Tidak Lulus</option>
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>