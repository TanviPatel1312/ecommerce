<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>E-Comm Project</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
{{View::make('header')}}
@yield('content')
{{View::make('footer')}}
</body>
<style>
    .custom-login{
        height: 600px;
        padding-top: 100px;
    }

    .header{
        font-size: large;
    }
    .img{
        width: 700px;
    }
    .slider-img{
        height: 400px; !important;
    }
    .footer{
        padding-top: 800px;
    }
    .slider-text{
        background: darkblue;
    }
    .trending-img{
        height: 100px;
    }
    .trending-item{
        float: left;
        width: 20%;
    }
    .row {
        display: flex;
        flex-wrap: wrap;
    }

    /*.row > div[class*='col-'] {*/
    /*    display: flex;*/
    /*}*/
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px; !important;
    }
    .search-product{
        align-content: center;
    }

</style>

</html>
