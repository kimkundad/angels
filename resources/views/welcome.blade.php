@extends('layouts.template')

@section('ga')
window.gaTitle = 'หน้าแรก';
@endsection

@section('stylesheet')

@stop('stylesheet')

@section('content')
<!-- Revolution Slider -->
<div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classicslider1" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">

<!-- 5.0.7 auto mode -->
	<div id="rev_slider_4_1" class="rev_slider home fullwidthabanner" style="display:none;" data-version="5.0.7">
		<ul>

			<!-- Slide  -->
			<li data-index="rs-1" data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

				<!-- Background -->
				<img src="{{ url('assets/images/investment-debentures.jpg') }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="100" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0">

				<!-- Caption-->
				<div class="tp-caption custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
					id="slide-1-layer-2" 
					data-x="['left','left','left','left']"
					data-hoffset="['0','40','40','40']"
					data-y="['middle','middle','middle','middle']" data-voffset="['0']" 
					data-width="['640','640', 640','420','320']"
					data-height="auto"
					data-whitespace="nowrap"
					data-transform_idle="o:1;"	
					data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" 
					data-transform_out="" 
					data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" 
					data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
					data-start="1000" 
					data-responsive_offset="on">

					<!-- Caption Content -->
					<div class="R_title margin-bottom-15"
					id="slide-2-layer-1"
					data-x="['left','center','center','center']"
					data-hoffset="['0','0','40','0']"
					data-y="['middle','middle','middle','middle']"
					data-voffset="['-40','-40','-20','-80']"
					data-fontsize="['42','36', '32','36','22']"
					data-lineheight="['70','60','60','45','35']"
					data-width="['640','640', 640','420','320']"
					data-height="none" data-whitespace="normal"
					data-transform_idle="o:1;"
					data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
					data-transform_out="opacity:0;s:300;"
					data-start="600"
					data-splitin="none"
					data-splitout="none"
					data-basealign="slide"
					data-responsive_offset="off"
					data-responsive="off"
					style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 600; ">วางแผนการลงทุน</div>

					<div class="caption-text">ตราสารทางการเงินมีอายุตั้งแต่ 1 ปีขึ้นไป ออกโดยบริษัทเอกชน มีฐานะเป็น "ลูกหนี้" และผู้ลงทุนมีฐานะเป็น "เจ้าหนี้" เพื่อระดมเงินจากประชาชนทั่วไป</div>
					<a href="{{ url('blog_detail') }}" class="button medium">อ่านต่อ</a>
				</div>

			</li>

			<!-- Slide  -->
			<li data-index="rs-2" data-transition="fade" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"  data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="800" data-fsslotamount="7" data-saveperformance="off">

				<!-- Background -->
				<img src="{{ url('assets/images/ssf-banner.jpg') }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina data-kenburns="on" data-duration="12000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="112" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0"> 

				<!-- Caption-->
				<div class="tp-caption centered custom-caption-2 tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0" 
					id="slide-2-layer-2" 
					data-x="['center','center','center','center']" data-hoffset="['0']" 
					data-y="['middle','middle','middle','middle']" data-voffset="['0']" 
					data-width="['640','640', 640','420','320']"
					data-height="auto"
					data-whitespace="nowrap"
					data-transform_idle="o:1;"	
					data-transform_in="y:0;opacity:0;s:1000;e:Power2.easeOutExpo;s:400;e:Power2.easeOutExpo" 
					data-transform_out="" 
					data-mask_in="x:0px;y:[20%];s:inherit;e:inherit;" 
					data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
					data-start="1000" 
					data-responsive_offset="on">

					<!-- Caption Content -->
					<div class="R_title margin-bottom-15"
					id="slide-2-layer-3"
					data-x="['center','center','center','center']"
					data-hoffset="['0','0','0','0']"
					data-y="['middle','middle','middle','middle']"
					data-voffset="['-40','-40','-20','-80']"
					data-fontsize="['42','36', '32','36','22']"
					data-lineheight="['70','60','60','45','35']"
					data-width="['640','640', 640','420','320']"
					data-height="none" data-whitespace="normal"
					data-transform_idle="o:1;"
					data-transform_in="y:-50px;sX:2;sY:2;opacity:0;s:1000;e:Power4.easeOut;"
					data-transform_out="opacity:0;s:300;"
					data-start="600"
					data-splitin="none"
					data-splitout="none"
					data-basealign="slide"
					data-responsive_offset="off"
					data-responsive="off"
					style="z-index: 6; color: #fff; letter-spacing: 0px; font-weight: 600; ">วางแผนมรดก ทำพินัยกรรม</div>

					<div class="caption-text">กองทุนผสมในประเทศโดยเน้นการลงทุนในหุ้นที่มีนโยบายหรือมีการจ่ายเงินปันผลอย่างสม่ำเสมอ ประมาณ 65-70% ส่วนที่เหลือกระจายลงทุนในตราสารหนี้</div>
					<a href="{{ url('blog_detail') }}" class="button medium">อ่านต่อ</a>
				</div>

			</li>

		</ul>
		<div class="tp-static-layers"></div>

	</div>
