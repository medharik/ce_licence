<?php 
$a=0.0;
if(isset($a)){
echo $a.' est 12 (isset)<br>';
}
if(!empty($a)){
echo "a est $a (empty)<br>";
}
if( $a){
echo "a est $a (variable)";
}
$b=(bool)$a;
var_dump($b);

//true , 9,"test","0.0"
//false : 0, 0.0,,"",'', null, [], array() <=> empty
?>