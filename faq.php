<?php
if (!file_exists("Inc/Osotech.php")){
    die("Access to this Page is Denied! <p>Please Contact Your Administrator for assistance</p>");
}
require_once ("Inc/Osotech.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> </title>
     <?php include ("Templates/MetaTag.php");?>
    <?php include ("Templates/HeaderScript.php");?>
</head>
<body class="defult-home">

<!--Preloader area start here-->
<?php include_once ("Templates/Preloader.php");?>
<!--Preloader area End here-->

<!-- Main content Start -->
<div class="main-content">
	<!--Full width header Start-->
	<div class="full-width-header home8-style4 main-home">
		<!--Header Start-->
		<header id="rs-header" class="rs-header">
			<!-- Menu Start -->
        <?php include_once ("Templates/Header.php");?>
			<!-- Canvas Menu end -->
		</header>
		<!--Header End-->
	</div>
	<!--Full width header End-->

        <!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/breadcrumbs/2.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text white-color">
                    <h1 class="page-title">Faq</h1>
                    <ul>
                        <li>
                            <a class="active" href="./">Home</a>
                        </li>
                        <li>Faq Us</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <div class="rs-faq-part orange-color pt-100 pb-100 md-pt-70 md-pb-70">
                 <div class="container">
                     <div class="content-part mb-50 md-mb-30">
                         <div class="title mb-40 md-mb-15">
                        <!-- <h3 class="text-part">Admission Into Junior Classes</h3> -->
                             
                         </div>
                         <div id="accordion" class="accordion">
                            
                            <div class="card">
                                <div class="card-header">
                                    <a class="card-link" data-toggle="collapse" href="#collapseOne">What does it take to gain admission into Smapp High School?</a>
                                </div>
                                <div id="collapseOne" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                       <ul>

                                           <li>
                                             1.  Obtain an admission form of 10 thousand naira (10,000) from the school or download from the internet on the school website.  
                                           </li>
                                           <li>2.  Submit admission form with 4 passport photographs, photocopies of birth certificate and 3 last results from previous school.</li>
                                           <li>
                                             3.   Write entrance extermination in the school on a scheduled date. The examination will last for 3 hours, 3 subjects to be written, Mathematics, English and General paper ( 1 hour for each subject)  
                                           </li>
                                           <li>
                                               4.  An oral interview follows immediately after the written extermination.
                                           </li>
                                           <h3>Other examination centres outside the school are;</h3>
                                           <li>PortHarcourt- Montessori International School, 58, king Perekule Street GRA phase 11 Portharcourt.</li>
                                           <li>Warri-Lakeland Selini Ogunnu, Warri Delta.</li>
                                           <li>Eket-Ideal Preparatory School, 25 SDP Road, Eket Akwa-Ibom State.</li>

                                       </ul>
                                    
                                    </div>
                                </div>
                            </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwoFive" aria-expanded="false">Can school fees be paid in installments?</a>
                                 </div>
                                 <div id="collapseTwoFive" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                       Yes it can. However, only for existing parents, new parents are required to pay the registration fee, pay for uniforms and full first term fees first.
                                     </div>
                                 </div>
                             </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">What time does the school open for the day?</a>
                                 </div>
                                 <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                        Monday – Friday 7:30am – 4:00pm

                                        Saturday and Sunday   –  Closed
                                     </div>
                                 </div>
                             </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">Is the School a Boarding or a Day School?</a>
                                 </div>
                                 <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                         Emerald High school is a full boarding school.
                                     </div>
                                 </div>
                             </div>
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreew" aria-expanded="false">Is the school a Girls or Boys school?</a>
                                 </div>
                                 <div id="collapseThreew" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                        It’s a co-educational school (for boys and girl.)
                                     </div>
                                 </div>
                             </div>

                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreef" aria-expanded="false">What curriculum do you operate?</a>
                                 </div>
                                 <div id="collapseThreef" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                         WWe operate British and Nigerian curriculum, We also prepare candidates for Scholastic Aptitude Test (SAT) and Test of English as Foreign Language (TOEFL)
                                     </div>
                                 </div>
                             </div>

                             <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreet" aria-expanded="false">When was the school established?</a>
                                 </div>
                                 <div id="collapseThreet" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                         The school was established in 2005.
                                     </div>
                                 </div>
                             </div>
                             <!--  -->

                              <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreex" aria-expanded="false">How many arms of classes does the school have?</a>
                                 </div>
                                 <div id="collapseThreex" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                         We have four arms in all the classes with an average of 30 Students per class.
                                     </div>
                                 </div>
                             </div>
                             <!--  -->
                              <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree1" aria-expanded="false">Describe the school location or site.</a>
                                 </div>
                                 <div id="collapseThree1" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                         Smapp High school is located at Kilometer 42 along Lagos/Ibadan expressway, opposite Deeper Life Conference Centre, on the outskirts of Lagos
                                     </div>
                                 </div>
                             </div>
                             <!--  -->
                              <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreeb" aria-expanded="false">What kind of religion does the school practice?</a>
                                 </div>
                                 <div id="collapseThreeb" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                        The school is a Christian school but admits candidates of various religious backgrounds. There are opportunities for pupils to attend Catholic mass and Pentecostal assembly in the school.
                                     </div>
                                 </div>
                             </div>
                             <!--  -->
                              <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreet100" aria-expanded="false">What facilities does the school have?</a>
                                 </div>
                                 <div id="collapseThreet100" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                         WWThe school has Interactive boards in all the class rooms , an ICT and Microsoft suite, well-equipped library and laboratories, a school Heath Centre, an art studio, a music room, vocational training school (tailoring, photography, video editing, bead & hat making, barbing & hairdressing and cosmetics)   and a monogramming centre etc.
                                     </div>
                                 </div>
                             </div>
                             <!--  -->
                              <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreet23" aria-expanded="false">What kind of sporting activities does the school participate in or engage in?</a>
                                 </div>
                                 <div id="collapseThreet23" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">

                                         We have volley ball, basketball, soccer, table tennis, swimming, indoor games, field and track events etc.
                                     </div>
                                 </div>
                             </div>
                             <!--  -->

                               <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreet234" aria-expanded="false">What is the minimum age requirement for enrolling children in Smapp Schools?</a>
                                 </div>
                                 <div id="collapseThreet234" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                       
                                        At our nursery level, children are admitted into Pre-School 1 from 15 months old, while those of Reception 1 are admitted from age 3. Year 1 pupils are admitted from age 5 or 6. For our secondary schools, prospective learners are expected to have completed year six or at least attained the age of 10 in year 5.

Please note: We do not admit pupils and students into Years 6, 9 and 12, as these are terminal classes. However, exceptions apply for applicants emigrating from outside Nigeria OR Lagos state (with proof).
                                     </div>
                                 </div>
                             </div>
                             <!--  -->
                              <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreetx" aria-expanded="false">What kind of meals are they fed with?</a>
                                 </div>
                                 <div id="collapseThreetx" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                        A mixture of continental and African dishes like fried rice and chicken with salads, rice with chicken soup, Jellof rice with chicken or fish, beans porridge with plantain, eba and soup, cereals, beverages, bread and burgers.
                                     </div>
                                 </div>
                             </div>
                             <!--  -->
                              <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreet" aria-expanded="false">How do the students do their laundry?</a>
                                 </div>
                                 <div id="collapseThreet" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                         WThe students do their laundry themselves. They are taught to do so during orientation periods but all blazers and duvets are dry cleaned by their parents
                                     </div>
                                 </div>
                             </div>
                             <!--  -->
                              <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreetz" aria-expanded="false">What level of medical care does the school offer?</a>
                                 </div>
                                 <div id="collapseThreetz" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                        We give primary and secondary health care services but liaise with standard hospitals closet to the school for higher medical attention.
                                     </div>
                                 </div>
                             </div>
                             <!--  -->

                              <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreetz1" aria-expanded="false"> When is the school visiting day? </a>
                                 </div>
                                 <div id="collapseThreetz1" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                        Visiting day is every last Sunday of the month.
                                     </div>
                                 </div>
                             </div>
                             <!--  -->
                              <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreetzx" aria-expanded="false">Does the school observe public holidays?</a>
                                 </div>
                                 <div id="collapseThreetzx" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                        The school observes public holidays but the students are not allowed to go home if the school is in session.
                                     </div>
                                 </div>
                             </div>
                             <!--  -->
                              <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreetz4" aria-expanded="false">How is the hostel accommodation?</a>
                                 </div>
                                 <div id="collapseThreetz4" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                        The school has junior and senior hostels for both boys and girls; they are well ventilated and have good toilet facilities, with treated water.
                                     </div>
                                 </div>
                             </div>
                             <!--  -->
                              <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreetzv" aria-expanded="false">How Secured is the school environment?</a>
                                 </div>
                                 <div id="collapseThreetzv" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                       The school is well fenced, with security guards and gadgets all around the premises; We have installed modern security gadgets and have put optimal security measures in place.
                                     </div>
                                 </div>
                             </div>
                             <!--  -->
                              <!--  -->
                              <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseThreetz" aria-expanded="false">When is the entrance examination?</a>
                                 </div>
                                 <div id="collapseThreetz" class="collapse" data-parent="#accordion" style="">
                                     <div class="card-body">
                                       First Batch/Scholarship Entrance examination into Year 7, 8, 9 & 10 for 2021/2022 Academic Session is on Saturday 29th of January 2022, Time 9am prompt at our exam centres  in Ogun, Lagos, Warri, Port Harcourt, and Abuja.

Second Batch Entrance examination into Year 7, 8, 9 & 10 for 2021/2022 Academic Session is on Saturday 12th of March 2022, Time 9am prompt at our exam centres  in Ogun, Lagos, Warri, Port Harcourt, and Abuja.  
                                     </div>
                                 </div>
                             </div>
                             <!--  -->
                             <div class="card">
                                 <div class="card-header">
                                     <a class="card-link collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false">Requirement for admission?</a>
                                 </div>
                                 <div id="collapseFour" class="collapse" data-parent="#accordion2" style="">
                                     <div class="card-body">
                                         <ul style="list-style:disc; font-size: 20px;">
                                             <li>Inquiry by Parents / Guardians</li>
                                             <li>Purchase of form / prospectus</li>
                                             <li>Submission of completed application form with 2 passport size photographs, photocopy of birth certificate and last school’s result</li>
                                             <li>Conducting of placement test / entrance examination</li>
                                             <li>Collection of admission file for the class being admitted into</li>
                                             <li>Submission of teller for payment of school fees and completed medical form</li>
                                             <li>Collection of school fees receipt</li>
                                             <li>Issuance of uniform, letter of authority and other relevant material before resumption</li>
                                             <li>School begins</li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                   
                    
                     
                 </div>
            </div>

	        <!-- Newsletter section start -->
            <?php include_once ("Templates/NewsletterForm.php");?>
	        <!-- Newsletter section end -->
        </div>
	<!-- Main content End -->
	<!-- Footer Start -->
	<footer id="rs-footer" class="rs-footer home9-style main-home">
      <?php include_once ("Templates/Footer.php");?>
	</footer>
	<!-- Footer End -->
	<!-- Search Modal Start -->
    <?php include_once ("Templates/SearchBar.php") ?>
	<!-- Search Modal End -->
    <?php include_once ("Templates/FooterScript.php") ?>
</body>
</html>