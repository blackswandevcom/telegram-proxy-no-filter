<!--
# @Author: amirhp-com <its@amirhp.com>
# @Date:   2022/10/24 16:27:16
# @Last modified by:   amirhp-com <its@amirhp.com>
# @Last modified time: 2022/10/24 16:58:35
-->
<style type="text/css">
#topformwrapper {
	position: fixed;
	top: -4rem;
	left: 0;
  width: calc(100vw - 1rem);
  height: 2rem !important;
  z-index: 99999999999999999 !important;
  background: #cacaca;
  padding: 0.5rem;
}
input:checked+#topformwrapper{
  top: 0;
}
.topformwrapper form {
	display: flex;
	align-items: center;
	justify-content: space-between;
	width: 100%;
}
.topformwrapper form input[type="url"] {
	width: 100%;
  font-size: 16.3px;
	margin-right: 0.5rem;
}
.topformwrapper form input[type="submit"],
.topformwrapper form input[type="button"] {
	margin-right: 0.5rem;
}
.toggletoolbarproxybar {
	position: fixed;
	top: 0;
	width: 2rem;
	height: 2rem;
	display: block;
	z-index: 999999999999999999999999;
	text-align: center;
	left: calc(50vw - 1rem);
}
#toggleshowproxybartoolbar{
  display: none;
  visibility: none;
  opacity: 0;
}
</style>
<label href="#" class="toggletoolbarproxybar" for="toggleshowproxybartoolbar">🔽</label>
<input type="checkbox" id="toggleshowproxybartoolbar" name="toggleshowproxybartoolbar" autocomplete="off">
<div id="topformwrapper">
  <div class="topformwrapper">
    <form method="post" action="index.php" target="_top">
      <input type="url" name="url" inputmode="url" value="<?php echo $url; ?>" placeholder="http://">
      <input type="hidden" name="form" value="1">
      <input type="button" value="Home" onclick="window.location.href='index.php'">
      <input type="submit" value="Go">
      <label href="#" for="toggleshowproxybartoolbar">⬆️</label>
    </form>
  </div>
</div>
