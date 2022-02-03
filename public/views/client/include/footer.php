<div class="w-full h-auto bgColor-pri b-0">
    <div class="w-8/12 m-0-auto fx fx-i-c fx-j-btw pb-4">
        <div class="">
            <ul class="list-none">
                <li class="pt-4 color-1-400 fw-bold">
                    <a href="#" class="color-1 no-line">
                        Our Contacts:
                    </a>
                </li>
                <li class="py-2 color-1-400">
                    <a href="#" class="color-1 no-line">
                        Phone: <?= contact()->phone  ?>
                    </a>
                </li>
                <li class="py-2 color-1-400">
                    <a href="#" class="color-1 no-line">
                        Email: <?= contact()->email  ?>
                    </a>
                </li>
                <li class="py-2 color-1-400">
                    <a href="#" class="color-1 no-line">
                        Website: <?= contact()->website  ?>
                    </a>
                </li>
            </ul>
        </div>
        <div class="">
            <ul class="list-none">
                <li class="pt-4 color-1-400 fw-bold">
                    <a href="#" class="color-1 no-line">
                        Social Media:
                    </a>
                </li>
                <li class="py-2 color-1-400">
                    <a href="#" class="color-1 no-line">
                        Twitter: <?= contact()->twitter  ?>
                    </a>
                </li>
                <li class="py-2 color-1-400">
                    <a href="#" class="color-1 no-line">
                        Facebook: <?= contact()->facebook  ?>
                    </a>
                </li>
                <li class="py-2 color-1-400">
                    <a href="#" class="color-1 no-line">
                        Instagram: <?= contact()->instagram  ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="border border-b-0 border-l-0 border-r-0 b-color-1-600 b-solid">
        <div class="w-8/12 m-0-auto fx fx-i-c fx-j-btw color-1 h-20">
            <h3 class="fs-md txt-h-c">
               <i class="fa fa-home"></i> <?= app_name() ?>
            </h3>
            <h6 class="txt-h-c">
                © 2021 <?= app_name() ?> All rights reserved.
            </h6>
        </div>
    </div>
</div>
