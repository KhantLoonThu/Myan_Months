<?php
include_once './data.php';
include_once './layouts/header.php';

$Months = getData();
$monthId = intval($_GET['id']);
?>

<main class="main container-fluid">
    <section class="month-detail-content container mt-3">
        <?php foreach ($Months as $month) { ?>
            <?php if ($month['Id'] == $monthId) { ?>
                <h2 class="text-center">
                    <?php echo $month['MonthMm'] . " ( " . $month['FestivalMm'] . " )"; ?>
                </h2>
                <h3 class="text-center mt-2">
                    <?php echo $month['MonthEn'] . " ( " . $month['FestivalEn'] . " )"; ?>
                </h3>

                <div class="row mt-5">
                    <div class="col-md-6">
                        <img src="<?php echo $month['FestivelImg']; ?>" alt="festivel image">
                        <div class="mt-3">
                            <p>
                                <?php echo $month['Description']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <?php echo $month['Detail']; ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </section>
</main>

<?php
include_once './layouts/footer.php';
?>