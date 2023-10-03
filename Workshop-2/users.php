<!-- crear una tabla donde se muestren los usuarios -->

<table>
  <tr>
    <th>FirstName</th>
    <th>Lastname</th>
    <th>Password</th>
    <th>E-mail</th>
    <th>ProvinceID</th>
    <th>Province</th>
  </tr>
  <?php
    foreach($users as $id => $user) {
        $firstName = $user['firstName'];
        $lastName = $user['lastName'];
        $email = $user['email'];
        $province_id = $user['province_id'];
        $province = $user['province'];

        echo "<tr> <td>$firstname</td> <td>$lastname</td> <td>$password</td> <td>$email</td> <td>$province_id</td> <td>$province</td> >/tr>";
    }
?>
</table>

