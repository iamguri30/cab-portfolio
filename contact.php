<?php require_once 'header.php' ?>
        <section class="page-banner">
            <div class="text-center">
                <ul class="m-0 p-0 justify-content-center list-unstyled d-flex align-items-center">
                    <li class="text-white">Home</li>
                    <li class="text-white mx-2" style="font-size: 8px;"><span class="bi bi-chevron-right"></span></li>
                    <li class="text-white">Contact</li>
                </ul>
            </div>
        </section>

        <section class="form-section position-relative py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div>
                            <div class="form-group mb-3">
                                <label for="name">Name</label>
                                <div class="input-group align-items-stretch">
                                    <span class="bi bi-person input-group-text"></span>
                                    <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">E-mail</label>
                                <div class="input-group align-items-stretch">
                                    <span class="bi bi-envelope input-group-text"></span>
                                    <input type="email" name="email" id="email" placeholder="Enter E-mail" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Phone Number</label>
                                <div class="input-group align-items-stretch">
                                    <span class="bi bi-phone input-group-text"></span>
                                    <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Enter Phone Number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">City</label>
                                <div class="input-group align-items-stretch">
                                    <span class="bi bi-map input-group-text"></span>
                                    <input type="text" name="city" id="city" placeholder="Enter City" class="form-control">
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Message</label>
                                <div class="input-group align-items-stretch">
                                    <span class="bi bi-chat-left-dots input-group-text align-items-start pt-2"></span>
                                    <textarea name="msg" placeholder="Enter Message" id="msg" rows="3" class="form-control" style="resize: none;"></textarea>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                    <button type="submit" name="send" id="send" class="theme-btn mt-4">Send</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 contact-form position-relative">
                        <div class="contact-form-bg h-100 position-relative">
                            <div class="contact-form-box mb-2 position-absolute w-75 mx-auto rounded-top-4 p-5 pb-3 bottom-0 start-50 translate-middle-x">
                                <div class="d-flex align-items-start border-bottom pb-2 mb-3">
                                    <span class="d-inline-block me-2 bi bi-geo-alt-fill text-black"></span>
                                    <div>
                                        <h6 class="m-0 text-black">Office Address -</h6>
                                        <p class="text-black m-0">Canada</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start border-bottom pb-2 mb-3">
                                    <span class="d-inline-block me-2 bi bi-phone-fill text-black"></span>
                                    <div>
                                        <h6 class="m-0 text-black">Phone Number -</h6>
                                        <p class="text-black m-0">+1 (437) 214-1404</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start border-bottom pb-2 mb-3">
                                    <span class="d-inline-block me-2 bi bi-envelope-fill text-black"></span>
                                    <div>
                                        <h6 class="m-0 text-black">Email -</h6>
                                        <p class="text-black m-0">info@globalexpresslimousine.ca</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start ">
                                    <span class="d-inline-block me-2 bi bi-clock-fill text-black"></span>
                                    <div>
                                        <h6 class="m-0 text-black">Our Timings -</h6>
                                        <p class="text-black m-0">24/7 Hours</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php require_once 'footer.php' ?>