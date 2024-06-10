

<!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>

    @font-face{
    font-family: moonflower;
    src: url(view/images/moon_flower/moonflower.ttf);
}

    body {background-image:url(view/images/achtergrond.png)};
   body {
       font-family: moonflower;
       
   }
    h1 {
        font-family: moonflower;
        color: rgb(238, 0, 238);
        font-size: 60px;
        float: right;
    }

    p {
        font-family: moonflower;
        color: rgb(0, 0, 0);
        font-size: 60px;
        float: middle;
        
    }

    .frame
    {
      top: 0;
      left: 20px;
      z-index:10;
      width: 20px;
      margin: -46px -30px;
      padding-left: 10px;
      padding-bottom: 50px;

           
    }
    .student
    {
      position: absolute;
      top: -45px;
      left: 0px;
      
    }
    .bt {
        transform: rotate(-180deg);
        padding-bottom: -30px;
        padding-left:30px;
        padding-right: 1200px
        
    }
    .div {
        width: 40%;
        float: right;
        mix-blend-mode: multiply;
        
        
        
    }
    .div1 {
        width: 100px;
        height: 0px;
        z-index:11;
        padding-top: 50px;
        
        
        
    }
    .kopje3 {
font-family: moonflower;
font-size: 60px;
color: #d300e6;
padding: 20px}

.kopje4 {
    color: #d300e6;
}

</style>
</head>
<body>
  <div class="div">  
<img src=" <?php echo $hoofdstuk['hoofdstuk'] ?>" /> </div>
<div class="kopje3">
<?php echo $hoofdstuk['titel'] ?>
</div>
<div class="div1">
        <img src=" <?php echo $hoofdstuk['fotostudent'] ?>" />
        </div>
        <div class="frame">
      <img src=" View/images/pictureFrame.png "/>
      </div>
        



<img src="View/images/zwartePijl.png" alt="" height="100px" width="80px" > 
<p>En ik lees dit hoofdstuk</p>
<p><?php echo $hoofdstuk['naam'] ?></p>
<audio controls autplay>
<source src="<?= $hoofdstuk ['fragment']?> "type="audio/mp4">
</audio>
<?php

$vorige = $index -1;

if($vorige < 0 || $index == 22){
    if($index == 0){
        echo "<a href='?id=22'><img class = '' src='View/images/rozePijl.png' </a>";
    }// geen pijl
}

else{
    echo "<a href='?id=$vorige'><img class = '' src='View/images/rozePijl.png' </a>";
}   

$volgende = $index +1; 

if($volgende > 21){
    // geen pijl
    if($index==22){
        echo "<a href='?id=0'><img class = 'bt' src='View/images/rozePijl.png' </a>";
    }
}
else{
    echo "<a href='?id=$volgende'><img class = 'bt' src='View/images/rozePijl.png' </a>";
}
?>


</body>
</html>