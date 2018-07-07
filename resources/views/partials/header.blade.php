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
                <div class="col-md pl-4 header-dropdown">
                    <div class="dropdown btn-group">
                        <a class="navbar-brand" href="{{ route('user.profile') }}" id="bd-versions" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu mt-2" style="width:200px">
                        <div class="arrow-up"></div>
                            <li class="text-center">
                                <a href="{{ route('login') }}">
                                <button type="button" class="btn btn-warning text-dark mb-2">Sign in</button>
                                </a>
                            </li>
                            <li class="text-center">
                                <p><a style="font-size:12px" href="{{ route('register') }}">Are you new? Click here</a></p>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li class="ml-2">
                                <p><a class="text-secondary" href="{{ route('user.profile') }}">Purchases</a></p>
                                <p><a class="text-secondary" href="{{ route('user.account') }}">Manage Account</a></p>
                                <p><a class="text-secondary" href="{{ route('user.address') }}">Shipping Address</a></p>
                                <p><a class="text-secondary" href="{{ route('user.review') }}">Comments & reviews</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="col-md header-dropdown">
                        <div class="dropdown btn-group">
                            <a class="navbar-brand" href="{{ route('user.lists') }}" id="bd-versions" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <a class="navbar-brand" href="{{ route('user.cart') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge badge-pill badge-warning count-notif">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                        <span class="sr-only">(current)</span>
                    </a>
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
                <div class="col-md pl-4 header-dropdown">
                    <div class="dropdown btn-group">
                        <a class="navbar-brand" href="{{ route('user.profile') }}" id="bd-versions" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i>
                        </a>
                        <ul class="dropdown-menu mt-2" style="width:200px">
                            <div class="arrow-up"></div>
                            <li class="ml-2">
                                <p><a class="text-secondary" href="{{ route('user.profile') }}">Purchases</a></p>
                                <p><a class="text-secondary" href="{{ route('user.account') }}">Manage Account</a></p>
                                <p><a class="text-secondary" href="{{ route('user.address') }}">Shipping Address</a></p>
                                <p><a class="text-secondary" href="{{ route('user.review') }}">Comments & reviews</a></p>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li class="ml-2">
                                <h6><a class="text-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><strong>Logout</strong></a></h6>
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="col-md header-dropdown">
                        <div class="dropdown btn-group">
                            <a class="navbar-brand" href="{{ route('user.lists') }}" id="bd-versions" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-heart"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <a class="navbar-brand" href="{{ route('user.cart') }}">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="badge badge-pill badge-warning count-notif">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                        <span class="sr-only">(current)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif


