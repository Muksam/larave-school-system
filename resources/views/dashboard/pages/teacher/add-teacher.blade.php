@extends('dashboard.master.master')
	@section('content')
    <div class="page-content-wrapper">
				<div class="page-content" style="min-height:487px">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Teacher</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								
								<div class="card-body row">
                                   <div class="col-md-12">
									  <form action="{{route('teachers.store')}}" method = "POST" enctype="multipart/form-data">
									
									  @csrf
									  <div class="form-group form-group-sm">
												<label>Name:</label>
												<input type="text" name="teacher_name"  placeholder="Name" class="form-control">

												<a href="" style="color: red;">{{$errors->first('teacher_name')}}</a>
										</div>

										
										<div class="form-group form-group-sm">
                                            <label for="upload">Teacher Image</label>
                                            <input type="file" name="image" class="btn btn-default btn-sm">
                                            <a href="" style="color: red;">{{$errors->first('image')}}</a>   
                                       </div> 
									   <div class="form-group form-group-sm">
                                            <label>Preview</label>
											<img class="output" id="previewImage" height="100" width="100"/>
										</div>
                                    

										<div class="form-group form-group-sm">
											<button class="btn btn-success btn-sm"> Add Teacher
											</button>
                                        </div>	
                                    </div>
									  </form> 
										
										
								   </div> 

	    						</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
	@endsection	


@push('js')
    <script>
        $('input[name="image"]').change(function() {

            var image = $(this)[0].files[0];
            $("#previewImage").attr("src", URL.createObjectURL(image));
        });
    </script>

    <script>
		$('.btn-success').click(function(e){
			e.preventDefault();
			$(this).prepend("<i class='fa fa-spinner fa-spin' style='color:white'>").closest('form').submit();
		})
	</script>
@endpush

		
	