<?php
// Use in the "Post-Receive URLs" section of your GitHub repo.

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    # Get JSON as a string
    $json_str = file_get_contents("php://input");

    # Get as an object
    $json_obj = json_decode($json_str);

    echo $json_obj->userID;
    // shell_exec( 'cd /srv/www/git-repo/ && git reset --hard HEAD && git pull' );
}
