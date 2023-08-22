<?php

declare(strict_types=1);

namespace WPP\WPPF\Helpers;

/**
 * Class Config
 *
 * Creates an array of theme configuration values.
 *
 * @package WPP\WPPF\Helpers
 */
class Config
{
    /**
     * Common string values.
     *
     * @var array
     */
    public $string;

    /**
     * Common theme paths.
     *
     * @var array
     */
    public $path;

    /**
     * Various admin values.
     *
     * @var array
     */
    public $admin;

    /**
     * Config constructor.
     *
     * Initializes the Config object.
     */
    public function __construct()
    {
        $this->path    = [];
        $this->string  = [];
        $this->content = [];
        $this->admin   = [];
        $this->min_req = [];

        $this->set_min_req();
        $this->set_path();
        $this->set_admin();

        $this->set_string();
        $this->set_content($this->string, $this->admin);
    }

    /**
     * Set the strings config values.
     *
     * @return void
     */
    protected function set_string()
    {
        $this->string = [
            'name' => esc_html__('WP Plugin Framework', 'wppf'),
            'name_tm' => sprintf(esc_html__('WP Plugin Framework%s', 'wppf'), '&trade;'),
        ];
    }

    /**
     * Set the common content strings config values.
     *
     * @return void
     */
    protected function set_content($string, $admin)
    {
        $this->content = [
            'legal_strings' => [
                'strongly_encourge' => sprintf(
                    esc_html(__('We strongly urge you to meticulously %1$sexamine%2$s both this policy and all accompanying policies available in our Legal Center at %3$s.', 'wppf')),
                    '<span class="font-semibold">',
                    '</span>',
                    '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/')) . '">' . esc_html(get_site_url() . '/legal-center') . '</a>'
                ),
                'id_parties' => sprintf(
                    esc_html__('constitutes a %1$slegally binding agreement%2$s between You ("%1$sYour%2$s," "%1$sUser%2$s," or "%1$sEnd-User%2$s"), whether personally or on behalf of an entity and %3$s ("%1$sWe%2$s," "%1$sUs%2$s," "%1$sOur%2$s," or "%1$sCompany%2$s") who operates a Website located at %4$s ("%1$sWebsite%2$s" or "%1$sSite%2$s").'),
                    '<span class="font-semibold">',
                    '</span>',
                    $string['name'],
                    esc_url(get_site_url())
                ),
                'last_updated_label' => esc_html__('LAST UPDATED', 'wppf'),
                'purpose_label' => esc_html__('PURPOSE', 'wppf'),
                'agreement_to_label' => esc_html__('AGREEMENT TO POLICIES', 'wppf'),
                'agreement_to' => sprintf(
                    esc_html__('%1$sWe want to ensure that Your experience with Us is transparent and why We have established a set of policies to outline the terms and conditions governing the use of our Website and the purchase or use of Our products and services.%2$s', 'wppf'),
                    '<p>',
                    '</p>'
                )
                    . sprintf(
                        esc_html__('%1$sBy accessing Our Website, purchasing, or using any of our products and Services, You agree to comply with the terms and conditions outlined in this Policy and the policies mentioned on Our Website. This includes the %5$sIncluded Policies%3$s and %8$sOther Policies%3$s, as well as any other policies that may not be explicitly mentioned in the %5$sINCLUDED POLICIES AND CONFLICT RESOLUTION%3$s section, but are mentioned elsewhere in this Policy, and the policies located in the %6$sLegal Center%7$s of our Website at %4$s.%2$s', 'wppf'),
                        '<p>',
                        '</p>',
                        '</a>',
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/')) . '</a>',
                        '<a href="' . esc_url('#includ_pol') . '">',
                        '<span class="font-semibold">',
                        '</span>',
                        '<a href="' . esc_url('#includ_other') . '">',
                    )
                    . sprintf(
                        esc_html__('%1$s%3$sYour continued use of Our Website, or decision to purchase or use our products, signifies your acceptance of these policies.%4$s%2$s', 'wppf'),
                        '<p>',
                        '</p>',
                        '<span class="font-semibold underline underline-offset-4">',
                        '</span>'
                    ),
                'included_policies_label' => '<h2 id="includ_pol" class="mb-4 text-sm font-semibold">' . esc_html__('INCLUDED POLICIES AND CONFLICT RESOLUTION', 'wppf') . '</h2>',
                'included_policies_2of6' => sprintf(
                    esc_html__('This Policy incorporates the following policies, collectively ("%1$sIncluded Policies%2$s") which are located in the %1$sLegal Center%2$s on our Website at %3$s:', 'wppf'),
                    '<span class="font-semibold">',
                    '</span>',
                    '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/')) . '</a>'
                ),
                'included_policies_4of6' => sprintf(
                    esc_html__('%1$s%3$sOther Included Policies%4$s: Moreover, this Policy may make references to or include other policies %6$s("%3$sOther Policies%4$s")%7$s within the Policy content that are not expressly named in this section. These Other Policies are also comprehended within the scope of the Included Policies. It is incumbent upon You to review and comprehend all such referenced Other Policies.%2$s', 'wppf'),
                    '<p>',
                    '</p>',
                    '<span class="font-semibold">',
                    '</span>',
                    '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/')) . '</a>',
                    '<span id="includ_other">',
                    '</span>'
                )
                    . sprintf(
                        esc_html(__('%1$s%3$sIncluded Policies Conflict Resolution%4$s: In the event of any conflict or inconsistency among the terms of this Policy and any of the Included Policies, a hierarchy shall apply unless a specific provision in an Included Policy states otherwise. The hierarchy shall be as follows (from highest to lowest priority) where item number 1 (one) is the highest:%2$s', 'wppf')),
                        '<p>',
                        '</p>',
                        '<span class="font-semibold">',
                        '</span>'
                    ),
                'included_policies_6of6' => sprintf(
                    esc_html__('%1$sUnless otherwise indicated in an Included Policy, this hierarchy determines the prevailing terms. Your careful review of all Included Policies is essential to grasp their individual applicability.%2$s', 'wppf'),
                    '<p>',
                    '</p>'
                )
                    . sprintf(
                        esc_html(__('%1$sBy agreeing to this Policy, you acknowledge and accept the interrelationship between this Policy and all Included Policies.%2$s', 'wppf')),
                        '<p>',
                        '</p>'
                    )
                    . sprintf(
                        esc_html(__('%1$sPlease ensure a comprehensive understanding of Your rights and obligations by thoroughly reviewing all the Included Policies when using our Website, products, and Services.%2$s', 'wppf')),
                        '<p>',
                        '</p>'
                    ),
                'parties_label' => esc_html__('IDENTIFICATION OF PARTIES', 'wppf'),
                'res_conflicts_label' => esc_html__('RESOLUTION OF CONFLICTS AMONG INCLUDED AND EXTERNAL POLICIES', 'wppf'),
                'res_conflicts' => sprintf(
                    esc_html__('%1$sThis section addresses potential conflicts that may arise between Included Policies within this document as well as external policies that are not specifically included by this Policy. In cases where conflicts occur, the following guidelines shall apply:%2$s', 'wppf'),
                    '<p>',
                    '</p>'
                )
                    . sprintf(
                        esc_html(__('%1$s%3$sHierarchy of Policies%4$s: In the event of a conflict between policies included within this document and external policies that are not included, a hierarchy will be established to determine the priority of each policy. The hierarchy shall be as follows (from highest to lowest priority) where item number 1 (one) is the highest:%2$s', 'wppf')),
                        '<p>',
                        '</p>',
                        '<span class="font-semibold">',
                        '</span>'
                    )
                    . '<ul class="mb-6 list-decimal">'
                    . '<li>' . esc_html__('This Policy', 'wppf') . '</li>'
                    . '<li><a href="' . esc_url('#includ_pol') . '">' . esc_html__('Included Polices', 'wppf') . '</a></li>'
                    . '<li><a href="' . esc_url('#includ_other') . '">' . esc_html__('Other Policies', 'wppf') . '</a></li>'
                    . '<li>' . sprintf(
                        __('REFUND POLICY: %2$slocated at %1$s', 'wppf'),
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/refund-policy/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/refund-policy/')) .
                            '</a>',
                        '<br>'
                    )
                    . '</li>'
                    . '<li>' . sprintf(
                        __('END USER LICENSE AGREEMENT: %2$slocated at %1$s', 'wppf'),
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/end-user-license-agreement/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/end-user-license-agreement/')) .
                            '</a>',
                        '<br>'
                    )
                    . '</li>'
                    . '<li>' . sprintf(
                        __('TERMS ANS CONDITIONS POLICY: %2$slocated at %1$s', 'wppf'),
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/terms-and-conditions-policy/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/terms-and-conditions-policy/')) .
                            '</a>',
                        '<br>'
                    )
                    . '</li>'
                    . '<li>' . sprintf(
                        __('PRIVACY POLICY: %2$slocated at %1$s', 'wppf'),
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/privacy-policy/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/privacy-policy/')) .
                            '</a>',
                        '<br>'
                    )
                    . '</li>'
                    . '<li>' . sprintf(
                        __('ACCEPTABLE USE POLICY: %2$slocated at %1$s', 'wppf'),
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/acceptable-use-policy/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/acceptable-use-policy/')) .
                            '</a>',
                        '<br>'
                    )
                    . '</li>'
                    . '<li>' . sprintf(
                        __('DISCLAIMER POLICY: %2$slocated at %1$s', 'wppf'),
                        '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/disclaimer-policy/')) . '">' . esc_url(path_join(get_site_url(), 'legal-center/disclaimer-policy/')) . '</a>',
                        '<br>'
                    )
                    . '</li>'
                    . '</ul>'
                    . sprintf(
                        esc_html__('%1$s%3$sResolution of Conflicts:%4$s Conflicts between policies will be resolved by giving precedence to the policy with the highest priority in the established hierarchy. In instances where conflicts cannot be resolved through this hierarchy, legal and regulatory requirements shall take precedence.%2$s', 'wppf'),
                        '<p>',
                        '</p>',
                        '<span class="font-semibold">',
                        '</span>'
                    )
                    . sprintf(
                        esc_html__('%1$sIn the event that two or more conflicting policies are both included within this document, the policy included within this document shall serve as the default policy unless otherwise specified. It is the responsibility of all users and stakeholders to be familiar with the hierarchy of policies, as well as the processes for resolving conflicts and addressing any discrepancies.%2$s', 'wppf'),
                        '<p>',
                        '</p>'
                    ),
                'parties' => esc_html__('RESOLUTION OF CONFLICTS AMONG INCLUDED AND EXTERNAL POLICIES', 'wppf'),
                'disagreement_label' => esc_html__('DISAGREEMENT WITH THE POLICY', 'wppf'),
                'disagreement' => sprintf(
                    esc_html(__('If You find yourself in disagreement with the terms and conditions outlined in this Policy, as well as all Included Policies, or if You hold reservations regarding this Policy or other policies outlined on our Website concerning their applicability, interpretation, or enforcement, %1$sWe urge You in the strongest terms to consider discontinuing Your use of Our Website, Products, and Services%2$s.', 'wppf')),
                    '<span class="font-semibold underline underline-offset-4">',
                    '</span>',
                    '<a href="' . esc_url(path_join(get_site_url(), 'legal-center/')) . '">' . esc_html(get_site_url() . '/legal-center') . '</a>'
                ),
                'legal_take_note' => sprintf(
                    esc_html(__('%1$sPlease take note that the following statement, while informative, is separate from the subsequent policy%2$s:', 'wppf')),
                    '<span class="font-semibold">',
                    '</span>'
                ),
                'legal_compliance_label' => esc_html__('LEGAL COMPLIANCE', 'wppf'),
                'legal_compliance' => esc_html__('You represent and warrant that You are not located in a country that is subject to a US Government embargo, or that has been designated by the US Government as a "terrorist supporting" country; and that You are not listed on any US Government list of prohibited or restricted parties.', 'wppf'),
                'policy_compliance_label' => esc_html__('POLICY COMPLIANCE', 'wppf'),
                'policy_compliance' => esc_html__('Non-compliance with this Policy may result in various actions, including disciplinary measures, termination of user privileges, or legal action as deemed appropriate by Company.', 'wppf'),
                'serviceability_label' => esc_html__('SERVICEABILITY', 'wppf'),
                'serviceability' => esc_html__('If any provision of this Policy is held to be invalid, illegal, or unenforceable by a court of competent jurisdiction, the validity, legality, and enforceability of the remaining provisions shall not be affected or impaired thereby. The unenforceable provision shall be replaced by a valid and enforceable provision that most closely aligns with the intent of the original provision.', 'wppf'),
                'dispute_resolution_label' => esc_html__('DISPUTE RESOLUTION', 'wppf'),
                'dispute_resolution' => esc_html__('By using the Website, Services, and products, You agree to be bound by this Dispute Resolution Section and to follow the outlined procedures in the event of a dispute.', 'wppf')
                    . sprintf(
                        esc_html__('%1$s%3$sInformal Resolution:%4$s Before initiating any formal legal proceedings, We encourage you to contact Us first to try to resolve the dispute informally.', 'wppf'),
                        '<p>',
                        '</p>',
                        '<span class="font-semibold">',
                        '</span>'
                    )
                    . sprintf(
                        esc_html__('%1$s%3$sClass Action Waiver:%4$s Both parties agree that any dispute resolution proceedings will be conducted solely on an individual basis and not as a class, consolidated, or representative action. This means that You and anyone or entity acting on your behalf waive the right to participate in any class action, collective action, or representative action.', 'wppf'),
                        '<p>',
                        '</p>',
                        '<span class="font-semibold">',
                        '</span>'
                    )
                    . sprintf(
                        esc_html__('%1$s%3$sEquitable Relief:%4$s Notwithstanding the foregoing, either party may seek injunctive or other equitable relief to prevent or stop unauthorized use, infringement, or any policy violation.', 'wppf'),
                        '<p>',
                        '</p>',
                        '<span class="font-semibold">',
                        '</span>'
                    )
                    . sprintf(
                        esc_html__('%1$s%3$sCosts:%4$s Each party will bear its own costs and expenses (including attorney and court fees) associated with any dispute resolution proceedings.', 'wppf'),
                        '<p>',
                        '</p>',
                        '<span class="font-semibold">',
                        '</span>'
                    ),
                'entire_agreement_label' => esc_html__('ENTIRE AGREEMENT', 'wppf'),
                'entire_agreement' => esc_html__('This Policy, including all attached exhibits and any additional documents expressly incorporated herein, constitutes the entire agreement between the parties and supersedes all prior or contemporaneous agreements, representations, warranties, understandings, or conflicts, whether oral or written, relating to the subject matter of this Policy.', 'wppf'),
                'governing_law_label' => esc_html__('GOVERNING LAW', 'wppf'),
                'governing_law' => esc_html__('Your use of the Website, Services, and products is governed by and construed in accordance with the laws of the State of California, applicable to agreements made and entirely performed within the State of California, without regard to its conflict of law principles. Any legal action, dispute, or proceeding arising out of or related to this Policy or Your use of the Services or products shall be exclusively instituted in the state or federal courts located in Sacramento County, California. You and the Company consent to the personal jurisdiction and venue of such courts and waive any objection to the laying of venue in such courts.', 'wppf'),
                'policy_modifications_label' => esc_html__('MODIFICATIONS TO THE POLICY', 'wppf'),
                'policy_modifications' => sprintf(
                    esc_html__('%3$sThe Company reserves the right, at its sole discretion, to make changes or modifications to this Policy, including updates, revisions, or enhancements, periodically. The "%1$sLast Updated%2$s" date of the Policy serves as a reference point for Users to track changes and indicates the most recent revision. The Company will update the Last Updated date of the Policy to alert Users of any modifications. While specific individual notice may not be provided, Users are strongly encouraged to periodically review the Policy for potential updates.%4$s', 'wppf'),
                    '<a href="' . esc_url('#lud') . '">',
                    '</a>',
                    '<p>',
                    '</p>'
                )
                    . sprintf(
                        esc_html__('%1$sIt is Your responsibility to regularly review the Policy to stay informed about any changes or modifications. By continuing to use the Website, services, and products after the revised Policy is posted, You signify Your acceptance of the changes.%2$s', 'wppf'),
                        '<p>',
                        '</p>'
                    )
                    . sprintf(
                        esc_html__('%1$sYour ongoing use of Our offerings implies Your acknowledgment and agreement that You have read, understood, and consent to the terms outlined in the most recent version of this Policy. %3$sIf you do not agree with any aspect of the Policy or any future updates, you should discontinue using Our Website, Services, and products.%4$s%2$s', 'wppf'),
                        '<p>',
                        '</p>',
                        '<span class="font-semibold underline underline-offset-4">',
                        '</span>'
                    ),
                'trademark_log_desc' => __('Our company logo is a distinctive design that represents our brand identity. It consists of a  circle with an opaic background. Inside the circle is an smaller inner circle of a difference color that resembles a eclectrical cord with a two-prong recepticle plug in the middle of the electrical cord. Inside the two-prong recepticle plug is an uppcase letter W also know as the 23rd (twenty-third) letter of the American English alphabet. The W is a different color than the main circle and the electrical cord. The following is one example of the logo.', 'wppf'),
            ],
        ];
    }

    /**
     * Set the theme's various pathing IDs.
     *
     * @return void
     */
    protected function set_path()
    {
        $this->path = [
            'slug' => 'wppf',
            'prefix_' => 'wppf_',
            'prefix-' => 'wppf-',
        ];
    }

    /**
     * Set various admin values.
     *
     * @return void
     */
    protected function set_admin()
    {
        $this->admin = [
            'lic_app_ver' => '0.1.0',
            'version'     => 'beep-beep!',
            'legal'       =>
            [
                'name'    => 'WPPF Holdings, LLC.',
                'address' => '1401 21st Street STE R, Sacramento, CA 95811',
            ],
        ];
    }

    /**
     * Set minimun requiremntss.
     *
     * @return void
     */
    protected function set_min_req()
    {
        $this->min_req = [
            'php'      => '8.1',
            'wp'       => '6.2',
            'mysql'    => '0.0',
            'maria_db' => '1.0',
        ];
    }
}
