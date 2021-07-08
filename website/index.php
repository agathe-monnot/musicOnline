<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Music Online</title>

        <!-- BOOTSTRAP CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
       
        <!-- IMPORTED FONTS -->
        <link rel="stylesheet" href="https://use.typekit.net/zfx3qgp.css">

        <!-- CUSTOM CSS -->
        <link rel="stylesheet" href="css/styles.css">

    </head>

    <body>
    
        <div class="container text-center text-white mt-3 mt-sm-5 py-5">

            <!-- INTRO -->
            <h1>MusicOnline.Com</h1>
            <h3 class="mb-5 pb-3">Discover New Music Online</h3>
        
            <!-- FORM -->
            <form action="display-result.php" method="GET">
                <label for="musicSearch" class="mb-1">Search our Music Library</label><br>
                <input type="text" name="musicSearch" id="musicSearch" placeholder="Artist, album, genre or release date ..."><br><br>
                <!-- 2 BUTTONS -->
                <input type="submit" name="submit" id="submit" value="Search" class="btn search text-white">
                <a href="display-all.php" class="btn search text-white">View All Library</a>
            </form>

        </div>

        <!-- footer -->
        <footer>
            <div class="text-center fixed-bottom pb-2">&#169; musicOnline.com, 2021</div>
        </footer>
     
            
        <!-- BOOTSTRAP JAVASCRIPT -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" 
            integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    </body> 

</html>