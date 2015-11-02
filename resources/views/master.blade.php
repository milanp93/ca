<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="description" content="description"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Food &amp; Recipes Web Template></title>
    <link rel="stylesheet" href="{{asset('css/StyleSheet.css')}}">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="row jumbotron">
        <div class="col-md-6 col-xs-12">
            <a href="index.php"><img src="{{asset('images/thecookingorg.png')}}" style="max-height: 200px; width: auto"
                                     alt="Logo"/></a>
        </div>
        <div class="col-md-6 col-xs-12 input-group">
            <div id="custom-search-input">
                <div class="input-group col-md-12" style="align-content: center;">
                    <input type="text" class="form-control input"
                           placeholder="Search from our 10,000+ Recipes around the world"/>
            <span class="input-group-btn">
              <button class="btn btn-info btn-lg" type="button">
                  <i class="glyphicon glyphicon-search"></i>
              </button>
            </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @yield('content')
        @if(!Auth::user() || Auth::user()->type == 0)
            <div class="row">
                <div class="col-lg-12">
                    <div class="ads-example margin-top15">GOOGLE ADS</div>
                </div>
            </div>
        @endif
        <div class="row footer">
            <p>&copy; Copyright {!! date('Y') !!}. All rights reserved</p>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>
    $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $(document).ready(function(){
        $('#recepies').DataTable();
    });
</script>
<script src="{{asset('js/jquery.toast.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
@include('errors')
</body>
</html>
