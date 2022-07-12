@extends('layouts.app')

@section('title')
    Dasboard
@endsection

@section('breadcrumb')
    @parent
    <li>
        <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i>
            Dashboard
        </a>
    </li>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-aqua">
                {{-- user --}}
                <div class="inner">
                    <h3>
                        {{ $user }}
                    </h3>
                    <p>User</p>
                </div>

                <div class="icon">
                    <i class="fa fa-user"></i>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">

    </script>
@endsection
