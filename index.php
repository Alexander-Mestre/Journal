<?php 

//Get the database connection file
require_once 'library/connections.php';

//Get the database connection file
require_once 'model/home-model.php';

require_once 'model/create-entry.php';


$entries = populate(1);

$entryBox="";
foreach($entries as $entry){
    //print_r($entry['entryTitle']);

    $entryBox .= "<div class=\"journal-box\">";
    $entryBox .= "<a href=\"/Journal/model/read-entry.php?idValue=".$entry['entryId']."\">";
    $entryBox .= "<img src=\"".$entry['entryPicture']."\">";
    $entryBox .= "<h4>".$entry['entryTitle']."</h4>";
    $entryBox .= "<h5>".$entry['entryCategoryOne']."</h5>";
    if($entry['entryCategoryTwo'] != ""){
        $entryBox .= "<h5>".$entry['entryCategoryTwo']."</h5>";
    }
    $entryBox .= "<p>".$entry['entryDate']."</p>";
    $entryBox .= "<p>".substr($entry['entryText'],0,50)."...</p>";
    $entryBox .= "</a>";
    $entryBox .= "</div>";

}

$action = filter_input(INPUT_POST, 'action');
    if ($action == NULL){
        $action = filter_input(INPUT_GET, 'action');
    }

switch ($action){
        

    case 'create':
               //1. Filter and Store incoming data
               $entryTitle = filter_input(INPUT_POST, 'entryTitle');
               $entryCategoryOne = filter_input(INPUT_POST, 'entryCategoryOne');
               $entryCategoryTwo = filter_input(INPUT_POST, 'entryCategoryTwo');
               $entryText = filter_input(INPUT_POST, 'entryText');
               $entryDate = filter_input(INPUT_POST, 'entryDate');
               $entryPicture = filter_input(INPUT_POST, 'entryPicture');
               //2. Check Data
               // Check for missing data
               /*
               if (empty($entryTitle) || empty($entryCategoryOne) || empty($entryCategoryTwo) || empty($entryText) || empty($entryDate)) {
                   $message = '<p>Please provide information for all empty form fields.</p>';
                   include 'view/create-entry.php';
                   exit;
               }
               */
       
               //4. Process the data
               // Send the data to the model
               $entryOutcome = createEntry($entryTitle,$entryCategoryOne,$entryCategoryTwo,$entryText, $entryDate);
       
               //5. Check and report the result
               if ($entryOutcome === 1) {
                   $message = "<p>Entry Created</p>";
                   include '/view/home-page.php';
                   exit;
               } else {
                   $message = "<p>Sorry, entry creation failed</p>";
                   include '/view/home-page.php';
                   exit;
               }
        break;

        default:
            include 'view/home-page.php';
}