</div>
<!-- Revolution Slider / End -->


<!-- Content
================================================== -->

<!-- Container -->
<div class="container">
	<div class="row">

		<div class="col-md-12">
			<h3 class="headline centered margin-bottom-35 margin-top-70">Wealth Angels 
				<span>ประสบการณ์ตรงในแวดวงการเงินกว่า 10 ปี</span></h3>
				<p class="text-center">เนื่องจากมีนวัตกรรมและสิ่งของใหม่ๆ รวมถึงความสะดวกสบายที่สามารถแลกด้วยเงิน ปัจจัยเหล่านี้อาจเป็นสิ่งล่อตาล่อใจทำให้เจ้าตัวเล็กให้ใช้เงินมากขึ้นโดยที่คุณพ่อคุณแม่ไม่ทันได้ระวัง 
					และตอนนี้ เป็นเวลาที่ดีที่จะสอนให้เจ้าตัวเล็กได้รู้จักการใช้เงิน วันนี้แองเจิ้ล เลย จะมาแชร์เรื่องการเงินพื้นฐานซึ่งประกอบด้วย 3 รู้ ที่เราควรต้องยึดไว้สำหรับสอนลูกเรากันค่ะ 
					ต้องให้เขารู้จักคุณค่าของเงิน ว่าเงินควรได้มาจากการทำงาน เราทำงานแลกเงิน และเงินทุกบาททุกสตางค์นั้นมีค่า 
					ดังนั้นเวลาที่เค้าอยากได้อะไร เค้าจะรู้ถึงคุณค่าของเงินที่ได้มา เราไม่ควรให้ทุกอย่างแก่ลูกทันที อันไหนที่รอได้ก็อาจจะชวนให้ลูกทำงานเล็กๆน้อยๆ เก็บเงินเพื่อซื้อของสิ่งนั้น</p>
		</div>
		
		<div class="col-md-3">

			<!-- Image Box -->
			<a href="{{ url('blog_detail') }}" class="img-box" data-background-image="{{ url('assets/images/09_746170276.jpg') }}">
				<div class="img-box-content visible">
					<h4>“ดัก”  ซื้อหุ้นปันผลช่วงไหนดีที่สุด</h4>
				</div>
			</a>

		</div>
		
		<div class="col-md-3">

			<!-- Image Box -->
			<a href="{{ url('blog_detail') }}" class="img-box" data-background-image="{{ url('assets/images/09w_429562807.jpg') }}">
				<div class="img-box-content visible">
					<h4>ลงทุนอะไร  ให้ชนะเงินเฟ้อ</h4>
				</div>
			</a>

		</div>

		<div class="col-md-3">

			<!-- Image Box -->
			<a href="{{ url('blog_detail') }}" class="img-box" data-background-image="{{ url('assets/images/09w_735350089.jpg') }}">
				<div class="img-box-content visible">
					<h4>ออมก่อน...รวยกว่า เงินเดือน 15,000 ก็ลงทุนได้ </h4>
				</div>
			</a>

		</div>

		<div class="col-md-3">

			<!-- Image Box -->
			<a href="{{ url('blog_detail') }}" class="img-box" data-background-image="{{ url('assets/img/second-bn.jpg') }}">
				<div class="img-box-content visible">
					<h4>ลงทุนยังไง? ทำไมถึงผิดซ้ำซาก</h4>
				</div>
			</a>

		</div>
			
		
		

	</div>
</div>
<!-- Container / End -->



