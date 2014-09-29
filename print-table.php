<?php
$input = array(
    array(
        'Name' => 'Trixie',
        'Color' => 'Green',
        'Element' => 'Earth',
        'Likes' => 'Flowers'
        ),
    array(
        'Name' => 'Tinkerbell',
        'Element' => 'Air',
        'Likes' => 'Singning',
        'Color' => 'Blue'
        ),
    array(
        'Element' => 'Water',
        'Likes' => 'Dancing',
        'Name' => 'Blum',
        'Color' => 'Pink'
        ),
);

function getTableContent($inputArray){
	
	$tableBody = "";
	$index = 0;
	$columnNames = array();
	
	foreach($inputArray as $data){
		
		//starting table row tag
		if($index == 0){
			//innerIndex is for applying diffent classes on columns
			$innerIndex = 0;
			
			//1st time create heading tag
			$tableBody .= "<tr>";		
			
			foreach($data as $key => $value){
							
				//applying class for different color
				$tableBody .= "<th class='class$innerIndex'>$key</th>";
				$columnNames[] = $key;				
				
				$innerIndex++;	
			}	
			$tableBody .= "</tr>";
		}
		//heading creation is done
		//Now we are having an array of columns
		
		$innerIndex = 0;
		$tableBody .= "<tr>";
		
		//iterating column name array
		foreach($columnNames as $key){
			$tableBody .= "<td class='class$innerIndex'>".$data[$key]."</td>";	
			$innerIndex++;
		}
		$tableBody .= "</tr>";
		
		$index++;
	}
	
	//adding table heading and table body to table tag
	$tableContent = "<table border='2'>$tableBody</table>";
	return $tableContent;
}
?>
<html>
<head>
<style>
.class0{background: none repeat scroll 0 0 red;}
.class1{background: none repeat scroll 0 0 blue;}
.class2{background: none repeat scroll 0 0 green;}
.class3{background: none repeat scroll 0 0 yellow;}
</style>
</head>
<body>
<?php echo getTableContent($input);?>
</body>
</html>
