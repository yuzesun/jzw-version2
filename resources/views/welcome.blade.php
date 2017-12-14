<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JZW International</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <style>

        .m-b-md {
            margin-bottom: 30px;
        }

        .w3-bar  {
            padding: 4px;
        }

        #myBtn {
            display: none;
            position: fixed;
            bottom: 99px;
            right: 30px;
            z-index: 99;
            border: none;
            outline: none;
            background-color: #2c96ff;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 10px;
        }

        #myBtn:hover {
            background-color: #21d4ff;
        }

        html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
    </style>
</head>
<body>

<div class="w3-top">
    <div class="w3-bar w3-white w3-left-align w3-large w3-card-2">
        <a href="{{ url('/') }}"><img src={{asset('/images/jzw_logo.jpg')}} width="200" height="45"></a>
        <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-blue-gray" title="Account Log In"><i class="fa fa-user"> Login</i></a>
        <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-blue-gray" title="Account Register"><i class="fa fa-telegram" aria-hidden="true"> Register</i></a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-blue-gray" title="Services"><i class="fa fa-ship" aria-hidden="true"></i> Services</a>
        <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-blue-gray" title="Products"><i class="fa fa-barcode" aria-hidden="true"></i> Products</a>
    </div>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">My Profile</a>
</div>

<script src="{{ asset('js/nav.js') }}"></script>

</body>
</html>
