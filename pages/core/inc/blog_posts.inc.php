<?php
	$dt = new DateTime();
echo $dt->format('Y-m-d H:i:s');

	function search_posts($term){
		$keywords = preg_split('#\s+#',mysql_real_escape_string ($term));
		
		$key = implode($keywords);
		echo ($key);
		$sql = "SELECT  		 
		 'Employee_ID' AS 'EID',
		 'Contact_No',
		 'NIC', 
		 FROM 'Employee'
		 WHERE 'NIC' = ($key)";
		 
		 $result = mysql_quey($sql);
		 $results = array();
		 
		
			 
			 $results[] = $row;
		 
		return $results;
	}
	
?> 