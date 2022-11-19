"use strict"

const G={
    init: function(){   
    },
    regrex: function(){
        let regex_phone = /^((09|03|07|08|05)+([0-9]{8}))+$/;

        let regex_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        let regex = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/;

        let regex_number = /^\d+\.?\d*$/;

        let regex_characters = /^[a-z]+$/;
    },
    
    autoplay:function(video){
        document.querySelector(video).play();
    },
    plyr:()=>{
        const player = new Plyr(document.querySelectorAll('.js-player'));
    },
    video:function(){
        $('.js-video').click(function(e){
            let rel = e.target.getAttribute('data-rel');
            let col = e.target.getAttribute('data-col');
            let params = {rel:rel}
            if(col !== undefined & col!= "" & col != null){
                params.col = col;   
            }
            G.showModal("ajax/loadVideo.php",params,'body');
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
            if(src !== undefined){
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
            }
        })
    },
    loadCoverfetch:()=>{
        $(".js-loadcover").each(function(){
            let $this = $(this);
            let src = $(this).attr('src');
            let parent = $(this).closest(".thumb-box");
            fetch(src).then((res) => res.blob()).then((imgblob) => { 
                const url = URL.createObjectURL(imgblob);
                let img = new Image();
                console.log(url);
                img.src = url;
                img.onload = function()
                {
                    console.log("Width: "+this.width+" Height: "+this.height);
                    parent.append(img);
                    $this.remove();
                }
            });
        })
    },
    tag: function(){
        $(".js-tag").click(function(){
            $('.js-tag').removeClass('active');
            $(this).addClass('active');
            let tag = $(this).data("tag");
            let target = $(this).data("target");
            let type = $(this).data("type");
            let list = $(this).data("list");
            let params = {com:"tags",tag:tag,target:target,type:type,list:list,tab:target};
            G.loadTab("ajax/loadTab.php",params,target);
        });
    },
    typeWritter:()=>{
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
            this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
            this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<h2 class="boxvideo_content_labelstroke typewrite_wrap">'+this.txt+'</h2>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) { delta /= 2; }

            if (!this.isDeleting && this.txt === fullTxt) {
            delta = this.period;
            this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
            this.isDeleting = false;
            this.loopNum++;
            delta = 500;
            }

            setTimeout(function() {
            that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .typewrite_wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
    },
    runLoopFade:(index,arr,element,animationcls)=>{
        let total = arr.length;
        if(index >= total){index = 0;}
        
        setTimeout(function(){
            $(element).html(arr[index]);
        },500)
        setTimeout(function(){
            $(element).removeClass(animationcls);
        },1000)
        setTimeout(function(){
            index++;
            $(element).addClass(animationcls);
            G.runLoopFade(index,arr,element,animationcls);
        },3000)
    },
    slideText:()=>{
        $(".js-slidetext").each(function(){
            let slide = $(this);
            let strtext = slide.data("text");
            let arrtext = strtext.split(",");    
            let index = 0;     
            G.runLoopFade(index,arrtext,this,'fadeOutIn');
        })
    },
    ofbox: function(){
        $('.G-ofbox').each(function(){
            let $this = $(this);
            var _this = this;
            let margin = parseInt($this.data('margin'));
            let items = $this.find(".G-ofitem");
            
            let total = 0;
            items.each(function(){
                var width = parseInt($(this).width());
                total = total + width;
                $(this).css('margin-right', margin+'px');
            })
            $this.find('.G-ofitem:last-child').css('margin-right', '0px');
            let count = items.length;
            total = total + ((count-1)*margin);  
           
            if($this.width() < total){
                var next = document.createElement("div");
                next.className = "G-ofnext";
                next.innerHTML = "<span></span>";
                _this.append(next);
                var prev = document.createElement("div");
                prev.className = "G-ofprev";
                prev.innerHTML = "<span></span>"
                _this.prepend(prev);
                $this.find('.G-ofstage').css('margin-right', '40px');
                $this.find('.G-ofstage').css('margin-left', '40px');
                getready();
            }
            $this.find('.G-oflist').css("width", total+'px');
            $this.addClass("G-loaded");
        })
        
        function getready(){
            $('.G-ofprev').click(function(){
                var $this = $(this);
                var $stage = $this.parent().find(".G-ofstage");
                var left = $stage.scrollLeft();
                var newp = left - 200;
                $stage.scrollLeft(newp);
            })
            $('.G-ofnext').click(function(){
                var $this = $(this);
                var $stage = $this.parent().find(".G-ofstage");
                var left = $stage.scrollLeft();
                var newp = left + 200;
                $stage.scrollLeft(newp);
            })
        }
    },
    effectbtn: function(){
        $('.bubble-btn').on('mouseenter',function(e){
            let x = e.clientX - $(this).offset().left;
            let y = e.clientY - ($(this).offset().top - window.pageYOffset);
            let bubble = document.createElement('span');
            bubble.style.left = x + 'px';
            bubble.style.top = y + 'px';
            $(this).append(bubble);
            setTimeout(() =>{
                bubble.remove()
            },1000);
        })
    },
    
    contact:function(){
        $(".js-contact").click(function(){
            var t = $(this).data('type');
            var label = $(this).data('title');
            $.post("ajax/contact-form.php",{
                type: t,
                label: label, 
            },
            function(data,status){
                if(status == "success"){
                    $("body").append(data);
                }
            })
        });
       
    },
    GForm:()=>{
        $('.g-input input').keyup((e)=>{
            var selector = $(e.target);
            if(selector.val() != ''){
                selector.parent().addClass('on');
            }else{
                selector.parent().removeClass('on');
            }
        })
        $('.g-input textarea').keyup((e)=>{
            var selector = $(e.target);
            if(selector.val() != ''){
                selector.parent().addClass('on');
            }else{
                selector.parent().removeClass('on');
            }
        })
    },
    removeInterval:(target,timeout)=>{     
        var interval = setTimeout(() => {
            $(target).remove();
            clearTimeout(interval);
        }, timeout*1000);
    },
    account:()=>{
        
        $('.log-input>input').focus( function(){
            $(this).parent().addClass('onfocus');
        });
        $('.log-input>input').focusout( function(){
            $(this).parent().removeClass('onfocus');
        });
    },
    quatity:(target,type)=>{
        var value = parseInt($(target).val());
        if(type == 'minus'){
            var newval = value = 1;
            if(newval>= 1){
                $(target).val(newval);
            }
        }else if(type == 'plus'){
            var newval = value + 1; 
            $(target).val(newval);
        }
    },
    map:function(){
        $('.js-map').click(function(e){
            var id = e.target.getAttribute('data-id');
            var params = {};
            if(id != "" & id != null & id != undefined){
                params.id = id;
            }     
            G.showModal("ajax/loadMap.php",params,'body');
        });
    },
    simple:()=>{
        $(".menu-showtext" ).hover(function() {
                let text = $(this).data('text');
                $("#menufullside_textbox").attr('data-text',text);
                $("#menufullside_textbox").removeClass('inactive');
                $("#menufullside_textbox").addClass('active');
            }, function() {
                $("#menufullside_textbox").removeClass('active');
                $("#menufullside_textbox").removeClass('active');
                $("#menufullside_textbox").addClass('inactive');
            }
        );
        $(".social-share").click(function() {
            if($("#tool-pc").hasClass('active')){
                $(this).html('<i class="fa-solid fa-share-nodes"></i>');
            }else{
                $(this).html('<i class="fa-solid fa-xmark"></i>');
            }
            $("#tool-pc").toggleClass("active");
        });
        $(".js-navmenu").click(function(){
            let target = $(this).data('target');
            $(".js-navmenu>span").toggleClass('active');
            $(target).toggleClass('active');
        });
        $(".js-collapsed").click(function(){
            $(this).prev().toggleClass('active')
            if($(this).find("i").hasClass("fa-plus")){
                $(this).html("<i class='fa-regular fa-minus me-2'></i> Rút gọn");
            }else{
                $(this).html("<i class='fa-regular fa-plus me-2'></i> Xem thêm");
            }
        });
        if($("#news_tab").length > 0){
            G.loadTab("ajax/loadTab.php",{com:"more",type:"tin-tuc",list:NEWS_LIST,perpage:PAGE_NEWS,tab:"#news_tab"},"#news_tab");
            $(".js-category").click(function(){
                let list = $(this).data('list');
                $(".js-category").removeClass('active');
                $(this).addClass('active');
                G.loadTab("ajax/loadTab.php",{com:"more",list:list,type:"tin-tuc",perpage:PAGE_NEWS,tab:"#news_tab"},"#news_tab");
            })
        }
        if($("#comic_tab").length > 0){
            G.loadTab("ajax/loadTab.php",{com:"more",type:"truyen-tranh",list:NEWS_LIST,perpage:PAGE_NEWS,tab:"#comic_tab"},"#comic_tab");
            $(".js-category").click(function(){
                let list = $(this).data('list');
                $(".js-category").removeClass('active');
                $(this).addClass('active');
                G.loadTab("ajax/loadTab.php",{com:"more",list:list,type:"truyen-tranh",perpage:PAGE_NEWS,tab:"#comic_tab"},"#comic_tab");
            })
        }
    },
    popoverSearch: ()=>{
        $('input[data-input-search]').on('keyup',(e)=>{
            var value = $(e.target).val();
            var target = $(e.target).attr('data-target');
            $(".search[data-box='"+target+"']").addClass('active');
            if(value != ""){             
                $.post(
                    "ajax/loadSearch.php",
                    {
                        keyword:value
                    },(data,status)=>{
                        if(status == "success"){
                            $(".search[data-box='"+target+"']").html(data);
                            $(window).on('mouseup',()=>{
                                $(".search[data-box='"+target+"']").removeClass('active');
                                $(window).off('mouseup');
                            })
                        }
                    }
                )		
            }
            			
        });
        $('input[data-input-search]').on('focus',(e)=>{        
            var value = $(e.target).val();
            var target = $(e.target).attr('data-target');        
            if(value != ""){
                $(".search[data-box='"+target+"']").addClass('active');
                var timeout = setInterval(() => {
                    $(window).on('mouseup',()=>{
                        $(".search[data-box='"+target+"']").removeClass('active');
                        $(window).off('mouseup');
                    })
                    clearInterval(timeout);
                }, 500);
                
            }
        })
    },
    numberrun:()=>{
        $('.count').each(function () {
            $(this).prop('Counter',0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    },
    changetab:()=>{
        $('.G-tab').click(function(){
            var target = $(this).data('target');
            $('.G-tab').removeClass('active');
            $(this).addClass('active');
            $('.G-tabcont').removeClass('active');
            $(target).addClass('active');
        })
    },
    changeYoutubeFrame:(element,target)=>{
        var value = element.value;
        $(target).attr('src','https://www.youtube.com/embed/'+value);
    },
    scrollTab:()=>{
        $(".G-sbox").each(function(){
            let $this = $(this);
            let margin = parseInt($this.data('margin'));
            let items = $this.find(".G-sitem");
            let total = 0;
            items.each(function(){
                var width = parseInt($(this).data('width'));
                total = total +width;
                $(this).css('width', width+'px');
                $(this).css('margin-right', margin+'px');
            })
            $this.find('.G-sitem:last-child').css('margin-right', '0px');
            let count = items.length;
            total = total + ((count-1)*margin);
            $this.css("width", total+'px');
        });
    },
    submitForm:(form,modal="",captcha = false)=>{
        var valid = $(form).find('[data-validate]');   
        var flag = false;
        var msgcaptcha = $(form).find('[data-captcha]').val();
        var url = 'ajax/bookingsend.php';
        var errmsg = "";
        if(captcha){
            url = 'ajax/bookingcaptcha.php';
        }
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
        });
        if(flag) {
            _FRAMEWORK.showError(errmsg,'error');
            return false;
        }
        $.ajax({
            url:url,
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
                _FRAMEWORK.showError(res.message,res.error);
                if(modal != ""){G.remove(modal);}
                $(form).find('input[type="text"]').val("");
                $(form).find('textarea').val("");
            },complete:()=>{
                $("#loader").removeClass('active');
            }
        })
    },
    remove:(id)=>{
        $(id).remove();
    },
    cart:()=>{
        $('.js-color').click(function(){
            var target = $(this).data('target');
            var value = $(this).data('value');
            $('.js-color').removeClass('active');
            $(this).addClass('active');
            $(target).val(value);
        });
        $('.js-size').click(function(){
            var target = $(this).data('target');
            var value = $(this).data('value');
            $('.js-size').removeClass('active');
            $(this).addClass('active');
            $(target).val(value);
        });
    },
    addFavor(id){
        $("#loader").addClass('active');
        $.post(
            "ajax/addFavor.php",
            {id:id},
            (data,status)=>{
                if(status === "success"){
                    $("#loader").removeClass('active');
                }
            }
        )
    },
    showModal(url,param,tab){
        $("#loader").addClass('active');
        $.post(
            url,
            param,
            (data,status)=>{
                if(status === "success"){
                    $(tab).append(data);
                    $("#loader").removeClass('active');
                }
            }
        )
    },
    imgRatio:()=>{
        $("img").each(function(){
            if($(this).hasClass('coverimg') || $(this).hasClass('scaleimg')){
                var w = $(this).attr('width');
                var h = $(this).attr('height');
                $(this).css("aspect-ratio",w+"/"+h);
            }
        })
    },
    getMore:(type,tab,list=0,cat=0,page=0,perpage=0,status="")=>{
        var strurl = 'ajax/ajaxRoute.php';
        var params = {type:type,list:list,cat:cat,page:page,perpage:perpage,tab:tab,status:status};
        $("#loader").addClass('active');
        $.post(strurl,params,function(data,status){
            if(status=='success'){
                $(tab).html(data);
                $("#loader").removeClass('active');
            }
        });
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
                G.imgRatio();
                G.loadCover();
            }
        });
    },
    loadMore:function(){
        $("body").click(function(e){
            var ele = e.target;
            if($(ele).hasClass("js-viewmore")){
                var $this = $(ele);
                var type = $this.data('type');
                var target = $this.data('target');
                var list = $this.data('list');
                var cat = $this.data('cat');
                var com = $this.data('com');
                var p = $this.data('p');
                var perpage = $this.data('per');
                var status = $this.data('status');
                var params = {type:type,list:list,cat:cat,page:p,perpage:perpage,status:status,com:com};
                G.loadTab('ajax/loadTab.php',params,target,false);
                var nextp = (parseInt(p)+1);
                $this.data('p',nextp);
            }
        });
    },
    toggle: function(id){
        $(id).toggleClass('active');
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
            $(this).toggleClass('active');
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
    tabtoggle: function(){
        $('.js-faq').click(function() {
            var $this = $(this);
            if ($this.parent().hasClass('active')) {
                $this.parent().removeClass('active');
                $this.next().slideUp();
                $this.find("i").removeClass('fa-circle-minus');
                $this.find("i").addClass('fa-circle-plus');
            } else {
                $(".js-faq").parent().removeClass('active');
                $(".js-faq").next().slideUp();
                $(".js-faq").find("i").removeClass('fa-circle-minus');
                $(".js-faq").find("i").addClass('fa-circle-plus');
                $this.parent().addClass('active');
                $this.next().slideDown();
                $this.find("i").removeClass('fa-circle-plus');
                $this.find("i").addClass('fa-circle-minus');			
            }
        });
        $('.js-coursebox').click(function() {
            var $this = $(this);
            $this.toggleClass('active');
            if ($this.parent().hasClass('active')) {
                $this.parent().removeClass('active');
                $this.next().slideUp();
            
            } else {
                $(".js-coursebox").parent().removeClass('active');
                $(".js-coursebox").next().slideUp();
                $this.parent().addClass('active');
                $this.next().slideDown();		
            }
        });
    },
    initCarousel:()=>{

        var slide = $('.owl-carousel.slide-pro');
        slide.owlCarousel({

            loop: 0,

            margin:20,

            responsiveClass:true,

            dots:1,

            nav:0,

            navText: ['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],

            autoplay:0,

            autoplayTimeout: 4000,

            smartSpeed: 1000,

            autoplayHoverPause:0,

            autoHeight:false,

            responsive:{

                0:{
                    items:2,	
                    margin:10
                },

                600:{
                    items:2,
                    margin:10			
                },

                1000:{
                    items:3				
                },

                1200:{
                    items:4				
                }

            }

        })

        var fade = $('.fade-slide');
        fade.owlCarousel({

            loop: 1,

            margin:20,

            responsiveClass:true,

            dots:0,

            nav:0,

            navText: ['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],

            autoplay:1,

            autoplayTimeout: 4000,

            animateOut: 'fadeOut',

            smartSpeed: 1000,

            autoplayHoverPause:1,

            autoHeight:false,

            responsive:{

                0:{
                    items:1,	
                    margin:10
                },

                600:{
                    items:1,
                    margin:10			
                },

                1000:{
                    items:1				
                },

                1200:{
                    items:1			
                }

            }

        })

    },
    numberCarousel:()=>{
        var owlnum = $('.owl-carousel.in-number');

	  		owlnum.each( function(){

			var xs_item = $(this).attr('data-xs-items');

			var md_item = $(this).attr('data-md-items');

			var lg_item = $(this).attr('data-lg-items');

			var sm_item = $(this).attr('data-sm-items');	

			var margin=$(this).attr('data-margin');

			var dot=$(this).attr('data-dot');

			var nav=$(this).attr('data-nav');

			var height=$(this).attr('data-height');

			var play=$(this).attr('data-play');

			var loop=$(this).attr('data-loop');

			var delay=$(this).attr('data-delay');

			

			if (typeof margin !== typeof undefined && margin !== false) {    

			} else{

				margin = 30;

			}

			if (typeof xs_item !== typeof undefined && xs_item !== false) {    

			} else{

				xs_item = 1;

			}

			if (typeof sm_item !== typeof undefined && sm_item !== false) {    



			} else{

				sm_item = 3;

			}	

			if (typeof md_item !== typeof undefined && md_item !== false) {    

			} else{

				md_item = 3;

			}

			if (typeof lg_item !== typeof undefined && lg_item !== false) {    

			} else{

				lg_item = 3;

			}



			if (loop == 1) { loop = true; } else{ loop = false; }

			if (dot == 1) { dot = true; } else{ dot = false; }

			if (nav == 1) { nav = true; } else{ nav = false; }

			if (play == 1) { play = true; } else{ play = false; }

			

			$(this).owlCarousel({

				loop: loop,

				margin:Number(margin),

				responsiveClass:true,

				dots:dot,

				nav:nav,

				navText: ['<span aria-label="Previous"></span>','<span aria-label="Next"></span>'],

				autoplay:play,

				autoplayTimeout: delay,

				smartSpeed: 2000,

				autoplayHoverPause:true,

				autoHeight:false,

				responsive:{

					0:{

						items:Number(xs_item),
						nav:false		
					},

					600:{
						items:Number(sm_item),
						nav:false				
					},

					1000:{

						items:Number(md_item),	
						nav:false			

					},

					1200:{

						items:Number(lg_item)				

					}

				}

			})

		});
        owlnum.each(function(){
			var $this = $(this);
			var i =1;
			$this.find('.owl-dot').each(function(){
				$(this).html('<button class="numb-dot">'+i+'</button>');
				i++;
			})
		})
    },
}

G.init();
