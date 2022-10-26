<!DOCTYPE html>
<!--
# @Last modified by:   amirhp-com <its@amirhp.com>
# @Last modified time: 2022/10/24 17:04:58
-->
<html>
<head>
	<title>AmirhpCom</title>
	<script src="jquery-3.6.1.min.js" charset="utf-8"></script>
	<link rel="stylesheet" href="style.css?<?=time();?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<link rel="icon" href="https://amirhp.com/wp-content/uploads/2022/03/bsl-2020-s-58x60.png" sizes="32x32" />
	<link rel="icon" href="https://amirhp.com/wp-content/uploads/2022/03/bsl-2020-s.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="https://amirhp.com/wp-content/uploads/2022/03/bsl-2020-s.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="https://amirhp.com/wp-content/uploads/2022/03/bsl-2020-s.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="https://amirhp.com/wp-content/uploads/2022/03/bsl-2020-s.png" />
	<meta name="msapplication-TileImage" content="https://amirhp.com/wp-content/uploads/2022/03/bsl-2020-s.png" />
</head>
<body>
	<div id="container">
		<?php if (isset($error_msg)) { ?>
			<div id="error">
				<p><?php echo strip_tags($error_msg); ?></p>
			</div>
		<?php } ?>
		<div id="form">
			<form action="index.php" method="post" style="margin-bottom:0;">
				<input id="url" name="url" inputmode="url" type="url" value="" placeholder="http://" required />
				<button type="submit" name="button">GO</button>
			</form>
			<div class="quikaccess">
				<a href="https://google.com/" class="quick-access">گوگل</a>
				<a href="https://t.me/s/ProxyMTProto/" class="quick-access">پراکسی تلگرام</a>
				<a href="https://www.bbc.com/persian" class="quick-access">بی بی سی</a>
				<a href="https://www.iranintl.com/" class="quick-access">ایران اینترنشنال</a>
				<a href="https://openvpn.net/client-connect-vpn-for-windows/" class="quick-access">اوپن وی پی ان (ویندوز)</a>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	jQuery.noConflict();
	(function($) {
		$(function() {
			$(document).on("click tap", ".quick-access", function(e){
				e.preventDefault();
				var me = $(this);
				$("#url").val(me.attr("href")).trigger("change");
			});
		});
	})(jQuery);
	</script>
</body>
</html>
