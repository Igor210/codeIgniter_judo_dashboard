
    <script type="text/javascript">
    	var initialdata = <?php echo $initailData ?>;
    </script>

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Estimate Add</span></h5>
              </div>
              <div class="col s2 m6 l6">
              	<a href="./katalist" class="btn waves-effect waves-light breadcrumbs-btn right">Return</a>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container section-data-tables">
          	<div class="col s12 m12 l12">
		      <div id="basic-form1" class="card card card-default scrollspy">
		        <div class="card-content card-content1">
		          <form action="home" method="post">
		            <div class="row">
		              	<div class="input-field col s12 m6">
			                <input placeholder="Juegos Nacionales ASCUN BAQ 2020 - Tomeo de Karas" id="competencia" ng-model="form.competencia" name="competencia" type="text">
			                <label for="competencia">Competencia</label>
		              	</div>
		          		<div class="input-field col s12 m2">
			                <input name="date" type="text" id="date" ng-model="form.date" placeholder="">
			                <label for="date">Date</label>
			            </div>
		          		<div class="input-field col s12 m2">
			                <input name="place" type="text" id="place" ng-model="form.place" placeholder="">
			                <label for="place">Place</label>
			            </div>
		          		<div class="input-field col s12 m2">

			            </div>
		            </div>
		            <div class="row">
		              <div class="input-field col s12 m3 l3">
		                <input placeholder="901" id="orden" ng-model="form.orden" name="orden" type="text">
		                <label for="orden">Orden</label>
		              </div>
		              <div class="input-field col s12 m4 l4">
		                <select name="club_dpto" ng-model="form.club_dpto">
		                	<option ng-repeat="club in form.club_dptoAry" value="{{ club.id }}">{{ club.name }}</option>
		                </select>
		                <label>Club/Dpto/Pais</label>
		              </div>
		              <div class="input-field col s12 m4 l4">
		                <select name="tori" ng-model="form.tori">
		                	<option ng-repeat="tori in form.toriAry" value="{{ tori.id }}">{{ tori.name }}</option>
		                </select>
		                <label>Tori</label>
		              </div>
		            </div>
		            <div class="row">
		              <div class="input-field col s12 m3">
		                <select name="uke" ng-model="form.uke">
		                	<option ng-repeat="uke in form.ukeAry" value="{{ uke.id }}">{{ uke.name }}</option>
		                </select>
		                <label>Uke</label>
		              </div>
		              <div class="input-field col s12 m3">
			                <select name="categoria" ng-model="form.categoria">
			                	<option ng-repeat="categoria in form.categoriaAry" value="{{ categoria.id }}">{{ categoria.name }}</option>
			                </select>
			                <label>Categoria</label>
		              </div>
		              <div class="input-field col s12 m3">
			                <select name="evaluator" ng-model="form.evaluator">
			                	<option ng-repeat="evaluator in form.evaluatorAry" value="{{ evaluator.id }}">Juez#{{ evaluator.userID }} {{ evaluator.name }}</option>
			                </select>
			                <label>List of Evaluators name to the selected</label>
		              </div>
		              <!-- <div class="input-field col s12 m2">
		              		<input placeholder="0" id="evaluatorID" ng-model="form.evaluatorID" name="evaluatorID" type="number" min="0" max="5">
			                <label for="evaluatorID">Juez ID</label>
		              </div> -->
		            </div>

		            <div>
		            	<table class="striped">
						    <thead>
							    <tr>
							    	<th>KaTa:</th>
							      	<th>
							      		<select class="browser-default" ng-model="form.katatype" ng-change="katachangefun()">
										    <option value="1" selected>Nage No Kata</option>
										    <option value="2" >KATAME–NO–KATA</option>
										    <option value="3" >Kime no Kata</option>
										    <option value="4" >Goshin Jutsu No Kata</option>
									  	</select>
									</th>
									<th class="center">Error Básico -1</th>
									<th class="center">Error Básico -1</th>
									<th class="center">Error Medio -3</th>
									<th class="center">Técnicas con Dificultades -5</th>
									<th class="center">Técnicas olvidada/Cambio orden -10</th>
									<th class="center">TOTAL</th>
							    </tr>
						    </thead>

						    <tbody ng-show="form.katatype == 1">
						    	<?php
						    	$kataAry = ['Ceremonia Apertura', 'Uki otoshi', 'Seoi nage', 'Kara gruma', 'Uki goshi', 'Harai goshi', 'Tsuri komi goshi', 'Okuri ashi harai', 'Sasae tsurikomi ashi', 'Uchi mata', 'Tomoe nage', 'Ura nage', 'Sumi gaeshi', 'Yoko gake', 'Yoko guruma', 'Uki waza', 'Ceremonia Final'];
						    	$num = 1;
						    	foreach ($kataAry as $k_key => $kataname) {
						    		if($k_key == 1) {
										echo '<tr class="sub_kata_name"><td colspan="2">Te-waza</td></tr>';
						    		} else if($k_key == 4) {
						    			echo '<tr class="sub_kata_name"><td colspan="2">Koshi-waza</td></tr>';
						    		} else if($k_key == 7) {
						    			echo '<tr class="sub_kata_name"><td colspan="2">Ashi-waza</td></tr>';
						    		} else if($k_key == 10) {
						    			echo '<tr class="sub_kata_name"><td colspan="2">Ma-sutemi-waza</td></tr>';
						    		} else if($k_key == 13) {
						    			echo '<tr class="sub_kata_name"><td colspan="2">Yoko-sutemi-waza</td></tr>';
						    		}
						    	?>

								<tr>
						     		<td><?php echo $num ?></td>
						     		<td><?php echo $kataname ?></td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est1" t_id="<?php echo $k_key ?>_1" ttid="<?php echo $k_key ?>_1">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est2" t_id="<?php echo $k_key ?>_1" ttid="<?php echo $k_key ?>_2">
									      <span class="lever"></span>
									    </label>
									  </div>
						     		</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est3" t_id="<?php echo $k_key ?>_3">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est4" t_id="<?php echo $k_key ?>_5">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est5" t_id="<?php echo $k_key ?>_10">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
						     			<div class="plu_minu_div">
						     				<a href="javascript:;" t_id="<?php echo $k_key ?>" clicked="false" class="mark_plus"><img src="<?php echo base_url('app-assets') ?>/images/icon/text-plus-icon.png" width="100%"></a>
						     				<input type="text" class="mark_<?php echo $k_key ?> markk" disabled max="10.0" maxlength="2" min="0" value="10.0" />
						     				<a href="javascript:;" t_id="<?php echo $k_key ?>" clicked="false" class="mark_minus"><img src="<?php echo base_url('app-assets') ?>/images/icon/minus-5-xxl.png" width="100%"></a>
						     			</div>
									</td>
						     	</tr>
						    	<?php 
						    	$num++;
						    	} ?>
						    </tbody>

						    <tbody ng-show="form.katatype == 2">
						    	<?php
						    	$kataAry = ['Ceremonia apertura', 'Kesa-gatame', 'Kata-gatame', "Kami-shiho-gatame", 'Yoko-shiho-gatame', 'Kuzure-kami-shiho-gatame', 'Kata-juji-jime', 'Hadaka-jime', 'Okuri-eri-jime', 'Kata-ha-jime', 'Gyaku-juji-jime', 'Ude-garami', 'Ude-hishigi-Juji-gatame', 'Ude-hishigi-Ude-gatame', 'Ude-hishigi-Hiza-gatame', 'Ashi-garami','Ceremonia final'];
						    	$num = 1;
						    	foreach ($kataAry as $k_key => $kataname) {
						    		if($k_key == 1) {
										echo '<tr class="sub_kata_name"><td colspan="2">OSAE-KOMI-WAZA</td></tr>';
						    		} else if($k_key == 6) {
						    			echo '<tr class="sub_kata_name"><td colspan="2">SHIME-WAZA </td></tr>';
						    		} else if($k_key == 11) {
						    			echo '<tr class="sub_kata_name"><td colspan="2">KANSETSU-WAZA</td></tr>';
						    		}
						    	?>

								<tr>
						     		<td><?php echo $num ?></td>
						     		<td><?php echo $kataname ?></td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est1" t_id="<?php echo $k_key ?>_1" ttid="<?php echo $k_key ?>_1">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est2" t_id="<?php echo $k_key ?>_1" ttid="<?php echo $k_key ?>_2">
									      <span class="lever"></span>
									    </label>
									  </div>
						     		</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est3" t_id="<?php echo $k_key ?>_3">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est4" t_id="<?php echo $k_key ?>_5">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est5" t_id="<?php echo $k_key ?>_10">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
						     			<div class="plu_minu_div">
						     				<a href="javascript:;" t_id="<?php echo $k_key ?>" clicked="false" class="mark_plus"><img src="<?php echo base_url('app-assets') ?>/images/icon/text-plus-icon.png" width="100%"></a>
						     				<input type="text" class="mark_<?php echo $k_key ?> markk" disabled max="10" maxlength="2" min="0" value="10.0" />
						     				<a href="javascript:;" t_id="<?php echo $k_key ?>" clicked="false" class="mark_minus"><img src="<?php echo base_url('app-assets') ?>/images/icon/minus-5-xxl.png" width="100%"></a>
						     			</div>
									</td>
						     	</tr>
						    	<?php 
						    	$num++;
						    	} ?>
						    </tbody>

						    <tbody ng-show="form.katatype == 3">
						    	<?php
						    	$kataAry = ['Ceremonia apertura','Ryote-dori  (Two-Hand Hold)', 'Tsukkake  (Stomach Punch)', 'Suri age  (Forehead Thrust)', 'Yoko uchi  (Side Blow)', 'Ushiro-dori  (Hold from behind)', 'Tsukkomi  (Dagger Thrust to Stomach)', 'Kirikomi  (Downward Slash)', 'Yoko tsuki  (Dagger Thrust to Side)', 'Ryote-dori  (Two-Hand Hold)', 'Tsuk-kake  (Punch to Face)', 'Tsukiage  (Uppercut)', 'Suri Age  (Forehead Thrust)', 'Ushiro-dori  (Hold from Behind)', 'Tsukkomi  (Dagger Thrust to Stomach)', 'Kirikomi  (Downward Slash)', 'Nuki kake  (Sword Unsheathing)', 'Kirioroshi  (Downward Cut)', 'Closing Movements'];
						    	$num = 1;
						    	foreach ($kataAry as $k_key => $kataname) {
						    		if($k_key == 1) {
										echo '<tr class="sub_kata_name"><td colspan="2">Idori</td></tr>';
						    		} else if($k_key == 8) {
						    			echo '<tr class="sub_kata_name"><td colspan="2">Tachiai</td></tr>';
						    		}
						    	?>

								<tr>
						     		<td><?php echo $num ?></td>
						     		<td><?php echo $kataname ?></td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est1" t_id="<?php echo $k_key ?>_1" ttid="<?php echo $k_key ?>_1">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est2" t_id="<?php echo $k_key ?>_1" ttid="<?php echo $k_key ?>_2">
									      <span class="lever"></span>
									    </label>
									  </div>
						     		</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est3" t_id="<?php echo $k_key ?>_3">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est4" t_id="<?php echo $k_key ?>_5">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est5" t_id="<?php echo $k_key ?>_10">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
						     			<div class="plu_minu_div">
						     				<a href="javascript:;" t_id="<?php echo $k_key ?>" clicked="false" class="mark_plus"><img src="<?php echo base_url('app-assets') ?>/images/icon/text-plus-icon.png" width="100%"></a>
						     				<input type="text" class="mark_<?php echo $k_key ?> markk" disabled max="10" maxlength="2" min="0" value="10.0" />
						     				<a href="javascript:;" t_id="<?php echo $k_key ?>" clicked="false" class="mark_minus"><img src="<?php echo base_url('app-assets') ?>/images/icon/minus-5-xxl.png" width="100%"></a>
						     			</div>
									</td>
						     	</tr>
						    	<?php 
						    	$num++;
						    	} ?>
						    </tbody>

						    <tbody ng-show="form.katatype == 4">
						    	<?php
						    	$kataAry = ['Ceremonia apertura', 'Ryote dori – two hand hold', 'Hidari eri dori – left lapel hold', 'Migi eri dori – right lapel hold', 'Kata ude dori – single hand hold', 'Ushiro eri dori – back collar hold', 'Ushiro jime – rear choke', 'Kakae dori – rear seizure', 'Naname uchi – slanting strike', 'Ago tsuki – uppercut', 'Gammen tsuki – thrust punch or jab', 'Mae geri – front kick', 'Yoko geri – side kick', 'Tsukkake – close in thrust', 'Choku zuki – straight thrust', 'Furiage – upswing against a stick', 'Furioroshi – downswing against a stick', 'Morote zuke – two hand thrust', 'Shomen zuke – pistol held to abdomen', 'Koshi gamae – pistol at side', 'Haimen zuke – pistol against the back', 'Ceremonia final'];
						    	$num = 1;
						    	foreach ($kataAry as $k_key => $kataname) {
						    		if($k_key == 1) {
										echo '<tr class="sub_kata_name"><td colspan="2">Unarmed Close-in Attacks by Holding</td></tr>';
						    		} else if($k_key == 8) {
						    			echo '<tr class="sub_kata_name"><td colspan="2">Unarmed Attack at a Distance</td></tr>';
						    		} else if($k_key == 13) {
						    			echo '<tr class="sub_kata_name"><td colspan="2">Armed Attack – Knife</td></tr>';
						    		} else if($k_key == 16) {
						    			echo '<tr class="sub_kata_name"><td colspan="2">Armed Attack – Stick</td></tr>';
						    		} else if($k_key == 19) {
						    			echo '<tr class="sub_kata_name"><td colspan="2">Armed Attack – Gun</td></tr>';
						    		}
						    	?>

								<tr>
						     		<td><?php echo $num ?></td>
						     		<td><?php echo $kataname ?></td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est1" t_id="<?php echo $k_key ?>_1" ttid="<?php echo $k_key ?>_1">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est2" t_id="<?php echo $k_key ?>_1" ttid="<?php echo $k_key ?>_2">
									      <span class="lever"></span>
									    </label>
									  </div>
						     		</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est3" t_id="<?php echo $k_key ?>_3">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est4" t_id="<?php echo $k_key ?>_5">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[<?php echo $k_key; ?>].est5" t_id="<?php echo $k_key ?>_10">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
						     			<div class="plu_minu_div">
						     				<a href="javascript:;" t_id="<?php echo $k_key ?>" clicked="false" class="mark_plus"><img src="<?php echo base_url('app-assets') ?>/images/icon/text-plus-icon.png" width="100%"></a>
						     				<input type="text" class="mark_<?php echo $k_key ?> markk" disabled max="10" maxlength="2" min="0" value="10.0" />
						     				<a href="javascript:;" t_id="<?php echo $k_key ?>" clicked="false" class="mark_minus"><img src="<?php echo base_url('app-assets') ?>/images/icon/minus-5-xxl.png" width="100%"></a>
						     			</div>
									</td>
						     	</tr>
						    	<?php 
						    	$num++;
						    	} ?>
						    </tbody>

					  	</table>
		            </div>


		            <div class="row">
		              <div class="row">
	                      <div class="input-field col s6">
	                        <button class="btn cyan waves-effect waves-light left" type="button" id="martformat">Limpair
	                          <i class="material-icons right">find_replace</i>
	                        </button>
	                      </div>
			                <div class="input-field col s6">
			                  <button class="btn cyan waves-effect waves-light right" type="button" id="katasave">Guardar
			                    <i class="material-icons right">send</i>
			                  </button>
			                  <span class="right total_mark">{{ form.total }}</span>
			                </div>
		              </div>
		            </div>

		          </form>
		        </div>
		      </div>
		    </div>
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->
