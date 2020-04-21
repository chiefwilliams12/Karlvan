<!DOCTYPE HTML>
<html>
    <head>
        <title> Chief's Login Page</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        
    </head>
        <body>
           <div class="container">
              <div class="Login-Box">
               <div class="row">
                   <div class="col-md-12 Login-Left" >
                       <h2> Login Here</h2>
                       <form action="validation.php" method="post">
                           <div class="form-group">
                               <label>Username</label><br>
                               
                               <input type="text" name="User" class="form-control" required>
                           </div>
                           
                           <div class="form-group">
                               <label>Password</label><br>
                               <input type="password" name="Password" class="form-control" required><br><br>
                               <a href="#" class="NonUser">Don't Have Account, Click Here</a><br>
                               
                             <br>  <button type="submit" class="btn btn-primary">Login</button>
                               
                           </div>
                           
                       </form>
                   </div>
                   
                   
               </div>
               
           </div>
            </div>
        </body>
    
</html>