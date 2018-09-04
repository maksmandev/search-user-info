@extends('layouts.app')

@section('content')
    <meta name="_token" content="{{ csrf_token() }}"/>
    <div class='row'>
        {!! Form::open(['url'=>'register','id'=>'sign-up','class'=>'col-md-6 col-md-push-4 form-horizontal cmxform'])!!}
        <div class='form-group'>
            {!! Form::label('name', 'Name:',['class'=>'col-xs-12 col-md-12']) !!}
            <div class='col-xs-12 col-md-6'>
                {!! Form::text('name', null, ['class' => 'form-control'])!!}
            </div>
        </div>
        <div class='form-group'>
            {!! Form::label('email', 'email:',['class'=>'col-xs-12 col-md-3']) !!}
            <div class='col-xs-12 col-md-6'>
                {!! Form::text('email', null, ['class' => 'form-control'])!!}
            </div>
        </div>
        <div class='form-group'>
            {!! Form::label('region', 'Region:',['class'=>'col-xs-12 col-md-3']) !!}
            <div class='col-xs-12 col-md-6'>
                <select id="region" name="region"  data-placeholder="Choose a country..." class="chosen-select"
                        onChange="getArea(this.value,'#sity');">
                    <option value="" selected disabled hidden>Choose region</option>
                    @foreach($regions as $region)
                        <option value={{$region->ter_id}}>{{$region->ter_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class='form-group'>
            {!! Form::label('sity', 'Sity:',['class'=>'col-xs-12 col-md-3']) !!}
            <div class='col-xs-12 col-md-6'>
                <select id="sity" name="t_koatuu_tree_id" data-placeholder="Choose a region" class="chosen-select"
                        onChange="getArea(this.value,'#area');">
                    <option value="" selected disabled hidden>Choose region or sity</option>
                </select>
            </div>
        </div>
        <div class='form-group'>
            {!! Form::label('area', 'Area:',['class'=>'col-xs-12 col-md-3']) !!}
            <div class='col-xs-12 col-md-6'>
                <select id="area" name="t_koatuu_tree_id" data-placeholder="Choose a area" class="chosen-select">
                    <option value="" selected disabled hidden>Choose area</option>
                </select>
            </div>
        </div>
        <div class='btn btn-small'>
            {!! Form::submit('Сonfirm',['class'=>'btn btn-success btn-sm form-control'])!!}
        </div>

        {!! Form::close() !!}
    </div>
    <script src="{{asset('js/custom.js')}}"></script>
@endsection
