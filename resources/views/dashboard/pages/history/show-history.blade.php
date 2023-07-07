

@extends('dashboard.master.master')
	@section('content')
    <div class="page-content-wrapper">
				<div class="page-content" style="min-height:487px">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Show History</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>History Collection</header>
									
									
								</div>
								<div class="card-body ">
                                @include('dashboard.layouts.message')
									<div class="table-scrollable">
										<table
											class="table table-striped table-bordered table-hover table-checkable order-column valign-middle"
											id="example4">
											<thead>
												<tr>
													<th class="center">No</th>
													<th class="center"> Title </th>
													<th class="center"> History Image</th>
													<th class="center" width="280px"> Details </th>
													<th class="center" width="200px"> Action </th>
												</tr>
											</thead>
											<tbody>
												@foreach($histories as $history)
													<tr class="odd gradeX">
														<td class="center">{{++$loop->index}}</td>
														<td class="center">{{$history->title}}</td>
														<td><img src="dashboard/history/{{ $history->image }}" width="150px"></td>
														<td class="center">{{$history->details}}</td>
													    <td>
															<form action="{{ route('histories.destroy',$history->id) }}" method="POST">
												
																<a class="btn btn-primary" href="{{ route('histories.edit',$history->id) }}">Edit</a>
												
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
		
	