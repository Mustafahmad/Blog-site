@include('partials.scripts')



    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->

            @include('partials.navheader')

        <!--**********************************
            Nav header end
        ***********************************-->
		


		
		
        <!--**********************************
            Header start
        ***********************************-->
       
            @include('partials.header')

        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
      <div class="deznav">
          @include('partials.sidebar')
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
			<div class="content-body">
			<div class="container-fluid">
				<!-- Row -->
				<div class="row">
					<div class="col-xl-12">
						<div class="page-titles">
							<ol class="breadcrumb">
								<li class="breadcrumb-item active"><a href="#">Blog</a></li>
							</ol>
						</div>
						<div class="filter cm-content-box box-primary">
							<div class="content-title">
								<div class="cpa">
								<i class="fa-solid fa-filter me-2"></i>Filter    	
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body">
									<div class="row">
										<div class="col-xl-3 col-sm-6">
											<input type="text" class="form-control mb-3 mb-xl-0" id="exampleFormControlInput1" placeholder="Title">
										</div>
										<div class="col-xl-3 col-sm-6 mb-3 mb-xl-0">
											<select class="default-select dashboard-select-2 wide w-100">
												<option selected>Select Status</option>
												<option value="1">Published</option>
												<option value="5">Pending</option>
											</select> 
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="mb-3">
							<ul class="d-flex align-items-center flex-wrap">
								<li><a href="{{route('post.create')}}" class="btn btn-primary ">Add Blog</a></li>
							</ul>
						</div>
						<div class="filter cm-content-box box-primary">
							<div class="content-title">
								<div class="cpa">
									<i class="fa-solid fa-file-lines me-1"></i>Blogs List
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body form excerpt">
								<div class="card-body">
									<div class="table-responsive">
										
										<table class="table table-responsive-sm mb-0">
											<thead>
												<tr>
													<th style="">
														<div class="form-check">
														  <input class="form-check-input" type="checkbox" value="" id="checkAll">
														  <label class="form-check-label" for="checkAll">
														   
														  </label>
														</div>
													</th>
													<th><strong>S.No</strong></th>
													<th><strong>Title</strong></th>
													<th><strong>Status</strong></th>
													<th style="width:185px;"><strong>Actions</strong></th>
												</tr>
											</thead>
											<tbody>
                                                @foreach ($posts as $key => $post)
												<tr>
													<td>
														<div class="form-check">
														  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-1">
														  <label class="form-check-label" for="flexCheckDefault-1">
														   
														  </label>
														</div>
													</td>
                                                  
                                                        
													<td><b>{{ $key + 1 }}</b></td>
													<td>{{ $post->title }} </td>
													<td>{{ $post->status }}</td>
													<td class="d-flex">
														<a href="{{ route('post.show', $post->id) }}" class="btn btn-primary shadow btn-xs sharp rounded-circle me-1"><i class="fa fa-eye"></i></a>
														<a href= "{{ route('post.edit', $post->id) }}" class="btn btn-info shadow btn-xs sharp rounded-circle me-1"><i class="fa fa-pencil"></i></a>
														<form action="{{ route('post.destroy', $post->id) }}" method="POST">
															@csrf
															@method('delete')
															<button class="btn btn-danger shadow btn-xs sharp rounded-circle" type="submit"><i class="fa fa-trash"></i></button>
														</form>

													</td>
												</tr>
                                                @endforeach

											</tbody>
										</table>
											
									</div>
									<div class="d-flex align-items-center justify-content-xl-between flex-wrap justify-content-center mt-3">
										<nav aria-label="Page navigation example">
										  <ul class="pagination mb-2 mb-sm-0">
											<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fa-solid fa-angle-left"></i></a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
											<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
											<li class="page-item"><a class="page-link " href="javascript:void(0);"><i class="fa-solid fa-angle-right"></i></a></li>
										  </ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
           @include('partials.footer')
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    
    <script>
		$(function () {
			  $("#datepicker").datepicker({ 
					autoclose: true, 
					todayHighlight: true
			  }).datepicker('update', new Date());
		
		});

	</script>

