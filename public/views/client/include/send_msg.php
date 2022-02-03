<div class="w-5/12 pt-10">
    <form id="send_msg_form" class="w-full m-0-auto txt-h-l"
        action="/client/send_msg" method="post">
       <div class="w-10/12 m-0-auto">
           <h4 class="color-pri py-2">
               Send us a message
           </h4>
           <div class="fw-600 w-full mb-2">
                <label for="email" class="block py-2 fs-sm">Email</label>
               <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
               focus:b-color-pri outline-0"
               type="text" name="email" placeholder="johndoe@gmail.com"
               value="<?= auth()->check() ? auth()->user()->email : '' ?>">
           </div>
           <div class="fw-600 w-full mb-2">
                <label for="email" class="block py-2 fs-sm">FullName</label>
               <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
               focus:b-color-pri outline-0"
               type="text" name="fullName" placeholder="john doe"
               value="<?= auth()->check() ? auth()->user()->fullName : '' ?>">
           </div>
           <div class="fw-600 w-full mb-2">
                <label for="email" class="block py-2 fs-sm">Message</label>
               <textarea rows="7" class="w-full py-2 px-2 rounded b-color-sec-300 border-2
               focus:b-color-pri outline-0" placeholder="Message..."
               type="text" name="msg" ></textarea>
           </div>
           <p id="response" class="w-full txt-h-c"></p>

           <div class="w-4/12 ">
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
