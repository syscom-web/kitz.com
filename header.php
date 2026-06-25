<?php
if ($_SERVER['REQUEST_URI'] === '/en/contact/global/') {
  if (!$_GET['country']) {
    wp_safe_redirect('/en/contact/');
    exit;
  }
}
?>
<!-- new -->
<!DOCTYPE html>
<html lang="en">

<head prefix="og: http://ogp.me/ns#">
  <meta name="google-site-verification" content="iLuwLq0XPTZ9sp6TIdxD4bSy0FrjI_0fbS1CgQt1Bw4" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link rel="icon" href="/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180"
    href="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/apple-touch-icon.png">
  <meta name="viewport" content="width=device-width, maximum-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload"
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700;900&family=Poppins:wght@400;600&display=swap">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700;900&family=Poppins:wght@400;600&display=swap"
    media="print" onload="this.media='all'">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.3.1/lity.css">
  <?php if (is_front_page()): ?>
    <link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/slick.css" rel="stylesheet">
  <?php endif; ?>
  <link
    href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css?v=<?php echo date('YmdHi', filemtime(get_template_directory() . '/css/style.css')); ?>"
    rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="l-wrapper">
    <header class="l-header">
      <div class="l-header__container">
        <div class="l-header__upper">
          <?php if (is_home()): ?>
            <h1 class="l-header__logo"><?php else: ?>
              <p class="l-header__logo"><?php endif; ?><a href="<?php echo esc_url(home_url('/')); ?>"><img
                  src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/logo-anniversary.svg"
                  alt="Comprehensive valve Manufacturer KITZ Corporation"></a><?php if (is_home()): ?>
            </h1><?php else: ?></p><?php endif; ?>
          <div class="l-header__upper--links">
            <ul>
              <li>
                <a href="https://www.kitz-valvesearch.com/iportal/CatalogSearch.do?method=catalogSearchByAnyCategories&volumeID=KTZ00001&categoryID=4520000&designID=catalog_ENG"
                  class="link--external" target="_blank" rel="noopener">Catalogs</a>
              </li>
              <!-- <li>
                <a href="https://www.kitz-valvesearch.com/frontparts/language.php?mode=change&language=2&url=/document/manual.php" class="link--external" target="_blank" rel="noopener">Manuals</a>
              </li> -->
              <li>
                <a href="https://www.kitz-valvesearch.com/valve-search/en/top" class="upper-link--valve" target="_blank"
                  rel="noopener"><em>Valve Search</em>
                  <span>(Information on drawings,<br>Manuals, CAD, etc.)</span>
                </a>
              </li>
              <li>
                <a href="/en/product/#useful" class="upper-link--valve">Useful Information</a>
              </li>
              <li class="header-search_btn">
                <a href="javascript:void(0)" class="link--search"></a>
              </li>
            </ul>
          </div>
          <div class="l-header__upper--sp">
            <div class="l-header__menu">
              <div><span></span><span></span><span></span></div>
            </div>
            <div class="header-search_btn">
              <a href="javascript:void(0)">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-search_blue.png"
                  alt="Search Icons">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/common/icon-search_white.png"
                  alt="Search Icons">
              </a>
            </div>
          </div>
        </div><!-- /.l-header__upper -->
        <div class="l-header__inner">
          <nav class="l-header__nav">
            <ul class="l-header__nav--upper">
              <li><a
                  href="https://www.kitz-valvesearch.com/iportal/CatalogSearch.do?method=catalogSearchByAnyCategories&volumeID=KTZ00001&categoryID=4520000&designID=catalog_ENG"
                  class="link--external" target="_blank" rel="noopener">Catalogs</a></li>
              <!-- <li><a href="https://www.kitz-valvesearch.com/frontparts/language.php?mode=change&language=2&url=/document/manual.php" class="link--external" target="_blank" rel="noopener">Manuals</a></li> -->
              <li><a href="https://www.kitz-valvesearch.com/valve-search/en/top"
                  class="link--external upper-link--valve" target="_blank" rel="noopener">Valve
                  Search<br><span>(Information on drawings,<br class="sp-br">Manuals, CAD, etc.)</span></a></li>
              <li>
                <a href="/en/product/#useful" class="upper-link--valve">Useful Information</a>
              </li>
            </ul>
            <ul class="l-header__nav__list">
              <!-- <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li> -->
              <!-- <li class="l-navi__menu--mega">
                <a href="<?php echo esc_url(home_url('/')); ?>who/" class="hover-mega">What is KITZ</a>
                <a href="javascript:void(0)" class="l-navi__menu--mega-sp">What is KITZ</a>
                <div class="l-navi__menu--mega__container">
                  <dl>
                    <dt>キッツとは</dt>
                    <dd>
                      <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>who/">Understanding KITZ by the 3Minute</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>understand_with_numbers">Understanding KITZ by the Numbers</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>brand" target="_blank" rel="noopener">KITZ Brand Page</a></li>
                      </ul>
                    </dd>
                  </dl>
                </div>
              </li> -->
              <li class="l-navi__menu--mega">
                <span class="hover-mega">Valve Products</span>
                <a href="javascript:void(0)" class="l-navi__menu--mega-sp">Valve Products</a>
                <div class="l-navi__menu--mega__container l-navi__menu--mega__container--variable">
                  <div class="l-navi__menu--mega__open-menu">
                    <p class="l-navi__menu--mega__open-menu__ttl"><a
                        href="<?php echo esc_url(home_url('/')); ?>product/">Valve Products TOP</a></p>
                    <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'valve',
                        'container' => false,
                        'items_wrap' => '<ul>%3$s</ul>',
                      )
                    );
                    ?>
                  </div>
                </div>
              </li>
              <li class="l-navi__menu--mega">
                <span class="hover-mega">Fluid Control Products</span>
                <a href="javascript:void(0)" class="l-navi__menu--mega-sp">Fluid Control Products</a>
                <div class="l-navi__menu--mega__container">
                  <div class="l-navi__menu--mega__open-menu">
                    <p class="l-navi__menu--mega__open-menu__ttl"><a
                        href="<?php echo esc_url(home_url('/')); ?>fluid-control/">Fluid Control Products TOP</a></p>
                    <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'fluid control',
                        'container' => false,
                        'items_wrap' => '<ul>%3$s</ul>',
                      )
                    );
                    ?>
                  </div>
                </div>
              </li>
              <li class="l-navi__menu--mega">
                <span class="hover-mega">Corporate Profile</span>
                <a href="javascript:void(0)" class="l-navi__menu--mega-sp">Corporate Profile</a>
                <div class="l-navi__menu--mega__container">
                  <div class="l-navi__menu--mega__open-menu">
                    <p class="l-navi__menu--mega__open-menu__ttl"><a
                        href="<?php echo esc_url(home_url('/')); ?>company/">Corporate Profile TOP</a></p>
                    <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'company',
                        'container' => false,
                        'items_wrap' => '<ul>%3$s</ul>',
                      )
                    );
                    ?>
                  </div>
                </div>
              </li>
              <li class="l-navi__menu--mega">
                <span class="hover-mega">Our Businesses</span>
                <a href="javascript:void(0)" class="l-navi__menu--mega-sp">Our Businesses</a>
                <div class="l-navi__menu--mega__container">
                  <div class="l-navi__menu--mega__open-menu">
                    <p class="l-navi__menu--mega__open-menu__ttl"><a
                        href="<?php echo esc_url(home_url('/')); ?>business/">Our Businesses TOP</a></p>
                    <?php
                    wp_nav_menu(
                      array(
                        'theme_location' => 'business',
                        'container' => false,
                        'items_wrap' => '<ul>%3$s</ul>',
                      )
                    );
                    ?>
                  </div>
                </div>
              </li>
              <li class="l-navi__menu--mega">
                <span class="hover-mega">IR</span>
                <a href="javascript:void(0)" class="l-navi__menu--mega-sp">IR</a>
                <div class="l-navi__menu--mega__container">
                  <div>
                    <div>
                      <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/">IR</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/ir_news/">IR NEWS</a></li>
                        <li data-parent="investor_ir01"><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/individual-investors/">For Individual
                            Investors</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/calendar/">IR Calendar</a></li>
                        <li data-parent="investor_ir02"><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/management-policy/">Management Policy
                            and Strategy</a></li>
                        <li data-parent="investor_ir03"><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/financial-highlights/">Business
                            Performance and Financial Highlights</a></li>
                        <li data-parent="investor_ir04"><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/library/">IR Library</a></li>
                        <li data-parent="investor_ir05"><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/stock-information/">Shareholder
                            Information</a></li>
                      </ul>
                    </div>
                    <div>
                      <ul data-child="investor_ir01">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>company/history/">History of KITZ</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>business/">KITZ Group’s Business Structure</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>business/valve/">Valve Functions and KITZ’
                            Strengths</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/financial-highlights/">KITZ’
                            Financial Performance</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/management-policy/m_vision/">Long-term
                            Vision</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/management-policy/m_plan/">Medium-term
                            Plan</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/stock-information/dividend/">Dividend
                            Policy and Dividends</a></li>
                      </ul>
                      <ul data-child="investor_ir02">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/management-policy/message/">Top
                            Message</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/management-policy/m_vision/">Long-term
                            Vision</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/management-policy/m_plan/">Medium-term
                            Plan</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/">Sustainability</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/management-policy/disclosure_policy/">Disclosure
                            Policy</a></li>
                      </ul>
                      <ul data-child="investor_ir03">
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/consolidated-results/">Consolidated
                            Results</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/segment/">By Segment</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/highlight/">Financial Position</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/cash-flows/">Cash Flows</a></li>
                      </ul>
                      <ul data-child="investor_ir04">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>company/report/">Integrated Report</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/library/financial-results/">Financial
                            Results</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/library/materials/">Presentation
                            of Financial Results</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/library/financial-data/">Corporate
                            Profile and Financial Data</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/library/external-reports/">External
                            Report</a></li>
                      </ul>
                      <ul data-child="investor_ir05">
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/stock-information/meetings/">Meeting
                            of Shareholders</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/stock-information/handling-regulations/">Articles
                            of Incorporation</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/stock-information/status-shares/">Stock
                            Information</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>investor_ir/stock-information/dividend/">Dividend
                            Policy and Dividends</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>investor_ir/stock-information/debenture/">Bond
                            / Rating / Analyst Coverage</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
              <li class="l-navi__menu--mega">
                <span class="hover-mega">Sustainability</span>
                <a href="javascript:void(0)" class="l-navi__menu--mega-sp">Sustainability</a>
                <div class="l-navi__menu--mega__container">
                  <div>
                    <div>
                      <ul>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/">Sustainability</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/statement/">Message from the
                            Executive Officer in Charge of Sustainability</a></li>
                        <li data-parent="sustainability01"><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/about_sustainability/">Sustainability
                            of KITZ Group</a></li>
                        <li data-parent="sustainability03"><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/">Environment</a></li>
                        <li data-parent="sustainability04"><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/social/">Social</a></li>
                        <li data-parent="sustainability05"><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/governance/">Governance</a></li>
                        <li data-parent="sustainability02"><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/products/">Technology for
                            Sustainable Growth・Intellectual property strategy</a></li>
                        <li data-parent="sustainability06"><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/qa/">Quality Improvement (Quality
                            Assurance)</a></li>
                        <li data-parent="sustainability07"><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/stakeholders/">Stakeholder
                            Engagement</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/slb/">Sustainability
                            Finance</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>company/report/">Integrated Report</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/esg/">ESG Data-Sheet</a></li>
                      </ul>
                    </div>
                    <div>
                      <ul data-child="sustainability01">
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/about_sustainability/management/">Sustainability
                            Management</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/about_sustainability/keythemes/">Key
                            Themes for Sustainability Management</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/about_sustainability/external-initiatives/">Participation
                            in external initiatives</a></li>
                      </ul>
                      <ul data-child="sustainability02">
                        <li>
                          <a href="<?php echo esc_url(home_url('/')); ?>sustainability/products/intellectual/">Basic
                            Policy for Technology and Intellectual Property Strategies</a>
                        </li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/products/materials-molding/">Materials
                            and molding technologies</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/products/sealing/">Sealing
                            technology</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/products/water-purification/">Separation
                            and water purification technology</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/products/valve/">Techniques to
                            Understand valve Conditions and Predict Failures</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/products/clean/">Clean-room
                            technology for semiconductor manufacturing processes</a></li>
                        <li data-parent="sustainability02-01"><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/qa/">Quality Improvement (Quality
                            Assurance)</a></li>
                      </ul>
                      <ul data-child="sustainability03">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/env_plan/">KITZ
                            Group Environmental Policy・Long-term environmental vision</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/env_management/">Environmental
                            management system</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/env_account/">Environmental
                            accounting</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/env_products/">Environmentally
                            friendly products and services</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/env_warming/">Responding
                            to Climate-Change (Disclosures in Accordance with TCFD)</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/env_resource/">Saving
                            resources</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/env_waste/">Waste
                            Management</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/env_chemical/">Proper
                            control and reduction of chemical substances</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/env_material_balance/">Business
                            Operations and Environmental Impact (Material Balance)</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/env_risk/">Environmental
                            risk management</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/env_distribution/">Green
                            Logistics</a></li>
                        <li data-parent="sustainability03-01"><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/">Data
                            by Group Company</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/policy/">Editorial
                            Policy</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/standard/">Calculation
                            Standard</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/business/">KITZ
                            Group’s Business Activities</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/pdf/">KITZ Group
                            Environmental and Safety Digests</a></li>
                      </ul>
                      <ul data-child="sustainability04">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/social/human-rights/">Respect
                            for human rights</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/social/initiatives/">Initiatives
                            in support of human resources</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/social/safety-health/">Health
                            management and Occupational health and safety</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/social/procurement/">Supply
                            chain management</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/social/report/">Social
                            Contribution Activities</a></li>
                      </ul>
                      <ul data-child="sustainability05">
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/governance/corporate-governance/">Corporate
                            Governance</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/governance/internal-control-system/">Internal
                            Control System</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/governance/compliance/">Compliance</a>
                        </li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/governance/risk-management/">Risk
                            Management</a></li>
                      </ul>
                      <ul data-child="sustainability06">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/qa/philosophy/">Quality
                            Philosophy</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/qa/initiatives/">Quality
                            Initiatives</a></li>
                      </ul>
                      <ul data-child="sustainability07">
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/stakeholders/shareholders/">Dialogue
                            with Shareholders</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/stakeholders/investors/">Dialogue
                            with Investors</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/stakeholders/employees/">Dialogue
                            with Employees</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/stakeholders/business-partners/">Dialogue
                            with Customers and Business Partners</a></li>
                        <!--<li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/stakeholders/local-communities/">Dialogue with Local Communities (Social Contribution Activities)</a></li>-->
                      </ul>
                    </div>
                    <div>
                      <ul data-child="sustainability02-01">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/qa/philosophy/">Quality
                            Philosophy</a></li>
                        <li><a href="<?php echo esc_url(home_url('/')); ?>sustainability/qa/initiatives/">Quality
                            Initiatives</a></li>
                      </ul>
                      <ul data-child="sustainability03-01">
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site/">KITZ
                            Corporation</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_shimizu/">Shimizu
                            Alloy Mfg. Co., Ltd.</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_sct/">KITZ
                            SCT Corporation</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_kmf/">KITZ
                            Micro Filter Corporation</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_kmw/">KITZ
                            Metal Works Corporation</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_htg/">Hokutoh
                            Giken Kogyo Corporation</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_kesco/">KITZ
                            Engineering Service Corporation</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_beniya/">Hotel
                            Beniya Co, Ltd.</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_taiwan/">KITZ
                            Corporation of Taiwan</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_kjk/">KITZ
                            Corporation of Jiangsu Kunshan</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_kunshan/">KITZ
                            Corporation of Kunshan</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_thailand/">KITZ
                            (Thailand) Ltd.</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_mga/">Metalúrgica
                            Golden Art’s Ltda.</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_ksk/">KITZ
                            SCT Corporation of Kunshan</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_kce/">KITZ
                            Corporation of Europe, S.A.</a></li>
                        <li><a
                            href="<?php echo esc_url(home_url('/')); ?>sustainability/environment/group-company/site_perrin/">Perrin
                            GmbH</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul><!-- /.l-header__nav__list -->
            <div class="l-header__nav__container">
              <ul class="l-header__nav__links">
                <li class="link--global"><a href="https://www.kitz.co.jp/" target="_blank"
                    class="u-poppins"><span>Japanese</span></a></li>
                <li class="link--contact"><a href="<?php echo esc_url(home_url('/')); ?>contact/"><span>Contact
                      us</span></a></li>
              </ul>
            </div><!-- /.l-header__nav__container -->
          </nav>
        </div><!-- /.l-header__inner -->
        <div class="l-header__search">
          <div class="l-header__search--mask"></div>
          <div class="l-header__search--container">
            <div class="inner">
              <dl>
                <dd>
                  <ul class="l-header__search--links">
                    <li><a target="_blank" href="https://www.kitz-valvesearch.com/valve-search/en/top">Valve
                        Search<br>(product name &amp; model NO.)</a><span>(Information on price lists, drawings, CAD,
                        catalogs, etc.)</span></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>faq/">Frequently Asked Questions <br>about
                        Valves</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>troubleshooting/">Trouble Shooting for valves</a>
                    </li>
                  </ul>
                </dd>
                <div class="l-header__search--box">
                  <dt>
                    Search the KITZ Website<br class="u-sp">
                    <span>(To search by valve product name or <br class="u-sp">model number, please click the button
                      above.)</span>
                  </dt>
                  <dd>
                    <form id="cse-search-box" action="/en/search/">
                      <input class="search-input" type="text" name="q" placeholder="Please enter a keyword" />
                      <input type="submit" name="sa" value="Search" />
                    </form>
                    <script async src="https://cse.google.com/cse.js?cx=517b729a2e546409f"></script>
                  </dd>
                </div>
              </dl>
            </div>
          </div>
        </div><!-- /.l-header__container -->
      </div><!-- /.l-header__container -->
    </header><!-- /.l-header -->