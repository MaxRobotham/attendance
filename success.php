<?php
    
    $title = 'success';
    require 'includes/header.php';
?> 

<h1 class ="text-center text-success"> You Have Been Registered</h1>

    <?php
        echo $_GET[
        'firstname'
        ]

    ?>

<br>
<br>
<br>
<?php require 'includes/footer.php';?> 