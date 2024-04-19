@extends('template.main')
@section('content')
    {{-- <h1>halaman berita</h1>
    @foreach ($beritas as $berita)
        <h1>title: <a href="{{ route('berita.detail', ['slug' => $berita->slug]) }}">{{ $berita->title }}</a></h1> 
        <p> {!! $berita->description !!}</p>
        <img src="{{ asset('storage/berita-images/' . $berita->image) }}">
    @endforeach --}}
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background: #f1f1f1;
        }
        .header{
            display: flex;
            align-items: center;
            height: 40px;
            padding: 15px;
            background: #432D77;
            box-shadow: 10px 10px 10px rgba(0,0,0,.1);
        }
        .logo{
            margin-right: 20px;
        }
        nav{
            position: relative;
            display: flex;
            align-items: center;
            width: 590px;
            height: 50px;
            background: #432D77;
            border-radius: 9px;
            font-size: 0;
        }
        nav a{
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
        nav .berita{
            color: #F9B045  ;
        }
        nav .animation{
            position: absolute;
            height: 5px;
            bottom: 0;
            z-index: 0;
            background: #F9B045;
            width: 100px;
            border-radius: 8px;
            transition: all .4s ease 0s;
        }
        a:nth-child(1){
            width: 100px;
        }
        nav .start-home,a:nth-child(1):hover~.animation{
            width: 90px;
            left: 7px;
        }

        a:nth-child(2){
            width: 110px;
        }
        nav .start-home,a:nth-child(2):hover~.animation{
            width: 90px;
            left: 110px;
        }

        a:nth-child(3){
            width: 100px;
        }
        nav .start-blog,a:nth-child(3):hover~.animation{
            width: 106px;
            left: 206px;
        }

        a:nth-child(4){
            width: 160px;
        }
        nav .start-protofolio,a:nth-child(4):hover~.animation{
            width: 120px;
            left: 330px;
        }
        .photo1 h1{
            position: absolute;
            font-size: 74px;
            color: #f1f1f1;
            left: 50%;
            top: 25%;
            transform: translate(-50%,-50%);
        }
        .isi .d-flex{
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
        .isi .d-flex input{
            width: 400px;
            border: none;
            outline: none;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid gray;
            font-size: 16px;
        }
        .isi nav{
            position: absolute;
            top: 50%;
            left: 50%;
            width: 320px;
            height: 50px;
            background: transparent;
            border-radius: 8px;
            font-size: 0;
            transform: translate(-50%,-50%);
        }
        .isi nav a{
            font-size: 15px;
            text-decoration: none;
            line-height: 50px;
            position: relative;
            z-index: 1;
            display: inline-block;
            color: #F9B045;
        }
        h1{
            margin-left: 20px;
        }
        h3{
            margin-left: 20px;
        }
        .awalan .berita-teratas{
            margin-top: 15px;
            font-size: 55px;
        }
        .isi1{
            display: grid;
            grid-template-columns: auto auto;
        }
        .isi1 .content1{
            background: url("assets/img/botak.png");
            margin: 20px 20px 20px 20px;
            border-radius: 8px;
            height: 400px;
            width: 800px;
            max-width: 800px;
            border-image: fill 0 linear-gradient(#0001, #000);
        }
        .isi1 .content2{
            background: url("assets/img/bambu.png");
            margin: 20px 20px 20px 0px;
            border-radius: 8px;
            height: 300px; 
            max-width: 800px;
            width: 660px;
            border-image: fill 0 linear-gradient(#0001, #000);
        }
        .isi1 .content2 h1{
            position: relative;
            font-size: 30px;
            top: 100%;
        }
        .container10{
            display: grid;
            grid-template-columns: auto auto;
            gap: 0.1rem;
        }
        .container10 .container1{
            height: 150px;
            width: 95%;
            margin-top: 10px;
            margin-left: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 2px 5px 2px #d4d4d4;
        }
        .container10 .container2{
            height: 150px;
            width: 95%;
            margin-top: 10px;
            margin-left: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 2px 5px 2px #d4d4d4;
        }
        .container10 .container3{
            height: 150px;
            width: 95%;
            margin-top: 10px;
            margin-left: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 2px 5px 2px #d4d4d4;
        }
        .container10 .container4{
            height: 150px;
            width: 95%;
            margin-top: 10px;
            margin-left: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 2px 5px 2px #d4d4d4;
        }
        .container10 img{
            border-radius: 8px;
        }
        .container10 a{
            position: absolute;
            font-size: 10px;
            width: 30%;
            color: #000;
            text-decoration: none;
        }
        .container10 a:hover{
            color: #4f4d4d;
        }
        .berita-terbaru h1{
            margin-top: 15px;
            font-size: 55px;
        }
        .berita-terbaru a{
            position: absolute;
            right: 2%;
            font-size: 25px;
            color: #000;
            transform: translate(-50%,-100%);
        }
        .container11{
            margin-left: 20px;
            margin-top: 10px;
            display: grid;
            grid-template-columns: auto auto auto;
        }
        .container11 .container5{
            height: 400px;
            width: 460px;
            background: transparent;
            border-radius: 8px;
        }
        .container11 .container6{
            height: 400px;
            width: 460px;
            background: transparent;
            border-radius: 8px;
        }
        .container11 .container7{
            height: 400px;
            width: 460px;
            background: transparent;
            border-radius: 8px;
        }
        .container10 h3{
            margin-left: 20px;
            position: relative;
            top: 70px;
        }
        .container11 a{
            color: #000;
            text-decoration: none;
            font-family: sans-serif;
        }
        .container11 h1{
            margin: 0px;
        }
        .berita-populer h1{
            font-size: 55px;
        }
        .container12 .container20{
            margin-top: 20px;
            margin-left: 20px;
            height: 95px;
            width: 60%;
            background: transparent;
        }
        .container12 .container21{
            margin-top: 20px;
            margin-left: 20px;
            height: 95px;
            width: 60%;
            background: transparent;
        }
        .container12 .container22{
            margin-top: 20px;
            margin-left: 20px;
            height: 95px;
            width: 60%;
            background: transparent;
        }
        .container12 .container23{
            margin-top: 20px;
            margin-left: 20px;
            height: 95px;
            width: 60%;
            background: transparent;
        }
        .container12 .container24{
            margin-top: 20px;
            margin-left: 20px;
            height: 95px;
            width: 60%;
            background: transparent;
        }
        .container12 .container25{
            margin-top: 20px;
            margin-left: 20px;
            margin-bottom: 100px;
            height: 95px;
            width: 60%;
            background: transparent;
        }
        .container12 a{
            position: absolute;
            font-size: 10px;
            width: 40%;
            color: #000;
            text-decoration: none;
        }
        .container12 a h3{
            color: #9b9b9b;
            position: absolute;
            margin-left: 20px;
            position: relative;
            top: 50px;
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
    <div class="awalan">
        <div class="photo1">
            <img src="{{ asset('assets/img/tugu.png') }}" alt="" height="100%" width="100%">
            <div class="isi">
                <h1>Berita</h1>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Silahkan cari berita disini" aria-label="Search" >
                </form>
                <nav>
                    <a href="#" class="teratas" >Teratas</a>
                    <a href="#" class="terbaru" >Terbaru</a>
                    <a href="#" class="populer" >Populer</a>
                </nav>
            </div>
        </div>
        <h1 class="berita-teratas">Berita teratas</h1>
    </div>
    <div class="isi1">
            <div class="content1">

            </div>
            <div class="content2">
                <h1>Crypto kian menjadi ladang tajir untuk usia muda</h1>
            </div>
    </div>
    <div class="container10">
        <div class="container1">
            <img src="{{ asset('assets/img/botak.png') }}" alt="" width="30%" height="100%">
            <a href=""><h1>Thanos menjabat sebagai presiden pada era 2024-kiamat</h1></a>
            <a href=""><h3>Thanos adalah seorang abang abang bakso yang bercita cita untuk memusnakan setengah populasi dari alam semesta, apakah ia akan berhasil?</h3></a>
        </div>
        <div class="container2">           
            <img src="{{ asset('assets/img/botak.png') }}" alt="" width="30%" height="100%">
            <a href=""><h1>Thanos menjabat sebagai presiden pada era 2024-kiamat</h1></a>
            <a href=""><h3>Thanos adalah seorang abang abang bakso yang bercita cita untuk memusnakan setengah populasi dari alam semesta, apakah ia akan berhasil?</h3></a>
        </div>
        <div class="container3">
            <img src="{{ asset('assets/img/botak.png') }}" alt="" width="30%" height="100%">
            <a href=""><h1>Thanos menjabat sebagai presiden pada era 2024-kiamat</h1></a>
            <a href=""><h3>Thanos adalah seorang abang abang bakso yang bercita cita untuk memusnakan setengah populasi dari alam semesta, apakah ia akan berhasil?</h3></a>
        </div>
        <div class="container4">
            <img src="{{ asset('assets/img/botak.png') }}" alt="" width="30%" height="100%">
            <a href=""><h1>Thanos menjabat sebagai presiden pada era 2024-kiamat</h1></a>
            <a href=""><h3>Thanos adalah seorang abang abang bakso yang bercita cita untuk memusnakan setengah populasi dari alam semesta, apakah ia akan berhasil?</h3></a>
        </div>
    </div>
    <div class="berita-terbaru">
        <h1>Berita Terbaru</h1>
        <a href="">Selengkapnya</a>
    </div>


    <div class="container11">
        <div class="container5">
            <img src="{{ asset('assets/img/ceramah.png') }}" alt="" height="60%" width="100%" style="border-radius: 8px;">
            <a href=""><h1>Sektor Perhotelan di Kalbar Terus Membaik pada 2023, Kata Ketua PHRI</h1></a>
        </div>
        <div class="container6">
            <img src="{{ asset('assets/img/ceramah.png') }}" alt="" height="60%" width="100%" style="border-radius: 8px;">
            <a href=""><h1>Sektor Perhotelan di Kalbar Terus Membaik pada 2023, Kata Ketua PHRI</h1></a>
        </div>
        <div class="container7">
            <img src="{{ asset('assets/img/ceramah.png') }}" alt="" height="60%" width="100%" style="border-radius: 8px;">
            <a href=""><h1>Sektor Perhotelan di Kalbar Terus Membaik pada 2023, Kata Ketua PHRI</h1></a>
        </div>
    </div>
    <div class="berita-populer">
        <h1>Berita Populer</h1>
    </div>
    <div class="container12">
        <div class="container20">
            <img src="{{ asset('assets/img/ceramah.png') }}" alt="" height="100%" width="20%" style="border-radius: 8px; border: 2px solid black;">
            <a href=""><h1>Kenaikan Pajak Hiburan Batal, Ketua PHRI Kalbar: Sangat Senang</h1></a>
            <a href=""><h3>45 menit yang lalu</h3></a>
        </div>
        <div class="container21">
            <img src="{{ asset('assets/img/ceramah.png') }}" alt="" height="100%" width="20%" style="border-radius: 8px; border: 2px solid black;">
            <a href=""><h1>Kenaikan Pajak Hiburan Batal, Ketua PHRI Kalbar: Sangat Senang</h1></a>
            <a href=""><h3>45 menit yang lalu</h3></a>
        </div>
        <div class="container22">
            <img src="{{ asset('assets/img/ceramah.png') }}" alt="" height="100%" width="20%" style="border-radius: 8px; border: 2px solid black;">
            <a href=""><h1>Kenaikan Pajak Hiburan Batal, Ketua PHRI Kalbar: Sangat Senang</h1></a>
            <a href=""><h3>45 menit yang lalu</h3></a>
        </div>
        <div class="container23">
            <img src="{{ asset('assets/img/ceramah.png') }}" alt="" height="100%" width="20%" style="border-radius: 8px; border: 2px solid black;">
            <a href=""><h1>Kenaikan Pajak Hiburan Batal, Ketua PHRI Kalbar: Sangat Senang</h1></a>
            <a href=""><h3>45 menit yang lalu</h3></a>
        </div>
        <div class="container24">
            <img src="{{ asset('assets/img/ceramah.png') }}" alt="" height="100%" width="20%" style="border-radius: 8px; border: 2px solid black;">
            <a href=""><h1>Kenaikan Pajak Hiburan Batal, Ketua PHRI Kalbar: Sangat Senang</h1></a>
            <a href=""><h3>45 menit yang lalu</h3></a>
        </div>
        <div class="container25">
            <img src="{{ asset('assets/img/ceramah.png') }}" alt="" height="100%" width="20%" style="border-radius: 8px; border: 2px solid black;">
            <a href=""><h1>Kenaikan Pajak Hiburan Batal, Ketua PHRI Kalbar: Sangat Senang</h1></a>
            <a href=""><h3>45 menit yang lalu</h3></a>
        </div>
    </div>
    @include('footer')
@endsection