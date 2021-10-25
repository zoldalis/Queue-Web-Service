<html>
    <head>
        <link rel="stylesheet" href="../../css/style.css">
    </head>
    <header>
        <h1>
            Content maker form
        </h1>        
    </header>
    <body>
        <div class="nav">
            <ul>
                <ul><a href="../MainPage.php">Main Page</a></ul>
                <ul><a href="functions.php">Functions</a>
                    <li><a href="functions/static_functions.php">> Static Functions</a></li>
                </ul>
                <ul><a href="operators.php">Operators</a>
                    <li><a href="operators/overloaded_operators.php">> Overloaded Operators</a></li>
                </ul>
                <ul><a href="form2.php">Second Form</a>
                </ul>
            </ul>
        </div>
            
        <div class="forms">
            <br>
            <form >
                <fieldset>
                    <legend class="h">Contact Details</legend>
                    <span class="form_imp"> <label for="name">Name</label> <input type="text" placeholder="Sample text" id="name" required pattern="^[А-Яа-яЁё\s]{2,} [А-Яа-яЁё\s]{2,}"></span>
                    <span class="form_imp"> <label for="tel">Telephone</label> <input type="tel" placeholder="89955566893" id="tel" required pattern="[0-9]{11}"></span>
                    <span class="form_imp"> <label for="mail">Email</label> <input type="email" placeholder="sample@sample.ru" id="mail" required></span>
                    <span class="form_imp"> <label for="web">Web site</label> <input type="url" placeholder="www.sample.ru" id="web" required></span>
                </fieldset>

                <fieldset>
                    <legend class="h">Person Details</legend>
                    <span class="form_imp"><label for="bday">Birthday</label><input type="date"  id="bday" required></span>
                    
                    <span class="form_imp"><label for="gen">Gender</label>
                    <select  id="gen"><option>Male</option><option>Female</option></select> </span>
                    <span class="form_imp"><label for="reg">Registration date</label><input class="cursorText" type="date" id="reg" required></span>
                    <label>Why did you decide to be a content maker for our site? </label>
                    <textarea required rows="5" cols="50"> </textarea>
                    
                     <label>Pick your preferences</label><br>
                    <input type="checkbox"  name="vib1" value="Moderator" id="1"> <label class="preferLabel" for="Moderator">Moderator</label>
                    <input  type="checkbox" name="vib2" value="Content maker" id="2"> <label class="preferLabel" for="Content maker">Content maker</label>
                    <span class="form_imp"><label>Color your nickname</label><input  type="color"></span>
                </fieldset>
                <span class="form_imp"><input type="submit"  value="Submit"> <input type="reset" value="Reset"> </span>
            </form>
            
            <br>
        </div>



    </body>
    <footer>
        <b>Just a footer</b>
    </footer>
</html>