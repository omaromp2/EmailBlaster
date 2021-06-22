<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        {{-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> --}}
        <meta name="viewport" content="initial-scale=1">

        <title>EmailBlaster</title>

        <!-- Fonts -->
        <!-- Styles -->
        {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> --}}
        {{-- <link rel="stylesheet" href="css/bootstrap.min.css"> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">

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
                /* Version 1 del doc */
                /* background: url('img/certs2.png') no-repeat center center fixed; */
                background: url('img/certs3.png') no-repeat center center fixed;
                background-size: cover; /* Resize the background image to cover the entire container */
                height: 100%;
                overflow: hidden;
            }
            #content {
                display: block;
                margin-top:0em;
            }
            #mainCont{
                text-align: center;
            }
            .usrname {
                font-family: 'hickory';
                font-size: 70px;
                padding-top: 200px;
                text-align: center;
                margin-top: 50px;
                margin-bottom: 0px;
            }
            .usrnameBIG {
                font-family: 'hickory';
                font-size: 50px;
                padding-top: 200px;
                text-align: center;
                /* padding-left: 55px; */
                /*justify-content: center;*/
                /*text-align: center;*/
                /* margin-left: 115px; */
                margin-right: 25px;
                margin-top: 50px;
                margin-bottom: 0px;
            }

            .line{
                height: 2px;
                background-color:black;
                width: 75%;
                margin-left: 10%;
                margin-botom:none;
                margin-top:none;
            }

            .planTra{
              margin-top: 175px;
              color: white;
              text-align: right;
              font-size: 12px;
              padding-left:8em;
            }
            .tema{
                text-align: justify;
                margin-left: 30px;
            }

        </style>
    </head>
    <body id="mainContent">

        {{-- <div class="row ">
            <div class="col-6" id="mainCont" >

                @if(strlen($nombre_de_participante) >= 15)
                    <p class="usrnameBIG"> {{ $nombre_de_participante }} </p>
                @else
                    <p class="usrname"> {{ $nombre_de_participante }} </p>
                @endif

                <hr size="300" width="95%" align="center" style="height:16px" color="black" >
                <div id="content" >
                    <p>HA PARTICIPADO DEL SERVICIO: {{ $modalidad }} </p>
                    <h5> {{ $tema }} </h5>
                    <p> {{ $fecha_final_servicio }} </p>
                    <p> <b>Horas Contacto: </b>  {{ $horas_contacto }} horas </p>
                </div>
            </div>
            <div class="col-6"></div>
        </div> --}}


        <div class="columns">
            <div class="column is-three-fifths" id="mainCont" >

                @if(strlen($nombre_de_participante) >= 15)
                    <p class="usrnameBIG"> {{ $nombre_de_participante }} </p>
                @else
                    <p class="usrname"> {{ $nombre_de_participante }} </p>
                @endif
                <hr class="line" >
                <div id="content" >
                    <p>
                        HA PARTICIPADO DEL SERVICIO: {{ $modalidad }}
                    </p>
                    <br>

                    <div class="columns">
                        {{-- <div class="column is-2 "></div> --}}
                        <div class="column is-offset-2 is-two-thirds">
                            <h5> <b class="tema">{{ $tema }}</b> </h5>
                        </div>

                    </div>

                    <p> {{ $fecha_final_servicio }} </p>
                    <p> <b>Horas Contacto: </b>  {{ $horas_contacto }} horas </p>
                </div>
            </div>
            <div class="column"></div>
        </div>

        <div class="columns is-mobile">
            <div class="column is-8 is-offset-2 planTra ">
              <p> {{ $plan_de_trabajo }} </p>
              <p><b> {{ $nombre_proyecto }} </b></p>
            </div>
        </div>


    </body>
</html>
