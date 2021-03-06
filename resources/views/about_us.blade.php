@extends('layouts.template')

@section('title')
เกี่ยวกับเรา || Wealth Angels
@stop

@section('stylesheet')
<style>
.img-box:before {
    opacity: 0;
}
.shop.rev_slider .slotholder:after, .home.rev_slider .slotholder:after {

    opacity: 0;
  
}
</style>
@stop('stylesheet')

@section('content')




<div class="margin-bottom-40"></div>
<!-- Container / Start -->
<div class="container">

	<!-- Row / Start -->
	<div class="row">

        
        <!-- Post Content -->
		<div class="col-lg-12">


<!-- Blog Post -->
<div class=" single-post">
    
    

    
    <!-- Content -->
    <div class="post-content">

      <img src="{{ url('assets/img/about_us.jpg') }}" class="img-responsive">
		<br>
    <h3>เกี่ยวกับเรา</h3>
        <p>
       <b> Wealth Angels </b> เกิดจากการรวมตัวกันของเพื่อนผู้หญิง 3 คน 3 สไตล์ แองเจิ้ลจิ๊ แองเจิ้ลส้ม และแองเจิ้ลเก๋ ที่คลุกคลีอยู่กับแวดวงการวางแผนการเงินส่วนบุคคลและเข้าใจผู้หญิงเป็นอย่างดี เราทั้งสามมี <b>passion</b> ในการสร้างเพจนี้ร่วมกันเพื่อ​
        </p>

        <div class="post-quote">
            <span class="icon"></span>
            <blockquote>
                - สร้างพื้นที่ให้ผู้หญิงสามารถเข้ามาหาความรู้ไปบริหารจัดการการเงินของตัวเองและครอบครัวได้ เพราะการเงินเป็นเรื่องสำคัญของชีวิตที่โรงเรียนไม่เคยสอน​ <br>
                - เป็นเพื่อนและที่พึ่งให้ผู้หญิงที่มีปัญหาและไม่มีคำตอบในเรื่องต่างๆเกี่ยวกับการเงิน <br>
                - เป็นพี่สาวที่คอยให้คำแนะนำ เป็น mentor และเป็น role model ด้านการเงินให้ผู้หญิงรุ่นใหม่ที่กำลังสร้างชีวิต​ <br>
                - ให้กำลังใจผู้หญิงด้วยกันตลอดเส้นทาง wealth journey ​ <br>
               
            </blockquote>
        </div>

        <p>เราขอเป็นอีกแรงขับเคลื่อนพลังบวกให้ผู้หญิงในสังคมไทยมีความแข็งแกร่ง และเจนจัดทางด้านการเงิน แบบที่จะสามารถอยู่รอดอย่างมั่นคงและยั่งยืน ไม่ว่าวันนี้จะอายุเท่าไหร่ แต่คิดว่าสาวๆที่ติดตามเพจนี้ต้อง "รวยก่อนแก่" แน่นอน​</p>

        <br><br><br>
        
        <div class="row text-center">
        
		
		
        </div>
        
        
        <div class="clearfix"></div>

    </div>
</div>
<!-- Blog Post / End -->
        




<!-- Related Posts -->




<div class="margin-top-50"></div>









</div>
<!-- Content / End -->


    
    


	</div>
	<!-- Row / End -->

</div>
<!-- Container / End -->



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
						enable:false,
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
			gridheight:[650,650,400,300],
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