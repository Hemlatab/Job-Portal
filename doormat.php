<!DOCTYPE html>
<html>
<head>
	<title>Door mat</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		#doorMat{
			background: white;
			border-top: solid 10px #dd5638;
			position: fixed;
			height: 100%;
			width: 100%;
			z-index: 9999;
			display: table;

			top: -100%;
		}
		#doorMatContainer{
			display: table-cell;
			vertical-align: middle;
			height: 100%;
			padding: 0 20%;
			text-align: center;
		}
		#doorMat p{
			
		}
		#doorMat #quit{

			color: #444;
			border:solid 1px #444;
			margin-top: 80px;
		}
	</style>
</head>
<body>

<div id="doorMat">

	<div id="doorMatContainer">

	<h1>Try Bootstrap to WordPress for free</h1>
	<p>Enter your name &amp; email and I send you lectures</p>
	<!-- embed form-->

	<div>
		
		<a href="#" id="quit">I don't like free stuff<br>

			<span class="fa fa-chevron-down"></span>
		</a>

	</div>

	</div>

</div>
<script type="text/javascript" src="includes/js.cookie.js">

// for debugging
Cookies.remove('b2wcookie');

// get the viewport height
// so we can dynamically move the doormat
var height = $(window).height();

// set some default css
// do this in jquery to access dynamic height
$('#doorMat').css({
    "height" : height,
    "margin-top": -height,
    "display": "table"
});

// animate doormat up
// fade out
// remove it from viewport
// set cookie
function closeDoorMat() {
    $('#doorMat').animate({
        marginTop: -height,
        opacity: 0
    }, 1000, function(){
        $(this).hide();
        Cookies.set( 'b2wcookie', 'doormat', { expires: 1, path: '/' } );
    });
}

// if there's no doormat cookie
// show doormat
if( Cookies.get('b2wcookie') != "doormat" ) {
    $('#doorMat').delay(2000).animate({
        marginTop: "0",
        opacity: 1
    }, 1000, function(){
        // done
    });
}

// user quits doormat
// close doormat
$('#quit').click(function() {
    closeDoorMat();
});

// user clicks submit
// if email is not empty, close doormat
$('#ck_subscribe_button').click(function() {

    if( $('#ck_emailField').val() != "" ) {
        setTimeout( closeDoorMat, 3000);
    }

});
</script>
</body>
</html>