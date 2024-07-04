<?php


$marks=8;

if($marks >=80 && $marks <=100  ){

echo "You Get A+";

}elseif($marks >=70&& $marks <=79){
echo "You Get A";
}elseif($marks >=60&& $marks <=69){
echo "You Get A-";
}elseif($marks >=50&& $marks <=59){
echo "You Get B";
}elseif($marks >=40&& $marks <=49){
echo "You Get C";
}elseif($marks >=33&& $marks <=39){
echo "You Get D";
}elseif($marks >=0&& $marks <=32){
echo "You Get F";
}else{
echo "Invalid Number";
}







?>
