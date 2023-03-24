<?php
  $pr ="p1";
  if(isset($_GET["pg"])){
     $pr = $_GET["pg"];
  }    
  $konten = "";
  $judulpage ="";
  switch($pr){
    case "p1":
        $judulpage ="halaman 1";
        $konten ="<h3>Halaman p1</h3>";
        $konten .="<p>Menampilkan halaman p1</p1>";
        break;
    case "p2":
        $judulpage ="halaman 2";
        $konten ="<h3>Halaman p1</h3>";
        $konten .= "<p>Menampilkan halaman p1</p1>";
        break;
    case "p3":
        $judulpage ="halaman 3";
        $konten .="<h3>Halaman p1</h3>";
        $konten.= "<p>Menampilkan halaman p1</p1>";
        break;
    default:
    $konten  = "<h3>Halaman p1</h3>";
    $konten .="<p>Menampilkan halaman p1</p1>";
    break;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judulpage; ?></title>
</head>
<body>
     <a href="Latihan03.php?pg=p1">halaman1</a> <a href ="latihan03.php?pg=p2">halaman2</a> <a href ="latihan03.php?pg=p3">halaman3</a>
     <?php
     echo $konten;
?>
</body>
</html>