<?php 
require_once "signupfunction.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <script src="main.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="in">
                <h2>GetyourBooks</h2>
                <div>
                    <p> Want a career in tech? <a href="">Fill to get premium books</a></p>
                    <form action="" method="post">
                        
                        <label>Name</label> <br/><input type="text" name="name" required> <br/><br/>
                        <label>Email</label> <br/><input type="email"name="email" required> <br/>
                        <input type="radio" name="category" value="Web Design" checked > Web Design (HTML + CSS) </br></br>
                        <input type="radio" name="category" value="Javascript"required> Fullstack Javascript </br></br>
                        <input type="radio" name="category" value="Backend" required> PHP + MYSQL </br></br>
                        <button type="submit" class="btn" id="btn">Enter</button>
                    </form>
                </div>
                
            </div>
        </div>

       
    </body>
</html>
</html>