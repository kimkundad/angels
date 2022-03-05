@extends('layouts.template')

@section('title')
นัดปรึกษาครั้งแรก || Wealth Angels
@stop

@section('stylesheet')
<style>
.img-box:before {
    opacity: 0;
}
.shop.rev_slider .slotholder:after, .home.rev_slider .slotholder:after {

    opacity: 0;
  
}
h5{
    font-family: 'Prompt', sans-serif;
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

      
    <h3>นัดปรึกษาครั้งแรก</h3>
    <p><b>ในการพูดคุยครั้งแรก (ผ่านโปรแกรม zoom ไม่เกิน 1 ชั่วโมง) นักวางแผนการเงินจะเก็บข้อมูลและให้คำปรึษาในเบื้องต้น รวมถึงให้รายละเอียดการให้บริการ  กรุณากรอกข้อมูลเพื่อที่เราจะติดต่อกลับไปเพื่อทำการนัดหมาย</b></p>

    
<form id="contactForm">

<div class="row">
    <div class="col-md-6">
        <div>
            <input name="name" type="text" id="name" placeholder="ชื่อ - นามสกุล" required="required" />
        </div>
    </div>

    <div class="col-md-6">
        <div>
            <select class="chosen-select-no-single" id="sex" name="sex">
                <option label="blank" value="">เลือกเพศ</option>	
                <option value="ชาย">ชาย</option>
                <option value="หญิง">หญิง</option>
                <option value="ไม่ระบุ">ไม่ระบุ</option>
            </select>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div>
            <input name="age" type="text" id="age" placeholder="อายุ" required="required" />
        </div>
    </div>

    <div class="col-md-6">
        <div>
            <input name="phone" type="text" id="phone" placeholder="เบอร์โทร"  required="required" />
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div>
            <input name="line" type="text" id="line" placeholder="ID line" required="required" />
        </div>
    </div>

    <div class="col-md-6">
        <div>
            <input name="career" type="text" id="career" placeholder="อาชีพ"  required="required" />
        </div>
    </div>
</div>


<div class="row">
<div class="col-md-12">
<p><b>หัวข้อที่อยากปรึกษา </b></p>
    <div class="checkboxes in-row margin-bottom-20">

        <input id="check-a" type="checkbox" name="subject[]" value="วางแผนการเงินภาพรวม">
        <label for="check-a">วางแผนการเงินภาพรวม</label>

        <input id="check-b" type="checkbox" name="subject[]" value="วางแผนเกษียณ">
        <label for="check-b">วางแผนเกษียณ</label>

        <input id="check-c" type="checkbox" name="subject[]" value="วางแผนการศึกษาบุตร">
        <label for="check-c">วางแผนการศึกษาบุตร</label>

        <input id="check-d" type="checkbox" name="subject[]" value="วางแผนการลงทุน">
        <label for="check-d">วางแผนการลงทุน</label>

        <input id="check-e" type="checkbox" name="subject[]" value="วางแผนเรื่องหนี้สิน">
        <label for="check-e">วางแผนเรื่องหนี้สิน</label>

        

    </div>
    </div>

    <div class="col-md-12">
    <textarea name="comments" cols="40" rows="3" id="comments" placeholder="อื่นๆระบุ....." spellcheck="true" required="required"></textarea>

  
    <h4>ช่วงเวลาที่สะดวกให้นัดหมาย. (ให้เลือกจ- ส. และ ระบุช่วงเวลาให้เลือก)</h4>
    <br>
    </div>




</div>

<div>
    <div class="g-recaptcha" data-sitekey="6LdBOl8UAAAAALrNu0pKZ5qiNc42G2FYKh8Jmynb"></div>
</div>


<br>
<input type="submit" class="submit button" id="btnSendData" value="ส่งข้อความ" />

</form>
        
        
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
<script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
<script type="text/javascript">


$(document).on('click','#btnSendData',function (event) {
  event.preventDefault();
  var form = $('#contactForm')[0];
  var formData = new FormData(form);

  var name = document.getElementById("name").value;
  var sex = document.getElementById("sex").value;
  var age = document.getElementById("age").value;
  var phone = document.getElementById("phone").value;


if(name == '' || sex == '' || age == '' || phone == ''){

  swal("กรูณา ป้อนข้อมูลให้ครบถ้วน");

}else{

  $.LoadingOverlay("show", {
    background  : "rgba(255, 255, 255, 0.4)",
    image       : "",
    fontawesome : "fa fa-cog fa-spin"
  });


  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="token"]').attr('value')
    }
});

  $.ajax({
      url: "{{url('/api/add_contact_2')}}",
      headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}' },
      data: formData,
      processData: false,
      contentType: false,
      cache:false,
      type: 'POST',
      success: function (data) {

      //  console.log(data.data.status)
          if(data.data.status == 200){


            setTimeout(function(){
                $.LoadingOverlay("hide");
            }, 0);

            swal("สำเร็จ!", "ข้อความถูกส่งไปหาเจ้าหน้าที่เรียบร้อยแล้ว", "success");

            
          setTimeout(function(){
                window.location.replace("{{url('/add_contact_first')}}");
          }, 3000);

          }else{

            setTimeout(function(){
                $.LoadingOverlay("hide");
            }, 500);

            swal("กรูณา ป้อนข้อมูลให้ครบถ้วน");

          }
      },
      error: function () {

      }
  });

}


});
</script>





@stop('scripts')