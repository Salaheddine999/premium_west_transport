@extends('layouts.app')
@section('content')


		<!-- End Header -->
		<!-- Start Top title -->
		<section class="top-title">
			<div class="top-page">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="top-page-heading">
								<h1>FLOTTES</h1>
								<p class="sub-title">Choisissez Votre Voiture De Rêve Parmi Trois Catégories Différentes</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="breadcrumbs">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul>
								<li>
									<a href="#">Acceuil </a>
								</li>
								<li>
									/ Flottes
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Top title -->
		<!-- Start Our Fleet -->
		<section class="our-fleet-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="template-title center">
							<h1>La Flotte Premium</h1>
							<span>La Flotte Premium</span>
							<p>Des véhicules modernes et confortables pour votre plus grand confort.</p>
						</div>
					</div>
				</div>


				<div class="row">
					<div class="col-md-12">
                        @foreach ($flottes as $item)
                        @if ($item->id % 2)
                            <div class="select-car ver1">
                        @else
                            <div class="select-car s1 ver1">
                        @endif
							<div class="image-car one-half">
								<img src="{{URL::asset($item->image)}}" alt="{{$item->alt}}">
							</div>
							<div class="box-text one-half">
								<div class="top">
									<h3>{{$item->type}}</h3>
									<div class="name-car">
										{{$item->name}}
									</div>
								</div>
								<div class="content">
									<p>{{$item->details}}</p>
									<ul>
									    <li><img src="images/booking/people.png" alt="">{{$item->persons}}</li>
									    <li><img src="images/booking/vali.png" alt="">{{$item->bags}}</li>
									</ul>
								</div>
								<div class="content">
									<p><b>Avantages : </b>{{$item->services}}</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
                        @endforeach
					</div>
				</div>

			</div>
		</section>
		<!-- End Our Fleet -->
		<!-- Start Section Iconbox -->
		<section class="section-iconbox">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="template-title center">
							<h1>Pourquoi Nous Choisir</h1>
							<span>Pourquoi Nous Choisir</span>
							<p class="sub-title">Découvrez nos services de location de voitures & de limousines de première classe</p>
						</div>
					</div>
				</div>
				<div class="row">
                    @foreach ($avantages as $item2)
					<div class="col-md-3 col-sm-6">
						<div class="iconbox center">
							<div class="iconbox-icon">
								<img src="{{URL::asset($item2->icon)}}" alt="">
							</div>
							<div class="iconbox-content">
								<h3>
									<a href="#" title="">{{$item2->title}}</a>
								</h3>
								<p>{{$item2->description}}</p>
							</div>
						</div>
					</div>
                    @endforeach
				</div>
			</div>
		</section>
		<!-- End Section Iconbox -->
		<!-- Start Footer -->
        @endsection
