/*!
* FORM SURVEY
* 
*/


/* -- FIRST LOAD --*/
/* load welcome dialog first */
if ($.cookie('pop') == null) {
	$(".preloader-layout").fadeOut(1200, function () {
		$(this).addClass('loaded');
	});
}

$(document).ready(function () {

	$(".preloader-layout").fadeOut(1200, function () {
		$(this).addClass('loaded');
	});

	/* -- NAVBAR --*/

	$('.btn-navbar-search').on('click', function (e) {
		e.preventDefault();
		$('.navbar-search').toggleClass('open');
		$(this).find('.fa').toggleClass('fa-search fa-times');
	});

	$('.navbar-toggler').on('click', function (e) {
		e.preventDefault();
		$('.navbar-collapse').toggleClass('navbar-open');
		$(this).parents('.wrapper').find('.layout-page').toggleClass('overlay', 200);
		var navbartoggle = $('.navbar-toggler');
		var spanfirst = $('span.icon-bar:nth-of-type(1)');
		var spansecond = $('span.icon-bar:nth-of-type(2)');
		var spanlast = $('span.icon-bar:nth-of-type(3)');
		navbartoggle.toggleClass('open');

		if (navbartoggle.hasClass('open')) {
			spanfirst.css('transform', 'rotate(45deg)');
			spansecond.css('transform', 'rotate(-45deg)');
			spanfirst.css('margin-top', '4px');
			spansecond.css('margin-top', '-7px');
			spanlast.css('display', 'none');
		} else {
			spanfirst.css('transform', 'rotate(0deg)');
			spansecond.css('transform', 'rotate(0deg)');
			spanfirst.css('margin-top', '5px');
			spansecond.css('margin-top', '5px');
			spanlast.css('display', 'block');
		}
	});

	/* -- FANCYBOX --*/

	$('.fancybox').fancybox({
		afterLoad: function (instance, current) {
			var pixelRatio = window.devicePixelRatio || 1;

			if (pixelRatio > 1.5) {
				current.width = current.width / pixelRatio;
				current.height = current.height / pixelRatio;
			}
		}
	});

	$('.fancybox-video').fancybox({
		afterLoad: function (instance, current) {
			var pixelRatio = window.devicePixelRatio || 1;

			if (pixelRatio > 1.5) {
				current.width = current.width / pixelRatio;
				current.height = current.height / pixelRatio;
			}
		}
	});

	/* -- AOS --*/

	$(window).on('load', function (event) {
		AOS.init({
			disable: function () {
				var maxWidth = 991;
				return window.innerWidth < maxWidth;
			}
		});
	});
	$(window).resize(function (event) {
		AOS.init({
			disable: function () {
				var maxWidth = 991;
				return window.innerWidth < maxWidth;
			}
		});
	});

	/* -- PREVIEW ANSWER--*/

	$(document).on('select2:select', 'select[id^="question_type-"]', function (e) {
		var selected = $(e.currentTarget).val();
		var id = $(this).attr('id').replace("question_type-", "");

		if (selected == 'text') {
			var html = '<div class="form-group form-survey-box">' +
				'<input type="text" class="form-control" name="answer-' + id + '" placeholder="Your Answer" value=""></div>';
			$(".preview_answer-" + id).html(html);

		} else if (selected == 'pilihan_ganda') {
			var html = '<div class="form-group form-survey-box">' +
				'<div class="option-item item-1"><div class="option-action"></div><input type="radio" name="radio"><input type="text" class="form-control " placeholder="Option 1" name="answer-' + id + '_1" value=""></div>' +
				'<div class="option-item item-2"><div class="option-action"></div><input type="radio" name="radio"><input type="text" class="form-control " placeholder="Option 2" name="answer-' + id + '_2" value=""></div>' +
				'<div class="empty-option"><button type="button" class="btn-plus js-add-option"><i class="fas fa-plus"></i></button></div></div>';
			$(".preview_answer-" + id).html(html);
		} else if (selected == 'checklist') {
			var html = '<div class="form-group form-survey-box">' +
				'<div class="option-item item-1"><div class="option-action"></div><input type="checkbox" name="checkbox"><input type="text" class="form-control " placeholder="Option 1" name="answer-' + id + '_1" value=""></div>' +
				'<div class="option-item item-2"><div class="option-action"></div><input type="checkbox" name="checkbox"><input type="text" class="form-control " placeholder="Option 2" name="answer-' + id + '_2" value=""></div>' +
				'<div class="empty-option"><button type="button" class="btn-plus js-add-option"><i class="fas fa-plus"></i></button></div></div>';
			$(".preview_answer-" + id).html(html);
		} else {
			$(".preview_answer-" + id).html(html);
		}

	});


	/* -- ADD QUESTION--*/

	$(document).on("click", ".js-add-question", function () {
		var countBox = $('.question-item').length;

		var currentName = $('.question-item').last().find('textarea[id^="question-"]').attr('name');
		var order = currentName.replace(/question-/g, "");
		var totalCount = parseInt(order) + 1;
		console.log(totalCount);

		var $empty = $('.empty-form').clone();
		$('.empty-form').after($empty);
		var $question = $('.question-item').last().clone();
		$('.empty-form').eq(-2).replaceWith($question);
		$('.question-item').last().removeClass(function (index, className) {
			return (className.match(/(^|\s)item-\S+/g) || []).join(' ');
		});
		$('.question-item').last().addClass('item-' + totalCount);
		var deletequestion = 'Pertanyaan ' + totalCount + '<button type="button" class="btn-delete js-delete-question"><i class="fas fa-times"></i></button>';
		$('.question-item').last().find('.question-order').html(deletequestion);

		$('.question-item').last().find('.answer-box').html("");

		$('.question-item').last().find('textarea[name^="question-"]').attr('name', 'question-' + totalCount);
		$('.question-item').last().find('textarea[name^="question-"]').attr('id', 'question-' + totalCount);
		$('.question-item').last().find('select[id^="question_type-"]').attr('id', 'question_type-' + totalCount);
		$('.question-item').last().find('select[name^="question_type-"]').attr('name', 'question_type-' + totalCount);
		$('.question-item').last().find('input[id^="requirability-"]').attr('id', 'requirability-' + totalCount);
		$('.question-item').last().find('input[name^="requirability-"]').attr('name', 'requirability-' + totalCount);
		$('.question-item').last().find('input[name^="requirability-"]').attr('name', 'requirability-' + totalCount);
		$('.question-item').last().find('.answer-box').attr('class', 'answer-box preview_answer-' + totalCount);

		var htmlselect = '<select class=" js-select2" name="question_type-1" id="question_type-'+totalCount+'" required>' +
			'<option value=""></option>' +
			'<option value="text">Text</option>' +
			'<option value="pilihan_ganda">Pilihan Ganda</option>' +
			'<option value="checklist">Checklist</option>' +
			'</select>';

		$('.question-item').last().find('select[name^="question_type-' + totalCount + '"]').closest('.select-survey-box').html(htmlselect);
		$('.js-select2').select2({
			placeholder: {
				id: '',
				text: 'Pilih Tipe Pertanyaan'
			  },
			  allowClear: true
		});

	});

	/* -- ADD OPTION--*/

	$(document).on("click", ".js-add-option", function () {
		var count = $(this).closest('.answer-box').find('.option-item').length;
		var totalCount = parseInt(count) + 1;
		console.log(totalCount);

		var currentOption = $(this).closest('.answer-box').attr('class');
		var current = currentOption.replace(/answer-box preview_answer-/g, "");
		console.log(current);

		var $empty = $(this).closest('.empty-option').clone();
		$(this).closest('.empty-option').after($empty);
		var $option = $(this).closest('.answer-box').find('.option-item').last().clone();
		$(this).closest('.answer-box').find('.empty-option').eq(-2).replaceWith($option);
		
		$('.option-item').removeClass(function (index, className) {
			return (className.match(/(^|\s)item-\S+/g) || []).join(' ');
		});
		$('.preview_answer-'+current).find('.option-item').each(function (i) {
			$(this).addClass('item-' + (i + 1));
			$(this).find('input[type=text]').attr("placeholder", "Option " + (i + 1));
		});
		var deletequestion = '<button type="button" class="btn-delete js-delete-option"><i class="fas fa-times"></i></button>';
		$('.preview_answer-'+current).find('.option-action').last().html(deletequestion);

	});

	/* -- DELETE QUESTION--*/

	$(document).on("click", ".js-delete-question", function () {
		var currentName = $(this).closest('.question-item').find('textarea[id^="question-"]').attr('name');
		var order = currentName.replace(/question-/g, "");
		var countAct = $(this).closest('.question-box').find('.empty-form').length;
		var totalItem = $(this).closest('.question-box').find('.question-item').length;
		var now = parseInt(totalItem) - 1;
		console.log(totalItem);

		var action = "<div class='empty-form'>" +
			"<button class=' btn-plus js-add-question'><i class='fas fa-plus'></i></button>" +
			"</div></div>";

		if (countAct < 1) {
			$(this).closest('.question-box').find('.question-item').last().after(action);
		}

		$(this).closest('.item-' + order).remove();

		$('.question-box .question-item').last().removeClass(function (index, className) {
			return (className.match(/(^|\s)item-\S+/g) || []).join(' ');
		});
		$('.question-box .question-item').each(function (i) {
			$(this).addClass('item-' + (i + 1));
			$(this).not(':first-child').find('.question-order').html('Pertanyaan ' + (i + 1) + '<button class="btn-delete js-delete-question"><i class="fas fa-times"></i></button>');
			$(this).find('textarea[name^="question-"]').attr('name', 'question-' + (i + 1));
			$(this).find('textarea[id^="question-"]').attr('id', 'question-' + (i + 1));
			$(this).find('select[name^="question_type-"]').attr('name', 'question_type-' + (i + 1));
			$(this).find('select[id^="question_type-"]').attr('id', 'question_type-' + (i + 1));
			$(this).find('input[name^="requirability-"]').attr('name', 'requirability-' + (i + 1));
			$(this).find('input[id^="requirability-"]').attr('id', 'requirability-' + (i + 1));
			$(this).find('.answer-box').attr('class', 'answer-box preview_answer-' + (i + 1));
		});

	});

	/* -- DELETE OPTION--*/

	$(document).on("click", ".js-delete-option", function () {
		var currentName = $(this).closest('.option-item').attr('class');
		var order = currentName.replace(/option-item item-/g, "");
		var countAct = $(this).closest('.answer-box').find('.empty-option').length;
		var totalItem = $(this).closest('.answer-box').find('.empty-option').length;
		var now = parseInt(totalItem) - 1;
		

		var currentOption = $(this).closest('.answer-box').attr('class');
		var current = currentOption.replace(/answer-box preview_answer-/g, "");
		console.log(current);

		var action = "<div class='empty-option'>" +
			"<button class=' btn-plus js-add-option'><i class='fas fa-plus'></i></button>" +
			"</div></div>";

		if (countAct < 1) {
			$(this).closest('.answer-box').find('.option-item').last().after(action);
		}

		$(this).closest('.item-' + order).remove();

		$('.option-item').removeClass(function (index, className) {
			return (className.match(/(^|\s)item-\S+/g) || []).join(' ');
		});

		$('.preview_answer-'+current).find('.option-item').each(function (i) {
			$(this).addClass('item-' + (i + 1));
			$(this).find('input[type=text]').attr("placeholder", "Option " + (i + 1));
		});

	});

});



