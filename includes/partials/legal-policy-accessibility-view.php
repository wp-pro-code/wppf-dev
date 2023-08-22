<section class="wppf-legal-center wppf-<?php echo $args['strings']['section_class']; ?>">
    <div class="grid grid-cols-4 gap-8">
        <div class="bg-gray-100 col-span-1">
            <?php echo $args['menu']; ?>
        </div>
        <div class="col-span-3">
            <div class="mb-5 grid gap-3 justify-center" style="grid-template-columns: auto auto">
                <div class="h-8 w-8 flex justify-center items-center">
                    <?php echo $args['svg_logo_policy']; ?>
                </div>
                <h1 class="mb-5 text-xl tracking-tight"><?php _e('ACCESSIBILITY STATEMENT', 'wppf'); ?></h1>
            </div>

            <h2 id="lud" class="mb-4 text-base font-semibold"><?php printf(__('Last Updated: %2$s15 May 2023%3$s', 'wppf'), $args['strings']['legal']['last_updated_label'], '<span class="pl-3 font-normal">', '</span>'); ?></h2>

            <h2 id="purpose" class="mb-4 text-base font-semibold"><?php _e('Purpose', 'wppf'); ?></h2>

            <p><?php printf(__('The purpose of this Accessibility Statemnet is to describe our ongoing effort to enhance the user experience for all visitors.', 'wppf'), '<span class="font-semibold">', '</span>', $args['strings']['name_tm']); ?></p>

            <h2 id="scope" class="mb-4 text-base font-semibold"><?php _e('Scope', 'wppf'); ?></h2>

            <p><?php printf(__('This Statement applies to all web content and digital assets owned, maintained, or operated by this site at %1$s.', 'wppf'), esc_url(get_site_url())); ?></p>

            <h2 id="standards" class="mb-4 text-base font-semibold"><?php _e('Accessibility Standards', 'wppf'); ?></h2>

            <p><?php _e('We have undertaken efforts to comply with the Web Content Accessibility Guidelines (WCAG) 2.1, published by the World Wide Web Consortium (W3C). These guidelines provide a set of best practices for making web content more accessible to people with disabilities. Our goal is to meet Level AA compliance, which addresses the most significant accessibility barriers.', 'wppf'); ?></p>

            <h2 id="ongoing" class="mb-4 text-base font-semibold"><?php _e('Ongoing Improvements', 'wppf'); ?></h2>

            <p><?php _e('Accessibility is an ongoing process, and we are committed to continually reviewing and enhancing our website to maintain compliance with accessibility standards. We seek feedback from users with difficulities accessing our site to identify and address potential barriers.', 'wppf'); ?></p>

            <h2 id="legal" class=" mb-4 text-base font-semibold"><?php _e('Legal Compliance', 'wppf'); ?></h2>

            <p><?php _e('This Statement is not intended to create or imply any contractual or legal rights on behalf of site users. It is a statement of our commitment to accessibility and outlines our efforts to comply with applicable accessibility standards. However, nothing in this Accessibility Statement waives our right to defend ourselves against any claims or actions related to accessibility or other legal matters.', 'wppf'); ?></p>

            <h2 id="contact" class=" mb-4 text-base font-semibold"><?php _e('Contact Information', 'wppf'); ?></h2>

            <div><?php printf(__('Contact us by using this link: %1$s.', 'wppf'), $args['form']); ?></div>

        </div>
    </div>
</section>