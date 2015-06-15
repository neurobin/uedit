<script>
function returnFacebookContentShareUrl(){
	var msg=getSaveContent();
	var url=  'http://www.facebook.com/dialog/feed?app_id=1663039703924731' +
        '&link=' +encodeURIComponent(window.location.href)+
        '&name=' + encodeURIComponent(getSaveFileName()) +
        '&caption=' + encodeURIComponent('Content By Uedit') +
        '&description=Content Shared From: '+encodeURIComponent(window.location.href)+
        '&redirect_uri=http://'+window.location.host+'/siteutility/closewindow/'+
        '&display=popup';
return url;

}
function returnTwitterContentShareUrl() {
	var msg=getSaveContent();
	return "http://twitter.com/home?status="+msg;
}

</script>

<div class="share-button-fixed">
	<a id="share-btn3" href="#" onclick="return newShareWindow(returnFacebookContentShareUrl(),400,400)" class="social-button-fixed"><i class="fa fa-facebook"></i> Content share</a>

	<a id="share-btn4" href="#" onclick="return newShareWindow(returnTwitterContentShareUrl(),400,400)" class="social-button-fixed"><i class="fa fa-twitter"></i> Content share</a>

</div>

