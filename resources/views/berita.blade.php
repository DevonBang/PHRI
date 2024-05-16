@extends('template.main')
@section('content')
    @push('style')
        <link rel="stylesheet" href="{{ asset('assets/css/nav-berita.css') }}">
    @endpush
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
    </div>
    <h1 class="berita-teratas">Berita teratas</h1>
    <div class="isi1">
            <div class="content1" style="background-image: url(assets/img/botak.png); ">
                <h1>Sektor Perhotelan di Kalbar Terus Membaik pada 2023, Kata Ketua PHRI</h1>
                <h3>Sekotor perhotelan di kalbar kini sedang naik karena banyak wisatawan asing yang berkunjung ke kalbar</h3>
                <div class="information">
                    <div class="info-action">
                        <a href="#" style="color: white;" ><l class="bi bi-eye" style="color: white;" ></l><span>502</span></a>
                        <a href="#" style="color: white;" ><l class="bi bi-heart-fill" style="color: #e11d48;"></l><span>502</span></a>
                    </div>
                    <p style="color: white;" >3 hari lalu</p>
                </div>
            </div>
            <div class="content2" >
                <h1>Crypto kian menjadi ladang tajir untuk usia muda</h1>
                <div class="content2-content" style="background-image: url(assets/img/bambu.png);">
                    <h5>Cripto adalah salah satu digital money yang tidak menggunakan perantara pihak ketiga, Crypto semakin melunjak karena ia bisa di investasikan dalam jangka waktu panjang,salah satu koin kripto saja sudah menyentuh harga 1miliar perkoin dalam waktu 3 tahun. dan juga kini kripto jg semakin meraaja lelapada industri besar.</h5>
                    <div class="information">
                        <div class="info-action">
                            <a href="#" style="color: white;" ><l class="bi bi-eye" style="color: white;" ></l><span>502</span></a>
                            <a href="#" style="color: white;" ><l class="bi bi-heart-fill" style="color: #e11d48;"></l><span>502</span></a>
                        </div>
                        <p style="color: white;" >3 hari lalu</p>
                    </div>

                </div>
            </div>
    </div>
    <div class="container10">
        <div class="container1">
            <img src="{{asset('assets/img/botak.png')}}" alt="" width="30%" style="object-fit: cover;">
            <div class="content">
                <a href="#" class="content-title">Thanos menjabat sebagai presiden pada era 2024-kiamat</a>
                <a href="#" class="content-description">Thanos adalah seorang abang abang bakso yang bercita cita untuk memusnakan setengah populasi dari alam semesta, apakah ia akan berhasil?</a>
                <div class="information">
                    <div class="info-action">
                        <a href="#" style="color: black;" ><l class="bi bi-eye" style="color: black;" ></l><span>502</span></a>
                        <a href="#" style="color: black;" ><l class="bi bi-heart-fill" style="color: #e11d48;"></l><span>502</span></a>
                    </div>
                    <p style="color: black;" >3 hari lalu</p>
                </div>
            </div>
        </div>
        <div class="container1">
            <img src="{{asset('assets/img/botak.png')}}" alt="" width="30%" style="object-fit: cover;">
            <div class="content">
                <a href="#" class="content-title">Thanos menjabat sebagai presiden pada era 2024-kiamat</a>
                <a href="#" class="content-description">Thanos adalah seorang abang abang bakso yang bercita cita untuk memusnakan setengah populasi dari alam semesta, apakah ia akan berhasil?</a>
                <div class="information">
                    <div class="info-action">
                        <a href="#" style="color: black;" ><l class="bi bi-eye" style="color: black;" ></l><span>502</span></a>
                        <a href="#" style="color: black;" ><l class="bi bi-heart-fill" style="color: #e11d48;"></l><span>502</span></a>
                    </div>
                    <p style="color: black;" >3 hari lalu</p>
                </div>
            </div>
        </div>
        <div class="container1">
            <img src="{{asset('assets/img/botak.png')}}" alt="" width="30%" style="object-fit: cover;">
            <div class="content">
                <a href="#" class="content-title">Thanos menjabat sebagai presiden pada era 2024-kiamat</a>
                <a href="#" class="content-description">Thanos adalah seorang abang abang bakso yang bercita cita untuk memusnakan setengah populasi dari alam semesta, apakah ia akan berhasil?</a>
                <div class="information">
                    <div class="info-action">
                        <a href="#" style="color: black;" ><l class="bi bi-eye" style="color: black;" ></l><span>502</span></a>
                        <a href="#" style="color: black;" ><l class="bi bi-heart-fill" style="color: #e11d48;"></l><span>502</span></a>
                    </div>
                    <p style="color: black;" >3 hari lalu</p>
                </div>
            </div>
        </div>
        <div class="container1">
            <img src="{{asset('assets/img/botak.png')}}" alt="" width="30%" style="object-fit: cover;">
            <div class="content">
                <a href="#" class="content-title">Thanos menjabat sebagai presiden pada era 2024-kiamat</a>
                <a href="#" class="content-description">Thanos adalah seorang abang abang bakso yang bercita cita untuk memusnakan setengah populasi dari alam semesta, apakah ia akan berhasil?</a>
                <div class="information">
                    <div class="info-action">
                        <a href="#" style="color: black;" ><l class="bi bi-eye" style="color: black;" ></l><span>502</span></a>
                        <a href="#" style="color: black;" ><l class="bi bi-heart-fill" style="color: #e11d48;"></l><span>502</span></a>
                    </div>
                    <p style="color: black;" >3 hari lalu</p>
                </div>
            </div>
        </div>
    </div>
    <div class="berita-terbaru">
        <h1>Berita Terbaru</h1>
        <a href="">Selengkapnya..</a>
    </div>

    <div class="container11">
        <div class="container5">
            <img src="{{asset('assets/img/ceramah.png')}}" alt="" height="60%" width="100%" style="border-radius: 8px;">
            <a href=""><h1>Sektor Perhotelan di Kalbar Terus Membaik pada 2023, Kata Ketua PHRI</h1></a>
        </div>
        <div class="container6">
            <img src="{{asset('assets/img/ceramah.png')}}" alt="" height="60%" width="100%" style="border-radius: 8px;">
            <a href=""><h1>Sektor Perhotelan di Kalbar Terus Membaik pada 2023, Kata Ketua PHRI</h1></a>
        </div>
        <div class="container7">
            <img src="{{asset('assets/img/ceramah.png')}}" alt="" height="60%" width="100%" style="border-radius: 8px;">
            <a href=""><h1>Sektor Perhotelan di Kalbar Terus Membaik pada 2023, Kata Ketua PHRI</h1></a>
        </div>
    </div>


    <div class="berita-populer">
        <h1>Berita Populer</h1>
    </div>
    <div class="container12">
        <div class="tag">
            <p style="font-weight: bolder; font-size: 30px; margin-bottom: 20px; ">Tag Terpopuler</p>
            <div class="tags">
                <p># Kojuliusnaikgaji</p>   
                <h5>200m Berita</h5>
            </div>
            <hr>
            <div class="tags">
                <p># Kojuliusnaikgaji</p>   
                <h5>200m Berita</h5>
            </div>
            <hr>
            <div class="tags">
                <p># Kojuliusnaikgaji</p>   
                <h5>200m Berita</h5>
            </div>
            <hr>
            <div class="tags">
                <p># Kojuliusnaikgaji</p>   
                <h5>200m Berita</h5>
            </div>
            <hr>
            <div class="tags">
                <p># Kojuliusnaikgaji</p>   
                <h5>200m Berita</h5>
            </div>
            <hr>
            <div class="tags">
                <p># Kojuliusnaikgaji</p>   
                <h5>200m Berita</h5>
            </div>
            <hr>
        </div>
        <div class="content">
            <div class="container20">
                <img src="{{ asset('assets/img/ceramah.png') }}" alt="" width="40%" style="border-radius: 8px; border: 2px solid black;">
                <div class="container20-content">
                    <a href="" class="content-title">Kenaikan Pajak Hiburan Batal, Ketua PHRI Kalbar: Sangat Senang...</a>
                    <h3 class="content-time">45 menit yang lalu</h3>
                    <div class="information">
                        <div class="info-action">
                            <a href="#" style="color: black;" ><l class="bi bi-eye" style="color: black;" ></l><span>502</span></a>
                            <a href="#" style="color: black;" ><l class="bi bi-heart-fill" style="color: #e11d48;"></l><span>502</span></a>
                        </div>
                        <p style="color: black;" >3 hari lalu</p>
                    </div>
                </div>
            </div>
            <div class="container20">
                <img src="{{ asset('assets/img/ceramah.png') }}" alt="" width="40%" style="border-radius: 8px; border: 2px solid black;">
                <div class="container20-content">
                    <a href="" class="content-title">Kenaikan Pajak Hiburan Batal, Ketua PHRI Kalbar: Sangat Senang...</a>
                    <h3 class="content-time">45 menit yang lalu</h3>
                    <div class="information">
                        <div class="info-action">
                            <a href="#" style="color: black;" ><l class="bi bi-eye" style="color: black;" ></l><span>502</span></a>
                            <a href="#" style="color: black;" ><l class="bi bi-heart-fill" style="color: #e11d48;"></l><span>502</span></a>
                        </div>
                        <p style="color: black;" >3 hari lalu</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    @push('style')
        <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}">
    @endpush
    @include('footer')
@endsection
