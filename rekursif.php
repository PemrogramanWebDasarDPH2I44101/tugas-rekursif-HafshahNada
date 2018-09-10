<form action="TugasRekursif.php" method="POST">
            Masukkan Angka : <input type="text" name="a" min="1"><br>
                <input type="submit" name="submit" value="Hasil">
        </form>

<?php

echo "=================================================================";
echo "<br>";
function bawah ($a){
	if ($a >= 1) {
		samping($a);
		echo "<br>";
		$a--;
		bawah ($a);
	}
}
function samping ($bawah,$samping =1){
	echo "*";
	$samping++;
	if ($samping <=$bawah)
		samping ($bawah,$samping);
	
}
if (isset($_POST ["submit"])) {

		$a = $_POST ["a"];
		bawah($a);
		

	echo "<br>";
	echo "=================================================================";
	echo "<br>";
}
function bawah2($awal, $batas){
	samping2(1, $awal);
	echo "<br>";
	$awal++;
	if($awal <= $batas)	
		bawah2($awal, $batas);
}
function samping2($awal, $batas){
	echo $awal;
	$awal++;
	if($awal <= $batas)
		samping2($awal,$batas);
}

if (isset($_POST ["submit"])) {
	$a = $_POST["a"]; //10
	bawah2(1,$a);
	echo "=================================================================";
}


?>
