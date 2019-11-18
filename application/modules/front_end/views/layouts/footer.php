<footer class="container-fluid text-center">
    <p>&copy; 2019 <?php echo lang('footer_copyright'); ?> All right reserved.</p>
</footer>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url('resources/front_end/css/style.min.css'); ?>">
<?php echo $css_critical; ?>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<?php echo $js_critical; ?>
<script type="text/javascript" src="<?php echo base_url('resources/front_end/js/script_common.min.js'); ?>"></script>
<script>
  window.lazyLoadOptions = {
    elements_selector: '.lazy'
  }
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.3.0/dist/lazyload.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('resources/front_end/js/script.min.js'); ?>"></script>
<script type="text/javascript">
	var scrollFromTop = $(".sec-footer-sitemap").offset().top;
	$(document).scroll(function () {
		if ($(this).scrollTop() + $(window).height()  > scrollFromTop) {
			console.log('to');
			if(!$(".sec-footer-sitemap").hasClass('including')){
				$(".sec-footer-sitemap").addClass('including');
				script('https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v4.0&appId=189754555007223&autoLogAppEvents=1');
			}
		}
		function script(url) {
		    var s = document.createElement('script');
		    s.type = 'text/javascript';
		    s.async = true;
		    s.src = url;
		    var x = document.getElementsByTagName('head')[0];
		    x.appendChild(s);
		}
	});
</script>
</body>
</html>
