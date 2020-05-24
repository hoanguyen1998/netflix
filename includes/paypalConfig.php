<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AVJ3AsMYmR9Bsod_x9PavMimQB6fGwwomhfRWcq4bZwvEqvOdNoVCV8uTs6lRUnswtd5kMbY-u2g0hOI',     // ClientID
        'EJoaQdZ4Wwky3UBPgYD92s7bv-0W4q_IfjP__lm61PR_w_6IV1r-eeoTGy8tUvFaDN8WJMwejuOoHGZd'      // ClientSecret
    )
);

?>