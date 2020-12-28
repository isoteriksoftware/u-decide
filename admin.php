<?php 
  include 'generic_dashboard.php';
?>
            
   <div class="jumbotron mt-5 text-center p-4">
          <h4 class="display-4 mb-3"> Register Candidate Page</h4>
          <h5 style="font-variant: small-caps;">  Recusandae exercitationem</h5>   
     </div>

     <div class="container-fluid p-3">
          <div class="card shadow shadow-lg p-5" id="card-rounded">
              <div class="card-header bg-warning text-center" style="border-top-left-radius: 7rem;             border-top-right-radius:7rem;" > CANDIDATE FORM 
              </div>
              <div class="card-body"> 
                  <form action="">

                    <div class="form-group">
                      <label for="fullname">Full name: </label>
                      <input type="text" class="form-control" id="fullname" placeholder="enter fullname">
                    </div>

                    <div class="form-group">
                      <label for="fullname">Username: </label>
                      <input type="text" class="form-control" id="username" placeholder="prefered username">
                    </div>

                    <div class="form-group">
                      <label for="gender"> gender:</label>
                      <select class="form-control bg-light" name="gender" id="select" required>
                        <option value="p1" selected>- select</option>
                        <option value="male">male</option>
                        <option value="female">female</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="Party"> select position </label>
                      <select class="form-control bg-light" name="party" id="select"required>
                        <option value="p1" selected>- select</option>
                        <option value="p2">president</option>
                        <option value="p2">governor</option>
                        <option value="p2">minster</option>
                        <option value="p2">senate</option>
                        <option value="p2">director</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="email">Email address: </label>
                      <input type="email" class="form-control" id="email" placeholder="enter email">
                    </div>

                    <div class="form-group">
                      <label for="number">phone number: </label>
                      <input type="number" class="form-control" id="email" placeholder="your number">
                    </div>

                    <div class="form-group">
                      <label for="pwd">password: </label>
                      <input type="password" class="form-control" id="pwd" placeholder="enter passowrd">
                    </div>

                    <div class="input-group mb-3 row">
                          <div class="col-sm-2 text-left">
                            <label>display picture:</label>
                          </div>
                          <div class="col-sm">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input bg-light" id="image" name="image" required>
                              <label class="custom-file-label">Choose display image</label>
                            </div>
                          </div>
                    </div>

                    <div class="form-group">
                      <label for="textarea">About: </label>
                      <textarea class="form-control" id="email" placeholder="about you...">
                        </textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-action">submit</button>
                    </div>
                    
                  </form>
              </div>
            
          </div>
      <!-- ADD manage form -->

     </div>
    

      





<?php 
  include 'generic_footer.php';
?>