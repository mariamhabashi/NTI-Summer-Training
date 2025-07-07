<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NTI Day2</title>
    </head>
    <body>
        <form action="">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <!-- <select>
                <option>1905</option>
                <option>1906</option>
                <option>1907</option>
                <option>1908</option>
            </select> -->
            <?php
            echo "<select>";
            for($i=date("Y");$i>=1905;$i--){
                echo "<option>$i</option>";
            }
            echo "</select>";
            ?>
        </form>
    </body>
</html>
