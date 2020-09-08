<table>
	<thead>
	<tr>
        <?php foreach ($table['headers'] as $header) : ?>
			<th><?php print $header ?></th>
        <?php endforeach; ?>
	</tr>
	</thead>
	<tbody>
    <?php foreach ($table['rows'] as $row) : ?>
		<tr>
            <?php foreach ($row as $col) : ?>
				<td><?php print $col ?></td>
            <?php endforeach; ?>
		</tr>
    <?php endforeach; ?>
	</tbody>
</table>