<!-- Fullwidth Section -->
<section class="fullwidth margin-top-65 padding-top-75 padding-bottom-70" data-background-color="#f8f8f8">

	<div class="container">
		<div class="row">

			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					Our Service
					<span>Wealth Angels ได้รวบรวมทุกสาระ เรื่องการเงิน จากประสบการณ์ตรงในแวดวงการเงินกว่า 10 ปี</span>
				</h3>
			</div>

			<div class="col-md-12">
				<div class="simple-slick-carousel dots-nav">

					<!-- Listing Item -->
					<div class="carousel-item">
						<a href="{{ url('ที่ปรึกษาด้านบัญชีและภาษีสำหรับองค์กร') }}" class="listing-item-container compact">
							<div class="listing-item">
								<img src="{{ url('assets/img/dividend-stocks-2.jpg') }}" alt="">
								<div class="listing-item-content">
									<h3>ที่ปรึกษาด้านบัญชี ภาษีสำหรับองค์กร </h3>
								</div>
								
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->

					<!-- Listing Item -->
					<div class="carousel-item">
						<a href="{{ url('จัดตั้งบริษัทโฮลดิ้ง_ทำแผนสืบทอดกิจการและธรรมนูญครอบครัว') }}" class="listing-item-container compact">
							<div class="listing-item">
								<img src="{{ url('assets/img/dividend-stocks-2.jpg') }}" alt="">
								<div class="listing-item-content">
									<h3>จัดตั้งบริษัทโฮลดิ้ง ทำแผนสืบทอดกิจการและธรรมนูญครอบครัว </h3>
								</div>
								
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->

					<!-- Listing Item -->
					<div class="carousel-item">
						<a href="{{ url('สัมมนาให้ความรู้การเงินแก่พนักงาน') }}" class="listing-item-container compact">
							<div class="listing-item">
								<img src="{{ url('assets/img/dividend-stocks-2.jpg') }}" alt="">
								<div class="listing-item-content">
									<h3>สัมมนาให้ความรู้การเงิน <br> แก่พนักงาน </h3>
								</div>
								
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->

					<!-- Listing Item -->
					<div class="carousel-item">
						<a href="{{ url('วางแผนเกษียณ') }}" class="listing-item-container compact">
							<div class="listing-item">
								<img src="{{ url('assets/img/dividend-stocks-2.jpg') }}" alt="">
								<div class="listing-item-content">
									<h3>วางแผนเกษียณ </h3>
								</div>
								
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->

					<!-- Listing Item -->
					<div class="carousel-item">
						<a href="{{ url('วางแผนภาษี') }}" class="listing-item-container compact">
							<div class="listing-item">
								<img src="{{ url('assets/img/dividend-stocks-2.jpg') }}" alt="">
								<div class="listing-item-content">
									<h3>วางแผนภาษี </h3>
								</div>
								
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->

					<!-- Listing Item -->
					<div class="carousel-item">
						<a href="{{ url('วางแผนบริหารความเสี่ยง') }}" class="listing-item-container compact">
							<div class="listing-item">
								<img src="{{ url('assets/img/dividend-stocks-2.jpg') }}" alt="">
								<div class="listing-item-content">
									<h3>วางแผนบริหารความเสี่ยง </h3>
								</div>
								
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->

				</div>
				
			</div>

		</div>
	</div>

</section>
<!-- Fullwidth Section / End -->



	
<!-- Info Section -->
<div class="container">

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h2 class="headline centered margin-top-80">
				วางแผนกับ Wealth Angels
				<span class="margin-top-25" style="font-size: 18px;">อยากลงทุนแต่ไม่รู้จะเริ่มต้นอย่างไร หรือมีปัญหาที่ไม่รู้จะปรึกษาใคร ปรึกษาเราได้ในทุกเรื่องของการลงทุน วางใจให้ แองเจิ้ล</span>
			</h2>
		</div>
	</div>

	<div class="row icons-container">
		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2 with-line">
				<i class="im im-icon-Heart"></i>
				<h3>ครอบครัวสุขใจ</h3>
				<p>ชุดที่ควรมีติดตัวไว้ในการทำธุรกรรมต่างๆ
					ฟรีและสะดวก ในการทำธุรกรรมบน SCB EASY พร้อมสะดวกในการใช้จ่ายผ่านบัตรเดบิต</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2 with-line">
				<i class="im im-icon-Love-User"></i>
				<h3>เกษียณอุ่นใจ</h3>
				<p>ออมสะดวก เช็คยอดง่าย ได้ดอกสูง สร้างวินัยในการออมเพื่ออนาคตที่มั่นคง รับดอกเบี้ยสูงกว่าเงินฝากปกติ แถมปลอดภาษี</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2">
				<i class="im im-icon-Idea-2"></i>
				<h3>ธุรกิจมั่งมี</h3>
				<p>เปิดบัญชีกองทุนง่ายๆ สะดวกกว่าด้วยการซื้อขายกองทุนบนมือถือ
					ครอบคลุมทุกช่องทางการลงทุน</p>
			</div>
		</div>
	</div>

</div>
<!-- Info Section / End -->



