<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/style/global.css">
</head>

<body>
    <div class="container d-flex justify-content-between my-3">

        <h4 style="color: black;">
            <?= isset($comic['title']) ? 'Collection > <span style="color: grey;">' . $comic['title'] . '</span>' : 'All Collections' ?>
        </h4>

        <div>
            <button type="button" onclick="AddComics();" class="btn btn-primary">Add Comics</button>
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>
    </div>


    <?= $this->renderSection('content') ?>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    var base_url = '<?= base_url(); ?>';
</script>
<script src="<?= base_url('/assets/modal.js') ?>"></script>

</html>