<?php require_once('config.php'); ?>
 <!DOCTYPE html>
<html lang="en" class="" style="height: auto;">
<?php require_once('inc/header.php') ?>
  <body>

   <!-- Header
   ================================================== -->
   <header id="home">

      <nav id="nav-wrap">

         <ul id="nav" class="nav">
            <li class="current"><a class="smoothscroll" href="#home">Home</a></li>
            <li><a class="smoothscroll" href="#about">About</a></li>
           <li><a class="smoothscroll" href="#resume">Education & Experience </a></li>
            <li><a class="smoothscroll" href="#portfolio">Project Works</a></li>
            <li><a class="smoothscroll" href="#testimonials">My Extra Sides</a></li>
         </ul> <!-- end #nav -->

      </nav> <!-- end #nav-wrap -->

      <div class="row banner">
         <div class="banner-text">
            <h1 class="responsive-headline">I'm Thathsara Hewage</h1>
            <h3>Hello! I am a Software Engineering Undergraduate at Sri Lanka Institute of Information Technology.<h3>
               <br/><br/>
               <span>Software Engineering Undergraduate | Mobile App Development Enthusiast | Youtube Content Creator <br/> Video Presenter | Daily Learner | Tution Master
<span>
            <hr />
            <ul class="social">
               <li><a target="_blank" href="<?php echo $contact['facebook'] ?>"><i class="fa fa-facebook"></i></a></li>
               <li><a target="_blank" href="https://twitter.com/thathsarahewage"><i class="fa fa-twitter"></i></a></li>
               <li><a target="_blank" href="https://www.linkedin.com/in/thathsara-hewage"><i class="fa fa-linkedin"></i></a></li>
               <li><a target="_blank" href="https://www.instagram.com/_sathsa_ra/?hl=en"><i class="fa fa-instagram"></i></a></li>
               <li><a target="_blank" href="<?php echo $contact['youtube'] ?>"><i class="fa fa-youtube"></i></a></li>
               <li><a target="_blank" href="https://www.github.com/ThathsaraHewage"><i class="fa fa-github"></i></a></li>
            </ul>
         </div>
      </div>

      <p class="scrolldown">
         <a class="smoothscroll" href="#about"><i class="icon-down-circle"></i></a>
      </p>

   </header> <!-- Header End -->


   <!-- About Section
   ================================================== -->
   <section id="about">

      <div class="row">

         <div class="three columns">
            <img class="profile-pic" src="uploads/mylogo.png" style ="width:100% ; height:100%" alt="" />
         </div>

         <div class="nine columns main-col">

            <h2>About Me</h2>
            <style>
              #about_me *{
                color:#7A7A7A !important;
              }
            </style>
            <div id="about_me"><?php include "about.html"; ?></div>

            <div class="row">

               <div class="columns contact-details">

                  <h2><i class="fa fa-phone"></i>  Main Contact Details</h2>
                  <p class="address">
               <span>&bull; N.I.Thathsara Hewage</span><br>
               <span>&bull; 076 449 18 99</span><br>
                     <span>&bull; thathsara.hewage99@gmail.com</span> </br></br>
                     <a href="https://www.thathsaralive.blogspot.com"><span>thathsaralive.blogspot.com</span></a>
                     <a href="https://www.github.com/ThathsaraHewage"><span>github.com/ThathsaraHewage</span>
                     <a href="https://www.linkedin.com/in/thathsara-hewage"><span>linkedin.com/in/thathsara-hewage</span>
             </p>

               </div>

               <div class="columns download">
                  <p>
                     <a href="#" class="button"><i class="fa fa-phone"></i>Say Hi</a>
                  </p>
               </div>

            </div> <!-- end row -->

         </div> <!-- end .main-col -->

      </div>

   </section> <!-- About Section End-->


   <!-- Resume Section
   ================================================== -->
   <section id="resume">

      <!-- Education
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Education</span></h1>
         </div>

         <div class="nine columns main-col">
            <div class="row item">
               <div class="twelve columns">
                  <h3>Kingswood College Kandy, Sri Lanka</h3>
                  <p class="info">(G.C.E) Ordinary Level & (G.C.E) Advanced Level<span>&bull;</span> <em class="date">From 2010 to 2018 (Grade 6-13)</em></p>
                  <p>
                 Studied from grade 06 to 13 in Kingswood College. Also I was a member of the scout troop, Astronomical society , Chess troop , Table tennis troop, Art society.
                 In Advanced Level years I was the Secretary of the Kingswood Commerce Society so that I handled some major roles of EXITO 17 - Kingswood Commerce Day.
            </br>  </br>&bull;  9A's from Oradinary Level Examination 2015 ( Including ICT )</br>
            &bull; 3B's from Advanced Level Examination 2018 ( Commerce Stream ) </br>

                  </p>
               </div>
            </div> 
         </div> 

         <div class="nine columns main-col">
            <div class="row item">
               <div class="twelve columns">
                  <h3>Sri Lanka Institute of Information Technology</h3>
                  <p class="info">Bsc.(hons) Information Technology Spc. in Software Engineering<span>&bull;</span> <em class="date">From 2019 to 2023</em></p>
                  <p>
                 Currently studying in third year second semester , Faculty of Software Engineering. </br>
                 &bull; CGPA = 3.15 (After Y3S1) 
                  </p>
               </div>
            </div> 
         </div> 
      </div> <!-- End Education -->



      
      <!-- Experience
      ----------------------------------------------- -->
      <div class="row experience">

         <div class="three columns header-col">
            <h1><span>Experience</span></h1>
         </div>

         <div class="nine columns main-col">
            <div class="row item">
               <div class="twelve columns">
                  <h3>Omobio (pvt) Ltd.</h3>
                  <p class="info">Trainee Full Stack Developer<span>&bull;</span> <em class="date">From 2021 August (Present)</em></p>
                  <p>
               Currently working as a Trainee full stack developer at Omobio for full time.
         

                  </p>
               </div>
            </div> 
         </div>
      </div> <!-- End experience -->
      </br></br></br> 

        <!-- Certifications
      ----------------------------------------------- -->
      <div class="row education">

         <div class="three columns header-col">
            <h1><span>Certifications</span></h1>
         </div>

         <div class="nine columns main-col">
            <div class="row item">
               <div class="twelve columns">
                  <h3>Microsoft Office Package Assistant</h3>
                  <p class="info">Dreampus.Inc<span>&bull;</span> <em class="date">From 2020</em></p>
                  <p>
           

                  </p>
               </div>
            </div> 
         </div> </br></br></br> </br></br></br>

      <!-- Skills
      ----------------------------------------------- -->
      <div class="row skill">

         <div class="three columns header-col">
            <h1><span>Skills</span></h1>
         </div>

         <div class="nine columns main-col">

            <p>I am familiar with below technologies, Frameworks and Environments, currently improving my skills through these also. </br>
            &bull; HTML | C | Java | JavaScript | Python | Nodejs | Express | ReactJS | PHP </br> 
            &bull; MongoDB | SQL | MYsql | FireBase </br>
            &bull; Android Studio | VScode | Eclipse | Webstorms | PyCharm</br>
            &bull; RestfulAPI | Web technologies | JSON | XML | Github</br>

          </br></br>
          Currently Studying : Flutter | ReactNative | OracleDB | Angular | .Net
            </p>

        <div class="bars">
           <ul class="skills">
             <li><span class="bar-expand css"></span><em>C</em></li>
             <li><span class="bar-expand photoshop"></span><em>Java</em></li>
             <li><span class="bar-expand illustrator"></span><em>M.E.R.N. </em></li>
             <li><span class="bar-expand wordpress"></span><em>Python</em></li>
             <li><span class="bar-expand jquery"></span><em>PHP</em></li>
          </ul>
        </div>
      </div> 
      </div> 
   </section>


   <!-- Portfolio Section
   ================================================== -->
   <section id="portfolio">

      <div class="row">

         <div class="twelve columns collapsed">

            <h1>Check Out Some of My Works.</h1>

   <!-- portfolio-wrapper 01 -->
                              <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">
                                 <div class="columns portfolio-item">
                                    <div class="item-wrap">

                                       <a href="#modal-1" title="">
                                          <img alt=""  src="./uploads/hotelM.jpg">
                                          <div class="overlay">
                                             <div class="portfolio-item-meta">
                                             <h5 class="truncate-1">HOTEL MANAGEMENT SYSTEM</h5>
                                          </div>
                                          </div>
                                          <div class="link-icon"><i class="icon-plus"></i></div>
                                       </a>
                                    </div>
                                 </div> <!-- item end -->

                              </div> 
                  <!-- portfolio-wrapper 01 end -->

              
