<?php require_once view('header'); ?>
<body>
    <main class="w-full h-auto bgColor-sec ff-sec">
        <div class="h-20">
           <?php require_once view('client/include/header'); ?>
        </div>
        <div class="w-10/12 m-0-auto fx fx-j-a">
            <div class="w-full bgColor-sec ff-pri pb-10 pt-2 ">
                <div class="w-full bgColor-sec ">
                    <h2 class="fw-600 color-pri-700 py-2">
                       <?= $property->name ?>
                   </h2>
                </div>
                <div class="bgColor-1 w-11/12 fx fx-j-btw h-70 mb-4 shadow">
                    <img class="w-full h-full cover"
                    src="<?= images_path("properties/{$property->photo}") ?>" alt="property">
                </div>

                <div class="w-11/12 fx fx-j-btw">
                <div class="w-4/12 h-auto py-2 ls-wide lh-loose pl-2
                 bgColor-1 shadow">
                   <table class="w-11/12 m-0-auto">
                       <thead>
                            <tr>
                              <th class="color-pri">Overview</th>
                              <th class="color-pri"></th>
                            </tr>
                       </thead>
                        <tbody>
                            <tr>
                                <td class="color-pri border-0">
                                    <span class="px-2 fw-bold">Type:</span>
                                    <span><?= $property->type ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="color-pri border-0">
                                    <span class="px-2 fw-bold">Contract Type:</span>
                                    <span><?= $property->contract_type ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="color-pri border-0">
                                    <span class="px-2 fw-bold">Pice:</span>
                                    <span><?= $property->price ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="color-pri border-0">
                                    <span class="px-2 fw-bold">Location:</span>
                                    <span><?= $property->location ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="color-pri border-0">
                                    <span class="px-2 fw-bold">Bedrooms:</span>
                                    <span><?= $property->bedrooms ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="color-pri border-0">
                                    <span class="px-2 fw-bold">Bathrooms:</span>
                                    <span><?= $property->bathrooms ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="color-pri border-0">
                                    <span class="px-2 fw-bold">Area:</span>
                                    <span><?= $property->area ?></span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="w-8/12 px-4 lh-loose ls-wide color-pri-600 pt-2
                bgColor-1 shadow">
                     <?= truncate($property->description, 500) ?>
                </div>
                </div>
        </div>

        <?php require_once view('client/include/send_msg'); ?>

       </div>

       <?php require_once view('client/include/footer'); ?>

    </main>
</body>
<?php require_once view('footer'); ?>
