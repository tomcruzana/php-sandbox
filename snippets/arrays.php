<?php
	$colors = [
    	1 => "red",
        2 => "blue",
        "err" => "unknown"
    ];
    
    foreach($colors as $k => $v){
    	echo $k . " " . $v . "\n";
    }
    
    echo "<br>";
    var_dump($colors);
?>