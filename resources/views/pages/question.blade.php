@extends('app')

@section('content')
<div class="row-fluid color-block question">
    @if(Auth::guest())
        <div class="col-xs-2">
            <label>{{ $question.vote }}</label>
        </div>
        <div class="col-xs-10">
            <h2>{{ $question.title }}</h2>
            <p>{{ $question.content }}</p>
        </div>
        <div class="col-xs-12">
            @if($hasProfile)
                <!--Display Profile Photo-->
            @else
                <span class="fa-stack fa-lg">
                    <i class="fa fa-square-o fa-stack-x2"></i>
                    <i class="fa fa-user fa-stack-1x"></i>
                </span>
            @endif
            <label>{{ $author.name }}</label>
        </div>
    @else
        <div class="col-xs-2">
            <span class="fa-stack fa-lg">
                <i class="fa fa-square fa-stack-2x"></i>
                <i class="fa fa-chevron-up fa-stack-1x"></i>
            </span>
            <label>{{ $question.vote }}</label>
            <span class="fa-stack fa-lg">
                <i class="fa fa-square fa-stack-2x"></i>
                <i class="fa fa-chevron-down fa-stack-1x"></i>
            </span>
        </div>
        <div class="col-xs-10">
            <h2>{{ $question.title }}</h2>
            <p>{{ $question.content }}</p>
        </div>
        <div class="col-xs-12">
            @if($author.hasProfile)
                <!--Display Profile Photo-->
            @else
                <span class="fa-stack fa-lg">
                    <i class="fa fa-square-o fa-stack-x2"></i>
                    <i class="fa fa-user fa-stack-1x"></i>
                </span>
            @endif
            <label>{{ $author.name }}</label>
        </div>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label class="col-xs-8 col-xs-offset-2 control-label">Title</label>
                <div class="col-xs-8 col-xs-offset-2">
                    <input type="text" class="form-control" name="title">
                </div>
            </div>
            <div class="form-group">
                <label class="col-xs-8 col-xs-offset-2 control-label">Content</label>
                <div class="col-xs-8 col-xs-offset-2">
                    <textarea type="text" class="form-control" rows="20" cols="60" name="content"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-6 col-xs-offset-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    @endif
</div>
@foreach($answers as $answer)
    @include('view.answer', $answer)
@endforeach
@endsection