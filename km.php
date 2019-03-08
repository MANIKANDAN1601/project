<?php
	$mydirectory=opendir("C:\wamp64\www");
	echo "<table border=2>";
	echo "<tr>";
	echo "<th>Entryname</th>";
	echo "<th align=\"centre\">size</th>";
	echo "<tr>\n";
	while($entryname=readdir($mydirectory))
	{
		echo "<tr>";
		echo "<td>$entryname</td>";
		echo "<td align=\"right\">";
		echo filesize($entryname);
		echo "</td>";
		echo "<tr>\n";
	}
	closedir($mydirectory);
?>
		
