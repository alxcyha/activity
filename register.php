<?php include ("header.php")?>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
                <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
                <div class="card-body p-4 p-md-5">
                    <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
                    <form action="process.php" method="post">

                    <div class="row">
                        <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" name="firstName" class="form-control form-control-lg" />
                            <label class="form-label">First Name</label>
                        </div>

                        </div>
                        <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" name="middleName" class="form-control form-control-lg" />
                            <label class="form-label" >Middle Name</label>
                        </div>

                        </div>

                        <div class="col-md-6 mb-4">

                        <div class="form-outline">
                            <input type="text" name="lastName" class="form-control form-control-lg" />
                            <label class="form-label">Last Name</label>
                        </div>

                        </div>
                    </div>

                    <div class="row">
                      
                        <div class="col-md-6 mb-4">

                        <h6 class="mb-2 pb-1">Role: </h6>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="role" id="student"
                            value="1" checked />
                            <label class="form-check-label" >Student</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="role" id="admin"
                            value="0" />
                            <label class="form-check-label">Admin</label>
                        </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-4 pb-2">

                        <div class="form-outline">
                            <input type="text" name="username" class="form-control form-control-lg" />
                            <label class="form-label">username</label>
                        </div>

                        </div>
                        <div class="col-md-6 mb-4 pb-2">
                            <input type="password" name="password" class="form-control form-control-lg" />
                            <label class="form-label">password</label>
                        </div>
                    </div>

                    <div class="mt-4 pt-2">
                        <input class="btn btn-primary btn-lg" type="submit" name="regbutton" value="register" />
                    </div>

                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include ("footer.php")?>