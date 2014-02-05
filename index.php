<!doctype html>
<html lang="hr">
<head>
    <meta charset="utf-8">
    <title>Alati</title>

    <link rel="stylesheet" href="http://dev.pulsir.eu/common/butterfly-master/butterfly/butterfly.css">
    <link rel="stylesheet" href="f.css">

    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://dev.pulsir.eu/common/butterfly-master/butterfly/butterfly.js"></script>
    <script>

    </script>
</head>
<body>
    <?php
    if($_POST['r'] == 'av'){
        $ds = $_POST['ds'];
        $dt = $_POST['dt'];
        $rz = $ds / $dt;
        echo '<h3>Rezultat</h3><pre><span class="average">v</span> = '.$rz.' m/s </pre>';
    }
    if($_POST['r'] == 'v'){
        $s = $_POST['s'];
        $t = $_POST['t'];
        $rz = $s / $t;
        echo '<h3>Rezultat</h3><pre>v = '.$rz.' m/s </pre>';
    }
    if($_POST['r'] == 'ms'){
        $v = $_POST['vl'];
        $rz = $v * 3.6;
        echo '<h3>Rezultat</h3><pre>Vrijednost u km/h: '.$rz.' </pre>';
    }
    if($_POST['r'] == 'kh'){
        $v = $_POST['vl'];
        $rz = $v / 3.6;
        echo '<h3>Rezultat</h3><pre>Vrijednost u m/s: '.$rz.' </pre>';
    }
    if($_POST['r'] == 'aa'){
        $dv = $_POST['dv'];
        $dt = $_POST['dt'];
        $rz = $dv / $dt;
        echo '<h3>Rezultat</h3><pre><span class="average">a</span> = '.$rz.' m/s^2 </pre>';
    }
    if($_POST['r'] == 'a'){
        $v = $_POST['v'];
        $t = $_POST['t'];
        $rz = $v / $t;
        echo '<h3>Rezultat</h3><pre>a = '.$rz.' m/s^2 </pre>';
    }
    if($_POST['r'] == 'gpb'){
        echo '<h3>Rezultat</h3><p>v,t-graf - linijski Google Charts grafikon</p>';
        echo '<script type="text/javascript" src="http://www.google.com/jsapi"></script>
        <script type="text/javascript">';
          echo "google.load('visualization', '1', {packages: ['corechart']});
      </script>";
      echo '<script type="text/javascript">';
      echo "
      function drawVisualization() {
                // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['Vrijeme', 'Brzina'],
          [".$_POST['t1'].", ".$_POST['v1']."],
          [".$_POST['t2'].", ".$_POST['v2']."],
          [".$_POST['t3'].", ".$_POST['v3']."]


          ]);
var options = {
    legend: { position: 'none' }
};
                // Create and draw the visualization.
new google.visualization.LineChart(document.getElementById('visualization')).";
echo 'draw(data, {width: 700, height: 600,
    vAxis: {maxValue: 10}}
    );
}


google.setOnLoadCallback(drawVisualization);
</script>';
echo '<div id="visualization" style="width: 700px; height: 600px;"></div>';
}
if($_POST['r'] == 'gpa'){
    echo '<h3>Rezultat</h3><p>a,t-graf - linijski Google Charts grafikon</p>';
    echo '<script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">';
      echo "google.load('visualization', '1', {packages: ['corechart']});
  </script>";
  echo '<script type="text/javascript">';
  echo "
  function drawVisualization() {
                // Create and populate the data table.
    var data = google.visualization.arrayToDataTable([
      ['Vrijeme', 'Akceleracija'],
      [".$_POST['t1'].", ".$_POST['a1']."],
      [".$_POST['t2'].", ".$_POST['a2']."],
      [".$_POST['t3'].", ".$_POST['a3']."]


      ]);
var options = {
    legend: { position: 'none' }
};
                // Create and draw the visualization.
new google.visualization.LineChart(document.getElementById('visualization')).";
echo 'draw(data, {width: 700, height: 600,
    vAxis: {maxValue: 10}}
    );
}


google.setOnLoadCallback(drawVisualization);
</script>';
echo '<div id="visualization" style="width: 700px; height: 600px;"></div>';
}
if($_POST['r'] == 'gpp'){
    echo '<h3>Rezultat</h3><p>s,t-graf - linijski Google Charts grafikon</p>';
    echo '<script type="text/javascript" src="http://www.google.com/jsapi"></script>
    <script type="text/javascript">';
      echo "google.load('visualization', '1', {packages: ['corechart']});
  </script>";
  echo '<script type="text/javascript">';
  echo "
  function drawVisualization() {
                // Create and populate the data table.
    var data = google.visualization.arrayToDataTable([
      ['Vrijeme', 'Put'],
      [".$_POST['t1'].", ".$_POST['s1']."],
      [".$_POST['t2'].", ".$_POST['s2']."],
      [".$_POST['t3'].", ".$_POST['s3']."]


      ]);
var options = {
    legend: { position: 'none' }
};
                // Create and draw the visualization.
new google.visualization.LineChart(document.getElementById('visualization')).";
echo 'draw(data, {width: 700, height: 600,
    vAxis: {maxValue: 10}}
    );
}


google.setOnLoadCallback(drawVisualization);
</script>';
echo '<div id="visualization" style="width: 700px; height: 600px;"></div>';
}
?>

