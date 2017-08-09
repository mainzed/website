<?php
$REPOSITORY_ID = 97840427;
$SHELL_SCRIPT_PATH = 'deploy.sh';
$LOG_FILE_PATH = 'deploy.log';

file_put_contents($LOG_FILE_PATH, "server -> listening to /webhook_handler\n", FILE_APPEND);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    file_put_contents($LOG_FILE_PATH, "server -> receiving new post request\n", FILE_APPEND);

    # Get JSON as a string
    $json_str = file_get_contents("php://input");

    # convert to php object
    $json_obj = json_decode($json_str);

    // TODO: proper security using secret set as env_variable
    if ($json_obj->repository->id === $REPOSITORY_ID) {
        $command = "sh " . getcwd() . "/" . $SHELL_SCRIPT_PATH . " 2>&1"; // 2>&1 includes stderr and stout
        $output = shell_exec($command); // record shell output
        file_put_contents($LOG_FILE_PATH, $output, FILE_APPEND); // write shell output to log file
    }
}
