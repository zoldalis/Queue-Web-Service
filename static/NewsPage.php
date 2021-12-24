<html>
    <head>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <div class="wrapper">
        <body>
            <header>
                <h1>
                    News Page
                </h1>        
            </header>
            <?php 
            include '/dev/WebProject/static/header.php';
            if(isset($_SESSION['login']))
            {
                echo("<ul style='margin-left:auto;margin-right:auto; background: rgb(255, 122, 189); border: 1px black solid; shadow: 5px 10rd;'><a href='/static/News/CreateNewPost.php'> Add new post </a></ul>");
            }
            ?>
            
            <main>
                <p class="TextContent">
                <b>C++ 20 comes OUT!</b> 
                </p>
            </main>

            <footer>
                Just a footer
            </footer>
        </body>
</div>
</html>