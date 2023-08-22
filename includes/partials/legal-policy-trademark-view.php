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
                <p class="mb-0"><?php printf(__('This policy serves as a legally binding document delineating the terms governing the guidelines and rules for the proper use and protection of our valuable trademarks, representing our brand and reputation. %1$s', 'wppf'), $args['strings']['legal']['strongly_encourge']); ?></p>
            </div>

            <div class="mb-5 grid gap-3 justify-center" style="grid-template-columns: auto auto">
                <div class="h-8 w-8 flex justify-center items-center">
                    <?php echo $args['svg_logo_policy']; ?>
                </div>
                <h1 class="mb-5 text-xl tracking-tight"><?php _e('TRADEMARK POLICY', 'wppf'); ?></h1>
            </div>

            <p id="lud" class="mb-4 text-sm font-semibold"><?php printf(__('%1$s: %2$s15 May 2023%3$s', 'wppf'), $args['strings']['legal']['last_updated_label'], '<span class="pl-3 font-normal">', '</span>'); ?></p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo esc_html($args['strings']['legal']['parties_label']); ?></h2>

            <p>
                <?php printf(
                    __('This Trademark Policy ("%1$sPolicy%2$s") %3$s', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>',
                    wp_kses_post($args['strings']['legal']['id_parties']),
                ); ?>
            </p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['purpose_label']; ?></h2>

            <p><?php printf(__('The purpose of this Trademark Policy is to govern the use of images, photographs, graphics, and other visual content ("%1$sImages%2$s") uploaded, shared, or displayed by users on Our Website.', 'wppf'), '<span class="font-semibold">', '</span>', $args['strings']['name_tm']); ?></p>

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
                <li><?php printf(__('%1$sSCOPE%2$s', 'wppf'), '<a href="' . esc_html('#scope') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sTRADEMARK OWNERSHIP%2$s', 'wppf'), '<a href="' . esc_html('#ownership') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sPROPER USE OF TRADEMARKS%2$s', 'wppf'), '<a href="' . esc_html('#proper') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sLICENSING AND PERMISSION%2$s', 'wppf'), '<a href="' . esc_html('#license') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCOMPANY TRADEMARKS%2$s', 'wppf'), '<a href="' . esc_html('#trademarks') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#compliance') . '">', $args['strings']['legal']['policy_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#serviceability') . '">', $args['strings']['legal']['serviceability_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#entire') . '">', $args['strings']['legal']['entire_agreement_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#law') . '">', $args['strings']['legal']['governing_law_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#mod') . '">', $args['strings']['legal']['policy_modifications_label'], '</a>'); ?></li>
            </ol>

            <h2 id="scope" class="mb-4 text-base font-semibold"><?php _e('1. SCOPE', 'wppf'); ?></h2>

            <p><?php _e('This Policy applies to all employees, contractors, vendors, partners, and any third parties granted permission to use Company trademarks in any form, including but not limited to print materials, digital media, advertisements, and marketing collateral.', 'wppf'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('2. TRADEMARK OWNERSHIP', 'wppf'); ?></h2>

            <p><?php _e('All trademarks, service marks, logos, and trade names related to Company are proprietary to the Company and protected by applicable laws. Unauthorized use of Our trademarks may lead to legal action and the enforcement of Our rights.', 'wppf'); ?></p>

            <h2 id="proper" class="mb-4 text-base font-semibold"><?php _e('3. PROPER USE OF TRADEMARK', 'wppf'); ?></h2>

            <ol class="mb-4 ml-0 list-lower-alpha">
                <li><?php printf(__('%1$sTrademark Symbol%2$s: All Company trademarks should be accompanied by the appropriate trademark symbol (&trade;) when first mentioned in any text or communication. Registered trademarks should be marked with the registered trademark symbol (&reg;).', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sDistinctive Presentation%2$s Our trademarks must be presented in a clear, legible manner and should stand out from surrounding text and graphics. Do not alter, modify, or abbreviate Our trademarks in a way that may cause confusion or dilute their distinctiveness.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sNo Generic Use%2$s Company trademarks should never be used generically or descriptively to refer to any products or services that are not genuinely associated with the Company. Trademarks should always be used as adjectives, not nouns.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sAttribution%2$s Whenever possible, We request proper attribution of Our trademarks with a statement indicating that the trademark is owned by Company.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sUnauthorized Use%2$s Do not use Our trademarks in a way that may mislead or deceive consumers or imply endorsement, sponsorship, or affiliation with Company unless explicitly authorized.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sTrademark Conflicts%2$s Avoid using trademarks that may conflict with those owned by other companies, as it may lead to potential legal issues. Conduct a thorough search to ensure the proposed trademark does not infringe on existing marks.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>
            </ol>

            <h2 id="license" class="mb-4 text-base font-semibold"><?php _e('4. LICENSE AND PERMISSION', 'wppf'); ?></h2>

            <p><?php _e('Use of Company trademarks by third parties requires written permission from Company and adherence to the terms of this Policy and any formal licensing agreement imposed by Company. Unauthorized use of Our trademarks by external entities is strictly prohibited and subject to legal action.', 'wppf'); ?></p>

            <h2 id="trademarks" class="mb-4 text-base font-semibold"><?php _e('5. COMPANY TRADEMARKS', 'wppf'); ?></h2>

            <p><?php _e('The following is a list of trademarks owned and used by Company in connection with Our products and services. These trademarks are valuable assets and are protected by applicable trademark laws. Unauthorized use of these trademarks is strictly prohibited.', 'wppf'); ?></p>

            <p><?php _e('We take the protection of our trademarks seriously and will take appropriate legal action against any unauthorized use or infringement.', 'wppf'); ?></p>

            <p><?php _e('Please note that this list of trademarks is not exhaustive, and any unauthorized use of marks that are confusingly similar to our trademarks may also be subject to legal action.', 'wppf'); ?></p>

            <h3 id="personalinfo" class="mb-4 text-sm font-semibold italic"><?php _e('Trademarks', 'wppf'); ?></h3>

            <p><?php printf(__('%1$sWP Plugin Framework Logo%2$s: %3$s', 'wppf'), '<span class="font-semibold">', '</span>', $args['strings']['legal']['trademark_log_desc']); ?></p>

            <a href="<?php echo esc_url(path_join(get_site_url(), 'legal-center/logo-and-image-policy/')); ?>">
                <?php printf('<img class="mb-6 ml-6" src="https://ct.local/wp-content/uploads/2023/08/wp-plugin-framework-logo-sm-125px.png" width="125" height="125" alt="%1$s" aira-label="%1$s">', $args['strings']['legal']['trademark_log_desc']); ?>
            </a>

            <p><?php _e('The WP Plugin Framework logo has been in use for commerce since 2023-04-28.', 'wppf'); ?></p>

            <p><?php printf(__('%1$sWP Plugin Framework%2$s: "WP Plugin Framework" is a trademark associated with Our software product. It represents a versatile and robust framework for developing WordPress plugins. This framework provides developers with essential tools and resources to create innovative and efficient plugins for the WordPress platform. The "WP Plugin Framework" trademark underscores our commitment to delivering high-quality software solutions to enhance the WordPress experience for users and developers alike.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php printf(__('%1$sCompany Slogan%2$s: Our company slogan, "[Slogan Here]," is a unique and memorable phrase that encapsulates our mission and values of Our brand.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <h2 id="compliance" class=" mb-4 text-base font-semibold"><?php printf(__('6. %1$s', 'wppf'), $args['strings']['legal']['policy_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['policy_compliance']; ?></p>

            <h2 id="serviceability" class=" mb-4 text-base font-semibold"><?php printf(__('7. %1$s', 'wppf'), $args['strings']['legal']['serviceability_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['serviceability']; ?></p>

            <h2 id="entire" class="mb-4 text-base font-semibold"><?php printf(__('8. %1$s', 'wppf'), $args['strings']['legal']['entire_agreement_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['entire_agreement']; ?></p>

            <h2 id="law" class="mb-4 text-base font-semibold"><?php printf(__('9. %1$s', 'wppf'), $args['strings']['legal']['governing_law_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['governing_law']; ?></p>

            <h2 id="mod" class="mb-4 text-base font-semibold"><?php printf(__('10. %1$s', 'wppf'), $args['strings']['legal']['policy_modifications_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['policy_modifications']; ?></p>

        </div>
    </div>
</section>