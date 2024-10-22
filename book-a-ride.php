<?php require_once 'header.php' ?>
<section class="page-banner">
    <div class="text-center">
        <ul class="m-0 p-0 justify-content-center list-unstyled d-flex align-items-center">
            <li class="text-white">Home</li>
            <li class="text-white mx-2" style="font-size: 8px;"><span class="bi bi-chevron-right"></span></li>
            <li class="text-white">Book a Ride</li>
        </ul>
    </div>
</section>
<div class="my-5" id="bookRide">
    <div class="container">
        <div class="booking-form">
            <h4 class="booking-title">Book Your Ride</h4>
            <form action="#">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Pick Up Location</label>
                            <input type="text" class="form-control" placeholder="Type Location" />
                            <i class="bi bi-location-dot"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Drop Off Location</label>
                            <input type="text" class="form-control" placeholder="Type Location" />
                            <i class="bi bi-location-dot"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Passengers</label>
                            <input type="text" class="form-control" placeholder="Passengers" />
                            <i class="bi bi-user-tie"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Car Type</label>
                            <select class="select form-control">
                                <option value>Choose Your Ride</option>
                                <option value="SUV">SUV</option>
                                <option value="SEDAN">SEDAN</option>
                                <option value="ELECTRIC">ELECTRIC</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Pick Up Date</label>
                            <input type="date" class="form-control pe-2 date-picker" placeholder="MM/DD/YY" id="datePicker" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Pick Up Time</label>
                            <input type="time" class="form-control pe-2" id=" time-picker2" placeholder="00:00 AM" />
                        </div>
                    </div>
                    <div class="col-lg-12 align-self-end mt-3">
                        <button class="theme-btn w-auto" type="submit">
                            Book Ride<i class="bi bi-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once 'footer.php' ?>