
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
  <section>
		<div class="container-fluid myheader">
			<div class="my-header-title">Jobs</div>
		</div>
	</section>
	<section>
		<div class="container-fluid content">
			<p>Do you want to work for a cutting-edge organization? Are you passionate about making a difference? If you are eager about reducing poverty and helping policymakers, NGOs and International organizations to take good actions, then AdvoCare Innovate (ADCI) might be the place for you</p>
      <p>AdvoCare Innovate is an independent research laboratory whose experts have accumulated several years of experience in the conduct of social science research projects and evaluation of projects and programs.</p>
      <p>AdvoCare Innovate is an equal opportunity employer and consideration for employment is given to qualified applicants regardless of race, color, religion, sex, national and ethnic origin, or social status.See our current job openings below. Click the position that best suits your professional and academic background and fill in the application form.</p>		</div>
	</section>


	<main id="main">
    <!-- Modal -->
<div id="myModal22" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">AVIS DE RECRUTEMENT D’ENQUETEURS POUR CONSTITUTION DE BASE DE DONNEES EN COTE D’IVOIRE</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

      
      
      <h3><strong>1- A propos de ADCI </strong></h3>
<p style="text-align: justify;">AdvoCare Innovate (ADCI) est un laboratoire de recherche ind&eacute;pendant dont les experts ont cumul&eacute; plusieurs ann&eacute;es d&rsquo;exp&eacute;riences dans la conduite de projets de recherche en sciences sociales et dans l&rsquo;&eacute;valuation des projets et programmes. Son expertise le positionne comme l&rsquo;un des cabinets leader en mati&egrave;re de collecte de donn&eacute;es et d&rsquo;&eacute;valuation des projets ou programmes en Afrique. L&rsquo;objectif ultime d&rsquo;ADCI est d&rsquo;am&eacute;liorer le bien-&ecirc;tre des populations en orientant les d&eacute;cideurs dans leurs prises de d&eacute;cision sur la base de donn&eacute;es de bonne qualit&eacute; et d&rsquo;analyses bas&eacute;s sur les r&eacute;sultats scientifiques de nos recherches. ADCI utilise des techniques innovatrices de recherche et d'&eacute;valuation pour appuyer les d&eacute;cideurs dans leur prise de d&eacute;cision et dispose d&rsquo;experts et consultants chevronn&eacute;s dans les secteurs tels que: l&rsquo;Eau, la Sant&eacute;, l&rsquo;Assainissement, la Nutrition, la Pauvret&eacute;, la Finance, l&rsquo;Agriculture, l&rsquo;Education, la Gouvernance, le March&eacute; du travail et l&rsquo;Emploi des jeunes, le Transport public, l&rsquo;Energie, la D&eacute;centralisation, l&rsquo;Autonomisation des femmes et la question du genre, la Justice, l&rsquo;Int&eacute;gration communautaire, etc.... ADCI est pr&eacute;sent dans plus de dix pays de l&rsquo;Afrique avec son si&egrave;ge social &agrave; Abidjan en C&ocirc;te d&rsquo;Ivoire. Veuillez visiter notre site web : http://www.AdvoCareInnovate.com ou info@AdvoCareInnovate.com pour plus d&rsquo;informations.</p>
<p style="text-align: justify;">&nbsp;</p>
<h3 style="text-align: justify;"><strong>2- Contexte et objectifs du recrutement </strong></h3>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">Notre objectif est d&rsquo;&eacute;tablir une base de donn&eacute;es de potentiels consultants pour la mise en &oelig;uvre de nos activit&eacute;s futures. A cet effet, nous avons mis en ligne un formulaire afin de recueillir quelques informations vous concernant.</p>
<p style="text-align: justify;"><strong><em>NB : ce recrutement n'est pas li&eacute; &agrave; des projets sp&eacute;cifiques mais nous permettra de constituer une base de donn&eacute;es d&rsquo;enqu&ecirc;teurs dans toutes les r&eacute;gions de la C&ocirc;te d&rsquo;Ivoire. Seules les personnes dont leurs noms figurent dans notre base seront contact&eacute;es en cas d&rsquo;activit&eacute;s de terrain.</em></strong></p>
<p style="text-align: justify;">&nbsp;</p>
<h3 style="text-align: justify;"><strong>3- Comp&eacute;tences requises </strong></h3>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">&bull; Ma&icirc;triser l&rsquo;outil informatique (tablettes/Android),</p>
<p style="text-align: justify;">&bull; Parler couramment au moins une langue locale,</p>
<p style="text-align: justify;">&bull; Avoir un esprit d&rsquo;&eacute;quipe,</p>
<p style="text-align: justify;">&bull; Savoir travailler avec rigueur et pr&eacute;cision,</p>
<p style="text-align: justify;">&bull; Respecter la confidentialit&eacute; des donn&eacute;es,</p>
<p style="text-align: justify;">&bull; Etre int&egrave;gre,</p>
<p style="text-align: justify;">&bull; Etre m&eacute;thodique,</p>
<p style="text-align: justify;">&bull; Etre motiv&eacute;</p>
<p style="text-align: justify;">&nbsp;</p>
<h3 style="text-align: justify;"><strong>4- Niveau requis : </strong></h3>
<p style="text-align: justify;">Avoir au minimum le niveau BAC+2.</p>
<p style="text-align: justify;">&nbsp;</p>
<h3 style="text-align: justify;"><strong>5- Exp&eacute;rience en collecte de donn&eacute;es </strong></h3>
<p style="text-align: justify;">Non obligatoire mais tr&egrave;s utile</p>
<p style="text-align: justify;">&nbsp;</p>
<h3 style="text-align: justify;"><strong>6- Comment postuler : </strong></h3>
<p style="text-align: left;">Pour postuler, veuillez suivre cliquer <a title="Link" href="https://ADCI.surveycto.com/collect/base_enquet_ci?caseid=" target="_blank" rel="noopener">ici</a></p>
<p style="text-align: left;">Date de cl&ocirc;ture : <strong>02/12/2021 </strong></p>
<p style="text-align: left;">NB : Toute candidature envoy&eacute;e par mail ne sera pas prise en compte.</p>
<p style="text-align: left;">En cas de difficult&eacute; de soumission en ligne n&rsquo;h&eacute;sitez pas &agrave; nous &eacute;crire sur <span style="color: #3366ff;">info@AdvoCareInnovate.com</span> pour de plus amples informations.</p>
<p style="text-align: left;">ADCI est un employeur garantissant l'&eacute;galit&eacute; des chances. Par ailleurs il encourage vivement les candidatures f&eacute;minines.</p>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
</div> 
 <!-- Modal -->
<!--hide this content>
<div id="myModal21" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">AVIS DE CONSTITUTION  DE BASE DES AGENTS DE TERRAIN DANS TOUTES LES REGIONS DU BURKINA FASO</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

      
      
      <p><strong>1.&nbsp; A propos </strong></p>
<p><em>AdvoCare Innovate </em>(ADCI) est un laboratoire de recherche ind&eacute;pendant dont les experts ont cumul&eacute; plusieurs ann&eacute;es d&rsquo;exp&eacute;riences dans la conduite de projets de recherche en sciences sociales et dans l&rsquo;&eacute;valuation des projets et programmes. Son expertise le positionne comme l&rsquo;un des cabinets leader en mati&egrave;re de collecte de donn&eacute;es et d&rsquo;&eacute;valuation des projets ou programmes en Afrique. L&rsquo;objectif ultime d&rsquo;ADCI est d&rsquo;am&eacute;liorer le bien-&ecirc;tre des populations en orientant les d&eacute;cideurs dans leurs prises de d&eacute;cision sur la base de donn&eacute;es de bonne qualit&eacute; et d&rsquo;analyses bas&eacute;s sur les r&eacute;sultats scientifiques de nos recherches.</p>
<p>ADCI utilise des techniques innovatrices de recherche et d'&eacute;valuation pour appuyer les d&eacute;cideurs dans leur prise de d&eacute;cision et dispose d&rsquo;experts et consultants chevronn&eacute;s dans les secteurs tels que: l&rsquo;Eau, la Sant&eacute;, l&rsquo;Assainissement, la Nutrition, la Pauvret&eacute;, la Finance, l&rsquo;Agriculture, l&rsquo;Education, la Gouvernance, le March&eacute; du travail et l&rsquo;Emploi des jeunes, le Transport public, l&rsquo;Energie, la D&eacute;centralisation, l&rsquo;Autonomisation des femmes et la question du genre, la Justice, l&rsquo;Int&eacute;gration communautaire, etc....</p>
<p>ADCI est pr&eacute;sent dans plus de dix pays d&rsquo;Afrique inclus le Niger avec son si&egrave;ge social &agrave; Ouagadougou au Burkina Faso.</p>
<p>Veuillez visiter notre site web&nbsp;: http://www.AdvoCareInnovate.com&nbsp;ou <a href="mailto:info@AdvoCareInnovate.com">info@AdvoCareInnovate.com</a>&nbsp;pour plus d&rsquo;informations.</p>
<p>&nbsp;</p>
<p><strong>2. Contexte du recrutement</strong></p>
<p>Notre objectif est d&rsquo;&eacute;tablir une base de donn&eacute;es de potentiels consultants pour la mise en &oelig;uvre de nos activit&eacute;s. A cet effet, nous avons mis en ligne un formulaire afin de recueillir quelques informations vous concernant.</p>
<p><strong><em>Par cons&eacute;quent, ce recrutement n'est pas li&eacute;&nbsp;&agrave; des projets sp&eacute;cifiques mais nous permettra de constituer une base&nbsp;de donn&eacute;es d&rsquo;enqu&ecirc;teurs&nbsp;dans toutes les r&eacute;gions du Burkina Faso</em></strong><strong><em>. Seules les personnes dont leurs noms figurent dans notre base seront contact&eacute;es en cas de terrain.</em></strong></p>
<p>&nbsp;</p>
<p><strong>3.&nbsp; Comp&eacute;tences requises </strong></p>
<ul>
<li>Ma&icirc;triser l&rsquo;outil informatique (tablettes/Android)</li>
<li>Parler couramment au moins une langue locale serait un grand atout</li>
<li>Avoir un esprit d&rsquo;&eacute;quipe</li>
<li>Savoir travailler avec rigueur et pr&eacute;cision</li>
<li>Respecter la confidentialit&eacute; des donn&eacute;es</li>
<li>Etre int&egrave;gre</li>
<li>Etre m&eacute;thodique</li>
<li>Etre motiv&eacute;</li>
</ul>
<p><strong>4.&nbsp; Formations et dipl&ocirc;mes requis</strong><strong><em>: </em></strong></p>
<p>Avoir au minimum le niveau BAC+2.</p>
<p>&nbsp;</p>
<p><strong>5.&nbsp; Exp&eacute;rience en collecte de donn&eacute;es</strong></p>
<p>Non obligatoire mais tr&egrave;s utile</p>
<p>&nbsp;</p>
<p><strong>6.&nbsp; Comment postuler</strong><strong><em>:</em></strong></p>
<p>Pour postuler, veuillez suivre le lien suivant : <strong><u>https://ADCI.surveycto.com/collect/base_enquet_bf?caseid=</u></strong></p>
<p>Date de cl&ocirc;ture<strong>&nbsp;: 20/12/2021</strong></p>
<p><strong><em>NB&nbsp;: Toute candidature envoy&eacute;e par mail ne sera pas pris en compte.</em></strong></p>
<p><strong><em>N&rsquo;h&eacute;sitez pas de nous &eacute;crire sur </em></strong><a href="mailto:info@AdvoCareInnovate.com"><strong><em><u>info@AdvoCareInnovate.com</u></em></strong></a><strong><em>&nbsp;pour d&rsquo;amples informations en cas de difficult&eacute; de soumission en ligne.</em></strong></p>
<p><strong><em>&nbsp;L'ADCI est un employeur garantissant l'&eacute;galit&eacute; des chances et encourage vivement les candidatures f&eacute;minines.</em></strong></p>
      




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>   
</div> -->
 <!-- Modal -->
<!--hide this content>
<div id="myModal20" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Internship Position, Benin/Burkina Faso/RD Congo</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

      
      
      <ol>
<li><strong>ABOUT ADCI</strong></li>
</ol>
<p>The AdvoCare Innovate is an independent entity that conducts surveys, studies, research and training across the African continent. Our multidisciplinary team of seasoned African experts, with extensive country experience and top notch skills, is committed to producing quality data based on international standards for evidence-based policies and operational solutions. We provide insights on a myriad of sectors while taking into account cultural and geostrategic contexts as well as local markets&rsquo; maturity.</p>
<p>ADCI&rsquo;s goal is to become a privileged partner to stakeholders, namely development agencies, governments, NGOs and the private sector to design solutions to challenging development problems in Africa. For more information, please visit: <a href="http://www.AdvoCareInnovate.com/Home.php">http://www.AdvoCareInnovate.com/Home.php</a>.</p>
<p><strong>The Position</strong></p>
<p>The intern position is for earlier graduate and provides an excellent opportunity to gain first-hand experience in an organization undertaking cutting-edge development research.<strong>&nbsp;</strong>The intern will work closely with research associate or ADCI country office staff to support planning, logistics and data management for different projects. Also, the intern will help with survey instrument programming and testing, and assist in the development of data quality tools (High Frequency Check). The Intern may be involved in training enumerators on survey tools and supervising field team.</p>
<p><strong>Apply by: </strong>April 15, 2021</p>
<p><strong>Start date</strong>: ASAP</p>
<p><strong>Duration</strong>: 3 Months</p>
<p><strong>Location</strong>: Cotonou, <strong>Benin or </strong>Ouagadougou<strong>, Burkina Faso or </strong>Kinshasa / Goma<strong>, RD Congo</strong></p>
<p>&nbsp;</p>
<ol start="2">
<li><strong>RESPONSIBILITIES</strong></li>
</ol>
<p>The Intern will work closely with the Research Associate to:</p>
<ul>
<li>Assist in survey design and programming</li>
<li>Assist in data management and data cleaning</li>
<li>Assist in training of field team</li>
<li>Assist in monitoring and supervising field team</li>
<li>Perform other tasks assigned by the supervisor</li>
</ul>
<ol start="3">
<li><strong>QUALIFICATIONS AND SKILLS</strong></li>
</ol>
<ul>
<li>Bachelor's degree in economics, statistics, development studies, public policy, or related field</li>
<li>Resourceful and detail-oriented with excellent organizational skills</li>
<li>Demonstrated ability to work independently&nbsp;</li>
<li>Demonstrated ability to work successfully with diverse constituencies</li>
<li>Ability to understand and consistently work towards achieving the highest quality data analysis&nbsp;</li>
<li>Eager to learn, and gain experience in a fast-paced organization</li>
<li>Prior knowledge of quantitative data collection instruments and tools (ODK, Survey CTO, CSPro, Survey Solution) is a plus.</li>
<li>Prior knowledge of quantitative data analysis packages is a plus.</li>
</ul>
<ol start="4">
<li><strong>APPLICATION INSTRUCTIONS</strong></li>
</ol>
<p>Please submit fill up the form at:&nbsp;&nbsp;<u>http://www.AdvoCareInnovate.com/View/en/opportunity.php</u></p>
<p>At the end of the form, you will be requested to submit your CV/Resume and covering letter that tells us about your qualifications and experience, and that explains your motivation by <strong>April 15, 2021</strong>. Applicants must be currently residing in Benin or Burkina Faso or RD Congo</p>
<p>Given the volume of applications received, only shortlisted candidates will, eventually, be contacted for a writing test and then for an interview.</p>
<p><strong>&nbsp;</strong></p>
<p><strong>Disclaimers&nbsp;</strong><strong><br /></strong></p>
<p>ADCI is an Equal Opportunity Employer that does not discriminate upon age, race, religion, national origin, gender, disability, or any other characteristic protected by the law.</p>
      


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div> -->  
 <!-- Modal -->
<!--hide this content>
<div id="myModal19" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">AVIS DE CONSTITUTION DE BASE DES AGENTS ENQUETEURS ET
SUPERVISEURS DANS TOUTES LES REGIONS DU MALI</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

      
      <h3><strong>1- A propos</strong></h3>
<p>AdvoCare Innovate (ADCI) est un laboratoire de recherche ind&eacute;pendant dont les experts ont cumul&eacute; plusieurs ann&eacute;es d&rsquo;exp&eacute;riences dans la conduite de projets de recherche en sciences sociales et dans l&rsquo;&eacute;valuation des projets et programmes. Son expertise le positionne comme l&rsquo;un des cabinets leader en mati&egrave;re de collecte de donn&eacute;es et d&rsquo;&eacute;valuation des projets ou programmes en Afrique. L&rsquo;objectif ultime d&rsquo;ADCI est d&rsquo;am&eacute;liorer le bien-&ecirc;tre des populations en orientant les d&eacute;cideurs dans leurs prises de d&eacute;cision sur la base de donn&eacute;es de bonne qualit&eacute; et d&rsquo;analyses bas&eacute;s sur les r&eacute;sultats scientifiques de nos recherches.</p>
<p>ADCI utilise des techniques innovatrices de recherche et d'&eacute;valuation pour appuyer les d&eacute;cideurs dans leur prise de d&eacute;cision et dispose d&rsquo;experts et consultants chevronn&eacute;s dans les secteurs tels que: l&rsquo;Eau, la Sant&eacute;, l&rsquo;Assainissement, la Nutrition, la Pauvret&eacute;, la Finance, l&rsquo;Agriculture, l&rsquo;Education, la Gouvernance, le March&eacute; du travail et l&rsquo;Emploi des jeunes, le Transport public, l&rsquo;Energie, la D&eacute;centralisation, l&rsquo;Autonomisation des femmes et la question du genre, la Justice, l&rsquo;Int&eacute;gration communautaire, etc....</p>
<p>ADCI est pr&eacute;sent dans plus de dix pays d&rsquo;Afrique inclus le Niger avec son si&egrave;ge social &agrave; Ouagadougou au Burkina Faso. Veuillez visiter notre site web : <span style="text-decoration: underline;"><span style="color: #3366ff; text-decoration: underline;">http://www.AdvoCareInnovate.com</span></span> ou info@AdvoCareInnovate.com pour plus d&rsquo;informations.</p>
<h3><strong>2- Contexte du recrutement</strong></h3>
<p>Notre objectif est d&rsquo;&eacute;tablir une base de donn&eacute;es de potentiels consultants pour la mise en &oelig;uvre de nos activit&eacute;s. A cet effet, nous avons mis en ligne un formulaire afin de recueillir quelques informations vous concernant. Par cons&eacute;quent, ce recrutement n'est pas li&eacute; &agrave; des projets sp&eacute;cifiques mais nous permettra de constituer une base de donn&eacute;es d&rsquo;enqu&ecirc;teurs dans toutes les r&eacute;gions du Mali. Seules les personnes dont leurs noms figurent dans notre base seront contact&eacute;es en cas de projet.</p>
<h3><strong>3- Comp&eacute;tences requises</strong></h3>
<p>- Ma&icirc;triser l&rsquo;expression &eacute;crite et orale portugaise</p>
<p>- Ma&icirc;triser l&rsquo;outil informatique (tablettes/Android)</p>
<p>- Parler couramment au moins une langue locale serait un grand atout</p>
<p>- Avoir un esprit d&rsquo;&eacute;quipe</p>
<p>- Savoir travailler avec rigueur et pr&eacute;cision</p>
<p>- Respecter la confidentialit&eacute; des donn&eacute;es</p>
<p>- Etre int&egrave;gre</p>
<p>- Etre m&eacute;thodique</p>
<p>- Etre motiv&eacute;</p>
<h3><strong>4- Formations et dipl&ocirc;mes requis :</strong></h3>
<p>Avoir au minimum le niveau Baccalaur&eacute;at.</p>
<h3><strong>5- Exp&eacute;rience en collecte de donn&eacute;es</strong></h3>
<p>Non obligatoire mais tr&egrave;s utile</p>
<h3><strong>6- Comment postuler :</strong></h3>
<p>Pour postuler, veuillez suivre le lien suivant : <a href="https://www.AdvoCareInnovate.com/View/en/opportunity.php#current-offer ">https://www.AdvoCareInnovate.com/View/en/opportunity.php#current-offer </a></p>
<p>Date de cl&ocirc;ture : 30/11/2020</p>
<p>NB : Toute candidature envoy&eacute;e par mail ne sera pas pris en compte.</p>
<p>N&rsquo;h&eacute;sitez pas de nous &eacute;crire sur info@AdvoCareInnovate.com pour d&rsquo;amples informations en cas de difficult&eacute; de soumission en ligne.</p>
<p>L'ADCI est un employeur garantissant l'&eacute;galit&eacute; des chances et encourage vivement les candidatures f&eacute;minines.</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
</div> -->  
<!-- Modal -->
<!--hide this content>
<div id="myModal18" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">AVISO DE CONSTITUIÇÃO DE BÁSE DE AGENTES DE
INQUIRIDORES E SUPERVISORES EM TODAS AS REGIÕES DA

GUINÉ BISSAU</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

      
      <h3><strong>1- Sobre &agrave;</strong></h3>
