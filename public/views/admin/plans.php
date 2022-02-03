<?php require_once view('header'); ?>
<body>
    <main class="w-full h-screen bgColor-sec ff-pri">
        <?php require_once view('admin/include/header'); ?>
        <?php require_once view('admin/include/sidebar'); ?>

        <div class="fx fx-j-e pt-20 ff-sec color-1-800">
            <div class="w-10/12">
                <div class="w-11/12 m-0-auto mt-10 fx fx-j-btw fx-i-c">
                    <h4 class="fw-400 fs-md color-pri-600 ">
                        Plans
                    </h4>
                    <a href="/admin/add_plan">
                        <button id="signin_btn" class="bgColor-pri rounded-full px-5 py-3 color-1
                        mt-5 border-0 fw-500 hover:bgColor-pri-700 outline-0 pointer
                        rounded fs-sm"
                        type="button" name="button">Add New Plan</button>
                    </a>
                </div>
                <div class="w-11/12 m-0-auto fx">
                    <table class="table-auto bgColor-trans m-0-auto border-separate">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 color-pri">Type</th>
                                <th class="px-4 py-2 color-pri">Price</th>
                                <th class="px-4 py-2 color-pri">Duration</th>
                                <th class="px-4 py-2 color-pri">Number Of Properties</th>
                                <th class="px-4 py-2 color-pri">Number Of Agents</th>
                                <th class="px-4 py-2 color-pri">Free Space</th>
                            </tr>
                        </thead>

                        <tbody class="txt-h-c">

                            <?php foreach ($plans as $plan): ?>

                            <tr class="bgColor-1 border-0 shadow">
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $plan->type ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $plan->price ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $plan->duration ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $plan->number_of_properties ?> Properties</td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $plan->number_of_agents ?> </td>
                                <td class="px-4 py-1 color-2-600 border-0"> <?= $plan->free_space ?> </td>
                                <td class="px-2 py-1 color-pri">
                                    <a href="/admin/delete_plan/<?= $plan->id ?>" class="no-line">
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
