<?php require_once view('header'); ?>

<body>
    <main class="w-full h-auto bgColor-sec ff-sec">
        <?php require_once view('client/include/header'); ?>
        <div class="w-full pt-16">
            <div class="bgColor-sec w-11/12 m-0-auto h-auto mt-8 pt-4 pb-16">
                <div class="w-4/12 fx fx-j-a m-0-auto ">
                    <button class="bgColor-pri-200
                  px-10 py-3 color-pri mt-5 border-0 fw-500 fw-bold
                    hover:bgColor-pri-700 outline-0 pointer rounded fs-sm"
                    type="button" onclick="(new Ajax).route('/client/account')
                                                    .loader('container')
                                                    .container('container')
                                                    .send();">
                        Personal Details
                    </button>

                    <button  class="bgColor-pri-200
                    px-10 py-3 color-pri mt-5 border-0 fw-500 fw-bold
                    hover:bgColor-pri-700 outline-0 pointer rounded fs-s"
                    type="button" onclick="(new Ajax).route('/client/properties')
                                                    .loader('container')
                                                    .container('container')
                                                    .send();">
                        My Properties
                    </button>
                </div>

                 <div id="container" class="txt-h-c">

                    <?php require_once view('client/include/account'); ?>

                 </div>

            </div>

        </div>
        <?php require_once view('client/include/footer'); ?>

    </main>

</body>

<?php require_once view('footer'); ?>
