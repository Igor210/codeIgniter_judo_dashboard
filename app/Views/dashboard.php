
    <div id="main">
      <div class="row">
        <div class="col s12">
          <div class="container">
            <div class="section section-data-tables">
               <!--card stats start-->
               <div id="card-stats" class="pt-0">
                  <div class="row">
                     <div class="col s12 m6 l6 xl3">
                        <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
                           <div class="padding-4">
                              <div class="row">
                                 <div class="col s5 m5">
                                    <i class="material-icons background-round mt-5">group</i>
                                 </div>
                                 <div class="col s7 m7 right-align">
                                    <p class="no-margin">Participants</p>
                                    <p><?php echo $participants; ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col s12 m6 l6 xl3">
                        <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
                           <div class="padding-4">
                              <div class="row">
                                 <div class="col s5 m5">
                                    <i class="material-icons background-round mt-5">grain</i>
                                 </div>
                                 <div class="col s7 m7 right-align">
                                    <p class="no-margin">Club/Dpto/Pais</p>
                                    <p><?php echo $clubs ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col s12 m6 l6 xl3">
                        <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
                           <div class="padding-4">
                              <div class="row">
                                 <div class="col s5 m5">
                                    <i class="material-icons background-round mt-5">error_outline</i>
                                 </div>
                                 <div class="col s7 m7 right-align">
                                    <p class="no-margin">Total of Errors</p>
                                    <p><?php echo $errors; ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col s12 m6 l6 xl3">
                        <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
                           <div class="padding-4">
                              <div class="row">
                                 <div class="col s5 m5">
                                    <i class="material-icons background-round mt-5">star</i>
                                 </div>
                                 <div class="col s7 m7 right-align">
                                    <p class="no-margin">Individual Top Result</p>
                                    <p><?php echo $individualTopResult; ?></p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--card stats end-->

               <!-- Current balance & total transactions cards-->
               <div class="row vertical-modern-dashboard">
                  <div class="col s12 m4 l4">
                     <!-- Current Balance -->
                     <div class="card animate fadeLeft">
                        <div class="card-content">
                           <h6 class="mb-0 mt-0 display-flex justify-content-between">Current Result 
                           </h6>
                           <div class="current-balance-container">
                              <div id="current-balance-donut-chart" class="current-balance-shadow"></div>
                           </div>
                           <h5 class="center-align">170</h5>
                           <p class="medium-small center-align">Top Result of Participants</p>
                        </div>
                     </div>
                  </div>
                  <div class="col s12 m8 l8 animate fadeRight">
                     <!-- Total Transaction -->
                     <div class="card">
                        <div class="card-content">
                           <h4 class="card-title mb-0">Errors </h4>
                           <div class="total-transaction-container">
                              <div id="total-transaction-line-chart" class="total-transaction-shadow"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!--/ Current balance & total transactions cards-->

               <div class="row">
                  <div class="col s12 m6 l8">
                     <div class="card subscriber-list-card animate fadeRight">
                        <div class="card-content pb-1">
                           <h4 class="card-title mb-0">Current Competencia <i class="material-icons float-right">more_vert</i></h4>
                        </div>
                        <table class="subscription-table responsive-table highlight">
                           <thead>
                              <tr>
                                 <th>Competencia</th>
                                 <th>KaTa</th>
                                 <th>Club/Dpto/Pais</th>
                                 <th>Categoria</th>
                                 <th>Tori</th>
                                 <th>Uke</th>
                                 <th>Final Result</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($allcompetenciadata as $key => $value) {
                                 $katatypeAry = [
                                    "1" => "Noge-no-kata",
                                    "2" => "Karame-no-Kata",
                                    "3" => "Kime-no-Kata",
                                    "4" => "Goshin Jutsu No Kata",
                                 ];
                                 ?>
                                 <tr>
                                    <td><?php echo $value['competencia'] ?></td>
                                    <td><?php echo $katatypeAry[$value['katatype']] ?></td>
                                    <td><?php echo $value['cdname'] ?></td>
                                    <td><?php echo $value['cname'] ?></td>
                                    <td><?php echo $value['tname'] ?></td>
                                    <td><?php echo $value['uname'] ?></td>
                                    <td><?php echo $value['final_result'] ?></td>
                                 </tr>
                              <?php
                              } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="col s12 m6 l4">
                     <div class="card subscriber-list-card animate fadeRight">
                        <div class="card-content pb-1">
                           <h4 class="card-title mb-0">Categories <i class="material-icons float-right">more_vert</i></h4>
                        </div>
                        <table class="subscription-table responsive-table highlight">
                           <thead>
                              <tr>
                                 <th>Name</th>
                                 <th>Slang</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php foreach ($categories as $key => $value) {
                              ?>
                                 <tr>
                                    <td><?php echo $value['name'] ?></td>
                                    <td><?php echo $value['shortname'] ?></td>
                                 </tr>
                              <?php
                              } ?>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   var avgresult = "<?php echo $individualAverageResult; ?>";
   var errorsAry = <?php echo json_encode($errorsAry); ?>;
</script>