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

    <title>Journal Entry - Create </title>

</head>
<header style="background-color: blue;">
        <h2 style="color: white; margin-left:10px;">Journal</h2>
    </header>
<body>
    <!-- Main for future background editing -->
    <main>
        <!-- This row is separated into col-2, col-8, and col-2 formatting with the first col as the side bar and the second being completely unused. -->
        <div class="row">
                <div class="col-sm-2">
                </div>
                <div id="entry" class="col-sm-8">  
                <?php
                    if (isset($message)) {
                        echo "<p class='warning'>$message</p>";
                        unset($message);
                    }
                    ?> 
                    <!-- This form will prompt the user for Title, Category, Entry, Upload Image, and Date -->
                    <form action="/Journal/index.php">
                      <div class="form-group">
                        <label for="title">Entry Title:</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter This Entry's Title" name="entryTitle">
                      </div>
                      <!-- Category dropdown/select options-->
                      <div class="form-group">
                  
                        <label for="categories-1">Categories:</label>
                        <select id="categories-1" name="entryCategoryOne">
                            <option value="family">Family</option>
                            <option value="friends">Friends</option>
                            <option value="school">School</option>
                            <option value="work">Work</option>
                            <option value="outdoors">Outdoors</option>
                            <option value="home">Home</option>
                            <option value="travel">Travel</option>
                            <option value="other">Other</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="categories-2">Categories:</label>
                        <select id="categories-2" name="entryCategoryTwo">
                            <option value="family">Family</option>
                            <option value="friends">Friends</option>
                            <option value="school">School</option>
                            <option value="work">Work</option>
                            <option value="outdoors">Outdoors</option>
                            <option value="home">Home</option>
                            <option value="travel">Travel</option>
                            <option value="other">Other</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="text">Entry:</label>
                        <textarea id="text" name="entryText" rows="10" cols="80" placeholder="Start Writing Your Entry Here"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="img">Upload an Image:</label>
                        <input type="file" class="form-control" id="img" name="entryPicture" accept="image/*">
                      </div>
                      <div class="form-group">
                        <label for="date">Today's Date:</label>
                        <input type="date" class="form-control" id="date" name="entryDate" min="2020-01-01" max="2025-12-31">
                      </div>
                      <div class="entry-button">
                        <button id="btn-entry" type="submit" class="btn btn-success">Post Entry</button>
                        <input type="hidden" name="action" value="create">
                      </div>
                    </form>
                </div>
                <div class="col-sm-2"></div>
        </div>
    </main>
</body>
</html>