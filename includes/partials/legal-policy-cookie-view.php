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
                <p class="mb-0"><?php printf(__('This policy serves as a legally binding document that informs website user about the types of cookies used, the purpose of the cookie, and how personal data may be collected and processed through these cookies. %1$s', 'wppf'), $args['strings']['legal']['strongly_encourge']); ?></p>
            </div>

            <div class="mb-5 grid gap-3 justify-center" style="grid-template-columns: auto auto">
                <div class="h-8 w-8 flex justify-center items-center">
                    <?php echo $args['svg_logo_policy']; ?>
                </div>
                <h1 class="mb-5 text-xl tracking-tight"><?php _e('COOKIE POLICY', 'wppf'); ?></h1>
            </div>

            <p id="lud" class="mb-4 text-sm font-semibold"><?php printf(__('%1$s: %2$s15 May 2023%3$s', 'wppf'), $args['strings']['legal']['last_updated_label'], '<span class="pl-3 font-normal">', '</span>'); ?></p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo esc_html($args['strings']['legal']['parties_label']); ?></h2>

            <p>
                <?php printf(
                    __('This Cookie Policy ("%1$sPolicy%2$s") %3$s', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>',
                    wp_kses_post($args['strings']['legal']['id_parties']),
                ); ?>
            </p>

            <h2 class="mb-4 text-sm font-semibold"><?php echo $args['strings']['legal']['purpose_label']; ?></h2>

            <p><?php printf(__('The purpose of this Cookie Policy is to describe how We use cookies and similar technologies to recognize You when You visit Our Website. The policy explains what these cookie technologies are and why We use them, as well as Your rights to control our use of them.', 'wppf'), '<span class="font-semibold">', '</span>', $args['strings']['name_tm']); ?></p>

            <p><?php _e('In some cases we may use cookies to collect personal information, or that becomes personal information if we combine it with other information.', 'wppf'); ?></p>

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
                <li><?php _e('This Policy', 'wppf'); ?></span< /li>
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
                <li><?php printf(__('%1$sWHAT ARE COOKIES?%2$s', 'wppf'), '<a href="' . esc_html('#whatare') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sWHY DO WE USE COOKIES?%2$s', 'wppf'), '<a href="' . esc_html('#why') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sHOW CAN I CONTROL COOKIES?%2$s', 'wppf'), '<a href="' . esc_html('#howcontrol') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sHOW CAN I CONTROL COOKIES ON MY BROWSER?%2$s', 'wppf'), '<a href="' . esc_html('#howbrowser') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sWHAT ABOUT OTHER TRACKING TECHNOLOGIES LIKE WEB BEACONS?%2$s', 'wppf'), '<a href="' . esc_html('#whatabout') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sDO YOU USE FLASH COOKIES OR LOCAL SHARED OBJECTS?%2$s', 'wppf'), '<a href="' . esc_html('#flash') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$sDO YOU SERVE TARGETED ADVERTISING?%2$s', 'wppf'), '<a href="' . esc_html('#doyou') . '">', '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#legal_compliance') . '">', $args['strings']['legal']['legal_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#compliance') . '">', $args['strings']['legal']['policy_compliance_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#serviceability') . '">', $args['strings']['legal']['serviceability_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#entire') . '">', $args['strings']['legal']['entire_agreement_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#dispute') . '">', $args['strings']['legal']['dispute_resolution_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#law') . '">', $args['strings']['legal']['governing_law_label'], '</a>'); ?></li>
                <li><?php printf(__('%1$s%2$s%3$s', 'wppf'), '<a href="' . esc_html('#mod') . '">', $args['strings']['legal']['policy_modifications_label'], '</a>'); ?></li>
            </ol>

            <h2 id="whatare" class="mb-4 text-base font-semibold"><?php _e('1. WHAT ARE COOKIES?', 'wppf'); ?></h2>

            <p><?php _e('Cookies are small data files that are placed on your computer or mobile device when you visit a website. Cookies are widely used by website owners in order to make their websites work, or to work more efficiently, as well as to provide reporting information.', 'wppf'); ?></p>

            <p><?php printf(__('Cookies set by the website owner (in this case, %1$s) are called "first-party cookies." Cookies set by parties other than the website owner are called "third-party cookies." Third-party cookies enable third-party features or functionality to be provided on or through the website (e.g., advertising, interactive content, and analytics). The parties that set these third-party cookies can recognize your computer both when it visits the website in question and when it visits certain other websites.', 'wppf'), $args['admin']['legal']['name']); ?></p>

            <h2 id="why" class="mb-4 text-base font-semibold"><?php _e('2. WHY DO WE USE COOKIES?', 'wppf'); ?></h2>

            <p><?php _e('We use first- and third-party cookies for several reasons. Some cookies are required for technical reasons in order for Our Website to operate, and We refer to these as "essential" or "strictly necessary" cookies. Other cookies enable Us to track and target the interests of Our users to enhance the experience on Our Online Properties. Third parties serve cookies through Our Website for advertising, analytics, and other purposes. This is described in more detail below.', 'wppf'); ?></p>


            <h2 id="howcontrol" class="mb-4 text-base font-semibold"><?php _e('3. HOW CAN I CONTROL COOKIES?', 'wppf'); ?></h2>

            <p><?php printf(__('You have the right to decide whether to accept or reject cookies. You can exercise your cookie rights by setting your preferences in the %1$sCookie Consent Manager%2$s. The %1$sCookie Consent Manager%2$s allows you to select which categories of cookies you accept or reject. Essential cookies cannot be rejected as they are strictly necessary to provide you with services.', 'wppf'), '<a href="' . esc_url('#gdpr_cookie_modal') . '">', '</a>'); ?></p>

            <p><?php printf(__('The %1$sCookie Consent Manager%2$s can be found in the notification banner generally located in the footer of the site. If you choose to reject cookies, you may still use Our Website though your access to some functionality and areas of Our Website may be restricted. You may set or amend your web browser controls to accept or refuse cookies. ', 'wppf'), '<a href="' . esc_url('#gdpr_cookie_modal') . '">', '</a>'); ?></p>

            <p><?php _e('The specific types of first- and third-party cookies served through Our Website and the purposes they perform are described in the table below (please note that the specific cookies served may vary depending on the specific Online Properties you visit):', 'wppf'); ?></p>

            <h2 id="howbrowser" class="mb-4 text-base font-semibold"><?php _e('4. HOW CAN I CONTROL COOKIES ON MY BROWSER?', 'wppf'); ?></h2>

            <p class="mb-2"><?php _e("As the means by which you can refuse cookies through your web browser controls vary from browser to browser, you should visit your browser's help menu for more information. The following is information about how to manage cookies on the most popular browsers:", 'wppf'); ?></p>

            <ul class="mb-6 ml-4 list-disc">
                <li><?php printf(__('%1$sChrome%2$s', 'wppf'), '<a href="' . esc_url('https://support.google.com/chrome/answer/95647#zippy=%2Callow-or-block-cookies') . '" target="_blank">', '</a>'); ?></li>
                <li><?php printf(__('%1$sInternet Explorer%2$s', 'wppf'), '<a href="' . esc_url('https://support.microsoft.com/en-us/windows/delete-and-manage-cookies-168dab11-0753-043d-7c16-ede5947fc64d') . '" target="_blank">', '</a>'); ?></li>
                <li><?php printf(__('%1$sFirefox%2$s', 'wppf'), '<a href="' . esc_url('https://support.mozilla.org/en-US/kb/enhanced-tracking-protection-firefox-desktop?redirectslug=enable-and-disable-cookies-website-preferences&redirectlocale=en-US') . '" target="_blank">', '</a>'); ?></li>
                <li><?php printf(__('%1$sSafari%2$s', 'wppf'), '<a href="' . esc_url('https://support.apple.com/en-ie/guide/safari/sfri11471/mac') . '" target="_blank">', '</a>'); ?></li>
                <li><?php printf(__('%1$sEdge%2$s', 'wppf'), '<a href="' . esc_url('https://support.microsoft.com/en-us/windows/microsoft-edge-browsing-data-and-privacy-bb8174ba-9d73-dcf2-9b4a-c582b4e640dd') . '" target="_blank">', '</a>'); ?></li>
                <li><?php printf(__('%1$sOpera%2$s', 'wppf'), '<a href="' . esc_url('https://help.opera.com/en/latest/web-preferences/') . '" target="_blank">', '</a>'); ?></li>
            </ul>

            <p class="mb-2"><?php _e('In addition, most advertising networks offer you a way to opt out of targeted advertising. If you would like to find out more information, please visit:', 'wppf'); ?></p>

            <ul class="mb-6 ml-4 list-disc">
                <li><?php printf(__('%1$sDigital Advertising Alliance%2$s', 'wppf'), '<a href="' . esc_url('http://www.aboutads.info/choices/') . '" target="_blank">', '</a>'); ?></li>
                <li><?php printf(__('%1$sDigital Advertising Alliance of Canada%2$s', 'wppf'), '<a href="' . esc_url('https://youradchoices.ca/') . '" target="_blank">', '</a>'); ?></li>
                <li><?php printf(__('%1$sEuropean Interactive Digital Advertising Alliance%2$s', 'wppf'), '<a href="' . esc_url('http://www.youronlinechoices.com/') . '" target="_blank">', '</a>'); ?></li>
            </ul>

            <h2 id="whatabout" class="mb-4 text-base font-semibold"><?php _e('5. WHAT ABOUT OTHER TRACKING TECHNOLOGIES LIKE WEB BEACONS?', 'wppf'); ?></h2>

            <p><?php _e('Cookies are not the only way to recognize or track visitors to a website. We may use other, similar technologies from time to time, like web beacons (sometimes called "tracking pixels" or "clear gifs"). These are tiny graphics files that contain a unique identifier that enables Us to recognize when someone has visited Our Website or opened an email including them. This allows Us, for example, to monitor the traffic patterns of users from one page within a website to another, to deliver or communicate with cookies, to understand whether you have come to the website from an online advertisement displayed on a third-party website, to improve site performance, and to measure the success of email marketing campaigns. In many instances, these technologies are reliant on cookies to function properly, and so declining cookies will impair their functioning.', 'wppf'); ?></p>

            <h2 id="flash" class="mb-4 text-base font-semibold"><?php _e('6. DO YOU USE FLASH COOKIES OR LOCAL SHARED OBJECTS?', 'wppf'); ?></h2>

            <p><?php _e('Websites may use so-called "Flash Cookies" (also known as Local Shared Objects or "LSOs") to, among other things, collect and store information about your use of Our services, fraud prevention, and for other site operations.', 'wppf'); ?></p>

            <p><?php printf(__('If you do not want Flash Cookies stored on your computer, you can adjust the settings of your Flash player to block Flash Cookies storage using the tools contained in the %1$sWebsite Storage Settings Panel%3$s. You can control Flash Cookies by going to the %2$sGlobal Storage Settings Panel%3$s and following the instructions (which may include instructions that explain, for example, how to delete existing Flash Cookies (referred to "information" on the Macromedia site), how to prevent Flash LSOs from being placed on your computer without your being asked, and (for Flash Player 8 and later) how to block Flash Cookies that are not being delivered by the operator of the page you are on at the time).', 'wppf'), '<a href="' . esc_url('http://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager07.html') . '" target="_blank">', '<a href="' . esc_url('http://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager03.html') . '" target="_blank">', '</a>'); ?></p>


            <p><?php _e('Please note that setting the Flash Player to restrict or limit acceptance of Flash Cookies may reduce or impede the functionality of some Flash applications, including, potentially, Flash applications used in connection with Our services or online content.', 'wppf'); ?></p>

            <h2 id="doyou" class=" mb-4 text-base font-semibold"><?php _e('7. DO YOU SERVE TARGETED ADVERTISING?', 'wppf'); ?></h2>

            <p><?php _e('Third parties may serve cookies on your computer or mobile device to serve advertising through Our Website. These companies may use information about your visits to this and other websites in order to provide relevant advertisements about goods and services that you may be interested in. They may employ technology that is used to measure the effectiveness of advertisements. They can accomplish this by using cookies or web beacons to collect information about your visits to this and other sites in order to provide relevant advertisements about goods and services of potential interest to you. The information collected through this process does not enable Us or them to identify your name, contact details, or other details that directly identify you unless you choose to provide these.', 'wppf'); ?></p>

            <h2 id="legal_compliance" class=" mb-4 text-base font-semibold"><?php printf(__('8. %1$s', 'wppf'), $args['strings']['legal']['legal_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['legal_compliance']; ?></p>

            <h2 id="compliance" class=" mb-4 text-base font-semibold"><?php printf(__('9. %1$s', 'wppf'), $args['strings']['legal']['policy_compliance_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['policy_compliance']; ?></p>

            <h2 id="serviceability" class=" mb-4 text-base font-semibold"><?php printf(__('10. %1$s', 'wppf'), $args['strings']['legal']['serviceability_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['serviceability']; ?></p>

            <h2 id="entire" class="mb-4 text-base font-semibold"><?php printf(__('11. %1$s', 'wppf'), $args['strings']['legal']['entire_agreement_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['entire_agreement']; ?></p>

            <h2 id="dispute" class="mb-4 text-base font-semibold"><?php printf(__('12. %1$s', 'wppf'), $args['strings']['legal']['dispute_resolution_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['dispute_resolution']; ?></p>

            <h2 id="law" class="mb-4 text-base font-semibold"><?php printf(__('13. %1$s', 'wppf'), $args['strings']['legal']['governing_law_label']); ?></h2>

            <p><?php echo $args['strings']['legal']['governing_law']; ?></p>

            <h2 id="mod" class="mb-4 text-base font-semibold"><?php printf(__('14. %1$s', 'wppf'), $args['strings']['legal']['policy_modifications_label']); ?></h2>

            <?php echo $args['strings']['legal']['policy_modifications']; ?>

        </div>
    </div>
</section>