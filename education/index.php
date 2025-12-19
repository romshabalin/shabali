<?php

$title = "Образование";
$description = "Фундамент для самореализации.";
$canonical = "/education/";
$h1 = "Образование";
$p = "Фундамент для самореализации.";

require_once './../include/html/header.php';

?>
<main>
    <div class="container px-0">
        <div class="row g-0">
            <div class="col-12 p-3 text-center">
                <h1 class="mb-0 fs-1 fw-medium lh-sm text-dark">
                    <?php echo $h1; ?>
                </h1>
            </div>
            <div class="col-12 p-3 text-center">
                <p class="mb-0 fs-6 fw-normal lh-base text-dark">
                    <?php echo $p; ?>
                </p>
            </div>
            <div class="col-12 p-3">
                <h2 class="mb-0 fs-2 fw-medium lh-sm text-dark">
                    Общее образование
                </h2>
            </div>
            <div class="col-12 p-3">
                <p class="mb-0 fs-6 fw-normal lh-base text-dark">
                    Включает четыре уровня.
                </p>
            </div>
            <div class="col-12 p-3">
                <h2 class="mb-0 fs-2 fw-medium lh-sm text-dark">
                    Профессиональное образование
                </h2>
            </div>
            <div class="col-12 p-3">
                <p class="mb-0 fs-6 fw-normal lh-base text-dark">
                    Включает два уровня.
                </p>
            </div>
            <div class="col-12 p-3">
                <h2 class="mb-0 fs-2 fw-medium lh-sm text-dark">
                    Дополнительное образование
                </h2>
            </div>
            <div class="col-12 p-3">
                <p class="mb-0 fs-6 fw-normal lh-base text-dark">
                    Включает два вида.
                </p>
            </div>
            <div class="col-12 p-3">
                <h2 class="mb-0 fs-2 fw-medium lh-sm text-dark">
                    Профессиональное обучение
                </h2>
            </div>
            <div class="col-12 p-3">
                <p class="mb-0 fs-6 fw-normal lh-base text-dark">
                    Обучение технике пожарной безопасности и т. п.
                </p>
            </div>
        </div>
    </div>
</main>
<?php

require_once './../include/html/footer.php';

?>