<p><br />AdvoCare Innovate (ADCI) &eacute; um laborat&oacute;rio de pesquisa<br />independente, cujos especialistas acumularam v&aacute;rios anos de experi&ecirc;ncias na condu&ccedil;&atilde;o<br />de projetos de pesquisa nas ci&ecirc;ncias sociais e na avalia&ccedil;&atilde;o de projetos e programas.<br />Sua experi&ecirc;ncia a posiciona como um de gabinetes l&iacute;deres em mat&eacute;ria de coleta de<br />dados e avalia&ccedil;&atilde;o de projetos ou programas em &Aacute;frica. O objetivo final do ADCI &eacute;<br />melhorar o bem-estar das popula&ccedil;&otilde;es, orientando os decisores em suas tomadas de<br />decis&atilde;o com base em dados de boa qualidade e de an&aacute;lises baseadas nos resultados<br />cient&iacute;ficos de nossa pesquisa.<br />A ADCI usa t&eacute;cnicas inovadoras de pesquisa e avalia&ccedil;&atilde;o para apoiar os decisores em<br />suas tomadas de decis&atilde;o e tem especialistas e consultores experientes nos setores<br />como: &Aacute;gua, Sa&uacute;de, Saneamento, Nutri&ccedil;&atilde;o, Pobreza, Finan&ccedil;as, Agricultura, Educa&ccedil;&atilde;o,<br />Governan&ccedil;a, Mercado de Trabalho e Emprego Juvenil, Transporte P&uacute;blico, Energia,<br />Descentraliza&ccedil;&atilde;o, Empoderamento das Mulheres e G&ecirc;nero, Justi&ccedil;a, Integra&ccedil;&atilde;o<br />comunit&aacute;ria, etc.<br />A ADCI est&aacute; presente em mais de dez pa&iacute;ses africanos, com sede social em<br />Ouagadougou, no Burkina Faso.<br />Por favor, visite o nosso web site: <span style="text-decoration: underline;"><span style="color: #3366ff; text-decoration: underline;">http://www.AdvoCareInnovate.com</span></span> ou<br />info@AdvoCareInnovate.com Para maiores informa&ccedil;&otilde;es.</p>
<h3><br /><strong>2- Contexto de recrutamento</strong></h3>
<p><br />O nosso objetivo &eacute; estabelecer um banco de dados de potenciais consultores para a<br />implementa&ccedil;&atilde;o das nossas atividades. Para este efeito, colocamos em online um<br />formul&aacute;rio para coletar algumas informa&ccedil;&otilde;es sobre voc&ecirc;.<br />Portanto, este recrutamento n&atilde;o est&aacute; vinculado aos projetos espec&iacute;ficos, mas nos<br />permitir&aacute; construir uma base de dados de inquiridores em todas as regi&otilde;es da<br />Guin&eacute;-Bissau. Somente as pessoas cujos nomes constam em nosso banco de dados<br />ser&atilde;o contatadas em caso de projeto.</p>
<h3><strong>3- Compet&ecirc;ncias necess&aacute;rias</strong></h3>
<p><br />- Dominar a express&atilde;o escrita e oral de portugu&ecirc;s<br />- Dominar a ferramenta inform&aacute;tica (tablets/Android)<br />- Falar fluentemente pelo menos uma l&iacute;ngua local seria um grande trunfo<br />- Tenha esp&iacute;rito de equipe<br />- Saber trabalhar com rigor e precis&atilde;o<br />- Respeite a confidencialidade dos dados<br />- Ser integrado<br />- Seja met&oacute;dico<br />- Estar motivado</p>
<h3><br /><strong>4- Forma&ccedil;&atilde;o e diplomas necess&aacute;rios:</strong></h3>
<p><br />Ter pelo menos o n&iacute;vel de Bacharelato.</p>
<h3><br /><strong>5- Experi&ecirc;ncia em coleta de dados</strong></h3>
<p><br />N&atilde;o obrigat&oacute;rio, mas muito &uacute;til</p>
<h3><br /><strong>6- Como candidatar-se:</strong></h3>
<p><br />Para se candidatar, siga o link:<br /><span style="text-decoration: underline;"><span style="color: #3366ff; text-decoration: underline;">https://www.AdvoCareInnovate.com/View/en/opportunity.php#current-offer</span></span><br />Data de fecho: 30/11/2020<br />NB: Qualquer pedido enviado por email n&atilde;o ser&aacute; levado em considera&ccedil;&atilde;o.<br />N&atilde;o hesite em nos escrever no info@AdvoCareInnovate.com para obter mais informa&ccedil;&otilde;es<br />em caso de dificuldade de submiss&atilde;o online.<br />O ADCI &eacute; um empregador que garante a igualdade de oportunidades e incentiva<br />fortemente as candidaturas femininas.</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
</div> --> 
 <!-- Modal -->
<!--hide this content>
<div id="myModal17" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">AVIS DE RECRUTEMENT D’UN AGENT DE SANTE, SPECIALISTE EN SANTE PUBLIQUE BURKINA FASO</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

      
      <h3><strong>A PROPOS</strong></h3>
<p>L&rsquo;AdvoCare Innovate (ADCI) est un laboratoire de recherche ind&eacute;pendant dont<br />les experts cumulent plusieurs ann&eacute;es d&rsquo;exp&eacute;riences dans la conduite de projets de recherche en<br />science sociale et dans l&rsquo;&eacute;valuation des projets et programmes. Son expertise le positionne<br />comme l&rsquo;un des cabinets leader en mati&egrave;re de collecte de donn&eacute;es et d&rsquo;&eacute;valuation des projets ou<br />programmes en Afrique. L&rsquo;objectif ultime d&rsquo;ADCI est d&rsquo;am&eacute;liorer le bien-&ecirc;tre des populations<br />en orientant les d&eacute;cideurs dans leurs prises de d&eacute;cision sur la base de donn&eacute;es et d&rsquo;analyses bas&eacute;s<br />sur les r&eacute;sultats scientifiques de nos recherches.<br />A ADCI, nous utilisons des techniques innovatrices de recherche et d&amp;#39;&eacute;valuation pour aider les d&eacute;cideurs dans leur prise de d&eacute;cision. Nous avons des experts et des consultants chevronn&eacute;s<br />dans les secteurs tels que : l&rsquo;Eau, la Sant&eacute;, l&rsquo;Assainissement, la Sant&eacute; &amp;amp; Nutrition, la Pauvret&eacute;, la<br />Finance, l&rsquo;Agriculture, l&rsquo;Education, la Gouvernance, le March&eacute; du travail et l&rsquo;Emploi des jeunes,<br />le Transport public, l&rsquo;Energie, la D&eacute;centralisation, l&rsquo;Autonomisation des femmes et la question<br />du genre, la Justice, l&rsquo;Int&eacute;gration communautaire, etc.<br />Le si&egrave;ge d&rsquo;ADCI est bas&eacute; &agrave; Ouagadougou au Burkina Faso. Le centre de recherche a &eacute;galement<br />des repr&eacute;sentations dans plusieurs pays d&rsquo;Afrique. Pour plus d&rsquo;informations sur ADCI, visitez&nbsp;:<br />http://www.AdvoCareInnovate.com/Home.php.<br />Nombre de postes&nbsp;: 1 poste &agrave; pourvoir sous la supervision du Repr&eacute;sentant pays.<br />Ville d&rsquo;affectation&nbsp;: Ouagadougou<br />Date limite pour postuler&nbsp;: 06 Novembre 2020<br />Date de d&eacute;but&nbsp;: 01 D&eacute;cembre 2020<br />Type de contrat&nbsp;: CDD<br />Dur&eacute;e&nbsp;: 1 an renouvelable (3 mois d&rsquo;essai)</p>
<p>&nbsp;</p>
<h3><strong>2. MISSIONS</strong></h3>
<p>- Organiser et coordonner les missions de collecte de donn&eacute;es p&eacute;riodiques dans plusieurs<br />districts au Burkina Faso&nbsp;;<br />- Participer &agrave; la r&eacute;alisation d&rsquo;une enqu&ecirc;te de base (baseline) au niveau institutionnel et des<br />enqu&ecirc;tes p&eacute;riodiques de suivi des progr&egrave;s&nbsp;;<br />- Mener les diagnostics communautaires de base et p&eacute;riodiques pour identifier les goulots<br />d&amp;#39;&eacute;tranglement&nbsp;;<br />- Faire le suivi des indicateurs pour appr&eacute;cier les es progr&egrave;s y compris les appr&eacute;ciations des<br />utilisateurs (m&egrave;res de nouveau-n&eacute;s et nourrissons de moins de 2 mois)&nbsp;;<br />- Pr&eacute;senter les r&eacute;sultats des recherches aux parties prenantes (partenaires techniques et<br />financier, b&eacute;n&eacute;ficiaires du projet, etc.)&nbsp;;<br />- Contribuer &agrave; la r&eacute;alisation des revues documentaires sur des th&eacute;matiques en lien avec la<br />sant&eacute; maternelle et infantile, la nutrition, etc.<br />- Participer aux pr&eacute;sentations des r&eacute;sultats au bailleur financier&nbsp;;<br />- Participer au traitement et &agrave; l&amp;#39;analyse des donn&eacute;es (primaires &amp;amp; secondaires)&nbsp;;&nbsp;<br />- Participer &agrave; la r&eacute;daction des rapports d&rsquo;&eacute;valuations, des enqu&ecirc;tes de base et des enqu&ecirc;tes<br />p&eacute;riodiques sur base des donn&eacute;es collect&eacute;es&nbsp;;<br />- Contribuer &agrave; la r&eacute;alisation de toutes autres t&acirc;ches relevant de ses domaines de<br />comp&eacute;tence.</p>
<h3><strong>3. QUALIFICATION ET COMPETENCES</strong></h3>
<p>- Avoir un dipl&ocirc;me en sant&eacute; et une licence/un master en sant&eacute; publique&nbsp;;<br />- Avoir au moins 5 ans d&rsquo;exp&eacute;rience en mati&egrave;re de conduite de recherches en lien avec la<br />sant&eacute; maternelle et&nbsp;infantile, la nutrition, la sant&eacute; communautaire, etc.&nbsp;;<br />- Avoir des comp&eacute;tences av&eacute;r&eacute;es en sociologie, en sant&eacute; communautaire ou autre domaine<br />d&amp;#39;expertise pertinent serait un atout ;<br />- &Ecirc;tre capable de r&eacute;aliser des analyses &agrave; partir de donn&eacute;es issues de plusieurs sources<br />(primaires, secondaires, etc.)&nbsp;;<br />- Avoir les capacit&eacute;s de suivre et d&rsquo;&rsquo;&eacute;valuer un projet de recherche&nbsp;;<br />- Avoir des comp&eacute;tences dans l&rsquo;organisation et la conduite d&rsquo;&eacute;tudes p&eacute;riodiques ou de<br />routine&nbsp;;<br />- Avoir des capacit&eacute;s av&eacute;r&eacute;es de diriger une &eacute;quipe orient&eacute;e vers des r&eacute;sultats ;<br />- Avoir une bonne connaissance du syst&egrave;me de sant&eacute; et de la politique sanitaire du Burkina<br />Faso&nbsp;;<br />- &Ecirc;tre capable de pr&eacute;senter les r&eacute;sultats de recherche aux communaut&eacute;s et aux partenaires<br />techniques et financiers&nbsp;;<br />- Avoir une aptitude av&eacute;r&eacute;e &agrave; produire des rapports d&amp;#39;&eacute;valuation et des analyses de haute<br />qualit&eacute;&nbsp;;<br />- &Ecirc;tre capables de travailler de fa&ccedil;on autonome et dans des d&eacute;lais requis&nbsp;;<br />- &Ecirc;tre proactifs et orient&eacute;s vers les r&eacute;sultats&nbsp;;<br />- &Ecirc;tre capable d&amp;#39;entretenir de bonnes relations de travail dans un environnement<br />multiculturel&nbsp;;<br />- Maitriser les outils d&rsquo;analyse et de traitement quantitatif et qualitatif (SPSS, Stata, Nvivo,<br />CsPro, etc.) ;<br />- Avoir une excellente capacit&eacute; en communication orale et &eacute;crite&nbsp;;<br />- Avoir un bon niveau en fran&ccedil;ais (parl&eacute; et &eacute;crit)&nbsp;;<br />La r&eacute;mun&eacute;ration est comp&eacute;titive et sera d&eacute;termin&eacute;e en fonction de l&rsquo;exp&eacute;rience du candidat.</p>
<p>&nbsp;</p>
<h3><strong>4. RECRUTEMENT</strong></h3>
<p>Le recrutement se fera en trois &eacute;tapes&nbsp;: (1) Pr&eacute;s&eacute;lection sur dossier, (2) Tests &eacute;crits et (3)<br />Entretiens. <span style="color: #ff0000;">Seuls les candidats qualifi&eacute;s pour l&rsquo;&eacute;tape suivante seront contact&eacute;s.</span><br />Les candidats int&eacute;ress&eacute;s sont pri&eacute;s de suivre ce lien<br />https://www.AdvoCareInnovate.com/View/en/opportunity.php pour postuler. Toutes les<br />candidatures qui ne seront pas soumises via le lien ne seront pas consid&eacute;r&eacute;es.<br />Avis de non-responsabilit&eacute;<br />ADCI est un employeur offrant l&amp;#39;&eacute;galit&eacute; des chances qui ne discrimine selon l&amp;#39;&acirc;ge, la race, la<br />religion, l&amp;#39;origine nationale, le sexe, le handicap ou toute autre caract&eacute;ristique prot&eacute;g&eacute;e par la<br />loi&hellip;</p>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
</div> --> 
 <!-- Modal -->
<!--hide this content>
<div id="myModal16" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">AVIS DE RECRUTEMENT D’UN GESTIONNAIRE DE PROJET BURKINA FASO</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

      

      <h3><strong>1. A PROPOS</strong></h3>
<p><br />L&rsquo;AdvoCare Innovate(ADCI) est un laboratoire de recherche ind&eacute;pendant dont les<br />experts cumulent plusieurs ann&eacute;es d&rsquo;exp&eacute;riences dans la conduite de projets de recherche en<br />science sociale et dans l&rsquo;&eacute;valuation des projets et programmes. Son expertise le positionne comme<br />l&rsquo;un des cabinets leader en mati&egrave;re de collecte de donn&eacute;es et d&rsquo;&eacute;valuation des projets ou<br />programmes en Afrique. L&rsquo;objectif ultime d&rsquo;ADCI est d&rsquo;am&eacute;liorer le bien-&ecirc;tre des populations<br />en orientant les d&eacute;cideurs dans leurs prises de d&eacute;cision sur la base de donn&eacute;es et d&rsquo;analyses bas&eacute;s<br />sur les r&eacute;sultats scientifiques de nos recherches.<br />A ADCI, nous utilisons des techniques innovatrices de recherche et d&amp;#39;&eacute;valuation pour aider les<br />d&eacute;cideurs dans leur prise de d&eacute;cision. Nous avons des experts et des consultants chevronn&eacute;s dans<br />les secteurs tels que: l&rsquo;Eau, la Sant&eacute;, l&rsquo;Assainissement, les Conflits, la Nutrition, la Pauvret&eacute;, la<br />Finance, l&rsquo;Agriculture, l&rsquo;Education, la Gouvernance, le March&eacute; du travail et l&rsquo;Emploi des jeunes,<br />le Transport public, l&rsquo;Energie, la D&eacute;centralisation, l&rsquo;Autonomisation des femmes et la question du<br />genre, la Justice, l&rsquo;Int&eacute;gration communautaire, etc.<br />Le si&egrave;ge d&rsquo;ADCI est bas&eacute; &agrave; Ouagadougou au Burkina Faso. Le centre de recherche a &eacute;galement<br />des repr&eacute;sentations dans plusieurs pays d&rsquo;Afrique. Pour plus d&rsquo;informations sur ADCI, visitez&nbsp;:<br />http://www.AdvoCareInnovate.com/Home.php.</p>
<p>Nombre de postes&nbsp;: 1 poste &agrave; pourvoir sous la supervision du repr&eacute;sentant pays.<br />Ville d&rsquo;affectation&nbsp;: Ouagadougou<br />Date limite pour postuler&nbsp;: 06 Novembre 2020<br />Date de d&eacute;but&nbsp;: 01 D&eacute;cembre 2020<br />Type de contrat&nbsp;: CDD<br />Dur&eacute;e&nbsp;: 12 mois renouvelable (3 mois d&rsquo;essai)</p>
<p>&nbsp;</p>
<h3><strong>2. MISSION</strong></h3>
<p><br />Le Gestionnaire de projet effectuera les t&acirc;ches suivantes&nbsp;:<br />- Coordonner l&amp;#39;&eacute;quipe pour mener &agrave; bien le projet dans les d&eacute;lais&nbsp;;<br />- Maintenir la communication sur une base continue tout au long du processus de la<br />recherche&nbsp;;<br />- Veuillez &agrave; ce que les livrables soient produits selon les d&eacute;lais convenus avec les bailleurs<br />de fonds&nbsp;;<br />- Coordonner avec la direction de ADCI pour d&eacute;velopper une m&eacute;thodologie de collecte<br />de donn&eacute;es et un calendrier pour r&eacute;pondre aux demandes de recherche&nbsp;;<br />- Contribuer au d&eacute;veloppement, &agrave; la gestion et &agrave; la mise en &oelig;uvre des plans de recherche&nbsp;;<br />- Coordonner le briefing des r&eacute;sultats de recherche et g&eacute;rer le processus de commentaire et<br />de r&eacute;vision pour l&rsquo;ensemble des donn&eacute;es finaux et les rapports&nbsp;;<br />- Participer &agrave; la conception des outils de collecte de donn&eacute;es (guides d&rsquo;entretien individuel,<br />de groupe de discussion et les grilles d&rsquo;observation, questionnaires, etc.) dans le cadre des<br />plans de recherche d&eacute;finis&nbsp;;<br />- Participer &agrave; conduite des revues documentaires, des recherches sur les sources primaires<br />et des entretiens avec des informateurs cl&eacute;s&nbsp;;<br />- Participer &agrave; la collecte, aux traitements, et &agrave; l&rsquo;analyses des donn&eacute;es ;<br />- Contribuer &agrave; la r&eacute;daction des rapports bas&eacute;s sur des donn&eacute;es qualitatives et quantitatives ;<br />- Restituer les r&eacute;sultats de recherche aux bailleurs, aux autorit&eacute;s politico-administratives,<br />aux OSC, etc.<br />- R&eacute;diger les termes de r&eacute;f&eacute;rence et des propositions d&rsquo;offres techniques&nbsp;;<br />- Assurez toutes autres t&acirc;ches &agrave; lui confiez par ses sup&eacute;rieurs hi&eacute;rarchiques.</p>
<p>&nbsp;</p>
<h3><strong>3. QUALIFICATIONS ET COMPETENCES&nbsp;</strong></h3>
<p>&nbsp;</p>
<p>- Avoir au moins 5 ans d&rsquo;exp&eacute;rience dans la gestion de projets de recherche&nbsp;;<br />- Avoir une ma&icirc;trise ou un master en sociologie, en &eacute;conomie ou dans d&rsquo;autres disciplines<br />des sciences sociales&nbsp;;<br />- Bonne exp&eacute;rience dans la structuration et la conduite d&rsquo;une recherche&nbsp;;<br />- Capacit&eacute; &agrave; produire des rapports de recherche, des analyses, des notes d&rsquo;information et<br />des documents d&rsquo;information ;<br />- Bonne connaissance des th&eacute;matiques li&eacute;es aux conflits, aux groupes arm&eacute;s, &agrave; l&rsquo;ins&eacute;curit&eacute;, &agrave;<br />l&rsquo;extr&eacute;misme violent, etc.<br />- Bonne capacit&eacute; &agrave; pr&eacute;senter, &agrave; restituer les r&eacute;sultats d&rsquo;une recherche aux bailleurs de fonds,<br />aux OSC, aux autorit&eacute;s politico-administratives, etc.<br />- Bonne capacit&eacute; &agrave; conduire des enqu&ecirc;tes qualitatives avec des personnes ressources (forces<br />de d&eacute;fense et de s&eacute;curit&eacute;, minist&egrave;res, leaders religieux et coutumiers, OSC, ONG, etc.)&nbsp;;<br />- Bonne exp&eacute;rience dans la gestion de projets complexes, particuli&egrave;rement dans les<br />contextes a fort d&eacute;fis s&eacute;curitaires&nbsp;;<br />- Bonnes aptitudes interpersonnelles et capacit&eacute; &agrave; communiquer clairement et efficacement<br />- Avoir de l&rsquo;exp&eacute;rience dans la r&eacute;daction des manifestions d&amp;#39;int&eacute;r&ecirc;ts et des propositions<br />techniques et financi&egrave;res&nbsp;;<br />- Capacit&eacute; &agrave; favoriser et &agrave; guider un partenariat dynamique ;<br />- Maitriser au moins un logiciel d&amp;#39;analyse de donn&eacute;es qualitatives.<br />La r&eacute;mun&eacute;ration est comp&eacute;titive et sera d&eacute;termin&eacute;e en fonction de l&rsquo;exp&eacute;rience du candidat.</p>
<h3>&nbsp;</h3>
<h3><strong>4. RECRUTEMENT</strong></h3>
<p><br />Le recrutement se fera en trois &eacute;tapes&nbsp;: (1) Pr&eacute;s&eacute;lection sur dossier, (2) Tests &eacute;crits et (3)<br />Entretiens. <span style="color: #ff0000;">Seuls les candidats qualifi&eacute;s pour l&rsquo;&eacute;tape suivante seront contact&eacute;s.</span><br />Les candidats int&eacute;ress&eacute;s sont pri&eacute;s de suivre ce lien<br />https://www.AdvoCareInnovate.com/View/en/opportunity.php pour postuler. Toutes les<br />candidatures qui ne seront pas soumises via le lien ne seront pas consid&eacute;r&eacute;es.<br />Avis de non-responsabilit&eacute;<br />ADCI est un employeur offrant l&amp;#39;&eacute;galit&eacute; des chances qui ne discrimine selon l&amp;#39;&acirc;ge, la race, la<br />religion, l&amp;#39;origine nationale, le sexe, le handicap ou toute autre caract&eacute;ristique prot&eacute;g&eacute;e par la loi&hellip;</p>   


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>   
</div> -->
 <!-- Modal -->
 <!--hide this content>
