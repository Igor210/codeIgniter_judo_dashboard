
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Estimate List</span></h5>
              </div>
              <div class="col s2 m6 l6">
              	<a href="./kataAdd" class="btn waves-effect waves-light breadcrumbs-btn right">Add Kata</a>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container section-data-tables">
          	<div class="col s12 m12 l12">

		      <div id="button-trigger" class="card card card-default scrollspy">
		        <div class="card-content">
		          <div class="row">
		            <div class="col s12">
		              <table id="data-table-row-grouping" class="display">
		                <thead>
		                  <tr>
		                    <th>Juez#</th>
		                    <th>Estimator</th>
		                    <th>Orden</th>
		                    <th>Competencia</th>
		                    <th>KaTa</th>
		                    <th>Club/Dpto/Pais</th>
		                    <th>Categoria</th>
		                    <th>Tori</th>
		                    <th>Uke</th>
		                    <th>Time</th>
		                    <th>Total</th>
		                    <th>Action</th>
		                  </tr>
		                </thead>
		                <tbody>
		                	<?php 
		                	foreach ($katadata as $key => $value) {
		                		$katatypeAry = [
		                			"1" => "Noge-no-kata",
		                			"2" => "Karame-no-Kata",
		                			"3" => "Kime-no-Kata",
		                			"4" => "Goshin Jutsu No Kata",
		                		];
	                		?>
			                  <tr>
			                    <td><?php echo $value['esID'] ?></td>
			                    <td><?php echo $value['esname'] ?></td>
			                    <td>Orden: <?php echo $value['orden'] ?></td>
			                    <td><?php echo $value['competencia'] ?></td>
			                    <td><?php echo $katatypeAry[$value['katatype']] ?></td>
			                    <td><?php echo $value['cdname'] ?></td>
			                    <td><?php echo $value['cname'] ?></td>
			               		<td><?php echo $value['tname'] ?></td>
			                    <td><?php echo $value['uname'] ?></td>
			                    <td><?php echo $value['datetime'] ?></td>
			                    <td><?php echo $value['total'] ?></td>
			                    <td>
			                    	<a class="btn btn-floating btn-small cyan kataGoEditpage" title="edit" href="javascript:;" rid="<?php echo $value['id'] ?>">
										<i class="material-icons">edit</i>
									</a>
			                    	<a class="btn btn-floating btn-small purple lightrn-1 kataDel" title="delete" href="javascript:;" rid="<?php echo $value['id'] ?>">
										<i class="material-icons">delete</i>
									</a>
			                    	<a class="btn btn-floating btn-small amber darken-4 kataGoClonepage" title="clone" href="javascript:;" rid="<?php echo $value['id'] ?>">
										<i class="material-icons">content_copy</i>
									</a>
			                    </td>
			                  </tr>
		                	 	
		                	<?php } ?>
		                </tbody>
		                <tfoot>
		                  <tr>
		                    <th>Juez#</th>
		                    <th>Estimator</th>
		                    <th>Orden</th>
		                    <th>Competencia</th>
		                    <th>KaTa</th>
		                    <th>Club/Dpto/Pais</th>
		                    <th>Categoria</th>
		                    <th>Tori</th>
		                    <th>Uke</th>
		                    <th>Time</th>
		                    <th>Total</th>
		                    <th>Action</th>
		                  </tr>
		                </tfoot>
		              </table>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->