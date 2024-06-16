@extends('master.main')

@section('title','Home Page')

@section('content')

{{-- resources/views/your/blade/view.blade.php --}}
{{-- @include('includes.search') --}}

<div class="row">
    <div class="col-md-9 col-sm-12 mt-3">
        <h2>About us:</h2>

        {{ $btcprice }}
    </div>
</div>


        <!--{{ @btcprice }}--><pre style='font-family: "Liberation Mono", monospace; font-size: 10pt; background: transparent; color: rgb(0, 0, 0); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;'>About / Features

    We will also suspend any user trying to steal a known identity
    Javascript warning: Javascript must be disabled in order to access this market (and for any dark net activities). If you have Javascript enabled, a warning will be shown and you won&apos;t be able to proceed. Javascript should be disabled browser wide. If you use the &quot;NoScript&quot; plugin the Javascript error my be shown for a short time until the plugin kicks in. This is normal and it should not be a concern, however we strongly recommend disabling Javascript browser wide:
    - Type &quot;about:config&quot; in your Tor browser address bar.
    - Search for &quot;javascript.enabled&quot;.
    - Set it to &quot;false&quot;.
    Our goal is to create a simple user experience while maintaining a high level of security and anonymity.
    Everything is written from scratch. No public market script.
    Simple, intuitive design without unnecessary bells and whistles.
    Bug Bounty program.
    Fast customer service. If we get overloaded, we will suspend registration until we get more moderators or until we clear our backlog.
    The official language is English. We may also offer limited support in other languages.
    Both Tor and I2P mirrors.
    No withdrawal limits, except if the amount is lower then the network fee. In that case the withdrawal will be returned to your wallet.
    5% fee for transactions, no fee for buyers. This is a flat fee for finalized orders only. No hidden fees, no deposit fees, no withdrawal fees. For high volume vendors, fee can be negotiated.
    Listing prices are in USD,EUR,AUD and CAD the exchange is calculated when ordering. BTC and XMR to fiat rates are updated periodically.
    We do private listings. Can be used for custom orders/discounts to specific buyers.
    Quick listing clone/duplicate.
    Idle timeout selected at login.
    Vendors will need to apply their Pgp key and also place a bond for their position within the website. Vendors will also accept 10% fee for every purchase. 
    Detailed logging of failed sign in attempts. You will be able to see of someone tried to sign in to your account and what credentials were wrong (password or 2fa). Logs are kept for limited time.
    Simple image-based captcha, very easy to solve for humans yet hard for bots.
    Partial refunds, can be issued by admins in case of a dispute.
    PGP signed mirror list / market statement / canary with proof of freshness, updated at least once every 72 hours.
    Deposit addresses are PGP encrypted and signed to deter MITM phishing.
    Configurable, PGP encrypted jabber/xmpp notifications, for both vendors and buyers.
    Configurable, PGP encrypted email notifications, for both vendors and buyers.
    Private jabber server.
    For now we only support escrow. We may add multisig if enough users request it.
    Except for some generic administration messages, no plaintext communication is allowed. You will not be able to use this market without a PGP key.
    PGP challenge-response two factor authentication.
    Extra 2fa step for critical pages.
    All messages are truly end to end encrypted, so are the attached files. Nobody except the sender and the receiver will have access to your communication, not even us. At the time of this writing we are the only market enforcing end to end encryption.

    We assume that any server can be hacked or seized eventually, so we don&apos;t want to keep more data our servers then we need to.
    What is kept in plaintext:
        Listing information (title, description, pictures, price, shipping).
        User names.
        Sign in logs (for limited time).
        Limited order information history, buyer, order totals.
        Limited feedback information.
        Bitcoin,Monero deposit and withdrawal addresses (for limited time).
        Generic admin messages (for limited time).
        Message subjects (both between users and support tickets,for limited time).
        Public PGP keys.
        Jabber/XMPP addresses used for notifications.
        Email addresses used for notifications.
    What is kept encrypted:
        Order details (shipping / delivery info or notes, kept for a limited time).
        User passwords.
        No Messages from PGP encryption are kept
    If a user decides to close his account, all information related to that specific user/account will be purged.
    No PGP private keys are kept on the servers.
    No Bitcoin and Monero private keys are kept on the servers.
    Main wallet is only kept offline. Because of this, we verify/process all withdrawals in batches, within 24 hours, usually much faster.
    We take periodic backups of databases, including wallets, orders, attached files.
    Those measure ensure that even in the event our servers are compromised/seized:
        No plaintext messages will be recovered.
        No coins will be seized.
        The attacker can only view the wallet balance, but he will not be able to transfer any funds.
        We can be up and running in no time, and no order information will be lost.
    For active, high volume users (buyers):
        We will give you a dedicated, authenticated .onion domain.
        This way, if our public mirrors are getting DDOS-ed, you will still be able to access your account and do business.
        We are also considering giving dedicated, authenticated domains to every active user (any user that has made at least a deposit or sale), this way a determined DDOS-er will not disturb our business, at least not too much.
    Messages will be deleted after 3 days (unread messages included).
    Sent messages are not saved. If you need them, you need to save them locally.
    Time zone is UTC, 24 hour time format.
    If you want a specific feature implemented, please feel free to contact us. We are always open to good ideas as long as they don&apos;t lower out security standards.</pre>
    </div>
</div>

@stop