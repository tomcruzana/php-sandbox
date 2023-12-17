<!DOCTYPE html>
<html>

<body>

    <?php
    /* https://www.php.net/manual/en/ref.array.php */

    # arrays
    $cars = ["toyota", "honda", 12.3];
    var_dump($cars);
    echo "<br>";

    # multi-dimentional arrays
    $cpus = [
        "intel" => [1.6, 3.0, 2],
        "amd" => ["thread ripper" => 5.0, "amx" => 1.2]
    ];
    var_dump($cpus);
    echo "<br>";

    # associative arrays
    $colors = [
        1 => "red",
        2 => "blue",
        "err" => "unknown",
        0 => "zero",
        3 => "3"
    ];

    foreach ($colors as $k => $v) {
        echo $k . " " . $v . "\n";
    }

    echo "<br>";
    var_dump($colors);
    ?>

    <?php

    $languages = ["react", "angular", "jquery"];

    // sort - sorts an array ASC
    sort($languages);

    // rsort - reverse sorts an array DESC
    rsort($languages);

    // ksort - key sorting ASC
    ksort($languages);

    // rksort - reverse key sorting DESC
    rksort($languages);

    // natcasesort - Sorts an array using a natural case-insensitive algorithm.
    natcasesort($languages);

    // array_combine - Combines two arrays, using the first as keys and the second as values.
    array_combine($languages, [1, 2, 3]);

    // array_merge - Merges two or more arrays into a single array.
    array_merge($languages, [1, 2, 3], [4, 5, 6]);

    // array_search - Searches for an element in an array and returns its index position.
    array_search("PHP", $languages);

    // in_array - Checks if an element exists in an array, returning a boolean value.
    in_array("php", $languages);

    // array_key_exists - Checks if a key exists in an array.
    array_key_exists(0, $languages);

    // array_push - Adds an element to the end of an array.
    array_push($languages, "java");

    // array_unshift - Adds an element to the beginning of an array.
    array_unshift($languages, "vue");

    // array_pop - Removes the last element from an array.
    array_pop($languages);

    // array_shift - Removes the first element from an array.
    array_shift($languages);

    // array_splice - Adds or removes elements from an array at a specified position. (see optional params)
    array_splice($languages, 0, 1);

    // array_slice - Extracts a portion of an array starting from a specified position. (see optional params)
    array_splice($languages, 0, 2, 100);

    // array_unique - Removes duplicate values
    array_unique($languages);

    // returns all keys
    array_keys($languages);

    // returns all values
    array_values($languages);

    // flip sting and integer values of an associative array
    array_flip($languages);

    // shuffles the order of the elements of the array
    shuffle($languages);

    // array pointer helper functions
    end($languages);
    current($languages);
    prev($languages);
    next($languages);
    ?>

</body>

</html>