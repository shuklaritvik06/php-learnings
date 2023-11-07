<?php
/**
 * Cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users.
 */

setcookie("name", "Ramesh", time() + 86400); // 86400 = 1 day

// Accessing an individual cookie value

echo $_COOKIE["name"];

// to modify a cookie, just set (again) with the same name

setcookie("name", "Ramesh", time() + 86400); // 86400 = 1 day

// to remove a cookie, set the expiration date to a time in the past

setcookie("name", "", time() - 3600);

if (count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}

// to check whether a cookie is set or not

if (isset($_COOKIE["name"])) {
    echo "Cookie is set.";
} else {
    echo "Cookie is not set.";
}
