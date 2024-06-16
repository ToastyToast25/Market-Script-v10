@extends('master.main')

@section('title','Home Page')

@section('content')

{{--@include('includes.search')--}}

<div class="row">

    <div class="col-md-9 col-sm-12 mt-3 ">

        <h2>Payments:</h2>
        <p>Payments</p>
        <p><br></p>
        <p>&nbsp; &nbsp; Payment address is unique for each order. If you send twice to the same address you will lose your coin.</p>
        <p>&nbsp; &nbsp; Payment must be received within 120 minutes after you order (at least 1 network confirmation). After 120 minutes your order will be canceled. If your payment is received later then 120 minutes make sure you contact us within 5 days and we may recover your coin, otherwise there is nothing we can do.</p>
        <p>&nbsp; &nbsp; Remember: 120 minutes refers to the time we receive your payment not the time you send it. Have the coin in your wallet before ordering.</p>
        <p>&nbsp; &nbsp; Do not pay your orders from online wallets / exchanges. Send the coin to your local wallet first because:</p>
        <p>&nbsp; &nbsp; - It is dangerous for you.</p>
        <p>&nbsp; &nbsp; - Some of them add extra verification/delays and you won&apos;t make the 2 hour window.</p>
        <p>&nbsp; &nbsp; - Some use a ridiculously low transaction fee and the transaction will be delayed.</p>
        <p>&nbsp; &nbsp; Transfer to your local wallet first and don&apos;t be cheap on the transaction fee. Late payments create unnecessary support work and you may lose your coins.</p>
        <p>&nbsp; &nbsp; When contacting support about a payment include order id, transaction id/hash or exchange ID if you paid by Bitcoin. We cannot help you without this information and your ticket will be ignored.</p>
        <p>&nbsp; &nbsp; 99% of our users have no problem following those guidelines. Disregard them and you will most likely lose your coins.</p>
        <p><br></p>
    </div>
</div>
@stop