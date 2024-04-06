@extends('template.main')
@section('content')
    {{-- <h1>register member</h1>
    <form action="{{ route('register.member.proses') }}" method="POST">
        @csrf
        <label for="username">username</label>
        <input type="text" name="username">
        <label for="no_hp">no hp</label>
        <input type="number" name="no_hp">
        <label for="email">email</label>
        <input type="email" name="email">
        <label for="password">password</label>
        <input type="password" name="password">
        <label for="confirm-password">confirm password</label>
        <input type="password" name="password_confirmation">
        <label for="jenis_usaha">jenis usaha</label>
        <select name="jenis_usaha_id">
            <option selected @readonly(true)>silahkan pilih</option>
            @foreach ($jenis_usaha as $jenis )    
            <option value="{{ $jenis->id }}">{{ $jenis->name }}</option>
            @endforeach
        </select>
        <label for="klasifikasi_usaha">klasifikasi usaha</label>
        <select name="klasifikasi_usaha_id">
            <option selected @readonly(true)>silahkan pilih</option>
            @foreach ($klasifikasi_usaha as $klasifikasi )    
                <option value="{{ $klasifikasi->id }}">{{ $klasifikasi->name }}</option>
            @endforeach
        </select>
        <label for="nama_usaha">nama usaha</label>
        <input type="text" name="nama_usaha">
        <label for="alamat">alamat usaha</label>
        <textarea name="alamat" id="alamat"> </textarea>
        <button type="submit">Register Now!</button>
    </form> --}}
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
            }

            .Logo{
            position: absolute;
            top: 105%;
            color: #fff;
            padding-left: 30px; 
            }

            .Copyright{
            position: absolute;
            top: 110%;  left: 80%;
            color: #fff;


            }

            #phri-logo {
            width: 200px;
            height: auto;
            position: absolute;
            top: 10px;
            left: 40px;
            }
            /* .mega-container{
            width: 1280px;
            margin: auto;
            } */

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
            .container h1{
            font-size: 74px;
            margin-bottom: 20px;
            }

            .input-handphone{
            position: relative;
            }

            #nomor-handphone{
            width: 100%;
            padding-left: 40px;
            }
            .region-number{
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
            .input-radio{
            text-align: left;
            display: flex;
            flex-direction: row;
            column-gap: 15px;
            }
            .box form .input-group .input-radio label{
            font-size: 12px;
            }
            .disable{
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



            @media (min-width: 540px){
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
            .box form .input-group .input-radio label{
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
            body .container .box{
                width: 470px;
            }
            }

            @media (min-width: 768px) {
            body .container .box {
                width: 750px;
            }
            
            }

            @media (min-width: 992px){
            body .container .box {
                width: 900px;
            }
            }

    </style>
    <div class="mega-container">
        <img id="kuning" src="{{ asset('assets/img/kuning.png') }}" alt="" />
        <img id="ungu" src="{{ asset('assets/img/ungu.png') }}" alt="" />
        <img id="phri-logo" src="{{ asset('assets/img/Logo.png') }}" alt="" />
        <div class="container">
          <h1>Pendaftran</h1>
          <div class="box">
            <form action="{{ route('register.member.proses') }}" method="POST">
            @csrf
              <div class="input-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" />
              </div>
              <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" />
              </div>
              <div class="input-group">
                <label for="no_hp">Nomor Handphone</label>
                <div class="input-handphone">
                  <input
                    type="number"
                    placeholder="823234567241"
                    id="nomor-handphone"
                    name="no_hp"
                  />
                  <span class="region-number">+62</span>
                </div>
              </div>
              <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" />
              </div>
              <div class="input-group">
                <label for="">Confirm Password</label>
                <input type="password" name="password_confirmation" />
              </div>
              <div class="input-group">
                <label for="jenis-usaha">Jenis Usaha</label> 
                <select name="jenis_usaha_id">
                    <option selected @readonly(true)>silahkan pilih</option>
                    @foreach ($jenis_usaha as $jenis )    
                    <option value="{{ $jenis->id }}">{{ $jenis->name }}</option>
                    @endforeach
                </select>
              </div>
              <div class="input-group">
                <label for="nama-usaha">Nama Usaha</label>
                <input type="text" id="nama_usaha" name="nama_usaha" />
              </div>
              <div class="input-group">
                <label>Klasifikasi Usaha</label>
                <div class="input-radio">
                    @foreach ($klasifikasi_usaha as $klasifikasi )
                    <div class="">
                        <input
                        type="checkbox"
                        id="usaha-hotel"
                        name="klasifikasi_usaha_id"
                        value="{{ $klasifikasi->id }}"
                        />
                        <label for="usaha-hotel">{{ $klasifikasi->name }}</label>
                    </div>
                    @endforeach
                </div>
              </div>
              <div class="input-group" id="hotel">
                <label for="hotel-bintang">Hotel</label>
              </div>
              <div class="input-group" id="restoran">
                <label for="">Restoran</label>
              </div>
              <div class="input-group">
                <label for="Alamat">Alamat</label>
                <textarea name="alamat" id="alamat" cols="20" rows="10"></textarea>
              </div>
              <button type="submit">Register Now!</button>
            </form>
          </div>
        </div>
      </div>
      <script>
        const usahaHotel = document.querySelector("#usaha-hotel");
        const usahaRestoran = document.querySelector("#usaha-restoran");
        const hotelInput = document.querySelector("#hotel");
        const restoranInput = document.querySelector("#restoran");
  
        const handleInputHotel = () => {
          if (usahaHotel.checked === true) {
            const klasifikasi = 
            `<div class="input-radio" id="hotel-radio">
                <div class="">
                    <input type="radio" id="rating" name="rating" value="1">
                    <label for="rating">1</label>
                </div>
                <div class="">
                    <input type="radio" id="rating" name="rating" value="2">
                    <label for="rating">2</label>
                </div>
                <div class="">
                    <input type="radio" id="rating" name="rating" value="2">
                    <label for="rating">3</label>
                </div>
                <div class="">
                    <input type="radio" id="rating" name="rating" value="2">
                    <label for="rating">4</label>
                </div>
                <div class="">
                    <input type="radio" id="rating" name="rating" value="2">
                    <label for="rating">5</label>
                </div>
            </div>`;
            hotelInput.innerHTML += klasifikasi;
          } else if(usahaHotel.checked === false){
            const hotelRadio = document.querySelector("#hotel-radio");
            hotelRadio.remove();
          }
        }
        const handleInputRestoran = () => {
          if (usahaRestoran.checked === true) {
            const klasifikasi = 
            ` <div class="input-radio" id="restoran-radio">
                  <div class="">
                    <input
                      type="radio"
                      id="kalangan"
                      name="kalangan"
                      value="rendah"
                    />
                    <label for="kalangan">Rendah</label>
                  </div>
                  <div class="">
                    <input
                      type="radio"
                      id="kalangan"
                      name="kalangan"
                      value="menengah-rendah"
                    />
                    <label for="kalangan">Menengah Rendah</label>
                  </div>
                  <div class="">
                    <input
                      type="radio"
                      id="kalangan"
                      name="kalangan"
                      value="menengah-tinggi"
                    />
                    <label for="kalangan">Mengengah Tinggi</label>
                  </div>
                  <div class="">
                    <input
                      type="radio"
                      id="kalangan"
                      name="kalangan"
                      value="tinggi"
                    />
                    <label for="kalangan">Tinggi</label>
                  </div>
                </div>`;
            restoranInput.innerHTML += klasifikasi;
          } else if(usahaRestoran.checked === false){
            const restoranRadio = document.querySelector("#restoran-radio");
            restoranRadio.remove();
          }
        }
  
        usahaHotel.addEventListener("change", handleInputHotel);
        usahaRestoran.addEventListener("change", handleInputRestoran);
      </script>
      
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
  <h5>Copyright. PT. Kita Serba Digital - 2024</h5>
  </div>  
@endsection