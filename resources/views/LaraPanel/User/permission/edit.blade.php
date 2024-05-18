@extends($lp['directory'] . '.' . $lp['theme'] . '.master')

@section('header')
    @parent
@endsection

@section('breadcrumb')
    @include($lp['directory'] . '.' . $lp['theme'] . '.layouts.breadcrumb', [
        'title' => __('Modify permission'),
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
                'name' => __('Modify permission'),
            ],
        ],
    ])
@endsection

@section('content')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form class="forms-sample" method="POST"
                    action="{{ route('lp.admin.permission.edit', $permission->getId()) }}">
                    {{ method_field('PUT') }}
                    @csrf

                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">{{ __('Name') }}</label>
                                <span readonly class="form-control readonly">{{ $permission->getName() }}</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="title">{{ __('Title') }}</label>
                                <input type="text" name="title" class="form-control" id="title"
                                    value="{{ $permission->getTitle() }}">
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
                                            {{ $permission->getModule() == $module ? 'selected' : '' }}>
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
                                        <option value="{{ $guard }}"
                                            {{ $permission->getGuardName() == $guard ? 'selected' : '' }}>
                                            {{ $guard }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">{{ __('Description') }}</label>
                        <textarea class="form-control" name="description" id="description" rows="2">{{ $permission->getDescription() ?? '' }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-gradient-primary mr-2">{{ __('Save changes') }}</button>
                    <a href="{{ route('lp.admin.permission.index') }}" class="btn btn-light">{{ __('Cancel') }}</a>
                </form>
            </div>
        </div>
    </div>
@endsection


@section('footer')
    @parent
@endsection
