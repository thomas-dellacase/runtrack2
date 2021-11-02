<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais";
$strtable = str_split($str);
$result = "";

for($i= (sizeof($strtable) -1); $i>=0; $i--) {
    if($i == sizeof($strtable) - 1){
        $result = $strtable[0];
    }
    else{
        $result = $strtable[$i + 1] .$result;
    }
}
echo $result;
?>






