<div class="wall">
    <?php foreach ($data ?? [] as $pixel) : ?>
		<span class="pixel"
		      style=" bottom: <?php print $pixel['y'] ?>px;
				      left: <?php print $pixel['x'] ?>px;
				      width: <?php print $pixel['pixel_size'] ?>px;
				      height: <?php print $pixel['pixel_size'] ?>px;
				      background-color: <?php print $pixel['colour'] ?>;">
		</span>
    <?php endforeach; ?>
</div>