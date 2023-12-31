<nav class="navbar navbar-expand-lg navbar-light bg-light cosnavbar shadow-sm" ><!-- style="height: 100px" -->  
    <!-- Container wrapper --> 
    <div class="container-fluid" >
        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand " href="/" >
                <img src="{{ url('assets/img/icon tokopaedi.svg') }}" 
                alt="Logo Tokopaedi" 
                width="50" height="60" 
                >
                <h2 class="icon-logo">Tokopaedi</h2>
            </a>
        </div>
        <!-- Collapsible wrapper --> 
        
        <!-- Search Element-->
        <div class="d-flex">
            <form class="d-flex input-group-sm search   translate-middle-x " role="search" action="/product">
              <span class="input-group-text iconsearch" type="submit" >
                <i class="fa-sharp fa-solid fa-magnifying-glass" style="color: #fafafa;"></i>
              </span>
              <input class="form-control searchcos"  type="search" placeholder="Cari Produk" name="search">
          </form>
        </div>
        <!-- Search Element-->

        <!-- Right elements -->
        <ul class="navbar-nav ms-auto" >
        @auth
          <li class="nav-item dropdown">
            <i class="fa-solid fa-bell m-2 dropdown-toggle" type="button" data-bs-toggle="dropdown" style="cursor: pointer"></i>
            <ul class="dropdown-menu" style="transform:translate(-60%,5%)">
              <li class="dropdown-item" style="border-bottom: inset; ">
                <a href="#" class="d-flex gap-3 py-3 text-decoration-none text-reset" aria-current="true">
                <img src="{{ url('assets/img/icon tokopaedi.svg') }}" alt="twbs" width="10" height="32" class=" flex-shrink-0">
                <div class="d-flex gap-2 w-100 justify-content-between">
                  <div>
                    <h6 class="mb-0">Promo</h6>
                    <p class="mb-0 opacity-75">Buruan klaim Kupon cashback Rp. 500rb</p>
                  </div>
                  <small class="opacity-50 text-nowrap">now</small>
                </div>
              </a>
            </li>

            </ul>
          </li>
          <li class="nav-item m-2">
            <a class="text-reset" href="/cart">
              <i class="fa-solid fa-cart-shopping"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <img type="button"
                src="{{ url('assets/img/foto Profil.jpeg') }}"
                class="rounded-circle mx-2 dropdown-toggle" data-bs-toggle="dropdown" style="height: 2rem; cursor:pointer"
              />
              <ul class="dropdown-menu" style="transform:translate(-60%,5%)">
                <li class="dropdown-item"><a href="/dashboard">Dashboard</li>
                <li><hr class="dropdown-divider"></li></a>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                      Logout</button>
                  </form>
                </li>
              </ul>
          </li>
        @else

          <li class="nav-item">
            <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login </a>
          </li>

        @endauth
        </ul>
        
        <!-- Right elements -->  
    </div>
    <!-- Container wrapper -->
</nav>