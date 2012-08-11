<?php ?>
<nav>
	<ul>
		<li>
			<?php echo anchor(base_url() . 'c_front/index', 'Home'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'c_front/cakes', 'Cakes'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'c_front/articles', 'Articles'); ?>
		</li>
		<li>
			<a>Orders</a>
		</li>
		<li>
			<?php echo anchor(base_url() . 'c_front/moreinfo', 'More Info.'); ?>
		</li>
		<li>
			<?php echo anchor(base_url() . 'c_front/ArticleCreator', 'Editor'); ?>
		</li>
	</ul>
</nav>