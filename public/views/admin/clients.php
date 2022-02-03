<?php require_once view('header'); ?>
<body>
    <main class="w-full h-screen bgColor-sec ff-pri">
        <?php require_once view('admin/include/header'); ?>
        <?php require_once view('admin/include/sidebar'); ?>

        <div class="fx fx-j-e pt-20 ff-sec color-1-800">
            <div class="w-10/12">
                <div class="w-11/12 m-0-auto mt-10 fx fx-j-btw fx-i-c">
                    <h4 class="fw-400 fs-md color-pri-600 ">
                        Clients
                    </h4>
                </div>
                <div class="w-11/12 m-0-auto fx">
                    <table class="table-auto bgColor-trans m-0-auto border-separate">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 color-pri">FullName</th>
                                <th class="px-4 py-2 color-pri">Email</th>
                                <th class="px-4 py-2 color-pri">Type</th>
                                <th class="px-4 py-2 color-pri">Purchased Plan</th>
                                <th class="px-4 py-2 color-pri">Status</th>
                                <th class="px-4 py-2 color-pri">Joined</th>
                            </tr>
                        </thead>
                        <tbody class="txt-h-c">

                            <?php foreach ($users as $user): ?>

                            <tr class="bgColor-1 border-0 shadow">
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $user->fullName ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $user->email ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $user->type ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0">
                                    <?= $user->subscription() ? $user->subscription()->plan->type : 'none' ?> 
                                </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $user->status ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $user->created_at ?> </td>
                                <td class="px-2 py-1 color-pri">
                                    <a href="/admin/delete_user/<?= $user->id ?>" class="no-line">
                                        <button class="bgColor-3 w-auto
                                        fs-sm  py-1  border-0 rounded fw-bold ff-pri
                                        pointer outline-0 color-1" type="button">
                                            delete
                                        </button>
                                    </a>
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
