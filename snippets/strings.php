// in php, there are 4 ways to declare a string

<?php
$str1 = "hello, world 1";
echo $str1;

$str2 = 'welcome!!!';
echo $str2;

/*
Nowdocs are to single-quoted strings what heredocs are to double-quoted strings. A nowdoc is specified similarly to a heredoc, but no parsing is done inside a nowdoc. The construct is ideal for embedding PHP code or other large blocks of text without the need for escaping.
*/

// heredoc
echo <<<"FOOBAR"
Hello World!
FOOBAR;

// nowdoc
echo <<<'EOD'
Example of string spanning multiple lines
using nowdoc syntax. Backslashes are always treated literally,
e.g. \\ and \'.
EOD;


echo strlen($str1);

echo strtolower($str1);

echo strtoupper($str1);

// upper case first letter
echo ucfirst($str1);

// upper case all words
echo ucwords($str1);

echo substr($str1, 6);
echo substr($str1, 6, 4);

// find string pos (case sensitive)
echo strpos($str1, "Hello");

// find string pos (case insensitive)
echo stripos($str1, "hello");

// implode converts an array into a str
$arr1 = [1, "two"];
print_r(implode($arr1));

// explode converts a str into an array
print_r(explode("@foo", $str1));
$str2 = "lol#oof#sheez";
print_r(explode("#", $str2));

?>