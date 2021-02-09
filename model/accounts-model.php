<?php

/*
*accounts model
*/


//Register a new client

function regClient($userFirstName, $userLastName, $userEmail, $userPassword){
    // Create a connection object using the phpmotors connection function
    $db = journalConnect();
    // The SQL statement
    $sql = 'INSERT INTO users (userFirstName, userLastName,userEmail, userPassword)
        VALUES (:userFirstName, :userLastName, :userEmail, :userPassword)';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':userFirstName', $userFirstName, PDO::PARAM_STR);
    $stmt->bindValue(':userLastName', $userLastName, PDO::PARAM_STR);
    $stmt->bindValue(':userEmail', $userEmail, PDO::PARAM_STR);
    $stmt->bindValue(':userPassword', $userPassword, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    $rowsChanged = $stmt->rowCount();
    // Close the database interaction
    $stmt->closeCursor();
    // Return the indication of success (rows changed)
    return $rowsChanged;
   }
