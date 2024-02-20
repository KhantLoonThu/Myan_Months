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
                    <div class="card">
                        <img src="<?php echo "{$Month['ImgUrl']}" ?>" alt="">
                        <div class="card-body">
                            <h5 class='myanmar-month-name'><?php echo "{$Month['MonthMm']}" ?></h5>
                            <h5><?php echo "{$Month['MonthEn']}" ?></h5>

                            <!-- Change this button by using ajax 
                        -->
                            <div class="mt-3">
                                <a href="./month_detail.php" class="btn btn-info readMoreButton" id="<?php echo "{$Month["Id"]}" ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
</main>

<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="./months.js"></script>
<?php ?>

<?php
include_once 'layouts/footer.php';
?>