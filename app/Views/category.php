
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Category List</span></h5>
              </div>
              <div class="col s2 m6 l6">
              	<a href="#addEstiamtor" class="btn waves-effect waves-light breadcrumbs-btn right modal-trigger showaddmodal">Add Category</a>
                
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
		              <table id="data-table-simple" class="display">
		                <thead>
		                  <tr>
		                    <th>No</th>
		                    <th>Category</th>
		                    <th>Slang</th>
		                    <th>Note</th>
		                    <th>Action</th>
		                  </tr>
		                </thead>
		                <tbody>
		                	<?php 
		                	foreach ($datalist as $key => $value) {
	                		?>
			                  <tr>
			                  	<td><?php echo $key+1 ?></td>
			                    <td><?php echo $value['name']." " . ($value['isformale']=="M"?"Male":"Female"); ?></td>
			                    <td><?php echo $value['shortname'] ?></td>
			                    <td><?php echo $value['note'] ?></td>
			                    <td>
			                    	<a class="btn btn-floating btn-small cyan category_sel" rid="<?php echo $value['id'] ?>">
										<i class="material-icons">edit</i>
									</a>
			                    	<a class="btn btn-floating btn-small purple lightrn-1 category_del" rid="<?php echo $value['id'] ?>">
										<i class="material-icons">delete</i>
									</a>
			                    </td>
			                  </tr>
		                	 	
		                	<?php } ?>
		                </tbody>
		              </table>
		            </div>
		          </div>
		        </div>
		      </div>
		    </div>
          </div>
          <div class="content-overlay"></div>
        </div>

        <div id="addEstiamtor" class="modal">
	      	<form class="formValidate0" method="post" action="<?php echo base_url(); ?>/category/save">
		    	<div class="modal-content">
		            <div class="row">
		              <!-- <div class="input-field col s12">
		                <input type="text" id="fn" name="name" required class="validate invalid">
		                <label for="fn">Category</label>
		              </div> -->
		              	<label for="" class="active">Categoria</label>
		              	<div class="row">
		              		<div class="col s12 m4">
			                	<input type="text" name="name" required class="validate invalid" placeholder="nage no kata">
		              		</div>
			                <div class="col s12 m2">
			                	<select id="isformale" name="isformale">
			                		<option value="M" selected="selected">Male</option>
			                		<option value="F">Female</option>
			                	</select>
			                </div>
		              	</div>
		            </div>
		            <div class="row">
		              <div class="input-field col s12">
		                <input type="text" id="sn" name="shortname" placeholder="NNK-M">
		                <label for="sn">Slang</label>
		              </div>
		            </div>
		            <div class="row">
		              <div class="input-field col s12">
		                	<textarea id="textarea2" rows=2 name="note" class="materialize-textarea"></textarea>
          					<label for="textarea2">Note</label>
		              </div>
		            </div>
		            <div class="row">
		              <div class="row">
		                <div class="input-field col s12">
	                		<button class="btn waves-effect waves-light modal-action modal-close" type="button">cancel
							    <i class="material-icons left">cancel</i>
						  	</button>
						  	<input type="hidden" name="is_save" value="right" />
						  	<input type="hidden" name="selId" value="" />
                  			<button class="btn cyan waves-effect waves-light right" type="submit">Submit
			                    <i class="material-icons right">send</i>
		                  	</button>
		                </div>
		              </div>
		            </div>
		    	</div>
          	</form>
	  	</div>

      </div>
    </div>
    <!-- END: Page Main-->