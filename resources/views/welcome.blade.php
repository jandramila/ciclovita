<!DOCTYPE html>
<html>
    <head>
        <title>Ciclovita</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                background-color: black;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            div.building-image{
                height: 100%;
                width: auto;
            }

            img.building-image-image{
                height: 650px;
                width: auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="building-image">
                    <img class="building-image-image"
                         src="{{asset('images/en_construccion.jpg')}}">
                </div>
            </div>
        </div>
    </body>
</html>
