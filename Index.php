<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Future Value Calculator</title>


<!--  (this is an html comment...)
I have included the following css file in the application folder
The most important thing that it does is to display your error
message in red.
-->




    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
    <h1>Future Value Calculator</h1>

<!--  (this is an html comment...)
Display (echo) an error message here, if there is one
(if $error_message isn't empty)
 $error_message should be set in the display_results.php file
 that is where you will validate the input
 
 -->


    <?php if (!empty($error_message)) { ?>
        <p class="error"><?php echo $error_message; ?></p>
    <?php }
 
 // creating form ?>
 

    <form action="display_results.php" method="post">
 

        <div id="data">
            <label>Investment Amount:</label>
            <input type="text" name="investment"
                   value="<?php echo $investment; ?>"/><br />

            <label>Yearly Interest Rate:</label>
            <input type="text" name="interest_rate"
                   value="<?php echo $interest_rate; ?>"/><br />

            <label>Number of Years:</label>
            <input type="text" name="years"
                   value="<?php echo $years; ?>"/><br />
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate"/><br />
        </div>

    </form>
    </div>
</body>
</html>
