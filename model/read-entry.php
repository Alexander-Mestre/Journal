<?php

//Get the database connection file
require_once '../library/connections.php';


$idValue = filter_input(INPUT_POST, 'idValue');
if ($idValue == NULL) {
    $idValue = filter_input(INPUT_GET, 'idValue');
}

function populate($idValue)
{
    // Create a connection object using the phpmotors connection function
    $db = journalConnect();
    // The SQL statement
    $sql = 'SELECT :entryId, entryTitle, entryText, entryDate, entryPicture, entryCategoryOne, entryCategoryTwo
        FROM entries
        WHERE entryId = :entryId';
    // Create the prepared statement using the phpmotors connection
    $stmt = $db->prepare($sql);
    // The next four lines replace the placeholders in the SQL
    // statement with the actual values in the variables
    // and tells the database the type of data it is
    $stmt->bindValue(':entryId', $idValue, PDO::PARAM_STR);
    // Insert the data
    $stmt->execute();
    // Ask how many rows changed as a result of our insert
    // Close the database interaction
    $entry = $stmt->fetchAll();
    // Return the indication of success (rows changed)
    return $entry[0];
}

$entry = populate($idValue);

$entryBox = "";
$entryBox .= "<div class=\"journal-entry\">";
$entryBox .= "<img src=\"" . $entry['entryPicture'] . "\">";
$entryBox .= "<h4>" . $entry['entryTitle'] . "</h4>";
$entryBox .= "<h5>" . $entry['entryCategoryOne'] . "</h5>";
if ($entry['entryCategoryTwo'] != "") {
    $entryBox .= "<h5>" . $entry['entryCategoryTwo'] . "</h5>";
}
$entryBox .= "<p>" . $entry['entryDate'] . "</p>";
$entryBox .= "<p>" . $entry['entryText'] . "</p>";
$entryBox .= "</a>";
$entryBox .= "</div>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <!-- Boostrap CSS -->
    <link href="Hackathon-Journal/Content/style.css" rel="stylesheet" type="text/css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Bootstrap JS and Jquery -->
    <style>
        #btn-login {
            border: 1px solid black;
        }

        #btn-create-account {
            border: 1px solid black;
        }

        #btn-sign-up {
            border: 1px solid black;
        }

        #btn-entry {
            border: 1px solid black;
        }

        .btn-search {
            border: 1px solid black;
        }

        .search-bar {
            text-align: right;
            padding: 4px;
        }

        .entry-button {
            text-align: center;
            padding: 0 0 10px 0;
        }

        #welcome-header {
            text-align: center;
        }

        #login {
            text-align: center;
            padding: 4px;
        }

        #create-account {
            text-align: center;
            padding: 4px;
        }

        .entry-add {
            text-align: right;
        }

        #content {
            background-color: #faedcd;
            width: 960px;
            height: 960px;
            border: 5px solid #bc6c25;
            padding: 50px;
            margin: 20px;
            border-radius: 3px;
        }

        #maincontent {
            background-color: #fefae0;
        }

        #sidebar {
            background-color: white;
        }

        .journal-box {
            padding: 8px;
            margin: 25px;
            font-size: .5em;
            border: 2px solid black;
            border-radius: 3px;
            max-width: 600px;
        }

        .journal-box img {
            width: 100%;
            height: auto;
        }

        .parent-container {
            display: flex;
            flex-wrap: wrap;
            flex-direction: row;
            flex-flow: row;
            justify-content: center;
        }

        .journal-entry img {
            max-width: 300px;
            margin: 15px;
            float:right;
            box-shadow: 2px 2px 20px black;
        }
        a {
            text-decoration: none;
            color: black;
        }
    </style>
    <script src="Scripts/jquery-3.0.0.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <title>Journal Entry - Read</title>
</head>

<body>
    <!--Open Header for future use-->
    <header>
    </header>
    <main id="maincontent">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                </div>
                <div class="col-sm-8">
                    <div id="content">
                        <?php
                        echo ($entryBox);
                        ?>

                    </div>
                </div>
                <div class="col-sm-2">
                </div>
            </div>
    </main>
</body>

</html>