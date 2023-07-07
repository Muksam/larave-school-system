@extends('dashboard.master.master')
	@section('content')

    <div class="page-content-wrapper">
				<div class="page-content" style="min-height:487px">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Add Banner</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<div class="card-box">
								<div class="card-body row">
                                   <div class="col-md-12">
									  <form action="{{route('banners.store')}}" method = "POST" enctype="multipart/form-data">

									  @csrf
									  <div class="form-group form-group-sm">
												<label>Title:</label>
												<input type="text" name="title"  placeholder="Title" class="form-control">

												<a href="" style="color: red;">{{$errors->first('title')}}</a>
										</div>

										<div class="form-group form-group-sm">
												<label >Description:</label>
												<textarea name="description" rows="7" cols="100" placeholder="Description" class="form-control"></textarea>
												<a href="" style="color: red;">{{$errors->first('description')}}</a>
										</div>

										<div class="form-group form-group-sm">
											<label for="upload">Banner Image</label>
											<input type="file" name="image" class="btn btn-default btn-sm">
											<a href="" style="color: red;">{{$errors->first('image')}}</a>
                                        </div>

										<div class="form-group form-group-sm">
                                            <label>Preview</label>
                                            <img class="output" id="previewImage" height="100" width="100"/>
                                        </div>

										<div class="form-group form-group-sm">
                                        <button class="btn btn-success btn-sm"> Add Banner
                                        </button>
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
