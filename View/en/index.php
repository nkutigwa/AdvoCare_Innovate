
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADCI</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<!-- Favicons -->
	<link href="../img/logo.png" rel="icon">
	<link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Libraries CSS Files -->
	<link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="../lib/animate/animate.min.css" rel="stylesheet">
	<link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

	<!-- Main Stylesheet File -->
	<link href="../css/style.css" rel="stylesheet">
</head>

<body>
	<link href="//db.onlinewebfonts.com/c/77d394fa0c1103c648f880b77cb4a32f?family=FuturaLTW01-Medium" rel="stylesheet" type="text/css"/>

<!--==========================
Header
============================-->
<header id="header" class="wow fadeInDown">
  <div class="container-fluid navbar">
    <div class="logo">
      <a href="#header" class="scrollto" id="logo"><img src="../img/advoCare_new.png" alt="Logo" class="img-fluid"></a>
    </div>

    <nav id="navbar-right" class="main-nav float-right d-none d-lg-block">
      <div id="topbar">
        <div class="container">
          <div class="social-links">
            <a target="_blank" href="https://www.linkedin.com/company/ADCI" class="linkedin"><i class="fa fa-linkedin"></i></a>
            <a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a target="_blank" href="https://www.facebook.com/AdvoCareInnovate" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
          </div>
          <div class="menu-aux email">
            Email
          </div>
          <div class="menu-aux contact-us">
            Contacts
          </div>
        </div>
      </div>

      <ul>
        <li id="index"><a class="link" href="index.php">HOME</a></li>
        <li id="qsn" class="dropdown">
          <a class="dropbtn">ABOUT US </a>
          <div class="dropdown-content">
            <a id="about-us"  href="about-us.php">Profile of ADCI</a>
            <a id="vision" href="vision.php">Vision</a>
            <a id="values" href="values.php">Our values</a>
            <a id="sectors" href="sectors.php">Activities Sectors</a>
            <!-- <a href="#">Country Offices</a> -->
          </div>
        </li>
        <li id="wedo" class="dropdown">
          <a class="dropbtn">What we do </a>
          <div class="dropdown-content">
            <a id="expertise" href="expertise.php">EXPERTISE</a>
            <a id="data-service" href="data-service.php">Data services</a>
            <a id="service-recherche" href="service-recherche.php">Research Services</a>
            <a id="service-conseils" href="service-conseils.php">Advisory Services</a>
            <a id="impact-evaluation" href="impact-evaluation.php">Impact Evaluation and Third Party Monitoring services</a>
          </div>
        </li>
        <li id="constructions"><a class="link" href="constructions.php">Projects</a></li>
        <li id="constructions"><a class="link" href="constructions.php">Publications</a></li>
        <li id="opportunity"><a class="link" href="opportunity.php">OPPORTUNITIES</a></li>
        <li class="drop-down"><a href="">Language</a>
          <ul class="liste-langue">
                        <li class="current-menu"><a href="../../Controller/language-ctrl.php?langue=en">En</a></li>
            <li><a href="../../Controller/language-ctrl.php?langue=fr">Fr</a></li>
                      </ul>
        </li>
      </ul>
    </nav><!-- .main-nav -->
</header><!-- #header -->

<script src="../lib/jquery/jquery.min.js"></script>
<script>
  (function(){
    const qsn = ["about-us", "vision", "values", "sectors"]
    const wedo = ["expertise", "data-service", "service-recherche", "service-conseils", "impact-evaluation"]
    var currentPathArray = window.location.pathname.split("/");
    var currentPath = (currentPathArray[currentPathArray.length - 1]).split(".");
    var path = currentPath[0];
    console.log("pathname : ", path);
    if(qsn.includes(path)){
      document.getElementById("qsn").classList.add("current-menu")
    }
    if(wedo.includes(path)){
      document.getElementById("wedo").classList.add("current-menu")
    }
    if(path) {
      document.getElementById(path).classList.add("current-menu")
    } else {
      document.getElementById("index").classList.add("current-menu")
    }
    $(".email").click(() => {
      redirect_blank("https://pro1.mail.ovh.net/");
    });
    $(".contact-us").click(() => {
      document.location.href = "contact-us.php";
    });
    function redirect_blank(url) {
      var a = document.createElement('a');
      a.target="_blank";
      a.href=url;
      a.click();
    }
  })()
