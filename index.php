<?php include __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi PHP</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <img src="img/logo-small.svg" alt="Logo">
    </header>
    <main>
        <section>
            
            <!-- Album List -->
            <div class="list-disc">
                <?php foreach($database as $singleDisc) { ?>
                    <div class="single-card">
                        <div class="img-card">
                            <img src="<?php echo $singleDisc['poster'] ?>" alt="<?php echo $singleDisc['title'] ?>">
                        </div>
                        <div class="title-card">
                            <h2>
                                <?php echo $singleDisc['title'] ?>
                            </h2>
                            <div class="author-card">
                                <?php echo $singleDisc['author'] ?>
                            </div>
                            <div class="year-card">
                                <?php echo $singleDisc['year'] ?>
                            </div>

                        </div>
                    </div>

                <?php } ?>
            </div>
            
        </section>

    </main>
</body>
</html>