 <!-- footer start -->
        <footer id="footer" class="bg-color pt-4 pb-3">
    			<div class="container">
          <div class="footer-bootom">
                 <!-- <div class="container"> -->
                 <div class="row">
                     <div class="col-12">
                         <p class="float-left text-white"><small>&copy;Copyright &copy;All rights reserved</small></p>
                         <p class="float-right text-white"><small> This site by Er.Fauzan</small></p>
                     </div>
                 </div>
                 <!-- </div> -->
             </div>
    			</div>
			</footer>
 <!-- footer end -->

 <button onclick="topFunction()" id="myBtn" title="Go to top" class="topbtn shadow px-3 py-2 rounded"><i class="fa fa-angle-up"></i></button>

 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="js/bootstrap.bundle.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <script src="https://res.cloudinary.com/dxfq3iotg/raw/upload/v1556817331/lightgallery-all.min.js"></script>


 <script>

 //Get the button
 var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



     
</script>
 </body>

 </html>