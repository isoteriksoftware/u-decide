<?php 
  include 'generic_dashboard.php';
?>

 <div class="jumbotron mt-5 text-center p-4">
                <h4 class="display-4 mb-3"> view user page</h4>
                
              </div>
              <div class="tabele-responsive-sm mt-4 shadow shadow-lg">
                <table class="table table-bordered table-hover shadow shadow-lg">
                      <thead class="thead-dark">
                        <tr>
                          <th colspan="5" class="bg-success text-center">Logged-in Users</th>
                        </tr>
                        <tr>
                          <th>S/N</th>
                          <th>surname</th>
                          <th>lastname</th>
                          <th>user ID</th>
                          <th>logged-in status</th>
                        </tr>
                      </thead> 

                      <tbody>
                            <tr>
                              <td>1</td>
                              <td>voter voter1</td>
                              <td>president</td>
                              <td>usr001</td>
                              <td>offline</td>
                            </tr>

                             <tr>
                              <td>1</td>
                              <td>voter voter32</td>
                              <td>president</td>
                              <td>psd002</td>
                              <td>26-12-2020 9:48:01</td>
                            </tr>

                            <tr>
                              <td>2</td>
                              <td>voter voter41</td>
                              <td>secetary</td>
                              <td>user002</td>
                              <td>offline</td>
                            </tr>

                            <tr>
                              <td>3</td>
                              <td>voter voter3</td>
                              <td>vice chairman</td>
                              <td>user004</td>
                              <td>26-12-2020 9:48:01 </td>
                            </tr>

                             <tr>
                              <td>3</td>
                              <td>voter voter4</td>
                              <td>vice chairman</td>
                              <td>user005</td>
                              <td>26-12-2020 9:48:01</td>
                            </tr>
                      </tbody>
                </table>
                
              </div>


<?php 
  include 'generic_footer.php';
?>