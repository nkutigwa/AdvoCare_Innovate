
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
      expertise Section
    ============================-->
	<section>
		<div class="container-fluid myheader research-service">
			<div class="my-header-title">Research Services</div>
		</div>
	</section>
	<section>
		<div class="container-fluid content">
			<p>Leveraging its in-house technical expertise, AdvoCare Innovate supports clients in the full life-cycle of research projects, from design, through to data collection and analysis.</p>
<p>Typical research projects include: program evaluations, household surveys, poverty analysis, prevalence studies and studies on perception, knowledge, attitudes, behavior and practice (KABP), price sensitivity, etc.</p>
<div id="accordion">
    <div class="card">
        <div class="card-header" id="headingOne">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    1. Designing research instruments
                </button>
            </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
                <p>AdvoCare Innovate works in close collaboration with clients to design effective research tools and instruments. When developing research instruments our teams follow a number of principles:</p>
                <ol style="list-style-type: lower-roman;">
                <li>never re-invent the wheel, study the literature;</li>
                <li>always think about the local context; and</li>
                <li>test the research instruments, don&rsquo;t assume they make sense.</li>
                </ol>
                <p>Research instruments are translated to the local language(s), back translated into the original language, piloted in live conditions. This ensures that the research instruments are consistent with the research objectives and that questions are well understood and interpreted by the target population.</p>
                <p>To ensure data accuracy and quality, AdvoCare Innovate checks a number of quality criteria including the flow of questions, the wording of questions, the precision of the translation and the degree to which the research instruments capture the local context.</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading2">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                2. Designing weighting strategies
                </button>
            </h5>
        </div>
        <div id="collapse2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
            <div class="card-body">
                <p>AdvoCare Innovate&rsquo;s research team helps clients select the most appropriate weighting strategy for their sample. Our considerations for weighting are to:</p>
                <ol style="list-style-type: lower-roman;">
                <li>help clients estimate population totals (using weights reflecting the inverse probability of selection);</li>
                <li>adjust samples so that they better match the characteristics of the population (using post-stratification weights);</li>
                <li>correct for attrition bias (if there is a known source of attrition); or</li>
                <li>balance the treatment and control group (weighting on the inverse of the propensity score).</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading3">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                3. Econometric analysis
                </button>
            </h5>
        </div>
        <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
            <div class="card-body">
                <p>AdvoCare Innovate&rsquo;s research team helps clients make sense of data using econometric analysis techniques and statistical software tools.</p>
                <p>Our teams work with a number of principles:</p>
                <ol style="list-style-type: lower-roman;">
                <li>structure the analysis following a clear set of priors/hypothesis;</li>
                <li>work collaboratively, as that is the best way to generate additional ideas and hypotheses;</li>
                <li>start simple, focusing on uni-variate and bi-variate analysis to understand variables and patterns in the data;</li>
                <li>automate analysis wherever possible to accelerate delivery to the client and not focus too much energy on trivial calculations;</li>
                <li>estimate coefficients using several techniques/models to test the robustness of results;</li>
                <li>think twice about how standard errors and test-statistics are estimated, and</li>
                <li>convey findings graphically.</li>
                </ol>
                <p>We have experience working with all sorts of datasets, including household datasets, child datasets, agriculture-focused datasets, export datasets, national tax databases, etc.</p>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading4">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                    4. Network analysis and complexity techniques
                </button>
            </h5>
        </div>
        <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
            <div class="card-body">
                <p>AdvoCare Innovate is constantly looking for partners interested in applying network analysis or complexity methods to development issues. The type of techniques we routinely adapt to our project work, include:</p>
                <ol style="list-style-type: lower-roman;">
                <li>studying the relationship between variables not only in the framework of regression analysis but also through the lense of a network of variables, which has proven to lead to very interesting insights;</li>
                <li>applying measures of complexity to calculate socio-economic indexes, such as wealth;</li>
                <li>generating similarity networks, to identify and visualize clusters of individuals or clusters; and</li>
                <li>using network visualizations to convey messages/findings.</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading5">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                    5. Designing &amp; implementing sampling strategies
                </button>
            </h5>
        </div>
        <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
            <div class="card-body">
                <p>AdvoCare Innovate helps clients design the most optimal sampling strategies, given the research objectives and budget constraints. AdvoCare Innovate also works with clients to operationalize these strategies, while minimizing the risks of compromising the validity of the sample and staying within budget parameters.</p>
                <p>Sampling effectively is key to the success of research projects; it determines:</p>
                <ol style="list-style-type: lower-roman;">
                <li>which research questions can be addressed;</li>
                <li>the validity of the results;</li>
                <li>the analytic options available;</li>
                <li>the precision of results; and</li>
                <li>the required budget, as sample size is one of the biggest cost-drivers in research projects.</li>
                </ol>
                <p>Sampling always comes with uncertainty, risks and limitations. ADCI helps clients understand some of the analytic and financial trade-offs involved when opting for different sampling strategies as well as the sensitivity of statistical power to various known/unknown parameters using established formulas.</p>

            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading6">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                    6. Generating testable research questions
                </button>
            </h5>
        </div>
        <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion">
            <div class="card-body">
                <p>AdvoCare Innovate supports clients in the design of relevant and testable research questions using its proprietary design-thinking approach.</p>
                <p>This iterative and collaborative method, allows us to design research projects in a structured way, starting from policy assumptions or what we refer to as policy levers, through to identifying testable priors/hypotheses, symptoms that we would expect to observe if these priors were true, and associated metrics. The process can involve semi-structured interviews and focus groups.</p>
                <p>The aim of the design-thinking-approach is to:</p>
                <ol style="list-style-type: lower-roman;">
                <li>think strategically and in a structured way about how a research project can inform policy and program design/implementation;</li>
                <li>to generate ideas on the best hypothesis to test;</li>
                <li>to engage with the client through a structured thinking process; and</li>
                <li>to ensure research projects are as relevant as possible.</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading7">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                    7. GIS mapping and data visualizations
                </button>
            </h5>
        </div>
        <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion">
            <div class="card-body">
                <p>AdvoCare Innovate has the in-house capability to conduct simple GIS mapping for clients, including graduated symbol maps, and point maps, that account for the vast majority of our clients&rsquo; needs.</p>
                <p>AdvoCare Innovate also puts a large emphasis on data visualization and conveying statistics in a graphical and simple way. Data visualization plays a double role:</p>
                <ol style="list-style-type: lower-roman;">
                <li>makes data easier to understand and read; but</li>
                <li>also helps our research teams generate new insights about patterns and correlations.</li>
                </ol>
                <p>AdvoCare Innovate is continuously expanding its capabilities in the GIS and Data Visualization space and experimenting with new ways to convey information, in particular when it comes to network visualizations.</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading8">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                    8. Competent Research Team
                </button>
            </h5>
        </div>
        <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordion">
            <div class="card-body">
                <p>AdvoCare Innovate&rsquo;s core team brings strong individual and collective technical expertise in delivering research projects, from start to finish. Our research team, trained in some of the world&rsquo;s best universities, specializes in econometric analysis, program evaluation, and sampling techniques.</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading9">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                    9. Structured Research Approach
                </button>
            </h5>
        </div>
        <div id="collapse9" class="collapse" aria-labelledby="heading9" data-parent="#accordion">
            <div class="card-body">
                <p>AdvoCare Innovate takes a very structured approach to research using a proprietary method. This iterative and collaborative method, allows our teams to design research projects in a structured way, starting from policy assumptions, through to identifying testable priors/hypotheses, symptoms that we would expect to observe if these priors were true, and associated metrics.</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading10">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                    10. Analytic Rigor &amp; Transparency
                </button>
            </h5>
        </div>
        <div id="collapse10" class="collapse" aria-labelledby="heading10" data-parent="#accordion">
            <div class="card-body">
                <p>AdvoCare Innovate strives to produce analysis of the highest quality. We achieve this by taking a structured approach, testing hypotheses both quantitatively and qualitatively and systematically stress-testing our results and methods. This also means being forthcoming about the limitations of the research undertaken and the assumptions under which results hold.</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading11">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                    11. Local Knowledge and Presence
                </button>
            </h5>
        </div>
        <div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordion">
            <div class="card-body">
                <p>We have worked on many different topics, with clients in both public and private sectors, AdvoCare Innovate has an excellent standing of the local context. As a company, we invest in always improving our local knowledge and integrating the specifics of the local context into our project design and project execution.</p>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header" id="heading12">
            <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                    12. Testing Innovative Methods
                </button>
            </h5>
        </div>
        <div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordion">
            <div class="card-body">
                <p>At AdvoCare Innovate, we try to innovate with every new opportunity, integrating the latest available research methods, testing approaches borrowed from other sciences (in particular, complex networks) and applying recently acquired ideas from previous projects. Through our work and the AdvoCare Innovate Lab, we aim to make a significant contribution to development economics.</p>
            </div>
        </div>
    </div>
</div>		</div>
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
			<strong>Copyright © 2022. AdvoCare Innovate . All rights reserved.</strong>
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