<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Music Online Complete Library</title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
       
        <!-- IMPORTED FONTS -->
        <link rel="stylesheet" href="https://use.typekit.net/zfx3qgp.css">

        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="css/styles.css">

        <?php

            // connection to database
            require('includes/dbconnexion.php');

            // query to display all information from the database by alphabetical order of artist's name
            $sql = mysqli_query($con, "SELECT * FROM music_library ORDER BY artist");

        ?>

    </head>

    <body>

        <div class="container text-center text-white mt-3 mt-sm-5 py-5" id="top">

            <header class="mb-4 pb-4 pb-lg-5">
                <h1>MusicOnline.Com</h1>
                <h3>Our Full Library</h3>
            </header>

            <!-- search button -->
            <a href="index.php" class="btn text-white search">Search Our Library</a>

        </div>
        
        <!-- table of results -->
        <div class="container mb-5">
             
            <?php

                // beginning of the display table
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
                    <tbody>'
                ;
                // (these table headers are displayed only above large breakpoint)
                // beginning of the body of the table
 
 
                // while loop with all the rows 
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

                echo '</tbody></table>'; //end of the table

                // closes database connexion
                mysqli_close($con);

            ?>


            <div class="text-center mt-4 mb-2"> 
                <!-- buttons -->
                <a href="index.php" class="btn text-white search">Search Our Library</a>
                <a href="#top" class="btn text-white search">Back to Top</a></div>
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