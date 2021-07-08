<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Music Online Search Results</title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
       
        <!-- IMPORTED FONTS -->
        <link rel="stylesheet" href="https://use.typekit.net/zfx3qgp.css">

        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="css/styles.css">

        <?php

            // variable that stores user input from the form
            $musicSearch  = htmlspecialchars($_GET['musicSearch'], ENT_QUOTES, 'UTF-8'); 
            // for security, the function converts some predefined characters to HTML entities

            // check if value has been sent and if not empty
            if(isset($musicSearch) && !empty($musicSearch)) {

                //connection to databse if data has been sent
                require('includes/dbconnexion.php');

                $searchq = mysqli_real_escape_string($con, $musicSearch); 
                // $searchq stores a cleansed string

                // SQL statement - search match in the database in the columns artist, album, year and genre  
                $sql = mysqli_query($con, "SELECT * FROM music_library 
                WHERE artist LIKE '%$searchq%' 
                OR album  LIKE '%$searchq%' 
                OR year  LIKE '%$searchq%' 
                OR genre  LIKE '%$searchq%'
                ORDER BY artist");
        
            } //end of if statement

            // if no match found in the database
            else {

                echo "<div class='container text-center text-white mt-3 mt-sm-5 py-5'>
                <h1>MusicOnline.Com</h1>
                <h3 class='mb-5 pb-3'>Discover New Music Online</h3>
                <p>Please enter a search (artist, album, release year or genre)</p>";
        
                //die function prevents any further php processing and terminates the db connection
                die('<p><a href="index.php" class="btn search text-white">Search Again</a></p></div>');
            }

        ?>

    </head>

    <body>

        <div class="container text-center text-white mt-3 mt-sm-5 py-5">

            <header class="mb-4 pb-4 pb-lg-5">
                <h1>MusicOnline.Com</h1>
                <h3>Results for "<?php echo $musicSearch?>": <?php echo mysqli_num_rows($sql)?></h3>
            </header>

            <!-- extra search button only if matches found in the db-->
            <?php
            if (mysqli_num_rows($sql) !== 0) {
            echo'<a href="index.php" class="btn text-white search">Search Again</a>';
            }
            ?>

        </div>
            
        
        <div class="container mb-5">

            <?php

                // if no row in database matches the search
                if (mysqli_num_rows($sql) == 0) {

                    // display message to user and end connection
                    echo ("<div class='text-center text-white'>
                    <p>No match found.</p>");
                    die ('<p><a href="index.php" class="btn text-white search">Search Again</a></p>');
                    echo '</div>'; 
                    //button "search again" sends to to home page 
                }

                // if match found in the database
                // results displayed in a table
                echo '<table class="table border-dark mt-md-5">
                <thead>
                    <tr class="row">
                        <th scope="col" class="col-lg-2 d-none d-lg-block">Artist</th>
                        <th scope="col" class="col-lg-2 d-none d-lg-block">Album</th>
                        <th scope="col" class="col-lg-1 d-none d-lg-block">Year</th>
                        <th scope="col" class="col-lg-1 d-none d-lg-block">Genre</th>
                        <th scope="col" class="col-lg-2 d-none d-lg-block">Album Cover</th>
                        <th scope="col" class="col-lg-4 d-none d-lg-block">Listen</th>
                    </tr>
                </thead>
                <tbody>'; // (these table headers are displayed only above large breakpoint)

                    // one row per match in the database
                    while($row = mysqli_fetch_array($sql)) {
                        echo '<tr class="row">';
                        echo '<th scope="col" class="col d-lg-none">Artist</th>'; // responsive table header
                        echo '<td scope="row" class="col-lg-2">' .$row['artist'] . '</td>';
                        echo '<th scope="col" class="col d-lg-none">Album</th>'; // responsive table header
                        echo '<td class="col-lg-2">' .$row['album'] . '</td>';
                        echo '<th scope="col" class="col d-lg-none">Year</th>'; // responsive table header
                        echo '<td class="col-lg-1">' .$row['year'] . '</td>';
                        echo '<th scope="col" class="col d-lg-none">Genre</th>'; // responsive table header
                        echo '<td class="col-lg-1">' .$row['genre'] . '</td>';
                        echo '<th scope="col" class="col d-lg-none">Album Cover</th>'; // responsive table header
                        echo '<td class="col-lg-2">';
                        echo "<img class='thumb' src=" .'"' .$row['albumCover'].'"'. ">";
                        echo '</td>';
                        echo '<th scope="col" class="col d-lg-none">Listen</th>'; // responsive table header
                        echo '<td class="col-lg-4"><audio controls><source src="' .$row['play'] . '"></audio></td">';
                        echo '<td class="d-lg-none">&nbsp;<br>&nbsp;</td>';
                        echo '</tr>';
                    }

                echo '</tbody></table>'; // end of the table

                mysqli_close($con); // end of the db connection

            ?>

            <!-- buttons -->
            <div class="text-center">
                <a href="index.php" class="btn search text-white">Search Again</a>
                <a href="display-all.php" class="btn search text-white">View All Library</a>
            </div>

        </div>

        <!-- footer -->
        <footer class="mt-5">
            <div class="text-center sticky-bottom pb-2">&#169; musicOnline.com, 2021</div>
        </footer>
    
        <!-- BOOTSTRAP JAVASCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" 
            integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    </body> 

</html>