<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Pacifico&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1>HI! WELCOME TO MY WEB PROFILE</h1>
    </header>
    
    <div class="content">
         <h2>Register</h2>
        <form action="register.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" id="username" name="username" required><br>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>
            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="Register">
        </form>
    </div>

    <div class="content">
        <h2>Home</h2>
        <div class="home-content">
            <p>HI! Selamat datang di website saya... </p>
            <p>Nama saya Natalia Kristiani Pangemanan biasa dipanggil Nata. Saya merupakan mahasiswa semester 4 Teknik Informatika di Universitas Sam Ratulangi Manado. Saya merupakan kelahiran 2004. Alamat tempat tinggal saya di Jln. Pramuka 16 no. 86 Sario Kotabaru, Sario. Saya memiliki beberapa hobi yaitu main alat musik, menyanyi,memasak, melukis, fotografi (view).  </p>
        </div>
        <button class="show-more" data-target="home-content">Hide</button>
    </div>

    <div class="content">
        <h2>Gallery</h2>
        <div class="gallery-content">
            <p>Berikut ini foto saya bersama dengan foto yang saya ambil berkaitan dengan hobi fotografi saya</p>
            <img src="1.jpg" alt="Foto 1" width="400" height="250">
            <img src="view 1.jpg" alt="Foto 1" width="400" height="250">
            <img src="view 3.jpg" alt="Foto 1" width="400" height="250">
            <img src="view 2.jpg" alt="Foto 1" width="400" height="250">
            <img src="view 4.jpg" alt="Foto 1" width="400" height="250">
        </div>
        <button class="show-more" data-target="gallery-content">Hide</button>
    </div>

    <div class="content">
        <h2>Blog</h2>
        <div class="blog-content">
            <p>Silakan klik link: <a href="https://nataliapangemananunsrat.blogspot.com/2024/02/nama-natalia-kristiani-pangemanan-nim.html" target="_blank">Tanya Jawab seputaran mata kuliah Kecakapan Antar Personal</a></p>
            <p>Silakan klik link: <a href="https://vincentsowody.blogspot.com/2024/03/tugas-2-kelompok-survei-kepuasan.html" target="_blank">Laporan Survei Kepuasan Mahasiswa terhadap Fasilitas Unsrat</a></p>
            <p>Silakan klik link: <a href="https://indonesiakaya.com/pustaka-indonesia/wayang-kulit-kekayaan-seni-nusantara-yang-bernilai-adiluhung/" target="_blank">Sejarah perkembangan Wayang Kulit di Indonesia</a></p>
        </div>
        <button class="show-more" data-target="blog-content">Hide</button>
    </div>

    <div class="content">
        <h2>Contact Person</h2>
        <div class="contact-content">
            <p>IG: @nataliaakristianii</p>
        </div>
        <button class="show-more" data-target="contact-content">Hide</button>
    </div>
</body>
</html>
