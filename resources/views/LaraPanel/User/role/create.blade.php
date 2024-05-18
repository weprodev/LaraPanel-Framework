@extends($lp['directory'] . '.' . $lp['theme'] . '.master')

@section('header')
    @parent
@endsection

@section('breadcrumb')
    @include($lp['directory'] . '.' . $lp['theme'] . '.layouts.breadcrumb', [
        'title' => __('Create a new role'),
        'lists' => [
            [
                'url' => $lp['dashboard_url'],
                'name' => $lp['name'],
            ],
            [
                'route' => 'lp.admin.role.index',
                'name' => __('Roles'),
            ],
            [
                'url' => '#',
                'name' => __('New role'),
            ],
        ],
    ])
@endsection

@section('content')
    <form class="row forms-sample" method="POST" action="{{ route('lp.admin.role.create') }}">
        @csrf
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Name like: Admin">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="title">{{ __('Title') }}</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    placeholder="Title like: Admin Manager">
                            </div>
                        </div>
                        <div class="col-4">
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
                </div>
            </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Permissions') }}</h4>
                    <div class="row">
                        <div class="tabs-to-dropdown">
                            <div class="nav-wrapper d-flex align-items-center justify-content-between">
                                <ul class="nav nav-pills d-none d-md-flex" id="pills-tab" role="tablist">
                                    @foreach (array_keys($permissions) as $item)
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link {{ $loop->first ? 'active' : '' }}"
                                                id="pills-{{ $item }}-tab" data-toggle="pill"
                                                href="#{{ $item }}" role="tab"
                                                aria-controls="{{ $item }}"
                                                aria-selected="{{ $loop->first ? 'true' : 'false' }}">{{ $item }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent">
                                @foreach ($permissions as $module => $permsModule)
                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }} "
                                        id="{{ $module }}" role="tabpanel"
                                        aria-labelledby="pills-{{ $module }}-tab">
                                        <div class="container-fluid">
                                            @foreach ($permsModule as $item)
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" name="permissions[]"
                                                            value="{{ $item['name'] }}" class="form-check-input">
                                                        {{ $item['title'] . ' ( ' . $item['name'] . ' ) ' }}
                                                        <i class="input-helper"></i>
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <button type="submit" class="btn btn-gradient-primary mr-2">{{ __('Submit') }}</button>
            <a href="{{ route('lp.admin.role.index') }}" class="btn btn-light">{{ __('Cancel') }}</a>
        </div>
    </form>
@endsection

@section('footer')
    @parent
    <link rel="stylesheet" href="{{ asset($lp['directory'] . '/' . $lp['theme'] . '/vendors/bootstrap-tabs/style.css') }}">
    <script src="{{ asset($lp['directory'] . '/' . $lp['theme'] . '/vendors/bootstrap-tabs/script.js') }}"></script>
@endsection
