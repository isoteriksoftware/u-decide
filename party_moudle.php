<?php 
  include 'generic_dashboard.php';
?>

 		 <div class="jumbotron mt-5 text-center p-4">
                <h4 class="display-4 mb-3"> manage party record</h4>
                <h5 style="font-variant: small-caps;"> Availiable post to cast vote</h5> 
         </div>

          <div class="tabele-responsive-sm mt-4 shadow shadow-lg">
            <table class="table table-bordered table-hover shadow shadow-lg">
              <thead class="thead-dark">
                <tr>
                  <th>S/N</th>
                  <th>Fullname</th>
                  <th>position</th>
                  <th>Vote ID</th>
                  <th>Vote status</th>
                </tr>
              </thead> 

              <tbody>
                <tr>
                  <td>1</td>
                  <td>voter voter1</td>
                  <td>president</td>
                  <td>psd001</td>
                  <td>voted</td>
                </tr>

                 <tr>
                  <td>1</td>
                  <td>voter voter32</td>
                  <td>president</td>
                  <td>psd002</td>
                  <td>voted</td>
                </tr>

                <tr>
                  <td>2</td>
                  <td>voter voter41</td>
                  <td>secetary</td>
                  <td>scr001</td>
                  <td> not voted</td>
                </tr>

                <tr>
                  <td>3</td>
                  <td>voter voter3</td>
                  <td>vice chairman</td>
                  <td>vcm001</td>
                  <td> not voted</td>
                </tr>

                 <tr>
                  <td>3</td>
                  <td>voter voter4</td>
                  <td>vice chairman</td>
                  <td>vcm003</td>
                  <td> not voted</td>
                </tr>
              </tbody> 
            </table>
          </div>
          
           
          





<?php 
  include 'generic_footer.php';
?>