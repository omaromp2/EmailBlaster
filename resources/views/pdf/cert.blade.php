<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> --}}
        <meta name="viewport" content="initial-scale=1">

        <title>EmailBlaster</title>

        <!-- Fonts -->
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <style>
            @font-face {
                font-family: "hickory";
                /* src: url("https://www.dafont.com/search.php?q=hickoryjack"); */
                src: url('fonts/Hickory.ttf');
                }

            body, html {
              height: 100%;
              margin: 0;
            }

            #mainContent {
                padding-top: 5em;
                background: url('img/certs1.png') no-repeat center center fixed;
                background-size: cover; /* Resize the background image to cover the entire container */
                height: 100%;
                overflow: hidden;
            }
            #content {
                display: block;
                margin-left: 95px;
            }
            #mainCont{
                text-align: center;
            }
            .usrname {
                font-family: 'hickory';
                font-size: 50px;
                padding-top: 200px;
                text-align: center;
                padding-left: 50px;
                margin-top: 50px;
                /*justify-content: center;*/
                /*text-align: center;*/
                /*margin-left: 115px;*/
                margin-bottom: 0px;
            }
            .usrnameBIG {
                font-family: 'hickory';
                font-size: 40px;
                padding-top: 200px;
                text-align: center;
                padding-left: 50px;
                /*justify-content: center;*/
                /*text-align: center;*/
                /*margin-left: 115px;*/
                margin-top: 50px;
                margin-bottom: 0px;
            }

        </style>
    </head>
    <body id="mainContent">

        <div class="row ">
            <div class="col-6" id="mainCont" >

                @if(strlen($nombre_de_participante) >= 15)
                    <p class="usrnameBIG"> {{ $nombre_de_participante }} </p>
                @else
                    <p class="usrname"> {{ $nombre_de_participante }} </p>
                @endif

                {{-- <p class="usrname" > {{ $nombre_de_participante }} </p> --}}

                {{-- <hr size="250" width="95%" align="center" style="height:12px" > --}}
                <hr style="height: 12px" >
                <div id="content" >
                    <p>Ha participado de: {{ $modalidad }} </p>
                    <h4> {{ $tema }} </h4>
                    <p> {{ $fecha_final_servicio }} </p>
                    <p>Horas Contacto: {{ $horas_contacto }} </p>
                </div>
            </div>
            <div class="col-6"></div>
            {{-- <div class="col-4"></div> --}}
        </div>

        {{-- <div class="container">
          <div class="row">
            <div class="col-4">
             <div class="p-3 border bg-light">Custom column padding</div>
            </div>
            <div class="col-4">
              <div class="p-3 border bg-light">Custom column padding</div>
            </div>
          </div>
        </div> --}}

    </body>
</html>
