<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="light">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/">Dashboard</a>

        {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <form action="{{ route('logout') }}" method="post">
                @csrf
                    <button type="submit" class="btn btn-warning"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
            </li>
        </ul>

    <ul class="navbar-nav flex-row d-md-none">
        <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="bi"><use xlink:href="#list"/></svg>
        </button>
        </li>
    </ul>
</header>