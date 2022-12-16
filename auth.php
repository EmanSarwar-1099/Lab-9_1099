<?php
//Question-2(1)
  $email = $_GET["email"];
  $password = $_GET["pass"];

if ($email== "" || $password=="") {
    echo " Make sure that email and password are not left blank";
    echo "<br>"  ;
}

//Question-2(2)
if(isset($_GET['radio'])){
    echo "You have selected :" .$_GET['radio'];
    echo "<br>" ;
}



//Question-2(3)
if(!empty($_GET["checkbox"])){
    echo "True";
}

if(empty($_GET["checkbox"])){
    echo "False";
    echo "<br>";
}

//Question-2(4)
function sortArray($arr, $string){
    if($string=="ASC"){
        sort($arr);
    }
    elseif($string=="DSC"){
        rsort($arr);
    }else{
        sort($arr);
    }
    $arrlength = count($arr);
    for($x = 0; $x < $arrlength; $x++) {
    echo $arr[$x];
    echo ",";
}
}
$numbers = array(4, 6, 2, 22, 11);
sortArray($numbers,"");
echo "<br>";


//Question-2(5)
if($_GET['radio']=='option1'){
    $random_number_array = range(0, 100);
    shuffle($random_number_array );
    echo "<strong>Random Number Arrays</strong><br>";
    foreach($random_number_array as $v){
        echo "$v,";
    }
    echo "<br><strong>Sorted Array</strong><br>";
    sortArray($random_number_array, "");

}else{
    echo "You Have Selected another option<br>";
}

//Question-2(6)
if($_GET['radio']=='option2'){
    $random_number_array = range(0, 100);
    shuffle($random_number_array );
    echo "<strong>Random Number Arrays</strong><br>";
    print_r($random_number_array);
    echo "<br><strong>Sorted Array</strong><br>";
    sortArray($random_number_array, "");
    echo "<strong>Array After Reset</strong><br>";
    reset($random_number_array);
    print_r($random_number_array);
}
















?>