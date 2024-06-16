
<div class="container">
<div class="ticker-wrap">
    <div class="ticker">
        @foreach($priceData['crypto'] as $key => $data)
        @if($data->symbol == 'xmr' || $data->symbol == 'btc'|| $data->symbol == 'xrp' || $data->symbol == 'eth' || $data->symbol == 'bch')
        <div class="ticker__item"> <img src="{{ $data->image}}" style="max-height:20px; ">
            {{ $data->name}} {{$data->symbol}}USD ${{$data->current_price}}</div>
        @endif
        @endforeach
        <div class="ticker__item">test </div>
    </div>
</div>


<nav class="navbar navbar-expand-lg  navbar-dark bg-mgray">
    <div class="container-fluid ">


        <a href="{{ route("home") }}" class="navbar-left"><img src="/img/darkport.png"> </a>
        <input type="checkbox" id="navbar-toggle-cbox">


        <label class="navbar-toggler" for="navbar-toggle-cbox" data-toggle="collapse"
               data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
               aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </label>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                @admin
                <li class="nav-item @isroute('admin') active @endisroute">
                    <a class="nav-link" href="{{ route('admin.index') }}">Admin panel</a>
                </li>
                @endadmin
                @moderator
                <li class="nav-item @isroute('admin') active @endisroute">
                    <a class="nav-link" href="{{ route('admin.index') }}">Moderator panel</a>
                </li>
                @endmoderator
                @auth
                <li class="nav-item @isroute('profile.tickets') active @endisroute">
                    <a class="nav-link" href="{{ route('profile.tickets') }}">Support</a>
                </li>
                @endauth

            </ul>

            <ul class="navbar-nav">

                @auth

                <li class="nav-item @isroute('profile.notifications') active @endisroute">
                    <a href="{{route('profile.notifications')}}" class="nav-link">
                        <span @if(auth()->user()->unreadNotifications()->count() > 0) class="text-warning" @endif><i class="fa fa-bell"></i> {{auth()->user()->unreadNotifications()->count()}}</span>
                    </a>
                </li>
                <li class="nav-item text-center @isroute('profile.cart') active @endisroute">
                    <a class="nav-link w-100  {{ \App\Marketplace\Cart::getCart() ->numberOfItems() == 0 ? '' : '' }}" href="{{ route('profile.cart') }}">
                        <i class="fas fa-shopping-cart mr-2"></i>
                        ({{ session('cart_items') !== null ? count(session('cart_items')) : 0 }})
                    </a>
                </li>

                <li class="nav-item @isroute('profile.index') active @endisroute">
                    <a class="nav-link" href="{{ route('profile.index') }}">{{auth()->user()->username}}</a>
                </li>

                <form class="form-inline header-form" action="{{route('auth.signout.post')}}" method="post">
                    {{csrf_field()}}
                    <button class="btn btn-link " type="submit" style="text-decoration: none;">Sign Out</button>
                </form>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="{{route('auth.signin')}}">Sign In</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('auth.signup')}}">Sign Up</a>
                </li>
                @endauth

            </ul>

        </div>
    </div>
</nav>

</div>
