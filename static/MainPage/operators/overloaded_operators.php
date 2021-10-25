<html>
    <head>
        <link rel="stylesheet" href="../../../css/style.css">
    </head>
    <div class="wrapper">
        <body>
        <header>
            <h1>
                Overloaded Operators
            </h1>        
        </header>
        <div class="nav">
            <ul>
                <ul><a href="../../MainPage.php">Main Page</a></ul>
                <ul><a href="../functions.php">Functions</a>
                    <li><a href="../functions/static_functions.php">> Static Functions</a></li>
                </ul>
                <ul><a href="../operators.php">Operators</a>
                    <li><a href="overloaded_operators.php">> Overloaded Operators</a></li>
                </ul>
            </ul>
        </div>
            <main>
            <p class="TextContent">
                Besides the restrictions above, the language puts no other constraints on what the overloaded operators do, or on the return type (it does not participate in overload resolution), but in general, overloaded operators are expected to behave as similar as possible to the built-in operators: operator+ is expected to add, rather than multiply its arguments, operator= is expected to assign, etc. The related operators are expected to behave similarly (operator+ and operator+= do the same addition-like operation). The return types are limited by the expressions in which the operator is expected to be used: for example, assignment operators return by reference to make it possible to write a = b = c = d, because the built-in operators allow that.

                Commonly overloaded operators have the following typical, canonical forms:[1]
            </p>

            <img class="context_image" src="../../../img/code_ex5.png">
        </main>
            <footer>
                <b>Just a footer</b>
            </footer>
        </body>
    </div>
</html>