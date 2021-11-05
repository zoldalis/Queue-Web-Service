
<?php
    // Check if the form is submitted 
    if ( isset( $_POST['submit'] ) ) 
    { // retrieve the form data by using the element's name attributes value as key 
     // display the results echo 
    '<h3>Form GET Method</h3>';

    $name =     filter_var($_POST['name'],FILTER_SANITIZE_STRING);
    $email =    filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $tel =      $_POST['tel'];
    $url =      filter_var($_POST['url'],FILTER_SANITIZE_URL);
    
    echo 'Your name is '. $name . '<br>';
    echo nl2br('Your email is ' . $email . PHP_EOL);
    echo nl2br('Your tel is '.$tel.PHP_EOL);
    echo nl2br('Your url is ' . $url . PHP_EOL); 
    exit;
    }