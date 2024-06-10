<?php
function initialisehoofdstuk(){
    $host = 'localhost:3307';
    $db = 'audioboek';
    $user = 'root';
    $pass = '';
    try {
        $connect = new PDO("mysql:host=$host;dbname=$db;","$user", "$pass");
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $query = "SELECT * FROM audioboek";
        $data = $connect->query($query);
        $hoofdstuk = $data->fetchAll(PDO::FETCH_ASSOC);
    }
    catch(PDOException $e) {
        $e->getMessage();
    }
    return $hoofdstuk;
}
//$hoofdstuk[0]['fotostudent'] = "View/images/fotoStudent.png";
// $hoofdstuk[0]['naam'] = "MelissaNahumury";
// $hoofdstuk[0]['titel'] = "Ik ben Melissa de Leeuw";
// $hoofdstuk[0]['fragment'] = "View/audio/Melissa_Nahumury_H.Vertrek_blz.12t-m15.m4a";
// $hoofdstuk[0]['index']=0;

// $hoofdstuk[1]['fotostudent'] = "View/images/student2.jfif";
// $hoofdstuk[1]['naam'] = "Bob Ross";
// $hoofdstuk[1]['titel'] = "Ik ben Bob Ross";
// $hoofdstuk[1]['fragment'] = "View/audio/Melissa_Nahumury_H.Vertrek_blz.12t-m15.m4a";
// $hoofdstuk[1]['index']=1;

// $hoofdstuk[2]['fotostudent'] = "View/images/student1.jfif";
// $hoofdstuk[2]['naam'] = "Patricia Koka";
// $hoofdstuk[2]['titel'] = "Ik ben Patricia Koka";
// $hoofdstuk[2]['fragment'] = "View/audio/Melissa_Nahumury_H.Vertrek_blz.12t-m15.m4a";
// $hoofdstuk[2]['index']=2;




function getHoofdstuk($index){
    $hfd = initialisehoofdstuk();

    if($index < 0){
        $index = 0;
    }
    return $hfd[$index];
}
?>