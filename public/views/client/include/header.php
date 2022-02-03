<div class="w-full h-20 bgColor-pri fixed ">
    <div class="fx fx-j-c fx-i-c h-20">
        <div class="w-3/12 fx fx-j-c fx-i-c bgColor-sec h-16">
            <h3 class="color-pri ff-sec fw-bold fs-md">
                <i class="fas fa-home"></i> <?= app_name() ?>
            </h3>
            <h5 class="ml-2 pl-2 w-6/12 border-l-2 border-t-0 border-b-0
            border-r-0 b-color-pri b-solid">
              Real Estate & Rental Made Easy
          </h5>
        </div>

        <div class="w-8/12 bgColor-sec fx fx-j-btw">
            <div class="w-5/12 fx fx-j-a fx-i-c bgColor-sec h-16">
                <h5 class="color-pri-600 ff-sec fw-bold">
                    <a class="color-pri-600 no-line" href="/properties">
                        Properties
                    </a>
                </h5>
                <h5 class="color-pri-600 ff-sec fw-bold">
                    <a class="color-pri-600 no-line"  href="/plans">
                        Pricing
                    </a>
                </h5>
                <h5 class="color-pri-600 ff-sec fw-bold">
                    <a class="color-pri-600 no-line"  href="/about_us">
                        About Us
                    </a>
                </h5>
                <h5 class="color-pri-600 ff-sec fw-bold">
                    <a class="color-pri-600 no-line"
                    href="/contact_us">
                        Contact Us
                    </a>
                </h5>
            </div>

            <?php if (!auth()->check()): ?>
                <div class="w-2/12 fx fx-j-a fx-i-c bgColor-sec h-16">
                    <h5 class="color-pri-600 ff-sec fw-bold">
                        <a class="color-pri-600 no-line" href="/signup">
                            Signup
                        </a>
                    </h5>
                    <h5 class="color-pri-600 ff-sec fw-bold">
                        <a class="color-pri-600 no-line" href="/signin">
                            Login
                        </a>
                    </h5>
                </div>
            <?php else: ?>
                <div class="w-3/12 fx fx-j-a fx-i-c bgColor-sec h-16">
                    <h5 class="color-pri-600 ff-sec fw-bold">
                        <a class="color-pri-600 no-line"
                        href="/client/profile/<?= auth()->id(); ?>">
                          <i class="fal fa-user"></i>  Account
                        </a>
                    </h5>
                    <h5 class="color-pri-600 ff-sec fw-bold mr-3">
                        <a class="color-pri-600 no-line" href="/logout">
                           <i class="fal fa-sign-out"></i> Logout
                        </a>
                    </h5>
                </div>
            <?php endif; ?>



        </div>
    </div>
</div>
