<?php require_once view('header'); ?>
<body>
    <main class="w-full h-auto bgColor-sec ff-sec">
        <div class="h-20">
           <?php require_once view('client/include/header'); ?>
        </div>

        <div class="w-full bgColor-sec ff-pri pb-10 pt-2">

            <div class="bgColor-sec w-10/12 m-0-auto fx fx-j-btw fx-i-c">
                <h4 class="fw-bold color-pri-800 ">
                    Listed Properties
                </h4>
                <a href="/client/add_property">
                    <button class="bgColor-pri rounded-full px-5 py-3 color-1
                    mt-5 border-0 fw-500 hover:bgColor-pri-700 outline-0 pointer
                    rounded fs-sm"
                    type="button" name="button">List Your Property</button>
                </a>
            </div>

            <div class="w-10/12 m-0-auto h-auto fx">
                <div class="w-11/12 h-auto  pb-8 ff-pri">

                  <?php foreach ($properties as $property): ?>

                  <a href="/property/<?= $property->id ?>"
                      class="no-line">
                      <div class="bgColor-1 w-full fx fx-j-btw h-48 mb-4 shadow">

                          <div class="w-1/3 bgColor-2">
                              <img class="w-full h-full cover"
                              src="<?= images_path("properties/{$property->photo}") ?>" alt="property">
                          </div>

                          <div class="w-2/3 h-48 py-2 ls-wide pl-2">

                              <div class="w-full fx fx-j-btw fx-i-c border border-t-0
                              border-l-0 border-r-0 b-color-2-400 b-solid">
                                  <div class="pb-2 px-2">
                                      <h2 class="fw-bold color-pri py-1">
                                          <?= $property->name ?>
                                      </h2>
                                      <h4 class="color-pri-700 fw-bold">
                                          <?= $property->location ?>
                                      </h4>
                                 </div>
                                 <div class="px-4">
                                     <h3 class="fw-bold color-pri-700 py-1">
                                         <?= $property->price ?>
                                     </h3>
                                 </div>
                              </div>

                             <div class="pt-2">
                                 <h5 class="px-4 lh-loose ls-wide color-pri-600">
                                     <?= truncate($property->description) ?>
                                 </h5>
                                 <div class="py-2  w-9/12 fx fx-j-a
                                 color-2-800">
                                     <p> Area:
                                         <?= $property->area ?>
                                     </p>
                                    <p> <i class="fa fa-bed fs-md px-1"></i>
                                        <?= $property->bedrooms ?> Beds
                                    </p>
                                    <p><i class="fa fa-bath fs-md px-1"></i>
                                        <?= $property->bathrooms ?> Baths
                                    </p>
                                </div>
                             </div>

                          </div>
                      </div>
                  </a>

                  <?php endforeach; ?>
                </div>

                <?php require_once view('client/include/send_msg'); ?>

            </div>
        </div>
        <?php require_once view('client/include/footer'); ?>

    </main>

</body>
<?php require_once view('footer'); ?>
