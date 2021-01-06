@extends('layout.layout')
@section('content')
			<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper" style="height: 100vh;">
					<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'sliderLayout': 'fullscreen', 'delay': 9000, 'gridwidth': 1170, 'gridheight': 1000, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }}">
						<ul>
							<li class="slide-overlay" data-transition="fade">
								<img src="{{asset('storage/img/blank.gif')}}"  
									alt=""
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">

								<div class="rs-background-video-layer">
									<img src="{{asset('storage/img/home.jpg')}}" alt="logo amatleta medio">
								</div>
								
								<div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
									data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
									data-x="center"
									data-y="center"
									data-fontsize="['50','50','50','90']"
									data-lineheight="['55','55','55','95']" style="z-index: 5;">
											<img alt="Amatleta" width="82" height="40" src="{{asset('storage/img/amatleta-logo.png')}}"></div>

								<div class="tp-dottedoverlay tp-opacity-overlay"></div>
							</li>
						</ul>
					</div>
				</div>
			</div>
@endsection
@section('script')
@endsection

<!--
C: 0%
M: 68%
Y: 87%
K: 0%
RGB: #FF5221
-->