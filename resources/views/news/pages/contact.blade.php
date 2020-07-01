@extends('news.layout.single')

@section('content')
<section class="row">
	<article class="post column">
	<h1 class="post-title">Get in touch with us</h1>
	<p>Liên hệ quảng cáo: 0943852932 - Tiến</p>
	<!-- Map -->
	<div id="map" class="row flex-video widescreen"></div>
	<!-- End Map -->
</article>
</section>
@endsection
@section('js')
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="js/gmap3.min.js"></script>
@endsection