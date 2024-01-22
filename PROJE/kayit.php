<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>KAYDOL</title>
    <link rel="stylesheet" href="css/kayit.css">
    <script src="https://kit.fontawesome.com/f6260cfbba.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="kaydırma/owl.carousel.min.css">
<link rel="stylesheet" href="kaydırma/owl.theme.default.min.css">
  </head>
  <body>
    <div class="wrapper">
        <form action="kayit.php" method="POST">
            <h1>GünlükHizmet</h1>

            <div class="input-box">
                <input type="email" name="email" placeholder="E-posta" required>
            </div>
            
            <div class="input-box">
                <input type="text" name="adisoyadi" placeholder="adı Soyadı" required>
            </div>

            <div class="input-box">
                <input type="text" name="kullaniciadi" placeholder="Kullancı adı" required>
            </div>
            
            <div class="input-box">
                <input type="password" name="sifre" placeholder="Şifre" required>
            </div>

            
            <button type="submit" name="submit" class="btn btn-primary">Kaydol</button>

            <div class="register-link">
                <p>Hesabın var mı? <a href="giris.php">Giriş Yap</a></p>
            </div>

        </form>
    </div>


<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
  integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8="
  crossorigin="anonymous"></script>
<script src="kaydırma/owl.carousel.min.js"></script>
<script src="kaydırma/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

<style>

    #giris_yap {
        color: rgb(122, 17, 17);
        border-bottom: none;
        border: 1px solid;
        border-radius: 10%;
        padding: 8px 11px;
        margin-top: 15px;
    }
</style>

