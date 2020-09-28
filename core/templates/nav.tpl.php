<nav>
    <?php foreach ($data as $link) : ?>
		<div>
			<a href="<?php print $link['url'] ?>"><?php print $link['title'] ?></a>
		</div>
    <?php endforeach; ?>
</nav>