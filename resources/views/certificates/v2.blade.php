<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>
    <link href="https://fonts.googleapis.com/css2?family=Lovers+Quarrel&family=Roboto:ital,wght@0,400;0,700;0,900;1,500&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="/css/cert%20one.css">
</head>
<body>
<div class="container">
    <div class="certificate">
        <div class="bg bg1"><img src="/img/Vector-3.png" alt="" srcset=""></div>
        <div class="bg bg2"><img src="/img/Vector-6.png" alt="" srcset=""></div>
        <div class="bg bg3"><img src="/img/Vector-4.png" alt="" srcset=""></div>
        <div class="bg bg4"><img src="/img/Vector-5.png" alt="" srcset=""></div>

        <div class="header">
            <img class="side-img" src="/img/image-1.png">
            <span class="side-text">HNG Internship</span>
            <p>
                <small> Issued on the 16th of September 2020</small>
            </p>
        </div>

        <div class="user-info">
            <div class="certified">
                <h2>Certificate Of Completion</h2>
                <p> This certificate is presented to</p>
            </div>

            <h1>{{$certificate->first_name}} {{$certificate->last_name}}</h1>
            <hr class="name-line">
            <p class="purpose">For the successfully completing HNGi7 as a</p>
            <h2>{{$certificate->track}}</h2>
        </div>

        <div class="footer">
            <div class="verify">
                <p>Verfiy at <a href="">hng.com/certificates/xGhniJH</a></p>
                <small>Hotels.ng Internship has verified that this individual has completed to a degree the 8th Edition
                    of the HNG Internship
                </small>
            </div>
            <div class="signature">
                <p class="sign-name">Seyi Onifade</p>
                <hr class="line">
                <small>CEO HNG Internship</small>
            </div>
        </div>

        <div class="bg-img2"><img src="/img/Vector-2.png" alt="" srcset=""></div>
    </div>
    @if($certificate->downloadable == 1)
        <form action="/generate-pdf" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$certificate->hngi_id}}">
            <button class="btn btn-success">Download</button>
        </form>
    @endif
</div>
</body>
</html>