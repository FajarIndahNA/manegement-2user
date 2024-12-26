<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap-icons/font/bootstrap-icons.min.css') }}">
    <link href="{{ asset('dist/bootstrap/bootstrap.min.ori.css') }}" rel="stylesheet" >
    <!-- <script src="{{ asset('dist/bootstrap/popper.min.js') }}"></script> -->
    <script src="{{ asset('dist/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dist/justgage/raphael-2.1.4.min.js') }}"></script>
    <script src="{{ asset('dist/justgage/justgage_1.2.9.min.js') }}"></script>
    <style>
      .gagu{
      display:none;
      }

      .hovr:hover .gagu{
      animation-duration: 3s;
      display:inline;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid" style="width: 1920px;">      <!-- start web content container -->
      <div class="position-relative">
        <!-- ******** MAP IMAGE ******** -->
        <img src="{{ asset('dist/semarang_port_mapv3_efx.jpg') }}" class="img-fluid z-n1 position-absolute" alt="">
        <!-- <img src="{{ asset('dist/SemarangPort_MAP.min.jpg') }}" class="img-fluid z-n1 position-absolute" alt=""> -->

        <!-- ******** JAM & LOGO ******** -->
        <div id="datetime" class="position-absolute fw-bold fs-5" style="left:15px;top:25px;color:darkgrey;text-shadow: 0px 0px 7px black;"></div>
        <div class="position-absolute" style="left:1555px;top:25px;">
            <img src="{{ asset('dist/Logo_Pelindo.png') }}" style="height: 65px" id="" >
        </div>

<!-- _________________ CARD of KBB 1 _________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:10rem;left:390px;top:240px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>KBB 1</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_2"></td>
              <td rowspan="2" width="50px" class="text-end" id="_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="_usonic"></div>
        </div>

<!-- _________________ CARD of KBB 2 _________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:10rem;left:145px;top:390px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>KBB 2</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_2"></td>
              <td rowspan="2" width="50px" class="text-end" id="_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="_usonic"></div>
        </div>

<!-- _________________ CARD of KBB 3 _________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:10rem;left:25px;top:660px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>KBB 3</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_2"></td>
              <td rowspan="2" width="50px" class="text-end" id="_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="_usonic"></div>
        </div>

<!-- _________________ CARD of KBT KEPANDUAN _________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:13rem;left:415px;top:400px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>KBT KEPANDUAN</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_2"></td>
              <td rowspan="2" width="50px" class="text-end" id="_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="_usonic"></div>
        </div>

<!-- _________________ CARD of AMPENAN _________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:10rem;left:285px;top:620px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>AMPENAN</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_2"></td>
              <td rowspan="2" width="50px" class="text-end" id="_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="_usonic"></div>
        </div>

<!-- _________________CARD of DELI _________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:10rem;left:625px;top:282px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>DELI</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="deli_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="deli_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="deli_2"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="deli_3"></td>
              <td rowspan="2" width="50px" class="text-end" id="deli_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td><td>P3</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="deli_usonic"></div>
        </div>

<!-- _________________CARD of CLUSTER 3 _________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:11rem;left:795px;top:690px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>CLUSTER 3</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="cluster3_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="cluster3_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="cluster3_2"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="cluster3_3"></td>
              <td rowspan="2" width="50px" class="text-end" id="cluster3_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td><td>P3</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="cluster3_usonic"></div>
        </div>

<!-- _________________CARD of Term.PENUMPANG _________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:12rem;left:814px;top:240px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>Term.PENUMPANG</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_2"></td>
              <td rowspan="2" width="50px" class="text-end" id="_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="_usonic"></div>
        </div>

<!-- _________________CARD of KANTOR _________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:11rem;left:1005px;top:350px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>KANTOR</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_2"></td>
              <td rowspan="2" width="50px" class="text-end" id="_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="_usonic"></div>
        </div>

<!-- _________________ CARD of BEST  _________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:10rem;left:1160px;top:485px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>BEST</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_2"></td>
              <td rowspan="2" width="50px" class="text-end" id="_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="_usonic"></div>
        </div>

<!-- _________________CARD of RTK TIMUR_________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:12rem;left:1685px;top:765px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>RTK TIMUR</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_2"></td>
              <td rowspan="2" width="50px" class="text-end" id="_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="_usonic"></div>
        </div>

<!-- _________________CARD of PRASASTI _________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:10rem;left:890px;top:95px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>PRASASTI</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="pras_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="pras_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="pras_2"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="pras_3"></td>
              <td rowspan="2" width="50px" class="text-end" id="pras_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td><td>P3</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="pras_usonic"></div>
        </div>

<!-- _________________CARD of CY 1_________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:10rem;left:1115px;top:40px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>CY 1</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="cy1_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="cy1_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="cy1_2"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="cy1_3"></td>
              <td rowspan="2" width="50px" class="text-end" id="cy1_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td><td>P3</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="cy1_usonic"></div>
        </div>

<!-- _________________CARD of CY 2_________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:10rem;left:1175px;top:165px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>CY 2</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_2"></td>
              <td rowspan="2" width="50px" class="text-end" id="_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="_usonic"></div>
        </div>

<!-- _________________CARD of CY 4_________________ -->
        <div class="card position-absolute border-light border-2 rounded-4" style="width:10rem;left:1215px;top:285px;background:rgba(5,116,190,0.6);color:#ddd;text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="mb-1 ms-2 me-1 fw-bold z-3">
            <table width="100%">
              <tr><td>CY 4</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px;" id="_conn"></td></tr>
            </table>
          </div>
          <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
            <tr>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_1"></td>
              <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="_2"></td>
              <td rowspan="2" width="50px" class="text-end" id="_usonic_tx">0cm</td>
            </tr>
            <tr>
              <td>P1</td><td>P2</td>
            </tr>
          </table></div>
          <div class="position-absolute" style="width:100%;bottom:0px;border-radius:9px 9px 13px 13px;transition:height 1s ease,background 2s;" id="_usonic"></div>
        </div>

<!-- _________________CARD of CLUSTER 2_________________ -->
        <div class="card position-absolute border-light border-2 rounded-4 hovr" style="width:11rem;left:1445px;top:255px;background:rgba(255,255,255,0.3);text-shadow:0 0 5px black;box-shadow:-2px 2px 5px black;">
          <div class="card border-2 rounded-4" style="background:rgba(5,116,190,0.6);color:#ddd;">
            <div class="mb-1 ms-2 me-1 fw-bold z-3">
              <table width="100%">
                <tr><td>CLUSTER 2</td><td class="text-end"><img src="{{ asset('dist/no-SIGNAL-ICON.png') }}" style="height:15px" id="cluster2_conn"></td></tr>
              </table>
            </div>
            <div class="text-center fw-bold font-monospace ms-1 z-3" style="font-size:0.9em;"><table>
              <tr>
                <td width="35px"><img src="{{ asset('dist/pump_broken.png') }}" style="width:34px" id="cluster2_1"></td>
                <td width="35px"><img src="{{ asset('dist/pump_standby.png') }}" style="width:34px" id="cluster2_2"></td>
                <td width="35px"><img src="{{ asset('dist/pump_standby.png') }}" style="width:34px" id="cluster2_3"></td>
                <td rowspan="2" width="50px" class="text-end" id="cluster2_usonic_tx">0cm</td>
              </tr>
              <tr>
                <td>P1</td><td>P2</td><td>P3</td>
              </tr>
            </table></div>
            <div class="position-absolute" style="width:100%;bottom:0px;border-radius:11px 11px 13px 13px;transition:height 1s ease,background 2s;" id="cluster2_usonic"></div>
          </div>
          <!--  -->
          <div class="gagu" style="height:100%;">
            <div class="" id="gage" style="width:90px; height:60px;"></div>
          </div>
        </div>



        <div class="card position-absolute" style="left:303px;top:75px;width:6rem;height:80px;background:rgba(135,206,250,0.5);">
        <div class="" id="gage2" style="width:5rem;"></div>
      </div>


      </div>  <!-- end of relative position -->

      <div class="accordion position-fixed bottom-0 start-0 end-0" id="deviceSummary" style="z-index:1070;">
        <button class="accordion-button collapsed fw-bold fs-5" data-bs-toggle="collapse" data-bs-target="#contentSummary" aria-expanded="false" style="background:rgba(13, 110, 253,0.9);color:whitesmoke;">Device Summary</button>
          
          <div class="accordion-collapse collapse" id="contentSummary" data-bs-parent="#deviceSummary" style="background:rgba(173, 216, 230,0.7);">
            <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            
          </div>
        </div>
      </div>

      
    </div>                  <!-- end of web content container -->
    






    

<!-- <button id="example" type="button" class="btn btn-lg btn-danger" data-bs-toggle="popover" data-bs-title="Popover title" data-bs-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button> -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js') }}" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js') }}" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->

    <script type="text/javascript">
      function displayCurrentDateTime() {
          const now = new Date(); // Mendapatkan waktu saat ini

          const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
          const day = days[now.getDay()]
          const date = now.getDate()
          const months = ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]
          const month = months[now.getMonth()]
          const year = now.getFullYear()
          const hours = String(now.getHours()).padStart(2, '0')
          const minutes = String(now.getMinutes()).padStart(2, '0')
          const seconds = String(now.getSeconds()).padStart(2, '0')

          const currentDateTime = `${day}, ${date} ${month} ${year}<br>${hours}:${minutes}:${seconds}`;
          document.getElementById('datetime').innerHTML=currentDateTime
      }

      let atNow = Date.now().toString().substr(0,10)
      

      async function dataApi(url){
        const apiSensor = await fetch(url)
        return await apiSensor.json()
      }

