<?php 
$row = 1;
$tableau = array();
if (($handle = fopen("medicaments2014.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        //echo "<p> $num champs à la ligne $row: <br /></p>\n";
        for ($c=0; $c < $num; $c++) {
        	$explode = explode(';', $data[$c]);
        	//var_dump($explode);
            $tableau[$row]['titre'] =  $explode[1];
            $tableau[$row]['prix'] =  $explode[2];
            //$tableau['quantite'] =  $explode[2];
        }
        $row++;
    }
    fclose($handle);
}


?>
