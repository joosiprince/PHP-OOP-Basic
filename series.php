<?php

$result = ' ';

if(isset($_POST['btn'])){
    require_once 'FullName.php'; // page add
    $fullName = new FullName();  // object create with the name of class
    $fullName -> makeSerialNumber($_POST); //access to function with object sign
    $result = $fullName -> makeSerialNumber($_POST);
}



?>

<form action="" method="POST">
    <table>
        <tr>
            <th> Start Number </th>
            <td> <input type="number" name="startNumber" value=" " >  </td>
        </tr>

        <tr>
            <th> Ending Number </th>
            <td> <input type="number" name="endNumber" value=" " >  </td>
        </tr>
        <tr>
            <th> Result </th>
            <td> <textarea> <?php echo $result; ?> </textarea>  </td>
        </tr>

        <tr>
            <th>  </th>
            <td> <input type="submit" name="btn" value="Submit">  </td>
        </tr>

    </table>
</form>