<?php
    
    $title = 'View Records';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    $results =  $crud->getAttendees();
?> 

<table class="table table-striped">
    <tr>
        <th>#</th>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Date of Birth</td>
        <td>Email Address</td>
        <td>Contact Number</td>
        <td>Speciality</td>
    </tr>
    <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
        <tr>
            <td><?php echo $r['attendee_id']?></td>
            <td><?php echo $r['firstname']?></td>
            <td><?php echo $r['lastname']?></td>
            <td><?php echo $r['dateofbirth']?></td>
            <td><?php echo $r['emailaddress']?></td>
            <td><?php echo $r['contactnumber']?></td>
            <td><?php echo $r['name']?></td>
            </tr>
    
    <?php }?>
</table>





<br>
<br>
<br>
<?php require_once 'includes/footer.php';?> 