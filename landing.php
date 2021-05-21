<html>
    <head>
        <title>Search For Movies</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">

        function display()
        {
          var title = $("#userInput").val();
          var url = "http://www.omdbapi.com/?";
          var data = "apikey=38f65a33?&t=" + title;

          $.get(url, data).done(function(response)
          {
            $("#movies").html(response.Title + response.Year);
          });
        }

        $(document).ready(function()
        {
          $("#display").on("click", display);
        });

        </script>

    </head>
    <body>
        <!-- This is the landing page to search for movies
        <form action="home.html">
            <button id="logout" formaction="home.html">logout</button>
         </form> -->

         <main id="main">
           <h1> Movie Search </h1>

           <h2>
             <?php echo $_GET['username'] ?>
           </h2>

           <input type="text" id = "userInput">

           <button id = "display">
             Click to display results
           </button>

           <div id = "movies">

           </div>


         </main>

    </body>
</html>
