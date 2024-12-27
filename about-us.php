<?php
// include footer
$page = "About";
include "__header.php";

?>

<!-- hero Section -->

<section class="pt-24 lg:stp-30 sbp-30 bg-softBg1 relative">
    <img src="assets/images/circleIcon.png" alt="image" class="absolute top-60 -left-20 max-lg:h-[400px] max-sm:hidden">
    <img src="assets/images/about_vector.png" alt="image" class="absolute top-36 right-0 xl:right-28 max-lg:hidden">
    <div class="container pb-10">
        <ul class="flex justify-start items-center gap-1">
            <li>
                <a href="/" class="flex justify-start items-center gap-1">
                    <i class="ph ph-house"></i>
                    <span class="hover:text-s2 duration-300">Home / </span>
                </a>
            </li>
            <li class="flex justify-start items-center gap-1">
                <i class="ph ph-caret-right"></i> About Us
            </li>
        </ul>
    </div>
    <div class="flex justify-center items-center flex-col">
        <div class="flex justify-center items-center pb-10 lg:pb-16 xl:pb-24">
            <div class="max-w-[700px] text-center flex justify-center items-center flex-col">
                <p class="bg-p1 py-3 px-5 rounded-full text-white">About Us</p>
                <h1 class="display-4 pt-4 pb-4">Work with Dan-Akka & Co.</h1>
                <p class="text-bodyText">
                    DAN-AKKA & CO was incorporated with the Corporate Affairs Commission in Nigeria as an independent organisation saddled with the responsibility of providing Professional Accounting, Management Consulting, Tax Consulting and Financial Management Services that promote efficiency and productivity.
                </p>
                <p class="text-bodyText">
                    It is a consulting firm with adeptness in Training and Development, Professional Services, Advisory Services, Project Management/Evaluation and General Contracts. We develop and offer flexible range of enterprise and learning solutions of individuals, start-ups, mid-class, fast growing, non-profit organizations, and government parastatals. We adopt a proactive approach utilizing our international exposure to Assess, Design, Develop and Implement solutions that focus on specific issues facing our clients.
                </p>
                <p class="text-bodyText">
                    We offer a full range of services that are competitively priced and tailored towards meeting clients’ unique needs on Internal Audit, IT /System Audit, Statutory Audit, Financial Accounting, Book Keeping, Forensic Accounting and Audit, Investigations, Corporate Governance, Payroll Management, Risk Management, Business Evaluation, Pension Management, Human Resource Management, Investment Analysis, Data Analysis, Document Forensic, Due Diligence, Operation & System Automation, Background Analysis/Check, and Regulatory Compliance Consulting Services with unequally commitment to quality and client’s satisfaction.
                </p>
            </div>
        </div>
        <!-- <div class="bg-[url('./assets/images/aboutVideoImg.png')] stp-30 sbp-30 w-[80%] h-[300px] bg-cover md:h-[400px] lg:h-[500px] xl:h-[600px] xxl:h-[800px] flex justify-center items-center z-10 relative after:absolute after:inset-0 after:bg-black/20">
            <button class="bg-softBg1 text-s1 p-6 lg:p-6 rounded-full text-3xl lg:text-5xl hover:bg-s2 hover:text-white duration-500 relative flex justify-center items-center z-20 leading-[0] videoModalButtonOpen">
                <i class="ph-fill ph-play"></i>
            </button>
        </div> -->
    </div>
</section>

<!-- End hero section -->

<?php
// include footer
include "__footer.php";
?>