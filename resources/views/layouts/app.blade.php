<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Satu Peta</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.css') }}" rel="stylesheet">
    <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-datepicker.min.css') }}" rel="stylesheet">




    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{asset('images/seira.png')}}"
                         class="user-image img-circle elevation-2" alt="User Image">
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="{{asset('images/seira.png')}}"
                             class="img-circle elevation-2"
                             alt="User Image">
                        <p>
                            {{ Auth::user()->name }}
                            <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                        </p>
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat float-right"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="/logout" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.0.5
        </div>
        <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
        reserved.
    </footer>
</div>



<script src="{{ asset('js/app.js') }}" defer></script>
<script src="{{ asset('js/toastr.min.js') }}" defer></script>
<script src="{{ asset('js/moment.min.js') }}" defer></script>
<script src="{{ asset('js/daterangepicker.js') }}" defer></script>
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}" defer></script>
<script src="{{ asset('js/jquery.knob.min.js') }}" defer></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
    
    $(function () {

            $('#reservation').daterangepicker()

            $('#datepicker').datepicker({
              autoclose: true,
              format: 'yyyy-mm-dd'
            })

            $('.knob').knob()

            //Temperature Color
            var note_temperature = $('#noteTemperature').val();
            if(note_temperature == "Normal"){
              $('#knob-temp').trigger(
                 'configure',
                  {
                    "fgColor":"#00a65a"
                }
              );            
            }else if(note_temperature == "Cool"){
              $('#knob-temp').trigger(
                 'configure',
                  {
                    "fgColor":"#00c0ef"
                }
              ); 
            }else{
              $('#knob-temp').trigger(
                 'configure',
                  {
                    "fgColor":"#f56954"
                }
              );
            }

            //Humidity Color
            var note_humidity = $('#noteHumidity').val();
            if(note_temperature == "Normal"){
              $('#knob-humi').trigger(
                 'configure',
                  {
                    "fgColor":"#00a65a"
                }
              );            
            }else if(note_temperature == "Wet"){
              $('#knob-humi').trigger(
                 'configure',
                  {
                    "fgColor":"#00c0ef"
                }
              ); 
            }else{
              $('#knob-humi').trigger(
                 'configure',
                  {
                    "fgColor":"#f56954"
                }
              );
            }

            //Soil Moisture
            var note_soil = $('#noteSoil').val();
            if(note_soil == "Normal"){
              $('#knob-soil').trigger(
                 'configure',
                  {
                    "fgColor":"#00a65a"
                }
              );            
            }else if(note_soil == "Wet"){
              $('#knob-soil').trigger(
                 'configure',
                  {
                    "fgColor":"#00c0ef"
                }
              ); 
            }else{
              $('#knob-soil').trigger(
                 'configure',
                  {
                    "fgColor":"#f56954"
                }
              );
            }

            //Light Intencity
            var light_intencity = $('#noteLight').val();
            if(light_intencity == "Normal"){
              $('#knob-light').trigger(
                 'configure',
                  {
                    "fgColor":"#00a65a"
                }
              );            
            }else if(light_intencity == "Dark"){
              $('#knob-light').trigger(
                 'configure',
                  {
                    "fgColor":"#080a0f"
                }
              ); 
            }else{
              $('#knob-light').trigger(
                 'configure',
                  {
                    "fgColor":"#c6c914"
                }
              );
            }

    /* END JQUERY KNOB */

     });

</script>


@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>
