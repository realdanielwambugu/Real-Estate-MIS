<?php require_once view('header'); ?>

<body>
    <main class="w-full h-auto bgColor-sec ff-sec pb-10">
        <div class="h-20 mb-5">
           <?php require_once view('client/include/header'); ?>
        </div>
        <div class="w-11/12 m-0-auto pb-16">
            <form id="send_msg_form" class="w-9/12 m-0-auto txt-h-l"
                action="/client/send_msg" method="post">
               <div class="w-8/12 m-0-auto">
                   <h4 class="color-pri py-2">
                       Send us a message
                   </h4>
                   <div class="fw-600 w-9/12 mb-2">
                        <label for="email" class="block py-2 fs-sm">Email</label>
                       <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                       focus:b-color-pri outline-0"
                       type="text" name="email" placeholder="johndoe@gmail.com"
                       value="<?= auth()->check() ? auth()->user()->email : '' ?>">
                   </div>
                   <div class="fw-600 w-9/12 mb-2">
                        <label for="email" class="block py-2 fs-sm">FullName</label>
                       <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                       focus:b-color-pri outline-0"
                       type="text" name="fullName" placeholder="john doe"
                       value="<?= auth()->check() ? auth()->user()->fullName : '' ?>">
                   </div>
                   <div class="fw-600 w-9/12 mb-2">
                        <label for="email" class="block py-2 fs-sm">Message</label>
                       <textarea rows="7" class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                       focus:b-color-pri outline-0" placeholder="Message..."
                       type="text" name="msg" ></textarea>
                   </div>

                   <div class="w-4/12 ">
                       
                       <p id="response" class="w-full txt-h-c"></p>

                       <button id="send_msg_btn" class="w-full bgColor-pri rounded py-3 color-1
                       mt-5 border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer"
                       type="button"
                       onclick="
                       (new Ajax).form('send_msg_form')
                                 .loader('send_msg_btn')
                                 .flush('response')
                                 .send();">
                           Send
                       </button>
                   </div>
               </div>

            </form>
        </div>
        <?php require_once view('client/include/footer'); ?>

    </main>
</body>

<?php require_once view('footer'); ?>
