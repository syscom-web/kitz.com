$(function () {
	'use strict';

	const searchParams = new URLSearchParams(location.search);
	const searchContent = searchParams.get('content');

	if (searchContent == 2) {
		$('select[name="お問い合わせ内容"]').val('投資・総会・IR情報に関するお問い合わせ');
	}
});