<!-- Modal 01 Popup
                        --------------------------------------------------------------- -->

                        <div id="modal-1" class="popup-modal mfp-hide">
                           <img class="scale-with-grid" src="./uploads/hotelM.jpg" alt="" />

                           <div class="description-box">
                              <h4>HOTEL MANAGEMENT SYSTEM</h4>
                              <p>This is Second year 1st semester OOP modules project. There was 4 group members and we had to finalize the project within 3 months.
                                 HTML, JavaScript, Java, Boostrap, MYsql was used as the main technology stacks. While covid-19 pandemic situation we used MS teams and Github for
                                 collaboration purposes. 
                              </p>
                           </div>

                           <div class="link-box">
                           <a class="popup-modal-dismiss">Exit</a>
                           </div>
                     </div>
<!-- -----------------------------------------------------------------------------------modal-01 End -->


      <!-- portfolio-wrapper 02 -------------------------------------------------------------------------->
                          <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">
                                 <div class="columns portfolio-item">
                                    <div class="item-wrap">

                                       <a href="#modal-2" title="">
                                          <img alt=""  src="./uploads/tutoring.png">
                                          <div class="overlay">
                                             <div class="portfolio-item-meta">
                                             <h5 class="truncate-1">ONLINE TUTORING SYSTEM</h5>
                                          </div>
                                          </div>
                                          <div class="link-icon"><i class="icon-plus"></i></div>
                                       </a>
                                    </div>
                                 </div> <!-- item end -->

                              </div> 
                  <!-- portfolio-wrapper 02 end -->

                <!-- Modal 02 Popup --------------------------------------------------------------- -->

                        <div id="modal-2" class="popup-modal mfp-hide">

                        <img class="scale-with-grid" src="./uploads/tutoring.png" alt="" />

                        <div class="description-box">
                           <h4>ONLINE TUTORING SYSTEM</h4>
                           <p>This is Second year 2nd semester ITP module project. There was 8 group members and we had to finalize the project within 4 months.
                                 HTML, JavaScript, Java, Boostrap, MYsql was used as the main technology stacks. While covid-19 pandemic situation we used MS teams and Github for
                                 collaboration purposes. Actually this project was a seperate module so that I experienced a real project environment. 
                              </p>
                     
                        </div>

                           <div class="link-box">
                           <a class="popup-modal-dismiss">Exit</a>
                           </div>

                     </div>
