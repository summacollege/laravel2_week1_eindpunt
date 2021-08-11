<table style="border: 1px solid black">
@foreach($jobsUitDeController as $job)
    <tr>
        <td style="border: 1px solid grey">
            <a href="{{ route('jobs.edit',$job->job_id) }}">    
                {{ $job->job_desc }}
            </a>
        </td>
        <td style="border: 1px solid grey">
            <form action="{{ route('jobs.destroy',$job) }}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" value="verwijder">
            </form>
        </td>
    </tr>
@endforeach
</table>