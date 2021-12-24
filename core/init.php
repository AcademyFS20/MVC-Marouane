<?php

error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('session.cookie_lifetime', false);
session_start();

/* Include configuration */

require('./config/config.php');
require('./helpers/functions.php');