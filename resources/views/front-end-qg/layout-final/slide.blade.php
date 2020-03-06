<section id="intro" class="intro">
    <div class="container-fluid">
        <div class="row">
            <!-- product categoties list -->
            <div class="col-lg-2 col-md-12  intro-left">
                <ul class="cat-menu" id="cat-menu">
                    @foreach($cates_highlight as $cate_hl)                    
                    <li>
                        <a href="{{$cate_hl->url}}" target="_self" title="{{$cate_hl->title}}">
                            <img class="cat-menu-img" src="{{asset('uploads/images/categories/avatar/'.$cate_hl->avatar)}}" alt="{{$cate_hl->title}}" width="100%">
                            <!-- <span>Seiko</span> -->
                        </a>
                    </li>
                    @endforeach                        
                </ul>
            </div>
            
            <div class="col-lg-10 col-md-12  intro-right">
                <style type="text/css"></style>
        <script type="text/javascript">
            function revslider_showDoubleJqueryError(sliderID) {
                var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
                errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
                errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
                errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
                errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
                jQuery(sliderID).show().html(errorMessage);
            }
        </script>
        
<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="home-slider" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
<!-- START REVOLUTION SLIDER  auto mode -->
	<div id="rev_slider_1_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="">
<ul>	<!-- SLIDE  -->
    @foreach($slides as $slide)
    <li data-index="{{$slide->id}}" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="340"  data-delay="2000"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
		<!-- MAIN IMAGE -->
        <img src="{{asset('uploads/images/systems/slides/'.$slide->url_image)}}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
		<!-- LAYERS -->

		
	</li>
    @endforeach
	
</ul>
<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
<script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
				if(htmlDiv) {
					htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
				}else{
					var htmlDiv = document.createElement("div");
					htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
					document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
				}
			</script>
        <script type='text/javascript'>
                        /******************************************
             -    PREPARE PLACEHOLDER FOR SLIDER    -
             ******************************************/

            var setREVStartSize = function () {
                try {
                    var e = new Object, i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                    e.c = jQuery('#rev_slider_1_1');
                                        e.responsiveLevels = [1240,1024,778,480];
                    e.gridwidth = [1240,1024,778,480];
                    e.gridheight = [500,500,500,500];
                                                            e.sliderLayout = 'auto';
                                                            if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), 'fullscreen' == e.sliderLayout) {
                        var u = (e.c.width(), jQuery(window).height());
                        if (void 0 != e.fullScreenOffsetContainer) {
                            var c = e.fullScreenOffsetContainer.split(',');
                            if (c) jQuery.each(c, function (e, i) {
                                u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                            }), e.fullScreenOffset.split('%').length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                        }
                        f = u
                    } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                    e.c.closest('.rev_slider_wrapper').css({height: f})

                } catch (d) {
                    console.log('Failure at Presize of Slider:' + d)
                }
            };

            setREVStartSize();

                        var tpj = jQuery;
            
            var revapi1;
            tpj(document).ready(function() {
				if(tpj("#rev_slider_1_1").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider_1_1");
				}else{
					revapi1 = tpj("#rev_slider_1_1").show().revolution({
						sliderType:"standard",
jsFileLocation:"//www.velisa.vn/vendor/core/plugins/slider/public/assets/js/",
						sliderLayout:"auto",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							onHoverStop:"off",
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[1240,1024,778,480],
						gridheight:[500,500,500,500],
						lazyType:"none",
						shadow:0,
						spinner:"spinner0",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
        </script>
        </div><!-- END REVOLUTION SLIDER -->
            </div>
        </div>
    </div>
</section>
<!-- End Intro -->