<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .close {
                    cursor: pointer;
                    position: absolute;
                    padding-top:10px;
                    left:95%;
                    font-size: 20px;
                    padding: 12px 35px;
                    transform: translate(0%, -50%);
                 }
    </style>
</head>
<body>
<div class="alert alert-danger ">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    {{$errors->first()}}
</div>
</body>
</html>

