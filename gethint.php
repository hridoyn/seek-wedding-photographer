<?php
$a[] = "";
$a[] = "sz2500";
$a[] = "Fahim_20";
$a[] = "nin";
$a[] = "kamrul790";
$a[] = "jahanB";
$a[] = "hridoyn";
$a[] = "alvi420";
$a[] = "JahanA";
$a[] = "nasim_n";
$a[] = "shonzon_k";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $username) {
        if (stristr($q, substr($username, 0, $len))) {
            if ($hint === "") {
                $hint = $username;
            } else {
                $hint .= ", $username";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>