//pumpFetching(alamat_url_api, interval_pembacaan_api ,id_pada_elemen_dom1 ,id_pada_elemen_dom2 ,id_pada_elemen_dom3 )
function pumpFetching(uri, interval,id5,id4,id1,id2,id3) {
    const fetchData = async () => {
        try {
          const data1 = await dataApi(uri);
          let statPum1=data1.data.statusPump1
          let statPum2=data1.data.statusPump2
          let statPum3=data1.data.statusPump3
          let usonic=data1.data.ultrasonic
          let on_off=data1.data.nominalCurrent
          // console.log(usonic)

          let domOn = (id) => {
            return document.getElementById(id).src='dist/Pompa_p1_on.gif'
          }
          let domOff = (id) => {
            return document.getElementById(id).src='dist/pump_standby.png'
          }
          let water=(usonic/300)*100
          let waterText=id4+"_tx"
          let bgColor='rgba(50,182,233, 0.7)' //normal water 10,90,255 #0055ee #FFD700 #DC143C
          if(water>=100){water=100}

          if (on_off==36) {
            if(water>=50 && water<80){bgColor='rgba(255,255,0, 0.6)'} //warning water
            if(water>=80){bgColor='rgba(240,0,0, 0.6)'} //danger water
            if(statPum1=="ON"){domOn(id1)} else{domOff(id1)}
            if(statPum2=="ON"){domOn(id2)} else{domOff(id2)}
            if(statPum3=="ON"){domOn(id3)} else{domOff(id3)}

            document.getElementById(id4).style.height=water.toString()+"%"
            document.getElementById(id4).style.background=bgColor
            document.getElementById(waterText).innerHTML=usonic.toString()+"cm"
            document.getElementById(id5).src='dist/SIGNAL-ICON.png'
          }
          else{
            document.getElementById(id1).src='dist/error.png'
            document.getElementById(id2).src='dist/error.png'
            document.getElementById(id3).src='dist/error.png'
            document.getElementById(id4).style.height=0+"%"
            document.getElementById(id4).style.background=bgColor
            document.getElementById(waterText).innerHTML="0cm"
            document.getElementById(id5).src='dist/no-SIGNAL-ICON.png'
          }

        }
      catch (error) {   //jika gagal mendapakan API JSON
            // console.error('Failed to fetch data:', error);
        }
    }
    //get first data
    fetchData()

    const intervalId = setInterval(fetchData, interval)
    return () => clearInterval(intervalId)
}

