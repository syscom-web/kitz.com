<!DOCTYPE html>
<html lang="ja">

<head>
	<?php get_template_part("php-recruit/_recruit-head"); ?>
</head>

<body>
	<div class="p-archive-enviroment">

		<!-- ヘッダー -->
		<?php get_template_part("php-recruit/_recruit-header"); ?>

		<!-- トップ -->
		<?php get_template_part("php-recruit/_recruit-top"); ?>

		<!-- メイン -->
		<section class="p-archive-environment__main c-inner u-page-pt u-page-px u-page-bb">
			<div class="p-archive-environment-main">
				<h2 class="u-page-title u-page-title--orange u-page-title--sp-small">私たちの働く環境</h2>

				<p class="p-archive-environment-main__txt">キッツは本社を千葉県千葉市に、工場を山梨県と長野県に、そのほか営業拠点を日本全国に展開しています。</p>

				<!-- 本社 -->
				<div class="p-archive-environment-main__headquarters">
					<a href="<?php echo esc_url(home_url() . "/recruit/environment/headquarters"); ?>" class="u-href-100">
						<img src="<?php echo esc_url(get_template_directory_uri() . "/images/recruit/archive-environment/archive-environment-sec01-img01.png") ?>" alt="本社" class="u-display-only-pc">
						<img src="<?php echo esc_url(get_template_directory_uri() . "/images/recruit/archive-environment/archive-environment-sec01-img02.png") ?>" alt="本社" class="u-display-only-sp">
					</a>
				</div>

				<!-- 支社 -->
				<div class="p-archive-environment-main__branch">
					<?php $array_branch = [
						["長坂工場（山梨県）", "nagasaka"],
						["伊那工場（長野県）", "ina"],
						["茅野工場（長野県）", "chino"]
					]; ?>
					<ul class="p-archive-environment-main-branch">
						<?php for ($i = 0; $i < count($array_branch); $i++) :
							$item = $array_branch[$i];
							$num = $i + 1;
						?>
							<li class="p-archive-environment-main-branch__item">
								<a href="<?php echo esc_url(home_url() . "/recruit/environment/" . $item[1]); ?>" class="p-archive-environment-main-branch-item u-href-100">
									<div class="p-archive-environment-main-branch-item__img">
										<img src="<?php echo esc_url(get_template_directory_uri() . "/images/recruit/archive-environment/archive-environment-sec01-img0" . ($num * 2 + 1) . ".png") ?>" alt="<?php echo $item[0]; ?>" class="u-display-only-pc">
										<img src="<?php echo esc_url(get_template_directory_uri() . "/images/recruit/archive-environment/archive-environment-sec01-img0" . ($num * 2 + 2) . ".png") ?>" alt="<?php echo $item[0]; ?>" class="u-display-only-sp">
									</div>
									<div class="p-archive-environment-main-branch-item__content">
										<p class="p-archive-environment-main-branch-item__txt"><?php echo $item[0]; ?></p>
										<span class="p-archive-environment-main-branch-item__circle c-circle c-circle--orange c-circle--medium">→</span>
									</div>
								</a>
							</li>
						<?php endfor; ?>
					</ul>
				</div>



			</div><!-- /.p-archive-environment-main -->
		</section>

		<!-- フッター -->
		<?php get_template_part("php-recruit/_recruit-footer"); ?>
	</div>

	<?php wp_footer(); ?>
</body>

</html>