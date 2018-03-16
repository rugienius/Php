<?php
$cnn = new PDO('mysql:host=localhost;dbname=mokymai', 'root');
$amzius= 30;
// taikinys nulauzimui istatant specialu teksta vietoje $kaina
$res = $cnn->query("select asm_vardas, asm_pavarde from asmuo where asm_amzius>{$amzius}");
while ($a = $res->fetch()){
    echo $a['asm_vardas'] . ' ' . $a['asm_pavarde'] . '<br>';
}

// su apsauga nuo nulauzimo
$res = $cnn->prepare("select asm_vardas, asm_pavarde from admuo where asm_amzius>:aaa");
$x = $res->execute([':aaa' => $amzius]);
while ($a = $res->fetch()){
    echo $a['asm_vardas'] . ' ' . $a['asm_pavarde'] . '<br>';
}
