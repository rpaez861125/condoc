<header class="header">
        <div class="header-block header-block-collapse d-lg-none d-xl-none">
            <button class="collapse-btn" id="sidebar-collapse-btn">
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <div class="header-block header-block-search">
            <form role="search">
                <div class="input-container">
                    <i class="fa fa-search"></i>
                    <input type="search" placeholder="Search">
                    <div class="underline"></div>
                </div>
            </form>
        </div>
        <div class="header-block header-block-buttons">
            <a href="https://github.com/modularcode/modular-admin-html" class="btn btn-sm header-btn">
                <i class="fa fa-github-alt"></i>
                <span>View on GitHub</span>
            </a>
            <a href="https://github.com/modularcode/modular-admin-html/stargazers" class="btn btn-sm header-btn">
                <i class="fa fa-star"></i>
                <span>Star Us</span>
            </a>
            <a href="https://github.com/modularcode/modular-admin-html/releases" class="btn btn-sm header-btn">
                <i class="fa fa-cloud-download"></i>
                <span>Download .zip</span>
            </a>
        </div>
        <div class="header-block header-block-nav">
            <ul class="nav-profile">              
                <li class="profile dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user icon"></i>
                        <span class="name"> {{Auth::user()->name}} </span>
                    </a>
                    <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-user icon"></i> Profile </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-bell icon"></i> Notifications </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-gear icon"></i> Settings </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off icon"></i> {{ __('Logout') }} </a> 
                
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                    </div>
                </li>
            </ul>
        </div>
    </header>