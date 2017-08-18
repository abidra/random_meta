<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?= $this->pageTitle; ?> ANU mu hanya <?= $this->randomNumber; ?>mm</title>
        <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="<?= $this->pageTitle; ?> ANU mu hanya <?= $this->randomNumber; ?>mm">
<meta name="og:image" content="https://i.imgbox.com/D3YrTS3W.jpg">
<meta name="description" content="Bagikan ke teman anda!">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?= $this->partial('partials/header.php'); ?>

        <section role="main">
            <?= $this->yieldView(); ?>
        </section>

        <?= $this->partial('partials/footer.php'); ?>
    </body>
</html>
