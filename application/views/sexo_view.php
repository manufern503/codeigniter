<br>
<br>
<br>
<br>
<br>
<br>
<center>
<body background="038.jpg"> 

	<table class="table table-dark">
		<thead>
			<tr>
				<th>sexo</th>
			
			</tr>
		</thead>
		<tbody>
			<?php foreach ($nombre_sexo as $c) { ?>
			 <tr>
			 	<td><?= $c->nombre_sexo ?></td>
			 </tr>
		<?php	} ?>
		</tbody>
	</table>
	</div>
</form>
</center>
</body>

</html>