<?php
echo "<pre>";
print_r($_POST);

require_once 'FullName.php';
$demo = new FullName();

    $result = ' ';
    if(isset($_POST['btn'])){
    $result = $demo->makeFullName($_POST);
}
?>
<form action="" method="POST">
    <table>
        <tr>
            <th> First Name </th>
            <td> <input type="text" name="firstName" value="<?php if(isset($result['firstName'])) { echo $result['firstName']; } ?>" >  </td>
        </tr>

        <tr>
            <th> Last Name </th>
            <td> <input type="text" name="lastName" value="<?php if(isset($result['lastName'])) { echo $result['lastName']; } ?>" >  </td>
        </tr>
        <tr>
            <th> Full Name </th>
            <td> <input type="text" name="fullName" value="<?php if(isset($result['fullName'])) { echo $result['fullName']; } ?>" >  </td>
        </tr>

        <tr>
            <th> </th>
            <td> <input type="submit" name="btn" value="Submit">  </td>
        </tr>

    </table>
</form>