function weather(){
  const fetchData = async () => {
    try {
      // const data1=await dataApi('https://api.openweathermap.org/data/2.5/weather?lat=-6.9464&lon=110.4246&appid=aeca8012dba8b9e855ca149019c055e2&units=metric')
      // let cuaca=data1.weather.description
      // let suhu=data1.main.temp
      // let sunrise=data1.sys.sunrise
      // let sunset=data1.sys.sunset
      // sunrise=sunrise+"000"
      // sunset=sunset+"000"
      // date=new Date()
      // date.setTime()
      // console.log(cuaca)
      // console.log(suhu)
      // console.log(sunrise)
      // console.log(sunset)
      // console.log(data1)
    }
    catch (error) {   //jika gagal mendapakan API JSON
            console.error('Failed to fetch data:', error);
        }
  }
  fetchData()
  // const intervalId = setInterval(fetchData, 60000)
  // return () => clearInterval(intervalId)
}

const apiDummy = "http://localhost:1880/api/testdummy"
const apiDummy2 = "http://localhost:1880/api/testdummy2"
const apiDummy3 = "http://localhost:1880/api/testdummy3"
const apiDummy4 = "http://localhost:1880/api/testdummy4"
const apiDummy5 = "http://localhost:1880/api/testdummy5"


weather()
setInterval(displayCurrentDateTime,1000)
pumpFetching(apiDummy, 1000,'pras_conn','pras_usonic','pras_1','pras_2','pras_3')
pumpFetching(apiDummy2, 1000,'cluster2_conn','cluster2_usonic','cluster2_1','cluster2_2','cluster2_3')
pumpFetching(apiDummy3, 1000,'cluster3_conn','cluster3_usonic','cluster3_1','cluster3_2','cluster3_3')
pumpFetching(apiDummy4, 1000,'cy1_conn','cy1_usonic','cy1_1','cy1_2','cy1_3')
pumpFetching(apiDummy5, 1000,'deli_conn','deli_usonic','deli_1','deli_2','deli_3')

    // dataApi(coba).then(outputObj => {
    //      let statPum1=outputObj.data.statusPump1
    //      let statPum2=outputObj.data.statusPump2
    //      let statPum3=outputObj.data.statusPump3
    //      //console.log(statPum3)
    //       if(statPum1=="ON"){document.getElementById("pras1").src='dist/Pompa_p1_on.png'}
    //       if(statPum2=="ON"){document.getElementById("pras2").src='dist/Pompa_p1_on.png'}
    //       if(statPum3=="ON"){document.getElementById("pras3").src='dist/Pompa_p1_on.png'}
            
    //   })
// setInterval(this.dataApi, 5000)
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
// const exampleEl = document.getElementById('example')
// const tooltip = new bootstrap.Tooltip(exampleEl, options)



    function gauge(val,idi){
      new JustGage({
        id: idi,
        value: val,
        valueMinFontSize:13,
        min: 0,
        max: 100,
        symbol: ' V',
        label:'Tegangan',
        // title: null,
        labelFontColor:'#222',
        pointer: true,
        pointerOptions: {
          toplength: 3,
          bottomlength:5,
          bottomwidth: 3,
          color: '#000',//8e8e93
          stroke: '#fff',
          stroke_width: 1,
          stroke_linecap: 'round'
        },
        gaugeWidthScale:0.7,
        humanFriendly:true,
        counter:true,
        decimals:2,
      });
    }

    gauge(33.4,'gage')

    </script>
    
    
  </body>
</html>