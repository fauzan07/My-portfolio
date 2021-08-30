<?php 
    require("include-link.php");
   ?>
  
  <!-- banner start -->
  <section id="home" class="banner">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-10 col-lg-10">
                <h3><span class="text-info">Fauzan Falke</span> ( )</h3>
                <h1>{<span class="text-success">Fullstack </span><span style="color:#99003d">Developer</span>}</h1>
                <h5 class="text-warning">who focuses on writing clean, elegant and efficent code.</h5>
              </div>
          </div>
      </div>
  </section>
   <!-- banner end -->

   <?php 
    require("header.php");
   ?>

<!-- about start -->
  <section id="about-me" class="about py-5">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-12 text-center">
                <h1><-<span class="code-color">About Me</span>-/></h1>
              </div>
          </div>
          <div class="row justify-content-center py-4">
          <div class="col-md-12  col-lg-5 text-center pt-4 about-img">
                <img src="images/mypic1.jpg" alt="Responsive image" width="380" height="500">
              </div>
              <div class="col-md-12 offset-lg-1 col-lg-6 pt-4">
              <h5 class="pb-4">A Few Words About Me</h5>
                <p>I am an experienced Full Stack Developer with a demonstrated history of working in the software industry. 
                    I have graduated as a Bachelor of Engineering in Electronics & telecommunication from Mumbai University. My strengths lie in Web development, front-end/back-end web, database/server management. I am also passionate about Drawing, Painting and photography.</p>
                <a href="pdf/FauzanCv.pdf" class="main-button web-btn mt-4" download>Download Resume</a>
            </div>
            
          </div>
      </div>
  </section>
<!-- about end -->

