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
  
            @include('partials.sidebar')

        <!--**********************************
            Sidebar end
        ***********************************-->


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <!-- row -->
                <div class="row">
                    <div class="col-xl-4">
						<div class="row">
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="profile-statistics">
											<div class="text-center">
												<div class="row">
													<img src="{{ asset('images/' . $post->image) }}">
												</div>
											</div>
											<!-- Modal -->
											<div class="modal fade" id="sendMessageModal">
												<div class="modal-dialog modal-dialog-centered" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title">Send Message</h5>
															<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
														</div>
														<div class="modal-body">
															<form class="comment-form">
																<div class="row"> 
																	<div class="col-lg-6">
																		<div class="mb-3">
																			<label class="text-black font-w600 form-label">Name <span class="required">*</span></label>
																			<input type="text" class="form-control" name="Author" placeholder="Author">
																		</div>
																	</div>
																	<div class="col-lg-6">
																		<div class="mb-3">
																			<label class="text-black font-w600 form-label">Email <span class="required">*</span></label>
																			<input type="text" class="form-control"  placeholder="Email" name="Email">
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="mb-3">
																			<label class="text-black font-w600 form-label">Comment</label>
																			<textarea rows="8" class="form-control" name="comment" placeholder="Comment"></textarea>
																		</div>
																	</div>
																	<div class="col-lg-12">
																		<div class="mb-3 mb-0">
																			<input type="submit" value="Post Comment" class="submit btn btn-primary" name="submit">
																		</div>
																	</div>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="profile-blog">
											<h5 class="text-primary d-inline">SEO Title</h5>
											<h4><a class="text-black">{{$post->seo_title}}</a></h4>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-12">
								<div class="card">
									<div class="card-body">
										<div class="profile-interest">
											<h5 class="text-primary d-inline">SEO Description</h5>
											<div class="row mt-4 sp4" id="lightgallery">
												<p class="mb-0">
                                                    {{
                                                        $post->seo_desc
                                                    }}                                                   
                                                </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                   
                        
                   
                    <div class="col-xl-8">
                        <div class="card">
                            <div class="card-body">
								<div class="post-details">
									<h3 class="mb-2 text-black">{{$post->title}}</h3>
									<ul class="mb-4 post-meta d-flex flex-wrap">
										<li class="post-date me-3"><i class="far fa-calendar-plus me-2"></i> Post Created at {{$post->created_at}}</li>
									</ul>
									<p> {!! $post->content !!} </p>
									<div class="comment-respond" id="respond">
										<h4 class="comment-reply-title text-primary mb-3" id="reply-title">Leave a Reply </h4>
										<form action="{{ route('comment.store') }}" class="comment-form" id="commentform" method="POST">
                                            @csrf
											<div class="row"> 
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="author" class="text-black font-w600 form-label">Name <span class="required">*</span></label>
														<input type="text" class="form-control"  name="name" placeholder="Author" id="author">
													</div>
												</div>
												<div class="col-lg-6">
													<div class="mb-3">
														<label for="email" class="text-black font-w600 form-label">Email <span class="required">*</span></label>
														<input type="text" class="form-control"  placeholder="Email" name="email" id="email">
													</div>
												</div>
												<div class="col-lg-12">
													<div class="mb-3">
														<label for="comment" class="text-black font-w600 form-label">Comment</label>
														<textarea rows="8" class="form-control" name="comment" placeholder="Comment" id="comment"></textarea>
													</div>
												</div>
												<div class="col-lg-12">
													<div class="mb-3">
														<input type="submit" value="Post Comment" class="submit btn btn-primary" id="submit" name="submit">
													</div>
												</div>
											</div>
										</form>
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

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->
	
	<!--removeIf(production)-->
        
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
      
	
</body>

<!-- Mirrored from davur.dexignzone.com/dashboard/post-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jul 2023 19:08:48 GMT -->
</html>