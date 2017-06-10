<?php
$a[] = "";
$a[] = "dream_w";
$a[] = "iap220";
$a[] = "wed_diary";
$a[] = "wed_mom";
$a[] = "creation1256";
$a[] = "ml_256";
$a[] = "wed_vision";
$a[] = "fnf_p";
$a[] = "";
$a[] = "";

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