<section id="wppf-legal-center">
    <div class="mb-24 flex relative">
        <div class="absolute inset-0 z-0 flex items-center justify-center">
            <svg aria-hidden="true" viewBox="0 0 418 42" class="w-full fill-[#ffc673]" preserveAspectRatio="none">
                <path d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z"></path>
            </svg>
        </div>

        <div id="a" class="flex-1 relative z-10">
            <header class="mt-10 flex justify-center items-center h-full">
                <div class="max-w-[500px]">
                    <h1 class="text-5xl md:text-6xl xl:text-7xl font-bold tracking-tight"><?php printf(esc_html__('Legal %1$s %2$sCenter%3$s', 'wppf'), '<br/>', '<span class="text-blue-600">', '</span>'); ?></h1>
                    <div class="mt-8">
                        <span class="inline-block w-40 h-1 bg-brand-blue rounded-full"></span>
                        <span class="inline-block w-3 h-1 ml-1 bg-brand-blue rounded-full"></span>
                        <span class="inline-block w-1 h-1 ml-1 bg-brand-blue rounded-full"></span>
                    </div>
                </div>
            </header>
        </div>

        <div id="b" class="mt-3.5 flex-1 relative rotate-0">
            <div class="my-auto mt-12 mr-12 ml-auto absolute inset-0 transform bg-slate-900 border-4 border-black rounded-lg -rotate-6 bg-brand-blue-400" style="width: 92%;"></div>
            <div class="flex justify-end items-center h-full">
                <img class="h-auto mt-12 mr-12 z-10 rotate-3 border border-solid border-black rounded-lg shadow-xl  shadow-black/30 dark:shadow-black/60 " src="https://ct.local/wp-content/uploads/2023/08/wppf-legal-center.png" alt="<?php esc_html(_e('Legal Center', 'wppf')); ?>">
            </div>
        </div>
    </div>

    <div class="mb-6 grid grid-cols-4 gap-y-14 gap-x-10">
        <?php foreach ($args['item_array'] as $item) : ?>
            <?php echo \WPP\WPPF\Helpers\Get_Template::part([
                'slug' => 'partials/legal-center',
                'name' => 'item',
                'args' => $item
            ]); ?>
        <?php endforeach; ?>
    </div>
</section>