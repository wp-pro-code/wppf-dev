<section id="version-<?php echo esc_html($args['version']); ?>" aria-labelledby="version-<?php echo esc_html($args['version']); ?>-heading" class="md:flex">
    <h2 id="version-<?php echo esc_html($args['version']); ?>-heading" class="pl-7 text-sm leading-6 text-slate-500 md:w-1/4 md:pl-0 md:pr-12 md:text-right"><?php printf(esc_html__('Version %s', 'wppf'), $args['version']); ?></h2>
    <div class="relative pt-2 px-10 pb-16 md:w-3/4 mb:mb-3 md:pl-12 md:pt-0">
        <div class="absolute left-0 w-px bg-brand-blue -top-3 md:top-2.5" style="bottom: -0.5rem"></div>
        <div class="absolute -left-1 -top-[1.0625rem] h-[0.5625rem] w-[0.5625rem] rounded-full bg-brand-blue-800 md:top-[0.4375rem]"></div>
        <div class="max-w-none prose-h3:mb-4 prose-h3:text-base prose-sm prose prose-slate">
            <div class="text-sm"><?php echo esc_html($args['date']); ?></div>
            <h3 class="font-semibold"><?php echo esc_html($args['h3']); ?></h3>
            <?php echo $args['content']; ?>
        </div>
        <hr class="h-px mt-7 bg-slate-8">
    </div>
</section>