</script>
	<!--==========================
	Intro Section
	============================-->
	<section id="intro" class="clearfix">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<header>
				<div class="owl-carousel owl-theme">
					<div class="item">
						<img src="../img/research_image_advoCare.jpeg" alt="images">
						<div class="cover">
							<div class="container">
								<div class="header-content">
									<div class="line"></div>
									<h2>AdvoCare Innovate </h2>
									<h1>Research</h1>
									<h4>To become a recognized data quality research laboratory across Africa</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/wellness_advoCare_innovate.jpg" alt="images">
						<div class="cover">
							<div class="container">
								<div class="header-content">
									<div class="line animated bounceInLeft"></div>
									<h2>AdvoCare Innovate </h2>
									<h1>Wellness</h1>
									<h4>To become a recognized data quality research laboratory across Africa</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/innovation_advoCare.jpg" alt="images">
						<div class="cover">
							<div class="container">
								<div class="header-content">
									<div class="line animated bounceInLeft"></div>
									<h2>AdvoCare Innovate </h2>
									<h1>Innovation</h1>
									<h4>To become a recognized data quality research laboratory across Africa</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/health.jpg" alt="images">
						<div class="cover">
							<div class="container">
								<div class="header-content">
									<div class="line animated bounceInLeft"></div>
									<h2>AdvoCare Innovate </h2>
									<h1>Health – Nutrition</h1>
									<h4>To become a recognized data quality research laboratory across Africa</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/research_image_advoCare.jpeg" alt="images">
						<div class="cover">
							<div class="container">
								<div class="header-content">
									<div class="line"></div>
									<h2>AdvoCare Innovate </h2>
									<h1>Research</h1>
									<h4>To become a recognized data quality research laboratory across Africa</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/wellness_advoCare_innovate.jpg" alt="images">
						<div class="cover">
							<div class="container">
								<div class="header-content">
									<div class="line animated bounceInLeft"></div>
									<h2>AdvoCare Innovate </h2>
									<h1>Wellness</h1>
									<h4>To become a recognized data quality research laboratory across Africa</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/innovation_advoCare.jpg" alt="images">
						<div class="cover">
							<div class="container">
								<div class="header-content">
									<div class="line animated bounceInLeft"></div>
									<h2>AdvoCare Innovate </h2>
									<h1>Innovation</h1>
									<h4>To become a recognized data quality research laboratory across Africa</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/health.jpg" alt="images">
						<div class="cover">
							<div class="container">
								<div class="header-content">
									<div class="line animated bounceInLeft"></div>
									<h2>AdvoCare Innovate </h2>
									<h1>Health – Nutrition</h1>
									<h4>To become a recognized data quality research laboratory across Africa</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/research_image_advoCare.jpeg" alt="images">
						<div class="cover">
							<div class="container">
								<div class="header-content">
									<div class="line"></div>
									<h2>AdvoCare Innovate </h2>
									<h1>Research</h1>
									<h4>To become a recognized data quality research laboratory across Africa</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/wellness_advoCare_innovate.jpg" alt="images">
						<div class="cover">
							<div class="container">
								<div class="header-content">
									<div class="line animated bounceInLeft"></div>
									<h2>AdvoCare Innovate </h2>
									<h1>Wellness</h1>
									<h4>To become a recognized data quality research laboratory across Africa</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/innovation_advoCare.jpg" alt="images">
						<div class="cover">
							<div class="container">
								<div class="header-content">
									<div class="line animated bounceInLeft"></div>
									<h2>AdvoCare Innovate </h2>
									<h1>Innovation</h1>
									<h4>To become a recognized data quality research laboratory across Africa</h4>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="../img/health.jpg" alt="images">
						<div class="cover">
							<div class="container">
								<div class="header-content">
									<div class="line animated bounceInLeft"></div>
									<h2>AdvoCare Innovate </h2>
									<h1>Health – Nutrition</h1>
									<h4>To become a recognized data quality research laboratory across Africa</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
	</section><!-- #intro -->

	<section>
		<div class="container-fluid laboratory">
			<header class="section-header">
				<h3>A laboratory for decision support</h3>
			</header>

			<div class="sectors">
				<div class="sector">
					<img src="../img/research-graph_advoCare.jpg" alt="" class="img-fluid">
					<span>Research</span>
				</div>
				<div class="sector">
					<span>Health – Nutrition</span>
					<img src="../img/43071.jpg" alt="" class="img-fluid">
				</div>
				<div class="sector">
				<img src="../img/innovatio_advoCare_new.png" alt="" class="img-fluid">
					<span>Innovation</span>
				</div>
				<div class="sector">
				<span>Wellness</span>
					<img src="../img/wellness.jpg" alt="" class="img-fluid">
				</div>
				<!--hide this content>
				<div class="sector">
					<img src="../img/3796066.jpg" alt="" class="img-fluid">
					<span>Research</span>
				</div>
				<div class="sector">
					<span>Education</span>
					<img src="../img/510977-PIA7DE-468.png" alt="" class="img-fluid">
				</div>
