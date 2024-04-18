@extends('template.main')
@section('content')
<style>
    * {
        margin: 0;
        padding: 0;
    }
    body {
        font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
        background: #ffffff;
        position: relative;
        overflow-x: hidden;
    }
    .header {
        display: flex;
        align-items: center;
        height: 40px;
        padding: 15px;
        background: #432d77;
        box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 0.1);
    }
    .logo {
        margin-right: 20px;
    }
    nav {
        position: relative;
        display: flex;
        align-items: center;
        width: 590px;
        height: 50px;
        background: #432d77;
        border-radius: 9px;
        font-size: 0;
        /* box-shadow: 0 2px 3px 0 rgba(0,0,0,.1); */
    }
    nav a {
        font-size: 15px;
        text-transform: uppercase;
        color: azure;
        text-decoration: none;
        line-height: 50px;
        position: relative;
        z-index: 1;
        display: inline-block;
        text-align: center;
    }
    nav .home {
        color: #f9b045;
    }
    nav .animation {
        position: absolute;
        height: 5px;
        bottom: 0;
        z-index: 0;
        background: #f9b045;
        width: 100px;
        border-radius: 8px;
        transition: all 0.4s ease 0s;
    }
    a:nth-child(1) {
        width: 100px;
    }
    nav .start-home,
    a:nth-child(1):hover ~ .animation {
        width: 90px;
        left: 7px;
    }

    a:nth-child(2) {
        width: 110px;
    }
    nav .start-about,
    a:nth-child(2):hover ~ .animation {
        width: 90px;
        left: 110px;
    }

    a:nth-child(3) {
        width: 100px;
    }
    nav .start-blog,
    a:nth-child(3):hover ~ .animation {
        width: 106px;
        left: 206px;
    }

    a:nth-child(4) {
        width: 160px;
    }
    nav .start-protofolio,
    a:nth-child(4):hover ~ .animation {
        width: 120px;
        left: 330px;
    }
    .photo1 {
        background-image: url("assets/img/bambu.png");
        min-height: 500px;
        width: 100%;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .photo1 .box {
        display: flex;
        /* position: absolute; */
        /* transform: translate(-50%,-50%); */
        width: 80%;
        height: 380px;
        background: rgba(0, 0, 0, 0.6);
        margin: 70px auto;
        border-radius: 10px 10px 10px 10px;
        border: 2px solid;
        border-color: #4d4d4d;
        display: flex;
    }
    .photo1 .content img {
        height: 100px;
        width: 350px;
    }
    .photo1 .content {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }
    .photo1 .content h2 {
        color: aliceblue;
        text-align: center;
        width: 50%;
    }
    .content1 {
        margin-top: 30px;
        margin-left: 60px;
    }
    .content1 h1 {
        font-size: 48px;
    }
    .content1 h2 {
        font-size: 16px;
        padding-right: 40%;
    }

    .box2 {
        width: 1000px;
        height: 500px;
        background: #f1f1f1;
        margin: 70px auto;
        border-radius: 10px 10px 10px 10px;
        border: 1px solid;
        border-color: #818181;
        margin-top: 150px;
        box-shadow: 0px 3px 2px 0px rgba(0, 0, 0, 0.2);
    }
    .box2 .img1 img {
        position: absolute;
        height: 280px;
        top: -50%;
    }
    .box2 .img2 img {
        position: absolute;
        height: 400px;
        top: -78%;
        left: 65%;
    }
    .box2 .box3 h1 {
        color: #f9b045;
        padding-top: 50px;
        padding-left: 80px;
    }
    .box2 .box3 .grid-container {
        font-size: 12px;
        padding-top: 50px;
        padding-left: 80px;
        color: #f1f1f1;
        display: grid;
        grid-template-columns: auto auto auto;
    }
    .section-kemitraan {
        position: relative;
    }

    .box2 .box3 {
        position: relative;
        width: 910px;
        height: 400px;
        background: #432d77;
        margin: 70px auto;
        border-radius: 10px 10px 10px 10px;
        box-shadow: 0px 3px 2px 0px rgba(0, 0, 0, 0.1);
        border: 1px solid;
        border-color: #140044;
    }
    .box2 button {
        position: relative;
        top: 35px;
        border-radius: 17px 17px 17px 17px;
        color: white;
        border-color: #4d4d4d;
        border: 0px;
        background-color: #f9b045;
        box-shadow: 0px 4px 3px 0px rgba(0, 0, 0, 0.2);
        font-family: sans-serif;
        margin-left: 10px;
        cursor: pointer;
        height: 50px;
        width: 880px;
    }
    .kemitraan img {
        position: relative;
        width: 30%;
        left: 35%;
    }

    .background img {
        position: relative;
        width: 50%;
        display: flex;
        left: 50%;
    }
    .koki{
        position: absolute;
        /* width: 30%; */
        width: fit-content; 
        padding: 5px;
        left: 70%;
        top: 200px;
        display: flex;
        flex-direction: column;
    }

    .koki img {
        width: 100%;
    }

    .content2 h5 {
        margin-left: 15px; 
        width: fit-content;
        text-align: center;
        color: #FBF9FF;
        font-size: 14px;
    }

    .content2 button {
        border-radius: 17px 17px 17px 17px;
        color: white;
        border-color: #4d4d4d;
        border: 0px;
        background-color: #f9b045;
        box-shadow: 0px 4px 3px 0px rgba(0, 0, 0, 0.2);
        font-family: sans-serif;
        margin-top: 10px;
        margin-left: 30px;
        cursor: pointer;
        height: 35px;
        width: 350px;
    }

    .KemitraanKami {
        display: flex;
        justify-content: center;
        padding-top: 20px;
        color: #4f426f;
    }

    .grid-container1 {
        display: grid;
        grid-template-columns: auto auto auto;
        justify-content: center;
    }

    .neo {
        padding-top: 50px;
        width: 75%;
    }

    .maestro {
        padding-top: 30px;
        width: 90%;
    }

    .clubhouse {
        padding-top: 50px;
    }
    footer {
        display: grid;
        grid-template-columns: auto auto auto auto auto;
        background-color: #432D77;
        padding: 50px;
        color: white;
    }

    footer .hubungi{
        width: 150px;
    }

    footer .buka{
        width: 150px;
        padding-left: 10px;
    }

    footer .foto{
        text-align: center;
        padding-left: 30px;
        padding-right: 40px;
    }

    footer .tentangkami{
        width: 350px;
    }

    footer .vl{
        border-left: 2px solid white;
        height: 200px;  
    }

    footer .logo .bi-instagram{
        color: #f1f1f1;
        font-size: 25px;
    }
    footer .logo .bi-facebook{
        color: #f1f1f1;
        font-size: 25px;
    }
    footer .logo .bi-twitter{
        color: #f1f1f1;
        font-size: 25px;
    }
    footer .logo .bi-youtube{
        color: #f1f1f1;
        font-size: 25px;
    }
    footer .logo .bi-tiktok{
        color: #f1f1f1;
        font-size: 25px;
    }

    footer .logo p{
        width: 225px;
    }

    footer .hr{
        padding-top: 120px;
        width: 450%;
    }
</style>
@include('navbar')
<section id="hero" class="photo1">
    <div class="box">
      <div class="content">
        <img src="{{ asset('assets/img/PHRIP.png') }}" alt="">
        <h2>
          Sistem Digitalisasi Yang Terintegrasi dengan Seluruh Anggota PHRI
          Kota Pontianak
        </h2>
      </div>
    </div>
</section>
<section id="about-us">
    <div class="content1">
        <h1 class="Kami">Tentang Kami</h1>
        <h2>
          Awak Datang, Kamek Sambot. Selamat datang di website resmi Pemerintah
          Kota Pontianak. Memuat beragam topik dan informasi terkini yang
          diterbitkan langsung oleh pemerintah kota, untuk masyarakat daerah
          Kota Pontianak dan sekitarnya. Semoga dengan adanya website resmi ini,
          dapat memudahkan masyarakat untuk lebih mengetahui kondisi terkini
          dari Kota Pontianak, sebaliknya pemerintah kota yang juga turut andil
          besar dalam bersama menggiring masyarakat untuk memajukan Kota
          Pontianak tercinta ini. Terima Kasih.
        </h2>
      </div>
      <div class="box2">
        <div class="box3">
          <div class="img1">
            <img src="{{ asset('assets/img/PHRIP.png') }}" alt="" class="PHRIP">
          </div>
          <div class="img2">
            <img src="{{ asset('assets/img/semangat.png') }}" alt="" class="semangat">
          </div>
          <h1>Dapatkan Keuntungan</h1>
          <div class="grid-container">
            <h2 style="width: 150px; font-weight: 100">
              Diskon Pengiriman barang ke Jakarta
            </h2>
            <h2 style="width: 200px; font-weight: 100">
              Konsultan Financial Perbankan
            </h2>
            <h2 style="width: 150px; font-weight: 100">
              Pengurusan Perizinan OSS
            </h2>
            <h2 style="padding-top: 60px; font-weight: 100">Button Panic</h2>
            <h2 style="padding-top: 60px; font-weight: 100">Bantuan Hukum</h2>
            <h2 style="padding-top: 30px; width: 150px; font-weight: 100">
              Bantuan Teknik Kelistrikan
            </h2>
            <h2 style="padding-top: 60px; font-weight: 100">
              Sertifikasi Halal
            </h2>
            <h2 style="padding-top: 60px; font-weight: 100">Desain Interior</h2>
            <h2 style="padding-top: 60px; font-weight: 100">Supplier</h2>
          </div>
          <button><a href=""></a>Daftar Sekarang</button>
        </div>
    </div>
</section>
<section id="kemitraan" class="section-kemitraan">
    <div class="kemitraan">
        <img src="{{ asset('assets/img/kemitraan.png') }}" alt="" class="kemitraan">
    </div>

    <div class="imgs">
        <div class="background">
            <img src="{{ asset('assets/img/background.png') }}" alt="" class="background">
        </div>

        <div class="koki">
            <img src="{{ asset('assets/img/koki.png') }}" alt="">
            <div class="content2">
                <h5>
                    Kami Membuka Peluang Kemitraan Kepada Semua Pihak untuk Menjadi
                    Kemitraan PHRI Pontianak, Silahkan Segera Masukan Penawaran Anda
                    Dibawah Ini.
                </h5>
                <button><a href=""></a>Masukan Penawaran</button>
            </div>
        </div>
    </div>

    <div class="KemitraanKami">
        <h1>Kemitraan Kami</h1>
    </div>

    <div class="grid-container1">
        <div class="neo">
            <img src="{{ asset('assets/img/neo.png') }}" alt="" class="neo">
        </div>
        
        <div class="maestro">
            <img src="{{ asset('assets/img/maestro.png') }}" alt="" class="maestro">
        </div>
        
        <div class="clubhouse" style="padding-left: 90px;">
            <img src="{{ asset('assets/img/clubhouse.png') }}" alt="" class="clubhouse">
        </div>
</section>
<footer>
    <section class="hubungi">
    <p style="font-weight: bolder;">Hubungi Kami</p>
    <p>(+62)895-2433-3097</p>
    <p>(+62)895-2433-3097</p>
    <p>inigmail@gmail.com</p>
    <p>jln.jalan Gg. gang, D4</p>
    </section>

    <section class="buka"><p style="font-weight: bolder;">Buka Jam</p>
        <p>08:30 - 23:00 WIB Senin-Sabtu</p>
    </section>

    <section class="foto">
        <p style="font-weight: bolder;">Lokasi</p>
        <p>Jln.jalan, Gg. komplek, d0</p>
        <img src="{{ asset('assets/img/footerfoto.png') }}" alt="" class="footerfoto">
    </section>

    <section>
    <div class="vl"></div>
    </section>
    <section class="tentangkami">
        <p style="font-weight: bolder;">Tentang kami</p>
        <p>Kami adalah sebuah perusahaan instansi pemerintah
            yang bergerrak pada bidang perhotelan yang berada
            di pontianak, kami berharap agar instansi ini bisa 
            memberikan layanan yang terbaik kepada semua
            orang yang tinggal dikalimantan Barat.</p>
    </section>

    <section class="logo">
        <p style="font-weight: bolder;">Sosial Media</p>
        <a href="" class="nav-link"><i class="bi bi-instagram"></i></a>
        <a href="" class="nav-link"><i class="bi bi-facebook"></i></a>
        <a href="" class="nav-link"><i class="bi bi-twitter"></i></a>
        <a href="" class="nav-link"><i class="bi bi-youtube"></i></a>
        <a href="" class="nav-link"><i class="bi bi-tiktok"></i></a>
        <p>@PHRI Provinsi Kalimantan Barat</p>
    </section>


    <section class="hr"><hr></section>    
</footer>
@endsection