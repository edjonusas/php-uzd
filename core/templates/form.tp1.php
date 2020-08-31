<form <?php print html_attr($form['attr']); ?>>

	<!-- Generating fields-->
    <?php foreach ($form['fields'] ?? [] as $field_id => $field): ?>
		<!-- label start -->
        <?php if (isset($field['label'])) : ?>
			<label>
			<span><?php print $field['label'] ?></span>
        <?php endif; ?>
		<!-- input -->
        <?php if ($field['type'] == 'select'): ?>
			<select <?php print select_attr($field_id, $field); ?>>

                <?php foreach ($field['option'] as $option_id => $option_title) : ?>
					<option <?php print option_attr($option_id, $field) ?>>
                        <?php print $option_title; ?>
					</option>
                <?php endforeach; ?>

			</select>
        <?php else: ?>
			<input <?php print input_attr($field_id, $field); ?> />
        <?php endif; ?>
		<!-- label end -->
        <?php if (isset($field['label'])) : ?>
			</label>
        <?php endif; ?>

    <?php endforeach; ?>
	<!--	End generating fields-->

	<!-- Generating buttons-->
    <?php foreach ($form['buttons'] ?? [] as $button_id => $button): ?>
		<button <?php print button_attr($button_id, $button); ?>>
            <?php print $button['title'] ?>
		</button>
    <?php endforeach; ?>
	<!--	End generating buttons-->
</form>
