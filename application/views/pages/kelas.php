<div class="card">
    <div class="card-header card-primary">
        <a href="<?= base_url('kelas/create') ?>" class="btn btn-primary btn-md"><i class="fa fa-plus"></i> Tambah Data Kelas</a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th class="text-center">Kode Kelas</th>
                <th class="text-center">Kelas</th>
                <th class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data_kelas as $data) {
                echo '<tr>
                <td class="text-center">'.$data->kode_kelas.'</td>
                <td class="text-center">'.$data->nama_kelas.'</td>
                <td class="text-center">
                    <a href="'.base_url('kelas/edit/'.$data->id).'" class="btn btn-primary btn-md">Edit</a>
                    <a href="'.base_url('kelas/delete/'.$data->id).'" class="btn btn-danger btn-md">Delete</a>
                </td>
            </tr>';
            }
            ?>
        </table>
    </div>
</div>