<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <!-- Script below cause dropdown button out of function -->
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>--}}
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
          integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
          crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Allan' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Didact Gothic' rel='stylesheet'>
</head>

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

</style>

<body style="padding-top: 75px;">
    <div id="">
        <div class="w3-top">
            <div class="w3-bar w3-white w3-left-align w3-large w3-card-2 w3-padding">
                <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
                @guest
                    <a href="{{ url('/') }}"><img src={{asset('/images/jzw_logo.jpg')}} width="200" height="45"></a>
                    <a href="{{ route('login') }}" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-blue-gray" title="Account Log In"><i class="fa fa-user"> Login</i></a>
                    <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-blue-gray" title="Account Register"><i class="fa fa-telegram" aria-hidden="true"> Register</i></a>
                @elseif (Auth::user()->role_id == 1 OR Auth::user()->role_id == 2 OR Auth::user()->role_id == 3)
                    <a href="{{ url('/home') }}"><img src={{asset('/images/jzw_logo.jpg')}} width="200" height="45"></a>
                    <div class="w3-dropdown-hover w3-hide-small w3-right" style="right: 0;">
                        <button class="w3-button w3-hover-blue-gray" title=""><i class="fa fa-user-circle" aria-hidden="true"></i> {{ Auth::user()->first_name }} </button>
                        <div class="w3-dropdown-content w3-card-2 w3-bar-block" style="right:0;">
                            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none;"><i class="fa fa-address-card" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Profile</a>
                            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none;"><i class="fa fa-database" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Orders</a>
                            <a href="{{ route('logout') }}" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                                &nbsp;&nbsp;Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>

                    <div class="w3-dropdown-hover w3-hide-small w3-right" style="right: 0;">
                        <button class="w3-button w3-hover-blue-gray" title=""><i class="fa fa-user-circle" aria-hidden="true"></i> JZW International </button>
                        <div class="w3-dropdown-content w3-card-2 w3-bar-block" style="min-width: 100px;">
                            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none;"><i class="fa fa-address-card" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Dashboard</a>
                            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none;"><i class="fa fa-database" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Orders</a>
                            <a href="{{url('organization')}}" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none;"><i class="fa fa-microchip" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Organizations</a>
                            <a href="{{url('branch')}}" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none;"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Branches</a>
                        </div>
                    </div>
                    <div class="w3-dropdown-hover w3-hide-small w3-right" style="right: 0;">
                        <button class="w3-button w3-hover-blue-gray" title=""><i class="fa fa-home" aria-hidden="true"></i> Properties </button>
                        <div class="w3-dropdown-content w3-card-2 w3-bar-block" style="min-width: 100px;">
                            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none;"><i class="fa fa-address-card" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Dashboard</a>
                            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none;"><i class="fa fa-handshake-o" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Customers</a>
                            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none;"><i class="fa fa-address-book" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Companies</a>
                            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none;"><i class="fa fa-history" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Histories</a>
                        </div>
                    </div>
                @else
                    <a href="{{ url('/home') }}"><img src={{asset('/images/jzw_logo.jpg')}} width="200" height="45"></a>

                    <div class="w3-dropdown-hover w3-hide-small w3-right" style="right: 0;">
                        <button class="w3-button w3-hover-blue-gray" title=""><i class="fa fa-user-circle" aria-hidden="true"></i> {{ Auth::user()->first_name }} </button>
                        <div class="w3-dropdown-content w3-card-2 w3-bar-block" style="min-width: 100px; right:0;">
                            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none;"><i class="fa fa-address-card" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Profile</a>
                            <a href="#" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none;"><i class="fa fa-database" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Orders</a>
                            <a href="{{ route('logout') }}" class="w3-bar-item w3-button w3-hover-blue-gray" style="text-align: left; text-decoration: none"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>
                                &nbsp;&nbsp;Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                @endguest
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-blue-gray" style="text-decoration: none" title="Services"><i class="fa fa-ship" aria-hidden="true"></i> Services</a>
                    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-blue-gray" style="text-decoration: none" title="Products"><i class="fa fa-barcode" aria-hidden="true"></i> Products</a>
            </div>
        </div>

        <!-- Navbar on small screens -->
        <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium w3-large">
            <a href="#" class="w3-bar-item w3-button w3-padding-large" style="text-align: center;">Order Dashboard</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large" style="text-align: center;">Property Dashboard</a>
            <a href="#" class="w3-bar-item w3-button w3-padding-large" style="text-align: center;">My Profile</a>
        </div>


        @yield('content')
    </div>

    <script src="{{ asset('js/nav.js') }}"></script>

</body>
</html>
