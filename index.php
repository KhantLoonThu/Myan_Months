<?php
include_once './data.php';
include_once './layouts/header.php';

?>

<main class="main container-fluid home-main">
    <section class="home-page-content container mt-3">
        <div class="row">
            <h2 class="text-center">
                မြန်မာလများ
            </h2>
        </div>
        <div class="row mt-5 mb-4">
            <p style="font-size: 24px">ကိုယ်ဖတ်ချင်တဲ့ မြန်မာလကို ရွေးမယ်။ ကိုယ်ရွေးချယ်လိုက်တဲ့မြန်မာလမှာ ပွင့်တဲ့ပန်း၊
                ရိုးရာပွဲ
                စတဲ့အကြောင်းလေးတွေ ဖတ်ကြမယ်။</p>

            <p style="font-size: 16px;">1. မြန်မာလများကို ပန်းပုံများနှင့်တကွ အစဉ်လိုက် ပြသထားပါသည်။</p>
            <p style="font-size: 16px;">2. မိမိဖတ်လိုသော လကိုရွေး၍ ထိုလတွင် ပွင့်သောပန်း နှင့်
                ကျင်းပသောရိုးရာပွဲအကြောင်း ဖတ်ရှုနိုင်ပါသည်။</p>
            <div class="mt-3">
                <a href="./months.php" class="btn btn-info">Learn More</a>
            </div>
        </div>
    </section>
</main>

<?php
include_once './layouts/footer.php';
?>