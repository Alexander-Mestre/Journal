<?php
//this is the main controller

//Get the database connection file
require_once '../library/connections.php';
//Get the accounts model
require_once '../model/accounts-model.php';



/*
//testcode
var_dump($);
exit;
*/

/*
//test
echo $;
exit;
*/

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
}

switch ($action) {
    case 'login':
        include '../Hackathon-Journal/home-page.html';
        break;

    case 'register':
        //1. Filter and Store incoming data
        $userFirstName = filter_input(INPUT_POST, 'userFirstName');
        $userLastName = filter_input(INPUT_POST, 'userLastName');
        $userEmail = filter_input(INPUT_POST, 'userEmail');
        $userPassword = filter_input(INPUT_POST, 'userPassword');

        //2. Check Data
        // Check for missing data
        if (empty($userFirstName) || empty($userLastname) || empty($userEmail) || empty($userPassword)) {
            $message = '<p>Please provide information for all empty form fields.</p>';
            include '../Hackathon-Journal/welcome-page.php';
            exit;
        }

        //4. Process the data
        // Send the data to the model
        $regOutcome = regClient($userFirstName, $userLastName, $userEmail, $userPassword);

        //5. Check and report the result
        if ($regOutcome === 1) {
            $message = "<p>Thanks for registering $userFirstName. Please use your email and password to login.</p>";
            include '../Hackathon-Journal/home-page.html';
            exit;
        } else {
            $message = "<p>Sorry $userFirstName, but the registration failed. Please try again.</p>";
            include '../Hackathon-Journal/welcome-page.php';
            exit;
        }

    default:
        include '../Hackathon-Journal/welcome-page.php';
        break;
}
