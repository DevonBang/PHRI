<div class="header">
    <div class="logo">
        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo2.png') }}" height="50px" width="50px"
                alt=""></a>
    </div>
    <div class="pemisah">
        <nav>
            <a href="{{ route('home') }}" class="home">Home</a>
            <a href="{{ route('berita') }}" class="berita">Berita</a>
            <a href="{{ route('informasi') }}" class="informasi">Informasi</a>
            <a href="{{ route('kemitraan') }}" class="kemitraan">Kemitraan</a>
            <div class="animation start-home"></div>
        </nav>
        @auth('admin')
            <div class="dropdown">
                <button class="dropbtn">
                    @if(auth('admin')->user())
                    <img src="{{ asset('storage/img-admin/' . $profile->image) }}" alt="" height="40px"
                        width="40px" style=" border-radius: 50%; background: #f1f1f1; margin-right: 10px;">
                    {{ auth('admin')->user()->name }} &nbsp;&nbsp;
                    @endif
                    <i class="fa-solid fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    @if(auth('admin')->user())
                        <a href="{{ route('dashboard.index') }}">Dashboard</a>
                    @endif
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        @else
            <a href="{{ route('login') }}" class="login"><i class="fa-solid fa-arrow-right-to-bracket"></i>&nbsp;Login</a>
        @endauth
    </div>
</div>
