<?php
	$args = array(
	'taxonomy'     => 'product_cat',
	'orderby'      => 'name',
	'show_count'   => 0,
	'hide_empty'   => true,
	'parent'       => 0
	);
	$all_categories = get_categories( $args );
	if(!empty($all_categories) || is_object($all_categories)) {

		?>
		<div class="row">
			<div class="tab-container">
				<ul id="parent-category">
					<?php
					foreach ($all_categories as $all_category) {
						echo '<li class="tab" data-cid="'.$all_category->term_id.'">'.$all_category->name.'</li>';
					}
					?>
				</ul>
			</div>

			<div class="content-container" id="orginalCDkey">
				<div class="tab-container">
					<ul id="subcategory-placholder">

					</ul>
				</div>
			</div>
		</div>
		<?php
	}