<div id="myModal15" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">AVIS DE CONSTITUTION  DE BASE DES AGENTS ENQUETEURS ET SUPERVISEURS DANS TOUTES LES REGIONS DU NIGER</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

      

      <p><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: large;"><strong>1. A propos </strong></span></span></span></p>
<p align="justify"><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><em>AdvoCare Innovate </em></span></span></span><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">(ADCI) est un laboratoire de recherche ind&eacute;pendant dont les experts ont cumul&eacute; plusieurs ann&eacute;es d&rsquo;exp&eacute;riences dans la conduite de projets de recherche en sciences sociales et dans l&rsquo;&eacute;valuation des projets et programmes. Son expertise le positionne comme l&rsquo;un des cabinets leader en mati&egrave;re de collecte de donn&eacute;es et d&rsquo;&eacute;valuation des projets ou programmes en Afrique. L&rsquo;objectif ultime d&rsquo;ADCI est d&rsquo;am&eacute;liorer le bien-&ecirc;tre des populations en orientant les d&eacute;cideurs dans leurs prises de d&eacute;cision sur la base de donn&eacute;es de bonne qualit&eacute; et d&rsquo;analyses bas&eacute;s sur les r&eacute;sultats scientifiques de nos recherches. </span></span></span></p>
<p align="justify"><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">ADCI utilise des techniques innovatrices de recherche et d'&eacute;valuation pour appuyer les d&eacute;cideurs dans leur prise de d&eacute;cision et dispose d&rsquo;experts et consultants chevronn&eacute;s dans les secteurs tels que: l&rsquo;Eau, la Sant&eacute;, l&rsquo;Assainissement, la Nutrition, la Pauvret&eacute;, la Finance, l&rsquo;Agriculture, l&rsquo;Education, la Gouvernance, le March&eacute; du travail et l&rsquo;Emploi des jeunes, le Transport public, l&rsquo;Energie, la D&eacute;centralisation, l&rsquo;Autonomisation des femmes et la question du genre, la Justice, l&rsquo;Int&eacute;gration communautaire, etc.... </span></span></span></p>
<p><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">ADCI est pr&eacute;sent dans plus de dix pays d&rsquo;Afrique inclus le Niger avec son si&egrave;ge social &agrave; Ouagadougou au Burkina Faso.</span></span></span></p>
<p><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Veuillez visiter notre site web&nbsp;: </span></span></span><span style="color: #0000ff;"><span style="font-size: medium;">http://www.AdvoCareInnovate.com</span></span> <span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">ou </span></span></span><a href="mailto:info@AdvoCareInnovate.com"><span style="color: #0000ff;">info@AdvoCareInnovate.com</span></a><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"> pour plus d&rsquo;informations.</span></span></span></p>
<p align="justify"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: large;"><strong>2. Contexte du recrutement</strong></span></span></p>
<p align="justify"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Notre objectif est d&rsquo;&eacute;tablir une base de donn&eacute;es de potentiels consultants pour la mise en &oelig;uvre de nos activit&eacute;s. A cet effet, nous avons mis en ligne un formulaire afin de recueillir quelques informations vous concernant. </span></span></p>
<p align="justify"><span style="color: #202124;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><em><strong>Par cons&eacute;quent, ce recrutement n'est pas li&eacute;&nbsp;&agrave; des projets sp&eacute;cifiques mais nous permettra de constituer une base&nbsp;de donn&eacute;es d&rsquo;enqu&ecirc;teurs&nbsp;dans toutes les r&eacute;gions du Niger</strong></em></span></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;"><em><strong>. Seules les personnes dont leurs noms figurent dans notre base seront contact&eacute;es en cas de projet.</strong></em></span></span></p>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: large;"><strong>3. Comp&eacute;tences requises </strong></span></span></span></span></span></p>
<ul>
<li>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;">Ma&icirc;triser l&rsquo;expression &eacute;crite et orale fran&ccedil;aise </span></span></span></span></p>
</li>
<li>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;">Ma&icirc;triser l&rsquo;outil informatique (tablettes/Android) </span></span></span></span></p>
</li>
<li>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;">Parler couramment au moins une langue locale serait un grand atout</span></span></span></span></p>
</li>
<li>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;">Avoir un esprit d&rsquo;&eacute;quipe </span></span></span></span></p>
</li>
<li>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;">Savoir travailler avec rigueur et pr&eacute;cision</span></span></span></span></p>
</li>
<li>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;">Respecter la confidentialit&eacute; des donn&eacute;es</span></span></span></span></p>
</li>
<li>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;">Etre int&egrave;gre </span></span></span></span></p>
</li>
<li>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;">Etre m&eacute;thodique </span></span></span></span></p>
</li>
<li>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;">Etre motiv&eacute;</span></span></span></span></p>
</li>
</ul>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: large;"><strong>4. Formations et dipl&ocirc;mes requis</strong></span></span><span style="font-family: 'Times New Roman', serif;"><span style="font-size: large;"><em><strong> : </strong></em></span></span></span></span></span></p>
<p align="justify"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: medium;">Avoir au minimum le niveau Baccalaur&eacute;at.</span></span></p>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: large;"><strong>5. Exp&eacute;rience en collecte de donn&eacute;es</strong></span></span></span></span></span></p>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;">Non obligatoire mais tr&egrave;s utile</span></span></span></span></p>
<p align="left"><span style="font-family: 'Bookman Old Style', serif;"><span style="font-size: medium;"><strong><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: large;">6. Comment postuler</span></span></span><span style="color: #000000;"><span style="font-family: 'Times New Roman', serif;"><span style="font-size: large;"><em> :</em></span></span></span></strong></span></span></p>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;">Pour postuler, veuillez suivre le lien suivant : </span><span style="color: #0563c1;"><u><span style="font-family: 'Times New Roman', serif;"><strong>https://www.AdvoCareInnovate.com/View/en/opportunity.php#current-offer</strong></span></u></span></span></span></span></p>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;">Date de cl&ocirc;ture</span><span style="font-family: 'Times New Roman', serif;"><strong>&nbsp;: 10/11/2020</strong></span></span></span></span></p>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;"><em><strong>NB&nbsp;: Toute candidature envoy&eacute;e par mail ne sera pas pris en compte.</strong></em></span></span></span></span></p>
<p><span style="color: #000000;"><span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;"><em><strong>N&rsquo;h&eacute;sitez pas de nous &eacute;crire sur <a href="mailto:info@hub4research.com">info@AdvoCareInnovate.com</a> pour d&rsquo;amples informations en cas de difficult&eacute; de soumission en ligne.</strong></em></span></span></span></span></p>
<p><span style="color: #000000;"> <span style="font-family: Verdana, serif;"><span style="font-size: medium;"><span style="font-family: 'Times New Roman', serif;"><em><strong>L'ADCI est un employeur garantissant l'&eacute;galit&eacute; des chances et encourage vivement les candidatures f&eacute;minines.</strong></em></span></span></span></span></p>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
</div> -->  
<!-- Modal -->
<!--hide this content>
<div id="myModal14" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">(2) Research Assistants recruitment, Burkina Faso</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">

      <h3>1. ABOUT ADCI</h3>
<p>The AdvoCare Innovate is an independent entity that conducts surveys, studies, research and training across the African continent. Our multidisciplinary team of seasoned African experts, with extensive country experience and top notch skills, is committed to producing quality data based on international standards for evidence-based policies and operational solutions. We provide insights on a myriad of sectors while taking into account cultural and geostrategic contexts as well as local markets&rsquo; maturity.</p>
<p>ADCI&rsquo;s goal is to become a privileged partner to stakeholders, namely development agencies, governments, NGOs and the private sector to design solutions to challenging development problems in Africa. For more information, please visit: <a href="http://www.AdvoCareInnovate.com/Home.php">http://www.AdvoCareInnovate.com/Home.php</a> or Email: <a href="mailto:info@AdvoCareInnovate.com">info@AdvoCareInnovate.com</a></p>
<h3>The Position</h3>
<p>The Research Associate will gain first-hand experience in an organization undertaking cutting-edge development research. The ideal candidate would be a self-starter whose responsibilities would include: managing critical high-level relationships with project stakeholders, designing survey questionnaires; running pilot exercises; refining study design and surveying instruments; hiring, training, and managing survey teams; checking and analyzing data.</p>
<p><strong>Apply by: </strong>October 17, 2020</p>
<p><strong>Start date</strong>: ASAP</p>
<p><strong>Number of positions:</strong> 2 Research Assistants</p>
<p><strong>Duration</strong>: 1 year (renewable)</p>
<p><strong>Location</strong>: <strong>Ouagadougou, Burkina Faso </strong>(with a flexibility to travel to the following countries: Niger, Benin, Liberia, Burkina Faso, Rwanda, Democratic Republic of the Congo, Mali, Sierra Leone and Uganda)</p>
<h3>2. RESPONSIBILITIES</h3>
<ul>
<li>Collaborate with the Research Manager/direct supervisor or projects&rsquo; partners to refine study protocols</li>
<li>Implement study protocols in the most rigorous and efficient manner</li>
<li>Collaborate with the Research Manager/direct supervisor or projects&rsquo; partners on survey design</li>
<li>Program and pilot existing and future surveys using Survey CTO (a platform built on Open Data Kit) and/or CS Pro</li>
<li>Conduct data quality control checks, data cleaning and analysis</li>
<li>Track expenditures and prepare financial reports</li>
<li>Draft grant summaries and reports</li>
<li>Hire, train and manage survey teams</li>
<li>Manage critical high-level relationships with project stakeholders</li>
<li>Assist writing proposals and expression of interest</li>
</ul>
<h3>3. QUALIFICATIONS AND SKILLS</h3>
<ul>
<li>Bachelor's degree &nbsp;in &nbsp;economics, &nbsp;social sciences, public &nbsp;policy, or &nbsp;a &nbsp;related &nbsp;field &nbsp;(required)</li>
<li>Minimum of two years of experience in a similar position at a research center, a consulting firm or in academics</li>
<li>Working knowledge of Stata (strongly preferred) or other data analysis software</li>
<li>Working knowledge of survey programming on ODK, Survey CTO, CSPro, Survey Solution or a similar software (preferred)</li>
<li>Familiarity with impact evaluation including randomized controlled trials</li>
<li>Strong organizational skills and ability to manage multiple tasks efficiently</li>
<li>Excellent attention to detail</li>
<li>Flexible, self-motivating, and able to solve unexpected problems</li>
<li>Strong quantitative and data analysis skills</li>
<li>Excellent written and verbal communication skills in both French and English</li>
<li>Strong experience in writing proposals and expression of interests</li>
<li>Experience living in a developing country and proficiency in a local African language</li>
</ul>
<h3>4. APPLICATION INSTRUCTIONS</h3>
<p>Please submit fill up the surveyCTO form at:  <a href="http://www.AdvoCareInnovate.com/Home.php">https://www.AdvoCareInnovate.com/View/en/opportunity.php</a></p>
<p>At the end of the form, you will be requested to submit your Resume and covering letter (combined in one file) that tells us about your expertise and experience, and that explains your motivation by <strong>October 17, 2020</strong>. Applicants must be nationals, or have the right to reside, or must be currently residing in <strong>Burkina Faso</strong>. ADCI will not sponsor work &nbsp;&nbsp;&nbsp;authorizations.</p>
<p>Given the volume of applications received, only shortlisted candidates will, eventually, be contacted for a writing test and then for an interview.</p>
<h3>Disclaimers</h3>
<p>ADCI is an Equal Opportunity Employer that does not discriminate upon age, race, religion, national origin, gender, disability, or any other characteristic protected by the law.</p>
<p>&nbsp;</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
</div> -->  
<!-- Modal -->
<!--hide this content>
<div id="myModal13" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">AVIS DE RECRUTEMENT D’UN SPECIALISTE DANS LA CONDUITE DES ETUDES MIXTES QUALITATIVES ET QUANTITATIVES BURKINA FASO & BENIN</h4>
      </div>
      <div class="modal-body">


<ol>
<li><strong>A PROPOS</strong></li>
</ol>
<p>L&rsquo;<em>AdvoCare Innovate </em>(ADCI) est un laboratoire de recherche ind&eacute;pendant dont les experts cumulent plusieurs ann&eacute;es d&rsquo;exp&eacute;riences dans la conduite de projets de recherche&nbsp; en science sociale et dans l&rsquo;&eacute;valuation des projets et programmes. Son expertise le positionne comme l&rsquo;un des cabinets leader en mati&egrave;re de collecte de donn&eacute;es et d&rsquo;&eacute;valuation des projets ou programmes en Afrique. L&rsquo;objectif ultime d&rsquo;ADCI est d&rsquo;am&eacute;liorer le bien-&ecirc;tre des populations en orientant les d&eacute;cideurs dans leurs prises de d&eacute;cision sur la base de donn&eacute;es et d&rsquo;analyses bas&eacute;s sur les r&eacute;sultats scientifiques de nos recherches.</p>
<p>A ADCI, nous utilisons des techniques innovatrices de recherche et d'&eacute;valuation pour aider les d&eacute;cideurs dans leur prise de d&eacute;cision. Nous avons des experts et des consultants chevronn&eacute;s dans les secteurs tels que: l&rsquo;Eau, la Sant&eacute;, l&rsquo;Assainissement, la Nutrition, la Pauvret&eacute;, la Finance, l&rsquo;Agriculture, l&rsquo;Education, la Gouvernance, le March&eacute; du travail et l&rsquo;Emploi des jeunes, le Transport public, l&rsquo;Energie, la D&eacute;centralisation, l&rsquo;Autonomisation des femmes et la question du genre, la Justice,&nbsp; l&rsquo;Int&eacute;gration communautaire, etc.</p>
<p>Le si&egrave;ge d&rsquo;ADCI est bas&eacute; &agrave; Ouagadougou au Burkina Faso. Le centre de recherche a &eacute;galement des repr&eacute;sentations dans plusieurs pays d&rsquo;Afrique. Pour plus d&rsquo;informations sur ADCI, visitez&nbsp;: <a href="http://www.AdvoCareInnovate.com/Home.php">http://www.AdvoCareInnovate.com/Home.php</a><u>.</u></p>
<p><strong>&nbsp;</strong></p>
<p><strong>Nombre de postes</strong>&nbsp;: 1 poste &agrave; pourvoir sous la supervision du repr&eacute;sentant pays.</p>
<p><strong>Ville d&rsquo;affectation</strong>&nbsp;: <strong>Ouagadougou ou Cotonou</strong>, avec de fr&eacute;quentes missions dans les autres bureaux d' ADCI : Niger, Nigeria, Mali, RDC, Burundi, Rwanda et Ouganda.</p>
<p><strong>Date limite pour postuler&nbsp;: </strong>10 Ao&ucirc;t 2019</p>
<p><strong>Date de d&eacute;but</strong>&nbsp;: 20 Ao&ucirc;t 2019</p>
<p><strong>Dur&eacute;e&nbsp;: </strong>1 an renouvelable</p>
<p>&nbsp;</p>
<ol start="2">
<li><strong>MISSION</strong></li>
</ol>
<p><strong>&nbsp;</strong></p>
<p><strong>Le sp&eacute;cialiste dans la conduite d&rsquo;&eacute;tudes mixtes </strong>&nbsp;effectuera les t&acirc;ches suivantes&nbsp;:</p>
<ul>
<li style="font-weight: 400;">Elaborer des offres techniques et financi&egrave;res pour des projets de collecte de donn&eacute;es dans diff&eacute;rents pays</li>
<li style="font-weight: 400;">Participer &agrave; la mise en place d&rsquo;&eacute;tudes qualitatives et/ou quantitatives &amp; au suivi des enqu&ecirc;tes sur le terrain en liaison avec les coordinateurs de terrain</li>
<li style="font-weight: 400;">Assister dans la r&eacute;daction des questionnaires &amp; guides d&rsquo;entretien&nbsp;</li>
<li style="font-weight: 400;">Participer au traitement et &agrave; l'analyse des donn&eacute;es&nbsp;</li>
<li style="font-weight: 400;">Participer &agrave; la r&eacute;daction des rapports d&rsquo;&eacute;tudes en fran&ccedil;ais &amp; en anglais</li>
<li style="font-weight: 400;">Participer aux pr&eacute;sentations et r&eacute;pondre aux requ&ecirc;tes des commanditaires</li>
<li style="font-weight: 400;">Assurer le suivi administratif des proc&eacute;dures li&eacute;es aux &eacute;tudes&nbsp;</li>
</ul>
<p>&nbsp;</p>
<ol start="3">
<li><strong>QUALIFICATIONS ET COMPETENCES&nbsp;</strong></li>
</ol>
<p><strong><em>&nbsp;</em></strong></p>
<ul>
<li>Avoir une ma&icirc;trise en sociologie, &eacute;conomie ou un master en &eacute;valuation de projet, ou tout dipl&ocirc;me &eacute;quivalent</li>
<li>Avoir au moins 5 ans d&rsquo;exp&eacute;riences dans la conduite des &eacute;tudes qualitatives (Focus groupes et entretiens individuels avec les informateurs cl&eacute;s) et dans l&rsquo;analyse des donn&eacute;es qualitatives</li>
<li>Avoir particip&eacute; &agrave; des &eacute;tudes quantitatives et ma&icirc;triser un logiciel d&rsquo;analyse de donn&eacute;es</li>
<li>Avoir de l&rsquo;exp&eacute;rience dans la r&eacute;daction des manifestions d'int&eacute;r&ecirc;ts et des propositions techniques et financi&egrave;res</li>
<li>Maitriser les crit&egrave;res d'&eacute;valuations de l'OCDE et d&rsquo;autres partenaires techniques et financiers</li>
<li>Avoir la capacit&eacute; de superviser plusieurs &eacute;tudes en m&ecirc;me temps et de travailler sous pression</li>
<li>Maitriser au moins un logiciel d'analyse des donn&eacute;es qualitatives</li>
<li>Etre capable de travailler dans un environnement anglophone (option)</li>
</ul>
<p>&nbsp;</p>
<p>La r&eacute;mun&eacute;ration est comp&eacute;titive et sera d&eacute;termin&eacute;e en fonction de l&rsquo;exp&eacute;rience du candidat.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<ol start="4">
<li><strong>RECRUTEMENT</strong></li>
</ol>
<p>Le recrutement se fera en trois &eacute;tapes&nbsp;: (1) Pr&eacute;s&eacute;lection sur dossier, (2) Tests &eacute;crits et (3) Entretiens. <strong>Seuls les candidats qualifi&eacute;s pour l&rsquo;&eacute;tape suivante seront contact&eacute;s.</strong></p>
<p>&nbsp;</p>
<p>Les candidats int&eacute;ress&eacute;s sont pri&eacute;s de suivre ce lien <strong><a href="https://docs.google.com/forms/d/1DHocBYPemYlKlRdg6eAIXkURKTV_YvgA3jm1gMbcR1I/viewform?edit_requested=true"  target="_blank">bit.ly/2OaWnd0</a></strong> pour postuler. Toutes les candidatures qui ne seront pas soumises via le lien ne seront pas consid&eacute;r&eacute;es.</p>
<p>&nbsp;</p>
<p>NB&nbsp;: Les candidatures f&eacute;minines sont fortement encourag&eacute;es.</p>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>   
</div> -->
 <!-- Modal -->
<!-- hide this content>
<div id="myModal12" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->

    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Laboratoire de premier niveau pour la sérologie VIH (Num: 9732)</h4>
      </div>
      <div class="modal-body">
Notre objectif en vous soumettant ce formulaire est de recueillir un minimum d'informations vous concernant, pour la mise en place d’une base de données de potentiels enquêteurs pour le compte d’ADCI RDC. Toutefois, ni le remplissage du formulaire, ni une invitation à participer à un entretien à la suite du remplissage de ce formulaire ne garantit l’admission du candidat. Nous vous invitons à joindre vos CV à la fin du formulaire tout en prenant le soin de renommer le fichier de la manière suivante « CV_Nom_Post Nom_Prénom » ( exemple: CV_Aganze_Mihigo_Mirielle) avant de le joindre au formulaire. Nous encourageons fortement la candidature de tous ceux qui ont une forte envie d'apprendre et qui ont de bonnes aptitudes en communication aussi bien en français qu'en langue, même si ces candidats n'ont aucune expérience ou ont une ou deux expériences en collecte de données. <br><br>
Les inscriptions sont ouvertes du 06 au 30 juin 2019 à 23 h 55 (GMT). <br><br><br>
NB. A l’issue de cette étape, seuls les admis, pour la phase suivante, seront convoqués pour un entretien (oral et pratique).
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>   
</div> -->
 <!-- Modal -->
 <!--hide this content>
