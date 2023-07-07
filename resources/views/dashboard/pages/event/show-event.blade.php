@extends('dashboard.master.master')
	@section('content')
    <div class="page-content-wrapper">
				<div class="page-content" style="min-height:487px">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Show Event</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Event Collection</header>
									
									
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
													<th class="center"> Event Image</th>
                                                    <th class="center">Date</th>
                                                    <th class="center">Location</th>
													<th class="center" width="150px"> Details </th>
													<th class="center" width="200px"> Action </th>
												</tr>
											</thead>
											<tbody>
												@foreach($events as $event)
													<tr class="odd gradeX">
														<td class="center">{{++$loop->index}}</td>
														<td class="center">{{$event->title}}</td>
														<td><img src="dashboard/event/{{ $event->image }}" width="100px"></td>
                                                        <td class="center">{{$event->date}}</td>
                                                        <td class="center">{{$event->location}}</td>
														<td class="center">{{$event->details}}</td>
													    <td>
															<form action="{{ route('events.destroy',$event->id) }}" method="POST">
												
																<a class="btn btn-primary" href="{{ route('events.edit',$event->id) }}">Edit</a>
												
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
		
	