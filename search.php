 <?php 
 
 require "dbconnection.php";
 if ($_SERVER['REQUEST_METHOD']==POST){
     $search= $_POST['search'];

 }
                
         
  ?>
 <!DOCTYPE html>
 <html lang="en">

     <head>
         <title>register </title>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     </head>

     <body>

         <div class="container">
             <h2> create post  </h2>
             <form method="post" action="result.php?search=search"
                 enctype="multipart/form-data">

                 <div class="form-group">
                     <label for="exampleInputEmail1">enter your search key </label>
                     <input type="text" name="search" class="form-control" id="exampleInputName" aria-describedby=""
                         placeholder="Enter your search key ">
                 </div>



                 <button type="submit" class="btn btn-primary">search</button>
             </form>
         </div>

     </body>

 </html>
