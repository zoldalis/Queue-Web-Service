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
                     if(isset($_GET["answer"]) && $_GET["answer"] == 0)
                        echo("<label style='margin-left: 50px;' class='red'>Данные введены неверно!</label>");
                     ?>
                <form class="authForm" method="post" action="auth.php">
                    <label>Login</label>
                    <input type="text" name="loginText">
                    <label>Password</label>
                    <input type="password" name="password">
                    <br>
                    <input type="submit" name="login" value="Login"> <button> <a href="/static/MainPage.php">Back</a></button>
                    
                </form>
            </div>
        </body>
    </div>
</html>