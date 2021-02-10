<?php 

/*
Home page Module
*/


function populate($userId){
      // Create a connection object using the phpmotors connection function
      $db = journalConnect();
      // The SQL statement
      $sql = 'SELECT entryId, entryTitle, entryText, entryDate, entryPicture, entryCategoryOne, entryCategoryTwo
          FROM entries
          WHERE userId = :userId
          ORDER BY entryDate DESC';
      // Create the prepared statement using the phpmotors connection
      $stmt = $db->prepare($sql);
      // The next four lines replace the placeholders in the SQL
      // statement with the actual values in the variables
      // and tells the database the type of data it is
      $stmt->bindValue(':userId', $userId, PDO::PARAM_STR);
      // Insert the data
      $stmt->execute();
      // Ask how many rows changed as a result of our insert
      // Close the database interaction
      $entries = $stmt->fetchAll();
      // Return the indication of success (rows changed)
      return $entries ;
}


?>