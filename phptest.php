// question 1
<?php
function abbreviateName($fullName){
$words=explode(" ",$fullName);
$abbreviate=$words[0];
$middle=$words[1];
$last=$words[2];

$join=$abbreviate." ".$middle[0].". ".$last[0].".";
print_r($join);

}
echo abbreviateName("John Michael Doe");
?>

//question 2
<?php
function removeVowels($text) {
$letters=explode("",$text);
$vowels={'a','e','i','o','u'};
if ($letters[] as $vowels)
{
return implode("",$letters.str_replace("",$vowels));
}
}
echo removeVowels("Beautiful Day");
?>

//question 3
<?php
$products = array(
 array("name" => "Laptop", "price" => 1000),
 array("name" => "Smartphone", "price" => 700),
 array("name" => "Tablet", "price" => 700),
 array("name" => "Monitor", "price" => 300)
);

print $products[0]['name'];
print $products[2]['price'];
ksort($products);
print $products();
?>
// some of them are incomplete, i'll make sure to complete them!!
