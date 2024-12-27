<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/svg+xml" href="assets/images/fav.png" />

    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link rel="stylesheet" href="assets/css/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/odometer.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />

    <title>DAN-AKKA & CO.</title>
    <script defer src="assets/index.js"></script>
    <link href="assets/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Section Start -->
    <header class="">
        <div class="top-0 left-0 right-0 z-50 header headerAbsolute 2">
            <div class="flex justify-between items-center container text-s1 py-6">
                <div class="pb-1 flex justify-start items-center gap-3">
                    <button class="lg:hidden text-3xl mobileMenuOpenButton">
                        <i class="ph ph-list"></i>
                    </button>
                    <a href="/" class="flex justify-between items-center text-s1 ">
                        <img src="assets/imgs/logo.png" class="img w-50 mx-24" style="width: 70px;" alt="Dan-Akka logo" /> DAN-AKKA & CO
                    </a>
                </div>
                
                <?php include "__desktop_menu.php"; ?>

                <div
                    class="flex justify-end items-center gap-2 sm:gap-6 xl:gap-10 font-medium max-sm:hidden">
                    <div class="flex justify-between items-center gap-1">
                        <i
                            class="ph ph-phone-call bg-s1 rounded-full text-s2 p-2 md:p-3 text-lg lg:text-2xl !leading-none"></i>
                        <a href="tel:+123456789" class="max-xl:hidden"> +234 802 375 9509 </a>
                    </div>
                    
                </div>
            </div>
        </div>

        
        <?php include "__mobile_menu.php"; ?>
    </header>

    <!-- Header Section End -->