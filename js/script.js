/*==================================================

** PC header
==================================================*/

(function() {
    var header = document.querySelector('#header');
    var logos = document.querySelectorAll('.js-logo');

    function toggleClass() {
        var y = window.pageYOffset;
        if (y > 100) {
            header.classList.add('fixed');
            logos.forEach(function (logo) {
                return logo.setAttribute('src', logo.getAttribute('src').replace('_pc', '_sp'));
            });
        } else {
            header.classList.remove('fixed');
            logos.forEach(function (logo) {
                return logo.setAttribute('src', logo.getAttribute('src').replace('_sp', '_pc'));
            });
        }
    }

    window.addEventListener('scroll', toggleClass);

    return false;
})();



/*==================================================

** SP Menu (Slide)
==================================================*/

// 変数menuBtn=id「menuBtn」がついたdivのかたまり、とする。の意味。
// document全体に対してquerySelector()を実行。引数にCSSセレクタを指定することで、任意のHTML要素を取得する。
(function() {
	var menuBtn = document.querySelector('#menuBtn');
	var body = document.querySelector('body');

	// toggleは指定したclassを持っている場合は削除、持っていなければ追加の処理をするメソッド。
	function toggleClass() {
		body.classList.toggle('opened');
	}

	// click=マウスによるクリック操作を検出して任意のイベント処理を実行させることができるメソッド
    menuBtn.addEventListener('click', toggleClass);
    
    return false;
})();




/*==================================================

** pagetop (Smooth scroll)
==================================================*/

jQuery(function($) {
	$(window).load(function() {
		var topBtn = $('#pagetop');

		//最初はボタンを隠す
		topBtn.hide();

		//スクロールが200に達したらボタンを表示させる
		$(window).scroll(function () {
			if ($(this).scrollTop() > 200) {
				topBtn.fadeIn();
			} else {
				topBtn.fadeOut();
			}
		});

		//スクロール量がBottom**に達したらfixedやめる
		$(window).scroll(function (){
			var footer = $("#footer")
			if (window.innerWidth < 769) {
				footer.each(function(){
					var footerPos = $(this).offset().top;    
					var scroll = $(window).scrollTop();
					var windowHeight = $(window).height();
					if (scroll > footerPos - windowHeight + windowHeight/5 - 55){
						topBtn.addClass('active');
	
					} else {
						topBtn.removeClass('active');
					}
				});
			}
		});

		//スクロールしてトップに戻る
		//500の数字を大きくするとスクロール速度が遅くなる
		topBtn.click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 500);

			return false;
		});
	});
});


