<!-- Title -->
<section class="page-title"
         style="background-image:url(http://localhost/social.co.th/resources/front-end/images/slider-1.jpg)">
    <div class="container my-auto text-center wow fadeInUp">
        <?php if ($this->session->flashdata('success')) { ?>
            <div class="alert alert-success"><?php echo $this->session->flashdata('success'); ?></div>
        <?php } ?>
        <?php if ($this->session->flashdata('error')) { ?>
            <div class="alert alert-danger"><?php echo $this->session->flashdata('error'); ?></div>
        <?php } ?>
        <h1>Contact Page</h1>
    </div>
</section>
<!-- Contact -->
<section id="contact">
    <div class="container">
        <div class="title-contact" style="text-align: center; padding: 4rem;">
            <img src="<?php base_url() ?>resources/front-end/images/img-/images/title-contact.png" alt=""
                 class="img-fluid">
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 ">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-lg-4 d-none d-sm-block">
                        <img src="https://www.anchorwave.com/wp-content/uploads/2016/04/google-partner358x138.png"
                             alt="Follow Us on Facebook" class="img-fluid m-2">
                    </div>
                    <div class="col-xs-12 col-md-8 col-lg8 d-none d-sm-block">
                        <h2 class="text-secondary d-none d-sm-none d-md-none d-lg-block" style="font-size:1.2rem;">
                            specialized in :
                        </h2>
                        <img src="http://www.clixmarketing.com/blog/wp-content/uploads/2015/02/photo.png"
                             alt="Follow Us on Facebook" class="img-fluid m-2" style="width: 40px;">
                        <img src="https://knockconsulting.com/images/icon-sm-instagram-round.svg"
                             alt="Follow Us on Instagram" class="img-fluid m-2" style="width: 40px;">
                        <img src="https://b2bm.s3.amazonaws.com/styles/default_image/s3/youtube-icon-full_color.png?itok=3QLCT4W_"
                             alt="Follow Us on Youtube" class="img-fluid m-2" style="width: 40px;">
                        <img src="https://knockconsulting.com/images/icon-sm-linkedin-round.svg"
                             alt="Follow Us on Linkedin" class="img-fluid m-2" style="width: 40px;">
                        <img src="https://knockconsulting.com/images/google-plus.svg" alt="Follow Us on Google Plus"
                             class="img-fluid m-2" style="width: 40px;">
                    </div>
                </div>
                <h2 class="text-secondary contact__title--head mt-3 mb-3">Social Medie Master Co.,Ltd</h2>
                <p class="text-secondary contact__title--bod mb-0">
                    290/25 หมู่บ้านกลางเมืองเอสเซ้น ลาดพร้าว 84 ถ.ประดิษฐ์มนูธรรม <br>
                    เขตวังทองหลาง แขวงวังทองหลาง กรุงเทพฯ 10310 <br><br>
                    <strong>โทร.</strong> 0-2193-9062 (5 line) <br>
                    <strong>โทรสาร.</strong> 0-2193-9047 <br>
                    <strong>อีเมล์.</strong> info@social.co.th <br><br>
                </p>
                <div class="row mb-5">
                    <div class="col-12 col-sm-12 col-md-11 col-lg-12">
                        <h2 class="text-secondary contact__title--head">Follow us on Social Media</h2>
                        <a href="#">
                            <img src="https://knockconsulting.com/images/icon-sm-facebook-round.svg"
                                 alt="Follow Us on Facebook" width="40" class="img-fluid m-0">
                        </a>
                        <a href="#">
                            <img src="https://knockconsulting.com/images/icon-sm-instagram-round.svg"
                                 alt="Follow Us on Instagram" width="40" class="img-fluid m-0">
                        </a>
                        <a href="#">
                            <img src="https://knockconsulting.com/images/icon-sm-youtube-round.svg"
                                 alt="Follow Us on Youtube" width="40" class="img-fluid m-0">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-lg-6">
                <h2 class="text-secondary contact__form--title">กรอกแบบ<span>ฟอร์ม</span>ติดต่อเรา</h2>
                <p class="text-secondary contact__form--body mb-4">เราจะติดต่อกลับโดยด่วนที่สุด</p>
                <form class="mt-4" action="<?php echo base_url('contact/send') ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your Email Address*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="company" placeholder="Company Name*">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="Your Phone Number*">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" name="detail" placeholder="How can we help?"></textarea>
                    </div>
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary text-center">SEND</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- SiteMap -->
<div id="accordion">
    <div class="card text-center" style="background: #00264c; color: #fff; border-radius: 0;">
        <div class="card-header" id="headingOne" style="padding-top: 0px; padding-bottom: 0px;">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne" style="color: #fff;">
                    Site map <i class="fas fa-plus-circle"></i>
                </button>
            </h5>
        </div>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
</div>
