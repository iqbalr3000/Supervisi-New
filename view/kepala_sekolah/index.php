<!DOCTYPE html>
    <html>
        <head>
            <title>Supervisi | Kepala Sekolah</title>
            
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            
            
        </head>
        <body>
            <?php 
                session_start();
                if($_SESSION['status']!="login"){
                    header("location:../login.php?pesan=belum_login");
                }
            ?>
            
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="../../assets/img/supervisor.png" class="d-inline-block align-top" alt="">
                    Supervisi
                </a>             
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>
                    <a href="../logout.php" class="btn btn-danger my-2 my-sm-0">Keluar</a>
                </div>   
            </nav>

            <div class="container">
                <br><br>
                <!-- ini bagian button input  -->
                <h2 align='center'>Laporan Kegiatan Supervisi</h3>
                <br>
                <form align='center' action="report.php">
                    <button type="submit" class="btn btn-primary">Download laporan </button>
                </form> 

                <br><br>

                 
            </div>

        </body>
    </html>