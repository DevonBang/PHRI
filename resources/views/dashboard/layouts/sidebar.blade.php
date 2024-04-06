<div class="sidebar border border-right col-md-3 col-lg-2 d-md-block bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel"> Niccc Blogs</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
            <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link  {{ Request:: is('/dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard.index') }}">
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard.berita') }}">
                            All Berita
                        </a>
                    </li>
                </ul>
                
                @can('admin')
                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Administrator</span>
                </h6>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link {{ Request:: is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
                            Categories
                        </a>
                    </li>
                </ul>
                @endcan
            </div>
        </div>
    </div>