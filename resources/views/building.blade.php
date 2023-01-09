@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$building->name}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <p>
                    {{$building->address}}
                </p>


                <h3>Flats</h3>

                <div class="list-group">
                        @foreach($building->flats as $flat)


                        <a href="{{route('toggle_flat_status', ['id'=>$flat->id])}}" class="list-group-item list-group-item-action @if($flat->status_id == 1) active @endif" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">flat no <strong>{{$flat->number}}</strong></h5>
                                <small>last updated: {{$flat->updated_at}}</small>
                                
                            </div>
                            <p>Click to toggle status between occupied / unocupied</p>
                        </a>
                        


                        @endforeach
                    </div>

                </div>
            

                

                </div>
            </div>
        </div>
    </div>
</div>
@endsection