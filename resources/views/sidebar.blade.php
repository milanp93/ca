<div class="col-md-4 col-xs-12 sidebar">
    @if(!Auth::user())
        <div class="row side-bar">
            <div class="col-md-12">
                <h3>Login or Register?</h3>
            </div>
            <div class="col-lg-12">
                <div class="sign-in">
                    <ul>
                        <li><a href="login"><i class="glyphicon glyphicon-user"></i> Sign in</a></li>
                        <li><a href="register"><i class="glyphicon glyphicon-plus"></i> Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endif
    @if(Auth::user())
        <div class="row side-bar">
            <div class="col-md-12">
                <h3>Panel</h3>
            </div>
            <div class="col-lg-12">
                <div class="panel-list">
                    <ul>
                        @if(Auth::user()->type == 0 || Auth::user()->type == 1 || Auth::user()->type == 2) <!-- Free or Ad free user -->

                        <li><a href="{!! URL::to('profile') !!}">My profile</a></li>
                        <li><a href="{!! URL::to('my-recepies') !!}">My recepies (0/150)</a></li>
                        <li><a href="{!! URL::to('add-recepie') !!}">Add recepie</a></li>
                        <li><a href="{!! URL::to('upgrade') !!}">Upgrade</a></li>

                        @elseif(Auth::user()->type == 4) <!-- Moderator user -->

                        <li><a href="{!! URL::to('profile') !!}">My profile</a></li>
                        <li><a href="{!! URL::to('all-users') !!}">Users</a></li>

                        @elseif(Auth::user()->type == 5)<!-- Ad user -->

                        <li><a href="{!! URL::to('profile') !!}">My profile</a></li>
                        <li><a href="{!! URL::to('coupon-users') !!}">Users who used coupon</a></li>
                        <li><a href="{!! URL::to('coupons') !!}">Coupons</a></li>

                        @elseif(Auth::user()->type == 3) <!-- Administrator -->
                        <li><a href="{!! URL::to('profile') !!}">My profile</a></li>
                        <li><a href="{!! URL::to('my-recepies') !!}">Recepies</a></li>
                        <li><a href="{!! URL::to('all-users') !!}">Users</a></li>
                        <li><a href="{!! URL::to('coupons') !!}">Coupons</a></li>
                        @endif
                        <li><a href="logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endif

    @if(!Auth::user() || Auth::user()->type == 0)
        <div class="row">
            <div class="ads-example">GOOGLE ADS</div>
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <h3>Featured Recipes</h3>
        </div>
        <div class="col-md-5">
            <a href="#"><img src="{{asset('images/sandwich.jpg')}}" alt="Image"></a>
        </div>
        <div class="col-md-7">
            <h2><a href="#">Ham Sandwich</a></h2>
            <span>by: Anna</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <a href="#"><img src="{{asset('images/biscuit-and-coffee.jpg')}}" alt="Image"></a>
        </div>
        <div class="col-md-7">
            <h2><a href="#">Biscuit &amp; Sandwich</a></h2>
            <span>by: Sarah</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <a href="#"><img src="{{asset('images/pizza.jpg')}}" alt="Image"></a>
        </div>
        <div class="col-md-7">
            <h2><a href="#">Delicious Pizza</a></h2>
            <span>by: Rico</span>
        </div>
    </div>
    <div class="blog row">
        <div class="col-md-12">
            <h3>Blog</h3>
        </div>
        <div class="col-md-12">
            <a href="#">This is just a place holder, so you can see what the site would look like.</a>
        </div>
        <div class="col-md-12">
            <p>Jan 9, by Liza</p>
        </div>
        <div class="col-md-12">
            <a href="#">This is just a place holder, so you can see what the site would look like.</a>
        </div>
        <div class="col-md-12">
            <p>Feb 16, by Myk</p>
        </div>
        <div class="col-md-12">
            <a href="#">This is just a place holder, so you can see what the site would look like.</a>
        </div>
        <div class="col-md-12">
            <p>March 15, by Xaxan</p>
        </div>
    </div>
    <div class="updates row">
        <div class="col-md-12">
            <h3>Get Updates</h3>
            <a href="#" target="_blank" id="facebook">Facebook</a>
            <a href="#" target="_blank" id="twitter">Twitter</a>
            <a href="#" target="_blank" id="youtube">Youtube</a>
            <a href="#" target="_blank" id="flickr">Flickr</a>
            <a href="#" target="_blank" id="googleplus">Google&#43;</a>
        </div>
    </div>

</div>
</div>