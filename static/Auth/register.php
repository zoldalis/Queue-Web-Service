<html>
    <head>
        <head>
            <link rel="stylesheet" href="/css/style.css">
        </head> 
    </head>
    <div class="authWrapper">
        <body>
            <div class="authContainer">
                <?php 
                     if(isset($_GET["answer_text"]) && isset($_GET["answer_val"]) && $_GET["answer_val"] == 0)
                        $text = $_GET["answer_text"];
                        echo("<label style='margin-left: 50px;' class='red'>{$text}</label>");
                     ?>
                <form class="authForm" method="post" action="auth.php">
                    <br>
                    <label for="name">Name</label>      
                    <input name="name" type="text"    placeholder="Name" id="name" required pattern="^[A-Za-z]{2,}">
                    <br>
                    <label for="mail">Email</label>     
                    <input name="email" type="email"  placeholder="sample@sample.ru" id="mail" required>
                    <br>
                    <label>Login</label>
                    <input type="text" placeholder="Login" name="loginText" required>
                    <label>Password</label>
                    <input type="password" placeholder="*******" name="password" required>
                    <br>
                    <input type="submit" name="register" value="Register"> <button> <a href="/static/MainPage.php">Back</a></button>
                </form>
            </div>
        </body>
    </div>
</html>