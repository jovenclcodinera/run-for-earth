<?php

namespace App\Http\Controllers;

use App\Participant;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ParticipantController extends Controller
{
    public function index() {
        $query = Participant::query();
        if (request()->has('filter')) {
            $query->where('race_category', Str::upper(request()->filter));
        }
        return view('participants', [
            'participants' => $query->get(),
            'filter' => request()->has('filter') ? request()->filter : 'all'
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'address' => 'required',
            'birthdate' => 'required|date',
            'gender' => 'required|min:4',
            'email_address' => 'required|email',
            'contact_number' => 'sometimes',
            'shirt_size' => 'required',
            'terms' => 'accepted'
        ]);

        $participantData = $request->except(['_token', 'terms', 'address_ext']);
        $participantData['address'] = Str::of($request->address . ' ' . $request->address_ext)->trim();
        $participantData['birthdate'] = Carbon::parse($request->birthdate);
        if ($participantData['birthdate']->age <= 18) {
            $participantData['race_category'] = 'JUNIORS';
        } else {
            $participantData['race_category'] = 'SENIORS';
        }

        $participant = Participant::create($participantData);

        return redirect(route('participants.result'))->with('participantId', $participant->id);
    }

    public function result() {
        if (session()->has('participantId')) {
            $participant = Participant::find(session()->get('participantId'));
            return view('results', [
                'participant' => $participant
            ]);
        } else {
            return redirect('/');
        }
    }
}
