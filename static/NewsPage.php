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
            
            <main class="Posts">
                <?php 
                require_once '/dev/WebProject/static/News/NewsDB.php';
                $newsDBManager = new NewsDBManager();
                $news = $newsDBManager->getAllNews();
                while ($row = mysqli_fetch_array($news)) 
                {
                    ?>
                    <div class="Post">
                    <p><?php echo$row['Name'] ?></p>
                    <p><?php echo$row['Small_description'] ?></p>
                    <p><?php echo$row['Full_description'] ?></p>
                    </div>
                    <?php
                }
                ?>
                
            </main>

            <footer>
                Just a footer
            </footer>
        </body>
</div>
</html>