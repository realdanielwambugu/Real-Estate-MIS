<?php require_once view('header'); ?>

<body>
    <main class="w-full h-screen bgColor-sec ff-sec">
        <div class="h-20">
           <?php require_once view('client/include/header'); ?>
        </div>

        <div class="w-full bgColor-sec ff-pri pb-16">
            <h3 class="w-7/12 m-0-auto p-5 color-pri">
                Property Listing Prices
            </h3>
            <div class="w-7/12 m-0-auto fx fx-j-btw">

                <?php foreach ($plans as $plan): ?>
                    <div class="w-64 bgColor-1 shadow pb-5">
                        <div class="bgColor-pri-700 w-full txt-h-c py-4
                        color-1">
                            <h2 class="fw-bold"><?= $plan->type ?></h2>
                        </div>
                        <div class="w-full txt-h-c pt-2">
                            <h2 class="fw-bold"><?= $plan->price ?></h2>
                            <h5 class="fs-sm color-pri-700"><?= $plan->duration ?></h5>
                        </div>
                        <div class="w-full txt-h-c pt-2 border">
                            <h5 class="color-pri-800"><?= $plan->number_of_properties ?> Properties</h5>
                        </div>

                        <div class="w-full txt-h-c pt-2 border">
                            <h5 class="color-pri-800"><?= $plan->number_of_agents ?> Agents</h5>
                        </div>
<!-- 
                        <div class="w-full txt-h-c pt-2 border">
                            <h5 class="color-pri-800"><?= $plan->free_space ?></h5>
                        </div> -->


                        <?php if (auth()->check() && auth()->user()->isSubscribedTo($plan->id)): ?>

                            <div class="w-full fx fx-j-c">
                                <button class="bgColor-2-400 px-5 py-3 color-1
                                mt-5 border-0 fw-500 outline-0 pointer
                                rounded fs-sm" type="button" name="button">
                                    Current Plan
                                </button>
                            </div>

                        <?php else: ?>

                            <div class="w-full fx fx-j-c">
                                <a href="/checkout/<?= $plan->id ?>">
                                    <button class="bgColor-pri rounded-full px-5 py-3 color-1
                                    mt-5 border-0 fw-500 hover:bgColor-pri-700 outline-0 pointer
                                    rounded fs-sm" type="button" name="button">
                                        Get Started
                                    </button>
                                </a>
                            </div>

                        <?php endif; ?>

                    </div>
                <?php endforeach; ?>

            </div>
        </div>
        <?php require_once view('client/include/footer'); ?>

    </main>
</body>
<?php require_once view('footer'); ?>
