<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Meeting;

use App\Member;

use App\Agenda;

use App\Project;

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
        $members = Member::orderBy('fullname')->pluck('fullname', 'id');
        $projects = Project::get()->pluck('display_name', 'id');

        $comingMeeting = Meeting::where('coming', 1)->first();

        if ($comingMeeting === null) {
            return view('meetings.create', [
                'members' => $members,
                'projects' => $projects,
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
            $comingMeeting->coming = true;
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
        $projects = Project::get()->pluck('display_name', 'id');

        $meeting = Meeting::find($id);

        return view('meetings.edit', [
            'meeting' => $meeting,
            'members' => $members,
            'projects' => $projects,
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
            $projects = Project::get()->pluck('display_name', 'id');
            
            return view('meetings.edit', [
                'meeting' => $meeting,
                'members' => $members,
                'projects' => $projects,
            ]);
        } elseif ($request->has('close')) {
            $meeting->coming = false;
            $meeting->save();

            foreach ($data as $key => $value) {
                $member = Member::find($data[$key]);

                if ($member !== null) {
                    var_dump($member->getNameWithTitle());
                    $data[$key] = $member->getNameWithTitle();    
                }
            }

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
