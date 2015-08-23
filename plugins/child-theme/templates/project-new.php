<?php
gp_title( __( 'Create New Project &lt; GlotPress' ) );
gp_breadcrumb( array(
	__('Create New Project'),
) );
gp_tmpl_header();
?>

		<h2><?php _e( 'Create New Project' ); ?></h2>

		<form action="" method="post" class="form-left form-horizontal" role="form">
			<?php gp_tmpl_load( 'project-form', get_defined_vars()); ?>

			<div class="form-group">
				<div class="col-sm-offset-4 col-md-offset-3 col-sm-8">
					<input type="submit" name="submit" value="<?php echo esc_attr( __('Create') ); ?>" id="submit" class="btn btn-primary" />
					<span class="or-cancel"><?php _e('or'); ?> <a href="javascript:history.back();"><?php _e('Cancel'); ?></a></span>
				</div>
			</div>
		</form>

<?php gp_tmpl_footer();