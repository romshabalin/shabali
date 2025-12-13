<?php

$title = "Поиск и тестирование новых решений";
$description = "Пространство для смелых идей и их практической проверки. Проводятся эксперименты, собираются данные, оценивается эффективность предложенных решений. Представлены только факты и выводы, никаких прикрас.";
$canonical = "/";
$h1 = "Место для тестирования новых идей";
$p = "Сайт представляет собой экспериментальную площадку с набором различных концепций и способов их реализации. Представлен ход экспериментов, а также текущие наработки. Материал предназначен исключительно для наблюдения за процессом.";

required_once "./include/html/header.php";

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
        </div>
    </div>
</main>
<?php

required_once "./include/html/footer.php";

?>
