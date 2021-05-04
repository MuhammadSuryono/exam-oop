<div class="card">
    <div class="card-header card-primary">
        Edit Data Kelulusan
    </div>
    <div class="card-body">
        <form method="post" action="<?= base_url('kelulusan/update/'.$data_edit->id) ?>">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Siswa</label>
                <select class="form-control" name="nisn">
                    <option value="" selected>Pilih Nama Siswa</option>
                    <?php
                    foreach ($data_siswa as $siswa) {
                        $selected = $siswa->nisn == $data_edit->nisn ? "selected": "";

                        echo '<option value="'.$siswa->nisn.'" '. $selected .' >'.$siswa->nisn.' - '.$siswa->nama_siswa.'</option>';
                    }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Total Nilai</label>
                <input type="number" class="form-control" value="<?= $data_edit->total_nilai ?>" name="total_nilai" placeholder="0">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select class="form-control" name="status">

                    <option value="" <?php echo $data_edit->status == "" ? "selected": ""; ?>>Pilih Status</option>
                    <option value="lulus" <?php echo $data_edit->status == "lulus" ? "selected": ""; ?>>Lulus</option>
                    <option value="tidak lulus" <?php echo $data_edit->status == "tidak lulus" ? "selected": ""; ?>>Tidak Lulus</option>
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>