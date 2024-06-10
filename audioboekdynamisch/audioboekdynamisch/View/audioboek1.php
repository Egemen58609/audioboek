<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="refresh" content="16;url=audioboek6.php" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
            font-family: moonflower;
            src: url(moon_flower/moonflower.ttf);
        }
        body {
            background-image: url(achtergrond.png);
        }
        .kop {
            padding-top: 250px;
            padding-left: 500px;
        }
        h1 {
            font-family: moonflower;
        }
        .tekst{
    position: absolute;
    display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.tekst:nth-child(1){
    animation: fade ease 7s alternate-reverse both;
}

.tekst:nth-child(2){
    animation: fade ease 7s alternate both;
}

 .tekst:nth-child(3){
    animation: fade ease 13s alternate both;
}

.tekst:nth-child(4){
    animation: fade ease 24s alternate both;
}

@keyframes fade{
    0%, 50% {opacity: 0;}
    90% {opacity: 1;}
    100% {opacity: 0;}
}
    </style>
</head>
<body>
<div class="kop">  <h1 class="tekst"> Er was eens.... </h1> 
    <h1 class="tekst">EEN INTERACTIEF LUISTERBOEK</h1> 
    <h1 class="tekst">Gemaakt door mbo-studenten van ROC RIVOR</h1>
    <h1 class="tekst">ZO WERKT HET</h1>
    

</body>
</html>