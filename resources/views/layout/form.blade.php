<h3 class="pb-4 mb-4 fst-italic border-bottom">{{ $title }}</h3>
@if($errors->count())
<div class="alert alert-danger mt-4">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="{{ $action }}">
@csrf
@method($method)
   <div class="mb-3">
    <label class="form-label">Type</label>
    <input type="search" class="form-control" name="typeName" value="{{$equipment->type->name ?? ""}}">
  </div>
  <div class="mb-3">
    <label class="form-label">S/N</label>
    <input type="search" class="form-control" name="serialNumber" value="{{$equipment->sireal_number ?? ""}}">
  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button type="submit" type="button" class="btn btn-warning">{{ $button }}</button>
  </div>
</form>
