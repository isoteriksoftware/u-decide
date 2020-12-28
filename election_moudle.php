<?php 
  include 'generic_dashboard.php';
?>
    <div class="jumbotron mt-5 text-center p-4">
                <h4 class="display-4 mb-3"> Election Status/Reset</h4>
                <h5 style="font-variant: small-caps;">  Recusandae exercitationem</h5>           
    </div>

    <div class="card ">
    	<div class="card-body">
    		<button class="btn btn-info btn-lg btn-action">Rest Election</button>
    	</div>	
    </div>

    <div class="conatiner mt-5">
			<div class="table-responsive shadow shadow-lg">
				<table class="table table-hover ">
				<thead>
					<tr>
						<th colspan="6" class="bg-info text-center"> SUMMARY</th>
					</tr>
					<tr>
						<th>S/N</th>
						<th>POSITION_CATEG</th>
						<th>CANDIDATE NAME</th>
						<th>TOTAL_VOSTERS</th>
						<th>CURRENT_VOTERS</th>
						<th>REMAINIG _VOTERS</th>

					</tr>
				</thead>

				<tbody>
					<tr>
						<td>01</td>
						<td>governor gvt001</td>
						<td>somebody surname</td>
						<td>321</td>
						<td>56</td>
						<td>265</td>

					</tr>

					<tr>
						<td>02</td>
						<td>governor gvt002</td>
						<td>somebody surname</td>
						<td>321</td>
						<td>56</td>
						<td>265</td>

					</tr>
					<tr>
						<td>03</td>
						<td>minister mst001</td>
						<td>somebody surname</td>
						<td>321</td>
						<td>56</td>
						<td>265</td>

					</tr>
					<tr>
						<td>04</td>
						<td>governor mst003</td>
						<td>somebody surname</td>
						<td>321</td>
						<td>56</td>
						<td>265</td>

					</tr>
				</tbody>
				
			</table>
				
			</div>
    	
    </div>





<?php
	
	include 'generic_footer.php'
 ?>