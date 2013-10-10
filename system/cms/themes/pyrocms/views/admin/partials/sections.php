<!--
/**
 * Sections
 */
-->
<div class="dropdown-submenu navbar-left" id="sections">
	
	<!-- Dropdown -->
	<?php if (empty($module_details['sections'])): ?>
		<a href="<?php echo site_url('admin/'.(isset($module_details['slug']) ? $module_details['slug'] : null)); ?>" class="title">
	<?php else: ?>
		<a href="#" class="title dropdown-submenu" data-toggle="dropdown" data-hotkey="0">
	<?php endif; ?>

		<?php if (isset($module_details['name'])): ?>
			<?php echo $module_details['name']; ?>
		<?php else: ?>
			<?php echo $template['title']; ?>
		<?php endif; ?>
		<?php if (! empty($module_details['sections'])): ?>
			<b class="caret"></b>
		<?php endif; ?>

	</a>

	<?php if (! empty($module_details['sections'])): ?>
	<ul class="dropdown-menu animated-zing fadeInUp">
	<?php foreach ($module_details['sections'] as $name => $section): ?>
	<?php if(isset($section['name']) && isset($section['uri'])): ?>
		<li class="<?php if ($name === $active_section) echo 'active' ?>">
			<?php echo anchor($section['uri'], (lang($section['name']) ? lang($section['name']) : $section['name']), 'data-hotkey="'.(array_search($section, array_values($module_details['sections']))+1).'" data-follow="yes"'); ?>
		</li>
	<?php endif; ?>
	<?php endforeach; ?>
	</ul>
	<?php endif; ?>

	<?php if (isset($module_details['description'])): ?>
		<span class="hidden-xs pull-left"><?php echo $module_details['description'] ?></span>
	<?php endif; ?>

</div>