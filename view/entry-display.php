<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <!-- Boostrap CSS -->
    <link href="Content/style.css" rel="stylesheet" type="text/css" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="Hackathon-Journal/Content/style.css" rel="stylesheet" type="text/css" />
    <link href="../Hackathon-Journal/Content/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Bootstrap JS and Jquery -->
    <script src="Scripts/jquery-3.0.0.min.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <title>Journal Entry - Read</title>
</head>
<body>
    <!--Open Header for future use-->
    <header style="background-color: blue;">
        <h2 style="color: white; margin-left:10px;">Journal</h2>
    </header>
    <main id="maincontent">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8">
                <div id="content">
                <?php 

                
                echo($entryBox);
                ?>
                  
                </div>
            </div>
            <div class="col-sm-2">
        </div>
    </div>
        </main>
</body>
</html>