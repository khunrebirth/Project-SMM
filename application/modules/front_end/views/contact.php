<!-- Title -->
<?php if ($banner) { ?>
<section class="page-title main-hero-service" style="padding:0;">
	<img class="img-fluid" src="<?php echo base_url((!smm_is_mobile()) ? 'storage/uploads/images/banners/' . unserialize($banner->img)[$lang] : 'storage/uploads/images/banners/' . unserialize($banner->img_moblie)[$lang]); ?>" alt="<?php echo unserialize($banner->img_title_alt)[$lang]; ?>">
	<div class="ttl-header-hero wow">
		<h1><?php echo unserialize($banner->title)[$lang]; ?></h1>
	</div>
</section>
<?php } ?>

<!-- Content -->
<section id="contact">
    <div class="container">
        <div class="title-contact" style="text-align: center; padding: 4rem;">
            <img src="<?php echo base_url($lang == 'th' ? 'resources/front_end/images/title-contact.png' : 'resources/front_end/images/title-contact.png'); ?>" class="img-fluid">
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 ">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-lg-4 d-none d-sm-block">
                        <img src="https://www.anchorwave.com/wp-content/uploads/2016/04/google-partner358x138.png" alt="Follow Us on Facebook" class="img-fluid m-2">
                    </div>
                    <div class="col-xs-12 col-md-8 col-lg8 d-none d-sm-block">
                        <h2 class="text-secondary d-none d-sm-none d-md-none d-lg-block" style="font-size:1.2rem;">
                            specialized in :
                        </h2>
                        <img src="http://www.clixmarketing.com/blog/wp-content/uploads/2015/02/photo.png" alt="Follow Us on Facebook" class="img-fluid m-2" style="width: 40px;">
                        <img src="https://knockconsulting.com/images/icon-sm-instagram-round.svg" alt="Follow Us on Instagram" class="img-fluid m-2" style="width: 40px;">
                        <img src="https://b2bm.s3.amazonaws.com/styles/default_image/s3/youtube-icon-full_color.png?itok=3QLCT4W_" alt="Follow Us on Youtube" class="img-fluid m-2" style="width: 40px;">
                        <img src="https://knockconsulting.com/images/icon-sm-linkedin-round.svg" alt="Follow Us on Linkedin" class="img-fluid m-2" style="width: 40px;">
                        <img src="https://knockconsulting.com/images/google-plus.svg" alt="Follow Us on Google Plus" class="img-fluid m-2" style="width: 40px;">
                    </div>
                </div>
                <h2 class="text-secondary contact__title--head mt-3 mb-3"><?php echo lang('page_contact_company'); ?></h2>
                <p class="text-secondary contact__title--bod mb-0">
					<?php echo lang('page_contact_address_detail'); ?>
                    <strong><?php echo lang('page_contact_phone'); ?>.</strong> 0-2193-9062 (5 line) <br>
                    <strong><?php echo lang('page_contact_fax'); ?>.</strong> 0-2193-9047 <br>
                    <strong><?php echo lang('page_contact_email'); ?>.</strong> info@social.co.th <br><br>
                </p>
                <div class="row mb-5">
                    <div class="col-12 col-sm-12 col-md-11 col-lg-12">
                        <h2 class="text-secondary contact__title--head"><?php echo lang('page_contact_follow'); ?></h2>
                        <a href="#">
                            <img src="https://knockconsulting.com/images/icon-sm-facebook-round.svg" alt="Follow Us on Facebook" width="40" class="img-fluid m-0">
                        </a>
                        <a href="#">
                            <img src="https://knockconsulting.com/images/icon-sm-instagram-round.svg" alt="Follow Us on Instagram" width="40" class="img-fluid m-0">
                        </a>
                        <a href="#">
                            <img src="https://knockconsulting.com/images/icon-sm-youtube-round.svg" alt="Follow Us on Youtube" width="40" class="img-fluid m-0">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6">
                <h2 class="text-secondary contact__form--title"><?php echo lang('page_contact_title_first'); ?><span><?php echo lang('page_contact_title_center'); ?></span><?php echo lang('page_contact_title_end'); ?></h2>
                <p class="text-secondary contact__form--body mb-4"><?php echo lang('page_contact_desc'); ?></p>
                <form class="mt-4" action="<?php echo base_url($lang . '/'. 'contact/send') ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="<?php echo lang('page_contact_form_txt_name'); ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="<?php echo lang('page_contact_form_txt_email'); ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="company" placeholder="<?php echo lang('page_contact_form_txt_company'); ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="<?php echo lang('page_contact_form_txt_phone'); ?>" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" name="detail" placeholder="<?php echo lang('page_contact_form_txt_detail'); ?>"></textarea>
                    </div>
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary text-center"><?php echo lang('page_contact_button_send'); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- SiteMap -->
<?php include 'layouts/sitemap.php'; ?>
