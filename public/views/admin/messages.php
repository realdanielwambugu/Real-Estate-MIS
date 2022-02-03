<?php require_once view('header'); ?>
<body>
    <main class="w-full h-screen bgColor-sec ff-pri">
        <?php require_once view('admin/include/header'); ?>
        <?php require_once view('admin/include/sidebar'); ?>

        <div class="fx fx-j-e pt-20 ff-sec color-1-800">
            <div class="w-10/12">
                <div class="w-11/12 m-0-auto mt-10 fx fx-j-btw fx-i-c">
                    <h4 class="fw-400 fs-md color-pri-600 ">
                        Messages
                    </h4>
                </div>
                <div class="w-11/12 m-0-auto fx">
                    <table class="table-auto bgColor-trans m-0-auto border-separate">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 color-pri">FullName</th>
                                <th class="px-4 py-2 color-pri">Email</th>
                                <th class="px-4 py-2 color-pri">Messages</th>
                            </tr>
                        </thead>
                        <tbody class="txt-h-c">

                            <?php foreach ($messages as $message): ?>

                            <tr class="bgColor-1 border-0 shadow">
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $message->fullName ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $message->email ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0 txt-h-l">
                                 <?= $message->msg ?>
                                </td>
                            </tr>

                            <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </main>
</body>

<?php require_once view('footer'); ?>
