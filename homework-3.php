<?php
echo"<h1> compare two number </h1>";
$num1=30;
$num2=50;

if($num1 < $num2){
    echo"num2 greater then num1";
}
else{
    echo"wrong number";
}
echo"<h1> equelity check </h3>";
$number=40;
if($number==38){
    echo"right number";
}
else{
    echo"didn't match number";
}
echo"<h3> condition check </h3>";
$mature=18;

if($mature>=18){
    echo"you are selected";
}
else{
    echo"you are firend";
}

echo "<h3> numaric number locate </h3>";
$numaric= 5786;

if(is_numeric($numaric)){
    echo "valid number";
}else{
    echo "invalid number";
}

echo "<h3> alphabet chek </h3>";
$dataType= 'abcdefgh';

if(ctype_alpha($dataType)){
    echo "this is right";
}else{
    echo "wrong data";
}

echo "<h3> function value </h3>";
function data($value){
    if(ctype_alpha($value)){
        echo "it's right value";
    }else{
        echo "wrong value";
    }
}

data('nazmul'); echo "<br>";
data(123688);


echo "<h3> logical operator condition </h3>";
$f1= 250;
$f2= 300;
$f3= 295;


if($f1 > $f2 && $f1>$f3){
    echo "f1 is bigger";
} elseif($f2 > $f1 && $f2>$f3 ){
    echo "f2 is bigger";
}else{
    echo "f3 is greater";
}


echo "<h3> even and odd number find </h3>";
$n1= 30;

if($n1 % 3 == 0){
    echo "$n1 is even number";
}elseif($n1 % 3 == 1){
    echo "$n1 is ndd numbe";
}else{
    echo "$n1 is invalid number";
}


echo "<h3> authentication system </h3>";
function auth($userEmail, $userPass){
    // database entry
    $demail= "nazmul@gamail.com";
    $dpass= "12356";
    // data end
    if ($userEmail == $demail && $userPass == $dpass){
        echo "successfully loged in";
    }else{
        echo "wrong information";
    }
}

auth('nn@gamail.com', 12356); echo "<br>";
auth('nazmul3@gamail.com', 356); echo "<br>";
auth('nazmul@gamail.com',12356);


echo "<h3> garade calculation </h3>";

$gmark= 90;

if($gmark >= 80 && $gmark <= 100){
    echo "A+";
}elseif($gmark >= 70 && $gmark < 80){
    echo "A";
}else{
    echo "invalid marks";
}
