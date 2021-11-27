


<script>document.title = document.getElementsByTagName("h1")[0].textContent; </script>
    
<div class="nav">
                <ul>
                    <ul><a class="red">Main Page</a></ul>

                    <ul><a href="MainPage/functions.php">Functions</a>
                        <li><a href="MainPage/functions/static_functions.php">> Static Functions</a></li>
                    </ul>
                    <ul><a href="MainPage/operators.php">Operators</a>
                        <li><a href="MainPage/operators/overloaded_operators.php">> Overloaded Operators</a></li>
                    </ul>
                    <ul>
                        <a href="/static/Calc/calc.php"> Calculator </a>
                    </ul>
                    <?php
                    if(isset($_GET["answer"]) && $_GET["answer"] == 1 && isset($_GET["login"]))
                    {
                        echo("<ul class='register'>{$_GET['login']}</ul>");
                        echo("<ul class='login'><a href='/static/MainPage.php?answer=0'>Logout</a></ul>");
                    }
                    else
                        echo("<ul class='register'><a href='MainPage/form.php'> Register</a> </ul>
                            <ul class='login'><a href='/static/Auth/login.php'> Login</a> </ul>");
                    ?>
                </ul>
</div>

