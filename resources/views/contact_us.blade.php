@extends('layouts.template')

@section('ga')
window.gaTitle = 'หน้าแรก';
@endsection

@section('stylesheet')

@stop('stylesheet')

@section('content')


<div class="clearfix"></div>
<!-- Map Container / End -->


<!-- Container / Start -->
<div class="container " style="margin-top:80px;">

	<div class="row">

		<!-- Contact Details -->
		<div class="col-md-4">

			<h4 class="headline margin-bottom-30">Wealth Angels</h4>

			<!-- Contact Details -->
			<div class="sidebar-textbox">
				<p>ใครมีข้อส่งสัยเกี่ยวกับการวางแผนการเงินส่วนบุคคล สามารถส่งข้อความมาหาพวกเราได้เลย พวกเราเหล่าแองเจิ้ลพร้อมให้คำปรึกษา</p>

				<ul class="contact-details">
					<li><i class="im im-icon-Phone-2"></i> <strong>Phone:</strong> <span>(123) 123-456 </span></li>
                    <li><i class="im im-icon-Facebook"></i> <strong>Facebook:</strong> <span><a target="_blank" href="https://www.facebook.com/wealthangels">Wealthangels</a> </span></li>
					<li><i class="im im-icon-Speach-Bubble11"></i> <strong>Line:</strong> <span><a href="#">line official account</a></span></li>
					<li><i class="im im-icon-Envelope"></i> <strong>E-Mail:</strong> <span><a href="#">office@example.com</a></span></li>
				</ul>
			</div>

		</div>

		<!-- Contact Form -->
		<div class="col-md-8">

			<section id="contact">
				<h4 class="headline margin-bottom-35">ส่งข้อความถึงเรา</h4>

				<div id="contact-message"></div> 

					<form method="post" action="contact.php" name="contactform" id="contactform" autocomplete="on">

					<div class="row">
						<div class="col-md-6">
							<div>
								<input name="name" type="text" id="name" placeholder="Your Name" required="required" />
							</div>
						</div>

						<div class="col-md-6">
							<div>
								<input name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
							</div>
						</div>
					</div>

					<div>
						<input name="subject" type="text" id="subject" placeholder="Subject" required="required" />
					</div>

					<div>
						<textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required"></textarea>
					</div>

					<input type="submit" class="submit button" id="submit" value="ส่งข้อความ" />

					</form>
			</section>
		</div>
		<!-- Contact Form / End -->

	</div>

</div>
<!-- Container / End -->


@endsection

@section('scripts')

@stop('scripts')