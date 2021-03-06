﻿<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />

    <!-- Boostrap CSS -->
    <link href="Hackathon-Journal/Content/style.css" rel="stylesheet" type="text/css" />
    <link href="../Hackathon-Journal/Content/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Bootstrap JS and Jquery -->
    <script src="Scripts/jquery-3.0.0.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>

    <title>Home Page</title>

</head>

<body>
    <header style="background-color: blue;">
        <h2 style="color: white; margin-left:10px;">Journal</h2>
    </header>
    <!-- A header inserted here with the search-input bar in the top right and maybe a banner-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <div class="search-bar">
                        <form action="/action_page.php">
                            <input type="text" placeholder="Search.." name="search">
                            <button class="btn-search" type="submit" class="btn btn-default">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main for future background editing -->
    <main>
        <!-- Side bar table. Waiting for database information to fill-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-2">
                    <table class="table table-bordered">
                        <tr>
                            <th>
                                Name
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Filter
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Date
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Category
                            </th>
                        </tr>
                    </table>
                </div>
                <!-- Body of the page. Waiting for database to fill -->
                <div class="col-sm-10" id="parent-container">
                  
                    <?php
                    echo ($entryBox);
                    ?>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <!-- This footer is for placing the 'add entry' button and for any other details for the site -->
        <div class="container">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-10">
                    <div class="entry-add">
                        <p><a href="view/create-entry.php"><img src="images/plus-button.png" alt="create-entry.html" width="64" /></a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>