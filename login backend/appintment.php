<?php
$host = "localhost";
$port = "5432";
$user = "postgres";
$pass = "root";  // Replace with your PostgreSQL password
$db = "mental_health_db";

$con = pg_connect("host=$host port=$port dbname=$db user=$user password=$pass")
         or die ("Could not connect to Server\n");

if (!$con) {
    echo "Error : Unable to open database\n";
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $therapist = filter_input(INPUT_POST, 'therapist', FILTER_SANITIZE_STRING);
        $appointment_time = filter_input(INPUT_POST, 'appointment_time', FILTER_SANITIZE_STRING);

        $query = "INSERT INTO appointments (name, email, therapist, appointment_time) VALUES (:name, :email, :therapist, :appointment_time)";
        $result = pg_query_params($con, $query, array($name, $email, $therapist, $appointment_time));

        if ($result) {
            echo "Appointment booked successfully!";
        } else {
            echo "Error: Unable to send message.";
        }
    }
}
pg_close($con);
?>
