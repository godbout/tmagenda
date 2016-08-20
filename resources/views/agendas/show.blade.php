@extends('layouts.master')

@section('title', 'Agendas List')

@section('content')

    <?php $itemTime = strtotime($agenda->time) ?>
    
    <table class="mdl-data-table mdl-js-data-table">
        <thead>
            <tr>
                <th class="mdl-data-table__cell--non-numeric">TIME</th>
                <th class="mdl-data-table__cell--non-numeric">WHAT</th>
                <th>WHO</th>
                <th>LIMIT</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+1 minute', $itemTime) }}</td>
                <td class="mdl-data-table__cell--non-numeric">Call to Order</td>
                <td>Everyone</td>
                <td>1</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+3 minute', $itemTime) }}</td>
                <td class="mdl-data-table__cell--non-numeric">Opening Remarks</td>
                <td>{{ $agenda->opening }}</td>
                <td>2</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+7 minute', $itemTime)  }}</td>
                <td class="mdl-data-table__cell--non-numeric">Welcome Guests</td>
                <td>{{ $agenda->welcome }}</td>
                <td>4-6</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td class="mdl-data-table__cell--non-numeric">Toastmaster of the Evening</td>
                <td>{{ $agenda->tme }}</td>
                <td>2-3</td>
            </tr>
            <tr>
                <td colspan="4">PREPARED SPEECHES</td>
            </tr>
            @if (empty($agenda->speaker1) === false)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td class="mdl-data-table__cell--non-numeric">Project </td>
                    <td>{{ $agenda->speaker1 }}</td>
                    <td>???</td>
                </tr>
            @endif
            @if (empty($agenda->speaker2) === false)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td class="mdl-data-table__cell--non-numeric">Project </td>
                    <td>{{ $agenda->speaker2 }}</td>
                    <td>???</std>
                </tr>
            @endif
            @if (empty($agenda->speaker3) === false)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td class="mdl-data-table__cell--non-numeric">Project </td>
                    <td>{{ $agenda->speaker3 }}</td>
                    <td>???</td>
                </tr>
            @endif
            @if (empty($agenda->speaker4) === false)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td class="mdl-data-table__cell--non-numeric">Project </td>
                    <td>{{ $agenda->speaker4 }}</td>
                    <td>???</std>
                </tr>
            @endif
            <tr>
                <td colspan="4">TABLE TOPICS</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td colspan="2">{{ $agenda->tablemaster }}</td>
                <td>18-20</td>
            </tr>
            <tr>
                <td colspan="4">EVALUATIONS</td>
            </tr>
            @if (empty($agenda->evaluator1) === false)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td class="mdl-data-table__cell--non-numeric">For {{ $agenda->speaker1 }} </td>
                    <td>{{ $agenda->evaluator1 }}</td>
                    <td>???</td>
                </tr>
            @endif
            @if (empty($agenda->evaluator2) === false)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td class="mdl-data-table__cell--non-numeric">For {{ $agenda->speaker2 }}</td>
                    <td>{{ $agenda->evaluator2 }}</td>
                    <td>???</std>
                </tr>
            @endif
            @if (empty($agenda->evaluator3) === false)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td class="mdl-data-table__cell--non-numeric">For {{ $agenda->speaker3 }}</td>
                    <td>{{ $agenda->evaluator3 }}</td>
                    <td>???</td>
                </tr>
            @endif
            @if (empty($agenda->evaluator4) === false)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                    <td class="mdl-data-table__cell--non-numeric">For {{ $agenda->speaker4 }}</td>
                    <td>{{ $agenda->evaluator4 }}</td>
                    <td>???</std>
                </tr>
            @endif
            <tr>
                <td colspan="4">FACILITATORS</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td class="mdl-data-table__cell--non-numeric">Timer's Report</td>
                <td>{{ $agenda->timer }}</td>
                <td>???</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td class="mdl-data-table__cell--non-numeric">Ah-counter's Report</td>
                <td>{{ $agenda->ahcounter }}</td>
                <td>???</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td class="mdl-data-table__cell--non-numeric">Grammarian's Report</td>
                <td>{{ $agenda->grammarian }}</td>
                <td>???</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td class="mdl-data-table__cell--non-numeric">General Evaluator's Report</td>
                <td>{{ $agenda->general }}</td>
                <td>???</td>
            </tr>
            <tr>
                <td class="mdl-data-table__cell--non-numeric">{{ date('g.ia', $itemTime), $itemTime = strtotime('+4 minute', $itemTime) }}</td>
                <td class="mdl-data-table__cell--non-numeric">Closing Remarks</td>
                <td>{{ $agenda->closing }}</td>
                <td>???</td>
            </tr>
        </tbody>
    </table>
    
@endsection