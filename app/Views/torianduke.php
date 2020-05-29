
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Tori/Uke List</span></h5>
              </div>
              <div class="col s2 m6 l6">
              	<a href="#addEstiamtor" class="btn waves-effect waves-light breadcrumbs-btn right modal-trigger showaddmodal">Add Tori/Uke</a>
                
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
		                    <th>Full Name</th>
		                    <th>Tori/Uke</th>
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
			                    <td><?php echo $value['name'] ?></td>
			                    <td><?php echo $value['torioruke']==0?"Tori":"Uke" ?></td>
			                    <td><?php echo $value['note'] ?></td>
			                    <td>
			                    	<a class="btn btn-floating btn-small cyan toriorukeEdit" rid="<?php echo $value['id'] ?>">
										<i class="material-icons">edit</i>
									</a>
			                    	<a class="btn btn-floating btn-small purple lightrn-1 toriorukeDel" rid="<?php echo $value['id'] ?>">
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
	      	<form class="formValidate0" id="formValidate0" method="post" action="<?php echo base_url(); ?>/torianduke/save">
		    	<div class="modal-content">
		            <div class="row">
		              <div class="input-field col s12">
		                <input type="text" id="fn" name="name" required class="validate invalid">
		                <label for="fn">Full Name</label>
		              </div>
		            </div>
		            <div class="row mb-2">
		              <div class="col s12 m2">
					      <label>
					        <input name="torioruke" class="validate tori" required value="0" type="radio" checked/>
					        <span>Tori</span>
					      </label>
		              </div>
		              <div class="col s12 m2">
					      <label>
					        <input name="torioruke" class="validate uke" required value="1" type="radio" />
					        <span>Uke</span>
					      </label>
		              </div> 
		            </div>
		            <!-- <div class="row">
		              <div class="col s12 m2">
					      <label>
					        <input name="gender" class="validate male" required value="0" type="radio" checked/>
					        <span>Male</span>
					      </label>
		              </div>
		              <div class="col s12 m2">
					      <label>
					        <input name="gender" class="validate female" required value="1" type="radio" />
					        <span>Female</span>
					      </label>
		              </div>
		            </div> -->
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