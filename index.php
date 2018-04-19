
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Stagiu</title>
        <link rel="stylesheet" type="text/css" href="public/reset.css"/>
        <link rel="stylesheet" type="text/css" href="public/style.css"/>
    </head>
    <body>
    <div class="wrapper">
        <div class="line center bold">
            <h1>PHPentaStagiu 2018</h1>
                <h2>M01.03 <span class="fun"> The Fun One</span></h2>
                <h3>
                <a href="https://docs.google.com/presentation/d/19YulX3DUaNkP9aT8-jX9g4mPdwY6-F-rt8BOv8xQ1VA/" target="_blank">M01.02</a>
                </h3>
            </div>
            <div class="line">
            <ol class="ml20">
                <li>Generati un array de numere
                        <ul>
                        <li>cuprins intre <span class="bold">Numar de pornire</span> si <span class="bold">Numar de sfarsit</span> excluzand cele doua numere</li>
                            <li>numarul maxim de elemente este <span class="bold">Numar de elemente</span></li>
                        </ul>
                    </li>
                    <li>Afisati toate numerele multiplu de 3</li>
                    <li>Numar de numere multiplu de 4</li>
                    <li>Suma numerelor multiplu de 5</li>
                </ol>
            </div>
            <div class="line">
            <form method="POST" class="center">
                <p class="label">Numar de pornire</p>
                    <input type="text" name="startPoint"/>

                    <p class="label">Numar de sfarsit</p>
                    <input type="text" name="endPoint"/>

                    <p class="label">Numar de elemente</p>
                    <input type="text" name="iterations"/>

                     <p class="label">Numar multiplu </p>
                    <input type="text" name="multiple"/>

                    <br/><br/>
                    <input type="submit"/>
                </form>
            </div>

            <div class="clear"></div>
        </div>
    </body>
</html>
<?php
if (!$_POST) {
    exit;
}
echo "<pre>";

print_r($_POST);

$start=$_POST['startPoint'];
$finish=$_POST['endPoint'];
$it=$_POST['iterations'];
$m=$_POST['multiple'];

if( empty($_POST['startPoint']) || empty($_POST['endPoint'])|| empty($_POST['iterations'])){
    echo 'Completeaza toate campurile!!';
    exit();

}

if(is_numeric($_POST['startPoint']) && is_numeric($_POST['endPoint']) && is_numeric($_POST['iterations']) && is_numeric($_POST['multiple']))
{}
else
{
    echo 'Completeaza campurile cu valori numerice!! :)';
    exit();
}
if(($_POST['endPoint'])-($_POST['startPoint']) <= ($_POST['iterations'])){
    echo 'Alege un numar mai mic de elemente!!';
    exit();
}

$data= functie ($_POST['startPoint'],$_POST['endPoint'],$_POST['iterations']);

// generare array
function functie($start, $it, $finish){
    $array=range($start+1,$finish-1);

    $array = array_slice($array,0,$it);
    return $array;
}

//afisare vector
var_dump($data);
//declarare vector
$arr=[];
/*-------------------------------*/

//afisare in vector valorile care sunt multiplu de 3
foreach ($data as $value)
{
    if($value%3==0)
    {
        $arr[]=$value;
    }
}
var_dump($arr);


/*--------------------------------*/

// numar de valori- multiplu de 4
$nr=0;
foreach ($data as $value)
{
    if($value%4==0){
        $nr++;
    }
}
echo "Nr multiplu de 4: $nr<br/>";

/*------------------------------------*/

 // suma numerelor multiplu de 5
$suma=0;
foreach ($data as $value)
{
    if($value%5==0){
        $suma+=$value;
    }
}
echo "Suma numerelor multiple cu 5 este: $suma <br/>";

/*--------------------------------------------*/

function verificare($data){
$nr=0;
$suma=0;
 foreach ($data as $value){
    if($value%3==0)
    {
        $arr[]=$value;
    }
    if($value%4==0){
        $nr++;
    }
    if($value%5==0){
        $suma+=$value;
    }
}

var_dump($arr);
echo "Nr multipul de 4 este: $nr<br/>";
echo "Suma nr multiple cu 5 este: $suma <br/>";
}
//apelare functie verificare
verificare($data);
/*-----------------------------------------------*/

//functie pentru modul- numarare de elemente
function modC($data, $m){
    $nr=0;
    foreach ($data as $value){
    if($value% $m ==0)
      $nr++;
}
echo "Numarul de elemente multiple cu  ". $m . "  este egal cu: $nr</br>";
}
//apelare functie modC
modC($data,$m);

/*-----------------------------------------------*/

//functie pentru modul- suma elementelor
function modS($data, $m){
    $suma=0;
    foreach ($data as $value){
    if($value%$m==0)
      $suma+=$value;
}
echo "Suma elementelor multiple cu  ". $m . "  este egala cu: $suma</br>";
}
//apelare functie mod
modS($data,$m);

/*-----------------------------------------------*/

//functie pentru modul- afisarea de elementelor
function modA($data, $m){
    $vec=[];
    foreach ($data as $value){
        if($value%$m==0)
            $vec[]=$value;
    }
    echo "Elememntele multiple cu ". $m."  sunt urmatoarele:</br> ";
    var_dump($vec);
}
//apelare functie mod
modA($data, $m);

/*-----------------------------------------------*/

//functie de verificare mod
function modV($data, $m){
    foreach ($data as $value){
        if($value%$m ==0)
            return true;
}}
if(modV($data,$m)==true)
    echo "exista in vector valori multiple cu ".$m;
else
    echo "nu exista in vector valori multiple cu ".$m;
/*-----------------------------------------------*/





