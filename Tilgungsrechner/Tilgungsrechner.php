<DOCTYPE! html>
<center>
<h1>Ihr Tilgungsplan:</h1>
<body bgcolor="#8DEEEE"></body>


<?php 
//Darlehen
$dar = $_POST["var1"];
//Zinssatz
$var2 = $_POST["var2"];
$zins = $var2/100;
//Tilgungssatz
$var3 = $_POST["var3"];
$tilg = $var3/100; 
//Annuität berechnen: 
$a1 = $dar*$zins;
$a2 = $dar*$tilg;
$ann = $a1+$a2; 
//Counter
$jahr = 0; ?>

<?php
echo "Das Darlehen betraegt $dar Euro";
echo "<br>";
echo "Der Zinssatz betraegt $var2 %";
echo "<br>";
echo "Die Tilgung betraegt $var3 %"; ?>
<br>
<br>
<?php
echo '<table border="2">
   <tr>
      <th>Jahr</th>
      <th>Annuitaet/Rate</th> 
      <th>Zinszahlung</th>
      <th>Tilgung</th>
      <th>Restbetrag</th>  
  </tr>';

for( $dar; $dar>=0; $dar--) {
$zinsz = round($dar * $zins);
$til = round($ann - $zinsz);
$dar = round($dar - $til); 
$jahr++;

if($dar < 0){
$til = $u;
$ann = $til + $zinsz;
$dar = 0;
echo "<tr>";
echo "<td>";
echo "Jahr $jahr";
echo "</td>";
echo "<td>";
echo $ann;
echo "</td>";
echo "<td>";
echo $zinsz; 
echo "</td>";
echo "<td>";
echo $til;
echo "</td>";
echo "<td>";
echo $dar; 
echo "</td>";
echo "</tr>";}
else{
$u = $dar;
echo "<tr>";
echo "<td>";
echo "Jahr $jahr";
echo "</td>";
echo "<td>";
echo $ann;
echo "</td>";
echo "<td>";
echo $zinsz; 
echo "</td>";
echo "<td>";
echo $til;
echo "</td>";
echo "<td>";
echo $dar; 
echo "</td>";
echo "</tr>";
}}
echo "</table>"; 
?>
<br>
<p>*Die Werte wurden gerundet</p>
<br>
<form method="get" action="http://fbwallinone.th-brandenburg.de/~string/Tilgungsrechner/Tilgungsrechner.html">
         <input type="submit" value="Zurueck zum Start"> 
</form>
</html>

