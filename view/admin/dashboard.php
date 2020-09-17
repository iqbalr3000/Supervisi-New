<!DOCTYPE html>
    <html>
        <head>
            <title>Supervisi | Admin</title>
            <!-- file css -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            

        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="dashboard.php">
                    <img src="../../assets/img/supervisor.png" class="d-inline-block align-top" alt="">
                    Supervisi
                </a>                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="guru/jadwal/index.php">Lihat Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kurikulum/jadwal/index.php">Input Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="guru/index.php">Upload RPP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="supervisi/index.php">Cek RPP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kurikulum/index.php">Input Supervisi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kepala_sekolah/index.php">Laporan</a>
                        </li>
                    </ul>
                    <a href="../logout.php" class="btn btn-danger mr-2">Keluar</a>
                </div>
            </nav>
            <br><br>

            <div class="content">

                <center>
                    <?php 
                        include '../../assets/img/welcome.svg';
                    ?>
                </center>

            </div>
        </body>
    </html>