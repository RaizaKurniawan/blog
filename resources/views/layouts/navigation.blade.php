
<!-- Navigation -->
      <!--Navbar-->
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark indigo scrolling-navbar">
                  <!-- Navbar brand -->
              <a class="navbar-brand" href="/">IQRO Yuk!</a>

              <!-- Collapse button -->
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                  aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <!-- Collapsible content -->
              <div class="collapse navbar-collapse" id="navbarResponsive">

                  <!-- Links -->
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item{{ request()->is('/') ? ' active' : '' }}">
                          <a class="nav-link" href="/">Home
                          </a>
                      </li>
                      <li class="nav-item{{ request()->is('about') ? ' active' : '' }}">
                          <a class="nav-link" href="/about">Profil Saung IQRO</a>
                      </li>
                      <li class="nav-item{{ request()->is('kegiatan') ? ' active' : '' }}">
                          <a class="nav-link" href="/kegiatan">Kegiatan</a>
                      </li>
                      <li class="nav-item{{ request()->is('viewpost') ? ' active' : '' }}">
                        <a class="nav-link" href="/viewpost">Article</a>
                      </li>
                      <!-- Dropdown -->
                      {{-- <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                      </li> --}}

                  </ul>
                  <!-- Links -->
          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
              <a href="https://www.facebook.com/saungiqro" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://twitter.com/saungiqro" class="nav-link waves-effect" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a href="https://instagram.com/saungiqro" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
            <!-- Pencarian -->
                  <form class="form-inline">
                      <div class="md-form my-0">
                          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                      </div>
                  </form>
              </div>
             <!-- Collapsible content -->
            </nav>
      <!--/.Navbar-->
<!-- End of Navigation -->