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

            <div class="form-group">
                <label for="exampleInputEmail1">Nama Siswa</label>
                <select class="form-control" name="nama_kelas">
                    <option value="" selected>Pilih Kelas</option>
                    <?php
                    foreach ($data_kelas as $kelas) {
                        $selected = $kelas->nama_kelas == $data_edit->nama_kelas ? "selected": "";
                        echo '<option value="'.$kelas->nama_kelas.'" '.$selected.'>'.$kelas->kode_kelas.' - '.$kelas->nama_kelas.'</option>';
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>