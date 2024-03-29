<?php
require '../include/login.inc';

if (!is_mirror_site_admin($user)) {
    warn("Sorry, you are not allowed to view this web page");
    exit;
}

phpinfo();

function is_mirror_site_admin($user) {
    if (in_array(
            $user,
            array(
                "jimw", "rasmus", "andrei", "zeev", "andi", "sas", "thies",
                "rubys", "ssb", "imajes", "goba", "derick", "cortesi", "wez", 
                "bjori", "philip", "danbrown"
            )
        )
    ) {
        return TRUE;
    } else { 
        return FALSE; 
    }
}
