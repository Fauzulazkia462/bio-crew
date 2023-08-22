@extends('layout.main')

@section('content')
<div class="export-page">
    <div class="export-contain">
        <form method="GET" action="{{ route('exportexcel') }}">
        <button type="submit" id="add" class="contact100-form-btn exportExcel">
            <span>
                Export Excel   
            </span>
        </button>
        </form>
    </div>
</div>
@endsection



@section('script')

@endsection