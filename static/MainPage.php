<html>
    <head>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <div class="wrapper">
        <body>
            <header>
                <h1>
                    C++ programming language GuideBook
                </h1>        
            </header>
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
            <main>
                <p class="TextContent">
                <b>C++</b> is a general-purpose programming language created by Bjarne Stroustrup as an extension of the C programming language, or "C with Classes". The language has expanded significantly over time, and modern C++ now has object-oriented, generic, and functional features in addition to facilities for low-level memory manipulation. It is almost always implemented as a compiled language, and many vendors provide C++ compilers, including the Free Software Foundation, LLVM, Microsoft, Intel, Oracle, and IBM, so it is available on many platforms.[9]
                C++ was designed with an orientation toward system programming and embedded, resource-constrained software and large systems, with performance, efficiency, and flexibility of use as its design highlights.[10] C++ has also been found useful in many other contexts, with key strengths being software infrastructure and resource-constrained applications,[10] including desktop applications, video games, servers (e.g. e-commerce, web search, or databases), and performance-critical applications (e.g. telephone switches or space probes).
                </p>

                <img class="context_image" src="../img/code_ex1.png">
            </main>

            <footer>
                Just a footer
            </footer>
        </body>
</div>
</html>