@extends('layouts.front.master')
@section('title', 'Page Title')
@section('content')
<ol class="breadcrumb container">
	<li><a href="index.html">Home</a></li>
	<li><a href="">Agents</a></li>
	<li class="active"><a href="agency.html">Agency</a></li>
</ol>

<div>
	<section id="agent">
		<div class="row container">
			<div class="col-md-4 col-md-offset-3">
				<img src="{{URL('assets/img/agents/agency-name.png')}}" class="img-thumbnail" alt="">
			</div>
			<div class="col-md-4 text-uppercase">
				<h2>agency name </h2>
				<a href="">255 properties on Estato <i class="fa fa-external-link"></i></a>
				<hr>
				<div class="text-lowercase">
					<ul class="list-unstyled">
						<li>
							<i class="fa fa-phone"></i>
							<span>(123) 456 7890</span>
						</li>
						<li>
							<a href=""><i class="fa fa-skype"></i> dwyane.jhon</a>
						</li>
						<li>
							<i class="fa fa-mobile"></i>
							<span>888 999 000</span>
						</li>
						<li>
							<a href=""><i class="fa fa-envelope-o"></i> dwyane.jhon@example.com</a>
						</li>
					</ul>
				</div>
				<hr>
				<div>
					<button class="btn btn-primary btn-trans">Visit Our Website</button>
					<button class="btn btn-primary btn-trans">View Properties</button>
				</div>
			</div>
			<hr>
		</div>
	</section>
</div>

<div id="about_section" class="container">
	<h3 class="text-uppercase page-header text-center">our agents</h3>
	<div class="row">
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/agents/agents-1.png')}}" >
				<div class="caption">
					<h4>Varun Agarwal</h4>
					<a href="">15 Properties</a>
					<hr>
					<p><i class="fa fa-phone"></i> (123) 456 7890</p>
					<p><i class="fa fa-mobile"></i> 999 999 9999</p>
					<p><i class="fa fa-skype"></i> lotusgt1suri</p>
					<p><i class="fa fa-envelope"></i> lotusgt1suri@gmail.com</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/agents/agents-1.png')}}" >
				<div class="caption">
					<h4>Mohit Tripathi</h4>
					<a href="">15 Properties</a>
					<hr>
					<p><i class="fa fa-phone"></i> (123) 456 7890</p>
					<p><i class="fa fa-mobile"></i> 999 999 9999</p>
					<p><i class="fa fa-skype"></i> lotusgt1suri</p>
					<p><i class="fa fa-envelope"></i> lotusgt1suri@gmail.com</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/agents/agents-1.png')}}" >
				<div class="caption">
					<h4>Raghvendra Singh</h4>
					<a href="">15 Properties</a>
					<hr>
					<p><i class="fa fa-phone"></i> (123) 456 7890</p>
					<p><i class="fa fa-mobile"></i> 999 999 9999</p>
					<p><i class="fa fa-skype"></i> lotusgt1suri</p>
					<p><i class="fa fa-envelope"></i> lotusgt1suri@gmail.com</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/agents/agents-1.png')}}" >
				<div class="caption">
					<h4>Surendra Rana</h4>
					<a href="">15 Properties</a>
					<hr>
					<p><i class="fa fa-phone"></i> (123) 456 7890</p>
					<p><i class="fa fa-mobile"></i> 999 999 9999</p>
					<p><i class="fa fa-skype"></i> lotusgt1suri</p>
					<p><i class="fa fa-envelope"></i> lotusgt1suri@gmail.com</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="" class="container">
	<h3 class="text-uppercase text-center page-header">agency properties</h3>
	<div class="row">
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/featured/property-1.jpg')}}" >
				<div class="caption text-center">
					<a href="">4770 Cotton Berry Point <br> Carrot River</a>
					<p><ins> $ 350,000</ins></p>
					<p>Beautiful apartment in a great, very calm and safe place.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/featured/property-2.jpg')}}" >
				<div class="caption text-center">
					<a href="">7589 Gentle City,<br> Mountain Hasty</a>
					<p><ins> $ 350,000</ins></p>
					<p>Beautiful apartment in a great, very calm and safe place.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/featured/property-3.jpg')}}" >
				<div class="caption text-center">
					<a href="">0254 Easy Oke Drive,<br> Caronport</a>
					<p><ins> $ 450,000</ins></p>
					<p>Beautiful apartment in a great, very calm and safe place.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/featured/property-4.jpg')}}" >
				<div class="caption text-center">
					<a href="">1979 Thunder Line,<br> Stoopville</a>
					<p><ins> $ 550,000</ins></p>
					<p>Beautiful apartment in a great, very calm and safe place.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/featured/property-5.jpg')}}" >
				<div class="caption text-center">
					<a href="">4770 Cotton Berry Point <br> Carrot River</a>
					<p><ins> $ 350,000</ins></p>
					<p>Beautiful apartment in a great, very calm and safe place.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/featured/property-6.jpg')}}" >
				<div class="caption text-center">
					<a href="">7589 Gentle City,<br> Mountain Hasty</a>
					<p><ins> $ 350,000</ins></p>
					<p>Beautiful apartment in a great, very calm and safe place.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/featured/property-7.jpg')}}" >
				<div class="caption text-center">
					<a href="">0254 Easy Oke Drive,<br> Caronport</a>
					<p><ins> $ 450,000</ins></p>
					<p>Beautiful apartment in a great, very calm and safe place.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/featured/property-8.jpg')}}" >
				<div class="caption text-center">
					<a href="">1979 Thunder Line,<br> Stoopville</a>
					<p><ins> $ 550,000</ins></p>
					<p>Beautiful apartment in a great, very calm and safe place.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/featured/property-9.jpg')}}" >
				<div class="caption text-center">
					<a href="">4770 Cotton Berry Point <br> Carrot River</a>
					<p><ins> $ 350,000</ins></p>
					<p>Beautiful apartment in a great, very calm and safe place.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/featured/property-10.jpg')}}" >
				<div class="caption text-center">
					<a href="">7589 Gentle City,<br> Mountain Hasty</a>
					<p><ins> $ 350,000</ins></p>
					<p>Beautiful apartment in a great, very calm and safe place.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/featured/property-11.jpg')}}" >
				<div class="caption text-center">
					<a href="">0254 Easy Oke Drive,<br> Caronport</a>
					<p><ins> $ 450,000</ins></p>
					<p>Beautiful apartment in a great, very calm and safe place.</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="thumbnail">
				<img class="img-rounded img-responsive" src="{{URL('assets/img/featured/property-12.jpg')}}" >
				<div class="caption text-center">
					<a href="">1979 Thunder Line,<br> Stoopville</a>
					<p><ins> $ 550,000</ins></p>
					<p>Beautiful apartment in a great, very calm and safe place.</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection