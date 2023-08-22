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
                <p class="mb-0"><?php printf(__('This policy serves as a legally binding document delineating the rules, guidelines, and legal agreements that users must adhere to when accessing and using our website, services, and products. %1$s', 'wppf'), $args['strings']['legal']['strongly_encourge']); ?></p>
            </div>

            <div class="mb-5 grid gap-3 justify-center" style="grid-template-columns: auto auto">
                <div class="h-8 w-8 flex justify-center items-center">
                    <?php echo $args['svg_logo_policy']; ?>
                </div>
                <h1 class="mb-5 text-xl tracking-tight"><?php _e('TERMS AND CONDITIONS POLICY', 'wppf'); ?></h1>
            </div>

            <p id="lud" class="mb-4 text-sm font-semibold"><?php printf(__('%1$s: %2$s15 May 2023%3$s', 'wppf'), $args['strings']['legal']['last_updated_label'], '<span class="pl-3 font-normal">', '</span>'); ?></p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo esc_html($args['strings']['legal']['parties_label']); ?></h2>

            <p>
                <?php printf(
                    __('This Terms And Conditions Policy ("%1$sPolicy%2$s") %3$s', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>',
                    wp_kses_post($args['strings']['legal']['id_parties']),
                ); ?>
            </p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['purpose_label']; ?></h2>

            <p><?php printf(__('The purpose of this Terms And Conditions Policy is to establish clear guidelines, rules, and legal agreements to govern the use of Our Website, services and products, and protect the rights and interests of both users and the Company.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

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
                <li><?php printf(__('%1$sOUR SERVICES%2$s', 'wppf'), '<a href="' . esc_html('#services') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sINTELLECTUAL PROPERTY RIGHTS%2$s', 'wppf'), '<a href="' . esc_html('#ip') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sUSER REPRESENTATIONS%2$s', 'wppf'), '<a href="' . esc_html('#userreps') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sUSER REGISTRATION%2$s', 'wppf'), '<a href="' . esc_html('#userreg') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sPRODUCTS%2$s', 'wppf'), '<a href="' . esc_html('#products') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sPURCHASES AND PAYMENT%2$s', 'wppf'), '<a href="' . esc_html('#purchases') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sRETURN POLICY%2$s', 'wppf'), '<a href="' . esc_html('#returnyes') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sSOFTWARE%2$s', 'wppf'), '<a href="' . esc_html('#software') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sPROHIBITED ACTIVITIES%2$s', 'wppf'), '<a href="' . esc_html('#prohibited') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sUSER GENERATED CONTRIBUTIONS%2$s', 'wppf'), '<a href="' . esc_html('#ugc') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCONTRIBUTION LICENSE%2$s', 'wppf'), '<a href="' . esc_html('#license') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sGUIDELINES FOR REVIEWS%2$s', 'wppf'), '<a href="' . esc_html('#reviews') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sTHIRD-PARTY WEBSITES AND CONTENT%2$s', 'wppf'), '<a href="' . esc_html('#thirdparty') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sADVERTISERS%2$s', 'wppf'), '<a href="' . esc_html('#advertisers') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sSERVICES MANAGEMENT%2$s', 'wppf'), '<a href="' . esc_html('#sitemanage') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sPRIVACY POLICY%2$s', 'wppf'), '<a href="' . esc_html('#ppyes') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCOPYRIGHT INFRINGEMENTS%2$s', 'wppf'), '<a href="' . esc_html('#copyrightyes') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sTERM AND TERMINATION%2$s', 'wppf'), '<a href="' . esc_html('#terms') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sMODIFICATIONS AND INTERRUPTIONS%2$s', 'wppf'), '<a href="' . esc_html('#modifications') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$s GOVERNING LAW%2$s', 'wppf'), '<a href="' . esc_html('#law') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sDISPUTE RESOLUTION%2$s', 'wppf'), '<a href="' . esc_html('#disputes') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCORRECTIONS%2$s', 'wppf'), '<a href="' . esc_html('#corrections') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sDISCLAIMER%2$s', 'wppf'), '<a href="' . esc_html('#disclaimer') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sLIMITATIONS OF LIABILITY%2$s', 'wppf'), '<a href="' . esc_html('#liability') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sINDEMNIFICATION%2$s', 'wppf'), '<a href="' . esc_html('#indemnification') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sUSER DATA%2$s', 'wppf'), '<a href="' . esc_html('#userdata') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sELECTRONIC COMMUNICATIONS, TRANSACTIONS, AND SIGNATURES%2$s', 'wppf'), '<a href="' . esc_html('#electronic') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCALIFORNIA USERS AND RESIDENTS%2$s', 'wppf'), '<a href="' . esc_html('#california') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sMISCELLANEOUS%2$s', 'wppf'), '<a href="' . esc_html('#misc') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCONTACT US%2$s', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></li>
            </ol>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('1. OUR SERVICES', 'wppf'); ?></h2>

            <p><?php _e('The information provided when using the Services is not intended for distribution to or use by any person or entity in any jurisdiction or country where such distribution or use would be contrary to law or regulation or which would subject Us to any registration requirement within such jurisdiction or country. Accordingly, those persons who choose to access the Services from other locations do so on their own initiative and are solely responsible for compliance with local laws, if and to the extent local laws are applicable.', 'wppf'); ?></p>

            <p><?php _e('The Services are not tailored to comply with industry-specific regulations (Health Insurance Portability and Accountability Act (HIPAA), Federal Information Security Management Act (FISMA), etc.), so if your interactions would be subjected to such laws, you may not use the Services. You may not use the Services in a way that would violate the Gramm-Leach-Bliley Act (GLBA).', 'wppf'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('2. INTELLECTUAL PROPERTY RIGHTS', 'wppf'); ?></h2>

            <div class="mb-2 font-semibold italic"><?php _e('Our intellectual property', 'wppf'); ?></div>

            <p><?php printf(__('We are the owner or the licensee of all intellectual property rights in our Services, including all source code, databases, functionality, software, website designs, audio, video, text, photographs, and graphics in the Services (collectively, the "%1$sContent%2$s"), as well as the trademarks, service marks, and logos contained therein (the "%1$sMarks%2$s").', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php _e('Our Content and Marks are protected by copyright and trademark laws (and various other intellectual property rights and unfair competition laws) and treaties in the United States and around the world.', 'wppf'); ?></p>

            <p><?php _e('The Content and Marks are provided in or through the Services "AS IS" for your personal, non-commercial use or internal business purpose only.', 'wppf'); ?></p>

            <div class="mb-2 font-semibold italic"><?php _e('Your use of our Services', 'wppf'); ?></div>

            <p class="mb-2"><?php printf(__('Subject to your compliance with these Legal Terms, including the "%1$sPROHIBITED ACTIVITIES%2$s" section below, we grant you a non-exclusive, non-transferable, revocable license to:', 'wppf'), '<a href="' . esc_url('#prohibited') . '" target="_blank">', '</a>'); ?>

            <ul class="mb-2 ml-0 list-disc">
                <li><?php _e('access the Services; and', 'wppf'); ?></li>
                <li><?php _e('download or print a copy of any portion of the Content to which you have properly gained access.', 'wppf'); ?></li>
            </ul>

            <p><?php _e('solely for your personal, non-commercial use or internal business purpose.', 'wppf'); ?></p>

            <p><?php _e('Except as set out in this section or elsewhere in our Legal Terms, no part of the Services and no Content or Marks may be copied, reproduced, aggregated, republished, uploaded, posted, publicly displayed, encoded, translated, transmitted, distributed, sold, licensed, or otherwise exploited for any commercial purpose whatsoever, without our express prior written permission.', 'wppf'); ?></p>

            <p><?php _e('If you wish to make any use of the Services, Content, or Marks other than as set out in this section or elsewhere in our Legal Terms, please address your request to: inquiry@wppf.dev. If we ever grant you the permission to post, reproduce, or publicly display any part of our Services or Content, you must identify us as the owners or licensors of the Services, Content, or Marks and ensure that any copyright or proprietary notice appears or is visible on posting, reproducing, or displaying our Content.', 'wppf'); ?></p>

            <p><?php _e('We reserve all rights not expressly granted to you in and to the Services, Content, and Marks.', 'wppf'); ?></p>

            <p><?php _e('Any breach of these Intellectual Property Rights will constitute a material breach of our Legal Terms and your right to use our Services will terminate immediately.', 'wppf'); ?></p>

            <div class="mb-2 font-semibold"><?php _e('Your submissions and contributions', 'wppf'); ?></div>

            <p><?php printf(__('Please review this section and the "%1$sPROHIBITED ACTIVITIES%2$s" section carefully prior to using our Services to understand the (a) rights you give us and (b) obligations you have when you post or upload any content through the Services.', 'wppf'), '<a href="' . esc_url('#prohibited') . '" target="_blank">', '</a>'); ?>

            <p><?php printf(__('%1$sSubmissions%2$s: By directly sending us any question, comment, suggestion, idea, feedback, or other information about the Services ("Submissions"), you agree to assign to us all intellectual property rights in such Submission. You agree that we shall own this Submission and be entitled to its unrestricted use and dissemination for any lawful purpose, commercial or otherwise, without acknowledgment or compensation to you.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php printf(__('%1$sContributions%2$s: The Services may invite you to chat, contribute to, or participate in blogs, message boards, online forums, and other functionality during which you may create, submit, post, display, transmit, publish, distribute, or broadcast content and materials to us or through the Services, including but not limited to text, writings, video, audio, photographs, music, graphics, comments, reviews, rating suggestions, personal information, or other material ("Contributions"). Any Submission that is publicly posted shall also be treated as a Contribution.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php _e('You understand that Contributions may be viewable by other users of the Services and possibly through third-party websites.', 'wppf'); ?></p>

            <p><?php printf(__('%1$sWhen you post Contributions, you grant us a license (including use of your name, trademarks, and logos)%2$s: By posting any Contributions, you grant us an unrestricted, unlimited, irrevocable, perpetual, non-exclusive, transferable, royalty-free, fully-paid, worldwide right, and license to: use, copy, reproduce, distribute, sell, resell, publish, broadcast, retitle, store, publicly perform, publicly display, reformat, translate, excerpt (in whole or in part), and exploit your Contributions (including, without limitation, your image, name, and voice) for any purpose, commercial, advertising, or otherwise, to prepare derivative works of, or incorporate into other works, your Contributions, and to sublicense the licenses granted in this section. Our use and distribution may occur in any media formats and through any media channels.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php _e('This license includes our use of your name, company name, and franchise name, as applicable, and any of the trademarks, service marks, trade names, logos, and personal and commercial images you provide.', 'wppf'); ?></p>

            <p class="mb-2"><?php printf(__('%1$sYou are responsible for what you post or upload%2$s: By sending us Submissions and/or posting Contributions through any part of the Services or making Contributions accessible through the Services by linking your account through the Services to any of your social networking accounts, you:', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php printf(__('confirm that you have read and agree with our "%1$sPROHIBITED ACTIVITIES%2$s" and will not post, send, publish, upload, or transmit through the Services any Submission nor post any Contribution that is illegal, harassing, hateful, harmful, defamatory, obscene, bullying, abusive, discriminatory, threatening to any person or group, sexually explicit, false, inaccurate, deceitful, or misleading;', 'wppf'), '<a href="' . esc_url('#prohibited') . '" target="_blank">', '</a>'); ?></li>
                <li><?php _e('to the extent permissible by applicable law, waive any and all moral rights to any such Submission and/or Contribution;', 'wppf'); ?></li>
                <li><?php _e('warrant that any such Submission and/or Contributions are original to you or that you have the necessary rights and licenses to submit such Submissions and/or Contributions and that you have full authority to grant us the above-mentioned rights in relation to your Submissions and/or Contributions; and', 'wppf'); ?></li>
                <li><?php _e('warrant and represent that your Submissions and/or Contributions do not constitute confidential information.', 'wppf'); ?></li>
            </ul>

            <p><?php _e('You are solely responsible for your Submissions and/or Contributions and you expressly agree to reimburse us for any and all losses that we may suffer because of your breach of (a) this section, (b) any third party’s intellectual property rights, or (c) applicable law.', 'wppf'); ?></p>

            <p><?php printf(__('%1$sWe may remove or edit your Content%2$s: Although we have no obligation to monitor any Contributions, we shall have the right to remove or edit any Contributions at any time without notice if in our reasonable opinion we consider such Contributions harmful or in breach of these Legal Terms. If we remove or edit any such Contributions, we may also suspend or disable your account and report you to the authorities.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <div class="mb-2 font-semibold"><?php _e('Copyright infringement', 'wppf'); ?></div>

            <p><?php printf(__('We respect the intellectual property rights of others. If you believe that any material available on or through the Services infringes upon any copyright you own or control, please immediately refer to the "%1$sCOPYRIGHT INFRINGEMENTS%2$s" section below.', 'wppf'), '<a href="' . esc_url('#copyrightyes') . '" target="_blank">', '</a>'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('3. USER REPRESENTATIONS', 'wppf'); ?></h2>

            <p><?php _e('By using the Services, you represent and warrant that: (1) all registration information you submit will be true, accurate, current, and complete; (2) you will maintain the accuracy of such information and promptly update such registration information as necessary; (3) you have the legal capacity and you agree to comply with these Legal Terms; (4) you are not a minor in the jurisdiction in which you reside; (5) you will not access the Services through automated or non-human means, whether through a bot, script or otherwise; (6) you will not use the Services for any illegal or unauthorized purpose; and (7) your use of the Services will not violate any applicable law or regulation.', 'wppf'); ?></p>

            <p><?php _e('If you provide any information that is untrue, inaccurate, not current, or incomplete, we have the right to suspend or terminate your account and refuse any and all current or future use of the Services (or any portion thereof).', 'wppf'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('4. USER REGISTRATION', 'wppf'); ?></h2>

            <p><?php _e('You may be required to register to use the Services. You agree to keep your password confidential and will be responsible for all use of your account and password. We reserve the right to remove, reclaim, or change a username you select if we determine, in our sole discretion, that such username is inappropriate, obscene, or otherwise objectionable.', 'wppf'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('5. PRODUCTS', 'wppf'); ?></h2>

            <p><?php _e('All products are subject to availability. We reserve the right to discontinue any products at any time for any reason. Prices for all products are subject to change.', 'wppf'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('6. PURCHASES AND PAYMENT', 'wppf'); ?></h2>

            <p class="mb-2"><?php _e('We accept the following forms of payment:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Visa', 'wppf'); ?></li>
                <li><?php _e('Mastercard', 'wppf'); ?></li>
                <li><?php _e('American Express', 'wppf'); ?></li>
                <li><?php _e('Discover', 'wppf'); ?></li>
                <li><?php _e('PayPal', 'wppf'); ?></li>
            </ul>

            <p><?php _e('You agree to provide current, complete, and accurate purchase and account information for all purchases made via the Services. You further agree to promptly update account and payment information, including email address, payment method, and payment card expiration date, so that we can complete your transactions and contact you as needed. Sales tax will be added to the price of purchases as deemed required by us. We may change prices at any time. All payments shall be in US dollars.', 'wppf'); ?></p>

            <p><?php _e('You agree to pay all charges at the prices then in effect for your purchases and any applicable shipping fees, and you authorize us to charge your chosen payment provider for any such amounts upon placing your order. If your order is subject to recurring charges, then you consent to our charging your payment method on a recurring basis without requiring your prior approval for each recurring charge, until such time as you cancel the applicable order. We reserve the right to correct any errors or mistakes in pricing, even if we have already requested or received payment.', 'wppf'); ?></p>

            <p><?php _e('We reserve the right to refuse any order placed through the Services. We may, in our sole discretion, limit or cancel quantities purchased per person, per household, or per order. These restrictions may include orders placed by or under the same customer account, the same payment method, and/or orders that use the same billing or shipping address. We reserve the right to limit or prohibit orders that, in our sole judgment, appear to be placed by dealers, resellers, or distributors.', 'wppf'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('7. RETURN POLICY', 'wppf'); ?></h2>

            <p><?php printf(__('Please review our %1$sReturn Policy%2$s prior to making any purchases.', 'wppf'), '<a href="' . esc_url(path_join(get_site_url(), 'return-policy/')) . '" title="">', '</a>'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('8. SOFTWARE', 'wppf'); ?></h2>

            <p><?php printf(__('We may include software for use in connection with our Services. If such software is accompanied by an end user license agreement ("%1$sEULA%2$s"), the terms of the EULA will govern your use of the software. If such software is not accompanied by a EULA, then we grant to you a non-exclusive, revocable, personal, and non-transferable license to use such software solely in connection with our services and in accordance with these Legal Terms. Any software and any related documentation is provided "AS IS" without warranty of any kind, either express or implied, including, without limitation, the implied warranties of merchantability, fitness for a particular purpose, or non-infringement. You accept any and all risk arising out of use or performance of any software. You may not reproduce or redistribute any software except in accordance with the EULA or these Legal Terms.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('9. PROHIBITED ACTIVITIES', 'wppf'); ?></h2>

            <p><?php _e('You may not access or use the Services for any purpose other than that for which we make the Services available. The Services may not be used in connection with any commercial endeavors except those that are specifically endorsed or approved by us.', 'wppf'); ?></p>

            <p class="mb-2"><?php _e('As a user of the Services, you agree not to:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 pl-6 list-disc">
                <li><?php _e('Systematically retrieve data or other content from the Services to create or compile, directly or indirectly, a collection, compilation, database, or directory without written permission from us.', 'wppf'); ?></li>
                <li><?php _e('Trick, defraud, or mislead us and other users, especially in any attempt to learn sensitive account information such as user passwords.', 'wppf'); ?></li>
                <li><?php _e('Circumvent, disable, or otherwise interfere with security-related features of the Services, including features that prevent or restrict the use or copying of any Content or enforce limitations on the use of the Services and/or the Content contained therein.', 'wppf'); ?></li>
                <li><?php _e('Disparage, tarnish, or otherwise harm, in our opinion, us and/or the Services.', 'wppf'); ?></li>
                <li><?php _e('Use any information obtained from the Services in order to harass, abuse, or harm another person.', 'wppf'); ?></li>
                <li><?php _e('Make improper use of our support services or submit false reports of abuse or misconduct.', 'wppf'); ?></li>
                <li><?php _e('Use the Services in a manner inconsistent with any applicable laws or regulations.', 'wppf'); ?></li>
                <li><?php _e('Engage in unauthorized framing of or linking to the Services.', 'wppf'); ?></li>
                <li><?php _e('Upload or transmit (or attempt to upload or to transmit) viruses, Trojan horses, or other material, including excessive use of capital letters and spamming (continuous posting of repetitive text), that interferes with any party’s uninterrupted use and enjoyment of the Services or modifies, impairs, disrupts, alters, or interferes with the use, features, functions, operation, or maintenance of the Services.', 'wppf'); ?></li>
                <li><?php _e('Engage in any automated use of the system, such as using scripts to send comments or messages, or using any data mining, robots, or similar data gathering and extraction tools.', 'wppf'); ?></li>
                <li><?php _e('Delete the copyright or other proprietary rights notice from any Content.', 'wppf'); ?></li>
                <li><?php _e('Attempt to impersonate another user or person or use the username of another user.', 'wppf'); ?></li>
                <li><?php _e('Upload or transmit (or attempt to upload or to transmit) any material that acts as a passive or active information collection or transmission mechanism, including without limitation, clear graphics interchange formats ("gifs"), 1×1 pixels, web bugs, cookies, or other similar devices (sometimes referred to as "spyware" or "passive collection mechanisms" or "pcms").', 'wppf'); ?></li>
                <li><?php _e('Interfere with, disrupt, or create an undue burden on the Services or the networks or services connected to the Services.', 'wppf'); ?></li>
                <li><?php _e('Harass, annoy, intimidate, or threaten any of our employees or agents engaged in providing any portion of the Services to you.', 'wppf'); ?></li>
                <li><?php _e('Attempt to bypass any measures of the Services designed to prevent or restrict access to the Services, or any portion of the Services.', 'wppf'); ?></li>
                <li><?php _e("Copy or adapt the Services' software, including but not limited to Flash, PHP, HTML, JavaScript, or other code.", 'wppf'); ?></li>
                <li><?php _e('Except as permitted by applicable law, decipher, decompile, disassemble, or reverse engineer any of the software comprising or in any way making up a part of the Services.', 'wppf'); ?></li>
                <li><?php _e('Except as may be the result of standard search engine or Internet browser usage, use, launch, develop, or distribute any automated system, including without limitation, any spider, robot, cheat utility, scraper, or offline reader that accesses the Services, or use or launch any unauthorized script or other software.', 'wppf'); ?></li>
                <li><?php _e('Use a buying agent or purchasing agent to make purchases on the Services.', 'wppf'); ?></li>
                <li><?php _e('Make any unauthorized use of the Services, including collecting usernames and/or email addresses of users by electronic or other means for the purpose of sending unsolicited email, or creating user accounts by automated means or under false pretenses.', 'wppf'); ?></li>
                <li><?php _e('Use the Services as part of any effort to compete with us or otherwise use the Services and/or the Content for any revenue-generating endeavor or commercial enterprise.', 'wppf'); ?></li>
                <li><?php _e('Use the Services to advertise or offer to sell goods and services.', 'wppf'); ?></li>
                <li><?php _e('Sell or otherwise transfer your profile.', 'wppf'); ?></li>
            </ul>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('10. USER GENERATED CONTRIBUTIONS', 'wppf'); ?></h2>

            <p class="mb-2"><?php _e('The Services may invite you to chat, contribute to, or participate in blogs, message boards, online forums, and other functionality, and may provide you with the opportunity to create, submit, post, display, transmit, perform, publish, distribute, or broadcast content and materials to us or on the Services, including but not limited to text, writings, video, audio, photographs, graphics, comments, suggestions, or personal information or other material (collectively, "Contributions"). Contributions may be viewable by other users of the Services and through third-party websites. As such, any Contributions you transmit may be treated as non-confidential and non-proprietary. When you create or make available any Contributions, you thereby represent and warrant that:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('The creation, distribution, transmission, public display, or performance, and the accessing, downloading, or copying of your Contributions do not and will not infringe the proprietary rights, including but not limited to the copyright, patent, trademark, trade secret, or moral rights of any third party.', 'wppf'); ?></li>
                <li><?php _e('You are the creator and owner of or have the necessary licenses, rights, consents, releases, and permissions to use and to authorize us, the Services, and other users of the Services to use your Contributions in any manner contemplated by the Services and these Legal Terms.', 'wppf'); ?></li>
                <li><?php _e('You have the written consent, release, and/or permission of each and every identifiable individual person in your Contributions to use the name or likeness of each and every such identifiable individual person to enable inclusion and use of your Contributions in any manner contemplated by the Services and these Legal Terms.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions are not false, inaccurate, or misleading.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions are not unsolicited or unauthorized advertising, promotional materials, pyramid schemes, chain letters, spam, mass mailings, or other forms of solicitation.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions are not obscene, lewd, lascivious, filthy, violent, harassing, libelous, slanderous, or otherwise objectionable (as determined by us).', 'wppf'); ?></li>
                <li><?php _e('Your Contributions do not ridicule, mock, disparage, intimidate, or abuse anyone.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions are not used to harass or threaten (in the legal sense of those terms) any other person and to promote violence against a specific person or class of people.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions do not violate any applicable law, regulation, or rule.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions do not violate the privacy or publicity rights of any third party.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions do not violate any applicable law concerning child pornography, or otherwise intended to protect the health or well-being of minors.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions do not include any offensive comments that are connected to race, national origin, gender, sexual preference, or physical handicap.', 'wppf'); ?></li>
                <li><?php _e('Your Contributions do not otherwise violate, or link to material that violates, any provision of these Legal Terms, or any applicable law or regulation.', 'wppf'); ?></li>
            </ul>

            <p><?php _e('Any use of the Services in violation of the foregoing violates these Legal Terms and may result in, among other things, termination or suspension of your rights to use the Services.', 'wppf'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('11. CONTRIBUTION LICENSE', 'wppf'); ?></h2>

            <p><?php _e('By posting your Contributions to any part of the Services, you automatically grant, and you represent and warrant that you have the right to grant, to us an unrestricted, unlimited, irrevocable, perpetual, non-exclusive, transferable, royalty-free, fully-paid, worldwide right, and license to host, use, copy, reproduce, disclose, sell, resell, publish, broadcast, retitle, archive, store, cache, publicly perform, publicly display, reformat, translate, transmit, excerpt (in whole or in part), and distribute such Contributions (including, without limitation, your image and voice) for any purpose, commercial, advertising, or otherwise, and to prepare derivative works of, or incorporate into other works, such Contributions, and grant and authorize sublicenses of the foregoing. The use and distribution may occur in any media formats and through any media channels.', 'wppf'); ?></p>

            <p><?php _e('This license will apply to any form, media, or technology now known or hereafter developed, and includes our use of your name, company name, and franchise name, as applicable, and any of the trademarks, service marks, trade names, logos, and personal and commercial images you provide. You waive all moral rights in your Contributions, and you warrant that moral rights have not otherwise been asserted in your Contributions.', 'wppf'); ?></p>

            <p><?php _e('We do not assert any ownership over your Contributions. You retain full ownership of all of your Contributions and any intellectual property rights or other proprietary rights associated with your Contributions. We are not liable for any statements or representations in your Contributions provided by you in any area on the Services. You are solely responsible for your Contributions to the Services and you expressly agree to exonerate us from any and all responsibility and to refrain from any legal action against us regarding your Contributions.', 'wppf'); ?></p>

            <p><?php _e('We have the right, in our sole and absolute discretion, (1) to edit, redact, or otherwise change any Contributions; (2) to re-categorize any Contributions to place them in more appropriate locations on the Services; and (3) to pre-screen or delete any Contributions at any time and for any reason, without notice. We have no obligation to monitor your Contributions.', 'wppf'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('12. GUIDELINES FOR REVIEWS', 'wppf'); ?></h2>

            <p><?php _e('We may provide you areas on the Services to leave reviews or ratings. When posting a review, you must comply with the following criteria: (1) you should have firsthand experience with the person/entity being reviewed; (2) your reviews should not contain offensive profanity, or abusive, racist, offensive, or hateful language; (3) your reviews should not contain discriminatory references based on religion, race, gender, national origin, age, marital status, sexual orientation, or disability; (4) your reviews should not contain references to illegal activity; (5) you should not be affiliated with competitors if posting negative reviews; (6) you should not make any conclusions as to the legality of conduct; (7) you may not post any false or misleading statements; and (8) you may not organize a campaign encouraging others to post reviews, whether positive or negative.', 'wppf'); ?></p>

            <p><?php _e('We may accept, reject, or remove reviews in our sole discretion. We have absolutely no obligation to screen reviews or to delete reviews, even if anyone considers reviews objectionable or inaccurate. Reviews are not endorsed by us, and do not necessarily represent our opinions or the views of any of our affiliates or partners. We do not assume liability for any review or for any claims, liabilities, or losses resulting from any review. By posting a review, you hereby grant to us a perpetual, non-exclusive, worldwide, royalty-free, fully paid, assignable, and sublicensable right and license to reproduce, modify, translate, transmit by any means, display, perform, and/or distribute all content relating to review.', 'wppf'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('13. THIRD-PARTY WEBSITES AND CONTENT', 'wppf'); ?></h2>

            <p><?php printf(__('The Services may contain (or you may be sent via the Site) links to other websites ("%1$sThird-Party Websites%2$s") as well as articles, photographs, text, graphics, pictures, designs, music, sound, video, information, applications, software, and other content or items belonging to or originating from third parties ("%1$sThird-Party Content%2$s"). Such Third-Party Websites and Third-Party Content are not investigated, monitored, or checked for accuracy, appropriateness, or completeness by us, and we are not responsible for any Third-Party Websites accessed through the Services or any Third-Party Content posted on, available through, or installed from the Services, including the content, accuracy, offensiveness, opinions, reliability, privacy practices, or other policies of or contained in the Third-Party Websites or the Third-Party Content. Inclusion of, linking to, or permitting the use or installation of any Third-Party Websites or any Third-Party Content does not imply approval or endorsement thereof by us. If you decide to leave the Services and access the Third-Party Websites or to use or install any Third-Party Content, you do so at your own risk, and you should be aware these Legal Terms no longer govern. You should review the applicable terms and policies, including privacy and data gathering practices, of any website to which you navigate from the Services or relating to any applications you use or install from the Services. Any purchases you make through Third-Party Websites will be through other websites and from other companies, and we take no responsibility whatsoever in relation to such purchases which are exclusively between you and the applicable third party. You agree and acknowledge that we do not endorse the products or services offered on Third-Party Websites and you shall hold us blameless from any harm caused by your purchase of such products or services. Additionally, you shall hold us blameless from any losses sustained by you or harm caused to you relating to or resulting in any way from any Third-Party Content or any contact with Third-Party Websites.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('14. ADVERTISERS', 'wppf'); ?></h2>

            <p><?php _e('We allow advertisers to display their advertisements and other information in certain areas of the Services, such as sidebar advertisements or banner advertisements. We simply provide the space to place such advertisements, and we have no other relationship with advertisers.', 'wppf'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('15. SERVICES MANAGEMENT', 'wppf'); ?></h2>

            <p><?php _e('We reserve the right, but not the obligation, to: (1) monitor the Services for violations of these Legal Terms; (2) take appropriate legal action against anyone who, in our sole discretion, violates the law or these Legal Terms, including without limitation, reporting such user to law enforcement authorities; (3) in our sole discretion and without limitation, refuse, restrict access to, limit the availability of, or disable (to the extent technologically feasible) any of your Contributions or any portion thereof; (4) in our sole discretion and without limitation, notice, or liability, to remove from the Services or otherwise disable all files and content that are excessive in size or are in any way burdensome to our systems; and (5) otherwise manage the Services in a manner designed to protect our rights and property and to facilitate the proper functioning of the Services.', 'wppf'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('16. PRIVACY POLICY', 'wppf'); ?></h2>

            <p><?php printf(__('We care about data privacy and security. Please review our Privacy Policy: %1$s. By using the Services, you agree to be bound by our Privacy Policy, which is incorporated into these Legal Terms. Please be advised the Services are hosted in the United States. If you access the Services from any other region of the world with laws or other requirements governing personal data collection, use, or disclosure that differ from applicable laws in the United States, then through your continued use of the Services, you are transferring your data to the United States, and you expressly consent to have your data transferred to and processed in the United States.', 'wppf'), '<span class="font-semibold"><a href="' . esc_url(path_join(get_site_url(), 'privacy-policy/')) . '">' . wp_kses_post(path_join(get_site_url(), 'privacy-policy/') . '</a></span>')); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('17. COPYRIGHT INFRINGEMENTS', 'wppf'); ?></h2>

            <p><?php _e('We respect the intellectual property rights of others. If you believe that any material available on or through the Services infringes upon any copyright you own or control, please immediately notify us using the contact information provided below (a "Notification"). A copy of your Notification will be sent to the person who posted or stored the material addressed in the Notification. Please be advised that pursuant to applicable law you may be held liable for damages if you make material misrepresentations in a Notification. Thus, if you are not sure that material located on or linked to by the Services infringes your copyright, you should consider first contacting an attorney.', 'wppf'); ?></p>

            <h2 id="ownership" class="mb-4 text-base font-semibold"><?php _e('18. TERM AND TERMINATION', 'wppf'); ?></h2>

            <p><?php _e('These Legal Terms shall remain in full force and effect while you use the Services. WITHOUT LIMITING ANY OTHER PROVISION OF THESE LEGAL TERMS, WE RESERVE THE RIGHT TO, IN OUR SOLE DISCRETION AND WITHOUT NOTICE OR LIABILITY, DENY ACCESS TO AND USE OF THE SERVICES (INCLUDING BLOCKING CERTAIN IP ADDRESSES), TO ANY PERSON FOR ANY REASON OR FOR NO REASON, INCLUDING WITHOUT LIMITATION FOR BREACH OF ANY REPRESENTATION, WARRANTY, OR COVENANT CONTAINED IN THESE LEGAL TERMS OR OF ANY APPLICABLE LAW OR REGULATION. WE MAY TERMINATE YOUR USE OR PARTICIPATION IN THE SERVICES OR DELETE YOUR ACCOUNT AND ANY CONTENT OR INFORMATION THAT YOU POSTED AT ANY TIME, WITHOUT WARNING, IN OUR SOLE DISCRETION.', 'wppf'); ?></p>

            <p><?php _e('If we terminate or suspend your account for any reason, you are prohibited from registering and creating a new account under your name, a fake or borrowed name, or the name of any third party, even if you may be acting on behalf of the third party. In addition to terminating or suspending your account, we reserve the right to take appropriate legal action, including without limitation pursuing civil, criminal, and injunctive redress.', 'wppf'); ?></p>

            

            <div id="corrections" class="mb-2 font-semibold"><?php _e('22. CORRECTIONS', 'wppf'); ?></div>

            <p><?php _e('There may be information on the Services that contains typographical errors, inaccuracies, or omissions, including descriptions, pricing, availability, and various other information. We reserve the right to correct any errors, inaccuracies, or omissions and to change or update the information on the Services at any time, without prior notice.', 'wppf'); ?></p>

            <div id="disclaimer" class="mb-2 font-semibold"><?php _e('23. DISCLAIMER', 'wppf'); ?></div>

            <p><?php _e("THE SERVICES ARE PROVIDED ON AN AS-IS AND AS-AVAILABLE BASIS. YOU AGREE THAT YOUR USE OF THE SERVICES WILL BE AT YOUR SOLE RISK. TO THE FULLEST EXTENT PERMITTED BY LAW, WE DISCLAIM ALL WARRANTIES, EXPRESS OR IMPLIED, IN CONNECTION WITH THE SERVICES AND YOUR USE THEREOF, INCLUDING, WITHOUT LIMITATION, THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, AND NON-INFRINGEMENT. WE MAKE NO WARRANTIES OR REPRESENTATIONS ABOUT THE ACCURACY OR COMPLETENESS OF THE SERVICES' CONTENT OR THE CONTENT OF ANY WEBSITES OR MOBILE APPLICATIONS LINKED TO THE SERVICES AND WE WILL ASSUME NO LIABILITY OR RESPONSIBILITY FOR ANY (1) ERRORS, MISTAKES, OR INACCURACIES OF CONTENT AND MATERIALS, (2) PERSONAL INJURY OR PROPERTY DAMAGE, OF ANY NATURE WHATSOEVER, RESULTING FROM YOUR ACCESS TO AND USE OF THE SERVICES, (3) ANY UNAUTHORIZED ACCESS TO OR USE OF OUR SECURE SERVERS AND/OR ANY AND ALL PERSONAL INFORMATION AND/OR FINANCIAL INFORMATION STORED THEREIN, (4) ANY INTERRUPTION OR CESSATION OF TRANSMISSION TO OR FROM THE SERVICES, (5) ANY BUGS, VIRUSES, TROJAN HORSES, OR THE LIKE WHICH MAY BE TRANSMITTED TO OR THROUGH THE SERVICES BY ANY THIRD PARTY, AND/OR (6) ANY ERRORS OR OMISSIONS IN ANY CONTENT AND MATERIALS OR FOR ANY LOSS OR DAMAGE OF ANY KIND INCURRED AS A RESULT OF THE USE OF ANY CONTENT POSTED, TRANSMITTED, OR OTHERWISE MADE AVAILABLE VIA THE SERVICES. WE DO NOT WARRANT, ENDORSE, GUARANTEE, OR ASSUME RESPONSIBILITY FOR ANY PRODUCT OR SERVICE ADVERTISED OR OFFERED BY A THIRD PARTY THROUGH THE SERVICES, ANY HYPERLINKED WEBSITE, OR ANY WEBSITE OR MOBILE APPLICATION FEATURED IN ANY BANNER OR OTHER ADVERTISING, AND WE WILL NOT BE A PARTY TO OR IN ANY WAY BE RESPONSIBLE FOR MONITORING ANY TRANSACTION BETWEEN YOU AND ANY THIRD-PARTY PROVIDERS OF PRODUCTS OR SERVICES. AS WITH THE PURCHASE OF A PRODUCT OR SERVICE THROUGH ANY MEDIUM OR IN ANY ENVIRONMENT, YOU SHOULD USE YOUR BEST JUDGMENT AND EXERCISE CAUTION WHERE APPROPRIATE.", 'wppf'); ?></p>

            <div id="liability" class="mb-2 font-semibold"><?php _e('24. LIMITATIONS OF LIABILITY', 'wppf'); ?></div>

            <p><?php _e("IN NO EVENT WILL WE OR OUR DIRECTORS, EMPLOYEES, OR AGENTS BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY DIRECT, INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL, OR PUNITIVE DAMAGES, INCLUDING LOST PROFIT, LOST REVENUE, LOSS OF DATA, OR OTHER DAMAGES ARISING FROM YOUR USE OF THE SERVICES, EVEN IF WE HAVE BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. NOTWITHSTANDING ANYTHING TO THE CONTRARY CONTAINED HEREIN, OUR LIABILITY TO YOU FOR ANY CAUSE WHATSOEVER AND REGARDLESS OF THE FORM OF THE ACTION, WILL AT ALL TIMES BE LIMITED TO THE AMOUNT PAID, IF ANY, BY YOU TO US DURING THE THREE (3) MONTH PERIOD PRIOR TO ANY CAUSE OF ACTION ARISING. CERTAIN US STATE LAWS AND INTERNATIONAL LAWS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR LIMITATION OF CERTAIN DAMAGES. IF THESE LAWS APPLY TO YOU, SOME OR ALL OF THE ABOVE DISCLAIMERS OR LIMITATIONS MAY NOT APPLY TO YOU, AND YOU MAY HAVE ADDITIONAL RIGHTS.", 'wppf'); ?></p>

            <div id="indemnification" class="mb-2 font-semibold"><?php _e('25. INDEMNIFICATION', 'wppf'); ?></div>

            <p><?php _e('You agree to defend, indemnify, and hold us harmless, including our subsidiaries, affiliates, and all of our respective officers, agents, partners, and employees, from and against any loss, damage, liability, claim, or demand, including reasonable attorneys’ fees and expenses, made by any third party due to or arising out of: (1) your Contributions; (2) use of the Services; (3) breach of these Legal Terms; (4) any breach of your representations and warranties set forth in these Legal Terms; (5) your violation of the rights of a third party, including but not limited to intellectual property rights; or (6) any overt harmful act toward any other user of the Services with whom you connected via the Services. Notwithstanding the foregoing, we reserve the right, at your expense, to assume the exclusive defense and control of any matter for which you are required to indemnify us, and you agree to cooperate, at your expense, with our defense of such claims. We will use reasonable efforts to notify you of any such claim, action, or proceeding which is subject to this indemnification upon becoming aware of it.', 'wppf'); ?></p>

            <div id="userdata" class="mb-2 font-semibold"><?php _e('26. USER DATA', 'wppf'); ?></div>

            <p><?php _e('We will maintain certain data that you transmit to the Services for the purpose of managing the performance of the Services, as well as data relating to your use of the Services. Although we perform regular routine backups of data, you are solely responsible for all data that you transmit or that relates to any activity you have undertaken using the Services. You agree that we shall have no liability to you for any loss or corruption of any such data, and you hereby waive any right of action against us arising from any such loss or corruption of such data.', 'wppf'); ?></p>

            <div id="electronic" class="mb-2 font-semibold"><?php _e('27. ELECTRONIC COMMUNICATIONS, TRANSACTIONS, AND SIGNATURES', 'wppf'); ?></div>

            <p><?php _e('Visiting the Services, sending us emails, and completing online forms constitute electronic communications. You consent to receive electronic communications, and you agree that all agreements, notices, disclosures, and other communications we provide to you electronically, via email and on the Services, satisfy any legal requirement that such communication be in writing. YOU HEREBY AGREE TO THE USE OF ELECTRONIC SIGNATURES, CONTRACTS, ORDERS, AND OTHER RECORDS, AND TO ELECTRONIC DELIVERY OF NOTICES, POLICIES, AND RECORDS OF TRANSACTIONS INITIATED OR COMPLETED BY US OR VIA THE SERVICES. You hereby waive any rights or requirements under any statutes, regulations, rules, ordinances, or other laws in any jurisdiction which require an original signature or delivery or retention of non-electronic records, or to payments or the granting of credits by any means other than electronic means.', 'wppf'); ?></p>

            <div id="california" class="mb-2 font-semibold"><?php _e('28. CALIFORNIA USERS AND RESIDENTS', 'wppf'); ?></div>

            <p><?php _e('If any complaint with us is not satisfactorily resolved, you can contact the Complaint Assistance Unit of the Division of Consumer Services of the California Department of Consumer Affairs in writing at 1625 North Market Blvd., Suite N 112, Sacramento, California 95834 or by telephone at (800) 952-5210 or (916) 445-1254.', 'wppf'); ?></p>

            <div id="misc" class="mb-2 font-semibold"><?php _e('29. MISCELLANEOUS', 'wppf'); ?></div>

            <p><?php _e('These Legal Terms and any policies or operating rules posted by us on the Services or in respect to the Services constitute the entire agreement and understanding between you and us. Our failure to exercise or enforce any right or provision of these Legal Terms shall not operate as a waiver of such right or provision. These Legal Terms operate to the fullest extent permissible by law. We may assign any or all of our rights and obligations to others at any time. We shall not be responsible or liable for any loss, damage, delay, or failure to act caused by any cause beyond our reasonable control. If any provision or part of a provision of these Legal Terms is determined to be unlawful, void, or unenforceable, that provision or part of the provision is deemed severable from these Legal Terms and does not affect the validity and enforceability of any remaining provisions. There is no joint venture, partnership, employment or agency relationship created between you and us as a result of these Legal Terms or use of the Services. You agree that these Legal Terms will not be construed against us by virtue of having drafted them. You hereby waive any and all defenses you may have based on the electronic form of these Legal Terms and the lack of signing by the parties hereto to execute these Legal Terms.', 'wppf'); ?></p>

            <div id="contact" class="mb-2 font-semibold"><?php _e('30. CONTACT US', 'wppf'); ?></div>

            <div><?php printf(__('In order to resolve a complaint regarding the Services or to receive further information regarding use of the Services, please contact us by using this: %1$s.', 'wppf'), $args['form']); ?></div>
        </div>
    </div>
</section>