 <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<h2 class="text-primary text-center">Create new skill</h2>
<div class="col-md-8 offset-2">
<form method="post" action="createskill/create">
  @csrf

  <div class="form-group">
    <label for="Title">SKill</label>
    <input type="text" class="form-control" placeholder="Enter your skill title here" name="skill">
  </div>
  <div class="form-group">
    <label for="due">Percentage</label>
    <input type="text" class="form-control" placeholder="Enter skill percentage here" name="percentage">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
