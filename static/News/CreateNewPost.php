<?php 
session_start(); 
if(!isset($_SESSION['login']))
{
    header("Location: /static/MainPage.php");
    Exit();
}
?>
<html>
    <head>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <div class="wrapper">
        <body>
            <header>
                <h1>
                    Create Post page
                </h1>        
            </header>
            <?php include '/dev/WebProject/static/header.php';?>
            <main>
                <div class="postCreation">
                    <input type="text">
                    <textarea>Description</textarea>
                    <button> Add post image. </button>
                </div>
            </main>

            <footer>
                Just a footer
            </footer>
        </body>
</div>
</html>