@extends('master.main')

@section('title','Home Page')

@section('content')

{{--@include('includes.search')--}}

<div class="row">

    <div class="col-md-9 col-sm-12 mt-3 ">

        <h2>Vendor Guide:</h2>
        <pre>
            
        Verify our signed message and make sure you are on the correct onion.

        If you are an established vendor on another market and you can prove who you are we will give you the same username (even if someone else already registered it) and we will port your feedback.

        Before becoming a vendor, please observe our rules as breaking or trying to circimvent any of them will get your account either temporarily or permanently restricted.
        
        - If your account is banned for scamming you will get nothing back.


        If you find those rules acceptable:
        - Go to your account and click "Become a vendor", then fill in the vendor application. We will process it as soon as possible.
        A non-refundable, $70 for first 10 vendor then $400  bond will be required.
        - there will be 0.90% sales commission.
        - Once you are a vendor, go to your account -> Manage your listings -> Add new listing.
        - Describe your item as accurately as possible. Include terms and conditions either in your vendor profile or in the item's description.
        - Do not include any off site communication methods (jabber, wickr, email) netiher in the listing description nor in your profile. If you want to send your contacts to your customer you can do that via encrypted messaging, but not via public listings.
        - Select shipping origin and destination, available quantities, measurement units, prices, etc.
        - Fiat prices have to be integers, no cents (.99) nonsense.
        - Add shipping methods. If selling digital goods/services, shipping is not required.
        - If you do not login to your vendor account within 5 days and you do not have notifications enabled (email or jabber) you will be set to vacation mode and your listings deactivated.
        - Add up to four pictures. Maximum picture size is 5 megabytes, the gallery thumbnail will be generated from the first image. For physical items, pictures are required.

        Established vendors can apply for FE. To do so, log in and click "FE Application" under the user drop-down menu.
        - Some of you may have already been approved, to see your FE status check admin messages or go to your account page.
        - Not everybody will be accepted. We won't publish the exact requirements for approval, however however you have to be an established vendor with FE on at least one active market.
        - Customer can still cancel the order if you do not accept it within 4 hours, and you can cancel/refuse an order.
        - Since we don't have a "hot wallet", coins will still be stored in the market wallet until you withdraw.
        - If there are issues with the order, refunds / reshipments are to be arranged directly with the customer.
        - If you receive complaints, your FE privileges may be revoked.

        If selling digital goods, you can either send them to the buyer as a message, or attach them as a file. Attachments must be encrypted with the buyer's public key before sending.

        We do not offer automatic discounts at the moment, however you can always create custom (private) listings.

        We do not offer sorting by vendor's rating at the moment, because we want to give all vendors equal opportunity to do business..

        If you receive a dispute use the "Reply to dispute" button under your orders / your messages page.

        You can choose to either accept or cancel an order. If canceling, it's recommended to message the buyer and explain why.

        Please check your stock / order message / policies BEFORE accepting an order or marking it as Complete / Shipped. If for any reason you cannot fulfill an order (you don't ship to customer's country etc) cancel the order before accepting it. Asking us to cancel an order you accepted will count as a lost dispute. You can access the order message from within the order tab.

        If you do not accept an order within 4 hours, the buyer has the option to cancel.

        When you ship the order (or otherwise deliver it) you can mark it as complete.

        When marking the order "complete", you will be asked for an estimated auto-finalize time between 5 and 45 days. Make sure this is as close to reality as possible.

        To issue a partial refund, move your mouse over the "Order Total" box and click "Issue partial refund".

        Rate the buyer after an order, to help keeping the community safe.

        You can edit your feedback 30 days after an order is released / finalized.


        </pre>
        <ul class="nav nav-pills navbar-right">
            @auth
            @if(auth() -> user() -> isVendor())
            <li class="nav-item @isroute('profile.vendor') active @endisroute">
                <a href="{{ route('profile.vendor') }}" class="nav-link @isroute('profile.vendor') active @endisroute" data-toggle="pill">
                    <i class="far fa-address-card mr-2"></i>
                    Vendor
                </a>
            </li>
            @else
            <li class="nav-item @isroute('profile.become') active @endisroute">
                <a href="{{ route('profile.become') }}" class="nav-link @isroute('profile.become') active @endisroute" data-toggle="pill">
                    <i class="far fa-address-card mr-2"></i>
                    Become Vendor
                </a>
            </li>
            @endif
            @else
            <li class="nav-item @isroute('profile.become') active @endisroute">
                <a href="{{ route('profile.become') }}" class=" btn  btn-black nav-link @isroute('profile.become') active @endisroute" data-toggle="pill">
                    <i class="far fa-address-card mr-2"></i>
                    Become Vendor
                </a>
            </li>
            @endauth
        </ul>
    </div>
</div>
@stop