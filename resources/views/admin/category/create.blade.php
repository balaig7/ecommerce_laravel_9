@extends('layouts.admin.app')


@section('content')
@dd($category);
<div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title mb-4">{{$action =='create' ? 'Create New' : 'Update'}} Category</h4>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <form action="/admin/category/" method="POST">
            @csrf
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="category_name" value="{{$category->name}}">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail3">Status</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="status" value="1" checked=""> Active <i class="input-helper"></i></label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="status" value="0"> InActive <i class="input-helper"></i></label>
              </div>
          </div>
          <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
        </form>
      </div>
    </div>
</div>

@endsection