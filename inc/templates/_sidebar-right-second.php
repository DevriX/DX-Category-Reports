<?php
/**
 * Right sidebar for settings page
 *
 * @package   DX_Category_Reports
 * @link      http://devrix.com
 * @copyright 2021 DevriX
 */
?>

<?php
/**
 *-----------------------------------------
 * Do not delete this line
 * Added for security reasons: http://codex.wordpress.org/Theme_Development#Template_Files
 *-----------------------------------------
 */
defined( 'ABSPATH' ) or die( 'Direct access to the script does not allowed' );
?>


	<div id="postbox-container2" class="postbox-container sidebar-right-second">
		<div class="meta-box-sortables">
			<div class="postbox">
				<h3><span><?php esc_attr_e( 'Other DevriX Plugins', 'dxcr' ); ?></span></h3>
				<div class="inside">
					<div>
						<ul>
							<li><a target="_blank" href="https://wordpress.org/plugins/easy-image-gallery/"><span class="dashicons dashicons-admin-plugins"></span> <?php esc_attr_e( 'Easy Image Gallery', 'dxcr' ); ?></a></li>
							<li><a target="_blank" href="https://wordpress.org/plugins/devrix-dark-site/"><span class="dashicons dashicons-admin-plugins"></span> <?php esc_attr_e( 'DX Dark Site', 'dxcr' ); ?></a></li>
							<li><a target="_blank" href="https://wordpress.org/plugins/dx-share-selection/"><span class="dashicons dashicons-admin-plugins"></span> <?php esc_attr_e( 'DX Share Selection', 'dxcr' ); ?></a></li>
						</ul>
					</div>
					<div class="sidebar-footer">
						&copy; <?php echo date( 'Y' ); ?> <a class="no-underline text-highlighted" href="http://devrix.com" title="DevriX" target="_blank">DevriX</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
