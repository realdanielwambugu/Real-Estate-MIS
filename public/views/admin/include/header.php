<div class="w-full h-20 bgColor-1 shadow fixed">
    <div class="fx fx-j-e fx-i-c h-20">
        <div class="w-2/12 fx fx-i-c">
            <div class="w-16 h-16 rounded-full">
                <img class="w-full h-full cover rounded-full"
                src="<?= images_path('/default/default.jpg')?>" alt="profile">
            </div>
            <div class="w-5/12 fw-bold color-pri-700">
                <?= auth()->user()->fullName ?>
                <h5 class="fw-600 color-pri-600">Adminstrator</h5>
            </div>
        </div>
    </div>
</div>
