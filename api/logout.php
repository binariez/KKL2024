<?php
require_once __DIR__ . '/functions/Auth.php';
unsetLogin();
header("Location: login.php");
