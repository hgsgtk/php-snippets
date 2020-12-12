<?php
declare(strict_types=1);

// before 8.0
$country =  null;
$session = null;
if ($session !== null) {
    $user = $session->user;

    if ($user !== null) {
        $address = $user->getAddress();

        if ($address !== null) {
            $country = $address->country;
        }
    }
}

// after 8.0
$country = $session?->user?->getAddress()?->country;
