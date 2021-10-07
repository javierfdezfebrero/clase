<!DOCTYPE html>
<html>
<head>
        <meta charset="UTF-8" />
        <title>Funcions</title>
</head>
<body>
<?php

function suma($n1, $n2,$n3=null,$n4=null){
        return $n1+$n2+$n3+$n4;

};

function multiplicacion($n1, $n2,$n3=1,$n4=1){
        return $n1*$n2*$n3*$n4;

};

function maior($n1, $n2,$n3,$n4){
        $maior=$n1;
        if($n2>$maior){
                $maior=$n2;
        }
        if($n3>$maior){
                $maior=$n3;
                
        }
        if($n4>$maior){
                $maior=$n4;
        }

        return $maior;
};
function menor($n1, $n2,$n3,$n4){
        $menor=$n1;
        if($n2>$menor){
                $menor=$n2;
        }
        if($n3>$menor){
                $menor=$n3;
                
        }
        if($n4>$menor){
                $menor=$n4;
        }

        return $menor;
};
function media($n1, $n2,$n3,$n4){
        return ($n1 + $n2 +$n3 +$n4)/4;

};
function factorial($n3){
        $fact=1;
        for ($i=1; $i<=$n3; $i++){
                $fact=$fact*$i;
        }
        return $fact;
};
function maior2($n1, $n2,$n3,$n4){

        $maior1= maior($n1, $n2,$n3,$n4);

        $menor=$n1;
        if ($maior1==$menor){
                $menor= $n2;
                if ($menor<$n3){
                        $menor=$n3;
        
                }
                if ($menor<$n4){
                        $menor=$n4;
        
        }else{
        if ($menor<$n2){
                $menor=$n2;

        }
        if ($menor<$n3){
                $menor=$n3;

        }
        if ($menor<$n4){
                $menor=$n4;

        }
        }
}

        return $menor;
};
function mediana($n1, $n2,$n3,$n4){
        $datos= array($n1,$n2,$n3,$n4);
        $cantidad= count($datos);

        if($cantidad%2){
                

        }else{

        }

};
function desc($n1, $n2,$n3,$n4){

};
function asc($n1, $n2,$n3,$n4){

};


$num1=$_GET['n1'];
$num2=$_GET['n2'];
$num3=$_GET['n3'];
$num4=$_GET['n4'];

if(isset($_GET['suma2'])){

echo suma($num1, $num2);

}
if(isset($_GET['suma3'])){


echo suma($num1, $num2,$num3);

}
if(isset($_GET['suma4'])){


echo suma($num1, $num2,$num3, $num4);

}

if(isset($_GET['mul2'])){


echo multiplicacion($num1, $num2);

}
if(isset($_GET['mul3'])){

echo multiplicacion($num1, $num2,$num3);

}
if(isset($_GET['mul4'])){

echo multiplicacion($num1, $num2,$num3, $num4);

}
if(isset($_GET['maior'])){
        
        echo maior($num1, $num2,$num3, $num4);
        
        }


if(isset($_GET['media'])){
        
        echo media($num1, $num2,$num3, $num4);
        
        }

        
if(isset($_GET['factorial'])){
        
echo factorial($num3);

}
if(isset($_GET['maior2'])){
        
        echo maior2($num1, $num2,$num3, $num4);
        
        }
        

        

?>
</body>
</html>