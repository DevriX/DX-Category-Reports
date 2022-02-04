<div class="wrap">
	<div id="icon-edit" class="icon32 icon32-base-template"><br></div>

	<h2><?php _e( 'DX Category Reports', 'dxcr' ); ?></h2>

	<?php
		$category_id = 0;

	// Use 0 as a basis, still absint the remote call.
	// That happens only in the admin.
	if ( isset( $_POST['category_id'] ) ) {
		$category_id = absint( $_POST['category_id'] );
	}
	?>

	<form action="" method="post">
		<div class="reports-settings">
			<p><?php _e( 'Pick a category and fetch the monthly reports for it.', 'dxbase' ); ?></p>

			<select name="category_id">
			<option value="" disabled selected hidden>Choose a category...</option>
			<?php
			// Pull all categories. Could be redone for all terms per CPT later.
			$categories = get_categories();

			foreach ( $categories as $category ) :
				?>
				<option value="<?php echo $category->term_id; ?>" <?php selected( $category_id, $category->term_id, true ); ?>><?php echo $category->name; ?></option>
			<?php endforeach; ?>
			</select>

		</div>
	</form>

	<div class="reports-body">

	<?php
	if ( 0 !== $category_id ) :
		?>
		<table id="reports-table" class="reports-table">
			<thead>
				<th><?php _e( 'Date', 'dxcr' ); ?></th>
				<th><?php _e( 'Published Posts', 'dxcr' ); ?></th>
			</thead>
			<tbody>
			<?php
			// Fetch the report for the selected category
			$category_report = DX_Database_Time_Manager::get_cpt_category_report( $category_id );

			if ( ! empty( $category_report ) ) :
				foreach ( $category_report as $entry ) :
					$month_name = '';
					switch ( $entry->month ) {
						case 1:
							$month_name = 'January';
							break;
						case 2:
							$month_name = 'February';
							break;
						case 3:
							$month_name = 'March';
							break;
						case 4:
							$month_name = 'April';
							break;
						case 5:
							$month_name = 'May';
							break;
						case 6:
							$month_name = 'June';
							break;
						case 7:
							$month_name = 'July';
							break;
						case 8:
							$month_name = 'August';
							break;
						case 9:
							$month_name = 'September';
							break;
						case 10:
							$month_name = 'October';
							break;
						case 11:
							$month_name = 'November';
							break;
						case 12:
							$month_name = 'December';
							break;
					}
					?>
				<tr>
					<td><?php printf( "$month_name, $entry->year" ); ?></td>
					<td><?php echo $entry->count; ?></td>
				</tr>
						<?php
					endforeach;
				endif;
			?>
			</tbody>
		</table>
	<?php endif; ?>
	</div>
</div>