<!-- Recent Blog Posts -->
<section class="fullwidth border-top margin-top-70 padding-top-75 padding-bottom-75" data-background-color="#fff">
	<div class="container">

		<div class="row">
			<div class="col-md-12">
				<h3 class="headline centered margin-bottom-45">
					Stories and Tips
				</h3>
			</div>
		</div>

		<div class="row">
			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="{{ url('blog_detail') }}" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="{{ url('assets/img/59_239735236.jpg') }}" alt="">
						<span class="blog-item-tag">Tips</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>22 August 2017</li>
							</ul>
							<h3>วางแผนการศึกษาดี ลูกมีแต้มต่อ</h3>
							
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="{{ url('blog_detail') }}" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="{{ url('assets/img/30_588769904.jpg') }}" alt="">
						<span class="blog-item-tag">Stories</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>18 August 2017</li>
							</ul>
							<h3>หาเงินคนเดียว เลี้ยงครอบครัวยังไงดี?</h3>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<!-- Blog Post Item -->
			<div class="col-md-4">
				<a href="{{ url('blog_detail') }}" class="blog-compact-item-container">
					<div class="blog-compact-item">
						<img src="{{ url('assets/img/57_234790165.jpg') }}" alt="">
						<span class="blog-item-tag">Tips</span>
						<div class="blog-compact-item-content">
							<ul class="blog-post-tags">
								<li>10 August 2017</li>
							</ul>
							<h3>3 เคล็ดลับสร้างความมั่งคั่งตั้งแต่เริ่มทำงานปีแรก</h3>
						</div>
					</div>
				</a>
			</div>
			<!-- Blog post Item / End -->

			<div class="col-md-12 centered-content">
				<a href="{{ url('blog') }}" class="button border margin-top-10">View Blog</a>
			</div>

		</div>

	</div>
</section>
<!-- Recent Blog Posts / End -->

@endsection

@section('scripts')



<!-- REVOLUTION SLIDER SCRIPT -->
<script type="text/javascript" src="{{ url('assets/scripts/themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/scripts/themepunch.revolution.min.js') }}"></script>

<script type="text/javascript">
	var tpj=jQuery;			
	var revapi4;
	tpj(document).ready(function() {
		if(tpj("#rev_slider_4_1").revolution == undefined){
			revslider_showDoubleJqueryError("#rev_slider_4_1");
		}else{
			revapi4 = tpj("#rev_slider_4_1").show().revolution({
				sliderType:"standard",
				jsFileLocation:"scripts/",
				sliderLayout:"auto",
				dottedOverlay:"none",
				delay:9000,
				navigation: {
					keyboardNavigation:"off",
					keyboard_direction: "horizontal",
					mouseScrollNavigation:"off",
					onHoverStop:"on",
					touch:{
						touchenabled:"on",
						swipe_threshold: 75,
						swipe_min_touches: 1,
						swipe_direction: "horizontal",
						drag_block_vertical: false
					}
					,
					arrows: {
						style:"zeus",
						enable:true,
						hide_onmobile:true,
						hide_under:600,
						hide_onleave:true,
						hide_delay:200,
						hide_delay_mobile:1200,
						tmp:'<div class="tp-title-wrap"></div>',
						left: {
							h_align:"left",
							v_align:"center",
							h_offset:40,
							v_offset:0
						},
						right: {
							h_align:"right",
							v_align:"center",
							h_offset:40,
							v_offset:0
						}
					}
					,
					bullets: {
				enable:false,
				hide_onmobile:true,
				hide_under:600,
				style:"hermes",
				hide_onleave:true,
				hide_delay:200,
				hide_delay_mobile:1200,
				direction:"horizontal",
				h_align:"center",
				v_align:"bottom",
				h_offset:0,
				v_offset:32,
				space:5,
				tmp:''
					}
				},
				viewPort: {
					enable:true,
					outof:"pause",
					visible_area:"80%"
			},
			responsiveLevels:[1200,992,768,480],
			visibilityLevels:[1200,992,768,480],
			gridwidth:[1180,1024,778,480],
			gridheight:[640,500,400,300],
			lazyType:"none",
			parallax: {
				type:"mouse",
				origo:"slidercenter",
				speed:2000,
				levels:[2,3,4,5,6,7,12,16,10,25,47,48,49,50,51,55],
				type:"mouse",
			},
			shadow:0,
			spinner:"off",
			stopLoop:"off",
			stopAfterLoops:-1,
			stopAtSlide:-1,
			shuffle:"off",
			autoHeight:"off",
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


<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
	(Load Extensions only on Local File Systems ! 
	The following part can be removed on Server for On Demand Loading) -->	
<script type="text/javascript" src="{{ url('assets/scripts/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/scripts/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/scripts/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/scripts/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/scripts/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/scripts/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/scripts/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/scripts/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/scripts/extensions/revolution.extension.video.min.js') }}"></script>



@stop('scripts')