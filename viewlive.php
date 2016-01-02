 <!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="style.css" rel="stylesheet">
        <script src="script.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <title>EasyCric | Easily get cricket scores</title>
        <script>
            $(document).ready(function() 
                    
    {
        setInterval( function(){$('.tabs2').load("score.php?id=<?php echo $_REQUEST["id"] ?>");    },5);       
            
     
      
    }
            
            );
            </script>
    </head>
    <body>
        <div class="header">
            <div class="head">EasyCric</div>
            <h3 class="sub">The awesome cricket destination...</h3>
        </div>
      
    
        <div class="container">
            <h3>Match Score</h3>
            <div class="tabs2">
                     <?php
   include 'score.php';

?>
            </div>
           
         
        </div>
         <div class="footer">
             <a target='_blank' href='http://akshatweb.in'>Made with <span style="color: #f62459">&hearts;</span> by Akshat Joshi</a>
            </div>
    </body>
</html>