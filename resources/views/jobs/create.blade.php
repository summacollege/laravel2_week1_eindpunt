<form action="{{ route('jobs.store') }}" method="POST">
    @csrf
    <label for="job_desc">Job description:</label><br>
    <input type="text" name="job_desc" id="job_desc"><br>
    <label for="min_lvl">minimum level:</label><br>
    <input type="text" name="min_lvl" id="min_lvl"><br>
    <label for="max_lvl">maximum level:</label><br>
    <input type="text" name="max_lvl" id="max_lvl"><br>
    <input type="submit" value="Maak job">
</form>