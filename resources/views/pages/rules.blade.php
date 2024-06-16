@extends('master.main')

@section('title','Home Page')

@section('content')

{{--@include('includes.search')--}}

<div class="row">

    <div class="col-md-9 col-sm-12 mt-3 ">

        <h2>Rules for buyers:</h2>
        <p>Do not try to scam vendors.
            <br /> Do not use the messaging system to send unsolicited links or attachments.
            <br /> Read the listing carefully and pay attention to the listing's terms and conditions. If something is not clear, contact the vendor before ordering.
            <br /> When it comes to physical items, check the vendor's delivery time frame, and communicate with the vendor before opening a dispute. Most vendors will resolve their issues without getting support involved.
            <br /> While we are confident that most vendors are honest and just want to make a living, there will always be some bad apples. In this case, you can open a dispute.
            <br /> You should start a dispute if:
            <br /> vendor accepts an order and then does not deliver within the advertised time frame, does not answer, etc.
            <br /> For physical items, if the item is not received, is substantially different from the listing or it is incomplete and/or damaged.
            <br /> For digital items, if the item does not match the description or the listing is misleading. We do approve all listings manually, however some bad ones may slip.
            <br /> You should NOT start a dispute if:
            <br /> The quality of the product does not match your expectations (subjectively).
            <br /> You do not know how to use the purchased product (either physical or digital).
            <br /> The digital product you bought does not work for you.
            <br /> You reason for dispute is in contradiction with listing's terms and conditions.
            <br /> Do not release money from escrow until you received your product (physical or digital)! We do not recommend "finalize early". If you have traded with the vendor before you can do what ever you want, on your own risk. By hitting the "Release" button you lose the right to a dispute, so think before you click. You have been warned.
            <br /> Don't be an asshole.
        </p>
        <h2>Rules for vendors:</h2>
        <br /> Do not try to scam buyers.
        <br /> Do not use the messaging system to send unsolicited links or attachments.
        <br /> Unacceptable listings:
        <br /> No child or animal pornography.
        <br /> No murder for hire.
        <br /> No human or animal exploitation/abuse.
        <br /> No terrorism related products, services or propaganda.
        <br /> No tutorials, no "get rich quick" schemes. Most of those are low effort and have no real value. We do not even have a "tutorials" category, however if you have something great that may impress us we may make exceptions.
        <br /> No transfers (Pay $300 get $1000 via Western Union) kind of stuff.
        <br /> No "miracle Coronavirus cures". Coronavirus discounts are fine, products claiming to be cures are not (misleading)
        <br /> Nothing that our administrators can consider unacceptable, at our own discretion.
        <br /> Because of the issues they create we no longer accept dropshipping vendors. If you don't have possession of your product don't join because you will lose your vendor bond.
        <br /> Acceptable listings:
        <br /> Almost anything else.
        <br /> All new and some modified listings go to moderation. We may reject a listing with or without an explanation.
        <br /> Do not keep in your wallet more coins then you need, we don't want to hold your money for more time then we have to. There are no limits on withdrawals.
        <br /> Describe your product as accurately as possible. Misleading listings are not accepted.
        <br /> Emoticons, html tags, unicode or weird characters are not accepted neither in title nor in description.
        <br /> No external links or contact information in your listing description or profile. Ignoring this rule will get your account permanently or temporarily banned. No wickr, no jabber, no email, no links.
        <br /> Add your Terms and Conditions, Refund/Reship Policy either to your profile or your listings. Different listings/products may have different policies.
        <br /> If adding a photo to your listing, make sure that's a photo of your product. You can put a paper note next to your product when taking the photo, stating your username, but be careful as handwriting can be used to identify you and some printers add microdots.
        <br /> Before you add a picture, make sure you strip the EXIF data as it can include information about camera and even location information. Both phones and cameras do it, so this is important.
        <br /> Process your orders in a timely manner, and try to respect the advertised delivery deadline.
        <br /> Keep the buyer informed every step of the way.
        <br /> When selecting "auto-finalize" time, make sure it reflects your estimated delivery time. As a vendor your have a pretty good idea how long does it take for delivery.
        <br /> Before contacting support about a dispute, try to solve it with the buyer first.
        <br /> Breaking any of those rules will get your account temporarily or permanently banned.
        <br /> Don't be an asshole.
        </p>
        </p>

    </div>
</div>
@stop