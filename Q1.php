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