<!-- -----------------------------------------------------------------------------------modal-02 End -->




      <!-- portfolio-wrapper 02 -------------------------------------------------------------------------->
      <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">
                                 <div class="columns portfolio-item">
                                    <div class="item-wrap">

                                       <a href="#modal-3" title="">
                                          <img alt=""  src="./uploads/viewaf.png">
                                          <div class="overlay">
                                             <div class="portfolio-item-meta">
                                             <h5 class="truncate-1">ONLINE CONFERENCE MANAGEMENT SYSTEM</h5>
                                          </div>
                                          </div>
                                          <div class="link-icon"><i class="icon-plus"></i></div>
                                       </a>
                                    </div>
                                 </div> <!-- item end -->

                              </div> 
                  <!-- portfolio-wrapper 02 end -->

                <!-- Modal 02 Popup --------------------------------------------------------------- -->

                        <div id="modal-3" class="popup-modal mfp-hide">

                        <img class="scale-with-grid" src="./uploads/viewaf.png" alt="" />

                        <div class="description-box">
                           <h4>ONLINE CONFERENCE MANAGEMENT SYSTEM</h4>
                           <p>This is Third year 1nd semester AF module project.A conference management tool for ICAF- International Conference on Application Framework. There was 4 group members but I handled the most important parts in the system and we had to finalize the project within 4 months.
                                 MongoDB, Express, ReactJS, NodeJS (MERN) was used as the main technology stack. While covid-19 pandemic situation we used MS teams and Github for
                                 collaboration purposes. Actually this project was a absoultely a new challenge for me. I learnt so many new things and concepts in Full stack development. 
                              </p>
                     
                        </div>

                           <div class="link-box">
                           <a class="popup-modal-dismiss">Exit</a>
                           </div>

                     </div>
