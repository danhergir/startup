@if (Auth::guest())
<div class="row">
    <div class="col-md-12 navbar navbar-expand-lg navbar-light bg-primary" style="height:60px">
        <div class="col-md-3 ml-2">
            <span><a class="navbar-brand" href="{{ route('welcome.index') }}">Brand</a></span>
        </div>
        <div class="col-md-6">
            <div class="input-group justify-content-center">
                <div class="input-group-prepend rounded bg-light" style="overflow:hidden">
                    <button class="btn btn-outline-dark dropdown-toggle" style="height:50px; border:hidden" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Monitors</a>
                    <a class="dropdown-item" href="#">Videos Games</a>
                    <a class="dropdown-item" href="#">Computers</a>
                    <a class="dropdown-item" href="#">More Tech</a>
                    </div>                
                    <form class="form-inline my-2 my-lg-0 bg-light">
                        <input style="height: 45px; width: 450px; border:hidden" type="text" placeholder="Search" class="form-control" aria-label="Text input with dropdown button">
                        <button style="height: 45px" class="btn btn-ligh my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>  
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md pl-4 user-dropdown">
                    <div class="dropdown btn-group">
                    <a class="navbar-brand dropdown-toggle" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
                    <ul class="dropdown-menu text-center mt-2">
                        <li><a href="{{ route('login') }}"><button type="button" class="btn btn-warning text-dark">Sign-in now</button></a></li>
                        <hr>
                        <li><h6>Don't have an account?</h6><a href="{{ route('register') }}">Sign-up here</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md">
                    <span><a class="navbar-brand" href="#"><i class="fas fa-shopping-cart"></i></a></span>
                </div>
                <div class="col-md">
                    <span><a class="navbar-brand" href="#"><i class="fas fa-heart"></i></a></span>
                </div>
            </div>
        </div>
    </div>
</div>                               
@else 
<div class="row">
    <div class="col-md-12 navbar navbar-expand-lg navbar-light bg-primary" style="height:60px">
        <div class="col-md-3 ml-2">
            <span><a class="navbar-brand" href="{{ route('welcome.index') }}">Brand</a></span>
        </div>
        <div class="col-md-6">
            <div class="input-group justify-content-center">
                <div class="input-group-prepend rounded bg-light" style="overflow:hidden">
                    <button class="btn btn-outline-dark dropdown-toggle" style="height:50px; border:hidden" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Monitors</a>
                    <a class="dropdown-item" href="#">Videos Games</a>
                    <a class="dropdown-item" href="#">Computers</a>
                    <a class="dropdown-item" href="#">More Tech</a>
                    </div>                
                    <form class="form-inline my-2 my-lg-0 bg-light">
                        <input style="height: 45px; width: 450px; border:hidden" type="text" placeholder="Search" class="form-control" aria-label="Text input with dropdown button">
                        <button style="height: 45px" class="btn btn-ligh my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>  
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md pl-4 user-dropdown">
                    <div class="dropdown btn-group">
                    <a class="navbar-brand dropdown-toggle" href="#" id="bd-versions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user"></i></a>
                    <ul class="dropdown-menu text-center mt-2">
                        <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                            Logout
                                        </a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        <hr>
                        </li>
                        <li><a href="{{ route('user.profile') }}">My Profile</a></li>
                    </ul>
                    </div>
                </div>
                <div class="col-md">
                    <span><a class="navbar-brand" href="#"><i class="fas fa-shopping-cart"></i></a></span>
                </div>
                <div class="col-md">
                    <span><a class="navbar-brand" href="#"><i class="fas fa-heart"></i></a></span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif