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
                <p class="mb-0"><?php printf(
                                    __('This policy serves as a legally binding document delineating the terms governing the proper utilization and safeguarding of our logos and images showcased on our website, thereby ensuring their lawful and respectful usage. %1$s', 'wppf'),
                                    $args['strings']['legal']['strongly_encourge']
                                ); ?></p>
            </div>

            <div class="mb-5 grid gap-3 justify-center" style="grid-template-columns: auto auto">
                <div class="h-8 w-8 flex justify-center items-center">
                    <?php echo $args['svg_logo_policy']; ?>
                </div>
                <h1 class="mb-5 text-xl tracking-tight"><?php _e('LOGO AND IMAGE PROTECTION POLICY', 'wppf'); ?></h1>
            </div>

            <p id="lud" class="mb-4 text-sm font-semibold"><?php printf(__('%1$s: %2$s15 May 2023%3$s', 'wppf'), $args['strings']['legal']['last_updated_label'], '<span class="pl-3 font-normal">', '</span>'); ?></p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo esc_html($args['strings']['legal']['parties_label']); ?></h2>

            <p>
                <?php printf(
                    __('This Company Logo And Image Policy ("%1$sPolicy%2$s") %3$s', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>',
                    wp_kses_post($args['strings']['legal']['id_parties']),
                ); ?>
            </p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['purpose_label']; ?></h2>

            <p><?php printf(
                    __('The purpose of this Compnay Logo and Image Protection Policy is to govern the protection, use, and ownership of logos and images ("%1$sAssets%2$s") displayed on Our Website', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>',
                    $args['strings']['name_tm']
                ); ?></p>

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

            <ul class="mb-6 list-decimal">
                <li><?php printf(__('%1$sOWNERSHIP AND INTELLECTUAL PROPERTY RIGHTS%2$s', 'wppf'), '<a href="' . esc_html('#owner') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sPROHIBITED USE AND RESTRICTIONS%2$s', 'wppf'), '<a href="' . esc_html('#pro') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sENFORCEMENT%2$s', 'wppf'), '<a href="' . esc_html('#enforce') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sINDEMNIFICATION%2$s', 'wppf'), '<a href="' . esc_html('#imdemnification') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#legal_compliance') . '">', $args['strings']['legal']['legal_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#compliance') . '">', $args['strings']['legal']['policy_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#serviceability') . '">', $args['strings']['legal']['serviceability_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#entire') . '">', $args['strings']['legal']['entire_agreement_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#dispute') . '">', $args['strings']['legal']['dispute_resolution_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#law') . '">', $args['strings']['legal']['governing_law_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#mod') . '">', $args['strings']['legal']['policy_modifications_label'], '</a>'); ?></li>
            </ul>

            <h2 id="owner" class="mb-4 text-base font-semibold"><?php _e('1. OWNERSHIP AND INTELLECTUAL PROPERTY RIGHTS', 'wppf'); ?></h2>

            <p><?php printf(
                    __('%1$sOwnership%2$s: All logos, images, graphics, photographs, and other visual and audio content displayed on Our Website, including those created by the Company, are protected by copyright and/or other intellectual property laws and are the exclusive property of the Company or its respective owners.', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>'
                ); ?></p>

            <p><?php printf(
                    __('%1$sLimited License%2$s: You may not modify, reproduce, distribute, create derivative works, publicly display, or exploit the Assets in any unauthorized manner. You are expressly prohibited from removing any trademark symbols associated with the Assets and from altering or removing any underlying metadata. If you wish to use the Assets for any other purpose, including personal or commercial use, you must contact the Company to obtain explicit written permission. By c,icking on this form link you can make a request to utalize an Asset.', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>'
                ); ?></p>

            <h2 id="pro" class="mb-4 text-base font-semibold"><?php _e('2. PROHIBITED USE AND RESTRICTIONS', 'wppf'); ?></h2>

            <p><?php printf(
                    __('%1$sUnauthorized Use%2$s: You may not use the Assets for any purpose not expressly permitted by this Policy, including, but not limited to, personal and commercial purposes, without Our prior written consent.', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>'
                ); ?></p>

            <p><?php printf(
                    __('%1$sAlterations%2$s: You may not alter, modify, or create derivative works based on the Assets without Our explicit written permission.', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>'
                ); ?></p>

            <p><?php printf(
                    __('%1$sMisrepresentation%2$s: You may not use the Assets in a manner that may cause confusion, mislead, or imply endorsement or affiliation with the Company where none exists.', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>'
                ); ?></p>

            <p><?php printf(
                    __('%1$sReverse Engineering%2$s: You may not reverse engineer, decompile, or disassemble any aspect of the Assets or attempt to derive their source code.', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>'
                ); ?></p>

            <h2 id="enforce" class="mb-4 text-base font-semibold"><?php _e('3. ENFORCEMENT', 'wppf'); ?></h2>

            <p><?php _e('We reserve the right to enforce this Policy at Our discretion. In case of unauthorized use or violation of this Policy, We may take appropriate legal action to protect Our rights.', 'wppf'); ?></p>

            <h2 id="imdemnification" class="mb-4 text-base font-semibold"><?php _e('4. INDEMNIFICATION', 'wppf'); ?></h2>

            <p><?php _e('By using Our Assets, you agree to indemnify, defend, and hold the Company harmless from any claims, losses, or damages arising out of or related to the misuse or unauthorized use of the Assets.', 'wppf'); ?></p>

            <h2 id="legal_compliance" class=" mb-4 text-base font-semibold"><?php printf(__('5. %1$s', 'wppf'), $args['strings']['legal']['legal_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['legal_compliance']; ?></p>

            <h2 id="compliance" class=" mb-4 text-base font-semibold"><?php printf(__('6. %1$s', 'wppf'), $args['strings']['legal']['policy_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['policy_compliance']; ?></p>

            <h2 id="serviceability" class=" mb-4 text-base font-semibold"><?php printf(__('7. %1$s', 'wppf'), $args['strings']['legal']['serviceability_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['serviceability']; ?></p>

            <h2 id="entire" class="mb-4 text-base font-semibold"><?php printf(__('8. %1$s', 'wppf'), $args['strings']['legal']['entire_agreement_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['entire_agreement']; ?></p>

            <h2 id="dispute" class="mb-4 text-base font-semibold"><?php printf(__('9. %1$s', 'wppf'), $args['strings']['legal']['dispute_resolution_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['dispute_resolution']; ?></p>

            <h2 id="law" class="mb-4 text-base font-semibold"><?php printf(__('10. %1$s', 'wppf'), $args['strings']['legal']['governing_law_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['governing_law']; ?></p>

            <h2 id="mod" class="mb-4 text-base font-semibold"><?php printf(__('11. %1$s', 'wppf'), $args['strings']['legal']['policy_modifications_label']); ?></h2>

            <?php echo $args['strings']['legal']['policy_modifications']; ?>

        </div>
    </div>
</section>