@extends('layouts.admin.app')

@section('content')

<div class="page-header">
    <h3 class="page-title"> Category </h3>
    
</div>

<div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8 h4">Parent</div>
                <div class="col-4"><a href="/admin/category/create" class="btn btn-info float-right">Create</a></div>
                
            </div>
          <div class="row">
            <div class="table-sorter-wrapper col-lg-12 table-responsive">
              <table id="sortable-table-1" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name<i class="mdi mdi-chevron-down"></i></th>
                    <th>Status<i class="mdi mdi-chevron-down"></i></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($parentCategory as $sno => $pCatValue)
                    <tr>
                        <td>{{++$sno}}</td>
                        <td>{{$pCatValue->name}}</td>
                        <td>{{$pCatValue->status ? 'Active' : 'Inactive'}}</td>
                        <td><a href="/admin/category/{{$pCatValue->id}}/edit" class="btn btn-primary float-right">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Striped Sortable Table</h4>
          <p class="page-description">Add class <code>.table-striped</code> for table</p>
          <div class="row">
            <div class="table-sorter-wrapper col-lg-12 table-responsive">
              <table id="sortable-table-2" class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th class="sortStyle unsortStyle">First Name<i class="mdi mdi-chevron-down"></i></th>
                    <th class="sortStyle descStyle">Last Name<i class="mdi mdi-chevron-down"></i></th>
                    <th class="sortStyle unsortStyle">Product<i class="mdi mdi-chevron-down"></i></th>
                    <th class="sortStyle unsortStyle">Amount<i class="mdi mdi-chevron-down"></i></th>
                    <th class="sortStyle unsortStyle">Deadline<i class="mdi mdi-chevron-down"></i></th>
                  </tr>
                </thead>
                <tbody>
                  
                  
                  
                  
                  
                <tr>
                    <td>1</td>
                    <td>Herman Beck</td>
                    <td>John</td>
                    <td>Photoshop</td>
                    <td>$456.00</td>
                    <td>12 May 2017</td>
                  </tr><tr>
                    <td>4</td>
                    <td>John Richards</td>
                    <td>Jason</td>
                    <td>After effects</td>
                    <td>$975.00</td>
                    <td>15 May 2017</td>
                  </tr><tr>
                    <td>2</td>
                    <td>Herman Beck</td>
                    <td>Conway</td>
                    <td>Flash</td>
                    <td>$965.00</td>
                    <td>13 May 2017</td>
                  </tr><tr>
                    <td>5</td>
                    <td>Messsy max</td>
                    <td>Back</td>
                    <td>Ilustrator</td>
                    <td>$298.00</td>
                    <td>16 May 2017</td>
                  </tr><tr>
                    <td>3</td>
                    <td>John Richards</td>
                    <td>Alex</td>
                    <td>Premeire</td>
                    <td>$255.00</td>
                    <td>14 May 2017</td>
                  </tr></tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection