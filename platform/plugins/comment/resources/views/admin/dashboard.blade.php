@extends('core/base::layouts.master')
@section('content')
    <?php
        use Botble\Comment\ScriptVariables;
    ?>
    <div id="app" v-cloak>
        <dashboard></dashboard>
    </div>
    {{ ScriptVariables::render() }}
@endsection