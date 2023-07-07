

@extends('dashboard.master.master')
	@section('content')
    <div class="page-content-wrapper">
				<div class="page-content" style="min-height:487px">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">Show Contact</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card card-box">
								<div class="card-head">
									<header>Contact Collection</header>
									
									
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
                                                    <th class="center"> Name </th>
													<th class="center"> Email </th>
                                                    <th class="center"> Phone No </th>
													<th class="center" width="200px"> Action </th>
												</tr>
											</thead>
											<tbody>
												@foreach($contacts as $contact)
													<tr class="odd gradeX">
														<td class="center">{{++$loop->index}}</td>
														<td class="center">{{$contact->name}}</td>
                                                        <td class="center">{{$contact->email}}</td>
                                                        <td class="center">{{$contact->phone}}</td>
													    <td>
															<form action="{{ route('contacts.destroy',$contact->id) }}" method="POST">
												
																
												
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
		
	