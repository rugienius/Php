<<?php
$cnn = new PDO('mysql:host=localhost;dbname=mokymai', 'root');//rysys su db atidaromas

$sql = "select 'labas' as tekstas,  count(*) as cnt from asmuo";// sql uzklausos tekstas

$res = $cnn->query($sql);//ivykdoma uzklausa ant serverio

while ($row=$res->fetch()){//persiunciama is servelio eiline rezultatu eilute (masyva)
    echo $row['cnt'].'<br>'; //isvedimas
    var_dump($row);
}

$res->closeCursor();

$sql = "select * from asmuo"; // rezultatu an serverio sunaikinimas
$res = $cnn->query($sql);
echo '<table>';

while ($row=$res->fetch()){

    echo '<tr>';
    echo '<td>' . $row['asmuo'].'</td>';
    echo '<td>' . $row['vardas'].'</td>';
    echo '<td>' . $row['pavarde'].'</td>';
    echo '<td>' . $row['amzius'].'</td>';
    echo '</tr>';
}
echo '</table>';
$res->closeCursor();