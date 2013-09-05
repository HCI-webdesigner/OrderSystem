	<div class="footer">
		<li class="footer_left">Powered By C860 - HCI人机交互中心</li>
		<li class="footer_right">
			联系我们&nbsp;|&nbsp;网站地图&nbsp;|&nbsp;返回首页&nbsp;|&nbsp;投诉举报&nbsp;|&nbsp;意见建议<br>
			Latest update:&nbsp;GMT+8, 2013-5-12 12:20
		</li>
	</div>
	<script type="text/javascript">
	$(function() {
		var nb = $("#navbar>div").length;
		for(var i=0;i<nb;++i) {
			(function(x){
				$("#p"+x+">p:first").bind("mouseenter",function() {
					$("#p"+x+">ul:first").css("display","block");
				});
				$("#p"+x).bind("mouseleave",function() {
					$("#p"+x+">ul:first").css("display","none");
				});
			}(i));
		}
	})
	</script>
</body>
</html>