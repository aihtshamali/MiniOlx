@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Your ads
                </div>
                <div class="panel-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>
                          Title
                        </th>
                        <th colspan="2">
                          Action
                        </th>
                      </tr>
                    </thead>
                    <thead>
                      @foreach ($items as $item)
                      <tr>
                        <td>
                          {{$item->title}}
                        </td>
                        <td>
                          <a href="/admin/categories/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                        </td>
                        <td>
                          <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/categories') }}/{{$item->id}}">
                              {{ csrf_field() }}
                              {{ method_field('DELETE')}}
                              <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                          </form>
                        </td>
                      </tr>
                    @endforeach
                    </thead>
                  </table>
                </div>

            </div>
            @if (count($items) > 0)
            {{$items->links()}}
          @endif
        </div>

    </div>

@endsection
