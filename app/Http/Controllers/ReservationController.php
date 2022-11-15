<?php

namespace App\Http\Controllers;

use App\Reservation;
use App\Forfait;
use Illuminate\Http\Request;
use App\Mail\ReservMail;
use Illuminate\Support\Facades\Mail;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();
        $forfaits = Forfait::all();
        $forf = Forfait::get();
        return view('reservations')->with('reservations',$reservations)->with('forfaits',$forfaits)->with('forf', $forf);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'prestation' => 'required',
            'addressdepart' => 'required',
            'addressdestin' => 'required',
            'date' => 'required',
            'heure' => 'required',
            'passagers' => 'required',
            'bagages' => 'required',
            //'promo' => 'required',
            'nomfacture' => 'required',
            'sex' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            //'comment' => 'required',
            'gamme' => 'required',
            'prix' => 'required',
        ]);
        //dd($request->all());

        $reservation = Reservation::create([
            'prestation' =>$request->prestation,
            'addressdepart' => $request->addressdepart,
            'addressdestin' => $request->addressdestin,
            'date' => $request->date,
            'heure' => $request->heure,
            'passagers' => $request->passagers,
            'bagages' => $request->bagages,
            'promo' => $request->promo,
            'nomfacture' => $request->nomfacture,
            'sex' => $request->sex,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'phone' => $request->phone,
            'email' => $request->email,
            'comment' => $request->comment ?? 'sans commentaire',
            'gamme' => $request->gamme,
            'prix' => $request->prix,
        ]);
        //email send
        $data = array(
            'prestation' =>$request->prestation,
            'addressdepart' => $request->addressdepart,
            'addressdestin' => $request->addressdestin,
            'date' => $request->date,
            'heure' => $request->heure,
            'passagers' => $request->passagers,
            'bagages' => $request->bagages,
            'nomfacture' => $request->nomfacture,
            'sex' => $request->sex,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'phone' => $request->phone,
            'email' => $request->email,
            'comment' => $request->comment ?? 'sans commentaire',
            'gamme' => $request->gamme,
            'prix' => $request->prix,
        );

        //return back();
        Mail::to('abdelwahid.salaheddine@gmail.com')->send(new ReservMail($data));
        return view('layouts.confirm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation)
    {
        //
    }
}