<!-- -----------------------------------------------------------------------------------modal-02 End -->



      <!-- portfolio-wrapper 02 -------------------------------------------------------------------------->
      <div id="portfolio-wrapper" class="bgrid-quarters s-bgrid-thirds cf">
                                 <div class="columns portfolio-item">
                                    <div class="item-wrap">

                                       <a href="#modal-4" title="">
                                          <img alt=""  src="./uploads/shop.png">
                                          <div class="overlay">
                                             <div class="portfolio-item-meta">
                                             <h5 class="truncate-1">ONLINE SHOPPING PLATFORM</h5>
                                          </div>
                                          </div>
                                          <div class="link-icon"><i class="icon-plus"></i></div>
                                       </a>
                                    </div>
                                 </div> <!-- item end -->

                              </div> 
                  <!-- portfolio-wrapper 02 end -->

                <!-- Modal 02 Popup --------------------------------------------------------------- -->

                        <div id="modal-4" class="popup-modal mfp-hide">

                        <img class="scale-with-grid" src="./uploads/shop.png" alt="" />

                        <div class="description-box">
                           <h4>ONLINE SHOPPING PLATFORM</h4>
                           <p>This is Third year 1nd semester ds module project.This is a online shopping platform for cameras and camera accesories. There was 4 group members but I handled the most important parts in the system and we had to finalize the project within 4 months.
                                 MongoDB, Express, ReactJS, NodeJS (MERN) and Redux was used as the main technology stack. While covid-19 pandemic situation we used MS teams and Github for
                                 collaboration purposes. Actually this project was a absoultely a new challenge for me. I learnt so many new things and concepts in Full stack development. 
                              </p>
                     
                        </div>

                           <div class="link-box">
                           <a class="popup-modal-dismiss">Exit</a>
                           </div>

                     </div>
<!-- -----------------------------------------------------------------------------------modal-02 End -->

</div> <!-- twelve columns end -->
</div> <!-- row End -->
</section> <!-- Portfolio Section End-->





   <!-- Testimonials Section
   ================================================== -->
   <section id="testimonials">

      <div class="text-container">

         <div class="row">

            <div class="two columns header-col">

               <h1><span>My Extra Sides</span></h1>

            </div>

            <div class="ten columns flex-container">

               <div class="flexslider">

                  <ul class="slides">

                     <li>
                        <blockquote>
                           <p>
                              Youtube Tech Contect Creator 
                           </p>
                           <cite>Since 2020 - youtube.com/c/SathsaRaonyoutube</cite>
                        </blockquote>
                     </li> <!-- slide ends -->

                     <li>
                        <blockquote>
                           <p>
                              Video Presenter
                           </p>
                           <cite>Since 2020</cite>
                        </blockquote>
                     </li> <!-- slide ends -->

                     <li>
                        <blockquote>
                           <p>
                              Tution Master ( Individual & Group )
                           </p>
                           <cite>Since 2020 - Conducting individual and Group Classes from grade 06 to 11 </cite>
                        </blockquote>
                     </li> <!-- slide ends -->
                     <li>
                        <blockquote>
                           <p>
                              Freelancer and Founder of FROYO DESIGNS
                           </p>
                           <cite>Since 2020 - froyodesigns.business.site</cite>
                        </blockquote>
                     </li> <!-- slide ends -->


                  </ul>

               </div> <!-- div.flexslider ends -->

            </div> <!-- div.flex-container ends -->

         </div> <!-- row ends -->

       </div>  <!-- text-container ends -->

   </section> <!-- Testimonials Section End-->


  
      <!-- /.content-wrapper -->
      <?php require_once('inc/footer.php') ?>
  </body>
</html>
