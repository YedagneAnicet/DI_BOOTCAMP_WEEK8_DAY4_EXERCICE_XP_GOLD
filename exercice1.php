<?php

$dbhost = 'localhost';
$dbport = '5432';
$dbname = 'php_postgre';
$dbuser = 'postgres';
$dbpassword = 12136270;

$dbconn = pg_connect("host=$dbhost port=$dbport dbname=$dbname user=$dbuser password=$dbpassword");

if (!$dbconn) {
    echo "Could not connect to database.\n";
    exit;
} else {
    echo "Connected to database.\n";
}

$query = "UPDATE COMPANY set SALARY = 25000.00 where ID=1;";

$result = pg_query($dbconn, $query);

if (!$result) {
    echo "Query failed.\n";

    exit;
} else {
    echo "Query succeeded.\n";

}

pg_close($dbconn);
?>