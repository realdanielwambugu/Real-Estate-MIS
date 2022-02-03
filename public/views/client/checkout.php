<?php require_once view('header'); ?>

<body>
    <main class="w-full h-screen bgColor-sec ff-sec">
        <div class="h-20">
           <?php require_once view('client/include/header'); ?>
        </div>

        <div class="w-full bgColor-sec ff-pri pb-10">
            <h3 class="w-7/12 m-0-auto pt-5 color-pri">
                Confirm Subscription Details
            </h3>
            <div class="w-8/12 fx fx-j-a m-0-auto">
                <div class="w-5/12">
                    <div class="fw-600 mb-2">
                        <label for="Name" class="block py-2 fs-sm color-pri">Type</label>
                        <div class="bgColor-pri-200 py-2 px-2">
                            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                            focus:b-color-pri outline-0 color-pri"
                            type="text" name="type" value="<?= $plan->type ?>" disabled>
                        </div>
                    </div>

                    <div class="fw-600 mb-2">
                        <label for="beds" class="block py-2 fs-sm color-pri">Price</label>
                        <div class="bgColor-pri-200 py-2 px-2">
                            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                            focus:b-color-pri outline-0 color-pri"
                            type="text" name="price" value="<?= $plan->price ?>" disabled>
                        </div>
                    </div>

                    <div class="fw-600 mb-2">
                        <label for="beds" class="block py-2 fs-sm color-pri">Free Space</label>
                        <div class="bgColor-pri-200 py-2 px-2">
                            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                            focus:b-color-pri outline-0 color-pri"
                            type="text" name="free_space" value="<?= $plan->free_space ?>" disabled>
                        </div>
                    </div>

                    <div class="fw-600 mb-2">
                        <label for="" class="block py-2 fs-sm color-pri">Number Of Agents</label>
                        <div class="bgColor-pri-200 py-2 px-2">
                            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2 color-pri
                            focus:b-color-pri outline-0"
                            type="number" name="number_of_agents" value="<?= $plan->number_of_agents ?>" disabled>
                        </div>
                    </div>
                </div>
                <div class="w-5/12">
                    <div class="fw-600 mb-2">
                        <label for="Name" class="block py-2 fs-sm color-pri">Duration</label>
                        <div class="bgColor-pri-200 py-2 px-2">
                            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2 color-pri
                            focus:b-color-pri outline-0" name="duration" value="<?= $plan->duration ?>"/ disabled>
                        </div>
                    </div>

                    <div class="fw-600 mb-2">
                        <label for="" class="block py-2 fs-sm color-pri">Number Of Properties</label>
                        <div class="bgColor-pri-200 py-2 px-2">
                            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                            focus:b-color-pri outline-0 color-pri"
                            type="number" name="number_of_properties" value="<?= $plan->number_of_properties ?>" disabled>
                        </div>
                    </div>

                    <form id="checkout" action="subscribe" method="post">
                     <input type="hidden" name="plan_id" value="<?= $plan->id ?>">
                    <div class="fw-600 mb-2">
                        <label for="" class="block py-2 fs-sm color-pri">Payment Code</label>
                        <div class="bgColor-pri-200 py-2 px-2">
                            <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                            focus:b-color-pri outline-0" placeholder="MHFDS588620"
                            type="text" name="payment_code">
                        </div>
                    </div>

                    <div class="w-full fx fx-j-c">
                        <div class="">
                            <p id="response" class="w-full pt-4"></p>
                            <button id="checkout_btn" class="bgColor-pri color-1
                            rounded-full px-5 py-3 mt-5 border-0 fw-bold
                            outline-0 pointer rounded fs-sm"
                            type="button" name="button"
                            onclick="(new Ajax).form('checkout')
                                               .loader('checkout_btn')
                                               .flush('response')
                                               .send();">
                                Checkout
                            </button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

        </div>
        <?php require_once view('client/include/footer'); ?>

    </main>
</body>
<?php require_once view('footer'); ?>
