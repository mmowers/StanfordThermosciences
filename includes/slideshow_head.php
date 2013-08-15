
<link rel="stylesheet" type="text/css" media="screen" href="../css/jd.gallery.css" />
<link rel="stylesheet" type="text/css" media="screen" href="../css/slimbox.css" />

<script src="../js/mootools.js" type="text/javascript"></script>
<script src="../js/slimbox.js" type="text/javascript"></script>
<script src="../js/jd.gallery.js" type="text/javascript"></script>

<script type="text/javascript">

var myGallery;
var isPaused = 0;
function startGallery() {
	myGallery = new gallery($('myGallery'), {
	timed: true
	});
}
window.addEvent('domready',startGallery);

/*function resizeIframe() {
    var height = document.documentElement.clientHeight;
    height -= document.getElementById('frame').offsetTop;

    // not sure how to get this dynamically

    document.getElementById('frame').style.height = height +"px";

};
document.getElementById('frame').onload = resizeIframe;
window.onresize = resizeIframe;
*/
</script>


<style type="text/css">
<!--
.huangnav {font-size: 12px; font-style: normal; line-height: 20px; color: #e2d5b0; text-decoration: none; font-family: Verdana, Arial, Helvetica, sans-serif;}
.huangnav a:link { color: #e2d5b0; text-decoration: none }
.huangnav a:active { color: #e2d5b0; text-decoration: none }
.huangnav a:visited { color: #e2d5b0; text-decoration: none }
.huangnav a:hover { color: #e2d5b0; text-decoration: underline; font-style: bold; }
.huangnewst {font-size: 13px; font-style: normal; line-height: 20px; color: #990000; text-decoration: none; font-family: Verdana, Arial, Helvetica, sans-serif;}
.huangnews {font-size: 11px; font-style: normal; line-height: 16px; color: #333333; text-decoration: none; font-family: Verdana, Arial, Helvetica, sans-serif;}
.huangnews a:link { color: #333333; text-decoration: none }
.huangnews a:active { color: #333333; text-decoration: none }
.huangnews a:visited { color: #333333; text-decoration: none }
.huangnews a:hover { color: #333333; text-decoration: underline; font-style: bold; }

-->
</style>


