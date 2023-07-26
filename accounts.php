<?
$username = $_GET["username"];
$password = $_GET["password"];
$mode = $_GET["mode"];

if($mode == "make") {
    $file = fopen("authentication/$username.txt", "w");
    fwrite($file, hash("sha256", $password));
    fclose($file);
    echo "ok";
} else if($mode == "verify") {
    $text = file_get_contents("authentication/$username.txt");
    if($text == $password) { //password must be hashed
        echo "valid";
    } else {
        echo "invalid";
    }
}
