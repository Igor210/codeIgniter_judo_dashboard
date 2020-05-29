
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0"><span>Estimate Edit</span></h5>
              </div>
              <div class="col s2 m6 l6">
              	<a href="<?php echo base_url() ?>/home/katalist" class="btn waves-effect waves-light breadcrumbs-btn right">Return</a>
                
              </div>
            </div>
          </div>
        </div>

        <?php $data = json_decode($initailData); ?>

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
		                	<!-- <option ng-repeat="club in form.club_dptoAry" value="{{ club.id }}">{{ club.name }}</option> -->
		                	<?php foreach ($data->clubdptopais as $key => $value) {
		                		echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		                	} ?>
		                </select>
		                <label>Club/Dpto/Pais</label>
		              </div>
		              <div class="input-field col s12 m4 l4">
		                <select name="tori" ng-model="form.tori">
		                	<!-- <option ng-repeat="tori in form.toriAry" value="{{ tori.id }}">{{ tori.name }}</option> -->
		                	<?php foreach ($data->tori as $key => $value) {
		                		echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		                	} ?>
		                </select>
		                <label>Tori</label>
		              </div>
		            </div>
		            <div class="row">
		              <div class="input-field col s12 m3">
		                <select name="uke" ng-model="form.uke">
		                	<!-- <option ng-repeat="uke in form.ukeAry" value="{{ uke.id }}">{{ uke.name }}</option> -->
		                	<?php foreach ($data->uke as $key => $value) {
		                		echo '<option value="'.$value->id.'">'.$value->name.'</option>';
		                	} ?>
		                </select>
		                <label>Uke</label>
		              </div>
		              <div class="input-field col s12 m3">
			                <select name="categoria" ng-model="form.categoria">
			                	<!-- <option ng-repeat="categoria in form.categoriaAry" value="{{ categoria.id }}">{{ categoria.name }}</option> -->
			                	<?php foreach ($data->category as $key => $value) {
			                		echo '<option value="'.$value->id.'">'.$value->name.'</option>';
			                	} ?>
			                </select>
			                <label>Categoria</label>
		              </div>
		              <div class="input-field col s12 m3">
			                <select name="evaluator" ng-model="form.evaluator">
			                	<!-- <option ng-repeat="evaluator in form.evaluatorAry" value="{{ evaluator.id }}">{{ evaluator.name }}</option> -->
			                	<?php foreach ($data->estimator as $key => $value) {
			                		echo '<option value="'.$value->id.'">Juez#'.$value->userID." ".$value->name.'</option>';
			                	} ?>
			                </select>
			                <label>List of Evaluators name to the selected</label>
		              </div>
		              <!-- <div class="input-field col s12 m2">
		              		<input id="evaluatorID" ng-model="form.evaluatorID" name="evaluatorID" type="text" min="0" max="5">
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
						    <tbody>
						    	
								<tr ng-repeat="(key, row) in form.rows">
						     		<td>{{ key+1 }}</td>
						     		<td>{{ row['kata'] }}</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[key].est1" t_id="{{key}}_1"  ttid="{{key}}_1">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[key].est2" t_id="{{key}}_1"  ttid="{{key}}_2">
									      <span class="lever"></span>
									    </label>
									  </div>
						     		</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[key].est3" t_id="{{key}}_3">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[key].est4" t_id="{{key}}_5">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
									  <div class="switch">
									    <label>
									      <input type="checkbox" class="giveMark" ng-model="form.rows[key].est5" t_id="{{key}}_10">
									      <span class="lever"></span>
									    </label>
									  </div>
									</td>
						     		<td>
						     			<div class="plu_minu_div">
						     				<a href="javascript:;" t_id="{{key}}" clicked="false" class="mark_plus"><img src="<?php echo base_url('app-assets') ?>/images/icon/text-plus-icon.png" width="100%"></a>
						     				<input type="text" class="mark_{{key}} markk" disabled max="10" maxlength="2" min="0" value="10" />
						     				<a href="javascript:;" t_id="{{key}}" clicked="false" class="mark_minus"><img src="<?php echo base_url('app-assets') ?>/images/icon/minus-5-xxl.png" width="100%"></a>
						     			</div>

									</td>
						     	</tr>
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
	<div id="theme-cutomizer-out" class="theme-cutomizer sidenav row"></div>

    
    <!-- BEGIN: Footer-->

    <footer class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
      <div class="footer-copyright">
        <div class="container"><span>&copy; 2020  </span><span class="right hide-on-small-only">Developed by <a href="http://viktoria.22web.org/">Viktoria</a></span></div>
      </div>
    </footer>
    <!-- END: Footer-->

    <script type="text/javascript"> var base_url = "<?php echo base_url(); ?>"; </script>

	<script src="<?php echo base_url('app-assets') ?>/js/Angular/angular.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <script src="<?php echo base_url('app-assets') ?>/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="<?php echo base_url('app-assets') ?>/js/plugins.js"></script>
    <script src="<?php echo base_url('app-assets') ?>/js/search.js"></script>
    <script src="<?php echo base_url('app-assets') ?>/js/custom/custom-script.js"></script>
    <script type="text/javascript">
    	var initialdata = <?php echo $initailData ?>;
    	var is_clone = "<?php echo $is_clone ?>";

    	var app = angular.module('myApp', []);
		app.controller('myCtrl', function($scope) {
        	$scope.form = { 
				rows:<?php echo $katadata[0]['rows'] ?>, 
			    // club_dptoAry: initialdata.clubdptopais,
			    // toriAry: initialdata.tori,
			    // categoriaAry: initialdata.category,
			    // ukeAry: initialdata.uke,
			    // evaluatorAry: initialdata.estimator,
			    total: "<?php echo $katadata[0]['total']; ?>",
			    categoria: "<?php echo $katadata[0]['categoria']; ?>",
			    date: "<?php echo $katadata[0]['datetime']; ?>",
			    competencia: "<?php echo $katadata[0]['competencia']; ?>",
			    orden: "<?php echo $katadata[0]['orden']; ?>",
			    place: "<?php echo $katadata[0]['place']; ?>",
			    evaluatorID: "<?php echo $katadata[0]['judgeNum']; ?>",
			    evaluator: "<?php echo $katadata[0]['evaluatorID']; ?>",
			    katatype: "<?php echo $katadata[0]['katatype']; ?>",
			    club_dpto:"<?php echo $katadata[0]['club_dpto']; ?>",
			    tori: "<?php echo $katadata[0]['tori']; ?>",
			    uke: "<?php echo $katadata[0]['uke']; ?>",

			    editId: <?php echo $katadata[0]['id'] ?>
			};	
			var originRows = <?php echo $katadata[0]['rows'] ?>;

			// console.log($scope.form);

			setTimeout(function(){
				var errM = {1:"est1",2:"est2",3:"est3",5:"est4",10:"est5"};
				var temTotal = 0;	
				for (var i = 0; i < $scope.form.rows.length; i++) {
					for (var j in errM) {
						var tem = $scope.form.rows[i];
						var k = errM[j];
						if(tem[k] == 'true'){
							if(j == 1){
								$( ".giveMark[ttid='"+i+"_1']" ).click();
							} else if(j == 2) {
								$( ".giveMark[ttid='"+i+"_2']" ).click();
							} else {
								$( ".giveMark[t_id='"+i+"_"+j+"']" ).click();
							}
						}
					}
					$scope.form.rows[i].stotal = originRows[i].stotal;
					$(".mark_"+i).val(originRows[i].stotal);
		     		temTotal += originRows[i].stotal*1;
				}
		     	$('.total_mark').text(temTotal);
			},500);

			$scope.katachangefun = function(){
			    if($scope.form.katatype == 1){
			      kataAry = ['Ceremonia Apertura', 'Uki otoshi', 'Seoi nage', 'Kara gruma', 'Uki goshi', 'Harai goshi', 'Tsuri komi goshi', 'Okuri ashi harai', 'Sasae tsurikomi ashi', 'Uchi mata', 'Tomoe nage', 'Ura nage', 'Sumi gaeshi', 'Yoko gake', 'Yoko guruma', 'Uki waza', 'Ceremonia Final'];
			    } else if($scope.form.katatype == 2) {
			      kataAry = ['Ceremonia apertura', 'Kesa-gatame', 'Kata-gatame', "Kami-shiho-gatame", 'Yoko-shiho-gatame', 'Kuzure-kami-shiho-gatame', 'Kata-juji-jime', 'Hadaka-jime', 'Okuri-eri-jime', 'Kata-ha-jime', 'Gyaku-juji-jime', 'Ude-garami', 'Ude-hishigi-Juji-gatame', 'Ude-hishigi-Ude-gatame', 'Ude-hishigi-Hiza-gatame', 'Ashi-garami','Ceremonia final'];
			    } else if($scope.form.katatype == 3) {
			      kataAry = ['Ceremonia apertura','Ryote-dori  (Two-Hand Hold)', 'Tsukkake  (Stomach Punch)', 'Suri age  (Forehead Thrust)', 'Yoko uchi  (Side Blow)', 'Ushiro-dori  (Hold from behind)', 'Tsukkomi  (Dagger Thrust to Stomach)', 'Kirikomi  (Downward Slash)', 'Yoko tsuki  (Dagger Thrust to Side)', 'Ryote-dori  (Two-Hand Hold)', 'Tsuk-kake  (Punch to Face)', 'Tsukiage  (Uppercut)', 'Suri Age  (Forehead Thrust)', 'Ushiro-dori  (Hold from Behind)', 'Tsukkomi  (Dagger Thrust to Stomach)', 'Kirikomi  (Downward Slash)', 'Nuki kake  (Sword Unsheathing)', 'Kirioroshi  (Downward Cut)', 'Closing Movements'];
			    } else if($scope.form.katatype == 4) {
			      kataAry = ['Ceremonia apertura', 'Ryote dori – two hand hold', 'Hidari eri dori – left lapel hold', 'Migi eri dori – right lapel hold', 'Kata ude dori – single hand hold', 'Ushiro eri dori – back collar hold', 'Ushiro jime – rear choke', 'Kakae dori – rear seizure', 'Naname uchi – slanting strike', 'Ago tsuki – uppercut', 'Gammen tsuki – thrust punch or jab', 'Mae geri – front kick', 'Yoko geri – side kick', 'Tsukkake – close in thrust', 'Choku zuki – straight thrust', 'Furiage – upswing against a stick', 'Furioroshi – downswing against a stick', 'Morote zuke – two hand thrust', 'Shomen zuke – pistol held to abdomen', 'Koshi gamae – pistol at side', 'Haimen zuke – pistol against the back', 'Ceremonia final'];
			    }
			    var temTotal = 0;
			    for (var i = 0; i < kataAry.length; i++) {
			      $scope.form.rows[i] = {
			        kata : kataAry[i],
			        est1 : false,
			        est2 : false,
			        est3 : false,
			        est4 : false,
			        est5 : false,
			        stotal : 10.0
			      }
			      temTotal += 10;
			    }
			    $('.markk').val(10.0);
			    $scope.form.total = temTotal;
			    $('.total_mark').text(temTotal);
			  }

			$(document).on("click",".giveMark", function(e) {
		     	var temTotal = 0;
		      	var spe = $(this).attr('t_id').split("_");
		  		var oldMval = $(".mark_"+spe[0]).val();

		      	if ($(this).prop("checked")) {
		      		var stotalVal = oldMval*1 - spe[1]*1;
		      	} else {
					var stotalVal = oldMval*1 + spe[1]*1;
		      	}

				var valarr = [1,1,3,5,10];
			      for (var i = 0; i < valarr.length; i++) {
			        if( (stotalVal - valarr[i]) < 0 ){
			          if( ! $('input[t_id="'+spe[0]+"_"+valarr[i]+'"]').prop("checked") ){
			            $('input[t_id="'+spe[0]+"_"+valarr[i]+'"]').attr("disabled","disabled");
			          }
			        } else {
			          $('input[t_id="'+spe[0]+"_"+valarr[i]+'"]').removeAttr("disabled");
			        }
			      }
			      $(".plu_minu_div a[t_id='"+spe[0]+"']").attr("clicked", "false");
			      if(stotalVal == 0){
			        $("a[t_id='"+spe[0]+"'].mark_minus").attr("clicked", "true");
			      } else if (stotalVal == 10) {
			        $("a[t_id='"+spe[0]+"'].mark_plus").attr("clicked", "true");
			      }

		  		$(".mark_"+spe[0]).val(stotalVal);
		     	
		     	$scope.form.rows[spe[0]].stotal = stotalVal;
		     	
		     	for (const property in $scope.form.rows) {
		     		temTotal += $scope.form.rows[property].stotal*1;
		     	}
		     	$scope.form.total = temTotal;
		     	$('.total_mark').text(temTotal);
		   	});

	   		$(document).on("click",".mark_plus", function(e) {
		     	var temTotal = 0;
		      	var spe = $(this).attr('t_id');
		      	
		   		if( $(this).attr("clicked") == "false" ){
			  		var oldMval = $(".mark_"+spe).val();
			  		if(oldMval == 10) return;

			  		$(".mark_"+spe).val(oldMval*1 + 0.5);
			     	
			     	$scope.form.rows[spe].stotal = oldMval*1 + 0.5;
			     	
			     	for (const property in $scope.form.rows) {
			     		temTotal += $scope.form.rows[property].stotal*1;
			     	}
			     	$scope.form.total = temTotal;
			     	$('.total_mark').text(temTotal);
			    	$(this).attr("clicked", "true");
			    	$("a[t_id='"+spe+"'].mark_minus").attr("clicked", "false");
		   		}
		   	});
		   	$(document).on("click",".mark_minus", function(e) {
		     	var temTotal = 0;
		      	var spe = $(this).attr('t_id');
		      	var a = "mark_plus_click"+spe
		   		if( $(this).attr("clicked") == "false" ){
			  		var oldMval = $(".mark_"+spe).val();
			  		if(oldMval == 0) return;

			  		$(".mark_"+spe).val(oldMval*1 - 0.5);
			     	
			     	$scope.form.rows[spe].stotal = oldMval*1 - 0.5;
			     	
			     	for (const property in $scope.form.rows) {
			     		temTotal += $scope.form.rows[property].stotal*1;
			     	}
			     	$scope.form.total = temTotal;
			     	$('.total_mark').text(temTotal);
			     	$(this).attr("clicked", "true");
			     	$("a[t_id='"+spe+"'].mark_plus").attr("clicked", "false");
		   		}
		   	});

			$(document).on("click","#katasave", function(e) {
		   		if( $("#competencia").val() == "" ){
		   			M.toast({ html: "Please enter Competencia" });
		   			$("#competencia").focus();
		   			return;
		   		} else if( $("#orden").val() == "" ) {
		   			M.toast({ html: "Please enter Orden" });
		   			$("#orden").focus();
		   			return;
		   		}
		   		if(is_clone == "true"){
		   			var sendUrl = "/home/savekata";
		   		} else {
					var sendUrl = "/home/updatekata";
		   		}
		   		$.post(
		   			base_url + sendUrl,
		   			$scope.form,
		   			function (res) {
		   				if(res == 'sucessful'){
		   					window.location.href=base_url+ "/home/katalist";
		   				}
		   			}
				);
		   	});


		    $(document).on('click', '#martformat', function() {
		      var errM = {1:"est1",2:"est2",3:"est3",5:"est4",10:"est5"};
		      var temTotal = 0; 
		      for (var i = 0; i < $scope.form.rows.length; i++) {
		        for (var j in errM) {
		          var tem = $scope.form.rows[i];
		          var k = errM[j];
		          if(tem[k] == true){
		            if(($scope.form.katatype*1-1) == "2"){
		              $idx = 0;
		            }else if(($scope.form.katatype*1-1) == "3"){
		              $idx = 1;
		            }else{
		              $idx = ($scope.form.katatype*1-1);
		            }
		            if(j == 1){
		              $( ".giveMark[ttid='"+i+"_1']" ).click();
		            } else if(j == 2) {
		              $( ".giveMark[ttid='"+i+"_2']" ).click();
		            } else {
		              $( ".giveMark[t_id='"+i+"_"+j+"']" ).click();
		            }
		          }
		        }
		      }
		      $scope.katachangefun();
		    })

		});
    </script>
    <script src="<?php echo base_url('app-assets') ?>/js/scripts/customizer.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <?php if($pageaction == "dashboard"){
    ?>
    <script src="<?php echo base_url('app-assets') ?>/js/scripts/dashboard-modern.js"></script>
	<?php } ?>
    <script src="<?php echo base_url('app-assets') ?>/js/scripts/intro.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>