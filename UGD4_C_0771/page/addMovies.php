    <?php
        include '../component/sidebar.php'     
    ?>

        <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF; border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
            <div class="body d-flex justify-content-between">
                <h2>Add Movie</h2   >
            </div>
            <hr>
                    
                <body>
      <left>    
         <form action="../page/addMovieProcess.php" method="post">
             
<p>
               <label for="Name">Name</label>
               &nbsp;&nbsp;
               <input type="text" name="name" id="name" style="margin-left:0.2cm">
            </p>
 
             
<p>
               <label for="Genre">Genre</label>
               &nbsp;&nbsp;
               <input type="text" name="genre" id="genre" style="margin-left:0.2cm">
            </p>
 
             

               <label for="Release">Release</label>
                
               <input type="text" name="release" id="release" style="margin-left: 0.2cm">
            </p>
 
             
<p>
               <label for="Season">Season</label>
               <input type="text" name="season" id="season" style="margin-left: 0.3cm;">
            </p>
 
             
<p>
               <label for="Synopsis">Synopsis</label>
               <input type="text" name="synopsis" id="synopsis" style="margin-left:auto">
            </p>

            
            <a href="listMoviesPage.php" style=" margin-top:0.3cm; width:3cm;"class="btn btn-primary" name="addMovies">Add</a>
         </form>
      </center>
   </body>


    
        </div>
    