<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
    <style>
        .warna-baris{
            background-color: lightblue;
        }
    </style>
</head>
<body>
    
    <table border="1" cellpadding="10" cellspacing="0" >
        <?php 
        $i = 1;
        while ($i <= 5) : ?>
            <?php if ($i % 2 == 1) : ?>
                <tr class = "warna-baris">
            <?php else :?>
            <?php endif; ?> 
                <?php 
                $j = 1;
                while ($j <=5 ) : ?>
                    <td><?= "$i,$j";  ?></td>
                <?php $j++; ?>
                <?php endwhile; ?>
                <?php $i++; ?>
            </tr>
        <?php endwhile; ?>
    </table>

</body>
</html>