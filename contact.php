<?php
$host = "localhost";
$port = "5432";
$user = "postgres";
$pass = "root";  
$db = "mental_health_db";

$con = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass")
         or die ("Could not connect to Server\n");

if (!$con) {
    echo "Error : Unable to open database\n";
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

        $query = "INSERT INTO contacts (name, email, message) VALUES ($1, $2, $3)";
        $result = pg_query_params($con, $query, array($name, $email, $message));

        if ($result) {
            header("Location: a_index.html");
        } else {
            echo "Error: Unable to send message.";
        }
    }
}
pg_close($con);
?>
