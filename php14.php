<?php
$f = fopen('tekstas.txt', 'r');
$s = fread($f, filesize('tekstas.txt'));
fclose($f);

echo $s ;

$ss= 'labas vakaras';
// rasymas
$f = fopen('tekstas2.txt', 'w');
fwrite($f, $ss);
fclose($f);
// rasymas su pap
$f = fopen('tekstas2.txt', 'a');
fwrite($f, $ss);
fwrite($f, $ss);
fwrite($f, $ss);
fwrite($f, $ss);
fwrite($f, $ss);
fwrite($f, $ss);
fclose($f);

//greiciau

$s= file_get_contents('tekstas.txt');
echo $s . '<br>';
file_put_contents('textas3.txt',
    'irasyti duomenys');
// failo funkcijs
copy('textas3.txt','tekstas4.txt');
unlink ( 'textas3.txt');
if (!file_exists( 'untitled/aaa'))
mkdir('C:\Users\CodeAcademy\PhpstormProjects\untitled/aaa');
rmdir('C:\Users\CodeAcademy\PhpstormProjects\untitled/aaa');
$x = @rmdir('C:\Users\CodeAcademy\PhpstormProjects\untitled/xxx');
if ($x === false) echo 'Blogai' . '<br>';
echo json_encode(error_get_last());
$er = error_get_last();
echo $er['message'] . '<br>';
$ar = scandir('C:\Users\CodeAcademy\PhpstormProjects\untitled');
foreach($ar as $file) {
    if ($file != '.' &&$file != '..') echo $file . '<br>';
}
