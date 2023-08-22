<section class="wppf-legal-center wppf-<?php echo $args['strings']['section_class']; ?>">
    <div class="grid grid-cols-4 gap-8">
        <div class="bg-gray-100 col-span-1">
            <?php echo $args['menu']; ?>
        </div>
        <div class="col-span-3">
            <div class="mb-14 p-5 text-xs border border-brand-blue-800">
                <div class="pb-4 grid gap-3 grid-cols-[auto,1fr] items-center">
                    <div>
                        <?php echo $args['svg_circle_info']; ?>
                    </div>
                    <div class="leading-5">
                        <?php echo wp_kses_post($args['strings']['legal']['legal_take_note']); ?>
                    </div>
                </div>
                <p class="mb-0"><?php printf(__('This policy serves as a legally binding document delineating the terms governing the appropriate use and protection of images exhibited on our website, ensuring their lawful and respectful utilization. %1$s', 'wppf'), $args['strings']['legal']['strongly_encourge']); ?></p>
            </div>

            <div class="mb-5 grid gap-3 justify-center" style="grid-template-columns: auto auto">
                <div class="h-8 w-8 flex justify-center items-center">
                    <?php echo $args['svg_logo_policy']; ?>
                </div>
                <h1 class="mb-5 text-xl tracking-tight"><?php _e('IMAGE POLICY', 'wppf'); ?></h1>
            </div>

            <p id="lud" class="mb-4 text-sm font-semibold"><?php printf(__('%1$s: %2$s15 May 2023%3$s', 'wppf'), $args['strings']['legal']['last_updated_label'], '<span class="pl-3 font-normal">', '</span>'); ?></p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['purpose_label']; ?></h2>

            <p><?php printf(__('The purpose of this Image Policy is to govern the use of images, photographs, graphics, and other visual content ("%1$sImages%2$s") uploaded, shared, or displayed by users on Our Website.', 'wppf'), '<span class="font-semibold">', '</span>', $args['strings']['name_tm']); ?></p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo esc_html($args['strings']['legal']['parties_label']); ?></h2>

            <p>
                <?php printf(
                    __('This Image Policy ("%1$sPolicy%2$s") %3$s', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>',
                    wp_kses_post($args['strings']['legal']['id_parties']),
                ); ?>
            </p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['purpose_label']; ?></h2>

            <p><?php printf(__('The purpose of this Copyright Policy is to govern the principles and guidelines for the appropriate use, protection, and attribution of copyrighted materials on Our Website, ensuring both the creative rights of content creators and the responsible engagement of users.', 'wppf'), '<span class="font-semibold">', '</span>', $args['strings']['name_tm']); ?></p>

            <!-- Included policies - 1 of 6. -->
            <!-- This is an h2 heading. -->
            <?php echo $args['strings']['legal']['included_policies_label']; ?>

            <!-- Included policies - 2 of 6. -->
            <p><?php echo $args['strings']['legal']['included_policies_2of6']; ?></p>

            <!-- Included policies - 3 of 6. -->
            <ul class="mb-4 ml-0 list-disc">
                <li><?php printf(
                        __('DISCLAIMER POLICY: %2$slocated at %1$s', 'wppf'),
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/disclaimer-policy')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/disclaimer-policy/')) . '</a>',
                        '<br>'
                    ); ?>
                </li>
                <li><?php printf(
                        __('TERMS AND CONDITIONS POLICY: %2$slocated at %1$s', 'wppf'),
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/terms-and-conditions-policy/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/terms-and-conditions-policy/')) . '</a>',
                        '<br>'
                    ); ?>
                </li>
                <li><?php printf(
                        __('PRIVACY POLICY: %2$slocated at %1$s', 'wppf'),
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/privacy-policy')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/privacy-policy/')) . '</a>',
                        '<br>'
                    ); ?>
                </li>
            </ul>

            <!-- Included policies - 4 of 6. -->
            <?php echo $args['strings']['legal']['included_policies_4of6']; ?>

            <!-- Included policies - 5 of 6. -->
            <ul class="mb-4 ml-0 list-decimal">
                <li><?php _e('This Policy', 'wppf'); ?></li>
                <li><?php _e('DISCLAIMER POLICY', 'wppf'); ?></span< /li>
                <li><?php _e('TERMS AND CONDITIONS POLICY', 'wppf'); ?></span< /li>
                <li><?php _e('PRIVACY POLICY', 'wppf'); ?></span< /li>
            </ul>

            <!-- Included policies - 6 of 6. -->
            <?php echo $args['strings']['legal']['included_policies_6of6']; ?>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['agreement_to_label']; ?></h2>

            <?php echo $args['strings']['legal']['agreement_to']; ?>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['disagreement_label']; ?></h2>

            <p><?php echo $args['strings']['legal']['disagreement']; ?></p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['res_conflicts_label']; ?></h2>

            <?php echo $args['strings']['legal']['res_conflicts']; ?>

            <h2 class="mb-4 text-base font-semibold"><?php _e('TABLE OF CONTENTS', 'wppf'); ?></h2>

            <ol class="mb-6 list-decimal">
                <li><?php printf(__('%1$sIMAGE OWNERSHIP AND RIGHT%2$s', 'wppf'), '<a href="' . esc_html('#owner') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sIMAGE CONTENT GUIDELINES%2$s', 'wppf'), '<a href="' . esc_html('#guidelines') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sMONITORING AND MODERATION%2$s', 'wppf'), '<a href="' . esc_html('#monitor') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sREPORTING VIOLATIONS%2$s', 'wppf'), '<a href="' . esc_html('#report') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sTHIRD PARTY IMAGES%2$s', 'wppf'), '<a href="' . esc_html('#threep') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sDISCLAIMER%2$s', 'wppf'), '<a href="' . esc_html('#disclaimer') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#legal_compliance') . '">', $args['strings']['legal']['legal_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#compliance') . '">', $args['strings']['legal']['policy_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#serviceability') . '">', $args['strings']['legal']['serviceability_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#entire') . '">', $args['strings']['legal']['entire_agreement_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#dispute') . '">', $args['strings']['legal']['dispute_resolution_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#law') . '">', $args['strings']['legal']['governing_law_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#mod') . '">', $args['strings']['legal']['policy_modifications_label'], '</a>'); ?></li>
            </ol>

            <h2 id="owner" class="mb-4 text-base font-semibold"><?php _e('1. IMAGE OWNERSHIP AND RIGHT', 'wppf'); ?></h2>

            <p><?php _e('Users who upload, share, or display Images on Our Website retain all rights and ownership of their respective Images. By submitting Images to Our Website, User grants Us a non-exclusive, worldwide, royalty-free license to use, reproduce, distribute, publicly display, and modify the Images solely for the purpose of operating, promoting, and improving Our Website and related services.', 'wppf'); ?></p>

            <h2 id="guidelines" class="mb-4 text-base font-semibold"><?php _e('2. IMAGE CONTENT GUIDELINES', 'wppf'); ?></h2>

            <p><?php _e('Users are solely responsible for the Images they upload, share, or display on Our Website. User agrees not to upload, share, or display any Images that violate any applicable laws or infringe upon the intellectual property rights or privacy rights of any third party. Prohibited Images include, but are not limited to, those that are:', 'wppf'); ?></p>

            <ol class="mb-4 ml-0 list-lower-alpha">
                <li><?php _e('Pornographic, sexually explicit, or obscene;', 'wppf'); ?></li>
                <li><?php _e('Offensive, defamatory, or discriminatory;', 'wppf'); ?></li>
                <li><?php _e('Violent, threatening, or promoting violence;', 'wppf'); ?></li>
                <li><?php _e('Infringing upon copyrights, trademarks, or other intellectual property rights;', 'wppf'); ?></li>
                <li><?php _e('Misleading, deceptive, or false;', 'wppf'); ?></li>
                <li><?php _e('Harmful to minors;', 'wppf'); ?></li>
                <li><?php _e('Violating the privacy or personal rights of others.', 'wppf'); ?></li>
            </ol>

            <h2 id="monitor" class="mb-4 text-base font-semibold"><?php _e('3. MONITORING AND MODERATION', 'wppf'); ?></h2>

            <p><?php printf(__('While We do not actively monitor Images uploaded by users, We reserve the right to review, moderate, and remove any Images that violate this Policy or Our %1$sTERMS AND CONDITIONS POLICY%2$s. We may, at Our discretion, take appropriate actions, including but not limited to, warning the User, suspending or terminating a User account, and reporting illegal activities to law enforcement authorities.', 'wppf'), '<a href="' . path_join(get_site_url(), '/legal-center/terms-and-conditions/') . '">', '</a>'); ?></p>

            <h2 id="report" class="mb-4 text-base font-semibold"><?php _e('4. REPORTING VIOLATIONS', 'wppf'); ?></h2>

            <div><?php printf(__('Contact Us by using this link: %1$s.', 'wppf'), $args['form']); ?></div>


            <h2 id="threep" class="mb-4 text-base font-semibold"><?php _e('5. THIRD PARTY IMAGES', 'wppf'); ?></h2>

            <p><?php _e('If Our Website displays Images from third-party sources or links to external websites, We make best efforts to ensure that We have appropriate permissions or licenses for using such Images. However, We are not responsible for the content, legality, or ownership of third-party Images, and We encourage users to verify the rights and permissions before using such Images.', 'wppf'); ?></p>

            <h2 id="disclaimer" class="mb-4 text-base font-semibold"><?php _e('6. DISCLAIMER', 'wppf'); ?></h2>

            <p><?php _e('We disclaim any liability for Images uploaded, shared, or displayed by users on Our Website. Users are solely responsible for the content of their Images and any legal consequences that may arise from their use of Images on Our Website.', 'wppf'); ?></p>

            <h2 id="legal_compliance" class=" mb-4 text-base font-semibold"><?php printf(__('7. %1$s', 'wppf'), $args['strings']['legal']['legal_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['legal_compliance']; ?></p>

            <h2 id="compliance" class=" mb-4 text-base font-semibold"><?php printf(__('8. %1$s', 'wppf'), $args['strings']['legal']['policy_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['policy_compliance']; ?></p>

            <h2 id="serviceability" class=" mb-4 text-base font-semibold"><?php printf(__('9. %1$s', 'wppf'), $args['strings']['legal']['serviceability_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['serviceability']; ?></p>

            <h2 id="entire" class="mb-4 text-base font-semibold"><?php printf(__('10. %1$s', 'wppf'), $args['strings']['legal']['entire_agreement_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['entire_agreement']; ?></p>

            <h2 id="dispute" class="mb-4 text-base font-semibold"><?php printf(__('11. %1$s', 'wppf'), $args['strings']['legal']['dispute_resolution_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['dispute_resolution']; ?></p>

            <h2 id="law" class="mb-4 text-base font-semibold"><?php printf(__('12. %1$s', 'wppf'), $args['strings']['legal']['governing_law_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['governing_law']; ?></p>

            <h2 id="mod" class="mb-4 text-base font-semibold"><?php printf(__('13. %1$s', 'wppf'), $args['strings']['legal']['policy_modifications_label']); ?></h2>

            <?php echo $args['strings']['legal']['policy_modifications']; ?>

        </div>
    </div>
</section>