</div> -->
			</div>
		</div>
	</section>
<!--hide this content>
	<section>
		<div class="container-fluid project">
			<header class="section-header">
				<h3>Current Events</h3>
			</header>

			<div class="project-slider">
				<div class="event">
					<span class="badge">12 Mars, 2021</span>
					<img src="../img/88257460_1283869338476613_2048744944025206784_o.jpg" class="img-event" alt="">
					<a href="https://www.facebook.com/hub4research/posts/1283876345142579"  target="_blank">
						<div class="view">
							<i class="fa fa-image"></i> <br>
							<span>Click to consult all pictures</span> <br>
						</div>
					</a>
					<div class="description">
						<span>
							Evaluation de base (#baseline) du projet  “McGovern-Dole Food for Education and Child Nutrition Program in Togo (STARS Project)”.
						</span>
					</div>
				</div>
				<div class="event">
					<span class="badge">29 Février, 2020</span>
					<img src="../img/88438105_1274310886099125_7184650288073015296_o.jpg" class="img-event" alt="">
					<a href="https://www.facebook.com/hub4research/posts/1274314599432087"  target="_blank">
						<div class="view">
							<i class="fa fa-image"></i> <br>
							<span>Click to consult all pictures</span> <br>
						</div>
					</a>
					<div class="description">
						<span>
							Enquête de base pour l’évaluation de  l’impact de l’érosion sur la  production du coton
						</span>
					</div>
				</div>
				<div class="event">
					<span class="badge">21 Février, 2020</span>
					<img src="../img/86860297_1268183926711821_5706762117512691712_o.jpg" class="img-event" alt="">
					<a href="https://www.facebook.com/hub4research/posts/1268188960044651"  target="_blank">
						<div class="view">
							<i class="fa fa-image"></i> <br>
							<span>Click to consult all pictures</span>
						</div>
					</a>
					<div class="description">
						<span>
							Évaluation qualitative du Programme National Villages et Ecole Assainies (PNVEA)—la composante villages assainies.
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>  -->
<!--hide this content>
	<section>
		<header class="section-header">
			<h3>OUR OFFICES</h3>
		</header>
		<div id="chartdiv" class=""></div>
		<div class="legends"></div>
	</section>

	<main id="main">
</div> -->
		<!--==========================
Footer
============================-->
<footer id="footer" class="section-bg wow fadeIn">
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="row">
						<div class="col-sm-12">
							<div class="footer-newsletter">
								<h4>Subscribe to newsletter</h4>

								<form action="" method="post">
									<input type="email" name="email"><input type="submit"  value="Subscribe">
								</form>
							</div>
						</div>

						<div class="col-sm-12">
							<div class="footer-links">
								<h4>Useful Links</h4>
								<ul>
									<li><a href="#">ABOUT US </a></li>
									<li><a href="#">CONTACT US</a></li>
									<li><a href="#">TERMS & CONDITIONS</a></li>
								</ul>
							</div>

							<div class="footer-links">
								<h4>Contact us</h4>
								<p>
								SAULI EPIMACK JOHN <br> 
                                P.O.BOX 90328,  <br>
								KIJITONYAMA, MABATINI, <br>
								PLOT NO. 755 BLOCK 47, <br>
								KINONDONI,  <br>
								DAR ES SALAAM  <br>
							    <strong>Phone:</strong>+255 76 74 23 804<br>
								<strong>Email:</strong>sepimack@gmail.com<br>
								</p>
							</div>

							<div class="social-links">
								<a target="_blank" href="https://www.linkedin.com/company/ADCI" class="linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="#" class="youtube"><i class="fa fa-youtube"></i></a>
								<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
								<a target="_blank" href="https://www.facebook.com/AdvoCareInnovate" class="facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="form">
						<h4>Send us a message</h4>
						<form action="" method="post" role="form" class="contactForm">
							<div class="form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
								<div class="validation"></div>
							</div>
							<div class="form-group">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
								<div class="validation"></div>
							</div>

							<div id="sendmessage">Your message has been sent. Thank you!</div>
							<div id="errormessage"></div>

							<div class="text-center"><button type="submit" title="Send message">Send message</button></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="copyright">
			<strong>Copyright © 2022. AdvoCare Innovate. All rights reserved.</strong>
		</div>
	</div>
</footer><!-- #footer -->	</main>

	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
	<!-- Uncomment below i you want to use a preloader -->
	<!-- <div id="preloader"></div> -->

	<!-- JavaScript Libraries -->
	<script src="../lib/jquery/jquery.min.js"></script>
	<script src="../lib/jquery/jquery-migrate.min.js"></script>
	<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../lib/easing/easing.min.js"></script>
	<script src="../lib/mobile-nav/mobile-nav.js"></script>
	<script src="../lib/wow/wow.min.js"></script>
	<script src="../lib/waypoints/waypoints.min.js"></script>
	<script src="../lib/counterup/counterup.min.js"></script>
	<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="../lib/isotope/isotope.pkgd.min.js"></script>
	<script src="../lib/lightbox/js/lightbox.min.js"></script>
	<!-- Contact Form JavaScript File -->
	<script src="../contactform/contactform.js"></script>

	<!-- Template Main Javascript File -->
	<script src="../js/main.js"></script>

	<script type="text/javascript">
	$("#slideshow > div:gt(0)").hide();

	setInterval(function() { 
		$('#slideshow > div:first')
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo('#slideshow');
	},  3000);
	</script>

	<!-- For amchart map -->
	<script src="https://www.amcharts.com/lib/4/core.js"></script>
	<script src="https://www.amcharts.com/lib/4/maps.js"></script>
	<script src="https://www.amcharts.com/lib/4/geodata/worldLow.js"></script>
	<script src="https://www.amcharts.com/lib/4/themes/animated.js"></script>
	<!-- Chart code -->
	<script>
		am4core.ready(function() {

		// Themes begin
		am4core.useTheme(am4themes_animated);
		// Themes end

		// Create map instance
		var chart = am4core.create("chartdiv", am4maps.MapChart);
		chart.zoomControl = new am4maps.ZoomControl();
		chart.zoomControl.slider.height = 100
		chart.homeZoomLevel = 1.8;
		chart.homeGeoPoint = {
			latitude: 11.996806,
			longitude: -2.140268
		};

		// Set map definition
		chart.geodata = am4geodata_worldLow;

		// Set projection
		chart.projection = new am4maps.projections.Miller();

		// Create map polygon series
		var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());

		// Exclude Antartica
		polygonSeries.exclude = ["AQ"];

		// Make map load polygon (like country names) data from GeoJSON
		polygonSeries.useGeodata = true;

		// disable mouse zooming
		chart.chartContainer.wheelable = false;

		// Configure series
		var polygonTemplate = polygonSeries.mapPolygons.template;
		polygonTemplate.tooltipText = "{name}";
		polygonTemplate.polygon.fillOpacity = 0.6;

		// to fill color on country
		polygonTemplate.propertyFields.fill = "fill";

		// Create hover state and set alternative fill color
		var hs = polygonTemplate.states.create("hover");
		hs.properties.fill = chart.colors.getIndex(0);

		// Add image series
		var imageSeries = chart.series.push(new am4maps.MapImageSeries());
		imageSeries.mapImages.template.propertyFields.longitude = "longitude";
		imageSeries.mapImages.template.propertyFields.latitude = "latitude";
		imageSeries.mapImages.template.tooltipText = "{title}";
		imageSeries.mapImages.template.propertyFields.url = "url";

		var circle = imageSeries.mapImages.template.createChild(am4core.Circle);
		circle.radius = 3;
		circle.propertyFields.fill = "color";

		var circle2 = imageSeries.mapImages.template.createChild(am4core.Circle);
		circle2.radius = 3;
		circle2.propertyFields.fill = "color";


		circle2.events.on("inited", function(event){
		animateBullet(event.target);
		})


		function animateBullet(circle) {
			var animation = circle.animate([{ property: "scale", from: 1, to: 2 }, { property: "opacity", from: 1, to: 0 }], 1000, am4core.ease.circleOut);
			animation.events.on("animationended", function(event){
			animateBullet(event.target.object);
			})
		}

		var colorSet = new am4core.ColorSet();

		const tableLegend = [];

		function getColorNext(pays){
			const currentColor = colorSet.next();
			const r = currentColor._value.r;
			const g = currentColor._value.g;
			const b = currentColor._value.b;
			tableLegend.push({
				pays: pays,
				color: `rgb(${r}, ${g}, ${b})`
			})
			return currentColor;
		}

		
		// Add some data
		polygonSeries.data = [
			{
				"id": "BF",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "NG",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "TD",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "CM",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "DJ",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "KE",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "AO",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "ZA",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "ZM",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "GN",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "CI",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "ML",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "SN",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "CD",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "BI",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "CG",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "GQ",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "ET",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "TZ",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "MG",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "ZW",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "BJ",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "GW",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "LR",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "NE",
				"fill": am4core.color("#67dc75")
			},
			{
				"id": "TG",
				"fill": am4core.color("#67dc75")
			},
		];

		// Bind "fill" property to "fill" key in data
//		polygonTemplate.propertyFields.fill = "fill";

//		imageSeries.data = [ 
//			{
//				"title": `Burkina Faso
//							Parcelle No 6, lot no5, section cadastral TM, Quartier Kalgoné,
//							Secteur 24 09 BP 762 Ouagadougou 09
//							burkinaf@hub4research.com
//							Tel : +226 76 99 46 57`,
//				"latitude": 11.996806,
//				"longitude": -2.140268,
//				"color":getColorNext("Burkina Faso")
//			}, 
//			{
//				"title": `RDC
//							Kinshasa: 65 Avenenu du livre, quartier Golf, commune de la Gombe
//							Lubumbashi 639 Av. Abbé Kahozi/Commune de Lubumbashi
//							drc@hub4research.com`,
//				"latitude": -2.434041,
//				"longitude": 21.623072,
//				"color":getColorNext("RDC"),
//				"id": "RDC",
//				"name": "RDC"
//			}, 
//			{
//				"title": `Tanzania
//							Abuja Apo resettlement zone C,195
//							Lagos: 2nd Floor Suite 6, Ariket Plaza, 235 Alake bus stop, Ikotun - Idimu Rd, Ikotun
//							Tanzania@AdvoCareInnovate.com
//							Tel : +255 62 10 07 059
//							Tel : +255 76 74 23 804`,
//				"latitude": 6.432389,
//				"longitude": 7.059757,
//				"color":getColorNext("Tanzania")
//			}, 
//			{
//				"title": `Burundi
//							36, Chaussée du Prince Louis Rwagasore
//							ROHERO I (Bujumbura)
//							burundi@hub4research.com
//							Tel : +257 79 41 01 80`,
//				"latitude": -3.212666,
//				"longitude":  29.886463,
//				"color":getColorNext("Burundi")
//			},
//		];

		const taille = tableLegend.length;
		for(var i = 0; i<taille; i++){
			const legend = tableLegend[i];
			$(`
				<div class="legend">
					<div class="petit-cadre" style = "background-color: ${legend.color}"></div>
					<div class="grand-cadre">${legend.pays}</div>
				</div>
			`).appendTo(".legends")
		}
		$(`
			<div class="legend">
				<div class="petit-cadre" style = "background-color: #67dc75"></div>
				<div class="grand-cadre"> Nos pays membres</div>
			</div>
		`).appendTo(".legends")

		}); // end am4core.ready()
	</script>
	<script>
		(function(){
			$('.owl-carousel').owlCarousel({
				loop:false,
				margin:10,
				dots:false,
				nav:true,
				mouseDrag:true,
				autoplay:true,
				animateOut: 'slideOutUp',
				responsive:{
					0:{
						items:1
					},
					600:{
						items:1
					},
					1000:{
						items:1
					}
				}
			});
		})();
	</script>
</body>
</html>