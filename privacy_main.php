<?php
require_once('admin/config.php');
require_once('includes/url_slug.php'); 
$page_title = $footnav_privacy;
?>
<!DOCTYPE html>
<html dir="rtl">
	<head>
	<!-- Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $page_title; ?> - <?php echo $site_title; ?></title>
	<meta name="description" content="<?php echo $page_title; ?> - <?php echo $site_title; ?>" />
	<!-- CSS and Scripts -->
	<?php include 'includes/headscripts.php'; ?>
	</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
			<center><h1><a href="<?php echo $site_url; ?>"><span class="glyphicon glyphicon-music" aria-hidden="true"></span> <?php echo $site_title; ?></a></h1></center>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<!-- Search Form -->
		<form action="<?php echo $site_url;?>/search_main.php" class="input-group input-group-lg">
		<input id="you-search" name="q" type="text" class="form-control" autocomplete="off" placeholder="<?php echo $searchf_text; ?>">
		<input type="hidden" name="change" value="1">
		<span class="input-group-btn">
		<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
		</span>
		</form>
		<!-- /Search Form -->
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<div class="page-header">
		<h2><?php echo $page_title; ?></h2>
		</div>
		<p>حفظ حریم خصوصی به یک نگرانی بزرگ در اینترنت تبدیل شده است. این وب سایت می داند که برای شما اهمیت دارد که چگونه اطلاعات مربوط به شما استفاده و به اشتراک گذاشته می شود. این بیانیه حریم خصوصی نحوه برخورد این وب سایت با اطلاعات شما را شرح می دهد. با بازدید از این وب سایت، اقداماتی را که در این بیانیه حفظ حریم خصوصی توضیح داده شده است، می پذیرید.

            اطلاعات شخصی

            این وب سایت نیازی به افشای اطلاعات شخصی در هر نقطه از سایت ندارد. آدرس IP شما برای جمع آوری اطلاعات جمعیتی گسترده و ردیابی الگوهای بازدید عمومی شما استفاده می شود. آدرس IP شما همچنین برای کمک به تشخیص مشکلات فنی استفاده می شود. این وب سایت اطلاعات شخصی شما را با هیچ شخص ثالثی نمی فروشد، اجاره نمی دهد یا مبادله نمی کند.

            کوکی ها

            کوکی ها فایل های متنی کوچکی هستند که توسط بسیاری از سایت ها برای ذخیره یا انتقال اطلاعات بین سایت اصلی و رایانه ای که برای دسترسی به سایت استفاده می کنید استفاده می شود. این کوکی ها در یک پوشه خاص در فهرست فایل های اینترنتی موقت شما ذخیره می شوند. این وب سایت از کوکی ها در بخش هایی از وب سایت استفاده می کند. در جریان ارائه تبلیغات به این سایت، تبلیغ کننده شخص ثالث ما ممکن است یک "کوکی" منحصر به فرد را در مرورگر شما قرار دهد یا تشخیص دهد.

            تبلیغ کنندگان

            ما از شرکت های تبلیغاتی شخص ثالث برای ارائه تبلیغات در هنگام بازدید از این وب سایت استفاده می کنیم. این شرکت ها ممکن است از اطلاعات بازدید شما از این وب سایت و سایر وب سایت ها برای ارائه تبلیغات در این سایت و سایر سایت ها در مورد کالاها و خدماتی که ممکن است مورد علاقه شما باشد استفاده کنند. ممکن است تبلیغات حاوی کوکی باشد. تبلیغات برای تامین هزینه های آنلاین نگه داشتن این سایت ضروری است.

            تماس

            اگر در مورد این بیانیه حفظ حریم خصوصی، رویه های این سایت یا معاملات خود با این وب سایت سؤالی دارید، می توانید با ما تماس بگیرید.
</p>
		
		</div>
	</div>
</div>
<!-- end Main Content -->
<?php include 'includes/footer.php';?>