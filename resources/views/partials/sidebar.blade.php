<nav id="sidebar" style="min-height: 100vh; box-shadow: 2px 0px 10px rgba(116, 116, 116, 0.592);">
    <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
        </button>
    </div>
    <div class="p-4">
        <div class="text-center">
            <img src="{{asset('assets/brand/umroh-logo.png')}}" class="p-0" style="" width="90" alt="">
            <h1 class="mb-0 mt-2"><a href="index.html" class="logo text-decoration-none">Hana Safar</a></h1>
            <div class="mt-0" style="color: #e8e7e7;">Selalu membantu perjalanan Anda</div>
        </div>
        <ul class="list-unstyled components mb-5 mt-5">
            <li class="{{ $title == "Dashboard" ? "active fw-semibold" : "" }}">
                <a href="/dashboard"><span class="fa fa-home mr-3 me-3"></span> Dashboard</a>
            </li>
            <li class="{{ $title == "Members" ? "active fw-semibold" : "" }}">
                <a href="/dashboard/member"><span class="fa fa-users mr-3 me-3"></span> Members</a>
            </li>
            <li class="{{ $title == "Paket" ? "active fw-semibold" : "" }}">
                <a href="/dashboard/paket"><span class="fa-solid fa-right-from-bracket mr-3 me-3"></span> Paket</a>
            </li>
            {{-- <li class="{{ $title == "Dashboard" ? "active fw-semibold" : "" }}">
                <a href="#"><span class="fa fa-id-card mr-3 me-3"></span> Profile</a>
            </li> --}}
            {{-- <li class="{{ $title == "Dashboard" ? "active fw-semibold" : "" }}">
                <a href="#"><span class="fa fa-clock mr-3 me-3"></span> Coming Soon</a>
            </li> --}}
            <li class="">
                <a href="/logout"><span class="fa fa-users mr-3 me-3"></span> Logout <i class="fa-solid fa-right-from-bracket ms-2"></i></a>
            </li>
        </ul>
    </div>
</nav>
