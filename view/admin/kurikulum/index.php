<!DOCTYPE html>
    <html>
        <head>
            <title>Supervisi | Kurikulum</title>
            <!-- Load file CSS Bootstrap offline -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        </head>
        <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm p-3 mb-5 bg-black">
                <a class="navbar-brand" href="../dashboard.php">
                    <img src="../../../assets/img/supervisor.png" class="d-inline-block align-top" alt="">
                    Supervisi
                </a>                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../guru/jadwal/index.php">Lihat Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="jadwal/index.php">Input Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../guru/index.php">Upload RPP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../supervisi/index.php">Cek RPP</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Input Supervisi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../kepala_sekolah/index.php">Laporan</a>
                        </li>
                    </ul>
                    <a href="../../logout.php" class="btn btn-danger mr-2">Keluar</a>
                </div>
            </nav>
            <br>
            <div class="container">
                <?php  
                    if(isset($_GET['pesan'])){
                        $pesan = $_GET['pesan'];
                        if($pesan == "berhasil"){
                            include '../../../assets/alert/alert_berhasil.php';
                        }else if($pesan == "gagal"){
                            include '../../../assets/alert/alert_gagal.php';
                        }
                    }
                ?>

                <br>
                <h2>Input Supervisor</h2>
                <br>
                <?php
                    include "../../../database/config.php";
                    $query = mysqli_query($koneksi, "SELECT * FROM user");
                    while($data = mysqli_fetch_array($query)){
                ?>
                <form method="POST" action="input.php?id=<?php echo $data['id']; ?>">
                <?php } ?>
                    <div class="form-group">
                        <label>Nama Guru:</label>
                        <select name="nama_guru" class='form-control'>
                            <option>--- Pilih guru ---</option>
                            <?php
                                include "../../../database/config.php";
                                $query = mysqli_query($koneksi, "SELECT * FROM user WHERE role='guru'");
                                while($data = mysqli_fetch_array($query)){
                                    echo '<option>'.$data['nama'].'</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success form-control" name="upload" value="Upload">Input</button>
                </form>
                
                <br><br>
                <div class="form-group">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Nama Supervisor</th>
                            <th width="170px">Action</th>
                        </tr>
 
                        <?php 
                            include "../../../database/config.php";
                            $query_mysql = mysqli_query($koneksi, "SELECT * FROM user WHERE role='supervisor'");
                            $nomor = 1;
                            while($data = mysqli_fetch_array($query_mysql)){
    
                        ?>
                            <tr>
                            <td><?php echo $nomor++ ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td>
                                <a class="btn btn-danger" href="delete.php?id=<?php echo $data['id']; ?>">Hapus</a>
                            </td>
                        </tr>

                        <?php } ?>
                    </table>
                </div>
            </div>
        </body>
    </html>