<?php
// print_r($_GET['id']); 
include_once './data.php';
include_once './layouts/header.php';

// $Months = getData();
$Months = $months->getData();
?>

<main class="main container-fluid">
    <section class="month-list-content container mt-3">
        <div class="row">
            <h2 class="text-center">
                မြန်မာလများ
            </h2>
        </div>
        <div class="row mt-5 mb-4">
            <?php foreach ($Months as $Month) { ?>

                <div class="col-md-3 mb-3">
                    <div class="card" id="<?php echo "{$Month["Id"]}" ?>">
                        <img src="<?php echo "{$Month['ImgUrl']}" ?>" alt="">
                        <div class="card-body">
                            <h5 class='myanmar-month-name'><?php echo "{$Month['MonthMm']}" ?></h5>
                            <h5><?php echo "{$Month['MonthEn']}" ?></h5>
                            <div class="mt-3">
                                <a href="./month_detail.php?id=<?php echo $Month['Id'] ?>" class="btn btn-info readMoreButton">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</main>

<?php ?>

<?php
include_once 'layouts/footer.php';
?>