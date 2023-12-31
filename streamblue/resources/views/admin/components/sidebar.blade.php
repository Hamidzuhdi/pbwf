<aside
    class="sidebar navbar navbar-expand-lg bg-dark d-flex flex-column gap-4 align-content-lg-center mx-2 my-2 rounded">
    <a href="/">
        <h5 class="navbar-brand">Stream Blue Admin</h5>
    </a>
    {{-- <hr class="" style="color: white;font-weight:800"> --}}
    <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
        <ul class="navbar-nav flex-column gap-3 px-2">
            <li class="navbar-item rounded {{Request::path() === 'admin/dashboard' ? "bg-info" : ""}} ">
                <a href="/apertandingan" class="text-white">
                    <div class="d-flex gap-3">
                        <span class="material-icons">dashboard</span>
                        <p class="m-0 p-0">Pertandingan</p>
                    </div>
                </a>
            </li>
            <li class="navbar-item rounded {{Request::path() === 'admin/alangganan' ? "bg-info" : ""}} ">
                <a href="/alangganan" class="">
                    <div class="d-flex gap-3">
                        <span class="material-icons">inventory</span>
                        <p class="m-0 p-0">Langganan</p>
                    </div>
                </a>
            </li>
            @if (auth()->user()->role=='superadmin')
                <li class="navbar-item rounded {{Request::path() === 'admin/page/auser' ? "bg-info" : ""}} ">
                    <a href="/auser" class="">
                        <div class="d-flex gap-3">
                            <span class="material-icons">people_alt</span>
                            <p class="m-0 p-0">User Management</p>
                        </div>
                    </a>
                </li>
            @endif
            <li class="navbar-item rounded {{Request::path() === 'admin/report' ? "bg-info" : ""}} ">
                <a href="/apemesanan" class="">
                    <div class="d-flex gap-3">
                        <span class="material-icons">analytics</span>
                        <p class="m-0 p-0">Pemesanan</p>
                    </div>
                </a>
            </li>
            <li class="navbar-item">
                <a href="/apembayaran" class="">
                    <div class="d-flex gap-3">
                        <span class="material-icons">logout</span>
                        <p class="m-0 p-0">Pembayaran</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</aside>
