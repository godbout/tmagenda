@extends('layouts.master')

@section('title', 'Agendas List')

@section('content')

    <?php $itemTime = strtotime($agenda->time) ?>
    
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>TIME</th>
                <th>WHAT</th>
                <th>WHO</th>
                <th>LIMIT</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+1 minute', $itemTime) }}</td>
                <td>Call to Order</td>
                <td>Everyone</td>
                <td>1</td>
            </tr>
            <tr>
                <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+3 minute', $itemTime) }}</td>
                <td>Opening Remarks</td>
                <td>{{ $agenda->opening }}</td>
                <td>2</td>
            </tr>
            <tr>
                <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+7 minute', $itemTime)  }}</td>
                <td>Welcome Guests</td>
                <td>{{ $agenda->welcome }}</td>
                <td>4-6</td>
            </tr>
            <tr>
                <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td>Toastmaster of the Evening</td>
                <td>{{ $agenda->tme }}</td>
                <td>2-3</td>
            </tr>
            <tr>
                <td colspan="4">PREPARED SPEECHES</td>
            </tr>
            @if (empty($agenda->speaker1) === false)
                <tr>
                    <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td>Project </td>
                    <td>{{ $agenda->speaker1 }}</td>
                    <td>???</td>
                </tr>
            @endif
            @if (empty($agenda->speaker2) === false)
                <tr>
                    <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td>Project </td>
                    <td>{{ $agenda->speaker2 }}</td>
                    <td>???</std>
                </tr>
            @endif
            @if (empty($agenda->speaker3) === false)
                <tr>
                    <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td>Project </td>
                    <td>{{ $agenda->speaker3 }}</td>
                    <td>???</td>
                </tr>
            @endif
            @if (empty($agenda->speaker4) === false)
                <tr>
                    <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td>Project </td>
                    <td>{{ $agenda->speaker4 }}</td>
                    <td>???</std>
                </tr>
            @endif
            <tr>
                <td colspan="4">TABLE TOPICS</td>
            </tr>
            <tr>
                <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td colspan="2">{{ $agenda->tablemaster }}</td>
                <td>18-20</td>
            </tr>
            <tr>
                <td colspan="4">EVALUATIONS</td>
            </tr>
            @if (empty($agenda->evaluator1) === false)
                <tr>
                    <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td>For {{ $agenda->speaker1 }} </td>
                    <td>{{ $agenda->evaluator1 }}</td>
                    <td>???</td>
                </tr>
            @endif
            @if (empty($agenda->evaluator2) === false)
                <tr>
                    <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td>For {{ $agenda->speaker2 }}</td>
                    <td>{{ $agenda->evaluator2 }}</td>
                    <td>???</std>
                </tr>
            @endif
            @if (empty($agenda->evaluator3) === false)
                <tr>
                    <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td>For {{ $agenda->speaker3 }}</td>
                    <td>{{ $agenda->evaluator3 }}</td>
                    <td>???</td>
                </tr>
            @endif
            @if (empty($agenda->evaluator4) === false)
                <tr>
                    <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td>For {{ $agenda->speaker4 }}</td>
                    <td>{{ $agenda->evaluator4 }}</td>
                    <td>???</std>
                </tr>
            @endif
            <tr>
                <td colspan="4">FACILITATORS</td>
            </tr>
            <tr>
                <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td>Timer's Report</td>
                <td>{{ $agenda->timer }}</td>
                <td>???</td>
            </tr>
            <tr>
                <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td>Ah-counter's Report</td>
                <td>{{ $agenda->ahcounter }}</td>
                <td>???</td>
            </tr>
            <tr>
                <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td>Grammarian's Report</td>
                <td>{{ $agenda->grammarian }}</td>
                <td>???</td>
            </tr>
            <tr>
                <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td>General Evaluator's Report</td>
                <td>{{ $agenda->general }}</td>
                <td>???</td>
            </tr>
            <tr>
                <td>{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td>Closing Remarks</td>
                <td>{{ $agenda->closing }}</td>
                <td>???</td>
            </tr>
        </tbody>
    </table>
    
@endsection