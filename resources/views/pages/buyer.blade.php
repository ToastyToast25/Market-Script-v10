@extends('master.main')

@section('title','Home Page')

@section('content')

{{--@include('includes.search')--}}

<div class="row">

    <div class="col-md-9 col-sm-12 mt-3 ">

        <h2>Buyer Guide:</h2>
        <p>&nbsp;Buyer Guide</p>
        <p><br></p>
        <p>&nbsp; &nbsp; Verify our signed message and make sure you are on the correct onion.</p>
        <p>&nbsp; &nbsp; If you find something you like:</p>
        <p>&nbsp; &nbsp; - Check the listing carefully, and pay attention to listing&apos;s terms and shipping information when dealing with physical goods.</p>
        <p>&nbsp; &nbsp; - Check the prices, including shipping. Prices are listed in fiat currency, but you will pay in Bitcoin or Monero at the current exchange rate.</p>
        <p>&nbsp; &nbsp; - We do not offer automatic discounts at the moment, however you can contact the us for a custom listing if it is possibble for a discount.</p>
        <p>&nbsp; &nbsp; - View and import PGP public key.</p>
        <p>&nbsp; &nbsp; - Select desired quantity and shipping method.</p>
        <!--<p>&nbsp; &nbsp; - Refunds will be deposited into your market wallet. You can use those funds as a total or partial payment for future orders or you can withdraw.</p>-->
        <p>&nbsp; &nbsp; - Write a short message to us. Messages have to be locally encrypted (and preferably signed) before sending.</p>
        <p>&nbsp; &nbsp; - After hitting &quot;Place Order&quot; you will be shown an Invoice page. Once payment is paid it is irreversable. The address is encrypted and signed. If you have money in your market wallet it will be used for either a total or a partial payment. If your balance won&apos;t cover the order you will only have to send the missing amount.</p>
        <p><br></p>
        <p>&nbsp; &nbsp; - Important:</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; Send the exact order amount to that address.</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; The payment requires at least 1 confirmation within 180 minutes. By not having at least one confirmation within the 180 minute window you may lose your coin.</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; Address is unique to the order/invoice. Trying to re-use that address and you will lose your coin.</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; If you place multiple orders, you need to send multiple payments to multiple order addresses. Do not try to combine payments, it will not work.</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; If you send less then the required amount, the order will be cancel and a refund will be issued to your market wallet.</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; If you send more then the required amount, the difference will be not be refunded. So be careful in payments of product prices.</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; If, by the time the payment is confirmed, something goes wrong with the listing (out of stock,) your order will be canceled and you will be refunded.</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; If you don&apos;t send any payment, your invoice will be canceled.Please contact us!</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; Do not include a payment ID.</p>
        <p>&nbsp; &nbsp; &nbsp; &nbsp; Do not send the payment from an exchange. While that may work, it is very bad for your OPSEC, the amount may be different, payment may be delayed and you may lose your coin. Send to your local wallet first!</p>
        <p><br></p>
        <p><br></p>
        <p>&nbsp; &nbsp; - After you sent the payment, you can refresh the &quot;Invoice Status&quot; page for updates.</p>
        <p>&nbsp; &nbsp; - If you log out or close the browser, you can find the invoice under &quot;Your Invoices&quot; page.</p>
        <p>&nbsp; &nbsp; - After your payment is confirmed (10 network confirmations) your order will be sent to us.</p>
        <p>&nbsp; &nbsp; - After a vendor marks the order as &quot;Complete&quot; pay attention to auto finalize date and time. You can only dispute or extend the auto-finalize time 24 hours before auto-finalize, so make sure you keep an eye on your orders as the exact time window for disputes / extend AF is clearly shown in the order tab.</p>
        <p>&nbsp; &nbsp; - Before disputing an order, please observe our rules. If you lose a dispute, administrators may give you a negative rating/feedback.</p>
        <p>&nbsp; &nbsp; - Keep in mind after a dispute is opened the other party has 72 hours (5 business days due to Covid) follow up up with us.</p>
        <p>&nbsp; &nbsp; - Remember to finalize your order after receiving your product/service. Failure to finalize can get you a bad rating/review.</p>
        <p>&nbsp; &nbsp; - While finalize-early (FE) is accepted, it is not encouraged. After you release the coin we cannot help you. Think before you click!</p>
        <p>&nbsp; &nbsp; - We are not liable for loss of payments due to transactions that are below or higher than the transaction. so pay accordingly and check your shipment payments.</p>
    </div>
</div>
@stop