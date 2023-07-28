@extends('auth.dashboard.layouts.app')
@section('content')
    			<!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Product</h1>
							<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product</p>
						</div>
						<div>
							<a href="{{route('product.create')}}" class="btn btn-primary"> Add Porduct</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-body">
									<div class="table-responsive">
										<table id="responsive-data-table" class="table"
											style="width:100%">
											<thead>
												<tr>
													<th>Product Name</th>
													<th>Price</th>
													<th>Color</th>
													<th>Weight</th>
													<th>Description</th>
													{{-- <th>Status</th> --}}
													{{-- <th>Date</th> --}}
													<th>Action</th>
												</tr>
											</thead>

											<tbody>
                                                @foreach ($data as $key => $value)
                                                <tr>
													<td>{{$value->product_name}}</td>
													<td>{{$value->price}}</td>
													<td><input type="color" value="{{$value->color}}" readonly></td>
													<td>{{isset($value->weight)?$value->weight : "N/A"}}</td>
													<td>{{$value->description}}</td>
													{{-- <td>ACTIVE</td> --}}
													{{-- <td>2021-10-30</td> --}}
													<td>
														<div class="btn-group mb-1">
															<button type="button" data-id="{{$value->id}}"
																class="btn btn-outline-success">Info</button>
															<button type="button"
																class="btn btn-outline-success dropdown-toggle dropdown-toggle-split"
																data-bs-toggle="dropdown" aria-haspopup="true"
																aria-expanded="false" data-display="static">
																<span class="sr-only">Info</span>
															</button>

															<div class="dropdown-menu">
																<a class="dropdown-item"  data-id="{{$value->id}}"  href="#">Edit</a>
																<a class="dropdown-item"  data-id="{{$value->id}}"  href="#">Delete</a>
															</div>
														</div>
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
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->
@endsection
