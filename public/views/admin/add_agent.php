<?php require_once view('header'); ?>
<body>
    <main class="w-full h-screen bgColor-sec ff-pri">
        <?php require_once view('admin/include/header'); ?>
        <?php require_once view('admin/include/sidebar'); ?>

        <div class="fx fx-j-e pt-20 ff-sec color-1-800">
            <form id="add_agent" class="w-10/12" action="admin/add_agent"
               method="post">
                <div class="w-11/12 m-0-auto mt-10 txt-h-c">
                    <h4 class="fw-400 fs-md color-pri-600 pb-4">
                        Add Agent
                    </h4>
                </div>
                <div class="w-8/12 fx fx-j-a m-0-auto">
                    <div class="w-5/12">
                        <div class="fw-600 mb-2">
                            <label for="Name" class="block py-2 fs-sm color-pri-600">FullName</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="fullName">
                            </div>
                        </div>

                        <div class="fw-600 mb-2">
                            <label for="beds" class="block py-2 fs-sm color-pri-600">Title</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="title" >
                            </div>
                        </div>

                        <div class="fw-600 mb-2">
                            <label for="beds" class="block py-2 fs-sm color-pri-600">Email;</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="w-5/12">

                        <div class="fw-600 mb-2">
                            <label for="" class="block py-2 fs-sm color-pri-600">Phone</label>
                            <div class="bgColor-pri-200 py-2 px-2">
                                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                                focus:b-color-pri outline-0"
                                type="text" name="phone">
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

                        <div class="w-full fx fx-j-c">
                            <div class="">
                                <p id="response" class="w-full pt-4"></p>
                                <button id="add_agent_btn" class="bgColor-pri
                                rounded-full px-5 py-3 color-1 mt-5 border-0 fw-500
                                hover:bgColor-pri-700 outline-0 pointer rounded fs-sm"
                                type="button" name="button"
                                onclick="(new Ajax).form('add_agent')
                                                   .loader('add_agent_btn')
                                                   .flush('response')
                                                   .send();">
                                    Add agent
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </main>
</body>
<?php require_once view('footer'); ?>
