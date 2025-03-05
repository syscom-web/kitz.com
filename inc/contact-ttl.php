<?php if ($_GET['country']) : ?>
  <?php
  $contact_ttl = '';

  if ($_GET['country'] === 'canada') {
    $contact_ttl = 'Canada';
  } elseif ($_GET['country'] === 'usa') {
    $contact_ttl = 'USA, Other countries in North &amp; Central America';
  } elseif ($_GET['country'] === 'south-america') {
    $contact_ttl = 'South America';
  }

  elseif ($_GET['country'] === 'europe') {
    $contact_ttl = 'Europe';
  }

  elseif ($_GET['country'] === 'korea') {
    $contact_ttl = 'Korea';
  } elseif ($_GET['country'] === 'china') {
    $contact_ttl = 'China';
  } elseif ($_GET['country'] === 'hong-kong') {
    $contact_ttl = 'Hong Kong';
  } elseif ($_GET['country'] === 'taiwan') {
    $contact_ttl = 'Taiwan';
  }

  elseif ($_GET['country'] === 'thailand') {
    $contact_ttl = 'Thailand';
  } elseif ($_GET['country'] === 'vietnam') {
    $contact_ttl = 'Vietnam';
  } elseif ($_GET['country'] === 'singapore') {
    $contact_ttl = 'Singapore';
  } elseif ($_GET['country'] === 'malaysia') {
    $contact_ttl = 'Malaysia';
  } elseif ($_GET['country'] === 'philippines') {
    $contact_ttl = 'Philippines';
  } elseif ($_GET['country'] === 'indonesia') {
    $contact_ttl = 'Indonesia';
  }

  elseif ($_GET['country'] === 'oceania') {
    $contact_ttl = 'Oceania';
  }

  elseif ($_GET['country'] === 'south-asia01') {
    $contact_ttl = 'India';
  } elseif ($_GET['country'] === 'south-asia02') {
    $contact_ttl = 'South Asia(Pakistan,Srilanka,Bangradesh)';
  } elseif ($_GET['country'] === 'middle-east') {
    $contact_ttl = 'Middle East';
  } elseif ($_GET['country'] === 'africa') {
    $contact_ttl = 'Africa';
  }

  elseif ($_GET['country'] === 'other') {
    $contact_ttl = 'Other countries';
  }

  elseif ($_GET['country'] === 'kitz-vietnam') {
    $contact_ttl = 'KITZ Corporation of Vietnam Co.,Ltd.';
  }
  ?>
  <p class="p-company-inquiry__txt">This page is for inquiries to <em><?php echo $contact_ttl; ?></em>.</p>
<?php endif; ?>