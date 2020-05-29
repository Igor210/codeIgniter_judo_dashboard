<div id="main">
      <div class="row section-data-tables">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div id="judo-result-wrapper" class="search card z-depth-0 center-align">
            <div class="card-content pb-0 pl-1 pr-1">
              <form method="get" action="<?php echo base_url() ?>/judging/getdata">
                <div class="input-field col s12">
                  <h5>System of Judging</h5>
                  <input placeholder="Orden" name="orden" type="text" value="<?php echo isset($_GET['orden'])?$_GET['orden']:""; ?>" required class="search-box invalid validate white search-circle">
                </div>
              </form>
              <?php if(isset($_GET['orden'])){ ?>
              <div class="row">
                  <div class="col s12 m6 l4 mb-1">
                    <div class="col s5 m5 l4 right-align">
                      <a href="javascript:;">Competencia</a>
                    </div>
                    <div class="col s7 m7 l8 left-align">
                      <p class="m-0"><?php echo isset($data['competencia'])?$data['competencia']:""; ?></p>
                    </div>
                  </div>
                  <div class="col s12 m6 l4 mb-1">
                    <div class="col s5 m5 l4 right-align">
                      <a href="javascript:;">Category</a>
                    </div>
                    <div class="col s7 m7 l8 left-align">
                      <p class="m-0"><?php echo isset($data['cname'])?$data['cname']:""; ?></p>
                    </div>
                  </div>
                  <div class="col s12 m6 l4 mb-1">
                    <div class="col s5 m5 l4 right-align">
                      <a href="javascript:;">Club/Dpto/Pais</a>
                    </div>
                    <div class="col s7 m7 l8 left-align">
                      <p class="m-0"><?php echo isset($data['cdname'])?$data['cdname']:""; ?></p>
                    </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col s12 m6 l6 mb-1">
                    <div class="col s5 m5 l4 right-align">
                      <a href="javascript:;">Tori</a>
                    </div>
                    <div class="col s7 m7 l8 left-align">
                      <p class="m-0"><?php echo isset($data['tname'])?$data['tname']:""; ?></p>
                    </div>
                  </div>
                  <div class="col s12 m6 l6 mb-1">
                    <div class="col s5 m5 l4 right-align">
                      <a href="javascript:;">Uke</a>
                    </div>
                    <div class="col s7 m7 l8 left-align">
                      <p class="m-0"><?php echo isset($data['uname'])?$data['uname']:""; ?></p>
                    </div>
                  </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>

        <!-- Bordered Table -->
        <div class="row">
          <div class="col s12 m12 l12">
            <div id="bordered-table" class="card card card-default scrollspy">
              <div class="card-content">
                <div class="row">
                  <div class="col s12">
                    <?php 
                      $katalist = isset($data['rows'])?json_decode($data['rows']):[]; ?>
                    <table class="bordered responsive-table">
                      <thead>
                        <tr>
                          <th>Kata</th>
                          <th>Juez#1</th>
                          <th>Juez#2</th>
                          <th>Juez#3</th>
                          <th>Juez#4</th>
                          <th>Juez#5</th>
                          <th>Average</th>
                          <th>(Sum-Max-Min)/3</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $subtotal1 = 0;
                        $subtotal2 = 0;
                        $subtotal3 = 0;
                        $subtotal4 = 0;
                        $subtotal5 = 0;
                        $avgtotal = 0;
                        $smmtal = 0;
                        foreach ($katalist as $key => $value) {
                          $juezval1 = isset($databyjudge['est1'])?$databyjudge['est1'][$key]->stotal:"";
                          $juezval2 = isset($databyjudge['est2'])?$databyjudge['est2'][$key]->stotal:"";
                          $juezval3 = isset($databyjudge['est3'])?$databyjudge['est3'][$key]->stotal:"";
                          $juezval4 = isset($databyjudge['est4'])?$databyjudge['est4'][$key]->stotal:"";
                          $juezval5 = isset($databyjudge['est5'])?$databyjudge['est5'][$key]->stotal:"";
                          $temsum = (float)($juezval1) + (float)($juezval2) + (float)($juezval3) + (float)($juezval4) + (float)($juezval5);
                          $temavg = round(($temsum / 5), 1);

                          $smmAry = [(float)($juezval1), (float)($juezval2), (float)($juezval3), (float)($juezval4), (float)($juezval5)];
                          $rowmax = max($smmAry);
                          $rowmin = min($smmAry);
                        ?>
                          <tr>
                            <td><?php echo $value->kata; ?></td>
                            <td><?php echo $juezval1; ?></td>
                            <td><?php echo $juezval2; ?></td>
                            <td><?php echo $juezval3; ?></td>
                            <td><?php echo $juezval4; ?></td>
                            <td><?php echo $juezval5; ?></td>
                            <td><?php echo $temavg; ?></td>
                            <td><?php echo round(($temsum-$rowmin-$rowmax)/3, 2); ?></td>
                          </tr>
                        <?php 
                          $subtotal1 += (float)$juezval1;
                          $subtotal2 += (float)$juezval2;
                          $subtotal3 += (float)$juezval3;
                          $subtotal4 += (float)$juezval4;
                          $subtotal5 += (float)$juezval5;
                          $avgtotal += (float)$temavg;
                          $smmtal += (float)round(($temsum-$rowmin-$rowmax)/3, 2);
                          }
                          ?>
                        <tr style="background: #fce4ec">
                            <td>Total</td>
                            <td><?php echo $subtotal1; ?></td>
                            <td><?php echo $subtotal2; ?></td>
                            <td><?php echo $subtotal3; ?></td>
                            <td><?php echo $subtotal4; ?></td>
                            <td><?php echo $subtotal5; ?></td>
                            <td><?php echo $avgtotal; ?></td>
                            <td><?php echo $smmtal; ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="row">
                    <div class="col s12 m4 l4">

                    </div>
                    <div class="col s12 m4 l4">
                      <div class="col s12">
                        <div class="center promo promo-example mt-2">
                          <p class="flow-text">Result &nbsp;&nbsp;&nbsp;&nbsp; <b class="red-text" id="final_result"><?php echo $smmtal ?></b></p>
                        </div>
                      </div>

                    </div>
                    <div class="col s12 m4 l4">
                      <div class="input-field col s12">
                        <button class="btn cyan waves-effect waves-light right" type="button" id="kataResultSave">Guardar
                          <i class="material-icons right">send</i>
                        </button>
                      </div>

                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
</div>
