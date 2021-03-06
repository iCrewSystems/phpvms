<table class="">
    <tr>
        <td>
            @if($pirep->state === PirepState::PENDING || $pirep->state === PirepState::REJECTED)
                {{ Form::open(['url' => route('admin.pirep.status', ['id' => $pirep->id]),
                                'method' => 'post',
                                'name' => 'accept_'.$pirep->id,
                                'id' => $pirep->id.'_accept',
                                'pirep_id' => $pirep->id,
                                'new_status' => PirepState::ACCEPTED,
                                'class' => $on_edit_page ? 'pirep_change_status': 'pirep_submit_status']) }}
                {{ Form::button('Accept', ['type' => 'submit', 'class' => 'btn btn-success']) }}
                {{ Form::close() }}
            @endif
        </td>
        <td>&nbsp;</td>
        <td>
            @if($pirep->state === PirepState::PENDING || $pirep->state === PirepState::ACCEPTED)
                {{ Form::open(['url' => route('admin.pirep.status', ['id' => $pirep->id]),
                                'method' => 'post',
                                'name' => 'reject_'.$pirep->id,
                                'id' => $pirep->id.'_reject',
                                'pirep_id' => $pirep->id,
                                'new_status' => PirepState::REJECTED,
                                'class' => $on_edit_page ? 'pirep_change_status': 'pirep_submit_status']) }}
                {{ Form::button('Reject', ['type' => 'submit', 'class' => 'btn btn-danger']) }}
                {{ Form::close() }}
            @endif
        </td>
        <td>&nbsp;</td>
        <td>
            <form action="{{ route('admin.pireps.edit', [$pirep->id]) }}">
            <button type="submit"
               class='btn btn-info'>
                <i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Edit</button>
            </form>
        </td>
    </tr>
</table>
