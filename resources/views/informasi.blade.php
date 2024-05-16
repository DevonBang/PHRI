@extends('template.main')
@section('content')
    @push('style')
        <link rel="stylesheet" href="{{ asset('assets/css/informasi.css') }}">
    @endpush
    @include('navbar')
    <div class="judul">
        <h1 style="color: #432D77; ">Informasi</h1>
        <h3>Tentang Kami</h3>
        <h2 style="font-weight:bold;">Keuntungan yang didapatkan</h2>
    </div>

    <div class="isi">
        <div class="container1">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/panic.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5 style="color: #432D77; font-weight:900; font-size: 18px;">Button Panic</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container2">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/hukum.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5 style="color: #432D77; font-weight:900; font-size: 18px;">Bantuan Hukum</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container3">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/halal.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5 style="color: #432D77; font-weight:900; font-size: 18px;">Spesifikasi Halal</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container4">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/suplier.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5 style="color: #432D77; font-weight:900; font-size: 18px;">Suplier</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container5">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/design.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5 style="color: #432D77; font-weight:900; font-size: 18px;">Design Interior</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container6">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/truk.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5 style="color: #432D77; font-weight:900; font-size: 18px;">Diskon Pengiriman</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container7">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/ide.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5 style="color: #432D77; font-weight:900; font-size: 18px;">Bantuan Kelistrikan</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container8">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/perbankan.png') }}" alt="" height="80%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5 style="color: #432D77; font-weight:900; font-size: 18px;">Konsultan Perbankan</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
        <div class="container9">
            <div class="img">
                <img src="{{ asset('assets/img/informasi/oss.png') }}" alt="" height="60%" width="40%"
                    style="margin-left: 10px;">
            </div>
            <div class="text">
                <h5 style="color: #432D77; font-weight:900; font-size: 18px;">Bantuan Perizinan OSS</h5>
                <p>berguna sebagai button untuk memanggil bantuan jika dibutuhkan</p>
            </div>
        </div>
    </div>
    <h3 class="daftar">Daftarkan Penawaran</h3>
    <div class="box1">
        <img src="{{ asset('assets/img/informasi/meet.png') }}" alt="">
        <div class="box">
            <form id="form_store" method="POST">
                @csrf
                <div class="bagi">
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
                        <label for="nama">Foto KTP <span style="margin-left: 1px;color: red">*</span></label>
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
                </div>
                    <div class="input-group">
                        <label for="tempat_tinggal" style="margin-top: -12px;">Tempat Tinggal <span style="margin-left: 1px;color: red">*</span></label>
                        <textarea name="tempat_tinggal" id="tempat_tinggal" placeholder="Alamat" style="margin-top: -10px; border-radius: 5px;"></textarea>
                    </div>
                    <div class="input-group">
                        <label for="tawaran" style="margin-top: -12px;">Tawaran <span style="margin-left: 1px;color: red">*</span></label>
                        <textarea type="text" id="tawaran" name="tawaran" placeholder="Tawaran"
                        style="margin-top: -12px; border-radius: 5px;"></textarea>
                    </div>
                <div class="button">
                    <button type="button" class="refresh"><i
                            class="fa-solid fa-arrows-rotate refresh-btn"></i>Reset</button>
                    <button type="submit" class="kirim"><i class="fa fa-paper-plane" aria-hidden="true"></i> Kirim</button>
                </div>
            </form>
        </div>
    </div>
    @push('style')
        <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    @endpush
    @include('footer')
@endsection
@section('script')
    <script>
        $(function() {
            $(document).on('submit', '#form_store', function(e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "/penawaran-store",
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
