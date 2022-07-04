@extends('layouts.app')

@section('title', 'Product Categories')

@section('styles')
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
@endsection

@section('content')

    <div class="container-fluid">
			        <div class="row justify-content-center">
			          <div class="col-12 col-lg-12 col-xl-12">
			            <!-- Header -->
			            <div class="header mt-md-5">
			              <div class="header-body">

			                <!-- Pretitle -->
			                <h6 class="header-pretitle">
								<a href="{{ route('admin.category.index') }}">Applications</a>
			                </h6>

			                <!-- Title -->
			                <h1 class="header-title">
			                  Create Applications
			                </h1>

			              </div>
			            </div>


							 <!-- Card -->

							 <form class="mb-4 row"
							       id="form"
							       method="post"
							       action="{{ route('admin.category.save') }}"
							       enctype="multipart/form-data">
							 	@csrf


								  <!-- Project name -->
						              <div class="form-group col-md-6">
						                <!-- Label  -->
						                <label>
						                  Application Title
						                </label>
						                <!-- Input -->
						                <input type="text"
						                       name="title"
						                       class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
						                       id="title">
						                       @if ($errors->has('title'))
				                                <span class="invalid-feedback" role="alert">
				                                    <strong>{{ $errors->first('title') }}</strong>
				                                </span>
				                               @endif

						              </div>


                                    <div class="form-group col-md-6">
                                        <!-- Label  -->
                                        <label>
                                            Name Of Applicant
                                        </label>
                                        <!-- Input -->
                                        <input type="text"
                                               name="title"
                                               class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                               id="title">
                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
				                                    <strong>{{ $errors->first('title') }}</strong>
				                                </span>
                                        @endif

                                    </div>


                                    <div class="form-group col-md-6">
                                        <!-- Label  -->
                                        <label>
                                            Origin sample
                                        </label>
                                        <!-- Input -->
                                        <input type="text"
                                               name="title"
                                               class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                               id="title">
                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
				                                    <strong>{{ $errors->first('title') }}</strong>
				                                </span>
                                        @endif

                                    </div>


                                    <div class="form-group col-md-6">
                                        <!-- Label  -->
                                        <label>
                                            Quantity
                                        </label>
                                        <!-- Input -->
                                        <input type="text"
                                               name="title"
                                               class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                               id="title">
                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
				                                    <strong>{{ $errors->first('title') }}</strong>
				                                </span>
                                        @endif

                                    </div>


                                    <div class="form-group col-md-6">
                                        <!-- Label  -->
                                        <label>
                                            Test Required
                                        </label>
                                        <!-- Input -->
                                        <input type="text"
                                               name="title"
                                               class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}"
                                               id="title">
                                        @if ($errors->has('title'))
                                            <span class="invalid-feedback" role="alert">
				                                    <strong>{{ $errors->first('title') }}</strong>
				                                </span>
                                        @endif

                                    </div>

						               <div class="form-group col-md-12">

							                <!-- Label -->
							                <label class="mb-1">
							                   Description
							                </label>

							                <!-- Text -->
							                <small class="form-text text-muted">
							                  Describe shortly the category and the contents expected, make it count.
							                </small>

							                <!-- Textarea -->
							                <div data-toggle="quill" id="editor"></div>
							                <textarea name="description" id="description" hidden></textarea>

							              </div>


                                    <div class="col-md-12 mt-2">


						               <hr class="mt-5 mb-5">

						                <!-- Buttons -->
							              <button type="submit"
							                      id="submit-all"
							                      class="btn btn-block btn-primary">
							                Create Application
							              </button>

							              <a href="{{ route('admin.category.index')}}" class="btn btn-block btn-link text-muted">
							                Cancel this Application
							              </a>

                                    </div>


							 </form>


			          </div>
			        </div> <!-- / .row -->
			      </div>

@endsection


@section('scripts')

	<script>
		var quill = new Quill('#editor', {
	    theme: 'snow'
	  });






		// var e = document.querySelectorAll('[data-toggle="dropzone"]');
		//  "undefined" != typeof Dropzone &&
		//  	e &&
		// 	((Dropzone.autoDiscover = !1),
		// 	(Dropzone.thumbnailWidth = null),
  //      		(Dropzone.thumbnailHeight = null),
  //      		[].forEach.call(e, function (e) {
  //      			!(function (e) {
  //      				var t = void 0,
  //      					a = e.dataset.options;
  //      				a = a ? JSON.parse(a) : {};
  //      				var o = {
  //                           previewsContainer: e.querySelector(".dz-preview"),
  //                           previewTemplate: e.querySelector(".dz-preview").innerHTML,
  //                           init: function () {
  //                               this.on("addedfile", function (e) {
  //                                   1 == a.maxFiles && t && this.removeFile(t), (t = e);
  //                               });
  //                           },
  //                       },
  //                       l = Object.assign(o, a);
  //                        (e.querySelector(".dz-preview").innerHTML = ""), new Dropzone(e, l);
  //      			})(e);
  //      		}));





		// Dropzone.options.imageHolder =
  //        {
  //        	autoProcessQueue: false,
  //        	acceptedFiles:".jpg,.png",
  //        	maxFiles: 1,
  //        	paramName: "file",
  //        	url: "http://localhost:8000/admin/categories/create",
  //        	headers: {
		// 	    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		// 	  },

  //        	init: function () {
  //        		var submitButton = document.querySelector('#submit-all');
  //        		myDropzone = this;

  //        		submitButton.addEventListener('click', function  (e) {
  //        			e.preventDefault();
  //        			e.stopPropagation();
  //        			myDropzone.processQueue();
  //        		});

  //        		this.on("sending", function(file) {
		// 	        alert('Sending the file' +  file.name)
		// 	      });


  //        		this.on("complete", function  () {
  //        			if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0 ){
  //        				var _this = this;
  //        				_this.removeAllFiles();
  //        			}
  //        		});

         		// this.on("success", function(file, serverResponse) {
				      // Called after the file successfully uploaded.
				      // console.log(serverResponse);

				      // If the image is already a thumbnail:
				      // this.emit('thumbnail', file, serverResponse.imageUrl);

				      // If it needs resizing:
				      // this.createThumbnailFromUrl(file, serverResponse.imageUrl);
				    // });




  //        		$('#submit-all').on('click', function () {
  //        			var description = $(".ql-editor").html();
  //       			$("#description").val(description);
  //        			myDropzone.processQueue();
  //        		});

  //        		this.on("complete", function () {
  //        			if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
  //        				var _this = this;
  //        				_this.removeFiles();
  //        			}
  //        		});

         	// }
		// };

		$("#form").submit(function() {
        	var description = $(".ql-editor").html();
        	$("#description").val(description);
	    });
	</script>
@endsection
