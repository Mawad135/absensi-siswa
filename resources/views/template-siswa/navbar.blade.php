<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
            <li>
              <form class="form-inline mr-auto">
                <div class="search-element">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="200">
                  <button class="btn" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </form>
            </li>
          </ul>
        </div>

        <ul class="navbar-nav navbar-right">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <li>
              <button type="submit" class="btn btn-danger w-100 d-flex align-items-center justify-content-center">
                <i class="fas fa-sign-out-alt me-2"></i>
                <span>Sign Out</span>
              </button>
            </li>
          </form>
        </ul>
      </nav>