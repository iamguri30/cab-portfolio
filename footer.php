 <!-- Footer -->
 <footer class="footer-area">
     <div class="footer-widget py-4">
         <div class="container">
             <div class="row footer-widget-wrapper">
                 <div class="col-lg-6">
                     <h4 class="m-0 text-white">Global Express Limo</h4>
                 </div>
                 <div class="col-lg-6">
                     <ul
                         class="justify-content-lg-end justify-content-start footer-contact m-0 p-0 d-flex flex-md-row flex-column"
                         type="none">
                         <li class="pe-3 me-3 border-end border-1 mb-0" style="border-color: rgb(255 255 255 / 0.4) !important">
                             <a href="index.php">Home</a>
                         </li>
                         <li class="pe-3 me-3 border-end border-1 mb-0" style="border-color: rgb(255 255 255 / 0.4) !important">
                             <a href="about.php">About</a>
                         </li>
                         <li class="pe-3 me-3 border-end border-1 mb-0" style="border-color: rgb(255 255 255 / 0.4) !important">
                             <a href="services.php">Our Services</a>
                         </li>
                         <li class="pe-3 me-3 border-end border-1 mb-0" style="border-color: rgb(255 255 255 / 0.4) !important">
                             <a href="contact.php">Contact</a>
                         </li>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="copyright">
         <div class="container">
             <div class="row">
                 <div class="col-md-6 align-self-center">
                     <p class="copyright-text">
                         © Copyright <span id="date">2024</span>
                         <a href="#"> Global Express Limo </a> All Rights Reserved.
                     </p>
                 </div>
                 <div class="col-md-6 text-end">
                     <p class="copyright-text">
                         Designed by
                         <a href="#"> Gurleen Kaur </a>
                     </p>
                 </div>
             </div>
         </div>
     </div>
 </footer>

 <!-- Scripts -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <script src="script.js"></script>
 <script>
     $(document).ready(function() {
         $('.owl-carousel').owlCarousel({
             loop: true,
             margin: 10,
             nav: true,
             items: 3,
             dots: true,
             navText: ['<', '>'],
         });
     });
 </script>

 <div class="modal fade" id="bookNow" tabindex="-1" aria-labelledby="bookNowLabel" aria-hidden="true">
     <div class="modal-dialog modal-lg">
         <div class="modal-content">
             <form action="#">
                 <div class="modal-header">
                     <h5 class="modal-title" id="bookNowLabel">Book a Ride</h5>
                     <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                 </div>
                 <div class="modal-body">
                     <div class="row">
                         <div class="col-lg-6 mb-3">
                             <div class="form-group">
                                 <label>Pick Up Location</label>
                                 <input type="text" class="form-control" placeholder="Type Location" />
                                 <i class="bi bi-location-dot"></i>
                             </div>
                         </div>
                         <div class="col-lg-6 mb-3">
                             <div class="form-group">
                                 <label>Drop Off Location</label>
                                 <input type="text" class="form-control" placeholder="Type Location" />
                                 <i class="bi bi-location-dot"></i>
                             </div>
                         </div>
                         <div class="col-lg-6 mb-3">
                             <div class="form-group">
                                 <label>Passengers</label>
                                 <input type="text" class="form-control" placeholder="Passengers" />
                                 <i class="bi bi-user-tie"></i>
                             </div>
                         </div>
                         <div class="col-lg-6 mb-3">
                             <div class="form-group">
                                 <label>Car Type</label>
                                 <input type="text" readonly id="cartypeText" class="form-control">
                             </div>
                         </div>
                         <div class="col-lg-6 mb-3">
                             <div class="form-group">
                                 <label>Pick Up Date</label>
                                 <input type="date" class="form-control pe-2 date-picker" placeholder="MM/DD/YY" id="datePicker" />
                             </div>
                         </div>
                         <div class="col-lg-6 mb-3">
                             <div class="form-group">
                                 <label>Pick Up Time</label>
                                 <input type="time" class="form-control pe-2" id=" time-picker" placeholder="00:00 AM" />
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn-sm btn btn-secondary" data-bs-dismiss="modal">Close</button>
                     <button class="btn btn-dark btn-sm" type="submit">
                         Book Ride<i class="bi bi-arrow-right d-inline-block ms-2"></i>
                     </button>
                 </div>
             </form>
         </div>
     </div>
 </div>

 <script>
     // Set today's date as the minimum selectable date
     const today = new Date().toISOString().split('T')[0];
     document.getElementById('datePicker').setAttribute('min', today);

     document.addEventListener("DOMContentLoaded", function() {
         const timePicker = document.getElementById("time-picker");
         const timePicker2 = document.getElementById("time-picker2");
         const now = new Date();
         const hours = String(now.getHours()).padStart(2, "0");
         const minutes = String(now.getMinutes()).padStart(2, "0");
         const currentTime = `${hours}:${minutes}`;

         // Set the min attribute to the current time
         timePicker.setAttribute("min", currentTime);
         timePicker2.setAttribute("min", currentTime);
     });

     function getcarType(x) {
         document.getElementById("cartypeText").value = x;
     }
 </script>
 </body>

 </html>