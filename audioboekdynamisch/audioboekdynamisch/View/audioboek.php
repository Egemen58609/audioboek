<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
    @font-face{
    font-family: moonflower;
    src: url('moon_flower/moonflower.ttf');
}

    body {background-image: url(achtergrond.png)};
    body {
        font-family: moonflower;
    }
    h2 {
        font-family: moonflower;
    }
button {
    font-family: moonflower;
    font-size: 350%;
    border: none;
}
   .kop {
       width: 50%;
       float: right;
    
   }
   .kopje {
       padding: 100px;
   }
   h1 {color: darkgreen;
font-family: moonflower;}
   .kope {
       float: right;
       
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
<body>
     <img src="afbeeldingHoofdstuk1-FIX.png" style="float: right;" alt="" width="40%" >
  <img src="titel.png" alt="" width="50%" height="50%">
 <h1>EEN INTERACTIEF LUISTERBOEK</h1>
<a href="audioboek1.php">
 <div class="kope"> <button>Start</button> </div>
</a>

</body>
</html>

