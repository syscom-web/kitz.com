<?php
$array_nav = [
	["会社を知る", "company"],
	["働く環境を知る", "environment"],
	["仕事を知る", "work"],
	["人を知る", "person"],
];
$array_btn = [
	["新卒採用情報", "information", "blue"],
	["社会人採用情報", "career", "green"],
	["グループ採用情報", "group", "pink"],
];
global $post;
$slug = $post->post_name;
$recruit_top_flg = ($slug == "recruit");
?>

<header id="header" class="l-recruit-header">

	<!-- PC版 -->
	<div class="l-recruit-header__pc">
		<?php if ($recruit_top_flg) : ?>
			<h1 class="l-recruit-header__logo">
				<a href="<?php echo esc_url(home_url() . '/recruit'); ?>">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/common/cmn-logo01.svg'); ?>" alt="KITZ Recruit">
				</a>
        <a href="/">KITZ ホームページ<span>→</span></a>
			</h1>
		<?php else : ?>
			<div class="l-recruit-header__logo">
				<a href="<?php echo esc_url(home_url() . '/recruit'); ?>">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/common/cmn-logo01.svg'); ?>" alt="KITZ Recruit">
				</a>
        <a href="/">KITZ ホームページ<span>→</span></a>
			</div>
		<?php endif; ?>
		<nav class="l-recruit-header__nav">
			<ul class="l-recruit-header__list">
				<?php for ($i = 0; $i < count($array_nav); $i++) :
					$item = $array_nav[$i];
					$num = $i + 1; ?>
					<li class="l-recruit-header__item0<?php echo $num ?>">
						<a href="<?php echo esc_url(home_url() . '/recruit/' . $item[1]); ?>"><?php echo $item[0]; ?></a>
					</li>
				<?php endfor; ?>
			</ul>
		</nav>
		<ul class="l-recruit-header__btns">
			<?php for ($i = 0; $i < count($array_btn); $i++) :
				$item = $array_btn[$i];
				$num = $i + 1;
			?>
				<li class="l-recruit-header__btn0<?php echo $num; ?> l-recruit-header__btn--<?php echo $item[2]; ?>">
					<a href="<?php echo esc_url(home_url() . '/recruit/' . $item[1]); ?>" class="u-href-100"><span><?php echo $item[0]; ?></span></a>
				</li>
			<?php endfor; ?>
		</ul>
	</div>

	<!-- スマホ版 -->
  <nav class="l-recruit-header-sp__nav for-drawer">
			<div class="l-recruit-header-sp__nav-inner c-inner">
				<ul class="l-recruit-header-sp__list">
					<li class="l-recruit-header-sp__item01">
						<a href="<?php echo esc_url(home_url() . '/recruit/'); ?>" class="u-href-100">ホーム</a>
					</li>
					<li class="l-recruit-header-sp__item02">
						<a href="<?php echo esc_url(home_url() . '/recruit/message/'); ?>" class="u-href-100">人事担当役員メッセージ</a>
					</li>
					<?php for ($i = 0; $i < count($array_nav); $i++) :
						$item = $array_nav[$i];
						$num = $i + 2; ?>
						<li class="l-recruit-header-sp__item0<?php echo $num ?>">
							<a href="<?php echo esc_url(home_url() . '/recruit/' . $item[1]); ?>" class="u-href-100"><?php echo $item[0]; ?></a>
						</li>
					<?php endfor; ?>
          <li class="l-recruit-header-sp__item02">
						<a href="/" class="u-href-100">KITZ ホームページ</a>
					</li>
				</li>
				</ul>
				<div class="l-recruit-header-sp__form">
					<form id="cse-search-box" action="/recruit/result">
						<input type="hidden" name="cx" value="017674238351621653715:dlyzexvor0k" />
						<input type="hidden" name="ie" value="UTF-8" />
						<input type="text" name="q" style="background: white;" />
						<input type="submit" name="sa" value="検索" />
					</form>
				</div>
				<?php $link = $array_btn[2]; // グループ採用情報
				?>
			</div>
		</nav>
	<div class="l-recruit-header__sp l-recruit-header-sp">
		<div class="l-recruit-header-sp__inner c-inner">

			<?php if ($recruit_top_flg) : ?>
				<h1 class="l-recruit-header-sp__logo">
					<a href="<?php echo esc_url(home_url() . '/recruit'); ?>" class="u-href-100">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/common/cmn-logo01.svg'); ?>" alt="KITZ Recruit">
					</a>
				</h1>
			<?php else : ?>
				<div class="l-recruit-header-sp__logo">
					<a href="<?php echo esc_url(home_url() . '/recruit'); ?>" class="u-href-100">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/images/recruit/common/cmn-logo01.svg'); ?>" alt="KITZ Recruit">
					</a>
				</div>
			<?php endif; ?>
			<div class="l-recruit-header-sp__menu js-drawer">
				<span class="l-recruit-header-sp__bar01 for-drawer"></span>
				<span class="l-recruit-header-sp__bar02 for-drawer"></span>
				<span class="l-recruit-header-sp__bar03 for-drawer"></span>
			</div>
		</div>
	</div>

</header>