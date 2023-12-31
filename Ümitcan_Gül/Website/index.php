<?php
session_start();

if(isset($_SESSION['hesap'])) {
    // Yönlendirme için hedef URL
    $hedefURL = "kullanici.php";
    $baglantiMetni = $_SESSION['hesap'];
    $baglantiIkon = "fas fa-user";
}
else{
    $baglantiMetni = "GİRİŞ YAP";
    $baglantiIkon = "fas fa-sign-in-alt";
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ana Sayfa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<!-- MENU -->
<header class="header">
        <div class="btn1"><a href="index.php"><i class="fas fa-home"></i>ANA SAYFA</a></div>
        <div class="btn1"><a href="biletal.php"><i class="fas fa-film"></i>BİLET AL</a></div>
        <div class="btn1"><a href="iletisim.php"><i class="fas fa-address-card"></i>HAKKIMIZDA</a></div>
        <div class="btn1"><a href="<?php echo isset($_SESSION['hesap']) ? $hedefURL : 'girisyap.php'; ?>">
        <i class="<?php echo $baglantiIkon; ?>"></i>
        <span class="girisyapyazisindex"><?php echo $baglantiMetni; ?></span></a>
        </div>
</header>
<!-- MENU SONU -->
<div class="anahat">
    <div class="afisdivi">
        <div class="slider">
            <img src="img/2.jpg" alt="Testere 10" class="afis">
            <div class="button">
                <i class="fas fa-chevron-left fa-2x soldüzenle"></i>
                <i class="fas fa-chevron-right fa-2x sagdüzenle"></i>
            </div>
        </div>
    </div>
    <div class="afisaciklamasi">
        <h1 class="baslik">TESTERE X</h1>
        <h3>ÖZET</h4>
        <p class="aciklama">
            Testere 10, kendisini dolandıranlardan intikam almak için harekete geçen Jigsaw’un hikayesini konu ediyor. Kanser hastası olan John, bütün umudunu kaybetmiştir. Deneysel ve çok riskli bir ameliyat olmaya karar veren John, bunun için Meksika’ya doğru yola koyulur. Ancak onun hastalığını tedavi etmeye yönelik bu ameliyat tamamen düzmecedir. En savunmasız anında dolandırılan John, intikam almak için en iyi yaptığı işe geri döner. John, kendisini dolandıranları delice ve usta işi tuzaklarıyla sınamak için harekete geçer.
        </p>
    </div>
</div>
<script src="index.js"></script>
<script>
    const girisyapyazisindex = document.querySelector(".girisyapyazisindex");
    girisyapyazisindex.textContent = $hesap;
</script>
</body>
</html>