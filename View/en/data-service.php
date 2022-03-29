
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ADCI</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<!-- Favicons -->
	<link href="../img/advoCare.png" rel="icon">
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
      expertise Section
    ============================-->
	<section>
		<div class="container-fluid myheader data-service">
			<div class="my-header-title">Data services</div>
		</div>
	</section>
	<section>
		<div class="container-fluid content">
			
			<p>AdvoCare Innovate provides data collection services using various methodologies and updated tools. We possess and provide experienced teams, electronic equipment and robust processes to ensure the best quality.</p>
			<div id="accordion">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
							1- Behavioral Research							</button>
						</h5>
					</div>

					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							AdvoCare Innovate supports researchers to run behavioral research/games or related experiments in the field, supporting our clients with trained teams, electronic data collection equipment, and robust systems to manage field logistics. AdvoCare innovate is continuously expanding its capabilities in this area.						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								2- Qualitative data collection							</button>
						</h5>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<div class="card-body">
						AdvoCare Innovate holds a team of trained moderators and facilitators that lead qualitative research projects, including conducting key informant interviews, semi-structured interviews, and focus group discussions in the local language. We are familiar with using Nvivo and ATLAS.ti software for qualitative data management and analysis.						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading3">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
								3- Electronic data collection							</button>
						</h5>
					</div>
					<div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
						<div class="card-body">
						AdvoCare Innovate uses Android Tablets for data collection. We have a versatile and specialized team for scripting; coding of surveys into electronic platforms/tablets working with various platforms including SurveyCTO, ODK, KoBoToolbox; Akvo Flow, Survey Solutions, Survey2Go, Tangerine, etc. These enables the programming of very flexible surveys, with complicated skip patterns if required, multi-media, and excellent audit functions. <br> Quantitative data collection is conducted using cutting-edge electronic data collection equipment (tablets/smart Phones). From the training of the data team to the piloting of research instruments, preparing survey logistics, programming the tablets, field supervision, data quality back-checks, implementing ethical standards, sound accounting, insurance coverage and complying with in-country legal requirements, AdvoCare Innovate puts a lot of emphasis on ensuring robust data collection processes. <br> AdvoCare has conducted large-scale surveys in multiple sectors, including the agriculture, education, health, gender, labor, social protection, finance, poverty (income/consumption), mine and telecom sectors. These surveys have included prevalence studies, program evaluations, behavioral games and market research surveys.						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading4">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
								4- Programming research instruments							</button>
						</h5>
					</div>
					<div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
						<div class="card-body">
						AdvoCare Innovate’s research and data teams have extensive experience programming complex surveys onto ODK platforms, such as SurveyCTO, SurveySolution and Akvo Flow. <br> These enable the programming of very flexible surveys, with complicated skip patterns and multi-media. These tools also offer excellent audit functions, including capturing the time and location of the interviews, the duration of each question, and even random audio recordings of selected interviews.						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading5">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
								5- Data processing and cleaning							</button>
						</h5>
					</div>
					<div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
						<div class="card-body">
						Even when electronically collected, raw data often come with inconsistencies. Our skilled research analysts ensure that all options are well coded, outliers removed, variables and options within them correctly labelled, open ended questions translated and coded in the main language, and the dataset re-shaped or re-organized so that variables match the structure of the survey.  <br> All data will be delivered to the client, ready to use, cleaned and labelled in Stata/SPSS and Excel formats.						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading6">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
								6- Trained Data Collection Team							</button>
						</h5>
					</div>
					<div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
						<div class="card-body">
						AdvoCare innovate holds a network of enumerators across Tanzania, including field coordinators, supervisors, interviewers, quality control officers, moderators and translators, extensively trained by AdvoCare Innovate and with experience working on multiple research projects with AdvoCare Innovate. The enumerators AdvoCare Innovate works with are selected through a competitive process and all have at least a Bachelor’s degree from leading local or international Universities.						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading7">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
								7- Rigorous Data Quality							</button>
						</h5>
					</div>
					<div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
						<div class="card-body">
						We employ a rigorous approach to data quality, which includes using in-built data quality checks via survey programming, auditing at least 10% of each interviewer’s work (i.e. 10% of the total sample), and most important of all, ensuring intensive enumerator training. We have an independent Data Quality team that leads this effort.						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading8">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
								8- An Established Infrastructure							</button>
						</h5>
					</div>
					<div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
						<div class="card-body">
						AdvoCare Innovate provides all the required infrastructure, logistics and management oversight to conduct large-scale surveys. We train our research teams, coordinate with authorities to obtain the required approvals, organize field logistics and transport, manage data quality and control processes, maintain sound accounting practices, and ensure we have the required insurance policies.						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading9">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
								9- Extensive Field Preparation							</button>
						</h5>
					</div>
					<div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
						<div class="card-body">
							We minimize attrition and ensure smooth data collection processes by conducting extensive field preparation, informing local authorities of our survey and recruiting and confirming survey participants in advance of data collection. Field preparation makes a very big difference to the quality of field work.						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="heading10">
						<h5 class="mb-0">
							<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
								10- Ethical Research Protocols 							</button>
						</h5>
					</div>
					<div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion">
						<div class="card-body">
							AdvoCare Innovate has strict guidelines on conducting interviews with survey participants, which are reinforced during our training sessions. Our team has experience conducting interviews on sensitive topics and are well-versed interviewing children and adults alike.						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

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
			<strong>Copyright © 2022. AdvoCare innovate. All rights reserved.</strong>
		</div>
	</div>
</footer><!-- #footer -->
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
</body>
</html>