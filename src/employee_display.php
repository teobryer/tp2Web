<?php 
require ("Employee.php");



$marius = new Employee(0,  "Marius", 1500, 20);
$jade = new Employee(0,  "Jade", 2100, 32);
$olivier = new Employee(0,  "Olivier", 2600, 45);

$array = array($marius, $jade, $olivier);

echo "<!DOCTYPE html>
<head>
<title>Afficher lignes</title>
    
<link rel=".'stylesheet'." href=".'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'." integrity=".'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T'." crossorigin=".'anonymous'.">
 <script src=".'https://code.jquery.com/jquery-3.3.1.slim.min.js'." integrity=".'sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo'." crossorigin=".'anonymous'."></script>
<script src=".'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'." integrity=".'sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1'." crossorigin=".'anonymous'."></script>
<script src=".'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'." integrity=".'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM'." crossorigin=".'anonymous'."></script>
</head>
<body>
<h1>Hello World Example</h1>";




echo "<table class=".'table'.">
<thead>
<tr>
<th scope=".'col'.">Id</th>
<th scope=".'col'.">Nom</th>
<th scope=".'col'.">Salaire TVA</th>
<th scope=".'col'.">Age HT</th>
</tr>
</thead>
<tbody>";

foreach ($array as $employee){
    echo " <tr>
    <th scope=".'row'.">".$employee->id."</th>
    <td>".$employee->name."</td>
    <td>".$employee->salary."</td>
    <td>".$employee->age."</td>
    </tr>";
}

echo" </tbody> </table>";

echo "
</body>
</html>";




?>