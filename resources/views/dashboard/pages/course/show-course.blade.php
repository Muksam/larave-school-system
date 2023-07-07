@extends('dashboard.master.master')
	@section('content')
    <div class="page-content-wrapper">
				<div class="page-content" style="min-height:487px">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Show Course</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Course Collection</header>
									
									
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
													<th class="center"> Course Image</th>
                                                    <th class="center"> Name </th>
													<th class="center" width="150px"> Details </th>
                                                    <th class="center">Number of Student</th>
													<th class="center" width="200px"> Action </th>
												</tr>
											</thead>
											<tbody>
												@foreach($courses as $course)
													<tr class="odd gradeX">
														<td class="center">{{++$loop->index}}</td>
                                                        <td><img src="dashboard/course/{{ $course->image }}" width="100px"></td>
														<td class="center">{{$course->course_name}}</td>
														<td class="center">{{$course->details}}</td>
                                                        <td class="center">{{$course->no_of_student}}</td>
                                                       
													    <td>
															<form action="{{ route('courses.destroy',$course->id) }}" method="POST">
												
																<a class="btn btn-primary" href="{{ route('courses.edit',$course->id) }}">Edit</a>
												
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
		
	