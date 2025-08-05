<?php
mysqli_report(MYSQLI_REPORT_OFF);

# Database credentials
define("DB_SERVER", "db.tn-homelab.net");
define("DB_USERNAME", "prod-user");
define("DB_PASSWORD", "prod4321#");
define("DB_NAME", "proddb");

# Create connection
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

# Check connection
if (!$link) {
  echo "Connection error: " . mysqli_connect_error();
}
