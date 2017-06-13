@extends('layout')

@section('content')

  <h2>Welcome</h2>
  <div id="app">
    <example></example>
  </div>

  @if(isset($result))
    {{ $result }}
  @endif
<script src="js/app.js"></script>
@endsection
