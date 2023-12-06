<!DOCTYPE html>
<html>
    <!-- head tag has been created  -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Order Confirmation</title>
</head>

<!-- body tag has been created  -->
<body>

<!-- header tag has been used to create a header section  -->
    <header>
        <h1>Confirmation Page</h1>
    </header>

    <!-- another header tag has been created to create a nav bar  -->
    <header>
        <nav>
            <!-- unordered list has been created -->
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
            </ul>
        </nav>
    </header>

    <!-- the br tag are used to break the line and provide space between  -->
    <br>
    <br>
    <br>

    <!-- another section has been created to display the confirmation and thank you text  -->
    <section>
        <!-- font color is used to apply the color to the text written with the tag -->
    <font color=bisque>
        <!-- center tag is used to align the context within to the center  -->
        <center>
            <h3>Thank you for your order.<br> Your order has been successfully confirmed.</h3>
            <!-- the br tag is used to break the line and provide the space in between -->
            <br>
            <br>
            <h3>Order details:</h3>
        </center>

            <!-- a php format has been used to display the name and the order that has been ordered by the customer on the checkout page  -->
            <?php
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            echo('<p>Order Confirmed for: '.$fname.' '.$lname.'</p>');

            // indicates the type of floppy disk that has been ordered 
            $type = $_POST['type'];
            echo('<p>You have ordered: '.$type.'</p>');
            ?>

        </font>

    </section>

</body>
</html>
