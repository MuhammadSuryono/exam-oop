<div class="container">
    <div class="row" style="margin-left: auto; margin-right: auto">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <h3>PERIKSA KELULUSAN ANDA</h3>
                    </div>
                    <form method="post" action="<?= base_url('check-kelulusan') ?>">
                        <div class="form-group">
                            <label for="exampleInputEmail1">NISN</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" name="nisn" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">Masukkan NISN anda</small>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right"><i class="fa fa-graduation-cap"></i> Periksa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card" style="margin-top: 20px">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                    <tr>
                        <th class="text-center">Nama Siswa</th>
                        <th class="text-center">Kelas</th>
                        <th class="text-center">Total Nilai</th>
                        <th class="text-center">Keterangan</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($data_kelulusan as $data) {
                        echo '<tr>
                <td>' . $data->nama_siswa . '</td>
                <td class="text-center">'.$data->nama_kelas.'</td>
                <td class="text-center">' . $data->total_nilai . '</td>
                <td class="text-center"><b><span class="badge badge-success">' . strtoupper($data->status) . '</span></b></td>
            </tr>';
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>