<div id="myModal10" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->

    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Techniciens de laboratoire/ préleveurs (Num: 9731)</h4>
      </div>
      <div class="modal-body">
        <div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<p style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: center; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Termes de r&eacute;f&eacute;rence pour le recrutement des Techniciens de Laboratoire/ pr&eacute;leveurs SSG/2019</strong></p>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: justify; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Dans la perspective de l&rsquo;&eacute;valuation finale de la mise en &oelig;uvre du Plan Strat&eacute;gique National 2013-2017, il est indispensable de disposer de donn&eacute;es s&eacute;rologiques et comportementales vis-&agrave;-vis du VIH au sein des groupes prioritaires. A cet effet, la Coordination Intersectorielle de lutte contre les IST/VIH/SIDA (CISLS) souhaite organiser la quatri&egrave;me enqu&ecirc;te de surveillance de seconde g&eacute;n&eacute;ration du VIH aupr&egrave;s des professionnelles de sexe, les hommes ayant des rapports sexuels avec des hommes, les personnes priv&eacute;es de libert&eacute;, les travailleurs migrants, les enseignants, les miniers et orpailleurs, les jeunes de 15-24 ans, les routiers/camionneurs, les forces de d&eacute;fense et de s&eacute;curit&eacute;, les d&eacute;plac&eacute;s et r&eacute;fugi&eacute;s au Niger.&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: justify; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Cette &eacute;tude permettra d&rsquo;appr&eacute;cier les progr&egrave;s r&eacute;alis&eacute;s et la part contributive des interventions programm&eacute;es aux fins de planification et d&rsquo;appr&eacute;ciation de l&rsquo;impact des interventions men&eacute;es. L&rsquo;objectif g&eacute;n&eacute;ral de la pr&eacute;sente enqu&ecirc;te est de fournir des informations comportementales et s&eacute;rologiques sur les groupes de populations les plus &agrave; risque aux IST/VIH, en vue de d&eacute;velopper en leur faveur des programmes cibl&eacute;s et adapt&eacute;s de pr&eacute;vention et de prise en charge du VIH et des IST. L&rsquo;&eacute;tude sera r&eacute;alis&eacute;e par le consortium AdvoCare Innovate et Africa Synergy Group Plus, sous la coordination de l&rsquo;instance de Coordination Intersectorielle de lutte contre les IST/VIH/SIDA au Niger.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: justify; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">En pr&eacute;lude au d&eacute;marrage effectif de la collecte des donn&eacute;es, le consortium <strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">AdvoCare Innovate et Africa Synergy Group Plus</strong> souhaite recruter des <strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Techniciens de Laboratoire/ pr&eacute;leveurs</strong>.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: justify; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: justify; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">1. Responsabilit&eacute;s de l&rsquo;&eacute;quipe des techniciens de laboratoire&nbsp; &nbsp;</strong> &nbsp; &nbsp; &nbsp; &nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Sous la responsabilit&eacute; de l&rsquo;expert biologiste, l'&eacute;quipe assurera :</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Le remplissage des fiches d&rsquo;enqu&ecirc;te avant le pr&eacute;l&egrave;vement de sang ;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Les pr&eacute;l&egrave;vements de sang capillaire sur s&eacute;robuvard ;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Le stockage, le transport des pr&eacute;l&egrave;vements jusqu&rsquo;&agrave; l&rsquo;endroit pr&eacute;vu pour la centralisation avant l&rsquo;acheminement &agrave; Niamey.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">2. Qualification et exp&eacute;rience</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Dipl&ocirc;me de Technicien Sup&eacute;rieur de Laboratoire ;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Solide exp&eacute;rience dans les enqu&ecirc;tes de terrain ;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Etre de nationalit&eacute; Nig&eacute;rienne</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Avoir particip&eacute; &agrave; au moins une SSG, serait un atout ;&nbsp;&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- R&eacute;sider dans la r&eacute;gion d&rsquo;enqu&ecirc;te ou la connaitre</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Pr&eacute;ciser la r&eacute;gion de provenance ou connue.&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<p style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">3. Dur&eacute;e&nbsp;</strong></p>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">La dur&eacute;e de la mission est de 15 jours.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Les CV sont envoy&eacute;s par courrier &eacute;lectronique (E mail) au plus tard le vendredi 8 mars 2019 &agrave; 18h</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Envoyer &agrave; Tel : +255 62 10 07 059 , Email: <strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">sepimack@yahoo.fr</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Puis mettre en copie les deux adresses suivantes</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">T&eacute;l +255 76 74 23 804, Email : burkinaf@AdvoCareInnovate.com</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">T&eacute;l : +255 76 74 23 804   / +255 62 10 07 059, Email: sepimack@gmail.com&nbsp;</div>
</div>
</div>
</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">&nbsp;</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">consultez aussi la publication <a href="https://nigeremploi.com/annonce.php?action=details&amp;id=9731" target="_blank" rel="noopener">ici</a></strong></div>
</div>
<p>&nbsp;</p>
</div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>    
</div> -->
<!-- Modal -->
<!--hide this content>
<div id="myModal11" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Laboratoire de premier niveau pour la sérologie VIH (Num: 9732)</h4>
      </div>
      <div class="modal-body">
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<p style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: center; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Termes de r&eacute;f&eacute;rence pour le recrutement d&rsquo;un laboratoire de premier niveau pour la s&eacute;rologie VIH SSG/2019</strong></p>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: justify; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Dans la perspective de l&rsquo;&eacute;valuation finale de la mise en &oelig;uvre du Plan Strat&eacute;gique National 2013-2017, il est indispensable de disposer de donn&eacute;es s&eacute;rologiques et comportementales vis-&agrave;-vis du VIH au sein des groupes prioritaires. A cet effet, la Coordination Intersectorielle de lutte contre les IST/VIH/SIDA (CISLS) souhaite organiser la quatri&egrave;me enqu&ecirc;te de surveillance de seconde g&eacute;n&eacute;ration du VIH aupr&egrave;s des professionnelles de sexe, les hommes ayant des rapports sexuels avec des hommes, les personnes priv&eacute;es de libert&eacute;, les travailleurs migrants, les enseignants, les miniers et orpailleurs, les jeunes de 15-24 ans, les routiers/camionneurs, les forces de d&eacute;fense et de s&eacute;curit&eacute;, les d&eacute;plac&eacute;s et r&eacute;fugi&eacute;s au Niger.&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: justify; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Cette &eacute;tude permettra d&rsquo;appr&eacute;cier les progr&egrave;s r&eacute;alis&eacute;s et la part contributive des interventions programm&eacute;es aux fins de planification et d&rsquo;appr&eacute;ciation de l&rsquo;impact des interventions men&eacute;es. L&rsquo;objectif g&eacute;n&eacute;ral de la pr&eacute;sente enqu&ecirc;te est de fournir des informations comportementales et s&eacute;rologiques sur les groupes de populations les plus &agrave; risque aux IST/VIH, en vue de d&eacute;velopper en leur faveur des programmes cibl&eacute;s et adapt&eacute;s de pr&eacute;vention et de prise en charge du VIH et des IST. L&rsquo;&eacute;tude sera r&eacute;alis&eacute;e par le consortium AdvoCare Innovate et Africa Synergy Group Plus, sous la coordination de l&rsquo;instance de Coordination Intersectorielle de lutte contre les IST/VIH/SIDA au Niger.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">En pr&eacute;lude au d&eacute;marrage effectif de la collecte des donn&eacute;es, le consortium AdvoCare Innovate et Africa Synergy Group Plus souhaite recruter un laboratoire de premier niveau pour la s&eacute;rologie VIH.</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">1. Crit&egrave;res de choix du laboratoire de premier niveau pour la s&eacute;rologie VIH</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Disposer des zones de travail suffisantes pour assurer s&eacute;par&eacute;ment :&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&bull; La r&eacute;ception et le contr&ocirc;le des &eacute;chantillons ;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&bull; L&rsquo;&eacute;tiquetage des &eacute;chantillons ;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&bull; La pr&eacute;paration des &eacute;luats de PBS ;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&bull; L&rsquo;ex&eacute;cution des tests DETERMINE et FIRST RESPONSE.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Avoir une exp&eacute;rience av&eacute;r&eacute;e dans la s&eacute;rologie VIH par ELISA et/ou TDR.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Disposer de ressources humaines suffisantes et de qualit&eacute;.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Disposer d&rsquo;un Syst&egrave;me d&rsquo;assurance qualit&eacute; pour la s&eacute;rologie VIH.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Disposer de moyens de conservation des &eacute;chantillons DBS pour une dur&eacute;e de 6 mois.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Disposer d&rsquo;une autonomie en &eacute;lectricit&eacute; pour pallier les &eacute;ventuelles coupures d&rsquo;&eacute;lectricit&eacute;.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- Accessibilit&eacute; facile &agrave; tout moment pour les agents engag&eacute;s dans l&rsquo;enqu&ecirc;te.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">- une certification ISO en mati&egrave;re de s&eacute;rologie VIH par ELISA et/ou TDR serait un atout.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">2. Taille de l&rsquo;&eacute;chantillon et Dur&eacute;e</strong>&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: justify; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Un &eacute;chantillon de 6200 &eacute;chantillons DBS sera achemin&eacute; au laboratoire recrut&eacute;.&nbsp; La dur&eacute;e maximale de manipulation des &eacute;chantillons est de 21 jours.&nbsp;&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Le laboratoire int&eacute;ress&eacute; doit faire une proposition technique et une offre financi&egrave;re</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Le principe du moins disant sera appliqu&eacute; apr&egrave;s visite et &eacute;valuation satisfaisante des laboratoires remplissant les crit&egrave;res d&rsquo;&eacute;ligibilit&eacute;.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<p style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: justify; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Les offres sont envoy&eacute;es par <strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">courrier &eacute;lectronique (E mail) au plus tard le lundi 11 mars 2019 &agrave; 18h</strong></p>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Envoyer &agrave; Tel : +255 62 10 07 059, Email: <strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">sepimack@yahoo.fr</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Puis mettre en copie les deux adresses suivantes</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">T&eacute;l +255 76 74 23 804, Email : burkinaf@AdvoCareInnovate.com</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">T&eacute;l : +255 76 74 23 804   / +255 62 10 07 059, Email: sepimack@gmail.com</div>
</div>
</div>
</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">&nbsp;</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">consultez aussi la publication <a href="https://nigeremploi.com/annonce.php?action=details&amp;id=9732">ici</a></strong></div>
</div>
<p>&nbsp;</p>
</div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>    
</div> -->
<!-- Modal -->
<!--hide this content>
<div id="myModal9" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Enquêteurs et superviseurs locaux de l’enquête SSG/2019 (Num: 9733)</h4>
      </div>
      <div class="modal-body">
        <div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Termes de r&eacute;f&eacute;rence pour le recrutement des enqu&ecirc;teurs et superviseurs locaux de l&rsquo;enqu&ecirc;te SSG/2019</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Dans la perspective de l&rsquo;&eacute;valuation finale de la mise en &oelig;uvre du Plan Strat&eacute;gique National 2013-2017, il est indispensable de disposer de donn&eacute;es s&eacute;rologiques et comportementales vis-&agrave;-vis du VIH au sein des groupes prioritaires. A cet effet, la Coordination Intersectorielle de lutte contre les IST/VIH/SIDA (CISLS) souhaite organiser la quatri&egrave;me enqu&ecirc;te de surveillance de seconde g&eacute;n&eacute;ration du VIH aupr&egrave;s des professionnelles de sexe, les hommes ayant des rapports sexuels avec des hommes, les personnes priv&eacute;es de libert&eacute;, les travailleurs migrants, les enseignants, les miniers et orpailleurs, les jeunes de 15-24 ans, les routiers/camionneurs, les forces de d&eacute;fense et de s&eacute;curit&eacute;, les d&eacute;plac&eacute;s et r&eacute;fugi&eacute;s au Niger.&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Cette &eacute;tude permettra d&rsquo;appr&eacute;cier les progr&egrave;s r&eacute;alis&eacute;s et la part contributive des interventions programm&eacute;es aux fins de planification et d&rsquo;appr&eacute;ciation de l&rsquo;impact des interventions men&eacute;es. L&rsquo;objectif g&eacute;n&eacute;ral de la pr&eacute;sente enqu&ecirc;te est de fournir des informations comportementales et s&eacute;rologiques sur les groupes de populations les plus &agrave; risque aux IST/VIH, en vue de d&eacute;velopper en leur faveur des programmes cibl&eacute;s et adapt&eacute;s de pr&eacute;vention et de prise en charge du VIH et des IST. L&rsquo;&eacute;tude sera r&eacute;alis&eacute;e par le consortium Innovative Hub for Research in Africa et Africa Synergy Group Plus, sous la coordination de l&rsquo;instance de Coordination Intersectorielle de lutte contre les IST/VIH/SIDA au Niger.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">En pr&eacute;lude au d&eacute;marrage effectif de la collecte des donn&eacute;es, le consortium AdvoCare Innovate et Africa Synergy Group Plus souhaite recruter les enqu&ecirc;teurs et superviseurs locaux.</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">1. Responsabilit&eacute;s&nbsp;</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Le personnel recrut&eacute; sera capable de :&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<ul style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Administrer un questionnaire comportemental standardis&eacute; sur les IST, le VIH et le sida aupr&egrave;s des 10 groupes cibles &agrave; l&rsquo;aide des tablettes ;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Conduire des entretiens individuels approfondis et des discussions de groupe aupr&egrave;s des informateurs cl&eacute;s et des membres des 10 groupes cibles sans stigmatisation ou discrimination (superviseurs locaux exclusivement);</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Planifier la mise en &oelig;uvre des activit&eacute;s dans chaque localit&eacute; en occurrence l&rsquo;organisation pratique du d&eacute;roulement de l&rsquo;enqu&ecirc;te sur le terrain (superviseurs locaux) : rencontres des autorit&eacute;s administratives, coutumi&egrave;res et religieuses, visites de courtoisie, organisation de l&rsquo;&eacute;quipe, identification des mobilisateurs par groupe cible;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Assurer le respect de la m&eacute;thodologie de l&rsquo;&eacute;tude : d&eacute;finition des cibles, tailles des &eacute;chantillons, &eacute;chantillonnage, s&eacute;lection des enqu&ecirc;t&eacute;s, respect des principes &eacute;thiques etc. (superviseurs locaux) ;&nbsp;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">V&eacute;rifier, synchroniser et envoyer quotidiennement les donn&eacute;es des enqu&ecirc;teurs de son &eacute;quipe au Gestionnaire de donn&eacute;es par voie &eacute;lectronique (superviseurs locaux) ;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Compl&eacute;ter quotidiennement le support de monitoring de la collecte des donn&eacute;es (superviseurs locaux) ;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Faire un point quotidien aux superviseurs r&eacute;gionaux et experts du consortium (superviseurs locaux) ;&nbsp;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Assurer sur le terrain, le stockage et la s&eacute;curisation des tablettes et autres outils de collecte remplis par son &eacute;quipe (superviseurs locaux) ;&nbsp;&nbsp;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Faire un d&eacute;briefing quotidien et &eacute;laborer un rapport de d&eacute;roulement de l&rsquo;enqu&ecirc;te (superviseurs locaux).</li>
</ul>
<p>&nbsp;</p>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">2. Qualification et exp&eacute;rience</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">
<ul style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">&Ecirc;tre titulaire, au minimum, du baccalaur&eacute;at toute s&eacute;rie confondue ou Etre agent de sant&eacute; (M&eacute;decin, biologiste, Technicien Sup&eacute;rieur en Sant&eacute; publique, infirmiers, sages-femmes, Technicien de laboratoire etc.&hellip;)</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Maitriser l&rsquo;outil informatique, notamment les tablettes ;&nbsp;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">&Ecirc;tre capable de parler de mani&egrave;re ouverte du VIH, des IST, des relations sexuelles, des drogues, etc.</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">&Ecirc;tre capable de travailler en &eacute;quipe ;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">&Ecirc;tre disponible pendant toute la dur&eacute;e de l&rsquo;enqu&ecirc;te ;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Parler couramment, en plus du fran&ccedil;ais, une langue nationale ;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Parler l&rsquo;anglais serait un atout (enqu&ecirc;te en milieu PS surtout);&nbsp;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">&Ecirc;tre capable de travailler sous pression et &agrave; des heures adapt&eacute;es au groupe cible ;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Avoir particip&eacute; &agrave; au moins une SSG, serait un atout ;&nbsp; &nbsp;</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">R&eacute;sider dans la r&eacute;gion d&rsquo;enqu&ecirc;te ou la connaitre</li>
<li style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Pr&eacute;ciser la r&eacute;gion de provenance ou connue.&nbsp;</li>
</ul>
<p>&nbsp;</p>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">3. Crit&egrave;res de s&eacute;lection et Dur&eacute;e de la mission</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Trois crit&egrave;res seront retenus pour le recrutement : le curriculum vitae et l&rsquo;entretien pour ceux dont les dossiers ont &eacute;t&eacute; s&eacute;lectionn&eacute;s et travailleront pendant 15 jours.</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">&nbsp;</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">Les CV sont envoy&eacute;s par courrier &eacute;lectronique (E mail) au plus tard le vendredi 8 mars 2019 &agrave; 18h</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Envoyer &agrave; Tel : +255 76 74 23 804, Email: <strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">sepimack@yahoo.fr</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">Puis mettre en copie les deux adresses suivantes</div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">T&eacute;l +255 76 74 23 804, Email :<strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;"> burkinaf@AdvoCareInnovate.com</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;">T&eacute;l : +255 76 74 23 804   / +255 62 10 07 059, Email: <strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">sepimack@gmail.com</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">&nbsp;</strong></div>
<div style="background-color: transparent; color: #000000; font-family: Verdana,Helvetica; font-size: 11px; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; line-height: 16px; orphans: 2; text-align: left; text-decoration: none; text-indent: 0px; text-transform: none; -webkit-text-stroke-width: 0px; white-space: normal; word-spacing: 0px;"><strong style="font-family: Verdana,Helvetica; font-size: 11px; line-height: 16px;">consultez aussi la publication <a href="https://nigeremploi.com/annonce.php?action=details&amp;id=9733" target="_blank" rel="noopener">ici</a></strong></div>
</div>
<p>&nbsp;</p>
</div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
</div> -->
   <!-- Modal -->
   <!--hide this content>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Research Manager, West and Central Africa</h4>
      </div>
      <div class="modal-body">
        <p><strong>1. ABOUT ADCI</strong> <br /> <br />The AdvoCare Innovate is an independent entity that conducts surveys, studies, research and training across the African continent. Our multidisciplinary team of seasoned African experts, with extensive country experience and top notch skills, is committed to producing quality data based on international standards for evidence-based policies and operational solutions. We provide insights on a myriad of sectors while taking into account cultural and geostrategic contexts as well as local markets&rsquo; maturity. <br /> <br />ADCI&rsquo;s goal is to become a privileged partner to stakeholders, namely development agencies, governments, NGOs and the private sector to design solutions to challenging development problems in Africa. For more information, please visit: The position <br />The Research Manager will manage a portfolio of projects that include both evaluation and implementation components. They could span a range of technical areas in any of ADCI&rsquo;s sectors of intervention. As part of his supervisory role, the Research Manager will work closely with the country manager and provide support to other country offices to ensure effective project implementation, compliance with relevant policies and procedures and timely submission of deliverable to clients. The position requires a range of expertise and proven experience in project management, statistics monitoring &amp; evaluation and impact evaluation. <br />Apply by: 12 Fevrier, 2019 <br />Start date: ASAP <br />Duration: 1 year (renewable) <br />Location: Either Ouagadougou or Kinshasa (with a flexibility to travel to the following countries: Niger, Benin, Liberia, Burundi, Rwanda, and Uganda)</p>
