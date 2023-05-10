<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="POST">
    <input type="hidden" name="action" value="print_product_info">
    <input type="hidden" name="product_id" value="<?php echo get_the_ID(); ?>">
    <input type="hidden" name="line_bar"
        value="<?php echo get_template_directory_uri(); ?>/customtd-assets/images/line-bar.png">
    <input type="hidden" name="product_title" value="<?php the_title(); ?>">
    <input type="hidden" name="crzf_header" value="<?php echo get_theme_mod('crzf_header_n_logo'); ?>">
    <input type="hidden" name="crzf_product_url" value="<?php the_post_thumbnail_url(); ?>">
    <button type="submit" class="crzf_pdf_btn">Scarica scheda prodotto</button>
</form>
