<?php require_once view('header'); ?>

<body>
    <main class="w-full h-screen bgColor-sec ff-sec">
        <?php require_once view('client/include/header'); ?>
        <div class="w-full pt-16">
            <div class="bgColor-sec w-11/12 m-0-auto h-auto mt-8 pt-4 pb-16">

                <form id="add_property" class="w-9/12 fx fx-j-btw m-0-auto txt-h-l"
                    action="/client/add_property" method="post">
                    <div class="w-7/12 px-4">
                        <h2 class="color-pri py-2">
                            Add Property
                        </h2>
                      <input type="hidden" name="user_id" value="<?= auth()->id() ?>">
                      <div class="w-11/12 fw-600 mb-2">
                          <label for="name" class="block py-2 fs-sm color-pri-600">Property Name</label>
                          <div class="bgColor-pri-200 py-2 px-2">
                              <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                              focus:b-color-pri outline-0"
                              type="text" name="name" placeholder="eg: condo">
                          </div>
                      </div>

                        <div class="w-11/12 fw-600 mb-2">
                            <label for="type" class="block py-2 fs-sm color-pri-600">Type</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="type" placeholder="eg: condo">
                            </div>
                        </div>

                        <div class="w-11/12 fw-600 mb-2">
                            <label for="beds" class="block py-2 fs-sm color-pri-600">Contract Type</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="contract_type" placeholder="eg: Rent">
                            </div>
                        </div>

                        <div class="w-11/12 fw-600 mb-2">
                            <label for="price" class="block py-2 fs-sm color-pri-600">Price</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="price" placeholder="eg: 20,0000 Monthly">
                            </div>
                        </div>
                        <div class="w-11/12 fw-600 mb-2">
                            <label for="location" class="block py-2 fs-sm color-pri-600">Location</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="location" placeholder="eg: Thika, General Kago RD">
                            </div>
                        </div>
                    </div>
                    <div class="w-7/12 px-4">
                       <div class="w-11/12 fw-600 mb-2">
                           <label for="bedrooms" class="block py-2 fs-sm color-pri-600">Bedrooms</label>
                           <div class="bgColor-pri-200 py-2 px-2">
                               <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                               focus:b-color-pri outline-0"
                               type="number" name="bedrooms" placeholder="eg: 3">
                           </div>
                       </div>
                        <div class="w-11/12 fw-600 mb-2">
                            <label for="bathrooms" class="block py-2 fs-sm color-pri-600">Bathrooms</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="number" name="bathrooms" placeholder="eg: 4">
                            </div>
                        </div>

                        <div class="w-11/12 fw-600 mb-2">
                            <label for="bedrooms" class="block py-2 fs-sm color-pri-600">Area</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="area" placeholder="eg: 750 square Metres">
                            </div>
                        </div>

                        <div class="w-11/12 fw-600 mb-2">
                            <label for="image" class="block py-2 fs-sm color-pri-600">image</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="file" name="photo">
                            </div>
                        </div>

                        <div class="w-11/12 fw-600 mb-2">
                            <label for="capacity" class="block py-2 fs-sm color-pri-600">Description</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <textarea id="description" class="w-full" name="description" rows="5"
                                placeholder="deccription"></textarea>
                            </div>
                        </div>

                        <div class="w-full fx fx-j-c">
                            <p class="txt-h-c py-2"></p>
                            <div class="">
                                <p id="response" class="w-full"></p>
                                <button id="add_property_btn" class="bgColor-pri
                                rounded-full px-5 py-3 color-1 mt-5 border-0 fw-500
                                hover:bgColor-pri-700 outline-0 pointer rounded fs-sm"
                                type="button" name="button"
                                onclick="(new Ajax).form('add_property')
                                                   .loader('add_property_btn')
                                                   .flush('response')
                                                   .send();">
                                    Add Property
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
        <?php require_once view('client/include/footer'); ?>

    </main>
</body>

<?php require_once view('footer'); ?>
