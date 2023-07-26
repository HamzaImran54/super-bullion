@extends('auth.dashboard.layouts.app')
@section('content')

    <!-- CONTENT WRAPPER -->
			<div class="ec-content-wrapper">
				<div class="content">
					<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
						<div>
							<h1>Add Product</h1>
							<p class="breadcrumbs"><span><a href="index.html">Home</a></span>
								<span><i class="mdi mdi-chevron-right"></i></span>Product</p>
						</div>
						<div>
							<a href="" class="btn btn-primary"> View All
							</a>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="card card-default">
								<div class="card-header card-header-border-bottom">
									<h2>Add Product</h2>
								</div>

								<div class="card-body">
									<div class="row ec-vendor-uploads">
										{{-- <div class="col-lg-4">
											<div class="ec-vendor-img-upload">
												<div class="ec-vendor-main-img">
													<div class="avatar-upload">
														<div class="avatar-edit">
															<input type='file' id="imageUpload" class="ec-image-upload"
																accept=".png, .jpg, .jpeg" />
															<label for="imageUpload"><img
																	src="{{asset('assets/img/icons/edit.svg')}}"
																	class="svg_img header_svg" alt="edit" /></label>
														</div>
														<div class="avatar-preview ec-preview">
															<div class="imagePreview ec-div-preview">
																<img class="ec-image-preview"
																	src="{{asset('assets/img/products/vender-upload-preview.jpg')}}"
																	alt="edit" />
															</div>
														</div>
													</div>
													<div class="thumb-upload-set colo-md-12">

													</div>
												</div>
											</div>
										</div> --}}
										<div class="col-lg-12">
											<div class="ec-vendor-upload-detail">
												<form class="row g-3">
													<div class="col-md-6">
														<label for="inputEmail4" class="form-label">Product name</label>
														<input type="text" class="form-control" name="product_name" id="inputEmail4" required>
													</div>
													<div class="col-md-6">
														<label class="form-label">Select Categories</label>
														<select name="categories" id="Categories" class="form-select" required>
                                                            <option disabled selected>Choose..</option>
                                                            @foreach ($response as $category)
                                                                <option value="{{$category->id}}">{{$category->category_name}}</option>
                                                            @endforeach
														</select>
													</div>
													<div class="col-md-12">
														<label for="productImage" class="col-12 col-form-label">Upload Image</label>
														<div class="col-12">
															<input id="productImage" name="productImage" class="form-control" type="file" multiple accept=".png, .jpg, .jpeg">
														</div>
													</div>
													<div class="col-md-12">
														<label class="form-label">Product Description</label>
														<textarea class="form-control" name="description" rows="2"></textarea>
													</div>
													<div class="col-md-1 mb-25">
														<label class="form-label">Colors</label>
														<input type="color" name="color" class="form-control form-control-color"
															id="exampleColorInput1"
															title="Choose your color">
													</div>
													<div class="col-md-11 mb-25">
														<label class="form-label">Weight</label>
                                                            <input type="text" name="weight" class="form-control">
													</div>
													<div class="col-md-6">
														<label class="form-label">Price</label>
														<input type="number" name="price" class="form-control" id="price1">
													</div>
													<div class="col-md-12">
														<button type="submit" class="btn btn-primary">Submit</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!-- End Content -->
			</div> <!-- End Content Wrapper -->


@endsection

