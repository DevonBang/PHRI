@extends('template.main')
@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            background: #ffffff;
        }

        .header {
            display: flex;
            align-items: center;
            height: 70px;
            padding: 15px;
            background: #432D77;
            box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, .1);
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
            background: #432D77;
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
            display: flex;
            justify-content: center;
            text-align: center;
        }

        nav .informasi {
            color: #F9B045;
        }

        nav .animation {
            position: absolute;
            height: 5px;
            bottom: 0;
            z-index: 0;
            background: #F9B045;
            width: 100px;
            border-radius: 8px;
            transition: all .4s ease 0s;
        }

        a:nth-child(1) {
            width: 100px;
        }

        nav .start-home,
        a:nth-child(1):hover~.animation {
            width: 90px;
            left: 7px;
        }

        a:nth-child(2) {
            width: 110px;
        }

        nav .start-about,
        a:nth-child(2):hover~.animation {
            width: 90px;
            left: 110px;
        }

        a:nth-child(3) {
            width: 100px;
        }

        nav .start-home,
        a:nth-child(3):hover~.animation {
            width: 106px;
            left: 206px;
        }

        a:nth-child(4) {
            width: 160px;
        }

        nav .start-kemitraan,
        a:nth-child(4):hover~.animation {
            width: 120px;
            left: 330px;
        }

        .dropbtn {
            background-color: transparent;
            color: white;
            font-weight: bold;
            padding-right: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            border-radius: 60px;
            height: 40px;
            width: fit-content;

        }
        .login{
            color: white;
            font-weight: bold;
            font-size: 16px;
        }
        .pemisah {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            padding-right: 40px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            border-radius: 3px;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content button {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #cac9c9;
            border-radius: 3px;
            width: 100%;
        }
        .dropdown-content button:hover {
            background-color: #cac9c9;
            border-radius: 3px;
            width: 100%;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #432D77;
        }

        .judul {
            margin-top: 50px;
        }

        .judul h1 {
            display: grid;
            justify-content: center;
            font-size: 65px;
            font-weight: bold;
            text-shadow: 0px 10px 8px #8f8f8f;
        }

        .judul h2 {
            display: grid;
            justify-content: center;
            margin-top: 20px;
            font-size: 28px;
        }

        .judul h3 {
            display: grid;
            justify-content: center;
            font-size: 20px;
            margin-top: 10px;
        }

        .isi {
            display: grid;
            grid-template-columns: auto auto auto;
            justify-content: center;
            margin-top: 40px;
        }

        .container1 {
            height: 150px;
            width: 300px;
            background: #F1F1F1;
            margin-top: 15px;
            display: flex;
            border-radius: 8px;
            align-items: center;
            justify-content: center;
            margin-left: 50px;
            box-shadow: 0px 5px 3px #cbcbcb;
        }

        .container2 {
            height: 150px;
            width: 300px;
            background: #F1F1F1;
            margin-top: 15px;
            display: flex;
            border-radius: 8px;
            align-items: center;
            justify-content: center;
            margin-left: 50px;
            box-shadow: 0px 5px 3px #cbcbcb;
        }

        .container3 {
            height: 150px;
            width: 300px;
            background: #F1F1F1;
            margin-top: 15px;
            display: flex;
            border-radius: 8px;
            align-items: center;
            justify-content: center;
            margin-left: 50px;
            box-shadow: 0px 5px 3px #cbcbcb;
        }

        .container4 {
            height: 150px;
            width: 300px;
            background: #F1F1F1;
            margin-top: 15px;
            display: flex;
            border-radius: 8px;
            align-items: center;
            justify-content: center;
            margin-left: 50px;
            box-shadow: 0px 5px 3px #cbcbcb;
        }

        .container5 {
            height: 150px;
            width: 300px;
            background: #F1F1F1;
            margin-top: 15px;
            display: flex;
            border-radius: 8px;
            align-items: center;
            justify-content: center;
            margin-left: 50px;
            box-shadow: 0px 5px 3px #cbcbcb;
        }

        .container6 {
            height: 150px;
            width: 300px;
            background: #F1F1F1;
            margin-top: 15px;
            display: flex;
            border-radius: 8px;
            align-items: center;
            justify-content: center;
            margin-left: 50px;
            box-shadow: 0px 5px 3px #cbcbcb;
        }

        .container7 {
            height: 150px;
            width: 300px;
            background: #F1F1F1;
            margin-top: 15px;
            display: flex;
            border-radius: 8px;
            align-items: center;
            justify-content: center;
            margin-left: 50px;
            box-shadow: 0px 5px 3px #cbcbcb;
        }

        .container8 {
            height: 150px;
            width: 300px;
            background: #F1F1F1;
            margin-top: 15px;
            display: flex;
            border-radius: 8px;
            align-items: center;
            justify-content: center;
            margin-left: 50px;
            box-shadow: 0px 5px 3px #cbcbcb;
        }

        .container9 {
            height: 150px;
            width: 300px;
            background: #F1F1F1;
            margin-top: 15px;
            display: flex;
            border-radius: 8px;
            align-items: center;
            justify-content: center;
            margin-left: 50px;
            box-shadow: 0px 5px 3px #cbcbcb;
        }

        .input-handphone {
            position: relative;
        }

        #nomor-handphone {
            width: 100%;
            padding-left: 40px;
        }

        .region-number {
            position: absolute;
            left: 5px;
            border-radius: 5px;
            top: 6px;
            font-size: 13px;
            padding: 2px 4px;
            background-color: #dfdfdf;
        }

        .box1 {
            position: relative;
            left: 50%;
            transform: translate(-50%);
            width: 1200px;
            border-radius: 10px;
            box-shadow: 0px 8px 4px 0px rgba(0, 0, 0, 0.25);
            border: 2px solid #7e7e7e;
            margin-bottom: 50px;
        }

        .box1 img {
            position: absolute;
            width: 659px;
            height: 810px;
            transform: translate(-50%, );
            left: 45%;
            top: 0%;
            z-index: -1;
            border-radius: 8px;
        }

        .box {
            width: 780px;
            background-color: white;
            height: fit-content;
            padding: 15px 25px;
            border-radius: 10px 8px 8px 10px;
        }

        .box form .input-group {
            display: grid;
            grid-template-rows: 1fr 1fr;
            grid-template-columns: 1fr;
            gap: 0px;
            align-items: center;
            margin-bottom: 6px;
        }

        .box form .input-group label {
            display: flex;
            text-align: left;
            font-size: 16px;
            font-weight: 500;
        }

        .box form .input-group input {
            padding: 7px 5px;
            font-size: 16px;
            border-radius: 4px;
            border: 1px solid #7e7e7e;
        }

        .input-radio {
            text-align: left;
            display: flex;
            flex-direction: row;
            column-gap: 15px;
        }

        .box form .input-group .input-radio label {
            font-size: 12px;
        }

        .disable {
            visibility: hidden;
        }

        #ungu {
            width: 30%;
            height: 100%;
            position: fixed;
            display: block;
            left: 0;
            z-index: 0;
        }

        #kuning {
            width: 30%;
            height: 100%;
            position: fixed;
            display: block;
            right: 0;
            z-index: 0;
        }

        .button {
            position: relative;
            left: 65%;
            display: flex;
            width: fit-content;
        }

        .kirim {
            margin: 20px 0px 0px 5px;
            border: none;
            padding: 8px;
            width: 100px;
            color: #f4f4f4;
            font-weight: bold;
            cursor: pointer;
            border-radius: 8px;
            font-size: 16px;
            background: #19a809;
        }

        .refresh {
            margin: 20px 5px 0px 0px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            padding: 8px;
            width: 150px;
            color: #f4f4f4;
            font-weight: bold;
            cursor: pointer;
            border-radius: 8px;
            font-size: 16px;
            background: #f94545;
        }

        .daftar {
            margin-left: 160px;
            margin-top: 90px;
            margin-bottom: 20px;
            font-size: 32px;
        }

        .refresh-btn {
            margin-right: 4px;
        }

        .img {
            width: 400px;
            margin-left: 10px;
        }

        .text {
            margin-left: -50px;
        }

        footer {
            display: grid;
            grid-template-columns: auto auto auto auto auto;
            background-color: #432D77;
            padding: 50px;
            color: white;
        }

        footer .hubungi {
            width: 150px;
        }

        footer .buka {
            width: 150px;
            padding-left: 10px;
        }

        footer .foto {
            text-align: center;
            padding-left: 30px;
            padding-right: 40px;
        }

        footer .tentangkami {
            width: 350px;
        }

        footer .vl {
            border-left: 2px solid white;
            height: 200px;
        }

        footer .logo .bi-instagram {
            color: #f1f1f1;
            font-size: 25px;
        }

        footer .logo .bi-facebook {
            color: #f1f1f1;
            font-size: 25px;
        }

        footer .logo .bi-twitter {
            color: #f1f1f1;
            font-size: 25px;
        }

        footer .logo .bi-youtube {
            color: #f1f1f1;
            font-size: 25px;
        }

        footer .logo .bi-tiktok {
            color: #f1f1f1;
            font-size: 25px;
        }

        footer .logo p {
            width: 225px;
        }

        footer .hr {
            padding-top: 120px;
            width: 450%;
        }
    </style>
    @include('navbar')
    <div class="judul">
        <h1>Informasi</h1>
        <h3>Tentang Kami</h3>
        <h2>Keuntungan yang didapatkan</h2>
    </div>

    <div class="isi">
        <div class="container1">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/panic.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5>Button Panic</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container2">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/hukum.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5>Bantuan Hukum</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container3">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/halal.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5>Spesifikasi Halal</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container4">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/suplier.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5>Suplier</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container5">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/design.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5>Design Interior</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container6">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/truk.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5>Diskon Pengiriman</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container7">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/ide.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5>Bantuan Kelistrikan</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container8">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/perbankan.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5>Konsultan Perbankan</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container9">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/oss.png') }}" alt="" height="60%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5>Bantuan Perizinan OSS</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
    </div>
    <h3 class="daftar">Daftarkan Penawaran</h3>
    <div class="box1">
        <img src="{{ asset('assets/img/informasi/meet.png') }}" alt="">
        <div class="box">
            <form action="">
                @csrf
                <div class="input-group">
                    <label for="nama_lengkap">Nama Lengkap <span style="margin-left: 1px;color: red">*</span></label>
                    <input type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap" />
                </div>
                <div class="input-group">
                    <label for="username">Username <span style="margin-left: 1px;color: red">*</span></label>
                    <input type="text" name="username" id="username" placeholder="Username" />
                </div>
                <div class="input-group">
                    <label for="tanggal_lahir">Tanggal Lahir <span style="margin-left: 1px;color: red">*</span></label>
                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" />
                </div>
                <div class="input-group">
                    <label for="nama">Foto KTP dan Muka <span style="margin-left: 1px;color: red">*</span></label>
                    <input type="file" name="ktp" id="ktp" />
                </div>
                <div class="input-group">
                    <label for="nomor-handphone">Nomor Handphone <span style="margin-left: 1px;color: red">*</span></label>
                    <div class="input-handphone">
                        <input type="number" placeholder="823234567241" id="nomor-handphone" name="no_hp" />
                        <span class="region-number">+62</span>
                    </div>
                </div>
                <div class="input-group">
                    <label for="email">Email <span style="margin-left: 1px;color: red">*</span></label>
                    <input type="email" id="email" name="email" placeholder="Example@gmail.com" />
                </div>
                <div class="input-group">
                    <label for="tempat_tinggal">Tempat Tinggal <span style="margin-left: 1px;color: red">*</span></label>
                    <input name="tempat_tinggal" id="tempat_tinggal" placeholder="Alamat">
                </div>
                <div class="input-group">
                    <label for="tawaran" style="margin-top: -12px;">Tawaran <span style="margin-left: 1px;color: red">*</span></label>
                    <textarea type="text" id="tawaran" name="tawaran" placeholder="Tawaran"
                        style="margin-top: -12px; border-radius: 5px;"></textarea>
                </div>
                <div class="button">
                    <button type="button" class="refresh"><i
                            class="fa-solid fa-arrows-rotate refresh-btn"></i>Reset</button>
                    <button type="submit" class="kirim">Kirim</button>
                </div>
            </form>
        </div>
    </div>
    @include('footer')
@endsection
@section('script')
    <script>
        function resetForm() {
            swal.fire({
                title: 'Kamu Yakin?',
                text: 'Aksi ini akan menghilangkan semua yang telah anda input',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Iya, Reset',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Get all input elements in the form
                    const inputs = document.querySelectorAll('form input');
                    const textarea = document.querySelector('form textarea');

                    // Iterate over each input element and reset its value
                    inputs.forEach(input => {
                        input.value = '';
                    });

                    // Reset the value of the textarea
                    textarea.value = '';
                }
            });
        }

        // Call the function when the "Kosongkan" button is clicked
        document.querySelector('button.refresh').addEventListener('click', () => {
            resetForm();
        });
    </script>
@endsection
