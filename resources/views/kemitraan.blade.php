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
            box-shadow: 10px 10px 10px rgba(0, 0, 0, .1);
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
            /* box-shadow: 0 2px 1px 0 rgba(0,0,0,.1); */
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

        nav .kemitraan {
            color: #F9B045;
        }

        nav .animation {
            position: absolute;
            height: 5px;
            bottom: 0;
            z-index: 0;
            background: #F9B045;
            width: 1px;
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

        nav .start-home,
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

        .dropdown-content button:hover {
            background-color: #cac9c9;
            border-radius: 3px;
            width: 100%;
        }
        .dropdown-content a:hover {
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

        .login {
            color: white;
            font-weight: bold;
            font-size: 16px;
        }

        .midlle .judul {
            font-family: serif;
            display: flex;
            justify-content: center;
            margin-top: 60px;
            color: #4F426F;
        }

        .midlle .judulkecil {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            margin-bottom: 50px;
        }


        .card {
            display: grid;
            grid-template-columns: auto auto auto;
            justify-content: center;
            position: relative;
        }

        .card .card1 {
            margin: 0px 80px 80px 80px;
            border-radius: 8px;
            height: 200px;
            width: 250px;
            background: #7B6CA0;
        }

        .card .card1 h4 {
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-weight: bold;
            margin-top: 12px;
            font-size: 20px;
        }

        .card .card1 .card2 {
            margin: 0px;
            background: #432D77;
            height: 70%;
            border-radius: 8px;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            width: 1300px;
            height: 600px;
            margin: 0px 70px 70px 70px;
            background: #432D77;
            border-radius: 8px;
            border: 2px solid #7e7e7e;
        }

        .container img {
            position: absolute;
            left: 46.2%;
        }

        .container1 {
            position: absolute;
            width: 50%;
            height: 600px;
            background: #ffffff;
            border-radius: 8px;
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
            margin-bottom: 100px;
            margin-top: 100px;
        }

        .box {
            width: 780px;
            background-color: white;
            height: fit-content;
            padding: 15px 25px;
            border-radius: 10px 8px 8px 10px;
            position: relative;
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
            margin-left: 165px;
            margin-top: 150px;
            margin-bottom: 20px;
        }

        .box1 img {
            position: absolute;
            width: 625px;
            height: 633px;
            transform: translate(-50%, );
            left: 47.8%;
            top: 0%;
            z-index: -1;
            border-radius: 8px;
        }

        .box1 h3 {
            position: absolute;
            font-size: 32px;
            top: -10%;
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

        .card {
            border: none;
        }
    </style>
    @include('navbar')
    <div class="midlle">
        <div class="judul">
            <h1 style="font-size: 60px;text-shadow: 3px 5px 5px rgb(116, 116, 116);">Kemitraan</h1>
        </div>
        <div class="judulkecil">
            <h1 style="font-size: 36px;">Penawaran yang dapat kami berikan</h1>
        </div>
    </div>
    <div class="card">
        <div class="card1">
            <div class="card2">
                <div class="gambar">
                    <img src="{{ asset('assets/img/kemitraan/supply.png') }}" alt="">
                </div>
            </div>
            <h4>Supply bahan makanan</h4>
        </div>
        <div class="card1">
            <div class="card2">
                <div class="gambar">
                    <img src="{{ asset('assets/img/kemitraan/listrik.png') }}" alt="">
                </div>
            </div>
            <h4>Service Listrik</h4>
        </div>
        <div class="card1">
            <div class="card2">
                <div class="gambar">
                    <img src="{{ asset('assets/img/kemitraan/cleaning.png') }}" alt="">
                </div>
            </div>
            <h4>leaning Service</h4>
        </div>
        <div class="card1">
            <div class="card2">
                <div class="gambar">
                    <img src="{{ asset('assets/img/kemitraan/dapur.png') }}" alt="">
                </div>
            </div>
            <h4>Bagian Dapur</h4>
        </div>
        <div class="card1">
            <div class="card2">
                <div class="gambar">
                    <img src="{{ asset('assets/img/kemitraan/finance.png') }}" alt="">
                </div>
            </div>
            <h4>Finance</h4>
        </div>
        <div class="card1">
            <div class="card2">
                <div class="gambar">
                    <img src="{{ asset('assets/img/kemitraan/security.png') }}" alt="">
                </div>
            </div>
            <h4>Security</h4>
        </div>
    </div>
    </div>
    </div>

    <div class="box1">
        <h3>Penawaran Kerjasama</h3>
        <div class="box">
            <form id="form_store" method="POST">
                @csrf
                <div class="input-group">
                    <label for="nama">Nama Penanggung Jawab <span style="margin-left: 1px;color: red">*</span></label>
                    <input type="text" name="nama_penanggung" id="nama" placeholder="Nama" />
                </div>
                <div class="input-group">
                    <label for="nama">Jenis Usaha <span style="margin-left: 1px;color: red">*</span></label>
                    <select name="jenis_usaha_id" style="border-radius: 5px;">
                        <option selected @readonly(true)>silahkan pilih</option>
                        @foreach ($jenis_usaha as $jenis)
                            <option value="{{ $jenis->id }}">{{ $jenis->name }}</option>
                        @endforeach
                    </select>
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
                    <input type="email" id="email" name="email" placeholder="example@gmail.com" />
                </div>
                <div class="input-group">
                    <label for="nama_perusahaan">Nama Perusahaan <span style="margin-left: 1px;color: red">*</span></label>
                    <input type="text" id="nama_perusahaan" name="nama_perusahaan" placeholder="Perusahaan" />
                </div>
                <div class="input-group">
                    <label for="jenis_kerjasama" style="margin-top:-12px;">Jenis Kerjasama <span
                            style="margin-left: 1px;color: red">*</span></label>
                    <textarea type="text" id="jenis_kerjasama" name="jenis_kerjasama" placeholder="Kerjasama"
                        style="margin-top:-12px; border-radius: 5px;"></textarea>
                </div>
                <div class="button">
                    <button type="button" class="refresh"><i
                            class="fa-solid fa-arrows-rotate refresh-btn"></i>Reset</button>
                    <button type="submit" class="kirim">Kirim</button>
                </div>
            </form>
        </div>
        <img src="{{ asset('assets/img/kemitraan/tangan.png') }}" alt="">
    </div>
    @include('footer')
@endsection
@section('script')
    <script>
        $(function() {
            $(document).on('submit', '#form_store', function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "/kemitraan-store",
                    data: new FormData(this),
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == true) {
                            Swal.fire({
                                title: "Berhasil!",
                                text: response.pesan,
                                icon: "success"
                            }).then(() => {
                                window.location.reload();
                            }, 1000);
                        } else {
                            Swal.fire({
                                title: "Error!",
                                text: response.error,
                                icon: "error"
                            });
                        }
                    }
                });
            });
        })

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
                    const select = document.querySelector('form select');

                    // Iterate over each input element and reset its value
                    inputs.forEach(input => {
                        input.value = '';
                    });

                    // Reset the value of the textarea
                    textarea.value = '';

                    // Reset the selected option of the select element
                    select.selectedIndex = 0;
                }
            });
        }

        // Call the function when the "Kosongkan" button is clicked
        document.querySelector('button.refresh').addEventListener('click', () => {
            resetForm();
        });
    </script>
@endsection
