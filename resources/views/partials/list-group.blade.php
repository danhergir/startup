<div class="row">
    <div class="col-md-12">
        <div class="card content-left">
            <div class="card-header bg-white pr-0" style="border:hidden">
                <h3 style="font-weight:bold" class="pt-2">Welcome {{ Auth::user()->first_name }}</h3>
                <hr>
                <h6 class="font-weight-bold text-secondary mb-0">Manage your account</h6>
            </div>
            <div class="list-items pr-0" style="border-bottom: 1px solid rgba(0,0,0,.125)">
                <ul class="list-group-flush" style=" list-style-type: none;">
                    <li class="list-item mb-2"><a href="{{ route('user.profile') }}">Purchase history</a></li>
                    <li class="list-item mb-2"><a href="{{ route('user.account') }}">Account</a></li>
                    <li class="list-item mb-2"><a href="{{ route('user.address') }}">Shipping address</a></li>
                    <li class="list-item mb-2"><a href="#">Comments & reviews</a></li>
                </ul>
            </div>  
        </div>
        <div class="card content-left">
            <div class="card-header bg-white pr-0" style="border:hidden">
                <h6 class="font-weight-bold text-secondary mb-0">Customer service</h6>
            </div>
            <div class="list-items pr-0" style="border-bottom: 1px solid rgba(0,0,0,.125)">
                <ul class="list-group-flush" style=" list-style-type: none;">
                    <li class="list-item mb-2"><a href="#">Contact us</a></li>
                </ul>
            </div>  
        </div>
    </div>
</div>