<p><strong>2. RESPONSIBILITIES</strong></p>
<ul>
<ul>
<li>Ensure project adherence to general research design, sample selection, data management and analysis, and provide overall project management</li>
<li>Directly supervise project research staff (research Associates, interns, supervisors, surveyors) and help with transitions, on-boarding of new research staff and maintaining &ldquo;institutional memory&rdquo; of project activities</li>
<li>Oversee project financial management, including creation and monitoring of program budgets, and ensuring smooth integration of projects into ADCI financial systems</li>
<li>Lead staff training on data management and general project management for new/incoming research staff</li>
<li>Promote inter-project best practices and take a lead in sharing best practices and maintaining institutional knowledge throughout the organization</li>
<li>Coordinate between researchers and implementing partners to efficiently manage new and ongoing research partnerships</li>
<li>Be the point of contact for data management and analysis support for project staff by serving as the link between projects and ADCI headquarters</li>
<li>Ensure that project deliverables, such as reports and financial statements, are submitted to donors and partners on time</li>
<li>Promote adoption of research results through written materials and policy-oriented events</li>
<li>Draft reports, publications or memo at the country manager&rsquo;s request.</li>
<li>Develop in collaboration with the country representatives new projects.</li>
</ul>
</ul>
<p><strong>3. QUALIFICATIONS AND SKILLS</strong></p>
<ul>
<ul>
<li>PhD or Master&rsquo;s degree with at least 5 years of experience in related field, such as development economics, public policy, public health, or education policy</li>
<li>Research and project management experience preferably in Africa</li>
<li>Managerial experience in non-governmental organizations with donor-funded programs</li>
<li>Experience supervising data collection, teams of field workers, survey design and implementation and data management. Background in randomized control trials is strongly preferred</li>
<li>Superior knowledge of programming (Stata) and digital data collection platforms (preference for Open Data Kit, Survey CTO) is required</li>
<li>Demonstrated understanding of research and economic concepts</li>
<li>Working Knowledge of any one of the following software, R, ODK, SPSS and CS Pro, or all is strongly preferred.</li>
<li>Excellent written and communication skills in both French and English.</li>
</ul>
</ul>
<p><strong>4. APPLICATION INSTRUCTIONS</strong></p>
<p>Please submit your CV and covering letter that tells us about your expertise and experience and that explains your motivation to work for ADCI to sepimack@AdvoCareInnovate.com and by February 12th, 2019. Applicants must be nationals, or have the right to reside, or must be currently residing in the country in which they are applying. ADCI will not sponsor work authorizations.</p>
<p>Emails subject lines should be: Research Manager, West and Central Africa. CVs and cover letters should be sent under RM_LASTNAME_FIRSTNAME_COUNTRY (Country = Country in which you would like to be based).</p>
<p>Given the volume of applications received, only shortlisted candidates will be contacted for an interview.</p>
<p>&nbsp;</p>
<p><strong>Disclaimers</strong></p>
<p>ADCI is an Equal Opportunity Employer that does not discriminate upon age, race, religion, national origin, gender, disability, or any other characteristic protected by the law.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>   
</div> --> 
  <!-- Modal -->
  <!--hide this content>
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Research Associate, West and Central Africa </h4>
      </div>
      <div class="modal-body">
        <p><strong>1. ABOUT ADCI</strong> <br /> <br />The AdvoCare Innovate is an independent entity that conducts surveys, studies, research and training across the African continent. Our multidisciplinary team of seasoned African experts, with extensive country experience and top notch skills, is committed to producing quality data based on international standards for evidence-based policies and operational solutions. We provide insights on a myriad of sectors while taking into account cultural and geostrategic contexts as well as local markets&rsquo; maturity. <br /> <br />ADCI&rsquo;s goal is to become a privileged partner to stakeholders, namely development agencies, governments, NGOs and the private sector to design solutions to challenging development problems in Africa. For more information, please visit: http://www.AdvoCareInnovate.com/Home.php. <br /> <br />The Position <br />The Research Associate will gain first-hand experience in an organization undertaking cutting-edge development research. The ideal candidate would be a self-starter whose responsibilities would include: managing critical high-level relationships with project stakeholders, designing survey questionnaires; running pilot exercises; refining study design and surveying instruments; hiring, training, and managing survey teams; checking and analyzing data. <br />Apply by: 10 January, 2019 <br />Start date: ASAP <br />Duration: 1 year (renewable) <br />Location: Either Ouagadougou or Kinshasa (with a flexibility to travel to the following countries: Niger, Benin, Liberia, Burundi, Rwanda, and Uganda) </p>
<p><br /><strong>2. RESPONSIBILITIES</strong> <br /> <br />- Collaborate with the Research Manager/direct supervisor or projects&rsquo; partners to refine study protocols</p>
<p>- Implement study protocols in the most rigorous and efficient manner</p>
<p>- Collaborate with the Research Manager/direct supervisor or projects&rsquo; partners on survey design </p>
<p>- Program and pilot existing and future surveys using Survey CTO (a platform built on Open Data Kit) and/or CS Pro</p>
<p>- Conduct data quality control checks, data cleaning and analysis</p>
<p>- Track expenditures and prepare financial reports</p>
<p>- Draft grant summaries and reports</p>
<p>- Hire, train and manage survey teams</p>
<p>- Manage critical high-level relationships with project stakeholders <br /> <br /><strong>3. QUALIFICATIONS AND SKILLS</strong> <br /> <br />- Bachelor's degree in economics, social sciences, public policy, or a related field (required)</p>
<p>- Minimum two years experience in similar position at a research center, a consulting firm or in academics</p>
<p>- Working knowledge of Stata (strongly preferred) or other data analysis software</p>
<p>- Working knowledge of survey programming on ODK, Survey CTO, CS Pro or a similar software (preferred)</p>
<p>- Familiarity with impact evaluation including randomized controlled trials</p>
<p>- Strong organizational skills and ability to manage multiple tasks efficiently</p>
<p>- Excellent attention to detail</p>
<p>- Flexible, self-motivating, and able to solve unexpected problems</p>
<p>- Strong quantitative and data analysis skills</p>
<p>- Excellent written and verbal communication skills in both French and English</p>
<p>- Experience living in a developing country and proficiency in a local African language <br /> <br /><strong>4. APPLICATION INSTRUCTIONS</strong> <br /> <br />Please submit your CV and covering letter that tells us about your expertise and experience and that explains your motivation to work for ADCI to sepimack@AdvoCareInnovate.com by February 12th, 2019. Applicants must be nationals, or have the right to reside, or must be currently residing in the country in which they are applying. <br />Emails subject lines should be: Research Associate, West and Central Africa. CVs and cover letters should be sent under RA_LASTNAME_FIRSTNAME_COUNTRY (Country = Country in which you would like to be based). <br />Given the volume of applications received, only shortlisted candidates will be contacted for an interview. <br /> <br /><strong>Disclaimers</strong> <br /> <br />ADCI is an Equal Opportunity Employer that does not discriminate upon age, race, religion, national origin, gender, disability, or any other characteristic protected by the law.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
        </div> -->
  <!-- Modal -->
  <!--hide this content>
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
        </div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">AVIS DE RECRUTEMENT DE COORDONATEURS DE TERRAIN BURKINA FASO & REPUBLIQUE DEMOCRATIQUE DU CONGO</h4>
      </div>
      <div class="modal-body">
        <p><strong>1. A PROPOS</strong></p>
<p>L&rsquo;AdvoCare Innovate(ADCI) est un laboratoire de recherche ind&eacute;pendant dont les experts cumulent plusieurs ann&eacute;es d&rsquo;exp&eacute;riences dans la conduite de projets de recherche en science sociale et dans l&rsquo;&eacute;valuation des projets et programmes. Son expertise le positionne comme l&rsquo;un des cabinets leader en mati&egrave;re de collecte de donn&eacute;es et d&rsquo;&eacute;valuation des projets ou programmes en Afrique. L&rsquo;objectif ultime d&rsquo;ADCI est d&rsquo;am&eacute;liorer le bien-&ecirc;tre des populations en orientant les d&eacute;cideurs dans leurs prises de d&eacute;cision sur la base de donn&eacute;es et d&rsquo;analyses bas&eacute;s sur les r&eacute;sultats scientifiques de nos recherches. <br />A ADCI, nous utilisons des techniques innovatrices de recherche et d'&eacute;valuation pour aider les d&eacute;cideurs dans leur prise de d&eacute;cision. Nous avons des experts et des consultants chevronn&eacute;s dans les secteurs tels que: l&rsquo;Eau, la Sant&eacute;, l&rsquo;Assainissement, la Nutrition, la Pauvret&eacute; la Finance, l&rsquo;Agriculture, l&rsquo;Education, la Gouvernance, le March&eacute; du travail et l&rsquo;Emploi des jeunes, le Transport public, l&rsquo;Energie, la D&eacute;centralisation, l&rsquo;Autonomisation des femmes et la question du genre, la Justice, l&rsquo;Int&eacute;gration communautaire, etc. <br />Le si&egrave;ge d&rsquo;ADCI est bas&eacute; &agrave; Ouagadougou au Burkina Faso. Le centre de recherche a &eacute;galement des repr&eacute;sentations dans plusieurs pays d&rsquo;Afrique. Pour plus d&rsquo;informations sur ADCI, visitez : http://www.AdvoCareInnovate.com/Home.php. <br />Nombre postes : 4 (dont 2 en R&eacute;publique D&eacute;mocratique du Congo et 2 au Burkina Faso) <br />Ville d&rsquo;affectation : Kinshasa et Ouagadougou <br />Date de d&eacute;but : 4 F&eacute;vrier pour la RDC et le 25 F&eacute;vrier pour le Burkina Faso <br />Dur&eacute;e : huit (08) mois (renouvelable au besoin) <br /> <br /><strong>2. MISSION</strong> <br /> <br />Les coordonnateurs de terrain s&eacute;lectionn&eacute;s effectueront les t&acirc;ches suivantes : </p>
<p>- Appuyer les Assistants de Recherche dans les activit&eacute;s pr&eacute;paratoires de se en &oelig;uvre des activit&eacute;s d&rsquo;enqu&ecirc;tes ; </p>
<p>- Appuyer les Charg&eacute;s de Recherche dans l&rsquo;organisation et la supervision des enqu&ecirc;tes sur le terrain ;</p>
<p>- Assister &agrave; l&rsquo;&eacute;laboration des budgets op&eacute;rationnels pour les activit&eacute;s de terrain ;</p>
<p>- Participer activement au recrutement et &agrave; la formation des enqu&ecirc;teurs ;</p>
<p>- Suivre le travail des enqu&ecirc;teurs sur le terrain ;</p>
<p>- Appuyer tout travail de suivi en collaboration avec les partenaires du projet ;</p>
<p>- Planifier la logistique n&eacute;cessaire, c&rsquo;est-&agrave;-dire la disponibilit&eacute;, l&rsquo;entretien, la distribution et la r&eacute;cup&eacute;ration du mat&eacute;riel utilis&eacute; au cours des enqu&ecirc;tes ;</p>
<p>- Rendre compte quotidiennement &agrave; l&rsquo;Assistant de Recherche de l&rsquo;&eacute;volution des activit&eacute;s ;</p>
<p>- Maintenir une communication r&eacute;guli&egrave;re avec tous les superviseurs et les enqu&ecirc;teurs afin de relever tout probl&egrave;me et de trouver des solutions en commun ;</p>
<p>- Elaborer un rapport de terrain &agrave; soumettre au Charg&eacute; de recherche ; <br /> <br /><strong>3. QUALIFICATIONS ET COMPETENCES</strong> <br /> <br />- Avoir un niveau universitaire minimum (bac + 2) pr&eacute;f&eacute;rablement dans les sciences sociales ;</p>
<p>- Avoir un tr&egrave;s bon niveau de fran&ccedil;ais &eacute;crit et oral ;</p>
<p>- Avoir une bonne connaissance des outils informatiques (Microsoft Office)</p>
<p>- Parler au moins une langue locale du Burkina Faso ou de la RDC ;</p>
<p>- Avoir une exp&eacute;rience dans les enqu&ecirc;tes notamment la supervision et/ou la coordination d&rsquo;enqu&ecirc;te (au moins trois exp&eacute;riences av&eacute;r&eacute;es de supervision d&rsquo;enqu&ecirc;te)</p>
<p>- Etre apte &agrave; travailler en &eacute;quipe, avec rigueur et sous pression;</p>
<p>- Savoir motiver les &eacute;quipes ;</p>
<p>- Avoir un sens de l&rsquo;organisation et de la gestion des priorit&eacute;s ;</p>
<p>- Etre m&eacute;thodique et respecter les &eacute;ch&eacute;ances ;</p>
<p>- Etre capable de pouvoir travailler en milieu p&eacute;ri-urbain, urbain et rural pendant de longues p&eacute;riodes de temps et &agrave; des heures irr&eacute;guli&egrave;res si n&eacute;cessaire ;</p>
<p>- Etre orient&eacute; vers la performance ;</p>
<p>- Respecter la confidentialit&eacute; <br /> <br />La r&eacute;mun&eacute;ration est comp&eacute;titive et sera d&eacute;termin&eacute;e en fonction de l&rsquo;exp&eacute;rience du candidat. <br /> <br /><strong>4. RECRUTEMENT </strong></p>
<p>Le recrutement se fera en trois &eacute;tapes : (1) Pr&eacute;s&eacute;lection sur dossier, (2) Entretien et (3) Test pratique. Seuls les candidats qualifi&eacute;s pour l&rsquo;&eacute;tape suivante seront contact&eacute;s. <br /> <br />Les candidats int&eacute;ress&eacute;s sont pri&eacute;s d&rsquo;envoyer leur CV et une lettre motivation d&eacute;taillant votre qualification pour le poste par courriel aux deux adresses suivantes : sepimack@AdvoCareInnovate.com  au plus tard le 4 F&eacute;vrier 2019 &agrave; 23h59. Les candidatures re&ccedil;ues apr&egrave;s cette date ne seront pas consid&eacute;r&eacute;es. NB : Les candidatures f&eacute;minines sont fortement encourag&eacute;es. <br /> <br />Proc&eacute;dure d&rsquo;envoi des candidatures : 1. Objet du mail : CT_PAYS [exemple&mdash; CT_RDC ou CT_BURKINA FASO] 2. CV et lettre de motivation : CT_NOM_PRENOM_PAYS [exemple &ndash; CT_Kenge_Caleb_RDC]</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div> 
</div> --> 
  <!-- Modal -->
  <!--hide this content>
<div id="myModal4" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->

    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">AVIS DE RECRUTEMENT D’AGENTS ENQUETEURS (QUANTITATIVE) REPUBLIQUE DEMOCRATIQUE DU CONGO </h4>
      </div>
      <div class="modal-body">
        <p><strong>1. A PROPOS</strong></p>
<p>L&rsquo;AdvoCare Innovate (ADCI) est un laboratoire de recherche ind&eacute;pendant dont les experts cumulent plusieurs ann&eacute;es d&rsquo;exp&eacute;riences dans la conduite de projets de recherche en science sociale et dans l&rsquo;&eacute;valuation des projets et programmes. Son expertise le positionne comme l&rsquo;un des cabinets leader en mati&egrave;re de collecte de donn&eacute;es et d&rsquo;&eacute;valuation des projets ou programmes en Afrique. L&rsquo;objectif ultime d&rsquo;ADCI est d&rsquo;am&eacute;liorer le bien-&ecirc;tre des populations en orientant les d&eacute;cideurs dans leurs prises de d&eacute;cision sur la base de donn&eacute;es et d&rsquo;analyses bas&eacute;s sur les r&eacute;sultats scientifiques de nos recherches. <br />A ADCI, nous utilisons des techniques innovatrices de recherche et d'&eacute;valuation pour aider les d&eacute;cideurs dans leur prise de d&eacute;cision. Nous avons des experts et des consultants chevronn&eacute;s dans les secteurs tels que: l&rsquo;Eau, la Sant&eacute;, l&rsquo;Assainissement, la Nutrition, la Pauvret&eacute; la Finance, l&rsquo;Agriculture, l&rsquo;Education, la Gouvernance, le March&eacute; du travail et l&rsquo;Emploi des jeunes, le Transport public, l&rsquo;Energie, la D&eacute;centralisation, l&rsquo;Autonomisation des femmes et la question du genre, la Justice, l&rsquo;Int&eacute;gration communautaire, etc. <br />Le si&egrave;ge d&rsquo;ADCI est bas&eacute; &agrave; Ouagadougou au Burkina Faso. Le centre de recherche a &eacute;galement des repr&eacute;sentations dans plusieurs pays d&rsquo;Afrique. Pour plus d&rsquo;informations sur ADCI, visitez : http://www.AdvoCareInnovate.com/Home.php. <br /> <br />Nombre postes : 20 (dont 5 agents enqu&ecirc;teurs dans chaque province) <br />Provinces d&rsquo;affectation : Kinshasa, Kwago, Ituri et Kasai oriental <br />Date de d&eacute;but: mi-f&eacute;vrier 2019 <br />Dur&eacute;e: 3 semaines</p>
<p><strong>2. MISSIONS</strong> <br /> <br />Les enqu&ecirc;teurs assureront la collecte des donn&eacute;es de qualit&eacute; suivant les instructions et les exigences de qualit&eacute; sp&eacute;cifi&eacute;es par ADCI. Plus pr&eacute;cis&eacute;ment, le poste d&rsquo;agent enqu&ecirc;teur impliquera les t&acirc;ches suivantes : </p>
<p>- Participer &agrave; la formation et &agrave; la sensibilisation qu&rsquo;ADCI organise pour les agents enqu&ecirc;teurs</p>
<p>- Participer aussi aux pr&eacute;-tests des questionnaires sur le terrain ainsi qu&rsquo;&agrave; l&rsquo;enqu&ecirc;te pilote</p>
<p>- Participer &agrave; la finalisation des instruments de collecte, de la configuration du questionnaire sur tablette et de la m&eacute;thodologie de collecte</p>
<p>- Identifier de fa&ccedil;on ad&eacute;quate les r&eacute;pondants s&eacute;lectionn&eacute;s et recueillir des donn&eacute;es de haute qualit&eacute; tout en respectant la confidentialit&eacute; des r&eacute;pondants</p>
<p>- Travailler avec le superviseur pour &eacute;laborer des plans de travail qui permettront de mener &agrave; bien le travail sur le terrain</p>
<p>- Effectuer les reportings aupr&egrave;s du superviseur</p>
<p>- Veiller &agrave; ce que les objectifs de collecte soient atteints dans les d&eacute;lais impartis et que la collecte soit r&eacute;alis&eacute;e conform&eacute;ment &agrave; la conception de l'&eacute;tude <br /> <br /> <br /><strong>3. QUALIFICATIONS ET COMPETENCES</strong> <br /> <br />Le candidat doit pr&eacute;senter les exigences minimales suivantes: <br /> <br />- Avoir un niveau universitaire minimum (bac + 2) ;</p>
<p>- Avoir de solides comp&eacute;tences en communication orale et &eacute;crite en fran&ccedil;ais et en langues locales (la langue la plus parl&eacute;e dans la province o&ugrave; le candidat souhaite &ecirc;tre enqu&ecirc;teur) ;&nbsp;</p>
<p>- Faire preuve d&rsquo;une grande capacit&eacute; relationnelle et de communication ;</p>
<p>- Avoir le sens des responsabilit&eacute;s et respecter le principe de confidentialit&eacute; ;</p>
<p>- &Ecirc;tre capable de travailler en milieu rural et en milieux difficiles ;</p>
<p>- &Ecirc;tre capable de travailler en &eacute;quipe, de fa&ccedil;on autonome et sous pression dans les d&eacute;lais courts ;</p>
<p>- Faire preuve de professionnalisme <br /> <br />Le candidat doit <strong>OBLIGATOIREMENT</strong> remplir les conditions suivantes : </p>
<p>- Etre r&eacute;sident de la province o&ugrave; il postule (NB : ADCI ne prendra pas en charge les frais de d&eacute;placement de Kinshasa aux provinces pour participer &agrave; la pr&eacute;sente enqu&ecirc;te)</p>
<p>- Avoir trois (03) ann&eacute;es d&rsquo;exp&eacute;rience en ce qui concerne:</p>
<ul>
<li>La collecte des donn&eacute;es</li>
<li>La collecte de donn&eacute;es &eacute;lectronique sur tablettes (CAPI)</li>
<li>La collecte de donn&eacute;es G&eacute;o-spatial</li>
</ul>
<p>- Avoir particip&eacute; &agrave; la derni&egrave;re enqu&ecirc;te MICS (obligatoire)<br /> <br /><strong>4. RECRUTEMENT</strong> <br /> <br />Le recrutement se fera en trois &eacute;tapes : (1) Pr&eacute;s&eacute;lection sur dossier, (2) Entretien, et (3) Test pratique <br /> <br />Seuls les candidats qualifi&eacute;s pour l&rsquo;&eacute;tape suivante seront contact&eacute;s. <br /> <br />Les candidats int&eacute;ress&eacute;s sont pri&eacute;s d&rsquo;envoyer leur CV et une lettre motivation d&eacute;taillant votre qualification pour le poste par courriel aux deux adresses suivantes : sepimack@AdvoCareInnovate.com  au plus tard le 6 F&eacute;vrier 2019 &agrave; 23h59. Les candidatures re&ccedil;ues apr&egrave;s cette date ne seront pas consid&eacute;r&eacute;es. NB : Les candidatures f&eacute;minines sont fortement encourag&eacute;es. <br /> <br />Proc&eacute;dure d&rsquo;envoi des candidatures : 1. Objet du mail : ENQUETEUR_PROVINCE [exemple&mdash; ENQUETEUR_KWAGO] 2. CV et lettre de motivation : ENQUETEUR_NOM_PRENOM_PROVINCE [exemple &ndash; ENQUETEUR_Kenge_Caleb_KWAGO]</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</div> -->
<!--hide this content>
  </div>
</div>  
</div> -->  
  <!-- Modal -->
  <!--hide this content>
<div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->

    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">AVIS DE RECRUTEMENT DE COORDONATEURS DE TERRAIN BURKINA FASO & REPUBLIQUE DEMOCRATIQUE DU CONGO</h4>
      </div>
      <div class="modal-body">
        <p><strong>1. A PROPOS</strong></p>
