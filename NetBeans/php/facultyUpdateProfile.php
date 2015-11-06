<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <head>
        <script src="../js/tyscripts.js"></script>
        <link href ="../css/tystyles.css" rel="stylesheet">
        <title>CYL Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    </head>
    <body>
        <?php
        include "../header.html";
     #   include "../nav.html";
        ?>
        <main>
            <h2>Profile</h2>
            <form method = "post" action="processFacultyUpdateProfile.php" class="title" >
                First Name:<input type="text" name="firstName">Last Name:<input type="text" name ="lastName"><br/>
                Address:<input type="text" name="address"><br/>
                City:<input type="text" name="city">State:<input type="text" style="width: 20px" name="state">Zip Code:<input type="number" name=""zip><br/>
                Country:<input type="text" name="country"><br/>
                Phone Number:<input type="text" name="phone"><br/>
                Email Address:<input type="text" name="email"><br/>
                Birth Date:<input type="date" name="birthDate"><br/>
                Ethnicity:<input type="text" name="ethnicity"><br/>
                <input type="checkbox" type="required">
                Agreement to Waivers<br/>
                <input type="submit" value="Save Changes"> </input>
            </form>
        </main>
        <?php
        include "../facultyAside.html";
        include "../footer.html";
        ?>
    </body>
</html>
