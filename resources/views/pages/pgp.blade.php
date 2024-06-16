@extends('master.main')

@section('title','Home Page')

@section('content')

{{--@include('includes.search')--}}

<div class="row">

    <div class="col-md-9 col-sm-12 mt-3 ">

        <h2>PGP</h2>
        <p>Warning: In order to use this market, you need to add your PGP key. Users wihout a PGP key can only browse listings and may be deleted at some point.&nbsp;</p>
        <p>If you are an established vendor you MUST use the same PGP key as you use on the other markets. Accounts using different PGP keys will be considered imposters and deleted. If you have an obsolete PGP key that is not accepted explain that in your vendor application and we will use a different verification method.</p>
        <p>Important!</p>
        <p>- If you are a buyer, is recommended to generate a new PGP key pair for this market.</p>
        <p>- You can use the site username as key&apos;s name and leave the email field empty, to identify the key easier.</p>
        <p>- Do not lose your private key as you will lose access to your account!</p>
        <p>- Remove all comments from your PGP key.</p>
        <p>- DO NOT use your real name or email address when generating your public key!</p>
        <p><br></p>
        <h3>Use This Main PGP </h3>

        <textarea id="w3review" disabled=disabled name="w3review" rows="20" cols="70">
------BEGIN PGP PUBLIC KEY BLOCK-----

xsBNBGE3Z8IBCACuJSEVCHHu8eD8ixP4bG/HQqFXp3En2bqojxCyDs7npFkU
gvpogP/JOdRPGUjPgvvb0ySEVTVNHxkPktPUZ0xEzubkyYjX+Ew07qWUe6QH
U+CPyDo0HaqQ+aLORIQ8JgXlXC2lUbc4rsN6fKaTgni4ciZop2LZ4BEWCM/E
ylteOZhA9Hc6vCDsguqoH+C5GUC27ASfA//+5DcVPvnykHwWKVR6/LvPhSX0
sFbDRIroyRhG6Wl01F6EqeLHY2QYrznwTK2eKImwsJLcFaZjBYM3nnKq+ons
/pqFFQzwAsgFhNnqyz/YTU8c0tWvN0M5B4bGWRxTEHq+0xCDyoGAvX+zABEB
AAHNAMLAigQQAQgAHQUCYTdnwgQLCQcIAxUICgQWAgEAAhkBAhsDAh4BACEJ
EJEMJBAlIuNrFiEEPLhokYLGvmEXu8tekQwkECUi42tkqgf9E+GDziD9oO2B
rF+JHKajcEG8o+WFneA1FTJgq0Go3VsyrJK4VqbK8XrOqI0ErFLsZQndUqXx
S+W5r6EUtAKm4ZvodK2dpdYy7JpwZLEwUMY5+ugYrtT96UZRbHvwyxbxT0br
ABgLquLbUOMjnRfs/R2K6GQYX3bBFxbuw12b3RFPXyYb1UmXWhClREmsdDg2
C2zMFOgm4dNExxIjJfaTrbdKsDImJlkfOjNPdeP8702NbbHt1Opjc4PIBb95
snh0xpdYsK2IoXScWQJ1bD4Qwwn5UA5Ixn3TPnfo69xf5/zxSNu6SbS47GGB
RfsxLcl047rF52lx/tZUXL9dH1M+OM7ATQRhN2fCAQgAw0bdBFtdxS4pVBz0
wAnPNEVLr1R1ALNI07cx+Oqo7fXzBjfUbJ1gOnkS0IOcqMv3HflAuJBHrtPm
VkyAEzAxlo8GaAV/yk1q8ILPk4d8bMpi+gr/4QENEvzOXR2iVIichrVcaQ9i
CVmhS3Yls9C6TQedx3c+TJLGigiAJHNlbKnbUYu0LxQjcjmPoKRh2c7Lts+1
Nyl98EHaa5eMwpEEbIr1lAvKjaTn/V6cyVKSgOrK/xn/ahA9Mk6+o/VBdgPN
QgHhvxpMqKTUqDCVI8tATIrDVp5j9oZb+GehXPu/kCd+oT6Zny5AN3yPSRwE
HVXzh2OLHodVrcKO8LkC1iTyKwARAQABwsB2BBgBCAAJBQJhN2fCAhsMACEJ
EJEMJBAlIuNrFiEEPLhokYLGvmEXu8tekQwkECUi42t6hwf/T+VNdeSAlD4q
XLBBOM2s/UuU8hIFeNWiBdPem06K59UdqyBak0u6iz+D9MXlWwB4P4e7WRX9
UB3ynm/OP6dzdx4LVSQ2xj9Kk11i+AOYWbbWo0hb9/G4F3gWurxNYdys1e58
7r8XGu8J4nmHz/U5mPeGEXwwKgYW9gTqVybn2pFp3/5jLX3CJPgpa0fAMJHp
e5C4f2UEz/mSBAwtxddjIq98AvmsfjeZP29FMtXva1wNu2j+ww4TP3IUmAsu
aQK2i48koSB2DsVgaChPxBDTfNWOIituh0Qvkzpdu4gKT8gqEv/Hk5kT/qLr
CvtpGauz18n8jMY2SkjkDqYL1THZ0g==
=1+G3
-----END PGP PUBLIC KEY BLOCK-----

        </textarea>

    </div>
</div>
@stop