<h1>Портфолио</h1>
<p>
<table class="table table-striped">
<thead class="thead-dark">
<tr><th>Название</th><th>Год</th><th>Описание</th></tr>
</thead>
<?php
	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Name'].'</td><td>'.$row['Year'].'</td><td>'.$row['Description'].'</td></tr>';
	}	
?>
</table>
</p>