<p>L&rsquo;AdvoCare Innovate  (ADCI) est un laboratoire de recherche ind&eacute;pendant dont les experts cumulent plusieurs ann&eacute;es d&rsquo;exp&eacute;riences dans la conduite de projets de recherche en science sociale et dans l&rsquo;&eacute;valuation des projets et programmes. Son expertise le positionne comme l&rsquo;un des cabinets leader en mati&egrave;re de collecte de donn&eacute;es et d&rsquo;&eacute;valuation des projets ou programmes en Afrique. L&rsquo;objectif ultime d&rsquo;ADCI est d&rsquo;am&eacute;liorer le bien-&ecirc;tre des populations en orientant les d&eacute;cideurs dans leurs prises de d&eacute;cision sur la base de donn&eacute;es et d&rsquo;analyses bas&eacute;s sur les r&eacute;sultats scientifiques de nos recherches. <br />A ADCI, nous utilisons des techniques innovatrices de recherche et d'&eacute;valuation pour aider les d&eacute;cideurs dans leur prise de d&eacute;cision. Nous avons des experts et des consultants chevronn&eacute;s dans les secteurs tels que: l&rsquo;Eau, la Sant&eacute;, l&rsquo;Assainissement, la Nutrition, la Pauvret&eacute; la Finance, l&rsquo;Agriculture, l&rsquo;Education, la Gouvernance, le March&eacute; du travail et l&rsquo;Emploi des jeunes, le Transport public, l&rsquo;Energie, la D&eacute;centralisation, l&rsquo;Autonomisation des femmes et la question du genre, la Justice, l&rsquo;Int&eacute;gration communautaire, etc. <br />Le si&egrave;ge d&rsquo;ADCI est bas&eacute; &agrave; Ouagadougou au Burkina Faso. Le centre de recherche a &eacute;galement des repr&eacute;sentations dans plusieurs pays d&rsquo;Afrique. Pour plus d&rsquo;informations sur ADCI, visitez : http://www.AdvoCareInnovate.com/Home.php. <br />Nombre postes : 4 (dont 2 en R&eacute;publique D&eacute;mocratique du Congo et 2 au Burkina Faso) <br />Ville d&rsquo;affectation : Kinshasa et Ouagadougou <br />Date de d&eacute;but : 4 F&eacute;vrier pour la RDC et le 25 F&eacute;vrier pour le Burkina Faso <br />Dur&eacute;e : huit (08) mois (renouvelable au besoin) <br /> <br /><strong>2. MISSION</strong> <br /> <br />Les coordonnateurs de terrain s&eacute;lectionn&eacute;s effectueront les t&acirc;ches suivantes : </p>
<p>- Appuyer les Assistants de Recherche dans les activit&eacute;s pr&eacute;paratoires de se en &oelig;uvre des activit&eacute;s d&rsquo;enqu&ecirc;tes ; </p>
<p>- Appuyer les Charg&eacute;s de Recherche dans l&rsquo;organisation et la supervision des enqu&ecirc;tes sur le terrain ;</p>
<p>- Assister &agrave; l&rsquo;&eacute;laboration des budgets op&eacute;rationnels pour les activit&eacute;s de terrain ;</p>
<p>- Participer activement au recrutement et &agrave; la formation des enqu&ecirc;teurs ;</p>
<p>- Suivre le travail des enqu&ecirc;teurs sur le terrain ;</p>
<p>- Appuyer tout travail de suivi en collaboration avec les partenaires du projet ;</p>
<p>- Planifier la logistique n&eacute;cessaire, c&rsquo;est-&agrave;-dire la disponibilit&eacute;, l&rsquo;entretien, la distribution et la r&eacute;cup&eacute;ration du mat&eacute;riel utilis&eacute; au cours des enqu&ecirc;tes ;</p>
<p>- Rendre compte quotidiennement &agrave; l&rsquo;Assistant de Recherche de l&rsquo;&eacute;volution des activit&eacute;s ;</p>
<p>- Maintenir une communication r&eacute;guli&egrave;re avec tous les superviseurs et les enqu&ecirc;teurs afin de relever tout probl&egrave;me et de trouver des solutions en commun ;</p>
<p>- Elaborer un rapport de terrain &agrave; soumettre au Charg&eacute; de recherche ; <br /> <br /><strong>3. QUALIFICATIONS ET COMPETENCES</strong> <br /> <br />- Avoir un niveau universitaire minimum (bac + 2) pr&eacute;f&eacute;rablement dans les sciences sociales ;</p>
<p>- Avoir un tr&egrave;s bon niveau de fran&ccedil;ais &eacute;crit et oral ;</p>
<p>- Avoir une bonne connaissance des outils informatiques (Microsoft Office)</p>
<p>- Parler au moins une langue locale du Burkina Faso ou de la RDC ;</p>
<p>- Avoir une exp&eacute;rience dans les enqu&ecirc;tes notamment la supervision et/ou la coordination d&rsquo;enqu&ecirc;te (au moins trois exp&eacute;riences av&eacute;r&eacute;es de supervision d&rsquo;enqu&ecirc;te)</p>
<p>- Etre apte &agrave; travailler en &eacute;quipe, avec rigueur et sous pression;</p>
<p>- Savoir motiver les &eacute;quipes ;</p>
<p>- Avoir un sens de l&rsquo;organisation et de la gestion des priorit&eacute;s ;</p>
<p>- Etre m&eacute;thodique et respecter les &eacute;ch&eacute;ances ;</p>
<p>- Etre capable de pouvoir travailler en milieu p&eacute;ri-urbain, urbain et rural pendant de longues p&eacute;riodes de temps et &agrave; des heures irr&eacute;guli&egrave;res si n&eacute;cessaire ;</p>
<p>- Etre orient&eacute; vers la performance ;</p>
<p>- Respecter la confidentialit&eacute; <br /> <br />La r&eacute;mun&eacute;ration est comp&eacute;titive et sera d&eacute;termin&eacute;e en fonction de l&rsquo;exp&eacute;rience du candidat. <br /> <br /><strong>4. RECRUTEMENT </strong></p>
<p>Le recrutement se fera en trois &eacute;tapes : (1) Pr&eacute;s&eacute;lection sur dossier, (2) Entretien et (3) Test pratique. Seuls les candidats qualifi&eacute;s pour l&rsquo;&eacute;tape suivante seront contact&eacute;s. <br /> <br />Les candidats int&eacute;ress&eacute;s sont pri&eacute;s d&rsquo;envoyer leur CV et une lettre motivation d&eacute;taillant votre qualification pour le poste par courriel aux deux adresses suivantes : sepimack@AdvoCareInnovate.com au plus tard le 4 F&eacute;vrier 2019 &agrave; 23h59. Les candidatures re&ccedil;ues apr&egrave;s cette date ne seront pas consid&eacute;r&eacute;es. NB : Les candidatures f&eacute;minines sont fortement encourag&eacute;es. <br /> <br />Proc&eacute;dure d&rsquo;envoi des candidatures : 1. Objet du mail : CT_PAYS [exemple&mdash; CT_RDC ou CT_BURKINA FASO] 2. CV et lettre de motivation : CT_NOM_PRENOM_PAYS [exemple &ndash; CT_Kenge_Caleb_RDC]</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
</div> --> 
 <!-- Modal -->
 <!--hide this content>
<div id="myModal6" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Recrutement d’Enquêteurs et de Superviseurs pour la collecte de données sur l’électricité dans les ménages et entreprises du Bénin</h4>
      </div>
      <div class="modal-body">
        <p style="text-align: justify;">1. En septembre 2015, le Millennium Challenge Corporation (MCC) s'est associ&eacute; au gouvernement b&eacute;ninois pour mettre en &oelig;uvre le B&eacute;nin Power Compact. Un programme con&ccedil;u pour moderniser le r&eacute;seau &eacute;lectrique du B&eacute;nin, renforcer la compagnie d'&eacute;lectricit&eacute; (SBEE), &eacute;tendre l'acc&egrave;s &agrave; l'&eacute;lectricit&eacute; et am&eacute;liorer la qualit&eacute; et la fiabilit&eacute; du syst&egrave;me &eacute;nerg&eacute;tique &agrave; travers quatre projets. Le B&eacute;nin Power Compact intervient principalement dans les villes de Cotonou, Porto-Novo, Bohicon, Parakou, Djougou et Natitingou.<br />Le cabinet Mathematica en collaboration avec le consortium de cabinets FIDEXI Conseil &ndash; AdvoCare Innovate (ADCI) proc&eacute;dera &agrave; une &eacute;num&eacute;ration des m&eacute;nages et entreprises dans les villes de Cotonou, Porto-Novo, Bohicon, Parakou, Djougou et Natitingou. A cet effet, FIDEXI Conseil recrute des agents enqu&ecirc;teurs qui seront form&eacute;s et impliqu&eacute;s dans l&rsquo;op&eacute;ration de collecte des donn&eacute;es aupr&egrave;s des m&eacute;nages et entreprises des villes ci-dessus mentionn&eacute;es.</p>
<p style="text-align: justify;">2. La pr&eacute;sente collecte de donn&eacute;es vise &agrave; cr&eacute;er une liste des m&eacute;nages et petites entreprises cibl&eacute;es par les Projets de Production et de Distribution d'&Eacute;lectricit&eacute;. Cette liste sera utilis&eacute;e comme cadre d&rsquo;&eacute;chantillonnage dans le cadre de la collecte de donn&eacute;es futures. Les services des consultants &laquo; agents enqu&ecirc;teurs &raquo; consistent &agrave; :<br />&bull; &Eacute;num&eacute;rer les m&eacute;nages et entreprises dans 200 zones de d&eacute;nombrement (ou blocs) qui comportent chacune environ 50 maisons (carr&eacute;s/parcelles).<br />&bull; R&eacute;aliser un bref entretien d&rsquo;environ 10 minutes avec les m&eacute;nages &eacute;lectrifi&eacute;s et les entreprises.<br />&bull; Collecter des informations sur les carr&eacute;s dans chaque bloc identifi&eacute; ;<br />&bull; Utiliser un support num&eacute;rique (tablette) pour la collecte de donn&eacute;es ;<br />FIDEXI Conseil</p>
<p style="text-align: justify;">&bull; Contr&ocirc;ler la qualit&eacute; des donn&eacute;es enregistr&eacute;es aupr&egrave;s de chaque m&eacute;nage/entreprise avant de passer au m&eacute;nage/entreprise suivant(e) ;<br />&bull; Accomplir toutes autres t&acirc;ches en lien avec la r&eacute;ussite de la mission sous le contr&ocirc;le et l&rsquo;orientation d&rsquo;une &eacute;quipe de supervision.</p>
<p style="text-align: justify;"><br />3. Le Coordonnateur des enqu&ecirc;tes du cabinet FIDEXI, repr&eacute;sentant l&rsquo;Autorit&eacute; Contractante, invite les consultants int&eacute;ress&eacute;s &agrave; se manifester. Les consultants individuels doivent fournir les informations indiquant qu&rsquo;ils sont qualifi&eacute;s pour ex&eacute;cuter ladite mission. Ces informations concernent essentiellement leur qualification d&rsquo;ordre g&eacute;n&eacute;ral (dipl&ocirc;me et exp&eacute;riences g&eacute;n&eacute;rales) et les r&eacute;f&eacute;rences des missions analogues effectu&eacute;es (prouv&eacute;es par des attestations qui leur seront demand&eacute;es en cas de besoin).</p>
<p style="text-align: justify;"><br />4. Les exigences minima de qualification sont :<br />&bull; <strong>Agents enqu&ecirc;teurs/trices</strong> :<br />- &Ecirc;tre &acirc;g&eacute; de 18 ans au moins ;<br />- &Ecirc;tre titulaire au moins du BAC ou de tout autre dipl&ocirc;me &eacute;quivalent ;<br />- Avoir une bonne ma&icirc;trise des tablettes ;<br />- Avoir une exp&eacute;rience dans la collecte de donn&eacute;es socio-&eacute;conomiques des m&eacute;nages ;<br />- Avoir un esprit fin et sensible au d&eacute;tail ;<br />- Comprendre l&rsquo;une des langues dominantes des zones d&rsquo;intervention du projet<br />(Bohicon, Djougou, Natitingou, Parakou et Cotonou) et r&eacute;sider dans l&rsquo;une de ces<br />zones serait un atout.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">5. <strong>Le dossier de candidature r&eacute;dig&eacute; en langue fran&ccedil;aise (une copie) comprendra</strong> :<br />a- Une lettre de manifestation d&rsquo;int&eacute;r&ecirc;t pr&eacute;cisant l&rsquo;objet de la candidature, la ou les ville(s) choisie(s) en fonction des langues ma&icirc;tris&eacute;es par le consultant et parl&eacute;es dans la ou lesdites ville(s) ;<br />b- Un curriculum vitae d&eacute;taill&eacute; pr&eacute;cisant les dipl&ocirc;mes et leur ann&eacute;e d&rsquo;obtention, les</p>
<p style="text-align: justify;">exp&eacute;riences professionnelles acquises, leur dur&eacute;e, ainsi que les contacts des personnes-ressources.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">6. Pour l&rsquo;&eacute;valuation des manifestations d&rsquo;int&eacute;r&ecirc;t, il sera appliqu&eacute; les crit&egrave;res suivants :<br />i) Niveau d&rsquo;&eacute;tude (30 points)<br />ii) Qualification professionnelle (50 points) ;<br />iii) Compr&eacute;hension des langues dominantes du milieu choisi (20 points).<br />N.B : Dans le processus de s&eacute;lection des candidats, un test de langue et d&rsquo;utilisation de tablette pour administrer un questionnaire pourrait &ecirc;tre organis&eacute;. Seuls les candidats pr&eacute;s&eacute;lectionn&eacute;s seront contact&eacute;s.</p>
<p style="text-align: justify;"><br />7. La dur&eacute;e de la mission est estim&eacute;e &agrave; environ quatre semaines pour chaque enqu&ecirc;teur et couvrira les mois de Novembre et D&eacute;cembre 2018.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">8. Les dossiers de manifestation d&rsquo;int&eacute;r&ecirc;t doivent &ecirc;tre envoy&eacute;s mail &agrave; l&rsquo;adresse E-mail : <span style="color: #0000ff;">sepimack@gmail.com</span>, <strong>au plus tard le 7 Octobre 2018 &agrave; 17 heures pr&eacute;cises GMT</strong>. Les dossiers doivent &ecirc;tre envoy&eacute;s en un seul mail avec objet &laquo; Enqueteur_Pr&eacute;nom_Nom_Ville(s)Choisie(s) &raquo;. Pour tout besoin de renseignement aux fins de clarification envoyer un email &agrave; <span style="color: #0000ff;">sepimack@gmail.com</span>.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>  
</div> -->
  <!-- Modal -->
  <!--hide this content>
<div id="myModal7" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->
    <!-- Modal content-->
    <!--hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Avis de recrutement d’enquêteurs pour le projet ACCELERE ! Activité 1</h4>
      </div>
      <div class="modal-body">
        <p style="text-align: justify;"><strong>1. CONTEXTE</strong>&nbsp;<br />AdvoCare Innovate (ADCI) est un laboratoire d&rsquo;&eacute;tude et de recherche dont la vocation est la production de donn&eacute;es fiables et de qualit&eacute;s, l&rsquo;&eacute;laboration des rapports d&rsquo;enqu&ecirc;tes socio-&eacute;conomiques et la r&eacute;alisation d&rsquo;&eacute;tudes pertinentes afin d&rsquo;appuyer les d&eacute;cideurs pour la prise de meilleures mesures. Nos partenaires sont les d&eacute;cideurs des secteurs priv&eacute;s, publics, organisations non gouvernementales, des organisations internationales ainsi que les chercheurs des universit&eacute;s. Dans le cadre de son partenariat avec USAID/DRC et la structure Chemonics International, le bureau local de ADCI en R&eacute;publique D&eacute;mocratique du Congo (RDC) fourni un appui essentiel &agrave; la mise en &oelig;uvre des activit&eacute;s de collecte de donn&eacute;es pour le projet ACCELERE! Activit&eacute; 1.</p>
			<p style="text-align: justify;">ACCELERE ! Activit&eacute; 1 est une composante d'un programme conjoint de l&rsquo;USAID et l'UKAID pour appuyer l&rsquo;engagement du Gouvernement de la RDC &agrave; l'&eacute;ducation de base gratuite et universelle et &agrave; l&rsquo;am&eacute;lioration des r&eacute;sultats d'apprentissage tels que formul&eacute;s dans le plan d'enseignement int&eacute;rimaire GDRC (IEP), la Strat&eacute;gie dans le secteur de l'&eacute;ducation ainsi que d'autres r&eacute;formes et efforts dans le secteur. L&rsquo;Activit&eacute; 1 d&rsquo;ACCELERE ! Est un programme de cinq ans financ&eacute; par l'USAID et mis en &oelig;uvre par Chemonics International. Activit&eacute; 1 soutiendra les &eacute;coles publiques primaires, les &eacute;coles soutenues par les r&eacute;seaux religieux et les centres de Rattrapages scolaires dans 26 SousProvinces &eacute;ducationnelles &agrave; travers huit provinces. Le projet vise aussi l&rsquo;am&eacute;lioration de l&rsquo;acc&egrave;s des jeunes en rupture de l&rsquo;Education dans les centres de formation professionnelle, dans les Sous Provinces &eacute;ducationnelles du HautKatanga, du Lualaba, ainsi que celles du Nord &amp; Sud Kivu. Ainsi donc, dans le cadre de ACCELERE ! Activit&eacute; 1 il est pr&eacute;vu de conduire une enqu&ecirc;te dans huit (08) huit provinces de la RDC notamment le Haut katanga, Lualaba , Kasai Central , Kasai oriental, Equateur , Sud -Ubagui , Sud Kivu, Nord Kivu.</p><p style="text-align: justify;">1. En septembre 2015, le Millennium Challenge Corporation (MCC) s'est associ&eacute; au gouvernement b&eacute;ninois pour mettre en &oelig;uvre le B&eacute;nin Power Compact. Un programme con&ccedil;u pour moderniser le r&eacute;seau &eacute;lectrique du B&eacute;nin, renforcer la compagnie d'&eacute;lectricit&eacute; (SBEE), &eacute;tendre l'acc&egrave;s &agrave; l'&eacute;lectricit&eacute; et am&eacute;liorer la qualit&eacute; et la fiabilit&eacute; du syst&egrave;me &eacute;nerg&eacute;tique &agrave; travers quatre projets. Le B&eacute;nin Power Compact intervient principalement dans les villes de Cotonou, Porto-Novo, Bohicon, Parakou, Djougou et Natitingou.<br />Le cabinet Mathematica en collaboration avec le consortium de cabinets FIDEXI Conseil &ndash; AdvoCare Innovate (ADCI) proc&eacute;dera &agrave; une &eacute;num&eacute;ration des m&eacute;nages et entreprises dans les villes de Cotonou, Porto-Novo, Bohicon, Parakou, Djougou et Natitingou. A cet effet, FIDEXI Conseil recrute des agents enqu&ecirc;teurs qui seront form&eacute;s et impliqu&eacute;s dans l&rsquo;op&eacute;ration de collecte des donn&eacute;es aupr&egrave;s des m&eacute;nages et entreprises des villes ci-dessus mentionn&eacute;es.</p>
