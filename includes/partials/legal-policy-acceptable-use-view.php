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
                <p class="mb-0"><?php printf(__('This policy serves as a legally binding document that establishes constraints and practices a user must agree to for access to this Website and products. %1$s', 'wppf'), $args['strings']['legal']['strongly_encourge']); ?></p>
            </div>

            <div class="mb-5 grid gap-3 justify-center" style="grid-template-columns: auto auto">
                <div class="h-8 w-8 flex justify-center items-center">
                    <?php echo $args['svg_logo_policy']; ?>
                </div>
                <h1 class="mb-5 text-xl tracking-tight"><?php _e('ACCEPTABLE USE POLICY', 'wppf'); ?></h1>
            </div>

            <p id="lud" class="mb-4 text-sm font-semibold"><?php printf(__('%1$s: %2$s15 May 2023%3$s', 'wppf'), $args['strings']['legal']['last_updated_label'], '<span class="pl-3 font-normal">', '</span>'); ?></p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo esc_html($args['strings']['legal']['parties_label']); ?></h2>

            <p>
                <?php printf(
                    __('This Acceptable Use Policy ("%1$sPolicy%2$s") %3$s', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>',
                    wp_kses_post($args['strings']['legal']['id_parties']),
                ); ?>
            </p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['purpose_label']; ?></h2>

            <p><?php printf(__('The purpose of this Acceptable Use Policy is to define the permitted and prohibited actions and behaviors of users in relation to Our Website, services, and products to ensure responsible and lawful usage.', 'wppf'), '<span class="font-semibold">', '</span>', $args['strings']['name_tm']); ?></p>

            <p class="mb-2"><?php _e('Please carefully review this Policy which applies to any and all:', 'wppf'); ?></p>

            <ol class="mb-4 ml-0 list-lower-alpha">
                <li><?php printf(__('forms, materials, consent tools, comments, post, and all other content available on the Services ("%1$sContent%2$s") and', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>
                <li><?php printf(__('material which you contribute to the Services including any upload, post, review, disclosure, ratings, comments, chat etc. in any forum, chatrooms, reviews, and to any interactive services associated with it ("%1$sContribution%2$s").', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>
            </ol>

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

            <h2 class="mb-4 text-base font-semibold"><?php _e('TABLE OF CONTENTS', 'wppf'); ?></h2>

            <ol class="mb-6 list-decimal">
                <li><?php printf(__('%1$sWHO WE ARE%2$s', 'wppf'), '<a href="' . esc_html('#who') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sUSE OF THE SERVICES%2$s', 'wppf'), '<a href="' . esc_html('#use') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sRESTRICTION ON SALE, RENT AND LOAN OF SERVICES%2$s', 'wppf'), '<a href="' . esc_html('#rest') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCONTRIBUTIONS%2$s', 'wppf'), '<a href="' . esc_html('#cont') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sREVIEW AND RATINGS%2$s', 'wppf'), '<a href="' . esc_html('#rate') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sREPORTING A BREACH OF THIS POLICY%2$s', 'wppf'), '<a href="' . esc_html('#breach') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCONSEQUENCES OF BREACHING THIS POLICY%2$s', 'wppf'), '<a href="' . esc_html('#consequences') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCOMPLAINTS AND REMOVAL OF LEGITIMATE CONTENT%2$s', 'wppf'), '<a href="' . esc_html('#complaints') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sDISCLAIMER%2$s', 'wppf'), '<a href="' . esc_html('#disclaimer') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCONTACT INFORMATION%2$s', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#legal_compliance') . '">', $args['strings']['legal']['legal_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#compliance') . '">', $args['strings']['legal']['policy_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#serviceability') . '">', $args['strings']['legal']['serviceability_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#entire') . '">', $args['strings']['legal']['entire_agreement_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#dispute') . '">', $args['strings']['legal']['dispute_resolution_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#law') . '">', $args['strings']['legal']['governing_law_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#mod') . '">', $args['strings']['legal']['policy_modifications_label'], '</a>'); ?></li>
            </ol>

            <h2 id="who" class="mb-4 text-base font-semibold"><?php _e('1. WHO WE ARE', 'wppf'); ?></h2>

            <p><?php printf(__('We operate the website %1s (the "%2$sSite%3$s"), as well as any other related products and services that refer or link to this Policy (collectively, the "%2$sService%3$s," or "%2$sServices%3$s").', 'wppf'), parse_url(get_site_url(), PHP_URL_HOST), '<span class="font-semibold">', '</span>'); ?></p>

            <h2 id="use" class="mb-4 text-base font-semibold"><?php _e('2. USE OF THE SERVICES', 'wppf'); ?></h2>

            <p><?php _e('By using the Services, you agree to comply with this Policy and all applicable laws.', 'wppf'); ?></p>

            <p class="mb-2"><?php _e('You also acknowledge that you may not:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Systematically retrieve data or other content from the Services to create or compile, directly or indirectly, a collection, compilation, database, or directory without written permission from us.', 'wppf'); ?></li>
                <li><?php _e('Engage in unauthorized use of the Services, including collecting usernames and/or email addresses of users by electronic or other means for the purpose of sending unsolicited email, or creating user accounts by automated means or under false pretenses.', 'wppf'); ?></li>
                <li><?php _e('Circumvent, disable, or otherwise interfere with security-related features of the Services, including features that prevent or restrict the use or copying of any Content or enforce limitations on the use of the Services and/or the Content contained therein.', 'wppf'); ?></li>
                <li><?php _e('Engage in unauthorized framing of or linking to the Services.', 'wppf'); ?></li>
                <li><?php _e('Engage in deceptive practices.', 'wppf'); ?></li>
                <li><?php _e('Make improper use of our Services, including our support services or submit false reports of abuse or misconduct.', 'wppf'); ?></li>
                <li><?php _e('Engage in any automated use of the Services, such as using scripts to send comments or messages, or using any data mining, robots, or similar data gathering and extraction tools.', 'wppf'); ?></li>
                <li><?php _e('Interfere with or disrupt the Services or associated networks.', 'wppf'); ?></li>
                <li><?php _e('Attempt to impersonate another user or person or use the username of another user.', 'wppf'); ?></li>
                <li><?php _e('Use any information obtained from the Services in order to harass, abuse, or harm another person.', 'wppf'); ?></li>
                <li><?php _e('Use the Services as part of any effort to compete with us or otherwise use the Services and/or the Content for any revenue-generating endeavor or commercial enterprise.', 'wppf'); ?></li>
                <li><?php _e('Decipher, decompile, disassemble, or reverse engineer any of the software comprising or in any way making up a part of the Services, except as expressly permitted by applicable law.', 'wppf'); ?></li>
                <li><?php _e('Attempt to bypass any measures of the Services designed to prevent or restrict access to the Services, or any portion of the Services.', 'wppf'); ?></li>
                <li><?php _e('Harass, annoy, intimidate, or threaten any of our employees or agents engaged in providing any portion of the Services to you.', 'wppf'); ?></li>
                <li><?php _e('Delete the copyright or other proprietary rights notice from any Content.', 'wppf'); ?></li>
                <li><?php _e('Copy or adapt the Services’ software, including but not limited to Flash, PHP, HTML, JavaScript, or other code.', 'wppf'); ?></li>
                <li><?php _e('Upload or transmit (or attempt to upload or to transmit) viruses, Trojan horses, or other material, including excessive use of capital letters and spamming (continuous posting of repetitive text), that interferes with any party’s uninterrupted use and enjoyment of the Services or modifies, impairs, disrupts, alters, or interferes with the use, features, functions, operation, or maintenance of the Services.', 'wppf'); ?></li>
                <li><?php _e('Upload or transmit (or attempt to upload or to transmit) any material that acts as a passive or active information collection or transmission mechanism, including without limitation, clear graphics interchange formats ("gifs"), 1×1 pixels, web bugs, cookies, or other similar devices (sometimes referred to as "spyware" or "passive collection mechanisms" or "pcms").', 'wppf'); ?></li>
                <li><?php _e('Except as may be the result of standard search engine or Internet browser usage, use, launch, develop, or distribute any automated system, including without limitation, any spider, robot, cheat utility, scraper, or offline reader that accesses the Services, or using or launching any unauthorized script or other software.', 'wppf'); ?></li>
                <li><?php _e('Disparage, tarnish, or otherwise harm, in our opinion, us and/or the Services.', 'wppf'); ?></li>
                <li><?php _e('Use the Services in a manner inconsistent with any applicable laws or regulations.', 'wppf'); ?></li>
                <li><?php _e('Use a buying agent or purchasing agent to make purchases on the Services.', 'wppf'); ?></li>
                <li><?php _e('Sell or otherwise transfer your profile or Services account.', 'wppf'); ?></li>
            </ul>

            <p class="mb-2"><?php _e('If you subscribe to our Services, you understand, acknowledge, and agree that you may not, except if expressly permitted:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Engage in any use, including modification, copying, redistribution, publication, display, performance, or retransmission, of any portions of any Services, other than as expressly permitted by this Policy, without the prior written consent of the Company, which the Company may grant or refuse in its sole and absolute discretion.', 'wppf'); ?></li>
                <li><?php _e('Reconstruct or attempt to discover any source code or algorithms of the Services, or any portion thereof, by any means whatsoever.', 'wppf'); ?></li>
                <li><?php _e('Provide, or otherwise make available, the Services to any third party.', 'wppf'); ?></li>
                <li><?php _e('Intercept any data not intended for you.', 'wppf'); ?></li>
                <li><?php _e("Damage, reveal, or alter any user's data, or any other hardware, software, or information relating to another person or entity.", 'wppf'); ?></li>
            </ul>

            <h2 id="rest" class="mb-4 text-base font-semibold"><?php _e('3. RESTRICTION ON SALE, RENT AND LOAN OF SERVICES', 'wppf'); ?></h2>

            <p><?php _e('The Services provided by the Company are strictly for personal and non-commercial use. Users are prohibited from selling, renting, leasing, or loaning the Services, whether in whole or in part, to any third party without the explicit written consent of the Company. Any unauthorized sale, rental, lease, or loan of the Services is strictly prohibited and may result in immediate termination of access to the Services, as well as legal action to seek remedies for any damages incurred by the Company.', 'wppf'); ?></p>

            <h2 id="cont" class="mb-4 text-base font-semibold"><?php _e('4. CONTRIBUTIONS', 'wppf'); ?></h2>

            <p class="mb-2"><?php _e('In this Policy, the term "Contributions" means:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('any data, information, software, text, code, music, scripts, sound, graphics, photos, videos, tags, messages, interactive features, or other materials that you post, share, upload, submit, or otherwise provide in any manner on or through to the Services; or', 'wppf'); ?></li>
                <li><?php _e('any other content, materials, or data you provide to the Company or use with the Services.', 'wppf'); ?></li>
            </ul>

            <p><?php _e("Some areas of the Services may allow users to upload, transmit, or post Contributions. We may but are under no obligation to review or moderate the Contributions made on the Services, and we expressly exclude our liability for any loss or damage resulting from any of our users' breach of this Policy. Please report any Contribution that you believe breaches this Policy; however, we will determine, in our sole discretion, whether a Contribution is indeed in breach of this Policy.", 'wppf'); ?></p>

            <p class="mb-2"><?php _e('You warrant that:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('you are the creator and owner of or have the necessary licenses, rights, consents, releases, and permissions to use and to authorize us, the Services, and other users of the Services to use your Contributions in any manner contemplated by the Services and this Policy;', 'wppf'); ?></li>
                <li><?php _e('all your Contributions comply with applicable laws and are original and true (if they represent your opinion or facts);', 'wppf'); ?></li>
                <li><?php _e('the creation, distribution, transmission, public display, or performance, and the accessing, downloading, or copying of your Contributions do not and will not infringe the proprietary rights, including but not limited to the copyright, patent, trademark, trade secret, or moral rights of any third party; and', 'wppf'); ?></li>
                <li><?php _e('you have the verifiable consent, release, and/or permission of each and every identifiable individual person in your Contributions to use the name or likeness of each and every such identifiable individual person to enable inclusion and use of your Contributions in any manner contemplated by the Services and this Policy.', 'wppf'); ?></li>
            </ul>

            <p class="mb-2"><?php _e('You also agree that you will not post, transmit, or upload any (or any part of a) Contribution that:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('is in breach of applicable laws, regulation, court order, contractual obligation, this Policy, our Legal Terms, a legal duty, or that promotes or facilitates fraud or illegal activities;', 'wppf'); ?></li>
                <li><?php _e('is defamatory, obscene, offensive, hateful, insulting, intimidating, bullying, abusive, or threatening, to any person or group;', 'wppf'); ?></li>
                <li><?php _e('is false, inaccurate, or misleading;', 'wppf'); ?></li>
                <li><?php _e('includes child sexual abuse material, or violates any applicable law concerning child pornography or otherwise intended to protect minors;', 'wppf'); ?></li>
                <li><?php _e('contains any material that solicits personal information from anyone under the age of 18 or exploits people under the age of 18 in a sexual or violent manner;', 'wppf'); ?></li>
                <li><?php _e('promotes violence, advocates the violent overthrow of any government, or incites, encourages, or threatens physical harm against another;', 'wppf'); ?></li>
                <li><?php _e('is obscene, lewd, lascivious, filthy, violent, harassing, libelous, slanderous, contains sexually explicit material, or is otherwise objectionable (as determined by us);', 'wppf'); ?></li>
                <li><?php _e('is discriminatory based on race, sex, religion, nationality, disability, sexual orientation, or age;', 'wppf'); ?></li>
                <li><?php _e('bullies, intimidates, humiliates, or insults any person;', 'wppf'); ?></li>
                <li><?php _e('promotes, facilitates, or assists anyone in promoting and facilitating acts of terrorism;', 'wppf'); ?></li>
                <li><?php _e("infringes, or assists anyone in infringing, a third party's intellectual property rights or publicity or privacy rights;", 'wppf'); ?></li>
                <li><?php _e('is deceitful, misrepresents your identity or affiliation with any person and/or misleads anyone as to your relationship with us or implies that the Contribution was made by someone else than you;', 'wppf'); ?></li>
                <li><?php _e('contains unsolicited or unauthorized advertising, promotional materials, pyramid schemes, chain letters, spam, mass mailings, or other forms of solicitation that has been "paid for," whether with monetary compensation or in kind; or', 'wppf'); ?></li>
                <li><?php _e('misrepresents your identity or who the Contribution is from.', 'wppf'); ?></li>
            </ul>

            <h2 id="rate" class="mb-4 text-base font-semibold"><?php _e('5. REVIEW AND RATINGS', 'wppf'); ?></h2>

            <p class="mb-2"><?php _e('When your Contribution is a review or rating, you also agree that:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Your reviews and ratings are based on your firsthand experience with the goods, services, and software being reviewed;', 'wppf'); ?></li>
                <li><?php _e('Your Contribution is true to your experience;', 'wppf'); ?></li>
                <li><?php _e('You are not affiliated with competitors if posting negative reviews (or linked in any way to, e.g., by being the owner or seller/manufacturer of, a product or service if posting positive reviews);', 'wppf'); ?></li>
                <li><?php _e('Your reviews and ratings should not make or offer conclusions about the legality of conduct;', 'wppf'); ?></li>
                <li><?php _e('You cannot post any false or misleading statements; and', 'wppf'); ?></li>
                <li><?php _e('You do not and will not organize a campaign encouraging others to post reviews, whether positive or negative.', 'wppf'); ?></li>
            </ul>

            <h2 id="breach" class="mb-4 text-base font-semibold"><?php _e('6. REPORTING A BREACH OF THIS POLICY', 'wppf'); ?></h2>

            <p><?php _e("We may but are under no obligation to review or moderate the Contributions made on the Services and we expressly exclude our liability for any loss or damage resulting from any of our users' breach of this Policy.", 'wppf'); ?></p>

            <p class="mb-2"><?php _e("If you consider that any Content or Contribution:", 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li>
                    <p><?php printf(__('breach this Policy, or infringe any third-party intellectual property rights, us this %1$scontact information%2$s to let us know which Content or Contribution is in breach of this Policy and why.', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></p>
                </li>
            </ul>

            <h2 id="consequences" class=" mb-4 text-base font-semibold"><?php _e('7. CONSEQUENCES OF BREACHING THIS POLICY', 'wppf'); ?></h2>

            <p><?php _e("The consequences for violating our Policy will vary depending on the severity of the breach and the user's history on the Services, by way of example:", 'wppf'); ?></p>

            <p><?php _e('We may, in some cases, give you a warning and/or remove the infringing Contribution, however, if your breach is serious or if you continue to breach our Legal Terms and this Policy, we have the right to suspend or terminate your access to and use of our Services and, if applicable, disable your account. We may also notify law enforcement or issue legal proceedings against you when we believe that there is a genuine risk to an individual or a threat to public safety. ', 'wppf'); ?></p>

            <p><?php _e('We exclude our liability for all action we may take in response to any of your breaches of this Policy.', 'wppf'); ?></p>

            <h2 id="complaints" class=" mb-4 text-base font-semibold"><?php _e('8. COMPLAINTS AND REMOVAL OF LEGITIMATE CONTENT', 'wppf'); ?></h2>

            <p><?php printf(__('If you consider that some Content or Contribution have been mistakenly removed or blocked from the Services, please refer to the %1$scontact information%2$s and we will promptly review our decision to remove such Content or Contribution. The Content or Contribution may stay "down" whilst we conduct the review process.', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></p>

            <h2 id="disclaimer" class=" mb-4 text-base font-semibold"><?php _e('9. DISCLAIMER', 'wppf'); ?></h2>

            <p><?php _e("The Company is not obligated to monitor users' activities, and we disclaim any responsibility for any user’s misuse of the Services. The Company has no responsibility for any user or other Content or Contribution created, maintained, stored, transmitted, or accessible on or through the Services, and is not obligated to monitor or exercise any editorial control over such material. If The Company becomes aware that any such Content or Contribution violates this Policy, The Company may, in addition to removing such Content or Contribution and blocking your account, report such breach to the police or appropriate regulatory authority. Unless otherwise stated in this Policy, The Company disclaims any obligation to any person who has not entered into an agreement with The Company for the use of the Services.", 'wppf'); ?></p>

            <h2 id="contact" class=" mb-4 text-base font-semibold"><?php _e('10. CONTACT INFORMATION', 'wppf'); ?></h2>

            <div><?php printf(__('Contact us by using this link: %1$s.', 'wppf'), $args['form']); ?></div>

            <h2 id="legal_compliance" class=" mb-4 text-base font-semibold"><?php printf(__('11. %1$s', 'wppf'), $args['strings']['legal']['legal_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['legal_compliance']; ?></p>

            <h2 id="compliance" class=" mb-4 text-base font-semibold"><?php printf(__('12. %1$s', 'wppf'), $args['strings']['legal']['policy_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['policy_compliance']; ?></p>

            <h2 id="serviceability" class=" mb-4 text-base font-semibold"><?php printf(__('13. %1$s', 'wppf'), $args['strings']['legal']['serviceability_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['serviceability']; ?></p>

            <h2 id="entire" class="mb-4 text-base font-semibold"><?php printf(__('14. %1$s', 'wppf'), $args['strings']['legal']['entire_agreement_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['entire_agreement']; ?></p>

            <h2 id="dispute" class="mb-4 text-base font-semibold"><?php printf(__('15. %1$s', 'wppf'), $args['strings']['legal']['dispute_resolution_label']); ?></h2>

            <?php echo $args['strings']['legal']['dispute_resolution']; ?>

            <h2 id="law" class="mb-4 text-base font-semibold"><?php printf(__('16. %1$s', 'wppf'), $args['strings']['legal']['governing_law_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['governing_law']; ?></p>

            <h2 id="mod" class="mb-4 text-base font-semibold"><?php printf(__('17. %1$s', 'wppf'), $args['strings']['legal']['policy_modifications_label']); ?></h2>

            <?php echo $args['strings']['legal']['policy_modifications']; ?>

        </div>
    </div>
</section>