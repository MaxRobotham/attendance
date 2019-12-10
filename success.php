<?php
    
    $title = 'success';
    require 'includes/header.php';
?> 

<h1 class ="text-center text-success"> You Have Been Registered</h1>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
        <?php echo $_GET['firstname'].' '.$_GET['lastname']; ?>
        </h5>

        <h6 class="card-subtitle mb-2 text-muted">
        <?php echo $_GET['specialty']; ?>
        </h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>

</div>

    <?php
        echo $_GET['firstname'];
        echo $_GET['lastname'];
        echo $_GET['dob'];
        echo $_GET['specialty'];
        echo $_GET['email'];
        echo $_GET['phone'];

    ?>

<br>
<br>
<br>
<?php require 'includes/footer.php';?> 