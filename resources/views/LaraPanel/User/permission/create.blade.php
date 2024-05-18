@extends($lp['directory'] . '.' . $lp['theme'] . '.master')

@section('header')
    @parent
@endsection

@section('breadcrumb')
    @include($lp['directory'] . '.' . $lp['theme'] . '.layouts.breadcrumb', [
        'title' => __('Create a new permission'),
        'lists' => [
            [
                'url' => $lp['dashboard_url'],
                'name' => $lp['name'],
            ],
            [
                'route' => 'lp.admin.permission.index',
                'name' => __('Permission'),
            ],
            [
                'url' => '#',
                'name' => __('New permission'),
            ],
        ],
    ])
@endsection

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="POST" action="{{ route('lp.admin.permission.create') }}">
                    @csrf

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Name like: admin.manager" autofocus required>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="title">{{ __('Title') }}</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="optional, title like: Admin panel">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="module">{{ __('Module name') }}</label>
                                <select class="form-control" name="module" id="module">
                                    @foreach ($modules as $module)
                                        <option value="{{ $module }}"
                                            {{ $module == $defaultModule ? 'selected' : '' }}>
                                            {{ $module }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="guard_name">{{ __('Guard name') }}</label>
                                <select class="form-control" name="guard_name" id="guard_name">
                                    @foreach ($guards as $guard)
                                        <option value="{{ $guard }}" {{ $defaultGuard == $guard ? 'selected' : '' }}>
                                            {{ $guard }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea class="form-control" name="description" id="description" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">{{ __('Submit') }}</button>
                    <a href="{{ route('lp.admin.permission.index') }}" class="btn btn-light">{{ __('Cancel') }}</a>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('footer')
    @parent
@endsection
