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
                <p class="mb-0"><?php printf(__('This policy serves as a legally binding document delineating how software refunds are handled. %1$s', 'wppf'), $args['strings']['legal']['strongly_encourge']); ?></p>
            </div>

            <div class="mb-5 grid gap-3 justify-center" style="grid-template-columns: auto auto">
                <div class="h-8 w-8 flex justify-center items-center">
                    <?php echo $args['svg_logo_policy']; ?>
                </div>
                <h1 class="mb-5 text-xl tracking-tight"><?php _e('REFUND POLICY', 'wppf'); ?></h1>
            </div>

            <p id="lud" class="mb-4 text-sm font-semibold"><?php printf(__('%1$s: %2$s15 May 2023%3$s', 'wppf'), $args['strings']['legal']['last_updated_label'], '<span class="pl-3 font-normal">', '</span>'); ?></p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo esc_html($args['strings']['legal']['parties_label']); ?></h2>

            <p>
                <?php printf(
                    __('This Refund Policy ("%1$sPolicy%2$s") %3$s', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>',
                    wp_kses_post($args['strings']['legal']['id_parties']),
                ); ?>
            </p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['purpose_label']; ?></h2>

            <p><?php printf(__('The purpose of this Refund Policy is to describe the terms and conditions under which refunds are issued for a paid product or paid feature.', 'wppf'), '<span class="font-semibold">', '</span>', $args['strings']['name_tm']); ?></p>

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
                        __('END USER LICENSE AGREEMENT: %2$slocated at %1$s', 'wppf'),
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/end-user-license-agreement/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/end-user-license-agreement/')) . '</a>',
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
                <li><?php _e('This Policy', 'wppf'); ?></span< /li>
                <li><?php _e('DISCLAIMER POLICY', 'wppf'); ?></span< /li>
                <li><?php _e('END USER LICENSE AGREEMENT', 'wppf'); ?></span< /li>
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
                <li><?php printf(__('%1$sREFUND ELIGIBILITY%2$s', 'wppf'), '<a href="' . esc_html('#eligibility') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sNON-REFUNDABLE SITUATIONS%2$s', 'wppf'), '<a href="' . esc_html('#non') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sREFUND REQUEST PROCEDURE%2$s', 'wppf'), '<a href="' . esc_html('#request') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sREFUND PROCESS%2$s', 'wppf'), '<a href="' . esc_html('#process') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sREFUND REQUEST FORM%2$s', 'wppf'), '<a href="' . esc_html('#rrf') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#legal_compliance') . '">', $args['strings']['legal']['legal_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#compliance') . '">', $args['strings']['legal']['policy_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#serviceability') . '">', $args['strings']['legal']['serviceability_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#entire') . '">', $args['strings']['legal']['entire_agreement_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#dispute') . '">', $args['strings']['legal']['dispute_resolution_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#law') . '">', $args['strings']['legal']['governing_law_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#mod') . '">', $args['strings']['legal']['policy_modifications_label'], '</a>'); ?></li>
            </ol>

            <h2 id="eligibility" class="mb-4 text-base font-semibold"><?php _e('1. REFUND ELIGIBILITY', 'wppf'); ?></h2>

            <p><?php printf(__('A purchase is eligible for a refund when %1$sall of the following are meet%2$s:', 'wppf'), '<span class="font-semibold underline underline-offset-4">', '</span>'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('User purchased the Software directly from the Company.', 'wppf'); ?></li>

                <li><?php _e('The Company can verify that a purchase was made by User.', 'wppf'); ?></li>

                <li>
                    <div>
                        <?php printf(__('Refunds are not guaranteed and will only be considered in the case of a major defect ("%1$sMajor Defect%2$s") in the Software as defined below:', 'wppf'), '<span class="font-semibold">', '</span>'); ?>
                    </div>
                    <div class="mt-2">
                        <?php _e('Major Defects are limited to when the Software fails to operate at the minimum required version of PHP, WordPress, MySQL, or MariaDB, or when a documented feature fails to function as specified in the Software documentation.', 'wppf'); ?>
                    </div>
                </li>
                <li>
                    <?php printf(__('The User submits evidence of a Major Defect, and the Company finds the evidence satisfactory.', 'wppf'), '<span class="font-semibold underline underline-offset-4">', '</span>'); ?>
                </li>
                <li>
                    <?php _e('No more than 7 (seven) days have passed since the date of purchase.', 'wppf'); ?>
                </li>
            </ul>

            <h2 id="non" class="mb-4 text-base font-semibold"><?php _e('2. NON-REFUNDABLE SITUATIONS', 'wppf'); ?></h2>

            <p><?php _e('Refunds will not be granted for any reason other than a Major Defect. Non-refundable situations include and is not limited to:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Compatibility issues with non-supported server configurations or server software version, third-party server plugins or packages, WordPress plugins, or custom developed software code.', 'wppf'); ?></li>
                <li><?php _e('Customization or modification of the Software.', 'wppf'); ?></li>
                <li><?php _e('User error or misuse of the Software.', 'wppf'); ?></li>
                <li><?php _e('Changes in personal circumstances or business needs.', 'wppf'); ?></li>
                <li><?php _e('Free Software and/or free Software features.', 'wppf'); ?></li>
                <li><?php _e('Issues with beta features.', 'wppf'); ?></li>
            </ul>

            <h2 id="request" class="mb-4 text-base font-semibold"><?php _e('3. REFUND REQUEST PROCEDURE', 'wppf'); ?></h2>

            <p><?php _e('To request a refund based on a Major Defect, the User must provide detailed information and evidence of the defect, including but not limited to screenshots of the condition, error messages, logs, and system configurations.', 'wppf'); ?></p>

            <p><?php printf(__('Refund requests must be submitted in writing to the Company via the %1$srefund request form%2$s within %3$s7 (seven) days from the date of purchase%4$s.', 'wppf'), '<a href="' . esc_url('#rrf') . '">', '</a>', '<span class="font-semibold underline underline-offset-4">', '</span>'); ?></p>

            <p><?php _e('The Company will review the refund request and determine eligibility based on the criteria and evidence provided by the User and as outlined in this Policy.', 'wppf'); ?></p>

            <h2 id="process" class="mb-4 text-base font-semibold"><?php _e('4. REFUND PROCESS', 'wppf'); ?></h2>

            <p><?php printf(__('If the refund request is approved, the Company will process a refund %1$swithin 7 (seven) to 10 (ten) days%2$s after the approval using the original payment method used for the purchase. Company has not control over the time it takes for a payment initiey to process our refund request.', 'wppf'), '<span class="font-semibold underline underline-offset-4">', '</span>'); ?></p>

            <p><?php _e('The total refund amount will be limited to the original purchase price paid by the User.', 'wppf'); ?></p>

            <h2 id="rrf" class="mb-4 text-base font-semibold"><?php _e('5. REFUND REQUEST FORM', 'wppf'); ?>
            </h2>

            <p><?php printf(__('To start a refund request approval use this %1$s.', 'wppf'), $args['form']); ?></p>

            <h2 id="legal_compliance" class=" mb-4 text-base font-semibold"><?php printf(__('6. %1$s', 'wppf'), $args['strings']['legal']['legal_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['legal_compliance']; ?></p>

            <h2 id="compliance" class=" mb-4 text-base font-semibold"><?php printf(__('7. %1$s', 'wppf'), $args['strings']['legal']['policy_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['policy_compliance']; ?></p>

            <h2 id="serviceability" class=" mb-4 text-base font-semibold"><?php printf(__('8. %1$s', 'wppf'), $args['strings']['legal']['serviceability_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['serviceability']; ?></p>

            <h2 id="entire" class="mb-4 text-base font-semibold"><?php printf(__('9. %1$s', 'wppf'), $args['strings']['legal']['entire_agreement_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['entire_agreement']; ?></p>

            <h2 id="dispute" class="mb-4 text-base font-semibold"><?php printf(__('10. %1$s', 'wppf'), $args['strings']['legal']['dispute_resolution_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['dispute_resolution']; ?></p>

            <h2 id="law" class="mb-4 text-base font-semibold"><?php printf(__('11. %1$s', 'wppf'), $args['strings']['legal']['governing_law_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['governing_law']; ?></p>

            <h2 id="mod" class="mb-4 text-base font-semibold"><?php printf(__('12. %1$s', 'wppf'), $args['strings']['legal']['policy_modifications_label']); ?></h2>

            <?php echo $args['strings']['legal']['policy_modifications']; ?>

        </div>
    </div>
</section>