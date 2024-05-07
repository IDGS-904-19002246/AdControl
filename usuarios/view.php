<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Datos</title>
    <?php include '../includes/head.html' ?>
    <link href="../" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="../src/MySrc/listas.css">

</head>

<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
    <div>
        <ul class="d-flex justify-content-center">
            <li>1</li>
            <li>2</li>
            <li>3</li>
        </ul>
    </div>

    <div class="container card my-4">
    <?php echo $table->render(); ?>
    </div>
    
    
    <?php include '../includes/footer.html' ?>
    
</body>

</html>