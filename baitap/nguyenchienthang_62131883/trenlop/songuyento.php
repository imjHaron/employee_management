<?php
function isPrime($n) {
    if ($n < 2) {
        return false;
    }
    
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }
    
    return true;
}

$randNumber =rand(1, 1000);
echo "Số ngẫu nhiên: " . $randNumber . "\n";

if (isPrime($randNumber)) {
    echo $randNumber . " là số nguyên tố.";
} else {
    echo $randNumber . " không là số nguyên tố.";
}
?>


