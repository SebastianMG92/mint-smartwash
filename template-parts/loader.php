<!-- Loader -->
<div data-loader class="fixed inset-0 z-[100] text-white loader">
    <div 
        class="flex flex-col justify-between absolute inset-0 bg-custom-black_light translate-x-0 p-7 lg:p-10 lg:pr-20 lg:pb-20 loader-entry" 
        data-loader-entry>

        <div data-loader-logo>
            <?php do_action("get_icon", "logo", "max-w-[12.5rem] lg:max-w-[21.875rem] loader-logo"); ?>
        </div>

        <div class="self-end">
            <?php // include_once(get_template_directory() . '/template-parts/loading.php'); ?>
        </div>

    </div>
</div>
