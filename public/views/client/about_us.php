<?php require_once view('header'); ?>

<body>
    <main class="w-full h-auto bgColor-sec ff-sec ff-pri">
        <div class="h-20 mb-5">
           <?php require_once view('client/include/header'); ?>
        </div>
        <div class="w-7/12 m-0-auto h-auto">
            <div class="w-10/12">
                <h2 class="pb-2 px-4 fw-black">
                    Our Team
               </h2>

               <div class="pt-4 fx fx-j-btw">
                   <?php foreach ($agents as $agent): ?>
                       <div class="txt--h-c">
                           <div class="w-40 h-40 rounded-full">
                               <img class="w-full h-full cover rounded-full"
                               src="<?= images_path("agents/{$agent->photo}") ?>"
                                alt="agent">
                           </div>
                           <div class="w-full fx fx-j-c pt-4">
                               <h4><?= $agent->fullName ?></h4>
                           </div>
                           <div class="w-full fx fx-j-c pt-1 color-2-700 fs-sm">
                               <h4><?= $agent->title ?></h4>
                           </div>
                       </div>
                   <?php endforeach; ?>
               </div>
            </div>

            <div class="w-full h-auto mt-5 pb-8">
                <div class="w-full h-auto">
                    <h2 class="pb-2 px-4 fw-black">
                        Our Mission
                   </h2>
                    <h5 class="px-4 lh-loose ls-wide color-pri-700">
                        <?= $settings->about_us ?>
                    </h5>
                </div>

             </div>
        </div>
        <?php require_once view('client/include/footer'); ?>

    </main>


</body>

<?php require_once view('footer'); ?>
