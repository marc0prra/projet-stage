<?php

require_once("includes/bdd.php");
require_once("includes/user.php");

if (empty($user)) {
    header("Location: login.php");
} else {
    header("Location: homePage.php");
}