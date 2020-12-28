<?php 
  include 'generic_dashboard.php';
?>
    <div class="jumbotron mt-5 text-center p-4">
        <h4 class="display-4 mb-3"> CANDIDATE RESULT</h4>
        <h5 style="font-variant: small-caps;">  Recusandae exercitationem</h5>         
    </div>

    <div class="card ">
        <div class="card-header bg-info text-center">
            <h5 class="text-white">All Candidate Result</h5>     
        </div>
    	<div class="card-body shadow shadow-lg">
            <div class="conatiner mt-5">
                <div class="table-responsive">
                     <table class="table table-hover tabele-responsive-sm ">
                        <thead>
                            <tr>
                                <th colspan="6" class="bg-info text-center"> RESULT</th>
                            </tr>
                            <tr>
                                <th>S/N</th>
                                <th>POSITION_CATEG</th>
                                <th>CANDIDATE NAME</th>
                                <th>VOTE_ID</th>
                                <th>NO_VOTERS</th>
                                <th>PERCENTAGE(%)</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>governor gvt001</td>
                                <td>somebody fullname</td>
                                <td>gvt12gt</td>
                                <td>312</td>
                                <td>87.2222</td>
                            </tr>

                            <tr>
                                <td>02</td>
                                <td>governor gvt002</td>
                                <td>somebody fullnamae</td>
                                <td>gvt01qu8</td>
                                <td>12</td>
                                <td>5.90872%</td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td>minister mst001</td>
                                <td>somebody fullname</td>
                                <td>mst651</td>
                                <td>89</td>
                                <td>65.0908%</td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td>governor mst003</td>
                                <td>somebody fullname</td>
                                <td>msthy6</td>
                                <td>123</td>
                                <td>67.0908%</td>

                            </tr>
                        </tbody>
                     </table>
                    
                </div>
            </div>	
    	</div>	
    </div>

    





<?php
	
	include 'generic_footer.php'
 ?>