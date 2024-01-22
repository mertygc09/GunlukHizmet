<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GİRİS YAP</title>
    <link rel="stylesheet" href="css/girisyap.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <div class="wrapper">
        <form action="">
            <h1>GünlükHizmet</h1>
            <div class="input-box">
                <input type="text" placeholder="Kullanıcı adı" required>
                <i class='bx bxs-user' ></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Şifre" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox">Hatırla</label>
            </div>
            <button type="submit" class="btn">Giriş</button>

            <div class="register-link">
                <p>Hesabın yokmu? <a href="kayit.php">Üye ol</a></p>
            </div>
        </form>
    </div>

</body>

</html>