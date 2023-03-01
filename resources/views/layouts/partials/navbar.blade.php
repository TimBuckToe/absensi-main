@include('layouts.partials.notification')
<div class="fixed-top">
  <nav class="navbar navbar-expand-lg">
    <div class="container">

      {{-- Navbar Brand --}}
      <a class="navbar-brand" href="/">
        <div class="brand-container">
          <img src="{{ url('img/logo.png') }}" class="brand" alt="AL Ittihad" />
        </div>
        <div class="brand-caption">
          <p class="title">Aplikasi Absensi</p>
          <p class="caption">SMK Al - Ittihad - Cianjur</p>
        </div>
      </a>
{{-- 
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> --}}

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav ms-auto mb-2 mb-lg-0 mx-4">
        <li><a href="/" class="btn btn-sm btn-light"style=" box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);">Beranda</a></li>
       </ul>
       <ul class="navbar-nav mx-4">
        <li><a href="/admin" class="btn btn-sm btn-light"style=" box-shadow: 0px 1px 1px 1px rgba(0,0,0,0.2);">Admin</a></li>
       </ul>
        <ul class="navbar-nav me-4">
          <li class="nav-item mx-2">
            <button type="button" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#notifModal">
              <i class="fa-sharp fa-solid fa-bell"></i><span class="position-absolute translate-middle p-1 bg-danger border border-light rounded-circle"><span class=" visually-hidden">unread messages</span></span>
            </button>
          </li>
        </ul>
        <button class="btn bg-primary text-white rounded-circle mx-2 px-3" data-bs-toggle="modal" data-bs-target="#loginModal">
          A
        </button>
        <div class="btn-group" role="group">
          <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            Admin
          </button>
          <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <li>
              <button type="button" class="dropdown-item btn btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-right-from-bracket"></i>
                Sign out
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>