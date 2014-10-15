<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Rocket App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link rel="stylesheet" href="{{ url('asset/bootstrap/css/bootstrap.css')}}">
    <!-- Loading Flat UI -->
    <link rel="stylesheet" href="{{ url('asset/css/flat-ui.css')}}">
    {{ HTML::style('assets/css/admin.css') }}
    
    
    @if(Auth::check())
      {{ HTML::style('assets/css/datepicker.css') }}
      {{ HTML::style('assets/css/select2.css') }}
      {{ HTML::style('assets/css/select2-bootstrap.css') }}
      {{ HTML::script('assets/js/bootstrap-datepicker.js', array('defer' => 'defer')) }}
      {{ HTML::script('assets/js/bootstrap-datepicker.pt-BR.js', array('defer' => 'defer')) }}
      {{ HTML::script('assets/js/select2.min.js', array('defer' => 'defer')) }}
      {{ HTML::script('assets/js/select2_locale_pt-BR.js', array('defer' => 'defer')) }}
      {{ HTML::script('assets/js/jquery.mask.min.js', array('defer' => 'defer')) }}
      {{ HTML::script('assets/js/main.js', array('defer' => 'defer')) }}
    @else
      <link rel="stylesheet" href="{{ url('asset/css/demo.css') }}">
    @endif
    <link rel="shortcut icon" href="{{ url('asset/images/icons/mg/32/PNG/32/rocket.png') }}">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
        @if(Auth::check())
          <div class="navbar navbar-inverse navbar-fixed-top">
          
            @include('partials._navigation')
          
          </div>
        @endif
        {{ HTML::flash_message() }}
		    @yield('content')
    </div>
    <!-- /.container -->


    <!-- Load JS here for greater good =============================-->
     {{ HTML::script('asset/js/jquery-1.8.3.min.js', array('defer' => 'defer')) }}
     {{ HTML::script('asset/js/jquery-ui-1.10.3.custom.min.js', array('defer' => 'defer')) }}
     {{ HTML::script('asset/js/jquery.ui.touch-punch.min.js', array('defer' => 'defer')) }}
     {{ HTML::script('asset/js/bootstrap.min.js', array('defer' => 'defer')) }}
     {{ HTML::script('asset/js/bootstrap-select.js', array('defer' => 'defer')) }}
     {{ HTML::script('asset/js/bootstrap-switch.js', array('defer' => 'defer')) }}
     {{ HTML::script('asset/js/flatui-checkbox.js', array('defer' => 'defer')) }}
     {{ HTML::script('asset/js/flatui-radio.js', array('defer' => 'defer')) }}
     {{ HTML::script('asset/js/jquery.tagsinput.js', array('defer' => 'defer')) }}
     {{ HTML::script('asset/js/jquery.placeholder.js', array('defer' => 'defer')) }}
    
  </body>
</html>