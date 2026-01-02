<?php

$title = "Хобби";
$description = "Отдых.";
$canonical = "/hobby/";
$h1 = "Хобби";
$p = "Отдых.";

require_once './../include/html/header.php';

?>
<main>
    <div class="container px-0">
        <div class="row g-0">
            <div class="col-12 p-3 pb-1">
                <h1 class="mb-0 fs-1 fw-semibold lh-sm text-dark">
                    <?php echo $h1; ?>
                </h1>
            </div>
            <div class="col-12 p-3 pt-1">
                <p class="mb-0 fs-6 fw-normal lh-base text-dark">
                    <?php echo $p; ?>
                </p>
            </div>
            <div class="col-12 p-3">
                <h2 class="mb-0 fs-2 fw-medium lh-sm text-dark">
                    Путешествия
                </h2>
            </div>
        </div>
    </div>
</main>
<?php

require_once './../include/html/footer.php';

?>
