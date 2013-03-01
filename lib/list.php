<?php

	function list_article($cid, $rownum) {
		$query = "select * from `article` 
			where classid = {$cid} 
			order by articleid desc 
			limit {$rownum} ";
		$content = mysql_query($query);
		while($row = mysql_fetch_array($content)) {
			$id = $row['articleid'];
			echo "<a href=\"show.php?id={$id}&cid={$cid}\"><li> {$row['title']} </li></a>";
		}
	}

?>