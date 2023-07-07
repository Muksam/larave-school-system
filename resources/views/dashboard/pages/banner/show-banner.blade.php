@extends('dashboard.master.master')
	@section('content')
    <div class="page-content-wrapper">
				<div class="page-content" style="min-height:487px">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Show Banner</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Banner Collection</header>
									
									
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
													<th class="center"> Banner Image</th>
													<th class="center" width="280px"> Discription </th>
													<th class="center" width="200px"> Action </th>
												</tr>
											</thead>
											<tbody>
												@foreach($banners as $banner)
													<tr class="odd gradeX">
														<td class="center">{{++$loop->index}}</td>
														<td class="center">{{$banner->title}}</td>
														<td><img src="dashboard/banner/{{ $banner->image }}" width="100px"></td>
														<td class="center">{{$banner->description}}</td>
													    <td>
															<form action="{{ route('banners.destroy',$banner->id) }}" method="POST">
												
																<a class="btn btn-primary" href="{{ route('banners.edit',$banner->id) }}">Edit</a>
												
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
		
	