@extends('layout.layout')
@section('title', 'Blog')
@section('content')
<div role="main" class="main" style="padding-top:100px">
	<section class="page-header page-header-modern page-header-background page-header-background-sm overlay overlay-color-primary overlay-show overlay-op-8 mb-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12 align-self-center p-static order-2 text-center">
					<h1 class="col-md-12 align-self-center p-static order-2 text-center">Blog</h1>
				</div>
			</div>
		</div>
	</section>

	<div class="container py-4">

		<div class="row">
			<div class="col">
				<div class="blog-posts">

					<div class="row">

						<div class="col-md-4 col-lg-3">
							<article class="post post-medium border-0 pb-0 mb-5">
								<div class="post-image">
									<a href="{{ route('blog.show',1) }}">
										<img src="{{asset('storage/img/fill.jpg')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
									</a>
								</div>

								<div class="post-content">

									<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{ route('blog.show',1) }}">Amazing Mountain</a></h2>
									<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

									<div class="post-meta">
										<span><i class="far fa-user"></i> By <a href="#">Bob Doe</a> </span>
										<span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
										<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
										<span class="d-block mt-2"><a href="{{ route('blog.show',1) }}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
									</div>

								</div>
							</article>
						</div>

						<div class="col-md-4 col-lg-3">
							<article class="post post-medium border-0 pb-0 mb-5">
								<div class="post-image">
									<a href="{{ route('blog.show',1) }}">
										<img src="{{asset('storage/img/fill.jpg')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
									</a>
								</div>

								<div class="post-content">

									<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{ route('blog.show',1) }}">Creative Business</a></h2>
									<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

									<div class="post-meta">
										<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
										<span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
										<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
										<span class="d-block mt-2"><a href="{{ route('blog.show',1) }}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
									</div>

								</div>
							</article>
						</div>

						<div class="col-md-4 col-lg-3">
							<article class="post post-medium border-0 pb-0 mb-5">
								<div class="post-image">
									<a href="{{ route('blog.show',1) }}">
										<img src="{{asset('storage/img/fill.jpg')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
									</a>
								</div>

								<div class="post-content">

									<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{ route('blog.show',1) }}">Unlimited Ways</a></h2>
									<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

									<div class="post-meta">
										<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
										<span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
										<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
										<span class="d-block mt-2"><a href="{{ route('blog.show',1) }}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
									</div>

								</div>
							</article>
						</div>

						<div class="col-md-4 col-lg-3">
							<article class="post post-medium border-0 pb-0 mb-5">
								<div class="post-image">
									<a href="{{ route('blog.show',1) }}">
										<img src="{{asset('storage/img/fill.jpg')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
									</a>
								</div>

								<div class="post-content">

									<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{ route('blog.show',1) }}">Developer Life</a></h2>
									<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

									<div class="post-meta">
										<span><i class="far fa-user"></i> By <a href="#">Jessica Doe</a> </span>
										<span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
										<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
										<span class="d-block mt-2"><a href="{{ route('blog.show',1) }}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
									</div>

								</div>
							</article>
						</div>

						<div class="col-md-4 col-lg-3">
							<article class="post post-medium border-0 pb-0 mb-5">
								<div class="post-image">
									<a href="{{ route('blog.show',1) }}">
										<img src="{{asset('storage/img/fill.jpg')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
									</a>
								</div>

								<div class="post-content">

									<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{ route('blog.show',1) }}">The Blue Sky</a></h2>
									<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

									<div class="post-meta">
										<span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
										<span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
										<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
										<span class="d-block mt-2"><a href="{{ route('blog.show',1) }}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
									</div>

								</div>
							</article>
						</div>

						<div class="col-md-4 col-lg-3">
							<article class="post post-medium border-0 pb-0 mb-5">
								<div class="post-image">
									<a href="{{ route('blog.show',1) }}">
										<img src="{{asset('storage/img/fill.jpg')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
									</a>
								</div>

								<div class="post-content">

									<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{ route('blog.show',1) }}">Night Life</a></h2>
									<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

									<div class="post-meta">
										<span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
										<span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
										<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
										<span class="d-block mt-2"><a href="{{ route('blog.show',1) }}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
									</div>

								</div>
							</article>
						</div>

						<div class="col-md-4 col-lg-3">
							<article class="post post-medium border-0 pb-0 mb-5">
								<div class="post-image">
									<a href="{{ route('blog.show',1) }}">
										<img src="{{asset('storage/img/fill.jpg')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
									</a>
								</div>

								<div class="post-content">

									<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{ route('blog.show',1) }}">Another World Perspective</a></h2>
									<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

									<div class="post-meta">
										<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
										<span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
										<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
										<span class="d-block mt-2"><a href="{{ route('blog.show',1) }}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
									</div>

								</div>
							</article>
						</div>

						<div class="col-md-4 col-lg-3">
							<article class="post post-medium border-0 pb-0 mb-5">
								<div class="post-image">
									<a href="{{ route('blog.show',1) }}">
										<img src="{{asset('storage/img/fill.jpg')}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
									</a>
								</div>

								<div class="post-content">

									<h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{ route('blog.show',1) }}">The Creative Team</a></h2>
									<p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

									<div class="post-meta">
										<span><i class="far fa-user"></i> By <a href="#">Robert Doe</a> </span>
										<span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
										<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
										<span class="d-block mt-2"><a href="{{ route('blog.show',1) }}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
									</div>

								</div>
							</article>
						</div>
					</div>

					<div class="row">
						<div class="col">
							<ul class="pagination float-right">
								<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
								<li class="page-item active"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
							</ul>
						</div>
					</div>

				</div>
			</div>

		</div>

	</div>

</div>
@endsection