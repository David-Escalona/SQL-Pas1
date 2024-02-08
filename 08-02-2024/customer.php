<?php

class Customer {
    public $firstname;
    public $lastname;
    public $username;
    public $password;
    public $emailaddress;
    public $datelastlogin;
    public $timelastlogin;
    public $dateaccountcreated;
    public $timeaccountcreated;

    public function __construct($firstname, $lastname, $username, $password, $emailaddress, $datelastlogin, $timelastlogin, $dateaccountcreated, $timeaccountcreated) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->password = $password;
        $this->emailaddress = $emailaddress;
        $this->datelastlogin = $datelastlogin;
        $this->timelastlogin = $timelastlogin;
        $this->dateaccountcreated = $dateaccountcreated;
        $this->timeaccountcreated = $timeaccountcreated;
    }
}

// Crear dos objetos Customer
$customer1 = new Customer("David", "Escalona", "david", "clave123", "david@example.com", "2024-02-08", "10:30:00", "2023-01-15", "08:45:00");
$customer2 = new Customer("David", "Escalona", "escalona", "abc123", "escalona@example.com", "2024-02-07", "15:45:00", "2023-03-20", "11:20:00");

// Intercambiar los valores del customer1 con los del customer2
$temp_firstname = $customer1->firstname;
$temp_lastname = $customer1->lastname;
$temp_username = $customer1->username;
$temp_password = $customer1->password;
$temp_emailaddress = $customer1->emailaddress;
$temp_datelastlogin = $customer1->datelastlogin;
$temp_timelastlogin = $customer1->timelastlogin;
$temp_dateaccountcreated = $customer1->dateaccountcreated;
$temp_timeaccountcreated = $customer1->timeaccountcreated;

$customer1->firstname = $customer2->firstname;
$customer1->lastname = $customer2->lastname;
$customer1->username = $customer2->username;
$customer1->password = $customer2->password;
$customer1->emailaddress = $customer2->emailaddress;
$customer1->datelastlogin = $customer2->datelastlogin;
$customer1->timelastlogin = $customer2->timelastlogin;
$customer1->dateaccountcreated = $customer2->dateaccountcreated;
$customer1->timeaccountcreated = $customer2->timeaccountcreated;

$customer2->firstname = $temp_firstname;
$customer2->lastname = $temp_lastname;
$customer2->username = $temp_username;
$customer2->password = $temp_password;
$customer2->emailaddress = $temp_emailaddress;
$customer2->datelastlogin = $temp_datelastlogin;
$customer2->timelastlogin = $temp_timelastlogin;
$customer2->dateaccountcreated = $temp_dateaccountcreated;
$customer2->timeaccountcreated = $temp_timeaccountcreated;

// Imprimir la información de los objetos Customer
echo "Información del Customer 1:<br>";
echo "Nombre completo: " . $customer1->firstname . " " . $customer1->lastname . "<br>";
echo "Nombre de usuario: " . $customer1->username . "<br>";
echo "Email: " . $customer1->emailaddress . "<br>";
echo "Último inicio de sesión: " . $customer1->datelastlogin . " " . $customer1->timelastlogin . "<br>";
echo "Fecha de creación de la cuenta: " . $customer1->dateaccountcreated . " " . $customer1->timeaccountcreated . "<br><br>";

echo "Información del Customer 2:<br>";
echo "Nombre completo: " . $customer2->firstname . " " . $customer2->lastname . "<br>";
echo "Nombre de usuario: " . $customer2->username . "<br>";
echo "Email: " . $customer2->emailaddress . "<br>";
echo "Último inicio de sesión: " . $customer2->datelastlogin . " " . $customer2->timelastlogin . "<br>";
echo "Fecha de creación de la cuenta: " . $customer2->dateaccountcreated . " " . $customer2->timeaccountcreated . "<br>";
?>
