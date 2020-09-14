<!DOCTYPE html>
    <html>
        <head>
            <title>Supervisi | Guru</title>
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
                            <a class="nav-link" href="jadwal/index.php">Lihat Jadwal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../kurikulum/jadwal/index.php">Input Jadwal</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Upload RPP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../supervisi/index.php">Cek RPP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../kurikulum/index.php">Input Supervisi</a>
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
                <h2>Upload RPP</h2>
                <br>
                <form method="POST" action="upload.php" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>file:</label>
                        <input class="form-control" type="file" name="file">

                    </div>
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
                    <div class="form-group">
                        <label>Mata Pelajaran:</label>
                        <select name="mapel" class='form-control'>
                            <option>--- Pilih Mapel ---</option>
                            <option>PAI</option>
                            <option>Matematika</option>
                            <option>Bahasa Inggris</option>
                            <option>Bahasa Indonesia</option>
                            <option>Sejarah Indonesia</option>
                            <option>Produktif Jurusan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Supervisor:</label>
                        <select name="supervisor" class='form-control'>
                            <option>--- Pilih Supervisor ---</option>
                            <option>Kurikulum</option>
                            <?php
                                include "../../../database/config.php";
                                $query = mysqli_query($koneksi, "SELECT * FROM user WHERE role='supervisor'");
                                while($data = mysqli_fetch_array($query)){
                                    echo '<option>'.$data['nama'].'</option>';
                                }
                            ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success form-control" name="upload" value="Upload">Upload</button>
                </form>
                
                <br><br>
                <div class="form-group">
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>File</th>
                            <th>Nama Guru</th>
                            <th>Mata Pelajaran</th>
                            <th>Supervisor</th>
                            <th>Status</th>
                            <th>Waktu Upload</th>
                            <th width="170px">Action</th>
                        </tr>
 
                        <?php 
                            include "../../../database/config.php";
                            $query_mysql = mysqli_query($koneksi, "SELECT * FROM upload_file");
                            $nomor = 1;
                            while($data = mysqli_fetch_array($query_mysql)){
    
                        ?>
                            <tr>
                            <td><?php echo $nomor++ ?></td>
                            <td><?php echo $data['nama_file']; ?></td>
                            <td><?php echo $data['nama_guru']; ?></td>
                            <td><?php echo $data['mapel']; ?></td>
                            <td><?php echo $data['supervisor']; ?></td>
                            <td><?php echo $data['status']; ?></td>
                            <td><?php echo $data['waktu_upload']; ?></td>
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