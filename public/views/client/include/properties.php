<table class="table-auto border-collapse bgColor-trans m-0-auto mt-10  border-separate">
    <thead>
        <tr>
            <th class="px-4 py-2 color-pri"></th>
            <th class="px-4 py-2 color-pri">Name</th>
            <th class="px-4 py-2 color-pri">Type</th>
            <th class="px-4 py-2 color-pri">Contract Type</th>
            <th class="px-4 py-2 color-pri">Price</th>
            <th class="px-4 py-2 color-pri">Location</th>
            <th class="px-4 py-2 color-pri">BedRooms</th>
            <th class="px-4 py-2 color-pri">BathRooms</th>
            <th class="px-4 py-2 color-pri">Area</th>
        </tr>
    </thead>
    <tbody class="txt-h-c">
        <?php foreach ($user->property as $property): ?>
            <tr class="bgColor-1 border-0 shadow">
                <td class="px-4 py-2 color-2-600 border-0">
                    <div class="w-8 h-8 rounded-full">
                        <img class="w-full h-full cover rounded-full"
                        src="<?= images_path("properties/{$property->photo}") ?>" alt="property">
                    </div>
                </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $property->name ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $property->type ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $property->contract_type ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $property->price ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $property->location ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $property->bedrooms ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $property->bathrooms ?> </td>
                <td class="px-4 py-2 color-2-600 border-0"> <?= $property->area ?> </td>
                <td class="px-2 py-1 color-pri">
                    <a href="/client/delete_property/<?= $property->id ?>" class="no-line">
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
