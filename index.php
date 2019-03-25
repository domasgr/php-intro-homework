<?php

    require 'vendor/autoload.php';

    use function Nfq\Akademija\Not_Typed\calculateHomeWorkSum as calculateHomeWorkSum2;
    use function Nfq\Akademija\Soft\calculateHomeWorkSum as calculateHomeWorkSum3;
    use function Nfq\Akademija\Strict\calculateHomeWorkSum as calculateHomeWorkSum4;

    $sum1 = calculateHomeWorkSum(3,2.2,'1');
    $sum2 = calculateHomeWorkSum2(3,2.2,'1');
    $sum3 = calculateHomeWorkSum3(3,2.2,'1');
    $sum4 = calculateHomeWorkSum4(3, 2.2, '1');
    
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
     <style>
        span{
            color: red;
        }
     </style>
 </head>
 <body>
    <h1>Funkcijos</h1>

     <h3>
        calculateHomeWorkSum: <span><?php echo $sum1 ?></span>
     </h3>
     <h3>
        Nfq\Akademija\Not_Typed\calculateHomeWorkSum: <span><?php echo $sum2 ?></span>
     </h3>
     <h3>
        Nfq\Akademija\Soft\calculateHomeWorkSum: <span><?php echo $sum3?></span>
     </h3>
     <h3>
        Nfq\Akademija\Strict\calculateHomeWorkSum: <span><?php echo $sum4?></span>
     </h3>
 </body>
 </html>   
    