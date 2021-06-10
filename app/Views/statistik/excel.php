<?php
header("Content-type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header("Content-Disposition: attachment; filename=Data_Nilai.xls");
header('Cache-Control: max-age=0');
?>

<html>

<body>
    <table class="table table-light text-center mt-5">
        <thead>
            <tr>
                <th scope="col">Nilai</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($nilai as $k) : ?>
            <tr>
                <td><?= $k['nilai']; ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>