<?php
session_start();

if(isset($_SESSION['hesap'])) {
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
    <link rel="stylesheet" href="style2.css">
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
<div class="container1111">
    <div class="anketimsi">
        <h1 style="color:white">Site Hakkında</h1>
        <p style="line-height:2.5;word-spacing:8px;font-family:Georgia, Times, 'Times New Roman', serif;font-size: 20px;color: white;">Bu Sitenin Yapımı <span style="color: gold;">16.11.2023 Perşembe </span>Günü Bitti.</p>

        <p style="line-height:2.5;word-spacing:10px;font-family:Georgia, Times, 'Times New Roman', serif;font-size: 20px;color: white;">Tutorial ve Video lar Yaklaşık <span style="color: gold;">24</span> saat sürdü. </p>

        <p style="line-height:2.5;word-spacing:10px;font-family:Georgia, Times, 'Times New Roman', serif;font-size: 20px;color: white;"> Siteyi <span style="color: gold;">6</span> Saatte Yaptım.</p>

        <p style="line-height:2.5;word-spacing:10px;font-family:Georgia, Times, 'Times New Roman', serif;font-size: 20px;color: white;"><span style="color: gold;">3</span> Saat Tasarım - <span style="color: gold;">1</span> Saat Javascript - <span style="color: gold;">2</span> Saat Php</p>

        <p style="line-height:2.5;word-spacing:10px;font-family:Georgia, Times, 'Times New Roman', serif;font-size: 20px;color: white;"> Site <span style="color: gold;">Github Profilimde</span> Pinlenmiş Durumda. Github Profilime Yan Taraftan Erişebilirsiniz.</p>

    </div>
    <div class="iletisimbaglanti">
        <h1 style="color:white">Bana Ulaşın</h1>
        <div class="adivi">
        <a href="mailto:umitcn.gl@gmail.com"><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;umitcn.gl@gmail.com</a>
        </div>
        <div class="adivi">
        <a href="https://github.com/umtcngl"target="_blank"><i class="fas fa-cat"></i>&nbsp;&nbsp;&nbsp;Github</a>
        </div>
    </div>
</div>
</body>
</html>