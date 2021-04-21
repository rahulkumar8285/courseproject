<?php
session_start();
echo $_SESSION['fa_username'];
echo $_SESSION['fa_name'];

session_unset();
session_destroy();
