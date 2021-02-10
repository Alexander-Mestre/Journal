<?php 

function createEntry($entryTitle, $entryCategoryOne,$entryCategoryTwo, $entryText, $entryDate){
    // Create a connection object using the phpmotors connection function
    $db = journalConnect();
    // The SQL statement
    $sql = 'INSERT INTO entries (
    userId
    ,entryTitle
    ,entryText 
    ,entryDate
    ,entryCategoryOne 
    ,entryCategoryTwo)
        VALUES (
            1,
  :entryTitle
  ,:entryText 
  ,:entryDate
  ,:entryCategoryOne 
  ,:entryCategoryTwo )';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':entryTitle', $entryTitle, PDO::PARAM_STR);
    $stmt->bindValue(':entryText', $entryText, PDO::PARAM_STR);
    $stmt->bindValue(':entryDate', $entryDate, PDO::PARAM_STR);
    $stmt->bindValue(':entryCategoryOne', $entryCategoryOne, PDO::PARAM_STR);
    $stmt->bindValue(':entryCategoryTwo', $entryCategoryTwo, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
   }


?>