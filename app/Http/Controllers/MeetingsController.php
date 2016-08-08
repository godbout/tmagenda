<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Meeting;

use App\Member;

use App\Agenda;

class MeetingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings = Meeting::all();

        return view('meetings.index', [
            'meetings' => $meetings,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::lists('fullname', 'id');

        $comingMeeting = Meeting::where('coming', 1)->first();

        if ($comingMeeting === null) {
            return view('meetings.create', [
                'members' => $members
            ]);
        } else {
            return redirect()->route('meetings.edit', ['id' => $comingMeeting->id]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comingMeeting = Meeting::where('coming', 1)->first();

        if ($comingMeeting === null) {
            /**
             * There should exist a better way to handle this
             *
             * The issue is that if a dropdown contains the placeholder
             * the returned value is empty
             * and the foreign keys fail 
             * because the shit is trying to insert empty string instead
             * of a null
             * @var [type]
             */
            $data = $request->all();
            foreach ($data as $key => $value) {
                if (empty($value) === true) {
                    unset($data[$key]);
                }
            }

            $comingMeeting = Meeting::create($data);
            $comingMeeting->coming = 1;
            $comingMeeting->save();

            return redirect()->route('meetings.edit', ['id' => $comingMeeting->id]);
        } else {
            return redirect()->route('meetings.update', ['id' => $comingMeeting->id]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = Member::lists('fullname', 'id');

        $meeting = Meeting::find($id);

        return view('meetings.edit', [
            'meeting' => $meeting,
            'members' => $members,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $meeting = Meeting::find($id);
        
        $data = $request->all();
        foreach ($data as $key => $value) {
            if (empty($value) === true) {
                unset($data[$key]);
            }
        }
        $meeting->update($data);

        if ($request->has('update')) {
            $members = Member::lists('fullname', 'id');
            
            return view('meetings.edit', [
                'meeting' => $meeting,
                'members' => $members,
            ]);
        } elseif ($request->has('close')) {
            $meeting->coming = false;
            $meeting->save();

            $data['opening'] = Member::find($data['opening'])->getNameWithTitle();
            $data['welcome'] = Member::find($data['welcome'])->getNameWithTitle();
            $data['tme'] = Member::find($data['tme'])->getNameWithTitle();
            $data['speaker1'] = Member::find($data['speaker1'])->getNameWithTitle();
            $data['speaker2'] = Member::find($data['speaker2'])->getNameWithTitle();
            $data['speaker3'] = Member::find($data['speaker3'])->getNameWithTitle();
            $data['speaker4'] = Member::find($data['speaker4'])->getNameWithTitle();
            $data['tablemaster'] = Member::find($data['tablemaster'])->getNameWithTitle();
            $data['evaluator1'] = Member::find($data['evaluator1'])->getNameWithTitle();
            $data['evaluator2'] = Member::find($data['evaluator2'])->getNameWithTitle();
            $data['evaluator3'] = Member::find($data['evaluator3'])->getNameWithTitle();
            $data['evaluator4'] = Member::find($data['evaluator4'])->getNameWithTitle();
            $data['timer'] = Member::find($data['timer'])->getNameWithTitle();
            $data['ahcounter'] = Member::find($data['ahcounter'])->getNameWithTitle();
            $data['grammarian'] = Member::find($data['grammarian'])->getNameWithTitle();
            $data['general'] = Member::find($data['general'])->getNameWithTitle();
            $data['closing'] = Member::find($data['closing'])->getNameWithTitle();

            $agenda = Agenda::create($data);

            return redirect()->route('agendas.show', ['id' => $agenda->id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
