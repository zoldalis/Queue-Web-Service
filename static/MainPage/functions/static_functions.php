<html>
    <head>
        <link rel="stylesheet" href="../../../css/style.css">
    </head>
    <div class="wrapper">
    <body>
        <header>
            <h1>
                Static Functions
            </h1>        
        </header>
        <div class="nav">
            <ul>
                <ul><a href="../../MainPage.php">Main Page</a></ul>
                <ul><a href="../functions.php">Functions</a>
                    <li><a href="static_functions.php">> Static Functions</a></li>
                </ul>
                <ul><a href="../operators.php">Operators</a>
                    <li><a href="../operators/overloaded_operators.php">> Overloaded Operators</a></li>
                </ul>
            </ul>
        </div>
        <main>
            <p class="TextContent">
                We can define class members static using static keyword. When we declare a member of a class as static it means no matter how many objects of the class are created, there is only one copy of the static member.
                A static member is shared by all objects of the class. All static data is initialized to zero when the first object is created, if no other initialization is present. We can't put it in the class definition but it can be initialized outside the class as done in the following example by redeclaring the static variable, using the scope resolution operator :: to identify which class it belongs to.
                Let us try the following example to understand the concept of static data members 
            </p>

            <img class="context_image" src="../../../img/code_ex4.png">
        </main>
        <footer>
            <b>Just a footer</b>
        </footer>
    </body>
    
    </div>
</html>