<?PHP
function readCSV($csvFile){
	$file_handle = fopen($csvFile, 'r');
	while (!feof($file_handle) ) {
		$line_of_text[] = fgetcsv($file_handle, 1024);
	}
	fclose($file_handle);
	return $line_of_text;
}


// Set path to CSV file
$csvFile = 'test.csv';

$csv = readCSV($csvFile);

foreach ($csv as $key => $value) {
	foreach ($value as $a => $q) {
		echo $q;
	}
}

?>
