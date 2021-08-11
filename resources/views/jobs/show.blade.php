<form action="{{ route('jobs.index') }}" method="GET">
    <label for="job_desc">Job description:</label><br>
    <input type="text" name="job_desc" id="job_desc" value="{{ $jobUitDeController->job_desc }}" readonly><br>
    <label for="min_lvl">minimum level:</label><br>
    <input type="text" name="min_lvl" id="min_lvl" value="{{ $jobUitDeController->min_lvl }}" readonly><br>
    <label for="max_lvl">maximum level:</label><br>
    <input type="text" name="max_lvl" id="max_lvl" value="{{ $jobUitDeController->max_lvl }}" readonly><br>
    <input type="submit" value="Terug">
</form>
<form action="{{ route('jobs.edit', $jobUitDeController) }}" method="GET">
    <input type="submit" value="Bewerk job">
</form>