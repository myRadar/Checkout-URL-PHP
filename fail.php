<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <style>
          div{
            text-align: center;
             }
    </style>
</head>

<body>
    <div>
        <h1>Payment Failed.</h1>
        <?php if(isset($_GET['statusMessage'])){
            echo $_GET['statusMessage'];
        }
            ?>
    </div>

</body>

</html>