<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>News</title>
  <link rel="stylesheet" href="admin(control).css">
</head>
<body style="background-color:#bce8f1">
  <div class="main">
                <h2 style="text-align: center"> Add news to your page </h2>
                <div class="news">
                      <form action="" method="post">
                        @csrf
                        <textarea rows="10"  cols="80" class="text" type="text" name="news" placeholder="Add Something"></textarea><br><br>
                        <!-- <input type="text" name= "news" class="text"> <br> <br> -->
                        <button type="submit" id="submit" onclick="">Submit</button>


                        <script>
                          function changepage(){
                            window.open("Tax_system.html");
                          }
                        </script>
                        <button onclick="changepage()">Back</button>
                      </form> 
                </div> 
  </div>     
                      
              
    
  
</body>
</html>