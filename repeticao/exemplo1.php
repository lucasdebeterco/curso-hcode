<?php

for($i = 0; $i < 1000; $i += 5){
    if ($i > 200 && $i < 800) continue;
    // "continue" faz ignorar o que tem no if
    echo $i."<br>";
}

?>