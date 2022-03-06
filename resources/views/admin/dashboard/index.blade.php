@extends('admin.layouts.template')

@section('ga')

@endsection

@section('stylesheet')

@stop('stylesheet')

@section('content')



<div class="row">
            <div class="col-12 grid-margin">
              <div class="card card-statistics">
                <div class="card-body p-0">
                  <div class="row">
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between border-right card-statistics-item">
                        <div>
                          <h1>{{ $blog }}</h1>
                          <p class="text-muted mb-0">บทความ ทั้งหมด</p>
                        </div>
                        <i class="icon-pin  text-primary icon-lg"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between border-right card-statistics-item">
                        <div>
                          <h1>{{ $slide }}</h1>
                          <p class="text-muted mb-0">รูปสไลด์</p>
                        </div>
                        <i class="icon-disc text-primary icon-lg"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between border-right card-statistics-item">
                        <div>
                          <h1>{{ $view }}</h1>
                          <p class="text-muted mb-0">เข้าชมบทความ</p>
                        </div>
                        <i class="icon-people  text-primary icon-lg"></i>
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                      <div class="d-flex justify-content-between card-statistics-item">
                        <div>
                          <h1>{{ $services }}</h1>
                          <p class="text-muted mb-0">Our Service</p>
                        </div>
                        <i class="icon-calculator text-primary icon-lg"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
          

            <div class="col-md-12 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">นัดปรึกษาครั้งแรก</h4>

                      <div class="table-responsive">


                      <table class="table">
                        <thead>

                          <tr>
                            <th>ชื่อ-นามสกุล</th>
                            <th>เพศ</th>
                            <th>อายุ</th>
                            <th>เบอร์โทร</th>
                            <th>ID line</th>
                            <th>อาชีพ</th>
                            <th>หัวข้อ</th>
                            <th>อื่นๆระบุ</th>

							              <th>วันที่</th>
                           
                          </tr>
                        </thead>
                        <tbody>
                      
						@if(isset($objs))
                      @foreach($objs as $u)
                          <tr>
                            <td>
                              {{$u->name}}
                            </td>

                            <td>
                              {{$u->sex}}
                            </td>
                            <td>
                              {{$u->age}}
                            </td>
                            <td>
                              {{$u->phone}}
                            </td>
                            <td>
                              {{$u->line}}
                            </td>
                            <td>
                              {{$u->career}}
                            </td>
                            <td>
                              {{$u->subject}}
                            </td>
                            <td>
                              {{$u->subject2}}
                            </td>
                            
							              <td>
                              {{$u->paid}}
                            </td>
                           
                          </tr>
                          @endforeach
                          @endif


                        </tbody>
                      </table>
                      </div>
					  {{ $objs->links() }}
                    </div>
                  </div>
                </div>


         
          </div>



@endsection

@section('scripts')

@stop('scripts')