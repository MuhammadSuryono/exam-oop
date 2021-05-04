<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap.min.css">
    <script src="https://use.fontawesome.com/c12bac9e1f.js"></script>
    <title></title>
</head>
<body>
<style>
    .card
    {
        box-shadow: 0 7px 10px #888;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <a class="navbar-brand" href="#">SISTEM KELULUSAN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    DATA MASTER
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/siswa">Siswa</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/kelas">Kelas</a>
                </div>
            </li>
        </ul>
        <?php
        if (!$isLogin) {
            echo '<ul class="navbar-nav" style="float: right; margin-top: 0px; margin-bottom: auto">
            <form action="'.base_url('login').'" method="post">
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" name="username" placeholder="Username" aria-label="First name">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Last name">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-danger btn-md">LOGIN</button>
                    </div>
                </div>
            </form>
        </ul>';
        } else {
            echo '<a href="'.base_url('logout').'" type="submit" class="btn btn-danger btn-md" style="float:right;">LOGOUT</a>';
        }
        ?>
    </div>
</nav>
<div class="container-fluid mt-2">
    <?php $this->load->view($content) ?>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.js" />
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(() => {
        $('#example').DataTable();
    })
</script>
</body>
</html>