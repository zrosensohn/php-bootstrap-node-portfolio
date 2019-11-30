<?php
    include 'header.php';
?>

    <main class="flex-shrink-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    <div class="container bg-white my-4"> <!-- Using second container to align with navbar -->
                        <div class="row">
                            <div class="col-md-12 py-3">
                                <h1>Contact Me</h1>
                                <hr />
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="firstName">First Name</label>
                                            <input type="text" class="form-control" id="fname" aria-describedby="firstName" placeholder="Enter First Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="firstName">Last Name</label>
                                            <input type="text" class="form-control" id="lname" aria-describedby="lastName" placeholder="Enter Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Message</label>
                                        <textarea class="form-control" id="message" rows="6"></textarea>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="captcha">
                                        <label class="form-check-label" for="captcha">I'm not a robot!</label>
                                    </div>
                                    <button type="submit" class="btn btn-secondary">Submit</button>
                                    </form>
                            </div>
                        </div>
                    </div> <!--End Container 2-->
                    
                </div>
            </div>
        </div> <!--End Container 1-->
    </main> <!--End Main-->

<?php
    include 'footer.php';
?>