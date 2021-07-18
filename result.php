<?php

require 'dbconnection.php';
 if (isset($_POST['submit'])){
     $search = mysqli_real_escape_string($conn, $_POST['search']);//to make sure that the data from the user is safe without any Injection

     
    $sql = "SELECT * FROM posts where title LIKE '%$search%' OR  content LIKE '%$search%' ";
    $op = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Search Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      

        <link rel="stylesheet" href="">
        <!-- custom css -->
  
    </head>
    <body style="width:95%;margin-left:10px;margin-right:10px;">
   

        <h1 style="text-align:center;margin-bottom:50px;margin-top:50px;"> the result of the search</h1>
       
        <table>
        
             <tr>
               <th >Id</th>
               <th >Title</th>
               <th >Content</th>
               <th >Date</th>
             

            </tr>
     
          
        <tbody>
            <?php
            $numrows = mysqli_num_rows($op);
              echo $numrows;
            if($numrows > 1){
              
                ?>

        <table>
        
             <tr>
               <th >Id</th>
               <th >Title</th>
               <th >Content</th>
               <th >Date</th>
             

            </tr>
           <?php
            while($data = mysqli_fetch_assoc($op)){
            ?>
         <tr>
             <td><?php echo $data['id'];?></td>
             <td><?php echo $data['title'];?></td>
             <td><?php echo $data['content'];?></td>
             <td><?php echo $data['date'];?></td>
           
         </tr>
          <?php }}else{
            echo'there are no results match your search key ';
            ?>
            <tr>
             <td><?php echo 0;?></td>
             <td><?php echo 0;?></td>
             <td><?php echo 0;?></td>
             <td><?php echo 0;?></td>
           
         </tr>
         <?php
          }}
       
          ?>

         
       
        </table>
    
       
    
    </body>
</html>