<!-- skill start -->
  <section id="my-skill" class="skills bg-light py-5">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-10 text-center">
                <h1><-<span class="code-color">My Skills</span>-/></h1>
              </div>
          </div>
          <div class="row justify-content-center py-4">
              <div class="col-md-4 col-lg-3 pt-4">
              <div class="code-logo border rounded shadow p-4 text-center bg-white">
              <img src="images/react-logo.png" width="200" alt="logo">
              </div>
              </div>
              <div class="col-md-4 col-lg-3 pt-4">
                  <div class="code-logo border rounded shadow p-4 text-center bg-white">
                <img src="images/js-logo.png" width="200" alt="logo">
              </div>
              </div>
              <div class="col-md-4 col-lg-3 pt-4">
                  <div class="code-logo border rounded shadow p-4 text-center bg-white">
                <img src="images/bootstrap-logo.png" width="200" alt="logo">
              </div>
              </div>
              <div class="col-md-4 col-lg-3 pt-4">
                  <div class="code-logo border rounded shadow p-4 text-center bg-white">
                <img src="images/sass-logo.png" width="200" alt="logo">
              </div>
              </div>
              <div class="col-md-4 col-lg-3 pt-4">
                  <div class="code-logo border rounded shadow p-4 text-center bg-white">
                <img src="images/html-logo.png" width="200" alt="logo">
              </div>
            </div>              
            <div class="col-md-4 col-lg-3 pt-4">
                  <div class="code-logo border rounded shadow p-4 text-center bg-white">
                <img src="images/css-logo.png" width="140" alt="logo">
              </div>
              </div>
              <div class="col-md-4 col-lg-3 pt-4">
                  <div class="code-logo border rounded shadow p-4 text-center bg-white">
                <img src="images/sql-logo.png" width="200" alt="logo">
              </div>
              </div>
              <div class="col-md-4 col-lg-3 pt-4">
                  <div class="code-logo border rounded shadow p-4 text-center bg-white">
                <img src="images/php-logo.png" width="140" alt="logo">
              </div>
              </div>

          </div>
      </div>
  </section>
   <!-- skill end -->

   <section id="my-work" class="about_company_profile py-5">
    <div class="container">
    <div class="row justify-content-center">
              <div class="col-md-10 text-center">
                <h1><-<span class="code-color">My Work</span>-/></h1>
              </div>
          </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mt-4">
                    <hr>
                </div>
                <div class="middle-nav py-2">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-Details-tab" data-toggle="pill" href="#pills-Details"
                                role="tab" aria-controls="pills-home" aria-selected="true">All Projects</a>
                        </li>
                        <li class="nav-item spacing-left">
                            <a class="nav-link" id="pills-Specs-tab" data-toggle="pill" href="#pills-Specs" role="tab"
                                aria-controls="pills-profile" aria-selected="false">HTML/Bootstrap</a>
                        </li>
                        <li class="nav-item spacing-left">
                            <a class="nav-link" id="pills-Advantages-tab" data-toggle="pill" href="#pills-Advantages"
                                role="tab" aria-controls="pills-contact" aria-selected="false">Js/React.js</a>
                        </li>
                        <li class="nav-item spacing-left">
                            <a class="nav-link" id="pills-Uses-tab" data-toggle="pill" href="#pills-Uses" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Php/Dashboards</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-Details" role="tabpanel"
                        aria-labelledby="pills-Details-tab">
                        <div class="row">
		                <div class="col-md-12 col-lg-12">
                        <ul class="row list-unstyled">
                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://netflix-clone1.herokuapp.com/" target="blank">
                                    <img  src="images/netflix-img.png" class="img-fluid img-thumbnail" alt="netflix-clone"  />
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

				        	<li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://fauzan07.github.io/zomato-replica/" target="blank">
                                    <img  src="images/zomato.png" class="img-fluid img-thumbnail" alt="zomato-replica"  />
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://newseedkaro.herokuapp.com/" target="blank">
                                    <img  src="images/seedkro-img.png" class="img-fluid img-thumbnail" alt="seedkro"  />
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>
                            
	      		        	<li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://stack-web.herokuapp.com/" target="blank">
                                    <img  src="images/stack.png" class="img-fluid img-thumbnail" alt="stack-landing" />
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>
                            
	      		        	<li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://bonanza-web.herokuapp.com/" target="blank">
                                    <img  src="images/bonanza.png" class="img-fluid img-thumbnail" alt="bonanza-landing" />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://falke-enterprices.herokuapp.com/" target="blank">
                                    <img  src="images/falke-entrprices.png" class="img-fluid img-thumbnail" alt="falke-enterprices"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>
                            
	      		        	<li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://kandi-web.herokuapp.com/" target="blank">
                                    <img  src="images/kandi.png" class="img-fluid img-thumbnail" alt="kandi"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://morgan-web.netlify.app" target="blank">
                                    <img  src="images/react-website.png" class="img-fluid img-thumbnail" alt="react-website"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>
                            
                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://doctor-appoinment-app.netlify.app/" target="blank">
                                    <img  src="images/dr-app.png" class="img-fluid img-thumbnail" alt="dr-app"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://webinar-invitation.herokuapp.com/" target="blank">
                                    <img  src="images/webinar.png" class="img-fluid img-thumbnail" alt="webinar"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>
                            
                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://fauzan07.github.io/food-recipe-app/" target="blank">
                                    <img  src="images/recipe-app.png" class="img-fluid img-thumbnail" alt="recipe-app"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>
                            
                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://weather-application1.netlify.app/" target="blank">
                                    <img  src="images/weather-app.png" class="img-fluid img-thumbnail" alt="weather-app"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://react-crud-dashboard.netlify.app" target="blank">
                                    <img  src="images/react-crude.png" class="img-fluid img-thumbnail" alt="react-crud"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://todo2-app.netlify.app/" target="blank">
                                    <img  src="images/todo-app.png" class="img-fluid img-thumbnail" alt="todo-app"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
	                    	</li>
                            
                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://financial-portfolio-tracker-app.netlify.app/" target="blank">
                                    <img  src="images/finantional-portfolio.png" class="img-fluid img-thumbnail" alt="finantional-protfolio"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://pro-organizer-app.netlify.app/" target="blank">
                                    <img  src="images/pro-organizer.png" class="img-fluid img-thumbnail" alt="pro-organizer"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
	                    	</li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow" id="lightgallery1">
                                    <a href="images/lead-db-login.png" >
                                    <a href="images/lead-db-view2.png" >
                                    <a href="images/lead-db-report.png">
                                    <a href="images/lead-db-report1.png">
                                    <a href="images/lead-db-changepw.png">
                                    <a href="images/lead-db-support.png">
                                    <a href="images/lead-detail.png">
                                    <img  src="images/lead-db-view.png" class="img-fluid img-thumbnail" alt="lead-dashboard"  />
                                    <div class="overlay rounded"></div>
                                    </a>
                                    </a>
                                    </a>
                                    </a>
                                    </a>
                                    </a>
                                    </a>
	        		            </div>
                            </li>
	      		 
	      		     
                         </ul>
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-Specs" role="tabpanel" aria-labelledby="pills-Specs-tab">
                       <div class="row">
		                <div class="col-md-12 col-lg-12">
                        <ul class="row list-unstyled">
                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://netflix-clone1.herokuapp.com/" target="blank">
                                    <img  src="images/netflix-img.png" class="img-fluid img-thumbnail" alt="netflix-clone"  />
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

				        	<li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://fauzan07.github.io/zomato-replica/" target="blank">
                                    <img  src="images/zomato.png" class="img-fluid img-thumbnail" alt="zomato-replica"  />
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://newseedkaro.herokuapp.com/" target="blank">
                                    <img  src="images/seedkro-img.png" class="img-fluid img-thumbnail" alt="seedkro"  />
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

	      		        	<li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://stack-web.herokuapp.com/" target="blank">
                                    <img  src="images/stack.png" class="img-fluid img-thumbnail" alt="stack-landing" />
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>
                            
	      		        	<li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://bonanza-web.herokuapp.com/" target="blank">
                                    <img  src="images/bonanza.png" class="img-fluid img-thumbnail" alt="bonanza-landing" />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://falke-enterprices.herokuapp.com/" target="blank">
                                    <img  src="images/falke-entrprices.png" class="img-fluid img-thumbnail" alt="falke-enterprices"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>
                            
	      		        	<li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://kandi-web.herokuapp.com/" target="blank">
                                    <img  src="images/kandi.png" class="img-fluid img-thumbnail" alt="kandi"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://webinar-invitation.herokuapp.com/" target="blank">
                                    <img  src="images/webinar.png" class="img-fluid img-thumbnail" alt="dr-app"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                         </ul>
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-Advantages" role="tabpanel" aria-labelledby="pills-Advantages-tab">
                         <div class="row">
		                <div class="col-md-12 col-lg-12">
                        <ul class="row list-unstyled">
                            
                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://morgan-web.netlify.app" target="blank">
                                    <img  src="images/react-website.png" class="img-fluid img-thumbnail" alt="react-website"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://doctor-appoinment-app.netlify.app/" target="blank">
                                    <img  src="images/dr-app.png" class="img-fluid img-thumbnail" alt="dr-app"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>
                            
                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://fauzan07.github.io/food-recipe-app/" target="blank">
                                    <img  src="images/recipe-app.png" class="img-fluid img-thumbnail" alt="recipe-app"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>
                            
                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://weather-application1.netlify.app/" target="blank">
                                    <img  src="images/weather-app.png" class="img-fluid img-thumbnail" alt="weather-app"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://react-crud-dashboard.netlify.app" target="blank">
                                    <img  src="images/react-crude.png" class="img-fluid img-thumbnail" alt="react-crud"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>

                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://todo2-app.netlify.app/" target="blank">
                                    <img  src="images/todo-app.png" class="img-fluid img-thumbnail" alt="tod-app"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
	                    	</li>
                            
                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://financial-portfolio-tracker-app.netlify.app/" target="blank">
                                    <img  src="images/finantional-portfolio.png" class="img-fluid img-thumbnail" alt="finantional-protfolio"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
                            </li>
                            
                            <li class="col-md-6 col-lg-4 mt-4">
	        		            <div class="shadow">
                                    <a href="https://pro-organizer-app.netlify.app/" target="blank">
                                    <img  src="images/pro-organizer.png" class="img-fluid img-thumbnail" alt="pro-organizer"  />	        			
                                    <div class="overlay rounded"></div>
                                    </a>
	        		            </div>
	                    	</li>
	      		 
	      		     
                         </ul>
                        </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-Uses" role="tabpanel" aria-labelledby="pills-Uses-tab">
                    <div class="row">
		                <div class="col-md-12 col-lg-12">
                        <ul class="row list-unstyled">
				        	<li class="col-md-6 col-lg-4 my-2">
	        		            <div class="shadow" id="lightgallery">
                                    <a href="images/lead-db-login.png" >
                                    <a href="images/lead-db-view2.png" >
                                    <a href="images/lead-db-report.png">
                                    <a href="images/lead-db-report1.png">
                                    <a href="images/lead-db-changepw.png">
                                    <a href="images/lead-db-support.png">
                                    <a href="images/lead-detail.png">
                                    <img  src="images/lead-db-view.png" class="img-fluid img-thumbnail" alt="lead-dashboard"  />
                                    <div class="overlay rounded"></div>
                                    </a>
                                    </a>
                                    </a>
                                    </a>
                                    </a>
                                    </a>
                                    </a>
                                    
	        		            </div>
                            </li>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>


 <!-- start of contact_form -->
 <section id="contact" class="bg-light py-5">
      <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12 text-center">
          <h1><-<span class="code-color">Contact Me</span>-/></h1>
          </div>

          <div class="col-md-10 col-lg-10 my-3">
           <p class="my-info text-center pt-4">You can contact me on <a href="https://gmail.com" target="blank">fauzanfalke@gmail.com</a> or <a href="tel:8097603225">8097603225</a> or connect with me on any of the following platforms below:</p>
           <div class="media-icon pt-5">
           <ul class="d-flex list-unstyled justify-content-center">
                <li><a href="https://www.facebook.com/khan.humera.7568" target="blank"><i class="text-facebook fa fa-facebook-square fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="https://github.com/fauzan07" target="blank"><i class="text-dark fa fa-github fa-2x pl-5" aria-hidden="true"></i></a></li>
                <li><a href="https://www.instagram.com/fauzii_1/" target="blank"><i class="text-insta fa fa-instagram fa-2x pl-5" aria-hidden="true"></i></a></li>            
                <li><a href="https://twitter.com/Fauzan04648061" target="blank"><i class="text-info fa fa-twitter fa-2x pl-5" aria-hidden="true"></i></a></li>
                <!-- <li><a href="https://www.linkedin.com/in/fauzan-falke-02a5a7181/" target="blank"><i class="text-primary fa fa-linkedin-square fa-2x pl-5" aria-hidden="true"></i></a></li> -->
               
            </ul>
            </div>
          </div>
      </div>
      <!--end row-->
  </section>
  <!-- end of contact_form -->


  
 <?php require("footer.php"); ?>
 <script>
    $(document).ready(function() {
        $('#lightgallery').lightGallery();
    });

    $(document).ready(function() {
        $('#lightgallery1').lightGallery();
    });
</script>