<?php
if(isset($_POST['geofield1'])) {
    $data = $_POST['geofield1'] . "\n";
    $ret = file_put_contents('maps/geo_form.json', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file <br />";
<<<<<<< HEAD
		echo "View the data here: <a href=\"create_json_file2.php\">Saved Map</a>";
=======
		echo "View the data here: <a href=\"maps/geo_form.json\">geo_form.json</a>";
>>>>>>> parent of 8d9e591... Merge pull request #6 from ykoeu/feature
    }
}
else {
   die('no post data to process');
}