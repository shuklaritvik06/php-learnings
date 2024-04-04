<?php
session_start();
session_destroy();
header("Location: /Basics/sessions.php");