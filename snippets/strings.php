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

// replace string
$str2 = "welcome back!"; 
echo str_replace("back", "home", $str2);

// remove html tags
$html_text_content = "<p>lol</p>";
echo strip_tags($html_text_content);

// escape special characters
$name = "tom's world";
echo addslashes($name);

// remove slashes
$str_with_slashes = "\yes \sir";
echo stripslashes($str_with_slashes);

// trim white space
$str_with_spaces = "    no!   ";
echo trim($str_with_spaces);

// shuffle characters in a string
$shuffle_me = "hello there!";
echo str_shuffle($shuffle_me);

$otp = "1726341237472364782346253";
echo substr(str_shuffle($otp), 0, 6);

// hash password string
$pwd = "password123";
echo md5($pwd); // not recommended for password hashing
echo password_hash($pwd, PASSWORD_DEFAULT);

// verify password hash
$hash = '$2y$10$.vGA1O9wmRjrwAVXD98HNOgsNpDczlqm3Jq7KnEd1rVAGv3Fykk1a';

if (password_verify('rasmuslerdorf', $hash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}

// encode string to base64
$str3 = "test";
echo base64_encode($str3);
echo base64_decode("dGVzdA==j");

?>