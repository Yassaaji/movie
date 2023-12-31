
<style>
    body {
	padding: 0;
	margin: 0;
	position: relative;
	background: url("https://images.unsplash.com/photo-1569973560851-8c4563f4c3c8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80")
		no-repeat center center;
	background-size: cover;
	height: 100vh;
	font-family: "Raleway", sans-serif;
	overflow-y: hidden;
}

.content1 {
	max-width: 650px;
	margin: 0 auto;
	top: 35%;
	position: relative;
	h1 {
		line-height: 1.5;
		color: white;
		font-weight: 300;
		text-align: center;
		font-size: 3rem;
		text-shadow: 0 2px 5px black;
	}
}


/* PRELOADER CSS */
.page-loader{
	width: 100%;
	height: 100vh;
	position: absolute;
	background: #272727;
	z-index: 1000;
	.txt{
		color: #666;
		text-align: center;
		top: 40%;
		position: relative;
		text-transform: uppercase;
		letter-spacing: 0.3rem;
		font-weight: bold;
		line-height: 1.5;
	}
}

/* SPINNER ANIMATION */
.spinner {
	position: relative;
	top: 35%;
  width: 80px;
  height: 80px;
  margin: 0 auto;
  background-color: #fff;

  border-radius: 100%;
  -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
  animation: sk-scaleout 1.0s infinite ease-in-out;
}

@-webkit-keyframes sk-scaleout {
  0% { -webkit-transform: scale(0) }
  100% {
    -webkit-transform: scale(1.0);
    opacity: 0;
  }
}

@keyframes sk-scaleout {
  0% {
    -webkit-transform: scale(0);
    transform: scale(0);
  } 100% {
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
    opacity: 0;
  }
}
.txt .MOVIE{

}

</style>
<body>
    <!-- PAGE LOADER : PLACE RIGHT AFTER BODY TAG -->
<div class="page-loader" id="page">
	<div class="spinner"></div>
	<div class="txt">MOVIE<br>FLIXX</div>
</div>
<!-- PAGE LOADER END : PLACE RIGHT AFTER BODY TAG -->
<script>
    $(window).on('load',function(){
	setTimeout(function(){ // allowing 3 secs to fade out loader
	$('.page-loader').fadeOut('slow');
    // document.getElementById('page').style.display = 'none';
	},1000);
});
</script>
</body>

