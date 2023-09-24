<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    
  </head>
  <body>

        <div class="main-panel">
            <div class="content-wrapper">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">Create New User</h4>
                      <form class="form-sample">

                        <p class="card-description"> Login Details </p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="email" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="password" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Confirm password</label>
                                    <div class="col-sm-9">
                                        <input type="password" name="c_password" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="card-description"> Personal info </p>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">First Name</label>
                              <div class="col-sm-9">
                                <input type="text"  name="f_name" class="form-control" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Last Name</label>
                              <div class="col-sm-9">
                                <input type="text" name="l_name" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Gender</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="gender">
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Date of Birth</label>
                              <div class="col-sm-9">
                                <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true">
                                    <input placeholder="Select date" type="text" id="example" class="form-control">
                                    <label for="example">Try me...</label>
                                    <i class="fas fa-calendar input-prefix"></i>
                                  </div>
                                {{-- <input class="form-control" name="dob" placeholder="dd/mm/yyyy" /> --}}
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Role</label>
                              <div class="col-sm-9">
                                <select class="form-control" name="role">
                                  <option value="admin" >Admin</option>
                                  <option value="guest" >Guest</option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Active</label>
                              <div class="col-sm-4">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status" id="status1" value="" checked> Active </label>
                                </div>
                              </div>
                              <div class="col-sm-5">
                                <div class="form-check">
                                  <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="status" id="status2" value="option2"> Inactive </label>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        <p class="card-description"> Contact Details </p>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Address</label>
                              <div class="col-sm-9">
                                <input type="text" name="address" class="form-control" />
                              </div>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Phone Number</label>
                              <div class="col-sm-9">
                                <input type="text" name="ph_number" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Country</label>
                              <div class="col-sm-9">
                                <input type="text" name="country" class="form-control" />
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Country</label>
                              <div class="col-sm-9"  name="country">
                                <select class="form-control">
                                  <option>America</option>
                                  <option>Italy</option>
                                  <option>Russia</option>
                                  <option>Britain</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>

                        <button style="float: right" type="submit" class="btn btn-primary mr-2">Submit</button>

                       
                      </form>
                    </div>
                  </div>
                </div>
               
              </div>
            </div>
          </div>

          <script>
            // Data Picker Initialization
$('.datepicker').datepicker({
  inline: true
});
          </script>
  </body>
</html>