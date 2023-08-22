<section class="wppf-legal-center wppf-<?php echo $args['strings']['section_class']; ?>">
    <div class="grid grid-cols-4 gap-8">
        <div class="fixed-colum bg-gray-100 col-span-1">
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
                <p class="mb-0"><?php printf(__('This policy serves as a legally binding document delineating how Our site collects, uses, shares, and protects the personal information of its users. %1$s', 'wppf'), $args['strings']['legal']['strongly_encourge']); ?></p>
            </div>

            <div class="mb-5 grid gap-3 justify-center" style="grid-template-columns: auto auto">
                <div class="h-8 w-8 flex justify-center items-center">
                    <?php echo $args['svg_logo_policy']; ?>
                </div>
                <h1 class="mb-5 text-xl tracking-tight"><?php _e('PRIVACY POLICY', 'wppf'); ?></h1>
            </div>

            <h2 id="lud" class="mb-4 text-sm font-semibold"><?php echo esc_html($args['strings']['legal']['last_updated_label']); ?></h2>

            <p>
                <?php _e('This policy was last updated on: 15 May 2023.', 'wppf'); ?>
            </p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo esc_html($args['strings']['legal']['parties_label']); ?></h2>

            <p>
                <?php printf(
                    __('This Privacy Policy ("%1$sPolicy%2$s") %3$s', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>',
                    wp_kses_post($args['strings']['legal']['id_parties']),
                ); ?>
            </p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['purpose_label']; ?></h2>

            <p><?php printf(__('The purpose of this Privacy Policy is to describe how and why We might collect, store, use, and/or share Your information when you use Our services ("%1$sServices%2$s"), such as when you:', 'wppf'), '<span class="font-semibold">', '</span>', $args['strings']['name_tm']); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Visit Our Website or any Website of Ours that links to this Privacy Policy.', 'wppf'); ?></li>
                <li><?php _e('Download and use Our Facebook application, or any other application of Ours that links to this Privacy Policy.', 'wppf'); ?></li>
                <li><?php _e('Engage with Us in other related ways, including any sales, marketing, or events.', 'wppf'); ?></li>
            </ul>

            <!-- Included policies - 1 of 6. -->
            <!-- This is an h2 heading. -->
            <?php echo $args['strings']['legal']['included_policies_label']; ?>

            <!-- Included policies - 2 of 6. -->
            <p><?php echo $args['strings']['legal']['included_policies_2of6']; ?></p>

            <!-- Included policies - 3 of 6. -->
            <ul class="mb-4 ml-0 list-disc">
                <li><?php printf(
                        __('TERMS AND CONDITIONS POLICY: %2$slocated at %1$s', 'wppf'),
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/terms-and-conditions-policy/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/terms-and-conditions-policy/')) . '</a>',
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
                        __('COOKIE POLICY: %2$slocated at %1$s', 'wppf'),
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/cookie-policy')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/cookie-policy/')) . '</a>',
                        '<br>'
                    ); ?>
                </li>
            </ul>

            <!-- Included policies - 4 of 6. -->
            <?php echo $args['strings']['legal']['included_policies_4of6']; ?>

            <!-- Included policies - 5 of 6. -->
            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('This Policy', 'wppf'); ?></li>
                <li><?php _e('TERMS AND CONDITIONS POLICY', 'wppf'); ?></span< /li>
                <li><?php _e('DISCLAIMER POLICY', 'wppf'); ?></span< /li>
                <li><?php _e('COOKIE POLICY', 'wppf'); ?></span< /li>
            </ul>

            <!-- Included policies - 6 of 6. -->
            <?php echo $args['strings']['legal']['included_policies_6of6']; ?>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['agreement_to_label']; ?></h2>

            <?php echo $args['strings']['legal']['agreement_to']; ?>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['disagreement_label']; ?></h2>

            <p><?php echo $args['strings']['legal']['disagreement']; ?></p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['res_conflicts_label']; ?></h2>

            <?php echo $args['strings']['legal']['res_conflicts']; ?>

            <h2 class="mb-4 text-sm font-semibold"><?php _e('SUMMARY OF KEY POINTS', 'wppf'); ?></h2>

            <p><?php printf(__('This summary provides key points from our privacy policy, but you can find out more details about any of these topics by clicking the link following each key point or by using the %1$sTable Of Contents%2$s below.', 'wppf'), '<a href="' . esc_html('#toc') . '">', '</a>'); ?></p>

            <p class="mb-4"><?php printf(__('%1$sDo united states residents have specific privacy rights?%2$s', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <ul class="pl-0 leading-7 list-none">
                <li><?php printf(__('This document contains a section dedicated to %1$sCalifornia consumers%2$s and their privacy rights.', 'wppf'), '<a href="' . esc_html('#calif') . '">', '</a>'); ?></li>

                <li><?php printf(__('This document contains a section dedicated to %1$sVirginia consumers%2$s and their privacy rights.', 'wppf'), '<a href="' . esc_html('#virginia') . '">', '</a>'); ?></li>

                <li><?php printf(__('This document contains a section dedicated to %1$sColorado consumers%2$s and their privacy rights.', 'wppf'), '<a href="' . esc_html('#colorado') . '">', '</a>'); ?></li>

                <li><?php printf(__('This document contains a section dedicated to %1$sConnecticut consumers%2$s and their privacy rights.', 'wppf'), '<a href="' . esc_html('#connecticut') . '">', '</a>'); ?></li>

                <li><?php printf(__('This document contains a section dedicated to %1$sUtah consumers%2$s and their privacy rights.', 'wppf'), '<a href="' . esc_html('#utah') . '">', '</a>'); ?></li>
            </ul>

            <p class="mb-4"><?php printf(__('%1$sWhat personal information do we process?%2$s', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php printf(__('When you visit, use, or navigate our Services, we may process personal information depending on how you interact with us and the Services, the choices you make, and the products and features you use. See the section in this Policy to learn more about %1$spersonal information you disclose to Us%2$s.', 'wppf'), '<a href="' . esc_html('#personalinfo') . '">', '</a>'); ?></p>

            <p><?php _e('We do not process sensitive personal information.', 'wppf'); ?></p>

            <p class="mb-4"><?php printf(__('%1$sDo we receive any information from third parties?%2$s', 'wppf'), '<span class="font-semibold">', '</span>', '<a href="' . esc_html('#othersources') . '">', '</a>'); ?></p>

            <p><?php printf(__('We may receive information from public databases, marketing partners, social media platforms, and other outside sources. To learn more, see the section in this Policy titled %1$sinformation collected from other sources%2$s.', 'wppf'), '<a href="' . esc_html('#othersources') . '">', '</a>'); ?></p>

            <p class="mb-4"><?php printf(__('%1$sHow do we process your information?%2$s', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php printf(__('We process your information to provide, improve, and administer our Services, communicate with you, for security and fraud prevention, and to comply with law. We may also process your information for other purposes with your consent. We process your information only when we have a valid legal reason to do so. To learn more, see the section in this Policy titled %1$show we process your information%2$s.', 'wppf'), '<a href="' . esc_html('#infouse') . '">', '</a>'); ?></p>

            <p class="mb-4"><?php printf(__('%1$sIn what situations and with which types of parties do we share personal information?%2$s', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php printf(__('We may share information in specific situations and with specific categories of third parties. To learn more, see the section in this Policy titled %1$swhen and with whom we share your personal information%2$s.', 'wppf'), '<a href="' . esc_html('#whoshare') . '">', '</a>'); ?></p>

            <p class="mb-4"><?php printf(__('%1$sHow do we keep your information safe?%2$s', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php printf(__('We have processes and procedures in place to protect your personal information. However, no electronic transmission over the internet or information storage technology can be guaranteed to be 100 percent secure, so we cannot promise or guarantee that hackers, cybercriminals, or other unauthorized third parties will not be able to defeat our security and improperly collect, access, steal, or modify your information. To learn more, see the section in this Policy titled %1$show we keep your information safe%2$s.', 'wppf'), '<a href="' . esc_html('#infosafe') . '">', '</a>'); ?></p>

            <p class="mb-4"><?php printf(__('%1$sWhat are your rights?%2$s', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php printf(__('Depending on where you are located geographically, the applicable privacy law may mean you have certain rights regarding your personal information. To learn more, see the section in this Policy titled %1$syour privacy rights%2$s.', 'wppf'), '<a href="' . esc_html('#privacyrights') . '">', '</a>'); ?></p>

            <div id="toc" class="mb-5 font-semibold"><?php _e('TABLE OF CONTENTS', 'wppf'); ?>
            </div>

            <ol class="leading-7 list-decimal">
                <li><?php printf(__('%1$sWHAT INFORMATION DO WE COLLECT?%2$s', 'wppf'), '<a href="' . esc_html('#infocollect') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sHOW DO WE PROCESS YOUR INFORMATION?%2$s', 'wppf'), '<a href="' . esc_html('#infouse') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sWHAT LEGAL BASES DO WE RELY ON TO PROCESS YOUR PERSONAL INFORMATION?%2$s', 'wppf'), '<a href="' . esc_html('#legalbases') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sWHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?%2$s', 'wppf'), '<a href="' . esc_html('#whoshare') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sWHAT IS OUR STANCE ON THIRD-PARTY WEBSITES?   %2$s', 'wppf'), '<a href="' . esc_html('#3pWebsites') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sDO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?%2$s', 'wppf'), '<a href="' . esc_html('#cookies') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sHOW DO WE HANDLE YOUR SOCIAL LOGINS?%2$s', 'wppf'), '<a href="' . esc_html('#sociallogins') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sIS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?%2$s', 'wppf'), '<a href="' . esc_html('#intltransfers') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sHOW LONG DO WE KEEP YOUR INFORMATION?%2$s', 'wppf'), '<a href="' . esc_html('#inforetain') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sHOW DO WE KEEP YOUR INFORMATION SAFE?%2$s', 'wppf'), '<a href="' . esc_html('#infosafe') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sDO WE COLLECT INFORMATION FROM MINORS?%2$s', 'wppf'), '<a href="' . esc_html('#infominors') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sWHAT ARE YOUR PRIVACY RIGHTS?%2$s', 'wppf'), '<a href="' . esc_html('#privacyrights') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCONTROLS FOR DO-NOT-TRACK FEATURES%2$s', 'wppf'), '<a href="' . esc_html('#DNT') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sDO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?%2$s', 'wppf'), '<a href="' . esc_html('#calif') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sDO VIRGINIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?%2$s', 'wppf'), '<a href="' . esc_html('#virginia') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sDO COLORADO RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?%2$s', 'wppf'), '<a href="' . esc_html('#colorado') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sCONTACT INFORMATION%2$s', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#legal_compliance') . '">', $args['strings']['legal']['legal_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#compliance') . '">', $args['strings']['legal']['policy_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#serviceability') . '">', $args['strings']['legal']['serviceability_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#entire') . '">', $args['strings']['legal']['entire_agreement_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#dispute') . '">', $args['strings']['legal']['dispute_resolution_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#law') . '">', $args['strings']['legal']['governing_law_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#mod') . '">', $args['strings']['legal']['policy_modifications_label'], '</a>'); ?></li>
            </ol>

            <h2 id="infocollect" class="mb-4 text-base font-semibold"><?php _e('1. WHAT INFORMATION DO WE COLLECT?', 'wppf'); ?></h2>

            <h3 id="personalinfo" class="mb-4 text-sm font-semibold italic"><?php _e('Personal Information You Disclose To Us', 'wppf'); ?></h3>

            <p><?php printf(__('%1$sIn Short%2$s: We collect personal information that you provide to Us.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php _e('We collect personal information that you voluntarily provide to Us when you register on the Services, express an interest in obtaining information about Us or Our products and Services, when you participate in activities on the Services or otherwise, when you make a purchase, when you interact or contact us.', 'wppf'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('Personal Information Provided By You', 'wppf'); ?></h3>

            <p><?php _e('The personal information that We collect depends on the context of Your interactions with Us and the Services, the choices you make, and the products and features you use. The personal information We collect may include the following:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('names', 'wppf'); ?></li>
                <li><?php _e('phone numbers', 'wppf'); ?></li>
                <li><?php _e('email addresses', 'wppf'); ?></li>
                <li><?php _e('mailing addresses', 'wppf'); ?></li>
                <li><?php _e('job titles', 'wppf'); ?></li>
                <li><?php _e('usernames', 'wppf'); ?></li>
                <li><?php _e('passwords', 'wppf'); ?></li>
                <li><?php _e('contact preferences', 'wppf'); ?></li>
                <li><?php _e('contact or authentication data', 'wppf'); ?></li>
                <li><?php _e('billing addresses', 'wppf'); ?></li>
                <li><?php _e('debit/credit card numbers', 'wppf'); ?></li>
            </ul>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('Sensitive Information', 'wppf'); ?></h3>

            <p><?php _e('We do not process sensitive information.', 'wppf'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('Payment Data', 'wppf'); ?></h3>

            <p><?php printf(__('We may collect data necessary to process Your payment if you make purchases, such as Your payment instrument number, and the security code associated with Your payment instrument. All payment data is stored by Stripe and PayPal. You may find their privacy notice link(s) here: %1$s and %2$s.', 'wppf'), '<a href="' . esc_url('https://stripe.com/privacy') . '" target="_blank">https://stripe.com/privacy</a>', '<a href="' . esc_url('https://www.paypal.com/us/legalhub/privacy-full') . '" target="_blank">https://www.paypal.com/us/legalhub/privacy-full</a>'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('Social Media Login Data', 'wppf'); ?></h3>

            <p><?php printf(__('We may provide you with the option to register with Us using Your existing social media account details, like Your Facebook, Twitter, or other social media account. If you choose to register in this way, We will collect the information described in the section called "%1$sHOW DO WE HANDLE YOUR SOCIAL LOGINS?%2$s" below.', 'wppf'), '<a href="' . esc_html('#sociallogins') . '">', '</a>'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('Application Data', 'wppf'); ?></h3>

            <p><?php _e('If you use Our application(s), We also may collect the following information if you choose to provide Us with access or permission:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php printf(__('%1$sGeolocation Information.%2$s We may request access or permission to track location-based information from Your mobile device, either continuously or while you are using Our mobile application(s), to provide certain location-based services. If you wish to change Your access or permissions, you may do so in Your device settings.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>
                <li><?php printf(__('%1$sMobile Device Data.%2$s We automatically collect device information (such as Your mobile device ID, model, and manufacturer), operating system, version information and system configuration information, device and application identification numbers, browser type and version, hardware model Internet service provider and/or mobile carrier, and Internet Protocol (IP) address (or proxy server). If you are using Our application(s), We may also collect information about the phone network associated with Your mobile device, Your mobile device’s operating system or platform, the type of mobile device you use, Your mobile device’s unique device ID, and information about the features of Our application(s) you accessed.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>
                <li><?php printf(__('%1$sPush Notifications.%2$s We may request to send you push notifications regarding Your account or certain features of the application(s). If you wish to opt out from receiving these types of communications, you may turn them off in Your device settings.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

            </ul>

            <p><?php _e('This information is primarily needed to maintain the security and operation of Our application(s), for troubleshooting, and for Our internal analytics and reporting purposes.', 'wppf'); ?></p>

            <p><?php _e('All personal information that you provide to Us must be true, complete, and accurate, and you must notify Us of any changes to such personal information.', 'wppf'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('Information Automatically Collected', 'wppf'); ?></h3>

            <p><?php printf(__('%1$sIn Short%2$s: Some information — such as Your Internet Protocol (IP) address and/or browser and device characteristics — is collected automatically when you visit Our Services.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php _e('We automatically collect certain information when you visit, use, or navigate the Services. This information does not reveal Your specific identity (like Your name or contact information) but may include device and usage information, such as Your IP address, browser and device characteristics, operating system, language preferences, referring URLs, device name, country, location, information about how and when you use Our Services, and other technical information. This information is primarily needed to maintain the security and operation of Our Services, and for Our internal analytics and reporting purposes.', 'wppf'); ?></p>

            <p><?php printf(__('Like many businesses, We also collect information through cookies and similar technologies. You can find out more about this in Our Cookie Policy at %s', 'wppf'), '<a href= "' . esc_url(path_join(get_site_url(), 'cookie-policy/')) . '">' . wp_kses_post(path_join(get_site_url(), 'cookie-policy/') . '</a>')); ?></p>

            <p><?php _e('The information We collect includes:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php printf(__('%1$sLog and Usage Data.%2$s Log and usage data is service-related, diagnostic, usage, and performance information Our servers automatically collect when you access or use Our Services and which We record in log files. Depending on how you interact with Us, this log data may include Your IP address, device information, browser type, and settings and information about Your activity in the Services (such as the date/time stamps associated with Your usage, pages and files viewed, searches, and other actions you take such as which features you use), device event information (such as system activity, error reports (sometimes called "crash dumps"), and hardware settings).', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sDevice Data.%2$s We collect device data such as information about Your computer, phone, tablet, or other device You use to access the Services. Depending on the device used, this device data may include information such as Your IP address (or proxy server), device and application identification numbers, location, browser type, hardware model, Internet service provider and/or mobile carrier, operating system, and system configuration information.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sLocation Data.%2$s We collect location data such as information about Your device location, which can be either precise or imprecise. How much information We collect depends on the type and settings of the device you use to access the Services. For example, We may use GPS and other technologies to collect geolocation data that tells Us Your current location (based on Your IP address). You can opt out of allowing Us to collect this information either by refusing access to the information or by disabling Your Location setting on Your device. However, if you choose to opt out, you may not be able to use certain aspects of the Services.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>
            </ul>

            <h3 id="othersources" class="mb-4 text-sm font-semibold italic"><?php _e('Information Collected From Other Sources', 'wppf'); ?></h3>

            <p><?php printf(__('%1$sIn Short%2$s: We may collect limited data from public databases, marketing partners, social media platforms, and other outside sources.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php _e("In order to enhance Our ability to provide relevant marketing, offers, and services to you and update Our records, We may obtain information about you from other sources, such as public databases, joint marketing partners, affiliate programs, data providers, social media platforms, and from other third parties. This information includes mailing addresses, job titles, email addresses, phone numbers, intent data (or user behavior data), Internet Protocol (IP) addresses, social media profiles, social media URLs, and custom profiles, for purposes of targeted advertising and event promotion. If you interact with Us on a social media platform using Your social media account (e.g. , Facebook or Twitter), We receive personal information about you such as Your name, email address, and gender. Any personal information that We collect from Your social media account depends on Your social media account's privacy settings.", 'wppf'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('Information Collected When You Use Us Facebook Application(s)', 'wppf'); ?></h3>

            <p><?php printf(__('We by default access Your Facebook basic account information, including Your name, email, gender, birthday, current city, and profile picture URL, as well as other information that you choose to make public. We may also request access to other permissions related to Your account, such as friends, check-ins, and likes, and you may choose to grant or deny Us access to each individual permission. For more information regarding Facebook permissions, refer to the %1$sFacebook Permissions Reference%2$s page.', 'wppf'), '<a href="' . esc_url('https://developers.facebook.com/docs/facebook-login/permissions') . '" target="_blank">', '</a>'); ?></p>


            <h2 id="infouse" class="mb-4 text-base font-semibold"><?php _e('2. HOW DO WE PROCESS YOUR INFORMATION?', 'wppf'); ?></h2>

            <p><?php printf(__('%1$sIn Short%2$s: We process Your information to provide, improve, and administer Our Services, communicate with you, for security and fraud prevention, and to comply with law. We may also process Your information for other purposes with Your consent.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php _e('We process Your personal information for a variety of reasons, depending on how you interact with Our Services, including:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php printf(__('%1$sTo facilitate account creation and authentication and otherwise manage user accounts%2$s: We may process Your information so you can create and log in to Your account, as well as keep Your account in working order.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sTo deliver and facilitate delivery of services to the User%2$s: We may process Your information to provide you with the requested service.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sTo respond to user inquiries/offer support to users%2$s: We may process Your information to respond to Your inquiries and solve any potential issues you might have with the requested service.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sTo send administrative information to you%2$s: We may process Your information to send you details about Our products and services, changes to Our terms and policies, and other similar information.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sTo fulfill and manage Your orders%2$s: We may process Your information to fulfill and manage Your orders, payments, returns, and exchanges made through the Services.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sTo enable user-to-user communications%2$s: We may process Your information if you choose to use any of Our offerings that allow for communication with another user.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sTo request feedback%2$s: We may process Your information when necessary to request feedback and to contact you about Your use of Our Services.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sTo send you marketing and promotional communications%2$s: We may process the personal information you send to Us for Our marketing purposes, if this is in accordance with Your marketing preferences. You can opt out of Our marketing emails at any time. To learn more, see the section in this Policy titled "%3$sWHAT ARE YOUR PRIVACY RIGHTS?%4$s" below.', 'wppf'), '<span class="font-semibold">', '</span>', '<a href="' . esc_url('#privacyrights') . '">', '</a>'); ?></li>

                <li><?php printf(__('%1$sTo deliver targeted advertising to you%2$s: We may process Your information to develop and display personalized content and advertising tailored to Your interests, location, and more. For more information see Our Cookie Policy located at %3$s.', 'wppf'), '<span class="font-semibold">', '</span>', '<a href= "' . esc_url(path_join(get_site_url(), 'cookie-policy/')) . '">' . wp_kses_post(path_join(get_site_url(), 'cookie-policy/') . '</a>')); ?></li>

                <li><?php printf(__('%1$sTo protect Our Services%2$s: We may process Your information as part of our efforts to keep Our Services safe and secure, including fraud monitoring and prevention.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sTo identify usage trends%2$s: We may process information about how you use Our Services to better understand how they are being used so We can improve them.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sTo determine the effectiveness of Our marketing and promotional campaigns%2$s: We may process Your information to better understand how to provide marketing and promotional campaigns that are most relevant to you.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sTo save or protect an individual\'s vital interest%2$s: We may process Your information when necessary to save or protect an individual\’s vital interest, such as to prevent harm.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>
            </ul>

            <h2 id="legalbases" class="mb-4 text-base font-semibold"><?php _e('3. WHAT LEGAL BASES DO WE RELY ON TO PROCESS YOUR INFORMATION?', 'wppf'); ?></h2>

            <p><?php printf(__('%1$sIn Short%2$s: We only process Your personal information when We believe it is necessary and We have a valid legal reason (i.e., legal basis) to do so under applicable law, like with Your consent, to comply with laws, to provide you with services to enter into or fulfill Our contractual obligations, to protect Your rights, or to fulfill Our legitimate business interests.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('If You Are Located In The EU or UK, This Section Applies To You', 'wppf'); ?></h3>

            <p><?php _e('The General Data Protection Regulation (GDPR) and UK GDPR require Us to explain the valid legal bases We rely on in order to process Your personal information. As such, We may rely on the following legal bases to process Your personal information:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php printf(__('%1$sConsent%2$s: We may process Your information if you have given Us permission (i.e., consent) to use Your personal information for a specific purpose. You can withdraw Your consent at any time. To learn more, see the section in this Policy titled %3$swithdrawing Your consent%4$s.', 'wppf'), '<span class="font-semibold">', '</span>', '<a href="' . esc_url('#withdrawconsent') . '">', '</a>'); ?></li>

                <li><?php printf(__('%1$sPerformance of a Contract%2$s: We may process Your personal information when We believe it is necessary to fulfill Our contractual obligations to you, including providing Our Services or at Your request prior to entering into a contract with you.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sLegitimate Interests%2$s: We may process Your information when We believe it is reasonably necessary to achieve Our legitimate business interests and those interests do not outweigh Your interests and fundamental rights and freedoms. For example, We may process Your personal information for some of the purposes described in order to:', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li class="list-none">
                    <ul class="mb-5 ml-0 list-disc">
                        <li><?php _e('Send users information about special offers and discounts on Our products and services', 'wppf'); ?></li>

                        <li><?php _e('Develop and display personalized and relevant advertising content for Our users', 'wppf'); ?></li>

                        <li><?php _e('Analyze how Our Services are used so We can improve them to engage and retain users', 'wppf'); ?></li>

                        <li><?php _e('Support Our marketing activities', 'wppf'); ?></li>

                        <li><?php _e('Diagnose problems and/or prevent fraudulent activities', 'wppf'); ?></li>

                        <li class="pb-0"><?php _e('Understand how Our users use Our products and services so We can improve user experience', 'wppf'); ?></li>
                    </ul>
                </li>

                <li><?php printf(__('%1$sLegal Obligations%2$s: We may process Your information where We believe it is necessary for compliance with Our legal obligations, such as to cooperate with a law enforcement body or regulatory agency, exercise or defend Our legal rights, or disclose Your information as evidence in litigation in which We are involved.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sVital Interests%2$s: We may process Your information where We believe it is necessary to protect Your vital interests or the vital interests of a third party, such as situations involving potential threats to the safety of any person.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>
            </ul>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('If You Are Located In Canada, This Section Applies To You', 'wppf'); ?></h3>

            <p><?php printf(__('We may process Your information if you have given Us specific permission (i.e., express consent) to use Your personal information for a specific purpose, or in situations where Your permission can be inferred (i.e., implied consent). You can %1$swithdraw Your consent%2$s at any time.', 'wppf'), '<a href="' . esc_url('#withdrawconsent') . '">', '</a>'); ?></p>

            <p><?php _e('In some exceptional cases, We may be legally permitted under applicable law to process Your information without Your consent, including, for example:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('If collection is clearly in the interests of an individual and consent cannot be obtained in a timely way', 'wppf'); ?></li>

                <li><?php _e('For investigations and fraud detection and prevention.', 'wppf'); ?></li>

                <li><?php _e('For business transactions provided certain conditions are met.', 'wppf'); ?></li>

                <li><?php _e('If it is contained in a witness statement and the collection is necessary to assess, process, or settle an insurance claim.', 'wppf'); ?></li>

                <li><?php _e('For identifying injured, ill, or deceased persons and communicating with next of kin.', 'wppf'); ?></li>

                <li><?php _e('If We have reasonable grounds to believe an individual has been, is, or may be victim of financial abuse.', 'wppf'); ?></li>

                <li><?php _e('If it is reasonable to expect collection and use with consent would compromise the availability or the accuracy of the information and the collection is reasonable for purposes related to investigating a breach of an agreement or a contravention of the laws of Canada or a province.', 'wppf'); ?></li>

                <li><?php _e('If disclosure is required to comply with a subpoena, warrant, court order, or rules of the court relating to the production of records.', 'wppf'); ?></li>

                <li><?php _e('If it was produced by an individual in the course of their employment, business, or profession and the collection is consistent with the purposes for which the information was produced.', 'wppf'); ?></li>

                <li><?php _e('If the collection is solely for journalistic, artistic, or literary purposes.', 'wppf'); ?></li>

                <li><?php _e('If the information is publicly available and is specified by the regulations.', 'wppf'); ?></li>
            </ul>

            <h2 id="whoshare" class="mb-4 text-base font-semibold"><?php _e('4. WHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?', 'wppf'); ?></h2>

            <p><?php printf(__('%1$sIn Short%2$s: We may share information in specific situations described in this section and/or with the following categories of third parties.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('Vendors, Consultants, and Other Third-Party Service Providers', 'wppf'); ?></h3>

            <p><?php printf(__('We may share your data with third-party vendors, service providers, contractors, or agents ("%1$sthird parties%2$s") who perform services for us or on our behalf and require access to such information to do that work. We have contracts in place with our third parties, which are designed to help safeguard your personal information. This means that they cannot do anything with your personal information unless we have instructed them to do it. They will also not share your personal information with any organization apart from us. They also commit to protect the data they hold on our behalf and to retain it for the period we instruct. The categories of third parties we may share personal information with are as follows:', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Ad Networks', 'wppf'); ?></li>
                <li><?php _e('Affiliate Marketing Programs', 'wppf'); ?></li>
                <li><?php _e('Cloud Computing Services', 'wppf'); ?></li>
                <li><?php _e('Communication & Collaboration Tools', 'wppf'); ?></li>
                <li><?php _e('Data Analytics Services', 'wppf'); ?></li>
                <li><?php _e('Data Storage Service Providers', 'wppf'); ?></li>
                <li><?php _e('Finance & Accounting Tools', 'wppf'); ?></li>
                <li><?php _e('Government Entities', 'wppf'); ?></li>
                <li><?php _e('Order Fulfillment Service Providers', 'wppf'); ?></li>
                <li><?php _e('Payment Processors', 'wppf'); ?></li>
                <li><?php _e('Performance Monitoring Tools', 'wppf'); ?></li>
                <li><?php _e('Product Engineering & Design Tools', 'wppf'); ?></li>
                <li><?php _e('Retargeting Platforms', 'wppf'); ?></li>
                <li><?php _e('Sales & Marketing Tools', 'wppf'); ?></li>
                <li><?php _e('Social Networks', 'wppf'); ?></li>
                <li><?php _e('Testing Tools', 'wppf'); ?></li>
                <li><?php _e('User Account Registration & Authentication Services', 'wppf'); ?></li>
                <li><?php _e('Website Hosting Service Providers', 'wppf'); ?></li>
            </ul>

            <p><?php _e('We also may need to share Your personal information in the following situations:', 'wppf'); ?>
            </p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php printf(__('%1$sBusiness Transfers%2$s: We may share or transfer Your information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sWhen We use Google Maps Platform APIs%2$s: We may share Your information with certain Google Maps Platform APIs (e.g., Google Maps API, Places API). We use certain Google Maps Platform APIs to retrieve certain information when you make location-specific requests. This includes: Any information that is available for collecting; and other similar information. A list of what We use information for can be found in this section and in the previous section titled "%3$sHOW DO WE PROCESS YOUR INFORMATION?%4$s". We obtain and store on Your device ("cache") Your location. You may revoke Your consent anytime by contacting Us by using the contact details provided in the section titled CONTACT INFORMATION. The Google Maps Platform APIs that We use store and access cookies and other information on Your devices. If you are a user currently in the European Economic Area (EU countries, Iceland, Liechtenstein, and Norway) or the United Kingdom, please take a look at Our Cookie Notice at %5$s.', 'wppf'), '<span class="font-semibold">', '</span>', '<a href="' . esc_url('#infouse') . '">', '</a>', '<a href= "' . esc_url(path_join(get_site_url(), 'cookie-policy/')) . '">' . wp_kses_post(path_join(get_site_url(), 'cookie-policy/') . '</a>')); ?></li>

                <li><?php printf(__('%1$sAffiliates%2$s. We may share Your information with Our affiliates, in which case We will require those affiliates to honor this Policy. Affiliates include Our parent company and any subsidiaries, joint venture partners, or other companies that We control or that are under common control with Us.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sBusiness Partners%2$s: We may share Your information with Our business partners to offer you certain products, services, or promotions.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sOther Users%2$s: When you share personal information (for example, by posting comments, contributions, or other content to the Services) or otherwise interact with public areas of the Services, such personal information may be viewed by all users and may be publicly made available outside the Services in perpetuity. If you interact with other users of Our Services and register for Our Services through a social network (such as Facebook), Your contacts on the social network will see Your name, profile photo, and descriptions of Your activity. Similarly, other users will be able to view descriptions of Your activity, communicate with you within Our Services, and view Your profile.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>

                <li><?php printf(__('%1$sOffer Wall%2$s Our application(s) may display a third-party hosted "offer wall." Such an offer wall allows third-party advertisers to offer virtual currency, gifts, or other items to users in return for the acceptance and completion of an advertisement offer. Such an offer wall may appear in Our application(s) and be displayed to you based on certain data, such as Your geographic area or demographic information. When you click on an offer wall, you will be brought to an external website belonging to other persons and will leave Our application(s). A unique identifier, such as Your user ID, will be shared with the offer wall provider in order to prevent fraud and properly credit Your account with the relevant reward.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></li>
            </ul>

            <h2 id="3pWebsites" class="mb-4 text-base font-semibold"><?php _e('5. WHAT IS OUR STANCE ON THIRD-PARTY WEBSITES?', 'wppf'); ?></h2>

            <p><?php printf(__('%1$sIn Short%2$s: We are not responsible for the safety of any information that you share with third parties that We may link to or who advertise on Our Services, but are not affiliated with, Our Services.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php _e('The Services, including Our offer wall, may link to third-party websites, online services, or mobile applications and/or contain advertisements from third parties that are not affiliated with Us and which may link to other websites, services, or applications. Accordingly, We do not make any guarantee regarding any such third parties, and We will not be liable for any loss or damage caused by the use of such third-party websites, services, or applications. The inclusion of a link towards a third-party website, service, or application does not imply an endorsement by Us. We cannot guarantee the safety and privacy of data you provide to any third parties. Any data collected by third parties is not covered by this privacy notice. We are not responsible for the content or privacy and security practices and policies of any third parties, including other websites, services, or applications that may be linked to or from the Services. You should review the policies of such third parties and contact them directly to respond to Your questions.', 'wppf'); ?></p>

            <h2 id="cookies" class="mb-4 text-base font-semibold"><?php _e('6. DO WE USE COOKIES AND OTHER TRACKING TECHNOLOGIES?', 'wppf'); ?></h2>

            <p><?php printf(__('%1$sIn Short%2$s: We may use cookies and other tracking technologies to collect and store Your information.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php printf(__('We may use cookies and similar tracking technologies (like Web beacons and pixels) to access or store information. Specific information about how We use such technologies and how you can refuse certain cookies is set out in Our Cookie Policy at %s.', 'wppf'), '<a href= "' . esc_url(path_join(get_site_url(), 'cookie-policy/')) . '">' . wp_kses_post(path_join(get_site_url(), 'cookie-policy/') . '</a>')); ?></p>

            <h2 id="sociallogins" class="mb-4 text-base font-semibold"><?php _e('7. HOW DO WE HANDLE YOUR SOCIAL LOGINS?', 'wppf'); ?></h2>

            <p><?php printf(__('%1$sIn Short%2$s: If you choose to register or log in to Our Services using a social media account, We may have access to certain information about you.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php _e('Our Services offer you the ability to register and log in using Your third-party social media account details (like Your Facebook or Twitter logins). Where you choose to do this, We will receive certain profile information about you from Your social media provider. The profile information We receive may vary depending on the social media provider concerned, but will often include Your name, email address, friends list, and profile picture, as Well as other information you choose to make public on such a social media platform. If you log in using Facebook, We may also request access to other permissions related to Your account, such as Your friends, check-ins, and likes, and you may choose to grant or deny Us access to each individual permission.', 'wppf'); ?></p>

            <p><?php _e('We will use the information We receive only for the purposes that are described in this Policy or that are otherwise made clear to you on the relevant Services. Please note that We do not control, and are not responsible for, other uses of Your personal information by Your third-party social media provider. We recommend that you review their privacy notice to understand how they collect, use, and share Your personal information, and how you can set Your privacy preferences on their sites and apps.', 'wppf'); ?></p>

            <h2 id="intltransfers" class="mb-4 text-base font-semibold"><?php _e('8. IS YOUR INFORMATION TRANSFERRED INTERNATIONALLY?', 'wppf'); ?></h2>

            <p><?php printf(__('%1$sIn Short%2$s: We may transfer, store, and process Your information in countries other than Your own.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php printf(__('Our servers are located in the United States. If you are accessing Our Services from outside the United States, please be aware that Your information may be transferred to, stored, and processed by Us in Our facilities and by those third parties with whom We may share Your personal information (see the section titled "%1$sWHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?%2$s" above), for example, but not limited to Australia, Aruba, Armenia, Argentina, Bahamas, Austria, Barbados, Belgium, Colombia, Canada, Belize, Chile, Costa Rica, Denmark, Czech Republic, Ecuador, El Salvador, Egypt, Fiji, Finland, France, Germany, Greece, Dominican Republic, Hungary, India, Iceland, Ireland, Israel, Italy, Jamaica, Mexico, Netherlands, Nepal, New Zealand, Philippines, United Kingdom, SWeden, Switzerland, United States, and other countries.', 'wppf'), '<a href="' . esc_html('#whoshare') . '">', '</a>'); ?></p>

            <p><?php _e('If you are a resident in the European Economic Area (EEA) or United Kingdom (UK), then these countries may not necessarily have data protection laws or other similar laws as comprehensive as those in Your country. However, We will take measures to protect Your personal information in accordance with this Policy and applicable law.', 'wppf'); ?></p>

            <p><?php printf(__('%1$sEuropean Commission Standard Contractual Clauses:%2$s', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>


            <p><?php _e("We have implemented measures to protect Your personal information, including by using the European Commission's Standard Contractual Clauses for transfers of personal information between Our group companies and between Us and Our third-party providers. These clauses require all recipients to protect all personal information that they process originating from the EEA or UK in accordance with European data protection laws and regulations. Our Standard Contractual Clauses can be provided upon request. We have implemented similar appropriate safeguards with Our third-party service providers and partners and further details can be provided upon request.", 'wppf'); ?></p>

            <h2 id="inforetain" class="mb-4 text-base font-semibold"><?php _e('9. HOW LONG DO WE KEEP YOUR INFORMATION?', 'wppf'); ?></h2>

            <p><?php printf(__('%1$sIn Short%2$s: We keep Your information for as long as necessary to fulfill the purposes outlined in this privacy notice unless otherwise required by law.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php _e("We will only keep Your personal information for as long as it is necessary for the purposes set out in this privacy notice, unless a longer retention period is required or permitted by law (such as tax, accounting, or other legal requirements). No purpose in this notice will require Us keeping Your personal information for longer than one hundred twenty (120) months past the start of the idle period of the User's account.", 'wppf'); ?></p>

            <p><?php _e('When We have no ongoing legitimate business need to process Your personal information, We will either delete or anonymize such information, or, if this is not possible (for example, because Your personal information has been stored in backup archives), then We will securely store Your personal information and isolate it from any further processing until deletion is possible.', 'wppf'); ?></p>

            <h2 id="infosafe" class="mb-4 text-base font-semibold"><?php _e('10. HOW DO WE KEEP YOUR INFORMATION SAFE?', 'wppf'); ?></h2>

            <p><?php printf(__('%1$sIn Short%2$s: We aim to protect Your personal information through a system of organizational and technical security measures.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php _e('We have implemented reasonable technical and organizational security measures designed to protect the security of any personal information We process. However, despite Our safeguards and efforts to secure Your information, no electronic transmission over the Internet or information storage technology can be guaranteed to be 100% secure, so We cannot promise or guarantee that hackers, cybercriminals, or other unauthorized third parties will not be able to defeat Our security and improperly collect, access, steal, or modify Your information. Although We will do Our best to protect Your personal information, transmission of personal information to and from Our Services is at Your own risk. You should only access the Services within a secure environment.', 'wppf'); ?></p>

            <h2 id="infominors" class="mb-4 text-base font-semibold"><?php _e('11. DO WE COLLECT INFORMATION FROM MINORS?', 'wppf'); ?></h2>

            <p><?php printf(__('%1$sIn Short%2$s: We do not knowingly collect data from or market to children under 18 years of age.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php printf(__('We do not knowingly solicit data from or market to children under 18 years of age. By using the Services, you represent that you are at least 18 or that you are the parent or guardian of such a minor and consent to such minor dependent’s use of the Services. If We learn that personal information from users less than 18 years of age has been collected, We will deactivate the account and take reasonable measures to promptly delete such data from Our records. If you become aware of any data We may have collected from children under age 18, please contact Us by using the section "%1$sHOW CAN YOU CONTACT US ABOUT THIS NOTICE?%2$s".', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></p>

            <h2 id="privacyrights" class="mb-4 text-base font-semibold"><?php _e('12. WHAT ARE YOUR PRIVACY RIGHTS?', 'wppf'); ?></h2>

            <p><?php printf(__('%1$sIn Short%2$s: In some regions, such as the European Economic Area (EEA), United Kingdom (UK), and Canada, you have rights that allow you greater access to and control over Your personal information. You may review, change, or terminate Your account at any time. If you terminate Your account you may loose access to Services and products.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php printf(__('In some regions (like the EEA, UK, and Canada), you have certain rights under applicable data protection laws. These may include the right (i) to request access and obtain a copy of Your personal information, (ii) to request rectification or erasure; (iii) to restrict the processing of Your personal information; and (iv) if applicable, to data portability. In certain circumstances, you may also have the right to object to the processing of Your personal information. You can make such a request by contacting Us by using the section "%1$sHOW CAN YOU CONTACT US ABOUT THIS NOTICE?%2$s".', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></p>

            <p><?php printf(__('If you are located in the EEA or UK and you believe We are unlawfully processing Your personal information, you also have the right to complain to Your %1$sMember State data protection authority%3$s or %2$sUK data protection authority%3$s.', 'wppf'), '<a href="' . esc_url('https://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm') . '" target="_blank">', '<a href="' . esc_url('https://ico.org.uk/make-a-complaint/data-protection-complaints/data-protection-complaints/') . '" target="_blank">', '</a>'); ?></p>

            <p><?php printf(__('If you are located in Switzerland, you may contact the %1$sFederal Data Protection and Information Commissioner%2$s.', 'wppf'), '<a href="' . esc_url('https://www.edoeb.admin.ch/edoeb/en/home.html') . '" target="_blank">', '</a>'); ?></p>

            <p id="withdrawconsent"><?php printf(__('%1$sWithdrawing Your Consent%2$s: If We are relying on Your consent to process Your personal information, which may be express and/or implied consent depending on the applicable law, you have the right to withdraw Your consent at any time. You can withdraw Your consent at any time by contacting Us by using the section "%3$sHOW CAN YOU CONTACT US ABOUT THIS NOTICE?%4$s".', 'wppf'), '<span class="font-semibold">', '</span>', '<a href="' . esc_html('#contact') . '">', '</a>'); ?></p>

            <p><?php _e('Whoever, please note that this will not affect the lawfulness of the processing before its withdrawal nor, when applicable law allows, will it affect the processing of Your personal information conducted in reliance on lawful processing grounds other than consent.', 'wppf'); ?></p>

            <p><?php printf(__('%1$sOpting Out Of Marketing And Promotional Communications%2$s: You can unsubscribe from Our marketing and promotional communications at any time by clicking on the unsubscribe link in the emails that We send to the SMS messages that We send, or by contacting Us by using the section "%3$sHOW CAN YOU CONTACT US ABOUT THIS NOTICE?%4$s". You will then be removed from the marketing lists. However, We may still communicate with you — for example, to send you service-related messages that are necessary for the administration and use of Your account, to respond to service requests, or for other non-marketing purposes.', 'wppf'), '<span class="font-semibold">', '</span>', '<a href="' . esc_html('#contact') . '">', '</a>'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('Account Information', 'wppf'); ?></h3>

            <p><?php _e('If you would at any time like to review or change the information in Your account or terminate Your account, you can:', 'wppf'); ?></p>

            <ul class="mb-5 ml-0 list-disc">
                <li><?php _e('Log in to Your account settings and update Your User account.', 'wppf'); ?></li>
            </ul>

            <p><?php _e('Upon Your request to terminate Your account, We will deactivate or delete Your account and information from Our active databases. However, We may retain some information in Our files to prevent fraud, troubleshoot problems, assist with any investigations, enforce Our legal terms and/or comply with applicable legal requirements. If you terminate Your account you may loose access to Services and products.', 'wppf'); ?></p>

            <p><?php printf(__('%1$sCookies And Similar Technologies%2$s: Most Web browsers are set to accept cookies by default. If you prefer, you can usually choose to set Your browser to remove cookies and to reject cookies. If you choose to remove cookies or reject cookies, this could affect certain features or services of Our Services. You may also %3$sopt out of interest-based advertising by advertisers%4$s on Our Services. For further information, please see Our Cookie Policy at %5$s.', 'wppf'), '<span class="font-semibold">', '</span>', '<a href="' . esc_url('https://ec.europa.eu/justice/data-protection/bodies/authorities/index_en.htm') . '" target="_blank">', '</a>', '<a href= "' . esc_url(path_join(get_site_url(), 'cookie-policy/')) . '">' . wp_kses_post(path_join(get_site_url(), 'cookie-policy/') . '</a>')); ?></p>

            <h2 id="DNT" class="mb-4 text-base font-semibold"><?php _e('13. CONTROLS FOR DO-NOT-TRACK FEATURES', 'wppf'); ?></h2>

            <p><?php _e('Most Web browsers and some mobile operating systems and mobile applications include a Do-Not-Track ("DNT") feature or setting you can activate to signal Your privacy preference not to have data about Your online browsing activities monitored and collected. At this stage no uniform technology standard for recognizing and implementing DNT signals has been finalized. As such, We do not currently respond to DNT browser signals or any other mechanism that automatically communicates Your choice not to be tracked online. If a standard for online tracking is adopted that We must follow in the future, We will inform you about that practice in a revised version of this privacy notice.', 'wppf'); ?></p>

            <h2 id="calif" class="mb-4 text-base font-semibold"><?php _e('14. DO CALIFORNIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?', 'wppf'); ?></h2>

            <p><?php printf(__('%1$sIn Short%2$s: Yes, if you are a resident of California, you are granted specific rights regarding access to your personal information.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <p><?php _e('California Civil Code Section 1798.83, also known as the "Shine The Light" law, permits our users who are California residents to request and obtain from us, once a year and free of charge, information about categories of personal information (if any) we disclosed to third parties for direct marketing purposes and the names and addresses of all third parties with which we shared personal information in the immediately preceding calendar year. If you are a California resident and would like to make such a request, please submit your request in writing to us using the contact information provided below.', 'wppf'); ?></p>

            <p><?php _e('If you are under 18 years of age, reside in California, and have a registered account with Services, you have the right to request removal of unwanted data that you publicly post on the Services. To request removal of such data, please contact us using the contact information provided below and include the email address associated with your account and a statement that you reside in California. We will make sure the data is not publicly displayed on the Services, but please be aware that the data may not be completely or comprehensively removed from all our systems (e.g., backups, etc.).', 'wppf'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('CCPA Privacy Notice', 'wppf'); ?></h3>

            <p><?php _e('The California Code of Regulations defines a "resident" as:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-none">
                <li><?php _e('(1) every individual who is in the State of California for other than a temporary or transitory purpose and', 'wppf'); ?></li>

                <li><?php _e('(2) every individual who is domiciled in the State of California who is outside the State of California for a temporary or transitory purpose', 'wppf'); ?></li>
            </ul>

            <p><?php _e('All other individuals are defined as "non-residents."', 'wppf'); ?></p>

            <p><?php _e('If this definition of "resident" applies to you, we must adhere to certain rights and obligations regarding your personal information.', 'wppf'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('What categories of personal information do we collect?', 'wppf'); ?></h3>

            <p><?php _e('We have collected the following categories of personal information in the past twelve (12) months:', 'wppf'); ?></p>

            <div class="grid grid-cols-3 w-full mb-6">
                <div class="border border-gray-500 border-r-0 border-b-0 px-3 py-1">
                    <?php _e('Category', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 border-r-0 border-b-0 px-3 py-1">
                    <?php _e('Examples', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 text-center border-b-0 px-3 py-1">
                    <?php _e('Collected', 'wppf'); ?>
                </div>

                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('A. Identifiers', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('Contact details, such as real name, alias, postal address, telephone or mobile contact number, unique personal identifier, online identifier, Internet Protocol address, email address, and account name', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 text-center border-b-0 p-4">
                    <?php _e('YES', 'wppf'); ?>
                </div>

                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('B. Personal information categories listed in the California Customer Records statute', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('Name, contact information, education, employment, employment history, and financial information', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 text-center border-b-0 p-4">
                    <?php _e('YES', 'wppf'); ?>
                </div>

                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('C. Protected classification characteristics under California or federal law', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('Gender and date of birth', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 text-center border-b-0 p-4">
                    <?php _e('YES', 'wppf'); ?>
                </div>

                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('D. Commercial information', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('Transaction information, purchase history, financial details, and payment information', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 text-center border-b-0 p-4">
                    <?php _e('YES', 'wppf'); ?>
                </div>

                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('E. Biometric information', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('Fingerprints and voiceprints', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 text-center border-b-0 p-4">
                    <?php _e('YES', 'wppf'); ?>
                </div>

                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('F. Internet or other similar network activity', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('Browsing history, search history, online behavior, interest data, and interactions with our and other websites, applications, systems, and advertisements', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 text-center border-b-0 p-4">
                    <?php _e('YES', 'wppf'); ?>
                </div>

                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('G. Geolocation data', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('Device location', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 text-center border-b-0 p-4">
                    <?php _e('YES', 'wppf'); ?>
                </div>

                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('H. Audio, electronic, visual, thermal, olfactory, or similar information', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('Images and audio, video or call recordings created in connection with our business activities', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 text-center border-b-0 p-4">
                    <?php _e('YES', 'wppf'); ?>
                </div>

                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('I. Professional or employment-related information', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('Business contact details in order to provide you our Services at a business level or job title, work history, and professional qualifications if you apply for a job with us', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 text-center border-b-0 p-4">
                    <?php _e('YES', 'wppf'); ?>
                </div>

                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('J. Education Information', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('Student records and directory information', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 text-center border-b-0 p-4">
                    <?php _e('YES', 'wppf'); ?>
                </div>

                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('K. Inferences drawn from other personal information', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 border-r-0 border-b-0 p-4">
                    <?php _e('Inferences drawn from any of the collected personal information listed above to create a profile or summary about, for example, an individual’s preferences and characteristics', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 text-center border-b-0 p-4">
                    <?php _e('YES', 'wppf'); ?>
                </div>

                <div class="border border-gray-500 border-r-0 p-4">
                    <?php _e('L. Sensitive Personal Information	', 'wppf'); ?>
                </div>
                <div class="border border-gray-500 border-r-0 p-4">
                </div>
                <div class="border border-gray-500 text-center p-4">
                    <?php _e('NO', 'wppf'); ?>
                </div>
            </div>

            <p><?php _e('We will use and retain the collected personal information as needed to provide the Services or for:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Category A - one hundred twenty (120) months', 'wppf'); ?></li>
                <li><?php _e('Category B - one hundred twenty (120) months', 'wppf'); ?></li>
                <li><?php _e('Category C - one hundred twenty (120) months', 'wppf'); ?></li>
                <li><?php _e('Category D - one hundred twenty (120) months', 'wppf'); ?></li>
                <li><?php _e('Category E - one hundred twenty (120) months', 'wppf'); ?></li>
                <li><?php _e('Category F - one hundred twenty (120) months', 'wppf'); ?></li>
                <li><?php _e('Category G - one hundred twenty (120) months', 'wppf'); ?></li>
                <li><?php _e('Category H - one hundred twenty (120) months', 'wppf'); ?></li>
                <li><?php _e('Category I - one hundred twenty (120) months', 'wppf'); ?></li>
                <li><?php _e('Category J - one hundred twenty (120) months', 'wppf'); ?></li>
                <li><?php _e('Category K - one hundred twenty (120) months', 'wppf'); ?></li>
            </ul>

            <p><?php _e('We may also collect other personal information outside of these categories through instances where you interact with us in person, online, or by phone or mail in the context of:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Receiving help through Our customer support channels;', 'wppf'); ?></li>
                <li><?php _e('Participation in customer surveys or contests; and', 'wppf'); ?></li>
                <li><?php _e('Facilitation in the delivery of Our Services and to respond to Your inquiries.', 'wppf'); ?></li>
            </ul>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('How Do We And Share Your Personal Information?', 'wppf'); ?></h3>

            <p><?php printf(__('Learn about how We use Your personal information in the section, "%1$sHOW DO WE PROCESS YOUR INFORMATION?%2$s"', 'wppf'), '<a href="' . esc_html('#infouse') . '">', '</a>'); ?></p>

            <p><?php _e('We collect and share Your personal information through:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Targeting cookies/Marketing cookies', 'wppf'); ?></li>
                <li><?php _e('Social media cookies', 'wppf'); ?></li>
                <li><?php _e('Beacons/Pixels/Tags', 'wppf'); ?></li>
                <li><?php _e('Click redirects', 'wppf'); ?></li>
                <li><?php _e('We use social media features such as a "Like" button, and widgets, such as a "Share" button, in Us Services. Such features may process Your Internet Protocol (IP) address and track which page you are visiting on Us Website. We may place a cookie to enable the feature to work correctly. If you are logged in on a certain social media platform and you interact with a widget or button belonging to that social media platform, this information may be recorded to Your profile of such social media platform. To avoid this, you should log out from that social media platform before accessing or using the Services. Social media features and widgets may be hosted by a third party or hosted directly on Us Services. Your interactions with these features are governed by the privacy notices of the companies that provide them. By clicking on one of these buttons, you agree to the use of this plugin and consequently the transfer of personal information to the corresponding social media service. We have no control over the essence and extent of these transmitted data or their additional processing.', 'wppf'); ?></li>
            </ul>

            <p><?php printf(__('More information about Our data collection and sharing practices can be found in this Policy and Our Cookie Notice at  %1$s.', 'wppf'), '<a href="' . esc_url(path_join(get_site_url(), 'cookie-policy/')) . '">' . wp_kses_post(path_join(get_site_url(), 'cookie-policy/') . '</a>')); ?></p>

            <p><?php _e('You can opt out from the selling or sharing of your personal information by disabling cookies in Cookie Preference Settings and clicking on the Do Not Sell or Share My Personal Information link on our homepage.', 'wppf'); ?></p>

            <p><?php _e('If you are using an authorized agent to exercise your right to opt out we may deny a request if the authorized agent does not submit proof that they have been validly authorized to act on your behalf.', 'wppf'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('Will Your Information Be Shared With Anyone Else?', 'wppf'); ?></h3>

            <p><?php _e('We may disclose your personal information with our service providers pursuant to a written contract between us and each service provider. Each service provider is a for-profit entity that processes the information on our behalf, following the same strict privacy protection obligations mandated by the CCPA.', 'wppf'); ?></p>

            <p><?php _e('We may use your personal information for our own business purposes, such as for undertaking internal research for technological development and demonstration. This is not considered to be "selling" of your personal information.', 'wppf'); ?></p>

            <p><?php _e('We have disclosed the following categories of personal information to third parties for a business or commercial purpose in the preceding twelve (12) months:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Category A. Identifiers, such as contact details like your real name, alias, postal address, telephone or mobile contact number, unique personal identifier, online identifier, Internet Protocol address, email address, and account name.', 'wppf'); ?></li>
                <li><?php _e('Category B. Personal information, as defined in the California Customer Records law, such as your name, contact information, education, employment, employment history, and financial information.', 'wppf'); ?></li>
                <li><?php _e('Category C. Characteristics of protected classifications under California or federal law, such as gender or date of birth.', 'wppf'); ?></li>
                <li><?php _e('Category D. Commercial information, such as transaction information, purchase history, financial details, and payment information.', 'wppf'); ?></li>
                <li><?php _e('Category E. Biometric information, such as fingerprints and voiceprints.', 'wppf'); ?></li>
                <li><?php _e('Category F. Internet or other electronic network activity information, such as browsing history, search history, online behavior, interest data, and interactions with our and other websites, applications, systems, and advertisements.', 'wppf'); ?></li>
                <li><?php _e('Category G. Geolocation data, such as device location.', 'wppf'); ?></li>
                <li><?php _e('Category H. Audio, electronic, visual, and similar information, such as images and audio, video, or call recordings created in connection with our business activities.', 'wppf'); ?></li>
                <li><?php _e('Category I. Professional or employment-related information, such as business contact details in order to provide you our Services at a business level or job title, work history, and professional qualifications if you apply for a job with us.', 'wppf'); ?></li>
                <li><?php _e('Category J. Education information, such as student records and directory information.', 'wppf'); ?></li>
                <li><?php _e('Category K. Inferences drawn from any of the personal information listed above to create a profile or summary about, for example, an individual preferences and characteristics.', 'wppf'); ?></li>
            </ul>

            <p><?php printf(__('The categories of third parties to whom We disclosed personal information for a business or commercial purpose can be found in the section titled "%1$sWHEN AND WITH WHOM DO WE SHARE YOUR PERSONAL INFORMATION?%2$s"', 'wppf'), '<a href="' . esc_url('#whoshare') . '">', '</a>'); ?></p>

            <p><?php _e('We have sold or shared the following categories of personal information to third parties in the preceding twelve (12) months:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Category A. Identifiers, such as contact details, like your real name, alias, postal address, telephone or mobile contact number, unique personal identifier, online identifier, Internet Protocol address, email address, and account name.', 'wppf'); ?></li>
                <li><?php _e('Category B. Personal information, as defined in the California Customer Records law, such as your name, contact information, education, employment, employment history, and financial information.', 'wppf'); ?></li>
                <li><?php _e('Category C. Characteristics of protected classifications under California or federal law, such as gender or date of birth.', 'wppf'); ?></li>
                <li><?php _e('Category D. Commercial information, such as transaction information, purchase history, financial details, and payment information.', 'wppf'); ?></li>
                <li><?php _e('Category E. Biometric information, such as fingerprints and voiceprints.', 'wppf'); ?></li>
                <li><?php _e('Category F. Internet or other electronic network activity information, such as browsing history, search history, online behavior, interest data, and interactions with our and other websites, applications, systems, and advertisements.', 'wppf'); ?></li>
                <li><?php _e('Category G. Geolocation data, such as device location.', 'wppf'); ?></li>
                <li><?php _e('Category H. Audio, electronic, visual, and similar information, such as images and audio, video or call recordings created in connection with our business activities.', 'wppf'); ?></li>
                <li><?php _e('Category I. Professional or employment-related information, such as business contact details in order to provide you our Services at a business level or job title, work history, and professional qualifications if you apply for a job with us.', 'wppf'); ?></li>
                <li><?php _e('Category J. Education information, such as student records and directory information.', 'wppf'); ?></li>
                <li><?php _e('Category K. Inferences drawn from any of the personal information listed above to create a profile or summary about, for example, an individual preferences and characteristics.', 'wppf'); ?></li>
            </ul>

            <p><?php _e('The categories of third parties to whom We sold personal information are:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Ad Networks', 'wppf'); ?></li>
                <li><?php _e('Affiliate Marketing Programs', 'wppf'); ?></li>
                <li><?php _e('Data Analytics Services', 'wppf'); ?></li>
                <li><?php _e('Retargeting Platforms', 'wppf'); ?></li>
                <li><?php _e('Social Networks', 'wppf'); ?></li>
                <li><?php _e('User Account Registration & Authentication Services', 'wppf'); ?></li>
                <li><?php _e('Prospective buyers', 'wppf'); ?></li>
                <li><?php _e('Business escrow companies', 'wppf'); ?></li>
            </ul>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('Your Rights With Respect To Your Personal Data', 'wppf'); ?></h3>

            <p><?php printf(__('%1$sRight To Request Deletion Of The Data — Request to Delete%2$s', 'wppf'), '<span class="underline underline-offset-4">', '</span>'); ?></p>

            <p><?php _e('You can ask for the deletion of Your personal information. If you ask Us to delete Your personal information, We will respect Your request and delete Your personal information, subject to certain exceptions provided by law, such as (but not limited to) the exercise by another consumer of his or her right to free speech, Our compliance requirements resulting from a legal obligation, or any processing that may be required to protect against illegal activities.', 'wppf'); ?></p>

            <p><?php printf(__('%1$sRight To Be Informed — Request to Know%2$s', 'wppf'), '<span class="underline underline-offset-4">', '</span>'); ?></p>

            <p><?php _e('Depending on the circumstances, you have a right to know:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('whether We collect and use Your personal information;', 'wppf'); ?></li>
                <li><?php _e('the categories of personal information that We collect;', 'wppf'); ?></li>
                <li><?php _e('the purposes for which the collected personal information is used;', 'wppf'); ?></li>
                <li><?php _e('whether We sell or share personal information to third parties;', 'wppf'); ?></li>
                <li><?php _e('the categories of personal information that We sold, shared, or disclosed for a business purpose;', 'wppf'); ?></li>
                <li><?php _e('the categories of third parties to whom the personal information was sold, shared, or disclosed for a business purpose;', 'wppf'); ?></li>
                <li><?php _e('the business or commercial purpose for collecting, selling, or sharing personal information; and', 'wppf'); ?></li>
                <li><?php _e('the specific pieces of personal information We collected about you.', 'wppf'); ?></li>
            </ul>

            <p><?php _e('In accordance with applicable law, We are not obligated to provide or delete consumer information that is de-identified in response to a consumer request or to re-identify individual data to verify a consumer request.', 'wppf'); ?></p>

            <p><?php printf(__('%1$sRight To Non-Discrimination For The Exercise Of A Consumer’s Privacy Rights%2$s', 'wppf'), '<span class="underline underline-offset-4">', '</span>'); ?></p>

            <p><?php _e('We will not discriminate against you if you exercise Your privacy rights.', 'wppf'); ?></p>

            <p><?php printf(__('%1$sRight To Limit Use and Disclosure of Sensitive Personal Information%2$s', 'wppf'), '<span class="underline underline-offset-4">', '</span>'); ?></p>

            <p><?php _e("We do not process consumer's sensitive personal information.", 'wppf'); ?></p>

            <p><?php printf(__('%1$sVerification Process%2$s', 'wppf'), '<span class="underline underline-offset-4">', '</span>'); ?></p>

            <p><?php _e('Upon receiving Your request, We will need to verify Your identity to determine you are the same person about whom We have the information in Our system. These verification efforts require Us to ask you to provide information so that We can match it with information you have previously provided Us. For instance, depending on the type of request you submit, We may ask you to provide certain information so that We can match the information you provide with the information We already have on file, or We may contact you through a communication method (e.g., phone or email) that you have previously provided to Us. We may also use other verification methods as the circumstances dictate.', 'wppf'); ?></p>

            <p><?php _e('We will only use personal information provided in Your request to verify Your identity or authority to make the request. To the extent possible, We will avoid requesting additional information from you for the purposes of verification. However, if We cannot verify Your identity from the information already maintained by Us, We may request that you provide additional information for the purposes of verifying Your identity and for security or fraud-prevention purposes. We will delete such additionally provided information as soon as We finish verifying you.', 'wppf'); ?></p>

            <p><?php printf(__('%1$sOther Privacy Rights%2$s', 'wppf'), '<span class="underline underline-offset-4">', '</span>'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('You may object to the processing of Your personal information.', 'wppf'); ?></li>
                <li><?php _e('You may request correction of Your personal data if it is incorrect or no longer relevant, or ask to restrict the processing of the information.', 'wppf'); ?></li>
                <li><?php _e('You can designate an authorized agent to make a request under the CCPA on Your behalf. We may deny a request from an authorized agent that does not submit proof that they have been validly authorized to act on Your behalf in accordance with the CCPA.', 'wppf'); ?></li>
            </ul>

            <p><?php _e('You can opt out from the selling or sharing of Your personal information by disabling cookies in Cookie Preference Settings and clicking on the Do Not Sell or Share My Personal Information link on Us homepage.', 'wppf'); ?></p>

            <p><?php _e('To exercise these rights, you can contact Us by usign the section CONTACT INFORMATION. If you have a complaint about how We handle Your data, We would like to hear from you.', 'wppf'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('Financial Incentives', 'wppf'); ?></h3>

            <p><?php _e('"Financial incentive" means a program, benefit, or other offering, including payments to consumers as compensation, for the disclosure, deletion, sale, or sharing of personal information.', 'wppf'); ?></p>

            <p><?php _e('The law permits financial incentives or a price or service difference if it is reasonably related to the value of the consumer’s data. A business must be able to explain how the financial incentive or price or service difference is reasonably related to the value of the consumer’s data. The explanation must include:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('a good-faith estimate of the value of the consumer’s data that forms the basis for offering the financial incentive or price or service difference; and', 'wppf'); ?></li>
                <li><?php _e('a description of the method the business used to calculate the value of the consumer’s data.', 'wppf'); ?></li>
            </ul>

            <p><?php _e('We may decide to offer a financial incentive (e.g., price or service difference) in exchange for the retention, sale, or sharing of a consumer’s personal information.', 'wppf'); ?></p>

            <p><?php _e('If We decide to offer a financial incentive, We will notify you of such financial incentive and explain the price difference, as Well as material terms of the financial incentive or price of service difference, including the categories of personal information that are implicated by the financial incentive or price or service difference.', 'wppf'); ?></p>

            <p><?php _e('If you choose to participate in the financial incentive you can withdraw from the financial incentive at any time by contacting us by using the section CONTACT INFORMATION.', 'wppf'); ?></p>

            <h2 id="virginia" class="mb-4 text-base font-semibold"><?php _e('15. DO VIRGINIA RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?', 'wppf'); ?></h2>

            <p><?php printf(__('%1$sIn Short%2$s: Yes, if you are a resident of Virginia, you may be granted specific rights regarding access to and use of your personal information.', 'wppf'), '<span class="font-semibold">', '</span>'); ?></p>

            <h3 class="mb-4 text-sm font-semibold italic"><?php _e('Virginia CDPA Privacy Notice', 'wppf'); ?></h3>

            <p><?php _e('Under the Virginia Consumer Data Protection Act (CDPA):', 'wppf'); ?></p>

            <p><?php _e('"Consumer" means a natural person who is a resident of the CommonWealth acting only in an individual or household context. It does not include a natural person acting in a commercial or employment context.', 'wppf'); ?></p>

            <p><?php _e('"Personal data" means any information that is linked or reasonably linkable to an identified or identifiable natural person. "Personal data" does not include de-identified data or publicly available information.', 'wppf'); ?></p>

            <p><?php _e('"Sale of personal data" means the exchange of personal data for monetary consideration.', 'wppf'); ?></p>

            <p><?php _e('If this definition "consumer" applies to you, We must adhere to certain rights and obligations regarding Your personal data.', 'wppf'); ?></p>

            <p><?php _e('The information we collect, use, and disclose about you will vary depending on how you interact with WPPF LLC. and our Services. To find out more, please visit the following links:', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><a href="' . esc_html('#infocollect') . '"><?php _e('Personal data we collect', 'wppf'); ?></a></li>
                <li><a href="' . esc_html('#infouse') . '"><a href="' . esc_html('#infocollect') . '"><?php _e('How we use your personal data', 'wppf'); ?></a></li>
                <li><a href="' . esc_html('#whoshare') . '"><a href="' . esc_html('#infocollect') . '"><?php _e('When and with whom we share your personal data', 'wppf'); ?></a></li>
            </ul>

            <p><?php printf(__('%1$sYour Rights With Respect To Your Personal Data%2$s', 'wppf'), '<span class="underline underline-offset-4">', '</span>'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Right to be informed whether or not We are processing Your personal data', 'wppf'); ?></li>
                <li><?php _e('Right to access Your personal data', 'wppf'); ?></li>
                <li><?php _e('Right to correct inaccuracies in Your personal data', 'wppf'); ?></li>
                <li><?php _e('Right to request deletion of Your personal data', 'wppf'); ?></li>
                <li><?php _e('Right to obtain a copy of the personal data you previously shared with Us', 'wppf'); ?></li>
                <li><?php _e('Right to opt out of the processing of Your personal data if it is used for targeted advertising, the sale of personal data, or profiling in furtherance of decisions that produce legal or similarly significant effects ("profiling")', 'wppf'); ?></li>
            </ul>

            <p><?php _e('We sell personal data to third parties or process personal data for targeted advertising. Please see the following section to find out how Your can opt out from further selling or sharing of Your personal data for targeted advertising or profiling purposes.', 'wppf'); ?></p>

            <p><?php printf(__('%1$sExercise Your Rights Provided Under The Virginia VCDPA%2$s', 'wppf'), '<span class="underline underline-offset-4">', '</span>'); ?></p>

            <p><?php printf(__('More information about our data collection and sharing practices can be found in this Policy and Our %1$sCookie Policy%2$s located at %3$s.', 'wppf'), '<span class="font-semibold">', '</span>', '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/cookie-policy/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/cookie-policy/')) . '</a>'); ?></p>

            <p><?php printf(__('You can opt out from the selling of Your personal data, targeted advertising, or profiling by disabling cookies in Cookie Preference Settings. You may contact Us by using the section %1$sCONTACT INFORMATION%2$s.', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></p>

            <p><?php _e('If you are using an authorized agent to exercise Your rights, We may deny a request if the authorized agent does not submit proof that they have been validly authorized to act on Your behalf.', 'wppf'); ?></p>

            <p><?php printf(__('%1$sVerification Process%2$s', 'wppf'), '<span class="underline underline-offset-4">', '</span>'); ?></p>

            <p><?php _e("We may request that you provide additional information reasonably necessary to verify you and Your consumer's request. If you submit the request through an authorized agent, We may need to collect additional information to verify Your identity before processing Your request.", 'wppf'); ?></p>

            <p><?php _e('Upon receiving Your request, We will respond without undue delay, but in all cases, within forty-five (45) days of receipt. The response period may be extended once by forty-five (45) additional days when reasonably necessary. We will inform you of any such extension within the initial 45-day response period, together with the reason for the extension.', 'wppf'); ?></p>

            <p><?php printf(__('%1$sRight To Appeal%2$s', 'wppf'), '<span class="underline underline-offset-4">', '</span>'); ?></p>

            <p><?php printf(__('If We decline to take action regarding Your request, We will inform you of Us decision and reasoning behind it. If you wish to appeal Us decision, please use the section %1$sCONTACT INFORMATION%2$s. Within sixty (60) days of receipt of an appeal, We will inform you in writing of any action taken or not taken in response to the appeal, including a written explanation of the reasons for the decisions.', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></p>

            <h2 id="colorado" class="mb-4 text-base font-semibold"><?php _e('16. DO COLORADO RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?', 'wppf'); ?></h2>

            <p><?php _e('This section applies only to Colorado residents. Under the Colorado Privacy Act (CPA), you have the rights listed below. However, these rights are not absolute, and in certain cases We may decline Your request as permitted by law.', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Right to be informed whether or not We are processing Your personal data', 'wppf'); ?></li>
                <li><?php _e('Right to access Your personal data', 'wppf'); ?></li>
                <li><?php _e('Right to correct inaccuracies in Your personal data', 'wppf'); ?></li>
                <li><?php _e('Right to request deletion of Your personal data', 'wppf'); ?></li>
                <li><?php _e('Right to obtain a copy of the personal data you previously shared with Us', 'wppf'); ?></li>
                <li><?php _e('Right to opt out of the processing of Your personal data if it is used for targeted advertising, the sale of personal data, or profiling in furtherance of decisions that produce legal or similarly significant effects ("profiling")', 'wppf'); ?></li>
            </ul>

            <p><?php printf(__('We sell personal data to third parties or process personal data for targeted advertising. You can opt out from the selling of Your personal data, targeted advertising, or profiling by disabling cookies in Cookie Preference Settings. To submit a request to exercise any of the other rights described above, please use the section %1$sCONTACT INFORMATION%2$s.', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></p>

            <p><?php printf(__('If We decline to take action regarding Your request and you wish to appeal Our decision, please use the section %1$sCONTACT INFORMATION%2$s. Within forty-five (45) days of receipt of an appeal, We will inform you in writing of any action taken or not taken in response to the appeal, including a written explanation of the reasons for the decisions.', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></p>

            <h2 id="connecticut" class="mb-4 text-base font-semibold"><?php _e('16. DO CONNECTICUT RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?', 'wppf'); ?></h2>

            <p><?php _e('This section applies only to Connecticut residents. Under the Connecticut Data Privacy Act (CTDPA), you have the rights listed below. However, these rights are not absolute, and in certain cases We may decline Your request as permitted by law.', 'wppf'); ?></p>

            <ul class="mb-4 ml-0 list-disc">
                <li><?php _e('Right to be informed whether or not We are processing Your personal data', 'wppf'); ?></li>
                <li><?php _e('Right to access Your personal data', 'wppf'); ?></li>
                <li><?php _e('Right to correct inaccuracies in Your personal data', 'wppf'); ?></li>
                <li><?php _e('Right to request deletion of Your personal data', 'wppf'); ?></li>
                <li><?php _e('Right to obtain a copy of the personal data you previously shared with Us', 'wppf'); ?></li>
                <li><?php _e('Right to opt out of the processing of Your personal data if it is used for targeted advertising, the sale of personal data, or profiling in furtherance of decisions that produce legal or similarly significant effects ("profiling")', 'wppf'); ?></li>
            </ul>

            <p><?php printf(__('We sell personal data to third parties or process personal data for targeted advertising. You can opt out from the selling of Your personal data, targeted advertising, or profiling by disabling cookies in Cookie Preference Settings. To submit a request to exercise any of the other rights described above, please use the section %1$sCONTACT INFORMATION%2$s.', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></p>

            <p><?php printf(__('If We decline to take action regarding Your request and you wish to appeal Our decision, please use the section %1$sCONTACT INFORMATION%2$s. Within sixty (60) days of receipt of an appeal, We will inform you in writing of any action taken or not taken in response to the appeal, including a written explanation of the reasons for the decisions.', 'wppf'), '<a href="' . esc_html('#contact') . '">', '</a>'); ?></p>

            <h2 id="utah" class="mb-4 text-base font-semibold"><?php _e('16. DO UTAH RESIDENTS HAVE SPECIFIC PRIVACY RIGHTS?', 'wppf'); ?></h2>

            <p><?php _e('This section applies only to Utah residents. Under the Consumer Privacy Act (UCPA), you have the rights listed below. However, these rights are not absolute, and in certain cases We may decline Your request as permitted by law.', 'wppf'); ?></p>

            <p><?php printf(
                    __('This section of the Policy uses the term ("%1$sPersonal Data%2$s") as defined in the UCPA.', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>'
                ); ?></p>

            <h3 id="personalinfo" class="mb-4 text-sm font-semibold italic"><?php _e('Categories Of Personal Data Processed', 'wppf'); ?></h3>

            <p><?php _e('In this section, We summarize the categories of personal data that We have processed and the purposes thereof.', 'wppf'); ?></p>

            <h3 id="personalinfo" class="mb-4 text-sm font-semibold italic"><?php _e('Categories Of Personal Data We Collect', 'wppf'); ?></h3>

            <p><?php _e('We have collected the following categories of personal data: identifiers and internet information', 'wppf'); ?></p>

            <p><?php _e('We do not collect sensitive data.', 'wppf'); ?></p>

            <p><?php _e('We will not collect additional categories of personal data without notifying you.', 'wppf'); ?></p>

            <h3 id="personalinfo" class="mb-4 text-sm font-semibold italic"><?php _e('Why We Process Your Personal Data', 'wppf'); ?></h3>

            <p><?php _e('To find out why We process Your personal data, You can read the sections titled “Detailed information on the processing of Personal Data” and “The purposes of processing” within this Policy.', 'wppf'); ?></p>







            <h2 id="contact" class="mb-4 text-base font-semibold"><?php _e('15. CONTACT INFORMATION', 'wppf'); ?></h2>

            <div><?php printf(__('Contact Us by using this link: %1$s.', 'wppf'), $args['form']); ?></div>

            <h2 id="legal_compliance" class=" mb-4 text-base font-semibold"><?php printf(__('16. %1$s', 'wppf'), $args['strings']['legal']['legal_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['legal_compliance']; ?></p>

            <h2 id="compliance" class=" mb-4 text-base font-semibold"><?php printf(__('17. %1$s', 'wppf'), $args['strings']['legal']['policy_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['policy_compliance']; ?></p>

            <h2 id="serviceability" class=" mb-4 text-base font-semibold"><?php printf(__('18. %1$s', 'wppf'), $args['strings']['legal']['serviceability_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['serviceability']; ?></p>

            <h2 id="entire" class="mb-4 text-base font-semibold"><?php printf(__('19. %1$s', 'wppf'), $args['strings']['legal']['entire_agreement_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['entire_agreement']; ?></p>

            <h2 id="dispute" class="mb-4 text-base font-semibold"><?php printf(__('21. %1$s', 'wppf'), $args['strings']['legal']['dispute_resolution_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['dispute_resolution']; ?></p>

            <h2 id="law" class="mb-4 text-base font-semibold"><?php printf(__('20. %1$s', 'wppf'), $args['strings']['legal']['governing_law_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['governing_law']; ?></p>

            <h2 id="mod" class="mb-4 text-base font-semibold"><?php printf(__('22. %1$s', 'wppf'), $args['strings']['legal']['policy_modifications_label']); ?></h2>

            <?php echo $args['strings']['legal']['policy_modifications']; ?>

        </div>
    </div>
</section>