<?php
mysqli_report(MYSQLI_REPORT_OFF);

# Database credentials

define("DB_SERVER", getenv("DB_SERVER"));
define("DB_USERNAME", getenv("DB_USERNAME"));
define("DB_PASSWORD", getenv("DB_PASSWORD"));
define("DB_NAME", getenv("DB_NAME"));

# Create connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

# Check connection
if (!$link) {
  echo "Connection error: " . mysqli_connect_error();
}
