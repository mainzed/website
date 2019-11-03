<?php
$REPOSITORY_ID = 97840427;
$SHELL_SCRIPT_PATH = 'deploy.sh';
$LOG_FILE_PATH = 'deploy.log';

function writeLog($string = null) {
    file_put_contents($GLOBALS['LOG_FILE_PATH'], "[server] " . $string . "\n", FILE_APPEND);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    writeLog("POST request /webhook_handler");

    # Get JSON as a string
    $json_str = file_get_contents("php://input");

    # convert to php object
    $json_obj = json_decode($json_str);

    // TODO: proper security using secret set as env_variable
    if ($json_obj->repository->id === $REPOSITORY_ID) {
        writeLog("discard changes, if any");
        $output = shell_exec("git reset --hard HEAD 2>&1"); // record shell output
        file_put_contents($LOG_FILE_PATH, $output, FILE_APPEND);

        writeLog("pull latest version");
        $output = shell_exec("git pull origin master HEAD 2>&1"); // record shell output
        file_put_contents($LOG_FILE_PATH, $output, FILE_APPEND);
    }
}
