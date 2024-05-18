@extends($lp['directory'] . '.' . $lp['theme'] . '.master')

@section('header')
    @parent
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="">{{ __('Dashboard Panel') }}</p>
                    <p>You have logged in with << {{ Auth::user()->email }}>></p>
                    <p>Roles name: {{ implode(',', array_column(Auth::user()->roles->toArray(), 'name')) }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @parent
@endsection
