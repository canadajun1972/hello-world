<?php
     include 'dbconnect.php';
?>

<!doctype html>
<html>
    <head>

            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
           
            </head>

       <script>
        $(document).ready(function(){
            var commentscount = 2;
            $('.btn').click(function(){
                commentscount = commentscount + 2;
            $('#comments').load('load-comments.php',{
                  commentNewCount:commentscount
               });

            });
        });

       </script>
     
        <body>

           <div id="comments">
           
          <?php
         //       $sql="select * from id limit 2"; 
          //      $result = mysqli_query($conn,$sql);
          ///        if(mysqli_num_rows($result) > 0){
           //           while($row = mysqli_fetch_assoc($result)){
           //               echo '<p>';
            //              echo $row['author'];
          //                echo '<br>';
           //               echo $row['message'];
           //               echo '</p>';
           //           }
           //       }else{
           //           echo "no comments";
          //        }
         ?>   
           
           </div>
        <button class="btn">Click to see comments</button>

        </body>

</html>
