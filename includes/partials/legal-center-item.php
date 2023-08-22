<a href="<?php echo esc_url($args['link']); ?>" class="min-h-[10rem] p-4 pt-6 bg-slate-3 border border-1 border-black <?php echo esc_html($args['row_class']); ?> rounded-lg flex flex-col no-underline hover:no-underline shadow-xl shadow-black/20 dark:shadow-black/40 hover:bg-gradient-to-t from-gray-900 to-gray-600 hover:bg-gradient-to-r" data-te-ripple-init>
    <div class="flex-grow flex flex-col justify-between">
        <div>
            <div class="h-10 mb-4 flex justify-center"><?php echo $args['svg']; ?></div>
            <h2 class="items-center text-sm text-center text-white font-normal"><?php echo esc_html($args['title']); ?></h2>
        </div>
    </div>
</a>