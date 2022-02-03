<?php require_once view('header'); ?>
<body>
    <main class="w-full h-screen bgColor-sec ff-pri">
        <?php require_once view('admin/include/header'); ?>
        <?php require_once view('admin/include/sidebar'); ?>

        <div class="fx fx-j-e pt-20 ff-sec color-1-800">
            <div class="w-10/12">
                <div class="w-11/12 m-0-auto mt-10 fx fx-j-btw fx-i-c">
                    <h4 class="fw-400 fs-md color-pri-600 ">
                        Properties
                    </h4>
                </div>
                <div class="w-11/12 m-0-auto fx">
                    <table class="table-auto border-collapse bgColor-trans m-0-auto mt-10  border-separate">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 color-pri fs-xs"></th>
                                <th class="px-4 py-2 color-pri fs-xs">Client</th>
                                <th class="px-4 py-2 color-pri fs-xs">Name</th>
                                <th class="px-4 py-2 color-pri fs-xs">Type</th>
                                <th class="px-4 py-2 color-pri fs-xs">Contract Type</th>
                                <th class="px-4 py-2 color-pri fs-xs">Price</th>
                                <th class="px-4 py-2 color-pri fs-xs">Location</th>
                                <th class="px-4 py-2 color-pri fs-xs">BedRooms</th>
                                <th class="px-4 py-2 color-pri fs-xs">BathRooms</th>
                                <th class="px-4 py-2 color-pri fs-xs">Area</th>
                            </tr>
                        </thead>
                        <tbody class="txt-h-c">
                            <?php foreach ($properties as $property): ?>
                                <tr class="bgColor-1 border-0 shadow">
                                    <td class="px-4 py-2 color-2-600 border-0 fs-xs">
                                        <div class="w-8 h-8 rounded-full">
                                            <img class="w-full h-full cover rounded-full"
                                            src="<?= images_path("properties/{$property->photo}") ?>" alt="property">
                                        </div>
                                    </td>
                                    <td class="px-4 py-2 color-2-600 border-0 fs-xs"> <?= $property->user->email ?> </td>
                                    <td class="px-4 py-2 color-2-600 border-0 fs-xs"> <?= $property->name ?> </td>
                                    <td class="px-4 py-2 color-2-600 border-0 fs-xs"> <?= $property->type ?> </td>
                                    <td class="px-4 py-2 color-2-600 border-0 fs-xs"> <?= $property->contract_type ?> </td>
                                    <td class="px-4 py-2 color-2-600 border-0 fs-xs"> <?= $property->price ?> </td>
                                    <td class="px-4 py-2 color-2-600 border-0 fs-xs"> <?= $property->location ?> </td>
                                    <td class="px-4 py-2 color-2-600 border-0 fs-xs"> <?= $property->bedrooms ?> </td>
                                    <td class="px-4 py-2 color-2-600 border-0 fs-xs"> <?= $property->bathrooms ?> </td>
                                    <td class="px-4 py-2 color-2-600 border-0 fs-xs"> <?= $property->area ?> </td>
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
