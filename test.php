<?php
// anh em test cái cc gì cũng đc tôi dùng để test form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $question_id = $_POST["authen"];
    $answer = $_POST["answer"];
}
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $email;
echo "<br>";
echo $question_id;
echo "<br>";
echo $answer;
?>