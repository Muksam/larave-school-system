@extends('dashboard.master.master')
	@section('content')
    <div class="page-content-wrapper">
				<div class="page-content" style="min-height:487px">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Show Testimonial</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Testimonial Collection</header>
									
									
								</div>
								<div class="card-body ">
									<div class="table-scrollable">
									@include('dashboard.layouts.message')
										<table
											class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
											id="example4">
											<thead>
												<tr>
													<th class="center">No</th>
													<th class="center"> Title </th>
													<th class="center"> Testimonial Image</th>
													<th class="center" width="280px"> Details </th>
													<th class="center" width="200px"> Action </th>
												</tr>
											</thead>
											<tbody>
												@foreach($testimonials as $testimonial)
													<tr class="odd gradeX">
														<td class="center">{{++$loop->index}}</td>
														<td class="center">{{$testimonial->title}}</td>
														<td><img src="dashboard/testimonial/{{ $testimonial->image }}" width="150px"></td>
														<td class="center">{{$testimonial->details}}</td>
													    <td>
															<form action="{{ route('testimonials.destroy',$testimonial->id) }}" method="POST">
												
																<a class="btn btn-primary" href="{{ route('testimonials.edit',$testimonial->id) }}">Edit</a>
												
																@csrf
																@method('DELETE')
													
																<button type="submit" class="btn btn-danger">Delete</button>
															</form>
                                                        </td>

														
													</tr>
												@endforeach
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
									
				</div>
				</div>
			</div>
		
	@endsection	
		
	