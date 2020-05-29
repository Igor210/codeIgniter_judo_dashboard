/*================================================================================
	Item Name: Materialize - Material Design Admin Template
	Version: 5.0
	Author: PIXINVENT
	Author URL: https://themeforest.net/user/pixinvent/portfolio
================================================================================

NOTE:
------
PLACE HERE YOUR OWN JS CODES AND IF NEEDED.
WE WILL RELEASE FUTURE UPDATES SO IN ORDER TO NOT OVERWRITE YOUR CUSTOM SCRIPT IT'S BETTER LIKE THIS. */
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope) {

  // Estimate ---------------------------------------
  $scope.form = { 
    rows:[], 
    total: 170,
    competencia: '',
    orden: '',
    date: '',
    place: '',
    evaluatorID: '',
    katatype: 1,
    club_dpto:'',
    tori: '',
    uke: '',
    evaluator: '',
    categoria: '',
    club_dptoAry: initialdata.clubdptopais,
    toriAry: initialdata.tori,
    categoriaAry: initialdata.category,
    ukeAry: initialdata.uke,
    evaluatorAry: initialdata.estimator,
  };

	var kataAry = ['Ceremonia Apertura', 'Uki otoshi', 'Seoi nage', 'Kara gruma', 'Uki goshi', 'Harai goshi', 'Tsuri komi goshi', 'Okuri ashi harai', 'Sasae tsurikomi ashi', 'Uchi mata', 'Tomoe nage', 'Ura nage', 'Sumi gaeshi', 'Yoko gake', 'Yoko guruma', 'Uki waza', 'Ceremonia Final'];    
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
	}

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

	$(document).on('click','.giveMark', function(e) {
     	var temTotal = 0;
    	var spe = $(this).attr('t_id').split("_");
  		var oldMval = $(".mark_"+spe[0]).val();

      var thisobj = $(this);
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
     	// console.log($scope.form);
   	});

   	$(document).on('click','.mark_plus', function (){
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
   	$(document).on('click','.mark_minus', function (){
     	var temTotal = 0;
    	var spe = $(this).attr('t_id');
    	var a = "mark_plus_click"+spe;
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

   	$(document).on('click','#katasave',  function() {
   		if( $("#competencia").val() == "" ){
   			M.toast({ html: "Please fill out this field" });
   			$("#competencia").focus();
   			return;
   		} else if( $("#orden").val() == "" ) {
   			M.toast({ html: "Please fill out this field" });
   			$("#orden").focus();
   			return;
   		} else if( $("#date").val() == "" ) {
        M.toast({ html: "Please fill out this field" });
        $("#date").focus();
        return;
      } else if( $("#place").val() == "" ) {
        M.toast({ html: "Please fill out this field" });
        $("#place").focus();
        return;
      } else if( $("#evaluatorID").val() == "" ) {
        M.toast({ html: "Please fill out this field" });
        $("#evaluatorID").focus();
        return;
      }

   		$.post(
   			base_url + "/home/savekata",
   			$scope.form,
   			function (res) {
   				if(res == 'sucessful'){
   					window.location.href=base_url+ "/home/katalist";
   				}
   			}
		);
   	});

   	$(document).on('click','.kataDel',  function() {
      if(!confirm("Do you want to delete this item")) return;
      	var delId = $(this).attr('rid');
   		$.post(
   			base_url + "/home/deletekata",
   			{ rid : delId },
   			function (res) {
   				if(res == 'sucessful'){
   					window.location.href=base_url+ "/home/katalist";
   				}
   			}
		  );
   	});

   	$(document).on('click','.kataGoEditpage',  function() {
   		var selId = $(this).attr('rid');
   		window.location.href=base_url+ "/home/kataEdit/"+selId;
   	});


    $(document).on('click','.kataGoClonepage',  function() {
      var selId = $(this).attr('rid');
      window.location.href=base_url+ "/home/kataEdit/"+selId+"/clone";
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
              $( ".giveMark[ttid='"+i+"_1']" )[$idx].click();
            } else if(j == 2) {
              $( ".giveMark[ttid='"+i+"_2']" )[$idx].click();
            } else {
              $( ".giveMark[t_id='"+i+"_"+j+"']" )[$idx].click();
            }
          }
        }
      }
      $scope.katachangefun();
    })


    // estimator page ------------------------------
    $(document).on('click','.estiamtorDel', function(){
        if(!confirm("Do you want to delete this item")) return;
        var delId = $(this).attr('rid');
        $.post(
          base_url + "/estimator/delete",
          { rid : delId },
          function (res) {
            if(res == 'sucessful'){
              window.location.href=base_url+ "/estimator/index";
            }
          }
        );
    });
    $(document).on('click','.estiamtorEdit', function(){
        var selId = $(this).attr('rid');
        $.post(
          base_url + "/estimator/getEditRow",
          { rid : selId },
          function (res) {
              var data = JSON.parse(res);
              $('input[name="selId"]').val(data[0].id);
              $('input[name="name"]').val(data[0].name);
              $('input[name="userID"]').val(data[0].userID);
              $('input[name="email"]').val(data[0].email);
              $('input[name="phone"]').val(data[0].phone);
              $('input[name="gender"]').removeAttr('checked');
              if(data[0].gender == 0){
                $('.male').attr("checked", "true");
              } else {
                $('.female').attr("checked", "true");
              }
              $('input[name="is_save"]').val("update");
              $('.modal').modal('open');
              $("input").trigger("select");
          }
        );
    });

    // club_dpto_pais page ------------------------------
    $(document).on('click','.club_dpto_pais_del', function(){
        if(!confirm("Do you want to delete this item")) return;
        var delId = $(this).attr('rid');
        $.post(
          base_url + "/clubdptopais/delete",
          { rid : delId },
          function (res) {
            if(res == 'sucessful'){
              window.location.href=base_url+ "/clubdptopais";
            }
          }
        );
    });
    $(document).on('click','.club_dpto_pais_sel', function(){
        var selId = $(this).attr('rid');
        $.post(
          base_url + "/clubdptopais/getEditRow",
          { rid : selId },
          function (res) {
              var data = JSON.parse(res);
              $('input[name="selId"]').val(data[0].id);
              $('input[name="name"]').val(data[0].name);
              $('input[name="address"]').val(data[0].address);
              $('textarea[name="note"]').text(data[0].note);
              $('input[name="is_save"]').val("update");
              $('.modal').modal('open');
              $("input").trigger("select");
              $("textarea").trigger("select");
          }
        );
    });

    // Tori and Uke ------------------------------------------

    $(document).on('click','.toriorukeDel', function(){
        if(!confirm("Do you want to delete this item")) return;
        var delId = $(this).attr('rid');
        $.post(
          base_url + "/torianduke/delete",
          { rid : delId },
          function (res) {
            if(res == 'sucessful'){
              window.location.href=base_url+ "/torianduke";
            }
          }
        );
    });
    $(document).on('click','.toriorukeEdit', function(){
        var selId = $(this).attr('rid');
        $.post(
          base_url + "/torianduke/getEditRow",
          { rid : selId },
          function (res) {
              var data = JSON.parse(res);
              $('input[name="selId"]').val(data[0].id);
              $('input[name="name"]').val(data[0].name);
              $('textarea[name="note"]').val(data[0].note);
              $('input[name="gender"]').removeAttr('checked');
              if(data[0].gender == 0){
                $('.male').attr("checked", "true");
              } else {
                $('.female').attr("checked", "true");
              }
              $('input[name="torioruke"]').removeAttr('checked');
              if(data[0].torioruke == 0){
                $('.tori').attr("checked", "true");
              } else {
                $('.uke').attr("checked", "true");
              }
              $('input[name="is_save"]').val("update");
              $('.modal').modal('open');
              $("input").trigger("select");
              $("textarea").trigger("select");
          }
        );
    });

    // catagory ------------------

    // club_dpto_pais page ------------------------------
    $(document).on('click','.category_del', function(){
        if(!confirm("Do you want to delete this item")) return;
        var delId = $(this).attr('rid');
        $.post(
          base_url + "/category/delete",
          { rid : delId },
          function (res) {
            if(res == 'sucessful'){
              window.location.href=base_url+ "/category";
            }
          }
        );
    });
    $(document).on('click','.category_sel', function(){
        var selId = $(this).attr('rid');
        $.post(
          base_url + "/category/getEditRow",
          { rid : selId },
          function (res) {
              var data = JSON.parse(res);
              $('input[name="selId"]').val(data[0].id);
              $('input[name="name"]').val(data[0].name);
              
              // $('select>option').removeAttr('selected');
              if(!data[0].isformale){$('#isformale').val("M");}else{$('#isformale').val(data[0].isformale);}
              // $('select>option[value="'+$('#isformale').val()+'"]').attr("selected","selected");
              // $('#isformale').trigger("select");
              // $('select>option[value="'+$('#isformale').val()+'"]').trigger("select");
              
              $('input[name="shortname"]').val(data[0].shortname);
              $('textarea[name="note"]').text(data[0].note);
              $('input[name="is_save"]').val("update");

              $('.modal').modal('open');
              $("input").trigger("select");
              $("textarea").trigger("select");
          }
        );
    });

    $("#kataResultSave").click(function(){
      var result = $("#final_result").text();
      var orden = $("input[name='orden']").val();
      $.post(
          base_url + "/Home/final_result",
          { 
            result : result,
            orden : orden,
          },
          function (res) {
            if (res == "sucessful") {
              alert("Save Sucessful");
            }
          }
        );
    });


});
