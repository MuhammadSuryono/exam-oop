<div class="card">
    <div class="card-header card-primary">
        <a href="<?= base_url('siswa/create') ?>" class="btn btn-primary btn-md"><i class="fa fa-plus"></i> Tambah Data Siswa</a>
    </div>
    <div class="card-body">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
            <tr>
                <th class="text-center">Nama Siswa</th>
                <th class="text-center">NISN</th>
                <th class="text-center">Kelas</th>
                <th class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($data_siswa as $data) {
                echo '<tr>
                <td class="text-center">'.$data->nama_siswa.'</td>
                <td class="text-center">'.$data->nisn.'</td>
                <td class="text-center">'.$data->nama_kelas.'</td>
                <td class="text-center">
                    <a href="'.base_url('siswa/edit/'.$data->id).'" class="btn btn-primary btn-md">Edit</a>
                    <a href="'.base_url('siswa/delete/'.$data->id).'" class="btn btn-danger btn-md">Delete</a>
                </td>
            </tr>';
            }
            ?>
        </table>
    </div>
</div>
<div class="modal" id="add-user" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content   ">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>