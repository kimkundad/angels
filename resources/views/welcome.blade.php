@extends('layouts.template')

@section('title')
อยากลงทุนแต่ไม่รู้จะเริ่มต้นอย่างไร หรือมีปัญหาที่ไม่รู้จะปรึกษาใคร ปรึกษาเราได้ในทุกเรื่องของการลงทุน วางใจให้ แองเจิ้ล || Wealth Angels
@stop


@section('stylesheet')

<style>
.persephone.tparrows {
    cursor: pointer;
    background: #aaa;
    background: rgba(200,200,200,0.1);
    width: 35px;
    height: 35px;
    position: absolute;
    display: block;
    z-index: 100;
    border: 1px solid #8d8c8b;
}

.persephone.tparrows:before {
    font-family: "simple-line-icons";
    font-size: 15px;
    color: #cccccc;
    display: block;
    line-height: 36px;
    text-align: center;
}
.persephone.tparrows:hover {
    cursor: pointer;
    background: #b87887;
    border: 3px solid #ad4c63;
}
.persephone.tparrows {
	cursor:pointer;
	background:#aaa;
	background:rgba(200,200,200,0.5);
	width:40px;
	height:40px;
	position:absolute;
	display:block;
	z-index:100;
  border:1px solid #f5f5f5;
}

.persephone.tparrows.tp-leftarrow:before {
	content: '\e605';
}
.persephone.tparrows.tp-rightarrow:before {
	content: '\e606';
}
/*------------------------------------------------------------------
[ Slider ]*/
.rs1-revo .tp-caption {
  white-space: normal !important;
}

.rs1-revo .txt-center {
  text-align: center !important;
}

.rs1-revo .m-txt1,
.rs1-revo .m-txt2 {
  font-size: 16px !important;
}

.rs1-revo .trans-03 {
  -webkit-transition: all 0.3s !important;
  -o-transition: all 0.3s !important;
  -moz-transition: all 0.3s !important;
  transition: all 0.3s !important;
}

.rs1-revo .wrap-btn-slide {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: space-between;
}

@media (max-width: 480px) {
  .rs1-revo .wrap-btn-slide {
    flex-direction: column;
    align-items: center;
  }
}
.btn-slide{
	width:85px;
}
.tp-caption{
	color:#fff;
}
.slotholder:after {
    width: 100%;
    height: 100%;
    content: "";
    position: absolute;
    left: 0;
    top: 0;
    pointer-events: none;
    /* background: rgba(38, 38, 38, 0.5); */
    background-color: #303133;
    opacity: 0.55;
    z-index: 9999;
}
</style>

@stop('stylesheet')

