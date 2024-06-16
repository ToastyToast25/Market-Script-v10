@search
<div class="container">
<div class="header-thrd-part py-2">
<div class="header-thrd-inner ">

    <div class="row">
        <div class="col-md-9">

            <ul class="nav nav-pills navbar-right">

                <li class="nav-item @isroute('pages.about') active @endisroute">
                    <a class="nav-link custom-button-search" href="{{ route('pages.about') }}">About us</a>
                </li>

                <li class="nav-item @isroute('pages.vendor') active @endisroute">
                    <a href="{{ route('pages.vendor') }}" class="custom-button-search nav-link @isroute('pages.vendor') active @endisroute" data-toggle="pill">
                        <i class="far fa-address-card mr-2"></i>
                        Become Vendor
                    </a>
                </li>


                <li class="nav-item @isroute('pages.pgp') active @endisroute">
                    <a class="nav-link  custom-button-search" href="{{ route('pages.pgp') }}">PGP Key</a>
                </li>


                <li class="nav-item @isroute('pages.rules') active @endisroute">
                    <a class="nav-link  custom-button-search" href="{{ route('pages.rules') }}">Rules</a>
                </li>


                <li class="nav-item @isroute('pages.buyer') active @endisroute">
                    <a class="nav-link  custom-button-search" href="{{ route('pages.buyer') }}">Buyers Guide</a>
                </li>


                <li class="nav-item @isroute('pages.payments') active @endisroute">
                    <a class="nav-link custom-button-search" href="{{ route('pages.payments') }}">Payments</a>
                </li>

            </ul>
        </div>
       
        <!--<div class="col-sm">-->
        <!--    <ul class="nav nav-pills navbar-right">-->

        <!--        <li class="nav-item @isroute('pages.rules') active @endisroute">-->
        <!--            <a class="nav-link  custom-button-search" href="{{ route('pages.rules') }}">Rules</a>-->
        <!--        </li>-->


        <!--        <li class="nav-item @isroute('pages.buyer') active @endisroute">-->
        <!--            <a class="nav-link  custom-button-search" href="{{ route('pages.buyer') }}">Buyers Guide</a>-->
        <!--        </li>-->


        <!--        <li class="nav-item @isroute('pages.payments') active @endisroute">-->
        <!--            <a class="nav-link custom-button-search" href="{{ route('pages.payments') }}">Payments</a>-->
        <!--        </li>-->

        <!--    </ul>-->
        <!--</div>-->
         <div class="col-md-3">
             

            <form action="{{route('search')}}" method="POST" class="form-inline h-100">
                {{csrf_field()}}
                <div class="input-group   search-header">
                    <input type="text" class="form-control form-control" id="search" name="search"
                           placeholder="Search..." value="{{app('request')->input('query')}}">
                    <div class="input-group-append">
                        <button class="btn  btn-info">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--</div>-->

   </div>
</div>
</div>
<!--</div>-->
@endsearch
