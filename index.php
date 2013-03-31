<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=d43s3f9anensdc host=ec2-107-21-107-194.compute-1.amazonaws.com port=5432 user=fyvifrpwiqyqmm password=Vdmf__3W3zLNVY7e9G7Geh7bn3 sslmode=require";
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
   echo "Database connection error."
   exit;
}
 
$result = pg_query($db, "SELECT statement goes here");
?>