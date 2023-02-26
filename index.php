<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['kwh']) && isset($_POST['tarifas']) && isset($_POST['tipas']) && isset($_POST['menuo'])) {
        $kwh = floatval($_POST['kwh']);
        $tarifas = floatval($_POST['tarifas']);
        $tipas = $_POST['tipas'];
        $menuo = $_POST['menuo'];

        $suma = $kwh * $tarifas;

        $duomenys = array(
            'kwh' => $kwh,
            'tarifas' => $tarifas,
            'tipas' => $tipas,
            'menuo' => $menuo
        );

        echo "<p>Jūs suvedėte šiuos duomenis:</p>";
        echo "<ul>";
        foreach ($duomenys as $key => $value) {
            echo "<li><strong>" . ucfirst($key) . ":</strong> " . $value . "</li>";
        }
        echo "</ul>";
        echo "<p>Paskaičiuota kaina:</p>";
        echo "<ul>";
        if ($tipas == 'dieninis') {
            $dienosSuma = $suma;
            $naktiesSuma = 0;
        } else {
            $dienosSuma = 0;
            $naktiesSuma = $suma;
        }
        echo "<li><strong>Dienos tarifo suma:</strong> " . $dienosSuma . "</li>";
        echo "<li><strong>Nakties tarifo suma:</strong> " . $naktiesSuma . "</li>";
        echo "<li><strong>Bendra suma:</strong> " . $suma . "</li>";
        echo "</ul>";
        ?>
        <form method="post">
            <input type="hidden" name="kwh" value="<?php echo $kwh; ?>">
            <input type="hidden" name="tarifas" value="<?php echo $tarifas; ?>">
            <input type="hidden" name="tipas" value="<?php echo $tipas; ?>">
            <input type="hidden" name="menuo" value="<?php echo $menuo; ?>">
            <button type="submit">Deklaruoti ir sumokėti</button>
        </form>
        <?php
    } else {
        echo "<p>Prašome užpildyti visus laukus!</p>";
    }

    $naujas_irasas = array(
        'kwh' => $kwh,
        'tarifas' => $tarifas,
        'tipas' => $tipas,
        'menuo' => $menuo
    );

    $duomenys = file_get_contents('duomenys.json');
    $duomenys = json_decode($duomenys, true);
    $duomenys[] = $naujas_irasas;
    $duomenys = json_encode($duomenys);
    file_put_contents('duomenys.json', $duomenys);
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Elektros energijos vartojimo forma</title>
</head>
<body>
<form method="post" action="index.php">
    <label for="kwh">Elektros energijos kiekis (kWh):</label>
    <input type="text" id="kwh" name="kwh"><br>

    <label for="tarifas">Tarifas (EUR/kWh):</label>
    <input type="text" id="tarifas" name="tarifas"><br>

    <label for="tipas">Tipas:</label>
    <select id="tipas" name="tipas">
        <option value="dieninis">Dieninis</option>
        <option value="naktinis">Naktinis</option>
    </select><br>

    <label for="menuo">Mėnuo:</label>
    <input type="month" id="menuo" name="menuo"><br>

    <input type="submit" value="Pateikti">
</form>
</body>
</html>