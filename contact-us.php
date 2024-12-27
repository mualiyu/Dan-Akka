<?php
// include footer
include "__header.php";

?>

<!-- Hero Section -->
<section class="stp-30 bg-softBg1 relative max-xxl:overflow-hidden">
    <img src="assets/images/breadcrump_icon.png" alt="image" class="absolute bottom-0 left-[-10%] xxl:left-0 max-lg:hidden">
    <div class="container grid grid-cols-12 gap-6 max-md:stp-15 relative z-10">
        <div class="col-span-12 md:col-span-6 flex justify-center items-start flex-col">
            <ul class="flex justify-start items-center gap-1 flex-wrap">
                <li>
                    <a href="/" class="flex justify-start items-center gap-1">
                        <i class="ph ph-house"></i>
                        <span class="hover:text-s2 duration-300">Home /</span>
                    </a>
                </li>

                <li class="flex justify-start items-center gap-1">
                    <i class="ph ph-caret-right"></i>
                    Contact Us
                </li>
            </ul>

            <h1 class="display-3 pt-4">Connect With Us</h1>

            <p class="text-bodyText pt-6">
                Connect with us for expert accounting and auditing consultancy services. Reach
                out via the form or contact information below.
            </p>
        </div>
        <div class="col-span-12 md:col-span-6 flex justify-center items-center">
            <img src="assets/images/breadcrumb_img_21.png" alt="image" class="object-fit max-sm:max-h-[300px]">
        </div>
    </div>
</section>
<!-- End Hero section -->


<!-- contact Section -->
<section class="container grid grid-cols-12 stp-30 sbp-30">
    <div class="col-span-12 lg:col-span-8 lg:col-start-3 grid grid-cols-12 gap-4 lg:gap-6">
        <div class="flex flex-col justify-start items-start p-4 lg:p-8 bg-p1 text-white w-full col-span-12 sm:col-span-4 border border-p1 hover:bg-s2 hover:text-mainTextColor hover:border-mainTextColor duration-500 group">
            <div class="bg-white text-p1 text-2xl rounded-full p-4 group-hover:text-white group-hover:bg-mainTextColor duration-500 !leading-[0]">
                <i class="ph-fill ph-envelope"></i>
            </div>
            <h4 class="heading-4 pt-5 pb-2">Chat to Sales</h4>
            <a href="mailto:dan-akka@gmail.com">info@dan-akka.com</a>
        </div>
        <div class="flex flex-col justify-start items-start p-4 lg:p-8 bg-p1 text-white w-full col-span-12 sm:col-span-4 border border-p1 hover:bg-s2 hover:text-mainTextColor hover:border-mainTextColor duration-500 group">
            <div class="bg-white text-p1 text-2xl rounded-full p-4 group-hover:text-white group-hover:bg-mainTextColor duration-500 !leading-[0]">
                <i class="ph-fill ph-phone-call"></i>
            </div>
            <h4 class="heading-4 pt-5 pb-2">Contact Us</h4>
            <a href="tel:dan-akka@gmail.com">+234 802 375 9509</a>
        </div>
        <div class="flex flex-col justify-start items-start p-4 lg:p-8 bg-p1 text-white w-full col-span-12 sm:col-span-4 border border-p1 hover:bg-s2 hover:text-mainTextColor hover:border-mainTextColor duration-500 group">
            <div class="bg-white text-p1 text-2xl rounded-full p-4 group-hover:text-white group-hover:bg-mainTextColor duration-500 !leading-[0]">
                <i class="ph-fill ph-map-pin"></i>
            </div>
            <h4 class="heading-4 pt-5 pb-2">Visit Our Office</h4>
            <p>No. 16, Federal Secretariat Road, Kano, Nigeria.</p>
        </div>
    </div>

    <div class="col-span-12 lg:col-span-8 lg:col-start-3 border p-4 sm:p-6 lg:p-10">
        <h4 class="heading-4 pb-6">Fill the From Below</h4>

        <form onsubmit="{handleSubmit}" class="grid grid-cols-2 gap-6">
            <div class="col-span-2 sm:col-span-1">
                <input type="text" placeholder="First Name" class="placeholder:text-bodyText py-4 px-8 border w-full" required="">
            </div>
            <div class="col-span-2 sm:col-span-1">
                <input type="text" placeholder="Last Name" class="placeholder:text-bodyText py-4 px-8 border w-full" required="">
            </div>
            <div class="col-span-2 sm:col-span-1 py-4 px-8 border flex justify-start items-center gap-2">
                <span class="text-xl text-bodyText">
                    <i class="ph-fill ph-envelope"></i>
                </span>
                <input type="text" placeholder="Type email address" class="placeholder:text-bodyText w-full outline-none" required="">
            </div>
            <div class="col-span-2 sm:col-span-1 py-4 px-8 border flex justify-start items-center gap-2">
                <span class="text-xl text-bodyText">
                    <i class="ph-fill ph-pencil-simple"></i>
                </span>
                <input type="text" placeholder="Subject" class="placeholder:text-bodyText w-full outline-none" required="">
            </div>
            <div class="col-span-2 py-4 px-8 border flex justify-start items-center gap-2">
                <textarea placeholder="Type Your message..." class="placeholder:text-bodyText w-full outline-none h-[200px]" required=""></textarea>
            </div>
            <div class="col-span-2 table-checkbox flex justify-between items-center max-[400px]:flex-col max-[400px]:items-start gap-5">
                <label class="flex justify-start items-center gap-2">
                    <input type="checkbox" class=" ">
                    <p>Subscribe to our newsletter.</p>
                </label>
                <button class="py-2 sm:py-3 px-4 sm:px-6 bg-p1 text-white block text-center border border-p1 hover:bg-s2 hover:border-mainTextColor hover:text-mainTextColor duration-500">
                    Submit
                </button>
            </div>
        </form>
    </div>
    <toastcontainer position="bottom-left">
    </toastcontainer>
</section>
<!-- End contact section -->
<?php
// include footer
include "__footer.php";
?>