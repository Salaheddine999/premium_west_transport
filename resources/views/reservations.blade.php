@extends('layouts.app')

@section('content')
        <!-- End Header -->
		<!-- Start Booking Steps Area -->

        <section class="booking-steps-area mht">
			<div class="container center">
				<div class="row">
					<div class="col-md-12">
						<ul class="booking-steps" style="display:inline;">
						    <li class="step">
						    	<span>1</span>
						    	<div class="icon center" style="padding-top:5px">
						    		<i class="fas fa-map-marked-alt fa-2x"></i>
						    	</div>
						    	<div class="text">
						    		Estimation
						    	</div>
						    </li>
                            <li class="step">
						    	<span>2</span>
						    	<div class="icon center" style="padding-top:5px">
						    		<i class="fas fa-coins fa-2x"></i>
						    	</div>
						    	<div class="text">
						    		Tarifs
						    	</div>
						    </li>
						    <li class="step">
						    	<span>3</span>
						    	<div class="icon" style="padding-top:5px">
						    		<i class="far fa-calendar-alt fa-2x"></i>
						    	</div>
						    	<div class="text">
						    		Réservation
						    	</div>
						    </li>
						    {{-- <li class="step">
						    	<span>4</span>
						    	<div class="icon" style="padding-top:5px">
						    		<i class="fas fa-check fa-2x"></i>
						    	</div>
						    	<div class="text">
						    		Confirmation
						    	</div>
						    </li> --}}
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End Booking Steps Area -->
		<!-- Start Options Area -->

		<section class="options-area" style="">
			<div class="container">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8">
						<div class="form-options">
							<!-- Start Of Form -->
							<form action="{{route('reservation.store')}}" method="POST" accept-charset="utf-8" id="regForm">
                                @csrf
								<div class="tab">
									<div class="infomation" id="clsinpt">
										<label>Prestation</label><br>
                                        <div class="dropdown" style="width: 100%; margin-bottom: 22px;">
                                            <input class="dropdown-toggle" id="prestation" name="prestation" data-toggle="dropdown" placeholder="Choisir une prestation" type="text">
                                            <ul class="dropdown-menu" style="width: 100%; padding-left:20px;">
                                                <li class="inliner" id="tran"><a style="padding-bottom:10px; padding-top:10px;" tabindex="-1">Transferts</a></li>
                                                <li class="dropdown-submenu">
                                                    <a class="test" style="padding-bottom:10px; padding-top:10px;" tabindex="-1">Forfaits<span class="caret"></span></a>
                                                    <ul class="dropdown-menu" style="width: 100%; padding-left:20px;" id="scrollbar">

                                                        @foreach ($forfaits as $item)
                                                            <li class="inliner" value="" id="forf"><a tabindex="-1"></a>{{$item->direction}}</li>
                                                        @endforeach

                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
									</div>
									<div class="one-half first-name">
										<label for="adressedepart">Adresse de départ</label>
										<input type="text" name="addressdepart" id="search1" placeholder="Adresse de départ">
									</div>
									<div class="one-half first-name">
										<label for="adressedestin">Adresse de destination </label>
										<input type="text" name="addressdestin" id="search2" placeholder="Adresse de destination">
									</div>
									<div class="one-half first-name">
										<label for="firstname">Date de prise en charge</label>
										<input type="date" name="date" id="date">
                                        <script>
                                            document.getElementById('date').value = new Date().toISOString().substring(0, 10);
                                        </script>
									</div>
									<div class="one-half first-name">
										<label for="firstname">Heure de prise en charge</label>
										<input type="time" name="heure" id="time" value="now">
                                        {{-- <script>
                                            //Set Time default value for now
                                            var time = new Date();
                                            var h = time.getHours();
                                            if (h < 10) {
                                                h = "0" + h;
                                            }
                                            var m = time.getMinutes();
                                            if (m < 10) {
                                                m = "0" + m;
                                            }
                                            var time = h + ":" + m;
                                            document.getElementById('time').value = time;
                                        </script> --}}
									</div>
                                    <div class="one-half number-pass">
                                        <label for="number-pass">Nombre de passagers</label>
                                        <div class="select">
                                            <select name="passagers" id="number-pass">
                                                <option value="" selected disabled>Nombre de passagers</option>
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
												<option value="5">05</option>
                                                <option value="6">06</option>
                                                <option value="7">07</option>
                                                <option value="8">08</option>
												<option value="9">09</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="one-half number-bags">
                                        <label for="number-bags">Nombre de bagages</label>
                                        <div class="select">
                                            <select name="bagages" id="number-bags">
                                                <option value="" selected disabled>Nombre de bagages</option>
                                                <option value="0">00</option>
                                                <option value="1">01</option>
                                                <option value="2">02</option>
                                                <option value="3">03</option>
                                                <option value="4">04</option>
												<option value="5">05</option>
                                                <option value="6">06</option>
                                                <option value="7">07</option>
                                                <option value="8">08</option>
												<option value="9">09</option>
                                                <option value="10">10</option>
                                            </select>
                                        </div>
                                    </div>

								</div>
								<div class="tab">
								<div class="container">
                                    <div class="row">
                                        <div class="one-half" id="radioat" style="margin-top: 0px">
                                            <p id="confwarning" style="color: #FF4949; margin-bottom: 20px;"></p>
                                                <div class="form-check" id="forf">
                                                    <input class="form-check-input" type="radio" id="confort" name="prix" value="" style="height: 20px; margin: 5px 0px 0px 20px;" checked="checked" onclick="checkgam1();">
                                                    <h2 class="form-check-label" id="confTitle">Confort</h2>
                                                    <h4 class="form-check-label" style="margin-top: 20px;" id="confprice"></h4>
                                                    <input type="radio" name="gamme" id="gam1" value="confort" style="height: 20px; margin: 5px 0px 0px 20px;" checked="checked" hidden>
                                                </div>
                                                <hr>
                                                <div class="form-check" id="forf">
                                                    <input class="form-check-input" type="radio" id="van" name="prix" value="" style="height: 20px; margin: 5px 0px 0px 20px;" onclick="checkgam2();">
                                                    <h2 class="form-check-label">Van</h2>
                                                    <h4 class="form-check-label" style="margin-top: 20px;" id="vanprice"></h4>
                                                    <input type="radio" name="gamme" value="Van" id="gam2" style="height: 20px; margin: 5px 0px 0px 20px;" hidden>
                                                </div>
                                        </div>
                                        <div class="one-half center" id="mapMobile">

                                            <div id="map"></div>

                                        </div>

                                    </div>
								</div>
								</div>
								<div class="tab">
                                    <div class="one-half first-name">
										<label for="firstname">Nom de facturation</label>
										<input type="text" placeholder="Nom de facturation"  name="nomfacture">
									</div>
									<div class="one-half first-name">
										<label for="firstname">Civilité</label>
										<select name="sex" id="sex">
                                            <option selected disabled hidden value="">Civilité</option>
                                            <option value="M">M.</option>
                                            <option value="Mme">Mme</option>
                                            <option value="Mlle">Mlle</option>
                                        </select>
									</div>
                                    <div class="one-half first-name">
										<label for="firstname">Prénom</label>
										<input type="text" name="nom" id="firstname" placeholder="Votre Prénom">
									</div>
									<div class="one-half first-name">
										<label for="firstname">Nom</label>
										<input type="text" name="prenom" id="firstname" placeholder="Votre Nom">
									</div>
                                    <div class="one-half phone">
                                        <label for="phone">Téléphone portable</label>
                                        <input type="tel" name="phone" id="phone" placeholder="06 00 00 00 00">
                                    </div>
                                    <div class="one-half first-name">
										<label for="firstname">Email</label>
										<input type="email" name="email" id="firstname" placeholder="exemple@gmail.com">
									</div>
                                    <div class="infomation">
                                        <label for="infomation">Commentaires</label>
                                        <textarea name="comment" id="infomation" placeholder="Entrez vos commentaires ici ..."></textarea>
                                    </div>
                                    {{-- <button type="submit">submit</button> --}}
								</div>

								<div class="btn-submit">
									<button type="button" id="estimate" onclick="showBtn(); nextPrev(1); calcRoute();showforf();passbags();">Estimez</button>
									<button type="button" id="prevBtn" onclick="nextPrev(-1)">Précédent</button>
									<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
									<button type="submit" id="reserve" onclick="nextPrev(1);">Confirmer votre réservation</button>
								</div>
							</form>
						</div>
					</div>
					<div class="col-lg-2"></div>
				</div>
			</div>
		</section>
		<!-- End Options Area -->
			<!-- Start Footer -->

@endsection
