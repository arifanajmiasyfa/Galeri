<?php include 'config/header.php' ?>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['userid'])){
    ?>
            <ul>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
    <?php
        }else{
    ?>   
    <?php
        }
    ?>
     <?php
            include "koneksi.php";
            $sql=mysqli_query($conn,"select * from foto,user where foto.userid=user.userid");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <div class="container mx-auto mt-4">
            <div class="row">
                <div class="col md-3">
                <div class="card" style="width: 18rem;">
                <a href="zoom.php?fotoid=<?=$data['fotoid']?>"><img src="gambar/<?=$data['lokasifile']?>" class="card-img-top" alt="..."></a>
                <div class="card-body">
                    <h5 class="card-title"><?=$data['judulfoto']?></h5>
                    <p class="card-text"><?=$data['namalengkap']?></p>
                    <a href="like.php?fotoid=<?=$data['fotoid']?>"><i class="bi bi-heart-fill"></i></a>
                    <a href="komentar.php?fotoid=<?=$data['fotoid']?>">Komentar</a>
                </div>
                </div>
                </div>
            </div>
        </div>
    <?php 
            }
    ?>
</body>
</html>
