@extends('template.main')
@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            overflow-x: hidden;
        }
        
        body {
            font-family: sans-serif;
            width: 100%;
            min-height: 100vh;
            position: relative;
            overflow-y: hidden;
        }

        .Logo {
            position: absolute;
            top: 105%;
            color: #fff;
            padding-left: 30px;
        }

        .Copyright {
            position: absolute;
            top: 110%;
            left: 80%;
            color: #fff;
        }

        #phri-logo {
            width: 200px;
            height: auto;
            position: absolute;
            top: 10px;
            left: 40px;
        }

        .container {
            padding: 60px 0;
            width: 100%;
            min-height: 100vh;
            position: relative;
            z-index: 10;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container h1 {
            font-size: 74px;
            margin-bottom: 20px;
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

        .box {
            width: 290px;
            background-color: white;
            height: fit-content;
            padding: 15px 10px;
            border-radius: 7px;
            border: 1px solid #7e7e7e;
            box-shadow: 0px 4px 10px 0px rgba(0, 0, 0, 0.25);
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
            display: flex;
            position: relative;
            left: 73%;
        }

        .kosong {
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            height: 40px;
            width: 120px;
            color: #f4f4f4;
            font-weight: bold;
            cursor: pointer;
            border-radius: 8px;
            font-size: 15px;
            background: #F9B045;
        }

        .kosong i {
            margin-right: 3px;
        }

        .register {
            border: none;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 6px;
            height: 40px;
            width: 100px;
            color: #f4f4f4;
            font-weight: bold;
            cursor: pointer;
            border-radius: 8px;
            font-size: 15px;
            background: #F9B045;
        }

        @media (min-width: 540px) {
            .container .box form .input-group {
                display: grid;
                grid-template-columns: 1fr 4fr;
                grid-template-rows: 1fr;
                gap: 15px;
                align-items: center;
                margin-bottom: 10px;
                text-align: right;
            }

            .box form .input-group label {
                text-align: right;
                font-size: 16px;
                font-weight: 500;
            }

            .box form .input-group .input-radio label {
                font-size: 15px;
            }

            #kuning {
                width: 58%;
                height: 100%;
                position: fixed;
                display: block;
                right: 0;
                z-index: 0;
            }

            #ungu {
                width: 58%;
                height: 100%;
                display: block;
                left: 0;
                position: fixed;
                z-index: 0;
            }

            body .container .box {
                width: 470px;
            }
        }

        @media (min-width: 768px) {
            body .container .box {
                width: 750px;
            }

        }

        @media (min-width: 992px) {
            body .container .box {
                width: 900px;
            }
        }
    </style>
    <div class="mega-container">
        <img id="kuning" src="{{ asset('assets/img/kuning.png') }}" alt="" />
        <img id="ungu" src="{{ asset('assets/img/ungu.png') }}" alt="" />
        <img id="phri-logo" src="{{ asset('assets/img/Logo.png') }}" alt="PHRI Logo">
        <div class="container">
            <h1>Pendaftaran</h1>
            <div class="box">
                <form action="{{ route('register.member.proses') }}" method="POST">
                    @csrf
                    <div class="input-group">
                        <label for="username">Username<span style="color: red">*</span></label>
                        <input type="text" name="username" id="username" placeholder="masukkan username" />
                    </div>
                    <div class="input-group">
                        <label for="email">Email<span style="color: red">*</span></label>
                        <input type="email" id="email" name="email" placeholder="example@email.com" />
                    </div>
                    <div class="input-group">
                        <label for="no_hp">Nomor Handphone<span style="color: red">*</span></label>
                        <div class="input-handphone">
                            <input type="number" placeholder="823xxxxxx" id="nomor-handphone" name="no_hp" />
                            <span class="region-number">+62</span>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="password">Password<span style="color: red">*</span></label>
                        <input type="password" name="password" id="password" />
                    </div>
                    <div class="input-group">
                        <label for="">Confirm Password<span style="color: red">*</span></label>
                        <input type="password" name="password_confirmation" />
                    </div>
                    <div class="input-group">
                        <label for="jenis-usaha">Jenis Usaha<span style="color: red">*</span></label>
                        <select name="jenis_usaha_id">
                            <option selected @readonly(true)>silahkan pilih</option>
                            @foreach ($jenis_usaha as $jenis)
                                <option value="{{ $jenis->id }}">{{ $jenis->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group">
                        <label>Klasifikasi Usaha<span style="color: red">*</span></label>
                        <div class="input-radio">
                            @foreach ($klasifikasi_usaha as $klasifikasi)
                                <div class="">
                                    <input type="radio" id="usaha-hotel" name="klasifikasi_usaha_id"
                                        value="{{ $klasifikasi->id }}" />
                                    <label for="usaha-hotel">{{ $klasifikasi->name }}</label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="nama-usaha">Nama Usaha<span style="color: red">*</span></label>
                        <input type="text" id="nama_usaha" name="nama_usaha" placeholder="Hotel ... / Resto ...." />
                    </div>
                    <div class="input-group">
                        <label>Rating Usaha<span style="color: red">*</span></label>
                        <div class="input-radio">
                            <div class="">
                                <input type="radio" name="rating_usaha" value="0" class="form-radio" />
                                <label for="rating_usaha">-</label>
                            </div>
                            <div class="">
                                <input type="radio" name="rating_usaha" value="1" />
                                <label for="rating_usaha">1</label>
                            </div>
                            <div class="">
                                <input type="radio" name="rating_usaha" value="2" />
                                <label for="rating_usaha">2</label>
                            </div>
                            <div class="">
                                <input type="radio" name="rating_usaha" value="3" />
                                <label for="rating_usaha">3</label>
                            </div>
                            <div class="">
                                <input type="radio" name="rating_usaha" value="4" />
                                <label for="rating_usaha">4</label>
                            </div>
                            <div class="">
                                <input type="radio" name="rating_usaha" value="5" />
                                <label for="rating_usaha">5</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-group">
                        <label for="Alamat">Alamat<span style="color: red">*</span></label>
                        <textarea name="alamat" id="alamat" cols="20" rows="10"
                            placeholder="jl. ............,city, province, nation"></textarea>
                    </div>
                    <div class="button">
                        <button type="button" class="kosong"><i class="fa-solid fa-rotate-right"></i>Kosongkan</button>
                        <button type="submit" class="register"> Register </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="Logo">
        <h5>Sosial Media</h5>
        <a class="bi bi-instagram"></a>
        <a class="bi bi-facebook"></a>
        <a class="bi bi-twitter"></a>
        <a class="bi bi-youtube"></a>
        <a class="bi bi-tiktok"></a>
        <h4>@ PHRI Provinsi Kalimantan Barat</h4>
    </div>
    <div class="Copyright">
        <h5 style="font-size: 16px;">Copyright. PT. Kita Serba Digital - 2024</h5>
    </div>
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
                    const select = document.querySelector('form select');
                    const radios = document.querySelectorAll('form input[type="radio"]');

                    // Iterate over each input element and reset its value
                    inputs.forEach(input => {
                        input.value = '';
                    });

                    // Reset the value of the textarea
                    textarea.value = '';

                    // Reset the selected option of the select element
                    select.selectedIndex = 0;

                    // Check the first radio button in each group
                    radios.forEach(radio => {
                        if (!radio.checked) {
                            radio.checked = true;
                        }
                    });
                }
            });
        }

        // Call the function when the "Kosongkan" button is clicked
        document.querySelector('button.kosong').addEventListener('click', () => {
            resetForm();
        });
    </script>
@endsection
