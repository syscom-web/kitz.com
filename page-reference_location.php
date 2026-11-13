<?php
/**
 * Template Name: バルブの用途
 *
 */
?>
<?php get_header(); ?>
<main class="p-main">
  <style>
    @media screen and (min-width: 1px) and (max-width: 425px) {
      .p-who__kitz-valve figure {
        width: 100%;
        top: 0;
      }
    }
  </style>
  <section class="p-page-mv">
    <div class="p-page-mv__inner">
      <h1 class="p-page-mv__ttl p-page-mv__ttl--who">Valve location</h1>
    </div>
  </section>
  <!-- /.p-page-mv -->
  <div class="p-page-valve valve-sub">
    <div class="c-breadcrumb">
      <ul class="c-breadcrumb__list">
        <li class="c-breadcrumb__item"><a title="HOME" href="/en/">Home</a></li>
        <li class="c-breadcrumb__item"><a title="Basics of Valve" href="/en/reference/">Basics of Valve</a></li>
        <li class="c-breadcrumb__item">Valve location</li>
      </ul>
    </div>

    <!-- ここから -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.2.4/simplebar.min.css"
      integrity="sha512-rptDreZF629VL73El0GaBEH9tlYEKDJFUr+ysb+9whgSGbwYfGGA61dVtQFL0qC8/SZv/EQFW5JtwEFf+8zKYg=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simplebar/6.2.4/simplebar.min.js"
      integrity="sha512-K//QeDiscFFAs5yljnbZCuoAmzv5KdtVY0W70WLQZ+BFCxi4PotspvxZwpaGJOao2l4oIQhgsHX5tHxyRe+YYw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet"
      href="<?php echo esc_url(get_template_directory_uri()); ?>/css/reference_location.css?v=20230707">

    <div class="valveType valveType--main">
      <div class="valveType--nav">
        <button type="button" class="active" data-cat="all">All valves</button>
        <button type="button" data-cat="01">Dedicated use</button>
        <button type="button" data-cat="02">General use</button>
        <button type="button" data-cat="03">Industrial use</button>
      </div>

      <div class="valveType--menu cat--01 cat--02 cat--03">
        <div class="bg"> </div>
        <!-- frame -->
        <div class="frame frame--01 cat--03"></div>
        <div class="frame frame--02 cat--01_03"></div>
        <div class="frame frame--03 cat--02"></div>
        <div class="frame frame--04 cat--01"></div>
        <!-- items -->
        <button type="button" class="item item--01 cat--01" data-pop="01">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item01.png"
              alt="Hydrogen station" width="90" height="90">
          </figure>
          <div class="name">Hydrogen station</div>
        </button>
        <button type="button" class="item item--02 cat--03" data-pop="02">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item02.png"
              alt="Cast steel" width="90" height="90">
          </figure>
          <div class="name">Cast steel</div>
        </button>
        <button type="button" class="item item--03 cat--01" data-pop="03">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item03.png"
              alt="All-welded-type forged steel ball" width="90" height="90">
          </figure>
          <div class="name">All-welded-type <br>forged steel <br>ball</div>
        </button>
        <button type="button" class="item item--04 cat--02 cat--03" data-pop="04">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item04.png"
              alt="Ductile" width="90" height="90">
          </figure>
          <div class="name">Ductile</div>
        </button>
        <button type="button" class="item item--05 cat--01" data-pop="05">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item05.png"
              alt="Ultra-low temperature" width="90" height="90">
          </figure>
          <div class="name">Ultra-low <br>temperature</div>
        </button>
        <button type="button" class="item item--06 cat--02" data-pop="06">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item06.png"
              alt="Bronze and Brass" width="90" height="90">
          </figure>
          <div class="name">Bronze <br>and Brass</div>
        </button>
        <button type="button" class="item item--07 cat--02" data-pop="07">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item07.png"
              alt="Cast iron" width="90" height="90">
          </figure>
          <div class="name">Cast iron</div>
        </button>
        </button>
        <button type="button" class="item item--08 cat--01 cat--02" data-pop="08">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item08.png"
              alt="Water supply and hot water supply" width="90" height="90">
          </figure>
          <div class="name">Water supply<br>and <br>hot water supply</div>
        </button>
        <button type="button" class="item item--09 cat--01" data-pop="09">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item09.png"
              alt="Vent valve" width="90" height="90">
          </figure>
          <div class="name">Vent <br>valve</div>
        </button>
        <button type="button" class="item item--10 cat--01" data-pop="10">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item10.png"
              alt="Λ port ball" width="90" height="90">
          </figure>
          <div class="name">Λ port <br>ball</div>
        </button>
        <button type="button" class="item item--11 cat--01" data-pop="11">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item11.png"
              alt="gas consuming equipment" width="90" height="90">
          </figure>
          <div class="name">gas consuming <br>equipment</div>
        </button>
        <button type="button" class="item item--12 cat--01" data-pop="12">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item12.png"
              alt="sewage" width="90" height="90">
          </figure>
          <div class="name">Sewage</div>
        </button>
        <button type="button" class="item item--13 cat--01" data-pop="13">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item13.png"
              alt="fire-fighting equipment" width="90" height="90">
          </figure>
          <div class="name">Fire-fighting <br>equipment</div>
        </button>
        <button type="button" class="item item--14 cat--01" data-pop="14">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item14.png"
              alt="Water supply" width="90" height="90">
          </figure>
          <div class="name">Water <br>supply</div>
        </button>
        <button type="button" class="item item--15 cat--02 cat--03" data-pop="15">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item15.png"
              alt="Stainless steel" width="90" height="90">
          </figure>
          <div class="name">Stainless steel</div>
        </button>
        <button type="button" class="item item--16 cat--01" data-pop="16">
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/item16.png"
              alt="For semiconductor installation" width="90" height="90">
          </figure>
          <div class="name">Semiconductor installation</div>
        </button>
        <!-- legends -->
        <div class="legend legend--01">High pressure</div>
        <div class="legend legend--02">Low temperature</div>
        <div class="legend legend--03">High temperature</div>
        <div class="legend legend--04">Negative pressure</div>
        <div class="legend legend--05">Normal temperature and low pressure</div>
        <!-- labels -->
        <div class="label label--01 cat--01 cat--03">High temperature <br>and pressure</div>
        <div class="label label--02 cat--01">Normal temperature <br>and high pressure</div>
        <div class="label label--03 cat--01">Low temperature <br>and high pressure</div>
        <div class="label label--04 cat--01 cat--02">Normal temperature <br>and low pressure</div>
        <div class="label label--05 cat--01">Normal temperature <br>and negative pressure</div>
        <!-- text -->
        <div class="text">Used in a wide temperature <br>and pressure range.</div>
        <!-- balloons -->
        <div class="balloon balloon--01 cat--01">In addition to valve for a variety of special fluids, we have a lineup
          that can meet a wide variety of requirements, including valve, which is used in areas that require high levels
          of safety and reliability under laws and regulations.</div>
        <div class="balloon balloon--02 cat--02">They are used in a wide range of applications, including air
          conditioning, water supply and drainage, fire extinguishing systems, and piping lines in building facilities
          such as office buildings and hotels, as well as production facilities, machine tools, and equipment in various
          factories.</div>
        <div class="balloon balloon--03 cat--03">Valve available in a variety of industrial sectors, including petroleum
          refining plants, petrochemical plants and generic chemical plants.<br>
          It boasts high reliability for fluids with hazards such as high temperature, high pressure, and strong
          corrosiveness.</div>
        <div class="usage">
          <div class="balloon">Click on the valve photo to see the details.</div>
          <figure class="image">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/img01.png" alt=""
              width="111" height="132">
          </figure>
        </div>
      </div>

      <div class="valveType--warning">
        <p>
          Animation will be displayed.<br>
          Please view with your smartphone in landscape mode.
        </p>
        <figure class="image">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/img02.svg" alt=""
            width="330" height="334">
        </figure>
      </div>
    </div>
    <!-- ここまで -->

    <!-- ここから -->
    <div class="valveType en-contact">
      <div class="valveType--popup">
        <div class="bg"></div>
        <div id="popup01" class="card cat--01" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Hydrogen station</div>
            <div class="type">Normal temperature and high pressure</div>
            <div class="category">Dedicated use</div>
          </div>
          <div class="body">
            <div class="image">
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail01.png"
                  alt="Hydrogen station" width="190" height="183">
              </figure>
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail01_2.png"
                  alt="Hydrogen station" width="187" height="182">
              </figure>
            </div>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Unit in the hydrogen station to the hydrogen compression, accumulator, and dispenser (supply port)
                </li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Hydrogen gas for fuel</li>
              </ul>
              <div class="headline">Body material</div>
              <ul>
                <li>Stainless steel</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>We provide valve to support a hydrogen-based society by combining our long-accumulated fluid-control
                  technology with cryogenic technology.</li>
                <li>It can handle the largest 98MPa of ultra-high-pressure hydrogen gases.</li>
                <li>A ball valve for hydrogen stations with a Cv 8 times greater than that of conventional needle valves
                  (an inherent factor that indicates ease of fluid flow) has been developed to enable speedy hydrogen
                  charging.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">go back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup02" class="card cat--03" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Cast steel</div>
            <div class="type">High temperature and pressure</div>
            <div class="category">Industrial use</div>
          </div>
          <div class="body">
            <div class="image">
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail02.png"
                  alt="Cast steel" width="480" height="459">
              </figure>
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail02_2.png"
                  alt="Cast steel" width="583" height="389">
              </figure>
            </div>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Plants in the energy field from petroleum refining to petrochemicals and chemicals, piping lines for
                  thermal power stations, etc.</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Hot gas, high-pressure gas, and flammable gas</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>To ensure stable operation against hazardous fluids such as high temperature, high pressure, and
                  flammability, this product is designed to be anti-seizure, anti-rust, and lubricity.</li>
                <li>Disc of the Gate valve has a thorough lapping finish, and is designed to securely engage the guide
                  rib and stem head of the body, and to prevent looseness and misalignment during use.<br>
                  This feature makes it suitable for both vertical and horizontal piping.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup03" class="card cat--01" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">All-welded-type forged steel ball</div>
            <div class="type">High temperature and pressure</div>
            <div class="category">Dedicated use</div>
          </div>
          <div class="body">
            <figure class="image">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail03.png"
                alt="All-welded-type forged steel ball" width="380" height="381">
            </figure>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Long-distance gas pipelines, power plants, etc.</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Flammable gas</li>
              </ul>
              <div class="headline">Body material</div>
              <ul>
                <li>Carbon steel (forged steel)</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>This ball valve for pipelines is designed to prevent leakage without fail by adopting a double seal
                  system for all sealing parts including seat sealing part and a fully welded forged steel body without
                  bolts tightening of the longitudinal weld part.</li>
                <li>Designed to ensure safety in the event of an emergency, it includes a mechanism that prevents fires
                  from occurring due to static electricity, and a fire-safe mechanism that prevents excessive leakage to
                  the outside even if seat disappears due to a fire or the like.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup04" class="card cat--02 cat--03" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Ductile</div>
            <div class="type">Low temperature and high pressure</div>
            <div class="category">General use</div>
            <div class="category">Industrial use</div>
          </div>
          <div class="body">
            <figure class="image">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail04.jpg"
                alt="Ductile" width="500" height="442">
            </figure>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Air-conditioning and sanitation of building equipment, factory production equipment, machine tools,
                  equipment, etc.</li>
                <li>Combustible gas, poisonous gas lines, etc. (certified high-pressure gas)</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Steam, fuel oil, flammable gas</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>Ductile valves are more economical than cast steel/stainless valve.</li>
                <li>This product has a wide operating pressure and temperature range. It can be used not only for
                  general-purpose applications such as building facilities, but also as a valve for high-pressure gas
                  facilities, pressure vessels, and hazardous material storage tanks.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup05" class="card cat--01" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Ultra-low temperature</div>
            <div class="type">Low temperature and high pressure</div>
            <div class="category">Dedicated use</div>
          </div>
          <div class="body">
            <div class="image">
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail05.png"
                  alt="" width="500" height="320">
              </figure>
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail05_2.png"
                  alt="" width="584" height="390">
              </figure>
            </div>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>LNG plants and receiving terminals, chemical industrial plants, etc.</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>LNG (liquefied natural gas) and industrial low-temperature gas</li>
              </ul>
              <div class="headline">Body material</div>
              <ul>
                <li>Stainless steel, cast steel</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>Since the toughness of metals decreases at low temperatures, extremely strict quality control is
                  required.<br>
                  KITZ offers a lineup of products that meet strict T.T.O. guidelines as standard specifications.</li>
                <li>To meet the ultra-low temperatures (-196°C) required for LNG, this product has a characteristic
                  construction, such as a long bonnet that prevents the packing section from being exposed to low
                  temperatures, and a cold insulation plate that prevents rainwater from entering the racking.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup06" class="card cat--02" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Bronze and Brass</div>
            <div class="type">Normal temperature and low pressure</div>
            <div class="category">General use</div>
          </div>
          <div class="body">
            <div class="image">
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail06.png"
                  alt="" width="374" height="375">
              </figure>
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail06_2.png"
                  alt="" width="424" height="362">
              </figure>
            </div>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Air-conditioning and sanitation of building equipment, factory production equipment, machine tools,
                  equipment, etc.</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Water, oil and gas (non-flammable)</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>In addition to KITZ standards, we have a lineup of products that conform to JIS B 2011 "bronze
                  valves."</li>
                <li>CHRYSANTHEMUM-HANDLER, which is attached to bronze and Brass valve, is represented by KITZ.</li>
                <li>The handles are color-coded for their valve application.</li>
                <li>To ensure that the performance of air-conditioning equipment that evolves in response to
                  environmental concerns functions reliably, we have a large lineup of valve for air-conditioning
                  facilities that automatically operate according to the application.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup07" class="card cat--02" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Cast iron</div>
            <div class="type">Normal temperature and low pressure</div>
            <div class="category">General use</div>
          </div>
          <div class="body">
            <figure class="image">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail07.png"
                alt="鋳鉄バルブ" width="387" height="386">
            </figure>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Air-conditioning and sanitation of building equipment, factory production equipment, machine tools,
                  equipment, etc.</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Water, oil and gas (non-flammable)</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>In addition to KITZ standards, we offer a lineup that is compatible with JIS B 2031 "gray cast iron
                  valve."</li>
                <li>The handle is a design that pursues ease of grasping and operability from an ergonomic perspective.
                </li>
                <li>Cast steel PFA nylon lining valves have met 0.01mg/L of the Lead infiltration performance standard
                  for water, and can be used as valve for water supply lines.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup08" class="card cat--01 cat--02" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Water supply and hot water supply</div>
            <div class="type">Normal temperature <br>and low pressure</div>
            <div class="category">Dedicated use</div>
            <div class="category">General use</div>
          </div>
          <div class="body">
            <figure class="image">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail08.png"
                alt="Water supply and hot water supply" width="368" height="359">
            </figure>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Water supply equipment in building equipment</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Water and hot water (drinking)</li>
              </ul>
              <div class="headline">Body material</div>
              <ul>
                <li>Lead-free Copper Alloy "KEEPALOY"</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>By using KEEPALOY as a main component material, we have kept the volume of lead leached below
                  0.01mg/L and satisfied the standard for lead leaching in water supply. This is a valve that can be
                  used with peace of mind in water supply and water supply lines.</li>
                <li>"KEEPALOY" substitutes bismuth and selenium for lead in conventional copper alloys, and is the first
                  lead-free copper alloy material approved by the certification review committee of the Quality
                  Certification Center of the Japan Water Works Association in Japan.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup09" class="card cat--01" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Vent valve</div>
            <div class="type">Normal temperature and low pressure</div>
            <div class="category">Dedicated use</div>
          </div>
          <div class="body">
            <div class="image">
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail09.png"
                  alt="Vent valve" width="375" height="370">
              </figure>
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail09_2.png"
                  alt="Vent valve" width="389" height="230">
              </figure>
            </div>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Wastewater lines for construction equipment and detached houses</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Domestic wastewater</li>
              </ul>
              <div class="headline">Body material</div>
              <ul>
                <li>Resin</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>Most of the air intake ports for drainpipes were installed outdoors, which caused problems such as
                  the release of offensive odors to the outside and the loss of architectural design.<br>
                  KITZ vent valve is a proprietary structure. Air intake is treated indoors.<br>
                  High confidentiality prevents offensive odor emissions from drainpipes and saves space, contributing
                  to greater freedom in building design.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup10" class="card cat--01" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Λ port ball</div>
            <div class="type">Normal temperature and low pressure</div>
            <div class="category">Dedicated use</div>
          </div>
          <div class="body">
            <figure class="image">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail10.png"
                alt="Λ port ball" width="381" height="381">
            </figure>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Pulp and paper manufacturing process in the paper industry</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Paper pulp liquid, slurry, and viscous body</li>
              </ul>
              <div class="headline">Body material</div>
              <ul>
                <li>Stainless steel</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>Generally, if pulp or other fibers are contained in the fluids, balls valve and other products will
                  become stuck when shut down, making it difficult to maintain them.<br>
                  In the case of lambda port valves, the metal edges of λ character shapes do not become stuck as they
                  are closed while cutting contaminants, and are suitable for controlling special fluids such as paper
                  and pulp, slurry, and viscous bodies.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup11" class="card cat--01" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Gas consuming equipment</div>
            <div class="type">Normal temperature and low pressure</div>
            <div class="category">Dedicated use</div>
          </div>
          <div class="body">
            <div class="image">
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail11.png"
                  alt="Gas consuming equipment" width="369" height="374">
              </figure>
            </div>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Gas meters for household use, gas taps for water heaters and combustion appliances, etc.</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Natural gas/LPG</li>
              </ul>
              <div class="headline">Body material</div>
              <ul>
                <li>Forged Brass, bronze, ductile iron</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>Gas plugs for liquefied petroleum gas (LPG) are required to pass compliance inspections under the
                  Act on Assurance of Safety and Proper Transactions of Liquefied Petroleum Gas.</li>
                <li>Features include a double-lock mechanism that prevents the valve from being opened due to
                  mishandling or misoperation, and a double-seal structure that prevents external leakage.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup12" class="card cat--01" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Sewage</div>
            <div class="type">Normal temperature and low pressure</div>
            <div class="category">Dedicated use</div>
          </div>
          <div class="body">
            <div class="image">
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail12.png"
                  alt="Sewage" width="360" height="365">
              </figure>
            </div>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Wastewater and sewage treatment facilities</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Sewage sludge, treated water, wastewater, and agricultural water</li>
              </ul>
              <div class="headline">Body material</div>
              <ul>
                <li>Cast iron, stainless steel</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>It is a body design that is resilient to fluid pressure and pipe stress, and is applicable to sewage
                  sludge, treated water, wastewater, and agricultural water.</li>
                <li>Internal and external surfaces paint is environmentally friendly because it does not use lead-or
                  organic solvents, although it has a high degree of anticorrosion resistance.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup13" class="card cat--01" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Fire-fighting equipment</div>
            <div class="type">Normal temperature and low pressure</div>
            <div class="category">Dedicated use</div>
          </div>
          <div class="body">
            <div class="image">
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail13.png"
                  alt="Fire-fighting equipment" width="379" height="384">
              </figure>
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail13_2.png"
                  alt="Fire-fighting equipment" width="241" height="177">
              </figure>
            </div>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Fire extinguishing equipment in building equipment</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Water, carbon dioxide, and fire-extinguishing agents</li>
              </ul>
              <div class="headline">Body material</div>
              <ul>
                <li>Ductile iron, aluminum, bronze</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>Fire-fighting valve must meet the standards of safety and reliability permitted by the Fire Defense
                  Law because their failure to operate properly affects human lives.</li>
                <li>KITZ's valve for fire-fighting facilities is recognized by the Fire-fighting Equipment Safety
                  Service's Fire-fighting Equipment Certification Committee as having performance equal to or greater
                  than valve as stipulated in Article 12-1-6 of the Fire Defense Law Enforcement Regulations and Article
                  31-5-D.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup14" class="card cat--01" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Water supply</div>
            <div class="type">Normal temperature and low pressure</div>
            <div class="category">Dedicated use</div>
          </div>
          <div class="body">
            <figure class="image">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail14.png"
                alt="Water supply" width="368" height="359">
            </figure>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Water distribution facilities</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Water supply</li>
              </ul>
              <div class="headline">Body material</div>
              <ul>
                <li>Ductile iron, stainless steel</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>KITZ Group develops and sells water supply valve and equipment from Shimizu Co., Ltd.</li>
                <li>Its superior earthquake resistance and durability make it possible to protect lifelines for a long
                  period of time, such as preventing water leakage in the event of an earthquake.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup15" class="card cat--02 cat--03" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">Stainless steel</div>
            <div class="type">Wide range</div>
            <div class="category">General use</div>
            <div class="category">Industrial use</div>
          </div>
          <div class="body">
            <div class="image">
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail15.png"
                  alt="Stainless steel" width="361" height="357">
              </figure>
              <figure>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail15_2.png"
                  alt="Stainless steel" width="501" height="319">
              </figure>
            </div>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Extremely wide range, from construction facilities and machinery to chemicals, petrochemicals,
                  electric power and gas, and food</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li> Applicable to various fluids</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>We have developed a series of products for each domestic and overseas compliance standard, and have
                  a wide range of products, from economical series suitable for general industrial equipment and
                  building equipment to high-grade series that can withstand high corrosion resistance from low
                  temperature, low pressure to high temperature and high pressure.</li>
                <li>The Ball valve (TDZ Series) is compatible with international standards for all types of drive units
                  around the world, and many other models are equipped with pneumatic and electric actuators.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
        <div id="popup16" class="card cat--01" data-simplebar data-simplebar-auto-hide="false">
          <div class="prepend">
            <div class="name">For semiconductor installation</div>
            <div class="type">Normal temperature and negative pressure</div>
            <div class="category">Dedicated use</div>
          </div>
          <div class="body">
            <figure class="image">
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/reference/location/detail16.png"
                alt="For semiconductor installation" width="500" height="320">
            </figure>
            <div class="text">
              <div class="headline">Scene of use</div>
              <ul>
                <li>Vacuum system piping in semiconductor manufacturing lines<br>
                  ※In addition to vacuum piping, high-purity gas piping is also available.</li>
              </ul>
              <div class="headline">Main applicable fluids</div>
              <ul>
                <li>Gas</li>
              </ul>
              <div class="headline">Body material</div>
              <ul>
                <li>Aluminum alloy, stainless steel</li>
              </ul>
              <div class="headline">Point of technology</div>
              <ul>
                <li>Reaction-by-products generated in the process of semiconductor/liquid crystal manufacturing
                  equipment adhere to the inside of valve of the vacuum-exhaust line. As a result, valve sealing is not
                  possible, and maintenance has been performed frequently.<br>
                  KITZ SCT vacuum valve enables heat control within valve to ensure adequate temperature. This allows
                  for long-term sealing and durability to prevent the deposition of reaction byproducts.</li>
              </ul>
              <div class="append">
                <button type="button" class="bt--close">back</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ここまで -->
    <?php get_footer(); ?>