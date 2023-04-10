<h4>
    <?php
        if(isset($_GET["first"]) && isset($_GET["last"]) && isset($_GET["age"])){
            $message = " You were missing the information below:  <br><br>";
            if (empty($firstname)){
                $message .= "First Name <br>";
            } 
            if (empty($lastname)){
                $message .= "Last Name <br>";
            } 
            if (empty($age)){
                $message .= "Age <br>";
            }
            $message .= "<br> Please enter all information in again. <br>";
            echo $message;
        }
    ?>
</h4>



<form action="<?php echo $_SERVER['PHP_SELF']?>">
<label for="first"> First Name : </label>
<input type ="text" id="first" name ="first" autocomplete= "off">
<label for="last"> Last Name : </label>
<input type ="text" id="last" name ="last" autocomplete= "off">
<label for="age"> Age : </label>
<input type ="text" id="age" name ="age" autocomplete= "off">
<div>
    <button type="Submit">Submit</button>
    <button type="Submit" formmethod = "post">Submit using POST</button>
    <button type= "reset">Reset</button>
</div>
    </form>
