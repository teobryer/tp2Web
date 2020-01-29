<?php 
require ("Employee.php");



$marius = new Employee(0,  "Marius", 1500, 20);
$jade = new Employee(1,  "Jade", 2100, 32);
$olivier = new Employee(2,  "Olivier", 2600, 45);

$array = array($marius, $jade, $olivier);

echo "<!DOCTYPE html>
<head>
<title>Employee display</title>
    
<link rel=".'stylesheet'." href=".'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'." integrity=".'sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T'." crossorigin=".'anonymous'.">
 <script src=".'https://code.jquery.com/jquery-3.3.1.slim.min.js'." integrity=".'sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo'." crossorigin=".'anonymous'."></script>
<script src=".'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'." integrity=".'sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1'." crossorigin=".'anonymous'."></script>
<script src=".'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'." integrity=".'sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM'." crossorigin=".'anonymous'."></script>
</head>
<body>
<h1>employee_display.php</h1>";




echo "<table class=".'table'.">
<thead>
<tr>
<th scope=".'col'.">Id</th>
<th scope=".'col'.">Nom</th>
<th scope=".'col'.">Salaire</th>
<th scope=".'col'.">Age</th>
</tr>
</thead>
<tbody>";
$compteur = 0;
$total_salary = 0;
foreach ($array as $employee){
    $compteur++;
    $total_salary += $employee->getSalary();
    echo " <tr>
    <th scope=".'row'.">".$employee->getId()."</th>
    <td>".$employee->getName()."</td>
    <td>".$employee->getSalary()."</td>
    <td>".$employee->getAge()."</td>
    </tr>";
}

echo" </tbody> </table>";
echo " <p> Le salaire moyen des $compteur employés précédent est de ".$total_salary/$compteur. "euros";
echo "
</body>
</html>";




?>