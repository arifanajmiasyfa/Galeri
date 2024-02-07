<?php
    include "config/header.php";

    $fotoid = $_GET['fotoid'];
?>

<body>
<?php
            include "koneksi.php";
            $sql=mysqli_query($conn,"SELECT * from foto where fotoid='$fotoid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
<div class="card mb-3">
  <img src="gambar/<?=$data['lokasifile']?>" class="card-img-top" width="50%" height="50%" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
  </div>
  <?php
    }
  ?>
</body>