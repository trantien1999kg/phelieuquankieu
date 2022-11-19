"use strict";

_FRAMEWORK={

    init:()=>{

		_FRAMEWORK.pageLoad();

		_FRAMEWORK.searchPage();

		_FRAMEWORK.searchPC();

        _FRAMEWORK.owlSlider();

		_FRAMEWORK.owlClass();

		_FRAMEWORK.marQuee();

		_FRAMEWORK.tocList();

		_FRAMEWORK.submitContact();

		_FRAMEWORK.newsLetter();

		_FRAMEWORK.mobiTool();

		_FRAMEWORK.mmenu();

		_FRAMEWORK.chaychu();

		_FRAMEWORK.map();

		_FRAMEWORK.simple();
		_FRAMEWORK.loadCover();

    },
	loadCover:()=>{
        $(".js-loadcover").each(function(){
            let $this = $(this);
            let parent = $this.closest(".thumb-box");
            let pwidth = parseFloat(parent.outerWidth());
            let pheight = parseFloat(parent.outerHeight());
            let ratioparent = parseFloat(pheight / pwidth);
            let src = $(this).attr('src');
            fetch(src).then((res) => res.blob()).then((imgblob) => { 
                const url = URL.createObjectURL(imgblob);
                let img = new Image();
                img.src = url;
                img.onload = function()
                {
                    let ratioimg = parseFloat(this.height / this.width);
                    if(ratioimg > ratioparent){
                        $this.addClass('thumb-cover-w');
                        $this.addClass('loaded');
                    }else{
                        $this.addClass('thumb-cover-h');
                        $this.addClass('loaded');
                    }
                }
            }); 
        })
    },
	simple:()=>{
		$('.js-triggerslide').click(function(){
			let target = $(this).data('target');
			let index = $(this).data('index');
			var $speed = 500;  // in ms
			$(target).trigger('to.owl.carousel', [index, $speed] );
		})
	},
	remove:(id)=>{
        $(id).remove();
    },
	mmenu:function(){
		$('#keywords').placeholderTypewriter({text: _PLACEHOLDER});
		if(exists("nav#mmenu")){
	
			$('nav#mmenu').mmenu({
	
				extensions  : [ 'effect-slide-menu', 'pageshadow' ],
	
				searchfield : false,
	
				counters  : false,
	
				offCanvas: {
	
					position  : "left"
	
				}
	
			});
	
		}
	},
	loadTab:(url,params,tab,overwrite = true)=>{
        $("#loader").addClass('active');
        $.post(url,params,(data,status)=>{
            if(status=='success'){
                if(overwrite){
                    $(tab).html(data);
                }else{
                    $(tab).append(data);
                }
                $("#loader").removeClass('active');
            }
        });
    },

	
	pageLoad:()=>{
		$('.i-view-search').click(()=>{

			if(!$('.i-view-search').hasClass('active')){

				$('.i-view-search').addClass('active');

				$('.i-open').addClass('open');

				$('.i-view-search img').attr('src','assets/images/close.svg');

			}else{

				$('.i-view-search').removeClass('active');

				$('.i-open').removeClass('open');

				$('.i-view-search img').attr('src','assets/images/search.png');
			}

		});
		if(exists('.section__map')){

			$('.box__list-map ul li').click(function(){

				let $this = $(this);

				let id=$this.data('id');

				$('.box__list-map ul li').removeClass('active');

				$this.addClass('active');

				$.ajax({

					url:'ajax/loadMap.php',

					data:{id:id},

					type:'post',

					success: function(data){

						$('.iframe__map').html(data);

					}

				});

			});

		}
		if(_INDEX=="true"){
			// countNumberWhenScrollPage('.section__abouts','.count-number');
			// _FRAMEWORK.loadTab("ajax/loadTab.php", {
			// 	com: "product",
			// 	list: 0,
			// 	cat: 0,
			// 	tab: "#probox"
			// }, '#probox');
			$('.catalogue .ul li').click(function(){
				let $this=$(this);
				let $target = $this.data('target');
				$('.catalogue .ul li').removeClass('active');
				$this.addClass('active');
				$('#tabs-list .tabs-content').css({'display':'none'});
				$(`[data-role="${$target}"]`).css({'display':'block'});
			});
			
			$('ul.ul-payments>li').click(function(){
				let $this=$(this);
				let $target = $this.data('role');
				$('ul.ul-payments>li').removeClass('active');
				$this.addClass('active');
				$('#payment-tabs .payment-tabs').css({'display':'none'});
				$(`[data-view="${$target}"]`).css({'display':'block'});
			});
		
		}
	},
	toggle: function(id){
        $(id).toggleClass('active');
    },
	submitForm:(form)=>{
        var valid = $(form).find('[data-validate]');   
        var flag = false;
        var errmsg = "";
        valid.each(function(){
            let value = $(this).val();
            let message = $(this).data('message')
            if(isBlank(value)){
                errmsg = message;
                flag = true;
                return;
            }
            let valide = $(this).data('validate-email');
            let validp = $(this).data('validate-phone');
            if (typeof valide !== 'undefined' && valide !== false) {
                if(!isEmail(value)) {
                    errmsg = 'Email không đúng định dạng';
                    flag = true;
                    return;
                }
            }
            if (typeof validp !== 'undefined' && validp !== false) {
                if(!validatePhone(value)) {
                    errmsg = 'Số điện thoại không đúng định dạng';
                    flag = true;
                    return;
                }
            }
			if (typeof validp !== 'undefined' && validp !== false) {
                if(!validatePhone(value)) {
                    errmsg = 'tên';
                    flag = true;
                    return;
                }
            }
        });
        if(flag) {
            _FRAMEWORK.showError(errmsg,'error');
            return false;
        }
        $.ajax({
            url:'ajax/bookingsend.php',
            type:'post',
            data:$(form).serialize(),
            dataType:'json',
            beforeSend:()=>{
                $("#loader").addClass('active');
            },
            error:function(){
                _FRAMEWORK.showError('Lỗi hệ thống','error');
            },
            success:(res)=>{
				console.log($(form));
				$(form)[0].reset();
                _FRAMEWORK.showError(res.message,res.error);
            },complete:()=>{
                $("#loader").removeClass('active');
            }
        })
    },
	searchPage:function(){

	    $('button.btn-search').click(function(){

        	var t=$('#keywords');

	        searchEnter(t);

	    });

	    $('#keywords').keypress(function(e){

	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });
		$('.fa-search[data-view]').click(function(){

        	var t=$('#keywords2');

	        searchEnter(t);

	    });

	    // $('#keywords2').keypress(function(e){

	    //     if(e.which==13){

	    //         searchEnter($(this));

	    //     }

	    // });
	},
	searchPC:function(){

	    $('button.btn-search').click(function(){

        	var t=$('#keyword-popup');

	        searchEnter(t);

	    });

	    $('#keyword-popup').keypress(function(e){

	        if(e.which==13){

	            searchEnter($(this));

	        }

	    });
		$('.fa-search[data-view]').click(function(){

        	var t=$('#keywords2');

	        searchEnter(t);

	    });

	    // $('#keywords2').keypress(function(e){

	    //     if(e.which==13){

	    //         searchEnter($(this));

	    //     }

	    // });
	},
	showError:function(message,status){



		$.toast({



		   heading: 'Thông báo',



		   text: message,



		   position: 'top-right',



		   stack: false,



		   icon: status



	   });



   },
   map:function(){
	$(".js-active").click(function(){
		var $this = $(this);
		var targetid = $this.attr("data-target");
		$(".js-active").removeClass("active");
		
		$this.addClass("active");
		if(!$(targetid).hasClass("active")){	
			$(targetid).addClass("active");			
		}else{
			$(targetid).removeClass("active");	
		}
	});
	$('body').click(".js-map",function(e){
		var id = e.target.getAttribute('data-id');
		if(id != "" & id != null & id != undefined){
			var params = {id:id};
		}else{
			if(e.target.classList.contains('js-map')){
				params = {};
			}
		}
		if(e.target.classList.contains('js-map')){
			$.post("ajax/loadMap.php",params,
			function(data,status){
				if(status == "success"){
					$("body").append(data);
					$(".close-modal").click(function(){
						$("#modal-map").remove();
					})
				}
			})
			$("body").click(".modalmap,.modalmap-container",function(event){   
				var modals = document.getElementById("modal-map");   
				var container = document.getElementById("modalmap-container");
				if(event.target == modals || event.target == container){
					$("#modal-map").remove();
				}
			})
		}
	});
},
mobiTool: function(){
	$('.js-mobi-tool').click(function(){
		var $this = $(this);
		var target = $this.data('target');
		var id = $this.attr('id');
		$('.js-mobi-tool').each(function(){
			if($(this).attr('id') != id & $(this).find('.mobi-tool-act').hasClass('active')){
				var t = $(this).data('target');
				$(this).find('.mobi-tool-act').removeClass('active');
				$(t).removeClass('active');
			}
		})
		$this.find('.mobi-tool-act').toggleClass('active');
		$(target).toggleClass('active');
	});
	$(".toggle-btn").click(function(e){
		e.preventDefault();
		var $next = $(this).parent().next();
		var $grandparent = $(this).parent().parent().parent();
		$grandparent.find("li").removeClass('active');
		$grandparent.find(".ic-arrow").removeClass('active');
		if($next.hasClass("show")){
			$next.removeClass("show");
			$next.slideUp(500);
			$(this).parent().parent().addClass('active');
		}else{
			$grandparent.find("li .inner").removeClass("show");
			$grandparent.find("li .inner").slideUp(500);
			$grandparent.find("i").attr("class","fal fa-chevron-down");
			$next.slideDown(500);
			$(this).parent().parent().addClass('active');
			$(this).addClass('active');
			$next.addClass("show");
		}
		
	});
	$('.js-droptab').click(function() {
		var $this = $(this);
		$('.js-droptab').removeClass('active');
		if ($this.parent().hasClass('active')) {
			$this.parent().removeClass('active');
			$this.removeClass('active');
			$this.next().slideUp(500);
		} else {
			$(".js-droptab").parent().removeClass('active');
			$(".js-droptab").next().slideUp(500);
			$this.parent().addClass('active');
			$this.addClass('active');
			$this.next().slideDown(500);		
		}
	});
},
	newsLetter:function(){
	
		var _o='.btn-act',

        _input_fullname='input[name="name"]',

        _input_email='input[name="email"]',

        _input_phone='input[name="phone"]',

		_input_address='input[name="address"]',

        _input_content='textarea[name="noidung"]';

	    $(_o).click(function(e){

	        e.preventDefault();

	        var _that=$(this);

	        var _i=$(_input_fullname).val();

	        var _k=$(_input_email).val();

	        var _s=$(_input_phone).val();

			var _q=$(_input_address).val();

	        var _t=$(_input_content).val();

	        if(isBlank(_i)){

	            _FRAMEWORK.showError('Vui lòng nhập họ tên !','error');

	            $(_input_fullname).focus();

	            return false;

	        }else if(isBlank(_s)){

	            _FRAMEWORK.showError('Vui lòng nhập số điện thoại !','error');

	            $(_input_phone).focus();

	            return false;

	        }else if(!validatePhone(_s)){

	            _FRAMEWORK.showError('Số điện thoại không đúng định dạng !','error');

	            $(_input_phone).focus();

	            return false;

	        }else if (isBlank(_k)) {

	            _FRAMEWORK.showError('Vui lòng nhập email !','error');

	            return false;

	        }else if (!isEmail(_k)) {

	            _FRAMEWORK.showError('Email không đúng định dạng !','error');

	            $(_input_email).focus();

	            return false;

	        }else if(isBlank(_q)){

	            _FRAMEWORK.showError('Bạn chưa nhập địa chỉ !','error');

	            $(_input_address).focus();

	            return false;

	        }else{

	            $.ajax({

	                url: 'ajax/ajaxNewsletter.php',

	                type:'POST',

	                data:{

	                    fullname:_i,

	                    email:_k,

	                    phone:_s,

						address:_q,

	                    content:_t

	                },

	                dataType: 'json',

	                beforeSend:function(){

	                    _that.addClass('loading');

	                },

	                success:function(res){

	                    if(res.status==200){

							_FRAMEWORK.showError(res.message,'success');
							
							$(_input_fullname).val('');

							$(_input_email).val('');

							$(_input_phone).val('');

							$(_input_address).val('');

							$(_input_content).val('');

						}else{

							_FRAMEWORK.showError(res.message,'error');

						}

	                },
					complete:function(){

						_that.removeClass('loading');

					}

	            });

	        }

	    });

	},
	submitContact:function(){

		$('#submit-contact').click(function() {

	        var _o=$(this);

	        var _fn = $('#customername').val();

	        var _el = $('#customerEmail').val();

	        var _pn = $('#customerPhone').val();

	        var _obj = $('#contactSubject').val();

	        var _capcha = $('#contactCapcha').val();

	        if (isBlank(_fn)) {

	            $('#customername').focus();

	            return false;

	        } else if (isBlank(_el)) {

	            $('#customerEmail').focus();

	            return false

	        } else if (!isEmail(_el)) {

	            $('#customerEmail').focus();

	            return false;

	        } else if (isBlank(_pn)) {

	            $('#customerPhone').focus();

	            return false;

	        } else if (!validatePhone(_pn)) {

	            $('#customerPhone').focus();

	            return false;

	        }else if (isBlank(_capcha)) {

	            $('#contactCapcha').focus();

	            return false;

	        }

	        var params={

	            _fn:_fn,

	            _el:_el,

	            _pn:_pn,

	            _obj:_obj,

	            _capcha:_capcha

	        };

	        $.ajax({

	            url:'ajax/ajaxContact.php',

	            dataType:'json',

	            data:params,

	            type:'post',

	            beforeSend:function(){

	                _o.addClass('loading');

	            },

	            error:function(res){

	                _o.removeClass('loading');

	                _FRAMEWORK.showError('server error!', 'error');

	            },

	            success:function(res) {

	                setTimeout(function(){

	                    _o.removeClass('loading');

	                    if(res.status==200){

	                        _FRAMEWORK.showError(res.message, res.error);

	                        $('#customername').val('');

	                        $('#customerEmail').val('');

	                        $('#customerPhone').val('');

	                        $('#contactSubject').val('');

	                        $('#contactMessage').val('');

	                        $('#contactCapcha').val('');

	                    }else{

	                        _FRAMEWORK.showError(res.message, res.error);

	                    }

	                },1500);

	            }

	        })

	    });

	},
	tocList:function(){

		if(_TOC==1 || _LIST_TOC==1){

			$('#toc').toc({

	            selectors: 'h2, h3, h4, h5, h6',

	            container: $('.content'),

	            status: true

	          });

	          $('a#toc').click(function(){

	            $('.toc-list').toggle(200);

	          });

	        $('.toc-list').find('a').click(function(e) {

	            e.preventDefault();

		        var x = $(this).attr('data-rel');

		        goToByScroll(x);

		    });

	    }

	},
	marQuee:()=>{
		$('.marquee').marquee({

            speed: 20000,

            gap: 50,

            delayBeforeStart: 0,

            direction: 'left',

            duplicated: true,

            pauseOnHover: true

        });
	},
	owlClass:()=>{
		if (exists('.owl-sanpham')) {
			$('.owl-sanpham').owlCarousel({
				items: 4,
				slideSpeed: 1500,
				autoplayHoverPause: false,
				margin: 20,
				nav: true,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
				autoplay: false,
				loop: false,
				dots: false,
				lazyLoad: true,
				responsiveRefreshRate: 200,
				responsive: {
					0: {
						items: 2
					},
					600: {
						items: 2
					},
					900: {
						items: 3
					},
					1200: {
						items: 4
					},
				}
			});
		}
	},

    owlSlider:()=>{
		if(exists('#owl__slider')){

			$('#owl__slider').owlCarousel({
				items:1,
				slideSpeed:1500,
				autoplayHoverPause:false,
				autoplayTimeout:3000,
				margin:20,
				nav:false,
				navText:['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],
				autoplay:true,
				loop:true,
				dots:false,
				lazyLoad:true,
			    responsiveRefreshRate : 200
			});
		}
		if (exists('#owl-tintuc')) {
			$('#owl-tintuc').owlCarousel({
				items: 4,
				slideSpeed: 1500,
				autoplayHoverPause: true,
				margin: 20,
				nav: true,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
				autoplay: false,
				loop: false,
				dots: false,
				lazyLoad: true,
				responsiveRefreshRate: 200,
				responsive: {

					0: {
						items: 1
					},
					600: {
						items: 2
					},
					1000: {
						items: 3
					},
					1200: {
						items: 4
					},


				}
			});
		}

		if (exists('#owl-visao')) {
			$('#owl-visao').owlCarousel({
				items: 2,
				slideSpeed: 1500,
				autoplayHoverPause: true,
				margin: 20,
				nav: false,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
				autoplay: false,
				loop: false,
				dots: true,
				lazyLoad: true,
				responsiveRefreshRate: 200,
				responsive: {

					0: {
						items: 1
					},
					600: {
						items: 1
					},
					1000: {
						items: 1
					},
					1200: {
						items: 1
					},


				}
			});
		}
		
		if (exists('#owl-baochi')) {
			$('#owl-baochi').owlCarousel({
				items: 4,
				slideSpeed: 1500,
				autoplayHoverPause: true,
				margin: 20,
				nav: true,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
				autoplay: false,
				loop: false,
				dots: false,
				lazyLoad: true,
				responsiveRefreshRate: 200,
				responsive: {

					0: {
						items: 1
					},
					600: {
						items: 2
					},
					1000: {
						items: 3
					},
					1200: {
						items: 4
					},


				}
			});
		}


		if (exists('#owl-hoatdong')) {
			$('#owl-hoatdong').owlCarousel({
				items: 3,
				slideSpeed: 1500,
				autoplayHoverPause: true,
				margin: 20,
				nav: true,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
				autoplay: false,
				loop: false,
				dots: false,
				lazyLoad: true,
				responsiveRefreshRate: 200,
				responsive: {

					0: {
						items: 1
					},
					600: {
						items: 2
					},
					1000: {
						items: 3
					},
					1200: {
						items: 3
					},


				}
			});
		}
		if(exists('#slide__list')){

			$('#slide__list').owlCarousel({
				items:6,
				slideSpeed:1500,
				autoplayHoverPause:true,
				margin:20,
				nav:true,
				navText:['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],
				autoplay:true,
				loop:false,
				dots:false,
				lazyLoad:true,
			    responsiveRefreshRate : 200,
			    responsive:{

					0:{
						items:2
					},
					600:{
						items:2
					},
					1000:{
						items:5
					},
					1200:{

						items:6

					}

				}
			});
		}
		if(exists('#slide_advanced')){

			$('#slide_advanced').owlCarousel({
				items:3,
				slideSpeed:1500,
				autoplayHoverPause:true,
				margin:20,
				nav:true,
				navText:['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],
				autoplay:false,
				loop:false,
				dots:false,
				lazyLoad:true,
			    responsiveRefreshRate : 200,
			    responsive:{

					0:{
						items:2
					},
					600:{
						items:2
					},
					1000:{
						items:3
					},
					1200:{

						items:3

					}

				}
			});
		}
		
		if(exists('#slider__video')){

			$('#slider__video').owlCarousel({
				items:2,
				slideSpeed:1500,
				autoplayHoverPause:true,
				margin:15,
				nav:false,
				navText:['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],
				autoplay:false,
				loop:false,
				dots:false,
				 lazyLoad:true,
			    responsiveRefreshRate : 200
			});
		}
		
        if(exists('#slide_partner')){

			$('#slide_partner').owlCarousel({
				items:6,
				slideSpeed:1500,
				autoplayHoverPause:true,
				margin:10,
				nav:true,
				navText:['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],
				autoplay:true,
				loop:false,
				dots:false,
				lazyLoad:true,
			    responsiveRefreshRate : 200,
			    responsive:{

					0:{
						items:2
					},
					600:{
						items:2
					},
					1000:{
						items:6
					},
					1200:{

						items:6

					}

				}
			});
		}
		if(exists('#slider__other')){

			$('#slider__other').owlCarousel({
				items:4,
				slideSpeed:1500,
				autoplayHoverPause:false,
				margin:20,
				nav:false,
				navText:['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],
				autoplay:true,
				loop:true,
				dots:false,
				 lazyLoad:true,
			    responsiveRefreshRate : 200,
				autoplayTimeout:1500,
			    responsive:{

					0:{
						items:2
					},
					600:{
						items:2
					},
					1000:{
						items:4
					},
					1200:{

						items:4

					}

				}
			});
		}
		if (exists('#owl-doitac')) {
			$('#owl-doitac').owlCarousel({
				items: 5,
				slideSpeed: 1500,
				autoplayHoverPause: false,
				margin: 20,
				nav: true,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
				autoplay: true,
				loop: true,
				dots: false,
				lazyLoad: true,
				autoplayTimeout:2000,
				responsiveRefreshRate: 200,
				responsive: {

					0: {
						items: 1
					},
					200: {
						items: 2
					},
					400: {
						items: 3
					},
					600: {
						items: 4
					},
					800: {
						items: 5
					},
					1000: {
						items: 6
					},


				}
			});
		}

		if (exists('#owl-gioithieu')) {
			$('#owl-gioithieu').owlCarousel({
				items: 1,
				slideSpeed: 1500,
				autoplayHoverPause: false,
				margin: 20,
				nav: false,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
				autoplay: true,
				loop: true,
				dots: true,
				lazyLoad: true,
				autoplayTimeout:1500,
				responsiveRefreshRate: 200,
				responsive: {

					0: {
						items: 1
					},
					1200: {
						items: 1
					},


				}
			});
		}


		if (exists('#owl-item')) {
			$('#owl-item').owlCarousel({
				items: 0,
				slideSpeed: 1500,
				autoplayHoverPause: true,
				margin: 20,
				nav: false,
				navText: ['<span aria-label="Previous"></span>', '<span aria-label="Next"></span>'],
				autoplay: false,
				loop: false,
				dots: false,
				lazyLoad: true,
				responsiveRefreshRate: 200,
				responsive: {

					0: {
						items:1
					},
					1200: {
						items: 1
					},
				
				}
			});
			$('#owl-item').find('.owl-item').each( function( index ) {//find: lấy thằng con là .item từ cha nó là #item , each sẽ hành động cho từng phần tử
				$(this).attr( 'data-position', index ); //attr: thêm thuộc tính attribute là data-position cho index
			});
		}
		if(exists('#slider__detail')){

			$('#slider__detail').owlCarousel({
				items:4,
				slideSpeed:1500,
				autoplayHoverPause:true,
				margin:20,
				nav:true,
				navText:['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],
				autoplay:false,
				loop:false,
				dots:false,
				 lazyLoad:true,
			    responsiveRefreshRate : 200,
			    responsive:{

					0:{
						items:3
					},
					600:{
						items:3
					},
					1000:{
						items:4
					},
					1200:{
						items:4

					}

				}
			});
		}

    },
	chaychu:function(){
		$('.chaychu > div').textillate({
			in: {
				effect: 'fadeInLeft'
			},
			out: {
				effect: 'fadeInRight'
			},
			loop: true
		});
	},
	loadCover:()=>{
        $(".js-loadcover").each(function(){
            let $this = $(this);
            let parent = $this.closest(".thumb-box");
            let pwidth = parseFloat(parent.outerWidth());
            let pheight = parseFloat(parent.outerHeight());
            let ratioparent = parseFloat(pheight / pwidth);
            let src = $(this).attr('src');
            fetch(src).then((res) => res.blob()).then((imgblob) => { 
                const url = URL.createObjectURL(imgblob);
                let img = new Image();
                img.src = url;
                img.onload = function()
                {
                    let ratioimg = parseFloat(this.height / this.width);
                    if(ratioimg > ratioparent){
                        $this.addClass('thumb-cover-w');
                        $this.addClass('loaded');
                    }else{
                        $this.addClass('thumb-cover-h');
                        $this.addClass('loaded');
                    }
                }
            }); 
        })
    },
	

}
/*slect tên hiện hình và link*/
$(function(){
	$("#myimage").change(function(){
		let option = $(this).find("option:selected");
		let src = option.data("scr-type");
		let link =  option.data("link");
		$("#imgchange").attr("src",src);
		$("#linkchange").attr("href",link);
	})
	/*slect tên hiện hình và link*/
	
})



_FRAMEWORK.init();





















// $(document).ready(function(){
// 	// Add smooth scrolling to all links
// 	$("a").on('click', function(event) {
  
// 	  // Make sure this.hash has a value before overriding default behavior
// 	  if (this.hash !== "") {
// 		// Prevent default anchor click behavior
// 		event.preventDefault();
  
// 		// Store hash
// 		var hash = this.hash;
  
// 		// Using jQuery's animate() method to add smooth page scroll
// 		// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
// 		$('html, body').animate({
// 		  scrollTop: $(hash).offset().top
// 		}, 800, function(){
	 
// 		  // Add hash (#) to URL when done scrolling (default click behavior)
// 		  window.location.hash = hash;
// 		});
// 	  } // End if
// 	});
//   });