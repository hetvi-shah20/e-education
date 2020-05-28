<!DOCTYPE html>
<html>
    <head>
        <title>Be right back.</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
             
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
               
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
                font-size: 72px;
                margin-bottom: 40px;
            }
            .close {
                    cursor: pointer;
                    position: absolute;
                    top: 50%;
                    right: 5%;
                    font-size: 20px;
                    padding: 12px 35px;
                    transform: translate(0%, -50%);
                 }
            .bbttn{
                font-weight: bold;
                font-size:13px;
                font-family: 'Lato', sans-serif;
            }


        </style>
    </head>
    <body>
       
            <div class="alert alert-danger">
               <div class="bbttn">{{$errors->first()}}</div>
                <button type="button"  class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div>
            
    </body>
</html>