@section('content')
<!-- Revolution Slider -->
<!-- Slide -->

    <div class="rev_slider_wrapper fullwidthbanner-container rs1-revo">
      <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.5" style="display:none">
        <ul>
          <!-- Slide 1 -->
		  @if(isset($slide))
			@foreach($slide as $u)
          <li data-transition="fade">
            <img src="{{ url('img/slide/'.$u->image) }}" alt="{{ $u->title }}" class="rev-slidebg">

            <h2 class="tp-caption tp-resizeme txt1 txt-center p-l-15 p-r-15"
            data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:left;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
              data-x="center"
              data-y="center"
              data-width="['1200','992','768','480']"
              data-hoffset="['0','0','0','0']"
              data-voffset="['-85','-85','-85','-160']"
              data-fontsize="['40', '40', '35', '28']"
              data-lineheight="['60', '60', '60', '60']"
              data-height="['auto']"
              >{{ $u->title }}</h2>

              <p class="tp-caption tp-resizeme txt2 txt-center p-l-15 p-r-15"
            data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:right;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
              data-x="center"
              data-y="center"
              data-width="['780','780','780','480']"
              data-hoffset="['0','0','0','0']"
              data-voffset="['-10','-10','-10','-50']"
              data-fontsize="['18', '16', '14', '14']"
              data-lineheight="['30', '30', '30', '30']"
              data-height="['auto']"
              >{{ $u->detail }}
              </p>

              <div class="tp-caption tp-resizeme wrap-btn-slide"
              data-frames='[{"delay":3000,"speed":1500,"frame":"0","from":"y:bottom;rX:-20deg;rY:-20deg;rZ:0deg;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
              data-x="center"
              data-y="center"
              data-hoffset="['0','0','0','0']"
              data-voffset="['75','75','75','90']"
              data-height="['auto']">
              <div class="p-l-10 p-r-10 p-t-5 p-b-5">
                <!-- Button -->
                <a href="{{ $u->url_btn }}" class="button medium btn-slide">อ่านต่อ</a>
              </div>
              </div>

          </li>
		  @endforeach
			@endif

          


        </ul>
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
				
				<p class="text-center">
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

        <p class="text-center">เราขอเป็นอีกแรงขับเคลื่อนพลังบวกให้ผู้หญิงในสังคมไทยมีความแข็งแกร่ง และเจนจัดทางด้านการเงิน แบบที่จะสามารถอยู่รอดอย่างมั่นคงและยั่งยืน ไม่ว่าวันนี้จะอายุเท่าไหร่ แต่คิดว่าสาวๆที่ติดตามเพจนี้ต้อง "รวยก่อนแก่" แน่นอน​</p>

        <br>
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

					@if(isset($our))
					@foreach($our as $u)
					<!-- Listing Item -->
					<div class="carousel-item">
						<a href="{{ $u->url_btn }}" class="listing-item-container compact">
							<div class="listing-item">
								<img src="{{ url('img/service/'.$u->image) }}" alt="{{ $u->title }}">
								<div class="listing-item-content">
									<h3> {{ $u->title }} </h3>
								</div>
								
							</div>
						</a>
					</div>
					<!-- Listing Item / End -->
					@endforeach
					@endif
					
					

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
				<span class="margin-top-25" style="font-size: 18px;">
				ครอบครัวสุขใจ
ชีวิตครอบครัวเหมือนการเดินทาง วางแผนการเงิน เปรียบเหมือนวางแผนขีวิต หากเรามีการวางแผนการเงินที่ดี
 ไม่ว่าจะเกิดเหตุการณ์อะไรขึ้นในชีวิต ทุกคนในครอบครัวยังคงเดินต่อไปตามที่ตั้งใจ</span>
			</h2>
		</div>
	</div>

	<div class="row icons-container">
		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2 with-line">
				<i class="im im-icon-Heart"></i>
				<h3>ครอบครัวสุขใจ</h3>
				<p>
ชีวิตครอบครัวเหมือนการเดินทาง วางแผนการเงิน เปรียบเหมือนวางแผนขีวิต หากเรามีการวางแผนการเงินที่ดี ไม่ว่าจะเกิดเหตุการณ์อะไรขึ้นในชีวิต ทุกคนในครอบครัวยังคงเดินต่อไปตามที่ตั้งใจ</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2 with-line">
				<i class="im im-icon-Love-User"></i>
				<h3>เกษียณอุ่นใจ</h3>
				<p>
เกษียณสุข อยู่สบาย ไร้กังวลเจ็บป่วยมั่นใจมีสวัสดิการรองรับ รวยก่อนแก่ มีเงินเหลือส่งต่อลูกหลาน ทำได้หากวางแผน</p>
			</div>
		</div>

		<!-- Stage -->
		<div class="col-md-4">
			<div class="icon-box-2">
				<i class="im im-icon-Idea-2"></i>
				<h3>ธุรกิจมั่งมี</h3>
				<p>
 วางแผนภาษีองค์กรแบบระยะยาวทำได้จริง สบายใจเรื่องสวัสดิการบุคคากร ส่งต่อกิจการรุ่นพ่อสู่รุ่นลูกอย่างเป็นระบบ</p>
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

			


		@if(isset($blog))
		@foreach($blog as $u)
		<div class="col-md-3">
			<!-- Image Box -->
			<a href="{{ url('blog_detail/'.$u->id) }}" class="img-box" data-background-image="{{ url('img/blog/'.$u->image) }}">
				<div class="img-box-content visible">
				</div>
			</a>
			<div class="text-center">
			<h4 style="font-size: 15px;line-height: 23px;height: 46px; overflow: hidden;">{{ $u->title }}</h4>
			</div>
		</div>
		@endforeach
		@endif

			<div class="col-md-12 centered-content">
				<a href="{{ url('บทความการเงิน') }}" class="button border margin-top-10">ดูบทความทั้งหมด</a>
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