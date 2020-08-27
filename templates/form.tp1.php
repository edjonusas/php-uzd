<form <?php print html_attr($form['attr']); ?>>
	<!-- Generating fields and buttons-->
    <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>
		<input <?php print input_attr($field_id, $field); ?> />
    <?php endforeach; ?>

    <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
		<button <?php print button_attr($button_id, $button); ?>><?php print $button['title'] ?></button>
    <?php endforeach; ?>
	<!--	End generating field and buttons-->
		<button <?php print button_attr('save', $form['buttons']['save']); ?>><?php print $form['buttons']['save']['title'] ?></button>
</form>
