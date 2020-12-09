<!-- Header Container
================================================== -->
<header id="header-container">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="{{ url('/') }}"><img src="{{ url('assets/images/my_logo.png') }}" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						<li><a class="" href="{{ url('/') }}">หน้าหลัก</a>
						</li>
						<li><a class="" href="{{ url('about_us') }}">เกี่ยวกับเรา</a>
						</li>

						<li><a href="#">บริการบุคคล</a>
							<ul>
								<li><a href="{{ url('วางแผนการลงทุน') }}">วางแผนการลงทุน</a></li>
								<li><a href="{{ url('วางแผนเกษียณ') }}">วางแผนเกษียณ</a></li>
								<li><a href="{{ url('วางแผนภาษี') }}">วางแผนภาษี</a></li>
								<li><a href="{{ url('วางแผนการศึกษา') }}">วางแผนการศึกษา</a></li>
								<li><a href="{{ url('วางแผนบริหารความเสี่ยง') }}">วางแผนบริหารความเสี่ยง</a></li>
								<li><a href="{{ url('วางแผนมรดก') }}">วางแผนมรดก</a></li>
							</ul>
						</li>

						<li><a href="#">บริการองค์กร</a>
							<ul>
								<li><a href="{{ url('สัมมนาให้ความรู้การเงินแก่พนักงาน') }}">สัมมนาให้ความรู้การเงินแก่พนักงาน</a></li>
								<li><a href="{{ url('ให้คำปรึกษาสร้างสวัสดิการแก่พนักงาน') }}">ให้คำปรึกษาสร้างสวัสดิการแก่พนักงาน</a></li>
								<li><a href="{{ url('จัดตั้งกองทุนสำรองเลี้ยงชีพ') }}">จัดตั้งกองทุนสำรองเลี้ยงชีพ</a></li>
								<li><a href="{{ url('ที่ปรึกษาด้านบัญชีและภาษีสำหรับองค์กร') }}#">ที่ปรึกษาด้านบัญชีและภาษีสำหรับองค์กร</a></li>
								<li><a href="{{ url('ที่ปรึกษาด้านการซื้อขายกิจการ') }}#">ที่ปรึกษาด้านการซื้อขายกิจการ</a></li>
								<li><a href="{{ url('ที่ปรึกษาการทำประกันชีวิต_บุคคลสำคัญขององค์กร') }}#">ที่ปรึกษาการทำประกันชีวิต บุคคลสำคัญขององค์กร</a></li>
								<li><a href="{{ url('จัดตั้งบริษัทโฮลดิ้ง_ทำแผนสืบทอดกิจการและธรรมนูญครอบครัว') }}#">จัดตั้งบริษัทโฮลดิ้ง ทำแผนสืบทอดกิจการและธรรมนูญครอบครัว</a></li>
							</ul>
						</li>
						
						<li><a href="#">ผลิตภัณฑ์ทางการเงิน</a>
							<ul>
								<li><a href="{{ url('ประกันชีวิต') }}">ประกันชีวิต</a></li>
								<li><a href="{{ url('ประกันวินาศภัย') }}">ประกันวินาศภัย</a></li>
								<li><a href="{{ url('กองทุนรวม') }}">กองทุนรวม</a></li>
								<li><a href="{{ url('หลักทรัพย์') }}">หลักทรัพย์</a></li>
							</ul>
						</li>
						<li><a href="#">แบ่งปันความรู้การเงิน</a>
							<ul>
								<li><a href="{{ url('บทความการเงิน') }}">บทความการเงิน</a></li>
								<li><a href="{{ url('คลาสสอนการเงินให้เด็กก่อนวัยรุ่น') }}">คลาสสอนการเงินให้เด็กก่อนวัยรุ่น</a></li>
								<li><a href="{{ url('คลาสการเงินสำหรับผู้ใหญ่') }}">คลาสการเงินสำหรับผู้ใหญ่</a></li>
								<li><a href="{{ url('คำนวณการเงินแบบง่ายๆ') }}">คำนวณการเงินแบบง่ายๆ</a></li>
							</ul>
						</li>
						<li><a class="" href="{{ url('contact_us') }}">ติดต่อเรา</a>
						</li>

						
						
						
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">
				<div class="header-widget " style="margin-top:20px">
					<a target="_blank" href="{{ setting()->facebook_url }}" class="sign-in " style="margin-right: 5px;"> 
						<img src="{{ url('assets/images/facebook_logo.png') }}" alt=""> 
					</a>
					<a target="_blank" href="{{ setting()->line_oa_url }}" class="sign-in "> <img src="{{ url('assets/images/line_logo.png') }}" alt=""> </a>
				</div>
			</div> 
			<!-- Right Side Content / End -->

			
			

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->