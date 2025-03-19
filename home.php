<?php include "header.php" ?>

<div>
    <h2>THIS IS HOMEPAGE</h2>


    <form action="http://localhost/karan/submit.php" method="POST" id="myForm">
        <label for="input">TODO :</label>
        <input type="text" name="task" id="input" placeholder="enter your todo here" required>
        <input type="date" name="time" id="date" required>
        <button type="submit" id="submit">SUBMIT</button>

    </form>
   
    <?php include "fetch_data.php" ?>

    

    <?php include "footer.php" ?>