<div class="wrap">
    <h1>Alati: Fizika</h1>
    <p>Koristiti <code>.</code> kao decimalni separator (npr. <code>11.17</code> umjesto <code>11,17</code>)  - verzija 1.0.0 -  <a href="source.php">Izvorni kod</a></p>
    <div class="brzina">
        <form method="post" action="index.php">
            <h3>Srednja brzina <small>kod nejednolikog gibanja</small></h3>
            <input type="hidden" name="r" value="av">
            <pre><span class="average">v</span> = <input type="number" name="ds" class="fo" placeholder="Δs / m"> / <input type="number" class="fo" name="dt" placeholder="Δt / s"></span></pre>
            <input type="submit" class="button" value="Izračunaj" />    
        </form>
    </div>

    <div class="brzina">
        <form method="post" action="index.php">
            <h3>Stalna brzina <small>kod jednolikog gibanja</small></h3>
            <input type="hidden" name="r" value="v">
            <pre><span class="normal">v</span> = <input type="number" name="s" class="fo" placeholder="s / m"> / <input type="number" class="fo" name="t" placeholder="t / s"></span></pre>
            <input type="submit" class="button" value="Izračunaj" />    
        </form>
    </div>

    <div class="ms">
        <form method="post" action="index.php">
            <input type="hidden" name="r" value="ms">
            <h3>Pretvorba: <span class="fraction"><span class="top">m</span><span class="bottom">s</span></span> u <span class="fraction"><span class="top">km</span><span class="bottom">h</span></span></h3>
            <pre><input type="number" placeholder="Vrijednost u m/s" name="vl" class="lf"></pre>
            <input type="submit" class="button" value="Izračunaj" />    
        </form>
    </div>

    <div class="kh">
        <form method="post" action="index.php">
            <input type="hidden" name="r" value="kh">
            <h3>Pretvorba: <span class="fraction"><span class="top">km</span><span class="bottom">h</span></span> u <span class="fraction"><span class="top">m</span><span class="bottom">s</span></span></h3>
            <pre><input type="number" placeholder="Vrijednost u km/h" name="vl" class="lf"></pre>
            <input type="submit" class="button" value="Izračunaj" />    
        </form>
    </div>

    <div class="aa">
        <form method="post" action="index.php">
            <input type="hidden" name="r" value="aa">
            <h3>Srednja akceleracija</h3>
            <pre><span class="average">a</span> = <input type="number" name="dv" class="fo" placeholder="Δv / (m/s)"> / <input type="number" class="fo" name="dt" placeholder="Δt / s"></span></pre>
            <input type="submit" class="button" value="Izračunaj" />    
        </form>
    </div>
    <div class="a">
        <form method="post" action="index.php">
            <input type="hidden" name="r" value="a">
            <h3>Akceleracija</h3>
            <pre>a = <input type="number" name="v" class="fo" placeholder="v / (m/s)"> / <input type="number" class="fo" name="t" placeholder="t / s"></span></pre>
            <input type="submit" class="button" value="Izračunaj" />    
        </form>
    </div>
    <hr>
    <h2>Grafički prikaz</h2>
    <div class="gpb">
        <h3>Brzina</h3>
        <form method="post" action="index.php">
            <input type="hidden" name="r" value="gpb">
            <table>
                <tr>
                    <td>brzina <br> v/(m/s)</td>
                    <td><input type="number" placeholder="v₁" name="v1" class="fo"></td>
                    <td><input type="number" placeholder="v₂" name="v2" class="fo"></td>
                    <td><input type="number" placeholder="v₃" name="v3" class="fo"></td>
                </tr>
                <tr>
                    <td>vrijeme <br> t/s</td>
                    <td><input type="number" placeholder="t₁" name="t1" class="fo"></td>
                    <td><input type="number" placeholder="t₂" name="t2" class="fo"></td>
                    <td><input type="number" placeholder="t₃" name="t3" class="fo"></td>
                </tr>
            </table>
            <input type="submit" class="button" value="Prikaži" />    
        </form>
    </div>

    <div class="gpa">
        <h3>Akceleracija</h3>
        <form method="post" action="index.php">
            <input type="hidden" name="r" value="gpa">
            <table>
                <tr>
                    <td>akceleracija <br> a/(m/s^2)</td>
                    <td><input type="number" placeholder="a₁" name="a1" class="fo"></td>
                    <td><input type="number" placeholder="a₂" name="a2" class="fo"></td>
                    <td><input type="number" placeholder="a₃" name="a3" class="fo"></td>
                </tr>
                <tr>
                    <td>vrijeme <br> t/s</td>
                    <td><input type="number" placeholder="t₁" name="t1" class="fo"></td>
                    <td><input type="number" placeholder="t₂" name="t2" class="fo"></td>
                    <td><input type="number" placeholder="t₃" name="t3" class="fo"></td>
                </tr>
            </table>
            <input type="submit" class="button" value="Prikaži" />    
        </form>
    </div>

    <div class="gpp">
        <h3>Put</h3>
        <form method="post" action="index.php">
            <input type="hidden" name="r" value="gpp">
            <table>
                <tr>
                    <td>put <br> s/m</td>
                    <td><input type="number" placeholder="s₁" name="s1" class="fo"></td>
                    <td><input type="number" placeholder="s₂" name="s2" class="fo"></td>
                    <td><input type="number" placeholder="s₃" name="s3" class="fo"></td>
                </tr>
                <tr>
                    <td>vrijeme <br> t/s</td>
                    <td><input type="number" placeholder="t₁" name="t1" class="fo"></td>
                    <td><input type="number" placeholder="t₂" name="t2" class="fo"></td>
                    <td><input type="number" placeholder="t₃" name="t3" class="fo"></td>
                </tr>
            </table>
            <input type="submit" class="button" value="Prikaži" />    
        </form>
    </div>
    <footer><p>&copy; 2014 Mario Borna Mjertan. Licencirano pod CC-BY-SA 3.0.</footer>
</div>
</body>
</html>
