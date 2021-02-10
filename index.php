<?php 

//Get the database connection file
require_once 'library/connections.php';

//Get the database connection file
require_once 'model/home-model.php';


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

switch ($action){
  
        default:
            include 'view/home-page.php';
}