<p style="text-align: justify;">2. La pr&eacute;sente collecte de donn&eacute;es vise &agrave; cr&eacute;er une liste des m&eacute;nages et petites entreprises cibl&eacute;es par les Projets de Production et de Distribution d'&Eacute;lectricit&eacute;. Cette liste sera utilis&eacute;e comme cadre d&rsquo;&eacute;chantillonnage dans le cadre de la collecte de donn&eacute;es futures. Les services des consultants &laquo; agents enqu&ecirc;teurs &raquo; consistent &agrave; :<br />&bull; &Eacute;num&eacute;rer les m&eacute;nages et entreprises dans 200 zones de d&eacute;nombrement (ou blocs) qui comportent chacune environ 50 maisons (carr&eacute;s/parcelles).<br />&bull; R&eacute;aliser un bref entretien d&rsquo;environ 10 minutes avec les m&eacute;nages &eacute;lectrifi&eacute;s et les entreprises.<br />&bull; Collecter des informations sur les carr&eacute;s dans chaque bloc identifi&eacute; ;<br />&bull; Utiliser un support num&eacute;rique (tablette) pour la collecte de donn&eacute;es ;<br />FIDEXI Conseil</p>
<p style="text-align: justify;">&bull; Contr&ocirc;ler la qualit&eacute; des donn&eacute;es enregistr&eacute;es aupr&egrave;s de chaque m&eacute;nage/entreprise avant de passer au m&eacute;nage/entreprise suivant(e) ;<br />&bull; Accomplir toutes autres t&acirc;ches en lien avec la r&eacute;ussite de la mission sous le contr&ocirc;le et l&rsquo;orientation d&rsquo;une &eacute;quipe de supervision.</p>
<p style="text-align: justify;"><br />3. Le Coordonnateur des enqu&ecirc;tes du cabinet FIDEXI, repr&eacute;sentant l&rsquo;Autorit&eacute; Contractante, invite les consultants int&eacute;ress&eacute;s &agrave; se manifester. Les consultants individuels doivent fournir les informations indiquant qu&rsquo;ils sont qualifi&eacute;s pour ex&eacute;cuter ladite mission. Ces informations concernent essentiellement leur qualification d&rsquo;ordre g&eacute;n&eacute;ral (dipl&ocirc;me et exp&eacute;riences g&eacute;n&eacute;rales) et les r&eacute;f&eacute;rences des missions analogues effectu&eacute;es (prouv&eacute;es par des attestations qui leur seront demand&eacute;es en cas de besoin).</p>
<p style="text-align: justify;"><br />4. Les exigences minima de qualification sont :<br />&bull; <strong>Agents enqu&ecirc;teurs/trices</strong> :<br />- &Ecirc;tre &acirc;g&eacute; de 18 ans au moins ;<br />- &Ecirc;tre titulaire au moins du BAC ou de tout autre dipl&ocirc;me &eacute;quivalent ;<br />- Avoir une bonne ma&icirc;trise des tablettes ;<br />- Avoir une exp&eacute;rience dans la collecte de donn&eacute;es socio-&eacute;conomiques des m&eacute;nages ;<br />- Avoir un esprit fin et sensible au d&eacute;tail ;<br />- Comprendre l&rsquo;une des langues dominantes des zones d&rsquo;intervention du projet<br />(Bohicon, Djougou, Natitingou, Parakou et Cotonou) et r&eacute;sider dans l&rsquo;une de ces<br />zones serait un atout.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">5. <strong>Le dossier de candidature r&eacute;dig&eacute; en langue fran&ccedil;aise (une copie) comprendra</strong> :<br />a- Une lettre de manifestation d&rsquo;int&eacute;r&ecirc;t pr&eacute;cisant l&rsquo;objet de la candidature, la ou les ville(s) choisie(s) en fonction des langues ma&icirc;tris&eacute;es par le consultant et parl&eacute;es dans la ou lesdites ville(s) ;<br />b- Un curriculum vitae d&eacute;taill&eacute; pr&eacute;cisant les dipl&ocirc;mes et leur ann&eacute;e d&rsquo;obtention, les</p>
<p style="text-align: justify;">exp&eacute;riences professionnelles acquises, leur dur&eacute;e, ainsi que les contacts des personnes-ressources.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">6. Pour l&rsquo;&eacute;valuation des manifestations d&rsquo;int&eacute;r&ecirc;t, il sera appliqu&eacute; les crit&egrave;res suivants :<br />i) Niveau d&rsquo;&eacute;tude (30 points)<br />ii) Qualification professionnelle (50 points) ;<br />iii) Compr&eacute;hension des langues dominantes du milieu choisi (20 points).<br />N.B : Dans le processus de s&eacute;lection des candidats, un test de langue et d&rsquo;utilisation de tablette pour administrer un questionnaire pourrait &ecirc;tre organis&eacute;. Seuls les candidats pr&eacute;s&eacute;lectionn&eacute;s seront contact&eacute;s.</p>
<p style="text-align: justify;"><br />7. La dur&eacute;e de la mission est estim&eacute;e &agrave; environ quatre semaines pour chaque enqu&ecirc;teur et couvrira les mois de Novembre et D&eacute;cembre 2018.</p>
<p style="text-align: justify;">&nbsp;</p>
<p style="text-align: justify;">8. Les dossiers de manifestation d&rsquo;int&eacute;r&ecirc;t doivent &ecirc;tre envoy&eacute;s mail &agrave; l&rsquo;adresse E-mail : sepimack@gmail.com, <strong>au plus tard le 7 Octobre 2018 &agrave; 17 heures pr&eacute;cises GMT</strong>. Les dossiers doivent &ecirc;tre envoy&eacute;s en un seul mail avec objet<br />&laquo; Enqueteur_Pr&eacute;nom_Nom_Ville(s)Choisie(s) &raquo;. Pour tout besoin de renseignement aux fins de clarification envoyer un email &agrave; sepimack@gmail.com</p>
			<p style="text-align: justify;">Pour r&eacute;aliser cette enqu&ecirc;te, IHfRA lance le pr&eacute;sent avis pour le recrutement d&rsquo;enqu&ecirc;teurs exp&eacute;riment&eacute;s qui seront en charge de la collecte de donn&eacute;es sur le terrain. Les enqu&ecirc;teurs travailleront sous la coordination technique des superviseurs et sous la direction du Chief Executive Officer de ADCI.</p>
			<p style="text-align: justify;">&nbsp;</p>
			<p style="text-align: justify;"><strong>2. MISSIONS</strong> <br />Les enqu&ecirc;teurs assureront la collecte des donn&eacute;es de qualit&eacute;s suivant les instructions et les exigences de qualit&eacute; voulues par IHfRA. Plus pr&eacute;cis&eacute;ment, le poste d&rsquo;enqu&ecirc;teurs impliquera les &eacute;l&eacute;ments suivants :</p>
			<ul style="text-align: justify;">
			<li>Participer &agrave; la formation et &agrave; la sensibilisation qu&rsquo;IHfRA organise pour les enqu&ecirc;teurs</li>
			<li>Participer aussi aux pr&eacute;-tests des questionnaires sur le terrain ainsi que &agrave; l&rsquo;enqu&ecirc;te pilote</li>
			<li>Fournir des commentaires sur les op&eacute;rations de terrain et les instruments d'enqu&ecirc;te </li>
			<li>Aider &agrave; la r&eacute;vision de l&rsquo;ensemble de documents qui servent pour la collecte de donn&eacute;es (les questionnaires, la configuration du questionnaire sur tablette &hellip;) et faire des propositions d&rsquo;am&eacute;lioration le cas &eacute;ch&eacute;ant.</li>
			<li>Identifier de fa&ccedil;on ad&eacute;quate les r&eacute;pondants s&eacute;lectionn&eacute;s et recueillir des donn&eacute;es de haute qualit&eacute; tout en respectant la confidentialit&eacute; des r&eacute;pondants.  Travailler avec le superviseur pour &eacute;laborer des plans de travail qui permettront de mener &agrave; bien le travail sur le terrain</li>
			<li>Effectuer les reportings aupr&egrave;s du superviseur</li>
			<li>Veiller &agrave; ce que les objectifs de la collecte soient atteints &agrave; temps et que la collecte soit r&eacute;alis&eacute;e conform&eacute;ment &agrave; la conception de l'&eacute;tude</li>
			</ul>
			<p style="text-align: justify;">&nbsp;</p>
			<p style="text-align: left;">&nbsp;</p>
			<p style="text-align: left;"><strong>3. QUALIFICATIONS ET COMPETENCES</strong> <br />Le candidat id&eacute;al devra avoir une exp&eacute;rience probante dans la collecte de donn&eacute;es. Les principales qualifications et exp&eacute;riences requises sont les suivantes :</p>
			<p style="text-align: left;"><br /><strong>Le candidat doit pr&eacute;senter les exigences minimales suivantes:</strong></p>
			<ul style="text-align: left;">
			<li style="text-align: justify;">Solides comp&eacute;tences en communication orale et &eacute;crite en fran&ccedil;ais et en langues locales (i.e. la langue la plus parl&eacute;e dans la province o&ugrave; le candidat souhaite &ecirc;tre enqu&ecirc;teur)</li>
			<li style="text-align: justify;">Faire preuve d&rsquo;une grande capacit&eacute; relationnelle et de communication</li>
			<li style="text-align: justify;">Avoir le sens des responsabilit&eacute;s et respecter le principe de confidentialit&eacute; si cher au travail d&rsquo;enqu&ecirc;teur</li>
			<li style="text-align: justify;">&Ecirc;tre capable de travailler en milieu rural et en milieux difficiles</li>
			<li style="text-align: justify;">&Ecirc;tre capable de travailler en &eacute;quipe, de fa&ccedil;on autonome et sous pression dans les d&eacute;lais courts</li>
			<li style="text-align: justify;">Etre professionnel</li>
			<li style="text-align: justify;">Etre capable d&rsquo;organiser soit m&ecirc;me son d&eacute;placement, son h&eacute;bergement sur le terrain notamment dans les zones rurales &eacute;loign&eacute;es.</li>
			<li style="text-align: justify;">Etre r&eacute;sident de la province o&ugrave; est pr&eacute;vue la collecte de donn&eacute;es</li>
			<li style="text-align: justify;">Etre enti&egrave;rement disponible &agrave; partir du 4 Janvier 2018 et pour toute la dur&eacute;e de l&rsquo;enqu&ecirc;te</li>
			</ul>
			<p style="text-align: left;"><strong>Exp&eacute;rience et qualifications requise pour les enqu&ecirc;teurs</strong></p>
			<ul style="text-align: left;">
			<li>Avoir un niveau universitaire (minimum le graduat) en sciences sociales, ou toute autre discipline similaire</li>
			<li>Avoir &eacute;t&eacute; enqu&ecirc;teur au moins sur deux enqu&ecirc;tes d&rsquo;envergure</li>
			<li>Avoir de l&rsquo;exp&eacute;rience en ce qui concerne:</li>
			</ul>
			<p style="text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;La collecte des donn&eacute;es</p>
			<p style="text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;La Collecte de donn&eacute;es sur support &eacute;lectronique (sur tablettes)</p>
			<p style="text-align: left;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;La collecte de donn&eacute;es G&eacute;o-spatial</p>
			<ul>
			<li style="text-align: left;">Avoir une exp&eacute;rience dans le domaine &eacute;ducatif serait un atout</li>
			</ul>
			<p style="text-align: left;">&nbsp;</p>
			<p style="text-align: left;"><strong>LE RECRUTEMENT:</strong> <br />Le recrutement se fera en trois &eacute;tapes :</p>
			<ul style="list-style-type: circle; text-align: left;">
			<li>Pr&eacute;s&eacute;lection sur dossier</li>
			<li>Interview</li>
			<li>Test pratique</li>
			</ul>
			<p style="text-align: left;"><strong>A chaque &eacute;tape seuls les candidats qualifi&eacute;s pour l&rsquo;&eacute;tape suivante seront contact&eacute;s.</strong></p>
			<p style="text-align: left;">Les candidats int&eacute;ress&eacute;s sont pri&eacute;s d&rsquo;envoyer leur CV et leur lettre motivation par courriel &eacute;lectronique &agrave; l&rsquo;adresses suivantes : <a title="E-mail" href="mailto:sepimack@AdvoCareInnovate.com">sepimack@AdvoCareInnovate.com</a> au plus tard le 26 D&eacute;cembre 2017. Les candidatures re&ccedil;ues apr&egrave;s cette date ne seront pas consid&eacute;r&eacute;es et seuls les candidats pr&eacute;s&eacute;lectionn&eacute;s seront contact&eacute;s.</p>
			<p style="text-align: left;"><br />NB : Les candidats qui postulent sont invit&eacute;s &agrave; indiquer <span style="text-decoration: underline;"><strong>dans l'objet du mail</strong></span> la province pour laquelle ils postulent. La pr&eacute;f&eacute;rence sera donn&eacute;e aux candidats r&eacute;sidants dans la province o&ugrave; il/elle postule. Il est vivement recommand&eacute; de postuler pour sa province de r&eacute;sidence. <br />Dans l&rsquo;objet du mail, mettez votre nom suivi de la province dans laquelle vous souhaitez travailler. Suivez l&rsquo;exemple suivant : [Mutombo Edmond--LUALABA]</p>
			<p>&nbsp;</p>
			<p style="text-align: right;">Fait &agrave; Kinshasa le 14/12/2017</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
</div> -->
<!-- hide this content>
  </div>
