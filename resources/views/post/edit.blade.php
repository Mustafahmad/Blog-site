<!DOCTYPE html>
<html lang="en">


<head>
    <title>Edit Post</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>

<body>




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

    <div id="main-wrapper" class="overflow-unset">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            @include('partials.navheader')
        </div>
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
                                <li class="breadcrumb-item active"> Add Blog</li>
                            </ol>
                        </div>
                        <div class="mb-3">
                            <ul class="d-flex align-items-center flex-wrap">
                                <li><a href="{{ route('post.index') }}" class="btn btn-primary"
                                        style="margin-right: 15px;">Blog List</a></li>
                            </ul>
                        </div>
                        <div class="mb-3 ">
                            <form method="POST" action="{{route('post.update',$posts->id)}}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <label class="form-label">Title</label>
                                <input type="text" name="title" value="{{ $posts->title }}" class="form-control w-50" placeholder="Title">
                        </div>
                        <div class="row">
                            <div class="col-xl-8">



                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title">
                                        <div class="cpa"> Description
                                        </div>
                                    </div>
                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label">Description</label>
                                                <input class="form-control" value="{{ $posts->description }}" name="description">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title">
                                        <div class="cpa">
                                            Short Description
                                        </div>
                                    </div>
                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label">Short Description</label>
                                                <input class="form-control" value="{{ $posts->short_description }}" name="short_description">
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title">
                                        <div class="cpa"> Content
                                        </div>

                                    </div>
                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label class="form-label">Content</label>
                                                <textarea class="summernote" name="content">{!! $posts->content !!}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title">
                                        <div class="cpa">User

                                        </div>
                                    </div>
                                    <div class="cm-content-body form excerpt">
                                        <div class="card-body">
                                            <label class="form-label">{{ Auth::user()->name }}</label>

                                        </div>
                                    </div>
                                </div>
                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title">
                                        <div class="cpa"> Seo
                                        </div>
                                        <div class="tools"><a href="javascript:void(0);"
                                                class="expand SlideToolHeader"><i class="fal fa-angle-down"></i></a>
                                        </div>
                                    </div>
                                    <div class="cm-content-body form excerpt">
                                        <div class="card-body">
                                            <label class="form-label">Seo Title</label>
                                            <input type="text" value="{{ $posts->seo_title}}" name="seo_title" class="form-control mb-3"
                                                placeholder="Seo title">
                                            <div class="row">

                                                <div class="col-xl-6 col-sm-6">
                                                    <label class="form-label">Seo Descriptions</label>
                                                    <textarea class="form-control" placeholder="Enter Seo Description" rows="3" name="seo_desc">{{ $posts->seo_desc }}</textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4">
                                <div class="right-sidebar-sticky">
                                    <div class="filter cm-content-box box-primary">
                                        <div class="content-title">
                                            <div class="cpa">
                                                Published
                                            </div>
                                        </div>
                                        <div class="cm-content-body publish-content form excerpt">
                                            <ul class="d-flex align-items-center mb-2">
                                                <li><a><i class="fa-solid fa-eye"></i></a></li>
                                                <li><a class="ms-2">Status:</a></li>
                                                <li><a href="javascript:void(0);" class="accordion accordion-primary"  id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne"   aria-expanded="true" role="button">Edit</a></li>
                                                <li><strong><a class="mx-2">{{$posts->status}}</a></strong></li>

                                            </ul>
                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
                                                <div class="accordion-body-text border rounded">
                                                  <div class="mb-2">
                                                      <label class="from-label w-100">{{$posts->status}}</label>
                                                      <select class="publish-drop default-select" name="status" onchange="this.form.submit()">
                                                        <option value="pending" {{ $posts->status === 'pending' ? 'selected' : '' }}>Pending</option>
                                                        <option value="published" {{ $posts->status === 'published' ? 'selected' : '' }}>Published</option>
                                                    </select>
                                                  </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div class="filter cm-content-box box-primary">
                                    <div class="content-title">
                                        <div class="cpa">
                                            Featured Image
                                        </div>
                                    </div>
                                    <div class="cm-content-body publish-content form excerpt">
                                        <div class="card-body">
                                            <div class="avatar-upload d-flex align-items-center">
                                                <div class=" position-relative ">
                                                    <div>
                                                        <img src=" {{ asset('images/' . $posts->image) }}"  width="300px">
                                                    </div>
                                                    <div class="change-btn d-flex align-items-center flex-wrap">
                                                        <input type='file' class="form-control d-none"
                                                            name="image" id="imageUpload" value="{{$posts->image}}"
                                                            accept=".png, .jpg, .jpeg">
                                                        <label for="imageUpload" class="btn btn-light ms-0">Select
                                                            Image</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="form-control btn-primary"> Publish </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!--**********************************
            Content body end
        ***********************************-->


    <!--**********************************
            Footer start
        ***********************************-->
    @include('partials.footer')
    <!--**********************************
            Footer end
        ***********************************-->



    </div>

    <!--**********************************
        Main wrapper end
    ***********************************-->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>
</body>
