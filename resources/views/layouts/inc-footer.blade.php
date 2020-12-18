<!-- Footer
================================================== -->
<div id="footer" class="dark margin-top-65">
	<!-- Main -->
	<div class="container">
		<div class="row">
			
			<div class="col-md-3 col-sm-12 ">
				<h4>บริการบุคคล</h4>
				<ul class="footer-links">
					<li><a href="{{ url('วางแผนการลงทุน') }}">วางแผนการลงทุน</a></li>
					<li><a href="{{ url('วางแผนเกษียณ') }}">วางแผนเกษียณ</a></li>
					<li><a href="{{ url('วางแผนภาษี') }}">วางแผนภาษี</a></li>
					<li><a href="{{ url('วางแผนการศึกษา') }}">วางแผนการศึกษา</a></li>
					<li><a href="{{ url('วางแผนบริหารความเสี่ยง') }}">วางแผนถ่ายโอนความเสี่ยง วางแผนประกัน</a></li>
					<li><a href="{{ url('วางแผนมรดก') }}">วางแผนมรดก ทำพินัยกรรม</a></li>
				</ul>
				
				
				<div class="clearfix"></div>
			</div>

			<div class="col-md-3 col-sm-12 ">
				<h4>บริการองค์กร</h4>
				<ul class="footer-links">
					<li><a href="{{ url('สัมมนาให้ความรู้การเงินแก่พนักงาน') }}">สัมมนาให้ความรู้การเงินแก่พนักงาน</a></li>
					<li><a href="{{ url('ให้คำปรึกษาสร้างสวัสดิการแก่พนักงาน') }}"> ให้คำปรึกษาสร้างสวัสดิการแก่พนักงาน</a></li>
					<li><a href="{{ url('จัดตั้งกองทุนสำรองเลี้ยงชีพ') }}">จัดตั้งกองทุนสำรองเลี้ยงชีพ</a></li>
					<li><a href="{{ url('ที่ปรึกษาด้านบัญชีและภาษีสำหรับองค์กร') }}#"> ที่ปรึกษาด้านบัญชีและภาษีสำหรับองค์กร</a></li>
					<li><a href="{{ url('ที่ปรึกษาด้านการซื้อขายกิจการ') }}#">ที่ปรึกษาด้านการซื้อขายกิจการ </a></li>
					<li><a href="{{ url('ที่ปรึกษาการทำประกันชีวิต_บุคคลสำคัญขององค์กร') }}"> ที่ปรึกษาการทำประกันชีวิต บุคคลสำคัญขององค์กร</a></li>
					<li><a href="{{ url('จัดตั้งบริษัทโฮลดิ้ง_ทำแผนสืบทอดกิจการและธรรมนูญครอบครัว') }}#">จัดตั้งบริษัทโฮลดิ้ง</a></li>
				</ul>
				
				
				<div class="clearfix"></div>
			</div>	

			<div class="col-md-3 col-sm-12 ">
				<h4>แบ่งปันความรู้การเงิน</h4>
				<ul class="footer-links">
					<li><a href="{{ url('บทความการเงิน') }}">บทความการเงิน</a></li>
					<li><a href="{{ url('คลาสสอนการเงินให้เด็กก่อนวัยรุ่น') }}#"> คลาสสอนการเงินให้เด็กก่อนวัยรุ่น</a></li>
					<li><a href="{{ url('คลาสการเงินสำหรับผู้ใหญ่') }}">คลาสการเงินสำหรับผู้ใหญ่</a></li>
					<li><a href="{{ url('คำนวณการเงินแบบง่ายๆ') }}#"> คำนวณการเงินแบบง่ายๆ</a></li>
				
					<h4>ผลิตภัณฑ์ทางการเงิน</h4>
					<ul class="footer-links">
						<li><a href="{{ url('ประกันชีวิต') }}#">ประกันชีวิต</a></li>
						<li><a href="{{ url('ประกันวินาศภัย') }}#"> ประกันวินาศภัย</a></li>
						<li><a href="{{ url('กองทุนรวม') }}#">กองทุนรวม</a></li>
						<li><a href="{{ url('หลักทรัพย์') }}"> หลักทรัพย์</a></li>
				
			</div>	

			<div class="col-md-3  col-sm-12">
				<h4>Contact Us</h4>
				<div class="text-widget">
					@if (Auth::guest())
					 <span> <a href="{{ url('login') }}">เข้าสุ่ระบบ</a> </span><br>
					@else
					หลังบ้าน: <span> <a target="_blank" href="{{ url('admin/dashboard') }}">Dashboard</a> </span><br>
					@endif
					Facebook: <span> <a target="_blank" href="{{ setting()->facebook_url }}">{{ setting()->facebook }}</a> </span><br>
					Line: <span><a href="{{ setting()->line_oa_url }}">{{ setting()->line_oa }}</a> </span><br>
					Phone: <span><a href="#">{{ setting()->phone }} </a></span><br>
					E-Mail:<span> <a href="#">{{ setting()->email }}</a> </span><br>
				</div>

				<ul class="social-icons margin-top-20">
					<li><a target="_blank" class="facebook" href="{{ setting()->facebook_url }}"><i class="icon-facebook"></i></a></li>
					<li><a target="_blank" class="twitter" href="{{ setting()->twitter }}"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
				</ul>
				<div class="clearfix"></div>
			</div>
			
			

			

		</div>
		
		<!-- Copyright -->
		<div class="row">
			<div class="col-md-12">
				<div class="copyrights">© 2020 {{ setting()->nme_website }}. All Rights Reserved.</div>
			</div>
		</div>

	</div>

</div>
<!-- Footer / End -->