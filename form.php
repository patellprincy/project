<!DOCTYPE html>
<html lang="en">
<!-- head tag is created   -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<!-- style tag is used to enter an inline css  -->
<style>
    body
    {
        margin-left: 20%; /*provides space from the outside */
        box-sizing: border-box; /*allows to include padding and width of teh context added */
        /*sets the height and width */
        height: 500px; 
        width: 800px;
        background-color: black; /*sets the background color */
        color: burlywood; /*sets the font color*/
    }

    h4
    {
        color: beige; /*sets the font color for h4 tag*/
    }

    h3
    {
        color: blanchedalmond; /*sets the font color for h3 tag*/
    }
</style>

<!-- body tag is used  -->
<body>
    <!-- form action has been used to redirect the user to the checkout  -->
    <form action="checkout.php" method="POST">
        <!-- center tag is used to align the text to center  -->
    <center>
        <h3>Order Confirmation Form</h3>
    </center>
    <h4>Personal Particulars</h4>
    <!-- table 1 first row -->
        <center>
            <!-- table tag is used to build a form with specific rows and columns  -->
            <table>
                <!-- first row -->
                <tr>
                    <!-- first columns -->
                    <td>First Name</td>
                    <!-- the required field is used to indicate that the given field is required and cannot be submitted without entering data  -->
                    <td><input type="text" name="fname" id="fname" required>
                </td>
                </tr>
                <tr>
                    <td>Middle Name</td>
                    <td><input type="text" name="name" id=""></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lname" id="lname" required></td>
                </tr>
                <tr>
                    <td>Email ID</td>
                    <td><input type="email" name="email" id="email"></td>
                </tr>
                <tr>
                    <td>Enter your password</td>
                    <td><input type="password" name="password" id="" required></td>
                </tr>
                <tr>
                    <!-- the placeholder is used to display a pre-written text in the field  -->
                    <td>Street Number</td>
                    <td><input type="text" name="street" id="" placeholder="Enter your street number"></td>
                </tr>
                <tr>
                    <td>Residential Address</td>
                    <td><input type="text" name="address" id=""></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><input type="text" name="city" id=""></td>
                    <!-- the empty td tag has used to provide space -->
                    <td></td>
                    <td></td>
                    <td>Country</td>
                    <!-- select tag is sued to diaply a dropdown list  -->
                    <td><select name="country" id="">
                        <option value="" selected="selected" disabled="disabled">Select</option>
                        <option value="">Canada</option>
                        <option value="">USA</option>
                        <option value="">India</option>
                        <option value="">Australia</option>
                        <option value="">New Zealand</option>
                        <option value="">Africa</option>
                        <option value="">Greenland</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Mobile Number</td>
                    <td><input type="number" name="number" id=""></td>
                </tr>
            </table>
        </center>


        <h4>Account Particulars</h4>
        <!-- table 3 third row  -->
        <center>
            <table>
                <tr>
                    <td>Account Number</td>
                    <td><input type="text" name="" id="" placeholder="15 digit account number"></td>
                </tr>
                <tr>
                    <td>Select Your Bank</td>
                    <td><select name="" id="">
                        <option value="" selected="selected" disabled="disabled">Select</option>
                        <option value="">RBC</option>
                        <option value="">TD</option>
                        <option value="">CIBC</option>
                        <option value="">Scotiabank</option>
                    </select></td>
                </tr>

        <h3>Product & Purchasing Mode Details</h3>
            <table>
                <tr>
                    <td>Choose the Radio-type:</td>
                    <td><select name="type" id="type">
                    <option value="3.5 Floppy"> 3.5 Floppy Disk</option>
                    <option value="5.25 Floppy">5.25 Floppy Disk</option>
                    <option value="apple floppy">Apple Floppy Disk</option>
                    <option value="early floppy disk">Early Floppy Disk</option>
                    <option value="vintage floppy disk">Vintage Floppy Disk</option>
                </select></td>
                </tr>
            </table>
        </center>
    
  <!-- footer  -->
<th><b>Declaration</b></th><br>
<th>
I hereby declare that the information provided in this form is true, complete, and accurate to the best of my knowledge. I understand that any false, misleading, or omitted information may result in the rejection of this application or may be grounds for subsequent action by the concerned authorities.

I authorize [Organization/Bank Name] to verify the information provided and undertake any necessary checks to validate the details provided in this form.

I acknowledge that providing false information or misuse of this form may lead to legal consequences. <br>
<tr></tr> <br>

<th>Signature</th>
<th><input type="text" name="" id="" required></th> <br>
<!-- the tr tag is used provide the space -->
<tr></tr> <br>

<!-- a new column has been created  -->
<th>Date:</th>
<th><input type="date" name="" id="" required></th>
</th>

<!-- javascript has been used  -->
<center>
    <!-- the onclick function is used in submit button tag -->
<button onclick="submitForm()">Submit</button>
    <!-- script tag is used to define the javascript -->
    <script>
        // the function named submit form has been created 
    function submitForm() 
    {
        // the following code allows the value to be extracted from the fname id used earlier to define first name and displays an alert message wehn pressed submit 
        var fname = document.getElementById("fname").value;
        alert("Hello, " + fname + "!");
    }
</script>
<!-- the following type is used to reset the page  -->
    <input type="reset" name="" id="" value="RESET">
</center>

</form>

</body>
</html>