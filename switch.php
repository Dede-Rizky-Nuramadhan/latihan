<!DOCTYPE html>
<html>
<title>www.switch case.com</title>

<body>
    <?php
    $jadwalmagang = "jumat";
    switch ($jadwalmagang) {
        case "senin":
            echo "Kamu harus bekerja di hari senin";
            break;
        case "selasa":
            echo "Kamu harus bekerja di hari rabu";
            break;
        case "rabu":
            echo "Kamu harus bekerja di hari rabu";
            break;
        case "kamis":
            echo "Kamu harus bekerja di hari kamis";
            break;
        case "jumat":
            echo "Kamu harus bekerja di hari jumat";
            break;

        default:
            echo "kamu hanya kerja hari senin sampai dengan hari jumat ";
        }
    ?>
</body>

</html>