</div>   
</div> --> 
<!-- Modal -->
<!--hide this content>
<div id="myModal8" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
</div> -->


    <!-- Modal content-->
    <!-- hide this content>
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Avis de recrutement de superviseurs pour le projet ACCELERE ! Activité 1</h4>
      </div>
      <div class="modal-body">
        <p style="text-align: justify;">&nbsp;</p>
		<p style="text-align: justify;"><strong>1. CONTEXTE</strong></p>
		<p style="text-align: justify;">AdvoCare Innovate (ADCI) est un laboratoire d'&eacute;tude et de recherche dont la vocation est la production de donn&eacute;es fiable et de qualit&eacute;s, l'&eacute;laboration des rapports d'enqu&ecirc;tes socio-&eacute;conomiques et la sont les structures et les d&eacute;cideurs des secteurs priv&eacute;s, publics et institutionnels ainsi que les chercheurs. Dans le cadre de son partenariat avec USAID/DRC et la structure Chemonics International, le bureau local de ADCI en R&eacute;publique D&eacute;mocratique du Congo (RDC) donn&eacute;es pour le projet ACCELERE! Activit&eacute; 1.</p>
		<p style="text-align: justify;">ACCELERE r&eacute;sultats d'apprentissage tels que formul&eacute;s dans le plan d'enseignement int&eacute;rimaire GDRC (IEP), la Strat&eacute;gie dans le ! Est un ternational. Activit&eacute; 1 soutiendra les &eacute;coles publiques primaires, les &eacute;coles soutenues par les r&eacute;seaux religieux et les centres de Rattrapages scolaires dans 26 Sous-Provinces &eacute;ducationnelles &agrave; travers six provinces. Le projet vise aussi &eacute;ducationnelles du Haut-Katanga, du Lualaba, ainsi que celles du Nord &amp; Sud Kivu. Ainsi donc, dans le cadre de ACCELERE ! Activit&eacute; 1 il est pr&eacute;vu de conduire une enqu&ecirc;te dans huit (08) huit provinces de la RDC notamment le Haut katanga, Lualaba , Kasai Central , Kasai oriental, Equateur , Sud -Ubagui , Sud Kivu, Nord Kivu.</p>
		<p style="text-align: justify;">Pour r&eacute;aliser cette enqu&ecirc;te, ADCI lance le pr&eacute;sent avis pour le recrutement de superviseurs exp&eacute;riment&eacute;s qui seront en charge de la collecte de donn&eacute;es sur le terrain. Les superviseurs travailleront sous la sous la direction du Chief Executive Officer de ADCI.</p>
		<p style="text-align: justify;">&nbsp;</p>
		<p style="text-align: justify;">&nbsp;</p>
		<p style="text-align: justify;"><strong>2. MISSIONS </strong></p>
		<p style="text-align: justify;">Plac&eacute; sous la direction du CEO de ADCI, le contr&ocirc;le de la bonne r&eacute;alisation des activit&eacute;s de terrains. Plus pr&eacute;cis&eacute;ment, le poste de superviseur de terrain impliquera les &eacute;l&eacute;ments suivants :</p>
		<p style="text-align: justify;"><strong>Supervision efficace de la collecte de donn&eacute;es :</strong></p>
		<ul>
		<li style="text-align: justify;">Contribuer &agrave; l'identification, au recrutement, &agrave; la formation et au d&eacute;ploiement des enqu&ecirc;teurs sur le terrain.</li>
		<li style="text-align: justify;">Conduire l'&eacute;quipe de terrin dans l'atteinte des objectifs (diriger, manager,&nbsp; motiver, f&eacute;d&eacute;rer, monter en comp&eacute;tences)</li>
		<li style="text-align: justify;">Coop&eacute;rer efficacement avec les repr&eacute;sentants provinciaux, locaux, et administratifs pour la sensibilisation des personnes &agrave; enqu&ecirc;t&eacute;es</li>
		<li style="text-align: justify;">Manager les &eacute;quipes de terrain &agrave; travers une collaboration &eacute;troite la r&eacute;solution des probl&egrave;mes et des impr&eacute;vus auxquels peuvent &ecirc;tre confront&eacute; les enqu&ecirc;teurs</li>
		<li style="text-align: justify;">Veiller &agrave; ce que les objectifs soient atteints &agrave; temps et que toutes les activit&eacute;s de collecte soient r&eacute;alis&eacute;es conform&eacute;ment &agrave; la conception de l'&eacute;tude</li>
		</ul>
		
		<p style="text-align: justify;"><strong>Mise en &oelig;uvre et gestion de la collecte de donn&eacute;es</strong></p>
		<ul style="text-align: justify;">
		<li>Aider &agrave; la conception et &agrave; la r&eacute;vision de l&rsquo;ensemble de documents qui servent pour la collecte de donn&eacute;es dans le cadre de l&rsquo;enqu&ecirc;te de base et des enqu&ecirc;tes de suivi (les questionnaires,&nbsp; les manuels d'enqu&ecirc;te&hellip;);&nbsp;</li>
		<li>Superviser et ex&eacute;cuter le pr&eacute;test des questionnaires et l'enqu&ecirc;te pilote, fournir des commentaires sur les op&eacute;rations&nbsp; de terrain et les instruments d'enqu&ecirc;te, faire des propositions d&rsquo;am&eacute;lioration</li>
		<li>S&rsquo;assurer de la qualit&eacute; et l'int&eacute;grit&eacute; des donn&eacute;es &agrave; travers les contr&ocirc;les qualit&eacute;s et de <em>backchecking</em>.</li>
		<li>Aider &agrave; superviser la collecte de donn&eacute;es qualitatives, &agrave; assurer une identification ad&eacute;quate des r&eacute;pondants s&eacute;lectionn&eacute;s, &agrave; recueillir des donn&eacute;es de haute qualit&eacute;, &agrave; suivre les progr&egrave;s r&eacute;alis&eacute;s sur le terrain, &agrave; g&eacute;rer en toute s&eacute;curit&eacute; les donn&eacute;es et &agrave; respecter la confidentialit&eacute; des r&eacute;pondants.</li>
		</ul>
		<p style="text-align: justify;">&nbsp;</p>
		<p style="text-align: justify;"><strong>Reporting</strong></p>
		<ul style="text-align: justify;">
		<li>Pr&eacute;parez des rapports r&eacute;guliers de la progression des activit&eacute;s de collecte de donn&eacute;es (les r&eacute;alisations effectives sur le plan quantitatif et qualitatif)</li>
		<li>Faire un compte rendu r&eacute;gulier et d&eacute;taill&eacute; au CEO de ADCI sur les activit&eacute;s, les pr&eacute;occupations et les d&eacute;cisions qui doivent &ecirc;tre prises</li>
		</ul>
		<p style="text-align: justify;">&nbsp;</p>
		<p style="text-align: justify;"><strong>3.&nbsp; QUALIFICATIONS ET COMPETENCES </strong></p>
		<p style="text-align: justify;">&nbsp;</p>
		<p style="text-align: justify;">Le candidat id&eacute;al devra avoir une exp&eacute;rience probante dans la collecte de donn&eacute;es. Les principales qualifications et&nbsp; exp&eacute;riences requises sont les suivantes :</p>
		<p style="text-align: justify;">&nbsp;</p>
		<p style="text-align: justify;"><strong>Le candidat&nbsp; doit pr&eacute;senter les exigences minimales suivantes</strong>:</p>
		<ul style="text-align: justify;">
		<li>Solides comp&eacute;tences en communication orale et &eacute;crite en fran&ccedil;ais et en langues locales (i. la langue la plus parl&eacute;e dans la province o&ugrave; le candidat souhaite &ecirc;tre superviseur)</li>
		<li>Faire preuve d&rsquo;une grande capacit&eacute; relationnelle et de communication</li>
		<li>Avoir le sens des responsabilit&eacute;s et &ecirc;tre capable de coordonner des &eacute;quipes</li>
		<li>&Ecirc;tre capable de travailler en milieu rural et en milieux difficiles</li>
		<li>&Ecirc;tre capable de travailler en &eacute;quipe, de fa&ccedil;on autonome et sous pression dans les d&eacute;lais courts</li>
		<li>Etre professionnel, rechercher et proposer des solutions aux probl&egrave;mes qui se posent</li>
		<li>Etre capable d&rsquo;organiser soit m&ecirc;me son d&eacute;placement, son h&eacute;bergement sur le terrain notamment dans les zones rurales &eacute;loign&eacute;es.</li>
		<li>Etre r&eacute;sident de la province o&ugrave; est pr&eacute;vue la collecte de donn&eacute;es</li>
		</ul>
		<p style="text-align: justify;">Etre enti&egrave;rement disponible &agrave; partir du 4 Janvier 2018 et pour toute la dur&eacute;e de l&rsquo;enqu&ecirc;te.</p>
		<p style="text-align: justify;"><strong>Exp&eacute;rience et qualifications requise pour les superviseurs&nbsp;</strong></p>
		<ul style="text-align: justify;">
		<li>Avoir un niveau universitaire (licence) en sciences sociales, ou toute autre discipline similaire  &nbsp;&nbsp;&nbsp; Avoir &eacute;t&eacute; superviseur au moins sur deux enqu&ecirc;tes d&rsquo;envergure</li>
		<li>Avoir de l&rsquo;exp&eacute;rience en ce qui concerne:
		<ul>
		<li>La collecte des donn&eacute;es</li>
		<li>La Collecte de donn&eacute;es sur support papier et de fa&ccedil;on &eacute;lectronique sur tablettes o La collecte de donn&eacute;es G&eacute;o-spatial o Avoir d&eacute;j&agrave; superviser des &eacute;quipes d&rsquo;enqu&ecirc;teurs&nbsp;</li>
		</ul>
		</li>
		</ul>
		<p style="text-align: justify;">Avoir une exp&eacute;rience dans le domaine &eacute;ducatif serait un atout.</p>
		<p style="text-align: justify;">&nbsp;</p>
		<p style="text-align: justify;"><strong>LE RECRUTEMENT: </strong></p>
		<p style="text-align: justify;">Le recrutement se fera en trois &eacute;tapes o Pr&eacute;s&eacute;lection sur dossier</p>
		<p style="text-align: justify;">o Interview o Test pratique</p>
		<p style="text-align: justify;">A chaque &eacute;tape seuls les candidats qualifi&eacute;s pour l&rsquo;&eacute;tape suivante seront contact&eacute;s.</p>
		<p style="text-align: justify;">&nbsp;</p>
		<p style="text-align: justify;">Les candidats int&eacute;ress&eacute;s sont pri&eacute;s d&rsquo;envoyer leur CV et leur lettre motivation par courriel &eacute;lectronique &aacute;&nbsp; adresse suivante : <u>sepimack@AdvoCareInnovate.com</u>&nbsp; au plus tard le 26 D&eacute;cembre 2017. Les candidatures re&ccedil;ues apr&egrave;s cette date ne seront pas consid&eacute;r&eacute;es</p>
		<p style="text-align: justify;">&nbsp;</p>
		<p style="text-align: justify;">NB : Les candidats qui postulent sont invit&eacute;s &agrave;&nbsp; indiquer dans l'objet du mail la province pour laquelle ils postulent. La pr&eacute;f&eacute;rence sera donn&eacute;e aux candidats r&eacute;sidants dans la province o&ugrave; il/elle postule. Il est vivement recommand&eacute; de postuler pour sa province de r&eacute;sidence.</p>
		<p style="text-align: justify;">&nbsp;</p>
		<p style="text-align: justify;">&nbsp;</p>
		<p style="text-align: right;">Fait &agrave; Kinshasa le 14/12/2017</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</div> -->	
	<!--==========================
      opportunities Section
    ============================-->
    <!--hide this content>
    <section id="opportunities" class="opportunities-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <ul id="opportunities-flters">
              <li data-filter=".filter-actu">ACTU</li>
              <li data-filter=".filter-closed">CLOSED</li>
              <li data-filter="*" class="filter-active">ALL</li>
            </ul>
          </div>
        </div>
</div> -->
        <!--hide this content>

<div class="row opportunities-container">
  <div id="current-offer" class="col-lg-4 col-md-6 opportunities-item filter-actu">
    <div class="">
      <div class="card">
        <div class="triangle-toplefton"> <span>ACTU</span> </div>
        <div class="card-header">
          <h4>AVIS DE RECRUTEMENT D’ENQUETEURS POUR CONSTITUTION DE BASE DE DONNEES EN COTE D’IVOIRE</h4>
        </div>
        <div class="card-body">
          <h5 class="card-title"> 
            <p>Date de clôture: <input type="" disabled value="02/12/2021" class="deadline" name=""></p>
          </h5>

          <div class="details">
            AdvoCare Innovate (ADCI) est un laboratoire de recherche indépendant dont 
            les experts ont cumulé plusieurs années d’expériences dans la conduite de projets de recherche 
            en sciences sociales et dans l’évaluation des projets et programmes. Son expertise le positionne 
            comme l’un des cabinets leader en matière de collecte de données et d’évaluation des projets ou programmes en Afrique.
            L’objectif ultime d’IHfRA est d’améliorer le bien-être des populations en orientant les décideurs dans leurs prises de décision
            &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal22">Lire la suite</span>
          </div>
        </div>

        <div class="card-footer">
          <p><a href="https://ADCI.surveycto.com/collect/base_enquet_ci?caseid="><button>Postuler</button></a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="current-offer" class="col-lg-4 col-md-6 opportunities-item filter-actu">
    <div class="">
      <div class="card">
        <div class="triangle-toplefton"> <span>ACTU</span> </div>
        <div class="card-header">
          <h4>AVIS DE CONSTITUTION  DE BASE DES AGENTS DE TERRAIN DANS TOUTES LES REGIONS DU BURKINA FASO</h4>
        </div>
        <div class="card-body">
          <h5 class="card-title"> 
            <p>Date de clôture: <input type="" disabled value="20/12/2021" class="deadline" name=""></p>
          </h5>

          <div class="details">
            AdvoCare Innovate (ADCI) est un laboratoire de recherche indépendant dont 
            les experts ont cumulé plusieurs années d’expériences dans la conduite de projets de recherche 
            en sciences sociales et dans l’évaluation des projets et programmes. Son expertise le positionne 
            comme l’un des cabinets leader en matière de collecte de données et d’évaluation des projets ou programmes en Afrique.
            L’objectif ultime d’IHfRA est d’améliorer le bien-être des populations en orientant les décideurs dans leurs prises de décision
            &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal21">Lire la suite</span>
          </div>
        </div>

        <div class="card-footer">
          <p><a href="https://ADCI.surveycto.com/collect/base_enquet_bf?caseid="><button>Postuler</button></a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="current-offer" class="col-lg-4 col-md-6 opportunities-item filter-closed">
    <div class="">
      <div class="card">
        <div class="triangle-topleft"> <span>CLOSED</span> </div>
        <div class="card-header">
          <h4>Internship Position, Benin/Burkina Faso/RD Congo</h4>
        </div>
        <div class="card-body">
          <h5 class="card-title"> 
            <p>Apply by: <input type="" disabled value="15/04/2021" class="deadline" name=""></p>
          </h5>

          <div class="details">
            The AdvoCare Innovate is an independent entity that conducts surveys, studies, 
            research and training across the African continent. Our multidisciplinary team of seasoned African experts, 
            with extensive country experience and top notch skills, is committed to producing quality data based 
            on international standards for evidence-based policies and operational solutions. We provide insights on 
            a myriad of sectors while taking into account cultural and geostrategic contexts as well as local markets’ maturity.
            &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal20">Lire la suite</span>
          </div>
        </div>

        <div class="card-footer">
          <p><a href="https://ADCI.surveycto.com/collect/recru_stage?caseid="><button>Postuler</button></a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="current-offer" class="col-lg-4 col-md-6 opportunities-item filter-closed">
    <div class="">
      <div class="card">
        <div class="triangle-topleft"> <span>CLOSED</span> </div>
        <div class="card-header">
          <h4>AVISO DE CONSTITUIÇÃO DE BÁSE DE AGENTES DE INQUIRIDORES E SUPERVISORES EM TODAS AS REGIÕES DA GUINÉ BISSAU</h4>
        </div>
        <div class="card-body">
          <h5 class="card-title"> 
            <p>Data de fecho: <input type="" disabled value="30/11/2020" class="deadline" name=""></p>
          </h5>

          <div class="details">
            AdvoCare Innovate (ADCI) é um laboratório de pesquisa
            independente, cujos especialistas acumularam vários anos de experiências na condução
            de projetos de pesquisa nas ciências sociais e na avaliação de projetos e programas.
            Sua experiência a posiciona como um de gabinetes líderes em matéria de coleta de
            dados e avaliação de projetos ou programas em África.
            &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal18">Lire la suite</span>
          </div>
        </div>

        <div class="card-footer">
          <p><a href="https://ADCI.surveycto.com/collect/base_enquet_bissau?caseid="><button>Postuler</button></a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="current-offer" class="col-lg-4 col-md-6 opportunities-item filter-closed">
    <div class="">
      <div class="card">
        <div class="triangle-topleft"> <span>CLOSED</span> </div>
        <div class="card-header">
          <h4>AVIS DE CONSTITUTION DE BASE DES AGENTS ENQUETEURS ET SUPERVISEURS DANS TOUTES LES REGIONS DU MALI</h4>
        </div>
        <div class="card-body">
          <h5 class="card-title"> 
            <p>DATE LIMITE <input type="" disabled value="30/11/2020" class="deadline" name=""></p>
          </h5>

          <div class="details">
            AdvoCare Innovate (ADCI) est un laboratoire de recherche indépendant 
            dont les experts ont cumulé plusieurs années d’expériences dans la conduite de projets de 
            recherche en sciences sociales et dans l’évaluation des projets et programmes. Son expertise 
            le positionne comme l’un des cabinets leader en matière de collecte de données et d’évaluation 
            des projets ou programmes en Afrique.
            &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal16">Lire la suite</span>
          </div>
        </div>

        <div class="card-footer">
          <p><a href="https://ADCI.surveycto.com/collect/base_enquet_mali?caseid="><button>Postuler</button></a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="current-offer" class="col-lg-4 col-md-6 opportunities-item filter-closed">
    <div class="">
      <div class="card">
        <div class="triangle-topleft"> <span>CLOSED</span> </div>
        <div class="card-header">
          <h4>AVIS DE RECRUTEMENT D’UN GESTIONNAIRE DE PROJET BURKINA FASO</h4>
        </div>
        <div class="card-body">
          <h5 class="card-title"> 
            <p>DATE LIMITE <input type="" disabled value="06/11/2020" class="deadline" name=""></p>
          </h5>

          <div class="details">
            AdvoCare Innovate (ADCI) est un laboratoire de recherche indépendant 
            dont les experts ont cumulé plusieurs années d’expériences dans la conduite de projets de 
            recherche en sciences sociales et dans l’évaluation des projets et programmes. Son expertise 
            le positionne comme l’un des cabinets leader en matière de collecte de données et d’évaluation 
            des projets ou programmes en Afrique.
            &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal16">Lire la suite</span>
          </div>
        </div>

        <div class="card-footer">
          <p><a href="https://ADCI.surveycto.com/collect/base_gestionnaire?caseid="><button>Postuler</button></a></p>
        </div>
      </div>
    </div>
  </div>

  <div id="current-offer" class="col-lg-4 col-md-6 opportunities-item filter-closed">
    <div class="">
      <div class="card">
        <div class="triangle-topleft"> <span>CLOSED</span> </div>
        <div class="card-header">
          <h4>AVIS DE RECRUTEMENT D’UN AGENT DE SANTE, SPECIALISTE EN SANTE PUBLIQUE BURKINA FASO</h4>
        </div>
        <div class="card-body">
          <h5 class="card-title"> 
            <p>DATE LIMITE <input type="" disabled value="06/11/2020" class="deadline" name=""></p>
          </h5>

          <div class="details">
            AdvoCare Innovate (ADCI) est un laboratoire de recherche indépendant 
            dont les experts ont cumulé plusieurs années d’expériences dans la conduite de projets de 
            recherche en sciences sociales et dans l’évaluation des projets et programmes. Son expertise 
            le positionne comme l’un des cabinets leader en matière de collecte de données et d’évaluation 
            des projets ou programmes en Afrique.
            &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal17">Lire la suite</span>
          </div>
        </div>

        <div class="card-footer">
          <p><a href="https://ADCI.surveycto.com/collect/base_ra_sante?caseid="><button>Postuler</button></a></p>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!--hide this content>
  <div id="current-offer" class="col-lg-4 col-md-6 opportunities-item filter-closed">
    <div class="">
      <div class="card">
        <div class="triangle-topleft"> <span>CLOSED</span> </div>
        <div class="card-header">
          <h4>AVIS DE CONSTITUTION  DE BASE DES AGENTS ENQUETEURS ET SUPERVISEURS DANS TOUTES LES REGIONS DU NIGER</h4>
        </div>
        <div class="card-body">
          <h5 class="card-title"> 
            <p>DATE LIMITE <input type="" disabled value="10/11/2020" class="deadline" name=""></p>
          </h5>

          <div class="details">
            AdvoCare Innovate (ADCI) est un laboratoire de recherche indépendant 
            dont les experts ont cumulé plusieurs années d’expériences dans la conduite de projets de 
            recherche en sciences sociales et dans l’évaluation des projets et programmes. Son expertise 
            le positionne comme l’un des cabinets leader en matière de collecte de données et d’évaluation 
            des projets ou programmes en Afrique.
            &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal15">Lire la suite</span>
          </div>
        </div>

        <div class="card-footer">
          <p><a href="https://ADCI.surveycto.com/collect/base_enquet_niger"><button>Postuler</button></a></p>
        </div>
      </div>
    </div>
  </div>

          <div id="current-offer" class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>(2) Research Assistants recruitment, Burkina Faso</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DATE LIMITE <input type="" disabled value="17/10/2020" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    The Research Associate will gain first-hand experience in an organization undertaking cutting-edge 
                    development research. The ideal candidate would be a self-starter whose responsibilities would 
                    include: managing critical high-level relationships with project stakeholders, designing survey 
                    questionnaires; running pilot exercises; refining study design and surveying instruments; hiring, 
                    training, and managing survey teams; checking and analyzing data.  
                    &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal14">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="https://ADCI.surveycto.com/collect/base_ra1?caseid"><button>Postuler</button></a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>AVIS DE RECRUTEMENT DES AGENTS ENQUETEURS ET SUPERVISEURS DANS TOUTES LES PROVINCES DE LA RDC </h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DATE LIMITE <input type="" disabled value="14/09/2020" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                  AdvoCare Innovate (ADCI) est un laboratoire de recherche indépendant dont les experts ont cumulé plusieurs années d’expériences dans la conduite de projets de recherche en sciences sociales et dans l’évaluation des projets et programmes.
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="https://ADCI.surveycto.com/collect/base_enquet_rdc?caseid="><button>Postuler</button></a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>Avis de recrutement d'un spécialiste dans la conduite des études mixtes qualitatives & quantitatives BURKINA FASO & BENIN</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DEADLINE <input type="" disabled value="10/08/2019" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    L’AdvoCare Innovate (ADCI) est un laboratoire de recherche indépendant dont les experts cumulent plusieurs années d’expériences dans la conduite de projets de recherche  en science sociale et dans l’évaluation des projets et programmes. &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal13">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="https://docs.google.com/forms/d/1DHocBYPemYlKlRdg6eAIXkURKTV_YvgA3jm1gMbcR1I/viewform?edit_requested=true"><button>Download</button></a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>Pré-sélection d’enquêteurs</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DEADLINE <input type="" disabled value="30/06/2019" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    Notre objectif en vous soumettant ce formulaire est de recueillir un minimum d'informations vous concernant, pour la mise en place d’une base de données de potentiels enquêteurs pour le compte d’ADCI RDC. Toutefois, ni le remplissage du formulaire, ni une invitation à participer à un entretien à la suite du remplissage de ce formulaire ne garantit l’admission du candidat. &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal12">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="https://docs.google.com/forms/d/1Qr_d1hBvEyRy-TM6qkaZzqD4eBj_657PpEQat0KvvaE/viewform?ts=5cf3864b&edit_requested=true"><button>Download</button></a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>Techniciens de laboratoire/ préleveurs (Num: 9731)</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DEADLINE <input type="" disabled value="08/03/2019" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    Dans la perspective de l’évaluation finale de la mise en œuvre du Plan Stratégique National 2013-2017, il est indispensable de disposer de données sérologiques et comportementales vis-à-vis du VIH au sein des groupes prioritaires. A cet effet, la Coordination Intersectorielle de lutte contre les IST/VIH/SIDA (CISLS) souhaite organiser la ... &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal10">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="https://nigeremploi.com/annonce.php?action=details&id=9731"><button>Download</button></a></p>
                </div>
              </div>
            </div>
          </div>
</div> -->
<!--hide this content>
          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>Laboratoire de premier niveau pour la sérologie VIH (Num: 9732)</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DEADLINE <input type="" disabled value="08/03/2019" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    Dans la perspective de l’évaluation finale de la mise en œuvre du Plan Stratégique National 2013-2017, il est indispensable de disposer de données sérologiques et comportementales vis-à-vis du VIH au sein des groupes prioritaires. A cet effet, la Coordination Intersectorielle de lutte contre les IST/VIH/SIDA (CISLS) souhaite organiser la ... &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal11">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="https://nigeremploi.com/annonce.php?action=details&id=9732"><button>Download</button></a></p>
                </div>
              </div>
            </div>
          </div>
</div> -->
<!-- hide this content>
          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>Enquêteurs et superviseurs locaux de l’enquête SSG/2019 (Num: 9733)</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DEADLINE <input type="" disabled value="08/03/2019" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    Dans la perspective de l’évaluation finale de la mise en œuvre du Plan Stratégique National 2013-2017, il est indispensable de disposer de données sérologiques et comportementales vis-à-vis du VIH au sein des groupes prioritaires. &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal9">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="https://nigeremploi.com/annonce.php?action=details&amp;id=9733"><button>Download</button></a></p>
                </div>
              </div>
            </div>
          </div>
</div> -->
<!--hide this content>
          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>Research Manager, West and Central Africa</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DEADLINE <input type="" disabled value="12/02/2019" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    The Research Manager will manage a portfolio of projects that include both evaluation and implementation components. They could span a range of technical areas in any of ADCI’s sectors of intervention. &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="../files/1.Research Manager-Post_19.pdf"><button>Download</button></a></p>
                </div>
              </div>
            </div>
          </div>
</div> -->
<!--hide this content>
          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>Research Manager, West and Central Africa</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DEADLINE <input type="" disabled value="12/02/2019" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    The Research Associate will gain first-hand experience in an organization undertaking cutting-edge development research. The ideal candidate would be a self-starter whose responsibilities would include: managing critical high-level relationships with project stakeholders. &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal2">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="../files/2.Research_Associate-Post_FIN.pdf"><button>Download</button></a></p>
                </div>
              </div>
            </div>
          </div>
</div> -->
          <!--hide this content>
          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>AVIS DE RECRUTEMENT DE COORDONATEURS DE TERRAIN BURKINA FASO & REPUBLIQUE DEMOCRATIQUE DU CONGO</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DEADLINE <input type="" disabled value="04/02/2019" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    A ADCI, nous utilisons des techniques innovatrices de recherche et d'évaluation pour aider les décideurs dans leur prise de décision. Nous avons des experts et des consultants chevronnés dans les secteurs tels que: l’Eau, la Santé, l’Assainissement. &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal3">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="../files/3.Field_managers_BF_and_RDC.pdf"><button>Download</button></a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>AVIS DE RECRUTEMENT D’AGENTS ENQUETEURS (QUANTITATIVE) REPUBLIQUE DEMOCRATIQUE DU CONGO</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DEADLINE <input type="" disabled value="06/02/2019" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    Les enquêteurs assureront la collecte des données de qualité suivant les instructions et les exigences de qualité spécifiées par ADCI. Plus précisément, le poste d’agent enquêteur impliquera les tâches suivantes. &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal4">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="../files/4.TdR_enquêteurs_MICSFIN.pdf"><button>Download</button></a></p>
                </div>
              </div>
            </div>
          </div>
</div> -->
          <!--hide this content>
          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>AVIS DE RECRUTEMENT D’AGENTS ENQUETEURS & DE SUPERVISEURS QUALITATIFS REPUBLIQUE DEMOCRATIQUE DU CONGO</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DEADLINE <input type="" disabled value="06/02/2019" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    Dans le cadre de l’étude qualitative, les enquêteurs assureront une collecte des données de qualité suivant les instructions et les exigences de qualité spécifiées par IHfRA. Plus précisément, le poste d’agent enquêteur impliquera les tâches suivantes. &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal13">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="../files/5.TdR_enquêteurs_superviseurs_QUALI.pdf"><button>Download</button></a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>Recrutement d’Enquêteurs et de Superviseurs pour la collecte de données sur l’électricité dans les ménages et entreprises du Bénin</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DEADLINE <input type="" disabled value="18/10/2018" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    En septembre 2015, le Millennium Challenge Corporation (MCC) s'est associé au gouvernement béninois pour mettre en œuvre le Bénin Power Compact. Un programme conçu pour moderniser le réseau électrique du Bénin, renforcer la compagnie d'électricité (SBEE), étendre l'accès à l'électricité et améliorer la qualité et la fiabilité du système énergétique à travers quatre projets. &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal6">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="../files/Appel_candidature_enqueteurs_FIDEXI_IHfRA.pdf"><button>Download</button></a></p>
                </div>
              </div>
            </div>
          </div>
          </div> -->
           <!--hide this content>
          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>Avis de recrutement d’enquêteurs pour le projet ACCELERE ! Activité 1</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DEADLINE <input type="" disabled value="26/12/2017" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    AdvoCare Innovate (ADCI) est un laboratoire d’étude et de recherche dont la vocation est la production de données fiables et de qualités, l’élaboration des rapports d’enquêtes socio-économiques et la réalisation d’études pertinentes afin d’appuyer les décideurs pour la prise de meilleures mesures. Nos partenaires sont les décideurs des secteurs privés. &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal7">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="../files/TdR_enquêteurs_Final.pdf"><button>Download</button></a></p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 opportunities-item filter-closed">
            <div class="">
              <div class="card">
                <div class="triangle-topleft"> <span>CLOSED</span> </div>
                <div class="card-header">
                  <h4>Avis de recrutement de superviseurs pour le projet ACCELERE ! Activité 1</h4>
                </div>
                <div class="card-body">
                  <h5 class="card-title"> 
                    <p>DEADLINE <input type="" disabled value="26/12/2017" class="deadline" name=""></p>
                  </h5>

                  <div class="details">
                    ACCELERE ! Activité 1 est une composante d'un programme conjoint de l’USAID et l'UKAID pour appuyer l’engagement du Gouvernement de la RDC à l'éducation de base gratuite et universelle et à l’amélioration des résultats d'apprentissage tels que formulés dans le plan d'enseignement intérimaire GDRC (IEP), la Stratégie dans le secteur de l'éducation ainsi que d'autres réformes et efforts dans le secteur &nbsp;&nbsp;&nbsp;<span class="suite" data-toggle="modal" data-target="#myModal8">Lire la suite</span>
                  </div>
                </div>

                <div class="card-footer">
                  <p><a href="../files/TdR_superviseurs.pdf"><button>Download</button></a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div> -->
    </section><!-- #opportunities -->
    

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
</footer><!-- #footer -->    </main>

	<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

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