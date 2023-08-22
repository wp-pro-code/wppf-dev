<section class="wppf-legal-center wppf-<?php echo esc_attr($args['strings']['section_class']); ?>">
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
                <p class="mb-0"><?php printf(__('This policy serves as a legally binding document delineating the terms and conditions under which a user is granted the right to access our software. %1$s', 'wppf'), $args['strings']['legal']['strongly_encourge']); ?></p>
            </div>

            <div class="mb-5 grid gap-3 justify-center" style="grid-template-columns: auto auto">
                <div class="h-8 w-8 flex justify-center items-center">
                    <?php echo $args['svg_logo_policy']; ?>
                </div>
                <h1 class="mb-5 text-xl tracking-tight"><?php _e('END USER LICENSE AGREEMENT', 'wppf'); ?></h1>
            </div>

            <h2 id="lud" class="mb-4 text-sm font-semibold"><?php echo esc_html($args['strings']['legal']['last_updated_label']); ?></h2>

            <p>
                <?php _e('This policy was last updated on: 15 May 2023.', 'wppf'); ?>
            </p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo esc_html($args['strings']['legal']['parties_label']); ?></h2>

            <p>
                <?php printf(
                    __('This End-User License Agreement ("%1$sEULA%2$s" or "%1$sPolicy%2$s") %3$s', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>',
                    wp_kses_post($args['strings']['legal']['id_parties']),
                ); ?>
            </p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['purpose_label']; ?></h2>

            <p><?php printf(__('The purpose of this EULA is to establish the terms and conditions under which End-Users may access and utilize the software application, %3$s ("%1$sLicensed Application%2$s"), ensuring responsible and lawful use while safeguarding the rights and interests of both End-Users and the Company.', 'wppf'), '<span class="font-semibold">', '</span>', $args['strings']['name_tm']); ?></p>

            <!-- Included policies - 1 of 6. -->
            <!-- This is an h2 heading. -->
            <?php echo $args['strings']['legal']['included_policies_label']; ?>

            <!-- Included policies - 2 of 6. -->
            <p><?php echo $args['strings']['legal']['included_policies_2of6']; ?></p>

            <!-- Included policies - 3 of 6. -->
            <ul class="mb-4 ml-0 list-disc">
                <li><?php printf(
                        __('REFUND POLICY: %2$slocated at %1$s', 'wppf'),
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/refund-policy')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/refund-policy/')) . '</a>',
                        '<br>'
                    ); ?>
                </li>
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
                <li><?php _e('REFUND POLICY', 'wppf'); ?></li>
                <li><?php _e('DISCLAIMER POLICY', 'wppf'); ?></li>
                <li><?php _e('TERMS AND CONDITIONS POLICY', 'wppf'); ?></li>
                <li><?php _e('PRIVACY POLICY', 'wppf'); ?></li>
            </ul>

            <!-- Included policies - 6 of 6. -->
            <?php echo $args['strings']['legal']['included_policies_6of6']; ?>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['agreement_to_label']; ?></h2>

            <?php echo $args['strings']['legal']['agreement_to']; ?>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['disagreement_label']; ?></h2>

            <p><?php echo $args['strings']['legal']['disagreement']; ?></p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['res_conflicts_label']; ?></h2>

            <?php echo $args['strings']['legal']['res_conflicts']; ?>

            <h2 class="mb-4 text-sm font-semibold"><?php _e('GENERAL', 'wppf'); ?></h2>

            <p><?php printf(__('The Licensed Application is licensed to End-User by Company, the ("%1$sLicensor%2$s").', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php printf(__('By downloading the Licensed Application and any update thereto (as permitted by this EULA), End-User indicates that End-User agrees to be bound by all of the terms and conditions of this EULA, and the End-User accepts this EULA. referred to in this EULA as ("%1$sServices%2$s")', 'wppf'), '<span class="font-semibold">', '</span>', $args['strings']['name_tm']); ?></p>

            <p><?php _e('The parties of this EULA acknowledge that the Services are not a Party to this EULA and are not bound by any provisions or obligations with regard to the Licensed Application, such as warranty, liability, maintenance and support thereof. Company, not the Services, is solely responsible for the Licensed Application and the content thereof.', 'wppf'); ?></p>

            <p><?php printf(__('This License Agreement may not provide for usage rules for the Licensed Application that are in conflict with the latest ("Usage Rules"). Company acknowledges that it had the opportunity to review the Usage Rules and this License Agreement is not conflicting with them.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php _e('The Services are intended for users who are at least 18 (eighteen) years old. Persons under the age of 18 are not permitted to use or register for the Services.', 'wppf'); ?></p>

            <p><?php _e('The Licensed Application when purchased or downloaded through the Services, is licensed to End-User for use only under the terms of this EULA. The Licensor reserves all rights not expressly granted to End-User.', 'wppf'); ?></p>

            <h2 class="mb-4 text-base font-semibold"><?php _e('TABLE OF CONTENTS', 'wppf'); ?></h2>

            <ol class="mb-6 list-decimal">
                <li><?php printf(__('%1$sTHE APPLICATION%2$s', 'wppf'), '<a href="' . esc_html('#application') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sSCOPE OF LICENSE%2$s', 'wppf'), '<a href="' . esc_html('#scope') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sTECHNICAL REQUIREMENTS%2$s', 'wppf'), '<a href="' . esc_html('#requirements') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sNO MAINTENANCE AND SUPPORT%2$s', 'wppf'), '<a href="' . esc_html('#nosupport') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sUSE OF DATA%2$s', 'wppf'), '<a href="' . esc_html('#datause') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sUSER-GENERATED CONTRIBUTIONS%2$s', 'wppf'), '<a href="' . esc_html('#ugc') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCONTRIBUTION LICENSE%2$s', 'wppf'), '<a href="' . esc_html('#contribution') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sLIABILITY%2$s', 'wppf'), '<a href="' . esc_html('#liability') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sWARRANTY%2$s', 'wppf'), '<a href="' . esc_html('#warranty') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sPRODUCT CLAIMS%2$s', 'wppf'), '<a href="' . esc_html('#productclaims') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCONTACT INFORMATION%2$s', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sTERMINATION%2$s', 'wppf'), '<a href="' . esc_html('#termination') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sTHIRD-PARTY TERMS OF AGREEMENTS AND BENEFICIARY%2$s', 'wppf'), '<a href="' . esc_html('#thirdparty') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sINTELLECTUAL PROPERTY RIGHTS%2$s', 'wppf'), '<a href="' . esc_html('#ipr') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#legal_compliance') . '">', $args['strings']['legal']['legal_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#compliance') . '">', $args['strings']['legal']['policy_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#serviceability') . '">', $args['strings']['legal']['serviceability_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#entire') . '">', $args['strings']['legal']['entire_agreement_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#dispute') . '">', $args['strings']['legal']['dispute_resolution_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#law') . '">', $args['strings']['legal']['governing_law_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#mod') . '">', $args['strings']['legal']['policy_modifications_label'], '</a>'); ?></li>
            </ol>

            <h2 id="application" class="mb-4 text-base font-semibold"><?php _e('1. THE APPLICATION', 'wppf'); ?></h2>

            <p><?php printf(__('The Licensed Application is a set of pre-packaged sections of software code that function as a framework to rapidly develop %1$sWordPress plugins%2$s.', 'wppf'), '<a href="' . esc_url('https://developer.wordpress.org/plugins/') . '" target="_blank">', '</a>'); ?></p>

            <p><?php _e('The Licensed Application is not tailored to comply with industry-specific regulations (Health Insurance Portability and Accountability Act (HIPAA), Federal Information Security Management Act (FISMA), etc.), so if Your interactions would be subjected to such laws, You may not use the Services. You may not use the Services in a way that would violate the Gramm-Leach-Bliley Act (GLBA).', 'wppf'); ?></p>

            <h2 id="scope" class="mb-4 text-base font-semibold"><?php _e('2. SCOPE OF LICENSE', 'wppf'); ?></h2>

            <p><?php _e('This license governs updates of the Licensed Application provided by Licensor that replace, repair, and/or supplement the first Licensed Application, unless a separate license is provided for such update. In such a case, the terms of the new license will govern.', 'wppf'); ?></p>

            <p><?php _e('You may not share or make the Licensed Application available to third parties (unless to the degree allowed by the Usage Rules, and with Company prior written consent), sell, rent, lend, lease or otherwise redistribute the Licensed Application.', 'wppf'); ?></p>

            <p><?php _e('Violations of the obligations mentioned above, as well as the attempt of such infringement, may be subject to prosecution and damages.', 'wppf'); ?></p>

            <p><?php _e('Nothing in this license should be interpreted to restrict third-party terms. When using the Licensed Application, You must ensure that You comply with applicable third-party terms and conditions.', 'wppf'); ?></p>

            <h2 id="requirements" class="mb-4 text-base font-semibold"><?php _e('3. TECHNICAL REQUIREMENTS', 'wppf'); ?></h2>

            <p><?php _e('You acknowledge that it is Your responsibility to confirm and determine that the End-User device on which You intend to use the Licensed Application satisfies the technical specifications and minimum requirements mentioned below:', 'wppf'); ?></p>

            <p class="mb-0"><?php printf(__('The current Licensed Application version is %1$s and has the following minimum requirements:', 'wppf'), $args['admin']['lic_app_ver']); ?></p>

            <div class="mt-2 mb-4 ml-0 pl-6 grid grid-cols-[auto,1fr] gap-4 gap-y-0">
                <div class="text-right"><?php _e('php:', 'wppf'); ?></div>

                <div><?php printf(__('version %1$s', 'wppf'), $args['min_req']['php']); ?></div>

                <div class="text-right"><?php _e('WordPress:', 'wppf'); ?></div>

                <div><?php printf(__('version %1$s', 'wppf'), $args['min_req']['wp']); ?></div>

                <div class="text-right"><?php _e('MySQL:', 'wppf'); ?></div>

                <div><?php printf(__('version %1$s', 'wppf'), $args['min_req']['mysql']); ?></div>

                <div class="text-right"><?php _e('MariaDB:', 'wppf'); ?></div>

                <div><?php printf(__('version %1$s', 'wppf'), $args['min_req']['maria_db']); ?></div>
            </div>

            <p><?php _e('Licensor reserves the right to modify the technical specifications and minimum requirements as it sees appropriate at any time.', 'wppf'); ?></p>

            <h2 id="nosupport" class="mb-4 text-base font-semibold"><?php _e('4. NO MAINTENANCE OR SUPPORT', 'wppf'); ?></h2>

            <p><?php _e('Company, is not obligated, expressed, or implied, to provide any maintenance, technical, or other support for the Licensed Application unless specified. However, from time to time, Company, may choose to offer such support or assistance, at its discretion, for the Licensed Application.', 'wppf'); ?></p>

            <p><?php _e('Company and the End-User acknowledge that the Services have no obligation whatsoever to furnish any maintenance and support services with respect to the Licensed Application. However, from time to time, Company may choose to offer such support or assistance, at its discretion, for the Licensed Application.', 'wppf'); ?></p>

            <h2 id="datause" class="mb-4 text-base font-semibold"><?php _e('5. USE OF DATA', 'wppf'); ?></h2>

            <p><?php
                echo _e("You acknowledge that Licensor will be able to access and adjust Your downloaded Licensed Application content and Your personal information, and that Licensor's use of such material and information is subject to Your legal agreements with Licensor and Licensor's privacy policy at", 'wppf');
                echo ' <a href="' . esc_url(path_join(get_site_url(), '/legal-center/privacy-policy/')) . '">' . esc_url(get_site_url() . '/legal-center/privacy-policy/') . '</a>';
                ?></p>

            <p><?php _e('You acknowledge that the Licensor may periodically collect and use technical data and related information about Your device, system, and Licensed Application, and peripherals to offer product support, facilitate software updates, and provide other services to You (if any) related to the Licensed Application.', 'wppf'); ?></p>

            <h2 id="ugc" class="mb-4 text-base font-semibold"><?php _e('6. USER-GENERATED CONTRIBUTIONS', 'wppf'); ?></h2>

            <p><?php printf(__('The Licensed Application may invite You to chat, contribute to, or participate in blogs, message boards, online forums, and other functionality, and may provide You with the opportunity to create, submit, post, display, transmit, perform, publish, distribute, or broadcast content and materials to us or in the Licensed Application, including but not limited to text, writings, video, audio, photographs, graphics, comments, suggestions, or personal information or other material (collectively, "%1$sContributions%2$s"). Contributions may be viewable by other users of the Licensed Application and through third-party websites or applications. As such, any Contributions You transmit may be treated as non-confidential and non-proprietary. When You create or make available any Contributions, You thereby represent and warrant that:', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <ol class="mb-4 ml-0 list-disc">
                <li><?php _e('The creation, distribution, transmission, public display, or performance, and the accessing, downloading, or copying of Your Contributions do not and will not infringe the proprietary rights, including but not limited to the copyright, patent, trademark, trade secret, or moral rights of any third party.', 'wppf'); ?></li>
                <li><?php _e('You are the creator and owner of or have the necessary licenses, rights, consents, releases, and permissions to use and to authorize us, the Licensed Application, and other users of the Licensed Application to use Your Contributions in any manner contemplated by the Licensed Application and this EULA.', 'wppf'); ?></li>
                <li><?php _e('You have the written consent, release, and/or permission of each and every identifiable individual person in Your Contributions to use the name or likeness or each and every such identifiable individual person to enable inclusion and use of Your Contributions in any manner contemplated by the Licensed Application and this EULA.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions are not false, inaccurate, or misleading.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions are not unsolicited or unauthorized advertising, promotional materials, pyramid schemes, chain letters, spam, mass mailings, or other forms of solicitation.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions are not obscene, lewd, lascivious, filthy, violent, harassing, libelous, slanderous, or otherwise objectionable (as determined by us).', 'wppf'); ?></li>
                <li><?php _e('Your Contributions do not ridicule, mock, disparage, intimidate, or abuse anyone.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions are not used to harass or threaten (in the legal sense of those terms) any other person and to promote violence against a specific person or class of people.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions do not violate any applicable law, regulation, or rule.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions do not violate the privacy or publicity rights of any third party.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions do not violate any applicable law concerning child pornography, or otherwise intended to protect the health or well-being of minors.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions do not include any offensive comments that are connected to race, national origin, gender, sexual preference, or physical handicap.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions do not otherwise violate, or link to material that violates, any provision of this EULA, or any applicable law or regulation.', 'wppf'); ?></li>
            </ol>

            <p><?php _e('Any use of the Licensed Application in violation of the foregoing violates this EULA and may result in, among other things, termination or suspension of Your rights to use the Licensed Application.', 'wppf'); ?></p>

            <h2 id="contribution" class="mb-4 text-base font-semibold"><?php _e('7. CONTRIBUTION LICENSE', 'wppf'); ?></h2>

            <p><?php _e('By posting Your Contributions to any part of the Licensed Application or making Contributions accessible to the Licensed Application by linking Your account from the Licensed Application to any of Your social networking accounts, You automatically grant, and You represent and warrant that You have the right to grant, to us an unrestricted, unlimited, irrevocable, perpetual, non-exclusive, transferable, royalty-free, fully-paid, worldwide right, and license to host, use copy, reproduce, disclose, sell, resell, publish, broad cast, retitle, archive, store, cache, publicly display, reformat, translate, transmit, excerpt (in whole or in part), and distribute such Contributions (including, without limitation, Your image and voice) for any purpose, commercial advertising, or otherwise, and to prepare derivative works of, or incorporate in other works, such as Contributions, and grant and authorize sublicenses of the foregoing. The use and distribution may occur in any media formats and through any media channels.', 'wppf'); ?></p>

            <p><?php _e('This license will apply to any form, media, or technology now known or hereafter developed, and includes Our use of Your name, company name, and franchise name, as applicable, and any of the trademarks, service marks, trade names, logos, and personal and commercial images You provide. You waive all moral rights in Your Contributions, and You warrant that moral rights have not otherwise been asserted in Your Contributions.', 'wppf'); ?></p>

            <p><?php _e('We do not assert any ownership over Your Contributions. You retain full ownership of all of Your Contributions and any intellectual property rights or other proprietary rights associated with Your Contributions. We are not liable for any statements or representations in Your Contributions provided by You in any area in the Licensed Application. You are solely responsible for Your Contributions to the Licensed Application and You expressly agree to exonerate us from any and all responsibility and to refrain from any legal action against us regarding Your Contributions.', 'wppf'); ?></p>

            <p><?php _e('We have the right, in Our sole and absolute discretion, (1) to edit, redact, or otherwise change any Contributions; (2) to recategorize any Contributions to place them in more appropriate locations in the Licensed Application; and (3) to prescreen or delete any Contributions at any time and for any reason, without notice. We have no obligation to monitor Your Contributions.', 'wppf'); ?></p>

            <h2 id="liability" class="mb-4 text-base font-semibold"><?php _e('8. LIABILITY', 'wppf'); ?></h2>

            <p><?php printf(__('Licensor takes no accountability or responsibility for any damages caused due to a breach of duties according to the section titled "%1$sSCOPE OF LICENSE%2$s". To avoid data loss, You are required to make use of backup functions of the Licensed Application to the extent allowed by applicable third-party terms and conditions of use. You are aware that in case of alterations or manipulations of the Licensed Application, You will not have access to the Licensed Application.', 'wppf'), '<a href="' . esc_url('#scope') . '">', '</a>'); ?></p>

            <h2 id="warranty" class="mb-4 text-base font-semibold"><?php _e('9. WARRANTY', 'wppf'); ?></h2>

            <p><?php printf(__('Licensor warrants that the Licensed Application is free of spyware, trojan horses, viruses, or any other malware at the time of Your download, providing that such download was conducted on Our Website. Licensor warrants that the Licensed Application works as described in the user documentation located at %1$s.', 'wppf'), '<a href="' . esc_url(path_join(get_site_url(), 'documentation/')) . '">' . esc_url(path_join(get_site_url(), 'documentation/')) . ' </a>'); ?></p>

            <p><?php _e('No warranty is provided for the Licensed Application that is not executable on the device, that has been unauthorizedly modified, handled inappropriately or culpably, combined or installed with inappropriate hardware or software, used with inappropriate accessories, regardless of whether by Yourself or by third parties, or if there are any other reasons outside the Company sphere of influence that affect the executability of the Licensed Application.', 'wppf'); ?></p>

            <p><?php printf(
                    __('You are required to inspect the Licensed Application immediately after downloading or purchasing the Licensed Application and notify Company about issues discovered without delay by using the information in the %2$sCONTACT INFORMATION%3$s section. The defect report will be taken into consideration and further investigated if it has been submitted within a period specified in the %5$sREFUND POLICY%6$s located at %4$s.', 'wppf'),
                    $args['admin']['legal']['name'],
                    '<a href="#contact">',
                    '</a>',
                    '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/refund-policy/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/refund-policy/')) . ' </a>',
                    '<span class="font-semibold">',
                    '</span>'
                ); ?></p>

            <p><?php printf(__('If We confirm that the Licensed Application is defective, Company reserves a choice to remedy the situation either by means of solving the defect or substitute delivery or as outlined in the %1$sREFUND POLICY%2$s.', 'wppf'), '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/refund-policy/')) . '">', '</a>'); ?></p>

            <p><?php _e('No warranty is provided for any software version, paid or free, of the Licensed Application.', 'wppf'); ?></p>

            <h2 id="productclaims" class="mb-4 text-base font-semibold"><?php _e('10. PRODUCT CLAIMS', 'wppf'); ?></h2>

            <p><?php _e('Company and the End-User acknowledge that Company, and not the Services, is responsible for addressing any claims of the End-User or any third party relating to the Licensed Application or the End-User’s possession and/or use of that Licensed Application, including, but not limited to:', 'wppf'); ?></p>

            <ol class="mb-4 ml-0 list-lower-roman">
                <li><?php _e('product liability claims;', 'wppf'); ?></li>
                <li><?php _e('any claim that the Licensed Application fails to conform to any applicable legal or regulatory requirement; and', 'wppf'); ?></li>
                <li><?php _e('claims arising under consumer protection, privacy, or similar legislation.', 'wppf'); ?></li>
            </ol>

            <h2 id="contact" class="mb-4 text-base font-semibold"><?php _e('11. CONTACT INFORMATION', 'wppf'); ?></h2>

            <div><?php printf(__('Contact us by using this link: %1$s.', 'wppf'), $args['form']); ?></div>

            <h2 id="termination" class="mb-4 text-base font-semibold"><?php _e('12. TERMINATION', 'wppf'); ?></h2>

            <p><?php _e('The license is valid until terminated by Company or by You. Your rights under this license will terminate automatically and without notice from Company if You fail to adhere to any term(s) of this license. Upon License termination, You shall stop all use of the Licensed Application, and destroy all copies, full or partial, of the Licensed Application.', 'wppf'); ?></p>

            <h2 id="thirdparty" class="mb-4 text-base font-semibold"><?php _e('13. THIRD-PARTY TERMS OF AGREEMENTS AND BENEFICIARY', 'wppf'); ?></h2>

            <p><?php _e('Company represents and warrants that Company will comply with applicable third-party terms of agreement when using Licensed Application.', 'wppf'); ?></p>

            <p><?php printf(__('In Accordance with section titled "%1$sWARRANTY%2$s", subsidiaries shall be third-party beneficiaries of this EULA and upon Your acceptance of the terms and conditions of this EULA, will have the right (and will be deemed to have accepted the right) to enforce this EULA against You as a third-party beneficiary thereof.', 'wppf'), '<a href="' . esc_html('#warranty') . '">', '</a>'); ?></p>

            <h2 id="ipr" class="mb-4 text-base font-semibold"><?php _e('14. INTELLECTUAL PROPERTY RIGHTS', 'wppf'); ?></h2>

            <p><?php _e('Company and the End-User acknowledge that, in the event of any third-party claim that the Licensed Application or the End-User possession and use of that Licensed Application infringes on the third party intellectual property rights, Company, and not the Services, will be solely responsible for the investigation, defense, settlement, and discharge or any such intellectual property infringement claims.', 'wppf'); ?></p>

            <h2 id="legal_compliance" class=" mb-4 text-base font-semibold"><?php printf(__('15. %1$s', 'wppf'), $args['strings']['legal']['legal_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['legal_compliance']; ?></p>

            <h2 id="compliance" class=" mb-4 text-base font-semibold"><?php printf(__('16. %1$s', 'wppf'), $args['strings']['legal']['policy_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['policy_compliance']; ?></p>

            <h2 id="serviceability" class=" mb-4 text-base font-semibold"><?php printf(__('17. %1$s', 'wppf'), $args['strings']['legal']['serviceability_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['serviceability']; ?></p>

            <h2 id="entire" class="mb-4 text-base font-semibold"><?php printf(__('18. %1$s', 'wppf'), $args['strings']['legal']['entire_agreement_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['entire_agreement']; ?></p>

            <h2 id="dispute" class="mb-4 text-base font-semibold"><?php printf(__('21. %1$s', 'wppf'), $args['strings']['legal']['dispute_resolution_label']); ?></h2>

            <?php echo $args['strings']['legal']['dispute_resolution']; ?>

            <h2 id="law" class="mb-4 text-base font-semibold"><?php printf(__('19. %1$s', 'wppf'), $args['strings']['legal']['governing_law_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['governing_law']; ?></p>

            <h2 id="mod" class="mb-4 text-base font-semibold"><?php printf(__('20. %1$s', 'wppf'), $args['strings']['legal']['policy_modifications_label']); ?></h2>

            <?php echo $args['strings']['legal']['policy_modifications']; ?>

        </div>
    </div>
</section>