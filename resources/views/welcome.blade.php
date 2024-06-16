@extends('master.main')

@section('title','Home Page')

@section('content')

{{--@include('includes.search')--}}  

<div class="row">
    <div class="col-md-3 col-sm-12" style="margin-top:2.3em">
        @include('includes.categories')
        <div class="row mt-3">
            <div class="col">
                <div class="card ">
                    <div class="card-header">
                        Official Mirrors
                    </div>
                    <div class="card-body text-center">
                        @foreach(config('marketplace.mirrors') as $mirror)
                        <a href="{{$mirror}}" style="text-decoration:none;">{{$mirror}}</a>
                        <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-9 col-sm-12 mt-3 ">

  
         <div class="row">
            <div class="col-md-12">
                <h1>Welcome to {{config('app.name')}}</h1>
                <hr>
            </div>
        </div>
        
        
        @isModuleEnabled('FeaturedProducts')
      
        @include('featuredproducts::frontpagedisplay')
        @endisModuleEnabled

        <div class="row mt-4">

            <div class="col-md-4">
                <h4>
                    Top Vendors
                </h4>
                <hr>
                @foreach(\App\Models\Vendor::topVendors() as $vendor)
                <table class="table table-borderless table-hover">
                    <tr>
                        <td>
                            <a href="{{route('vendor.show',$vendor)}}"
                               style="text-decoration: none; color:#212529">{{$vendor->user->username}}</a>
                        </td>
                        <td class="text-right">
                            <span class="btn btn-sm @if($vendor->vendor->experience >= 0) btn-primary @else btn-danger @endif active"
                                  style="cursor:default">Level {{$vendor->getLevel()}}</span>

                        </td>
                    </tr>
                </table>
                @endforeach
            </div>
            <div class="col-md-4">
                <h4>
                    Latest orders
                </h4>
                <hr>
                @foreach(\App\Models\Purchase::latestOrders() as $order)
                <table class="table table-borderless table-hover">
                    <tr>
                        <td>
                            <img class="img-fluid" height="23px" width="23px"
                                 src="{{ asset('storage/'  . $order->offer->product->frontImage()->image) }}"
                                 alt="{{ $order->offer->product->name }}">
                        </td>
                        <td>
                            {{str_limit($order->offer->product->name,50,'...')}}
                        </td>
                        <td class="text-right">
                            {{$order->getSumLocalCurrency()}} {{$order->getLocalSymbol()}}
                        </td>
                    </tr>
                </table>
                @endforeach
            </div>

            <div class="col-md-4">
                <h4>
                    Rising vendors
                </h4>
                <hr>
                @foreach(\App\Models\Vendor::risingVendors() as $vendor)
                <table class="table table-borderless table-hover">
                    <tr>
                        <td>
                            <a href="{{route('vendor.show',$vendor)}}"
                               style="text-decoration: none; color:#212529">{{$vendor->user->username}}</a>
                        </td>
                        <td class="text-right">
                            <span class="btn btn-sm @if($vendor->vendor->experience >= 0) btn-primary @else btn-danger @endif active"
                                  style="cursor:default">Level {{$vendor->getLevel()}}</span>
                        </td>
                    </tr>
                </table>
                @endforeach
            </div>
        </div>

     

        <div class="row">
            <div class="col">
                Welcome to Demo Marketplace, where anything is possible under the sun. This market is for all and shop with our vendors and enjoy your time.
            </div>
        </div>
        <div class="row mt-5">

            <div class="col-md-4">
                <div class="escrow-content ">
                <h4 class="escrow-heading"><i class="fa fa-money-bill-wave-alt text-info"></i> No deposit</h4>
                <p>
                    When user chooses to purchase any product, he is able to pay with any coin supported by market (and vendor, since vendors can choose which coins they want on each product). There is no wallets or anything similar. Users do not need to keep money on marketplace at all times. For each purchase random address is generated, and its used for that purchase only.
                </p>
                </div>
            </div>

            <div class="col-md-4">
                  <div class="escrow-content ">
                <h4 class="escrow-heading"><i class="fa fa-shield-alt text-info"></i> Escrow</h4>
                <p>
                    Escrow helps to reduce the risk of a transaction failing. Having a third party hold funds until both parties are satisfied with a transaction. This can be particularly important when using classifieds or other consumer to consumer transactions.
                    With escrow, the buyer places funds into escrow. The seller will then provide the goods or services as specified. Having received the goods or services, the buyer approves the release of funds to finalise the transaction.
                </p>
                </div>
            </div>
 
            <div class="col-md-4">
                  <div class="escrow-content ">
                <h4 class="escrow-heading"><i class="fa fa-coins text-info"></i> Multiple-Coins</h4>
                <p>
                    We use mulptiple coins for our customers freedom to be able to freely be comfortable to be flexible with our four different crypto currencies that is available. We at Demo Marketplace market accepts, Bitcoin (BTC) and Monero (XMR)
                </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <hr>
            </div>
        </div>
        

    </div>

</div>






@stop