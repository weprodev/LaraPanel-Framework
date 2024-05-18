@extends($lp['directory'] . '.' . $lp['theme'] . '.master')

@section('header')
    @parent
@endsection

@section('breadcrumb')
    @include($lp['directory'] . '.' . $lp['theme'] . '.layouts.breadcrumb', [
        'title' => __('Create a new group'),
        'lists' => [
            [
                'url' => $lp['dashboard_url'],
                'name' => $lp['name'],
            ],
            [
                'route' => 'lp.admin.group.index',
                'name' => __('Groups'),
            ],
            [
                'url' => '#',
                'name' => __('New group'),
            ],
        ],
    ])
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="{{ route('lp.admin.group.create') }}">
                        @csrf
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }} (unique without space)</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="silver-group" autofocus required>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="title">{{ __('Title') }}</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                        placeholder="optional: Silver Group">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="parent">{{ __('Parent') }}</label>
                                    <select class="form-control" name="parent_id" id="parent"
                                        placeholder="{{ __('Select a group') }}">
                                        <option></option>
                                        @foreach ($groups as $id => $item)
                                            <option value="{{ $id }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="description">{{ __('Description') }}</label>
                                    <textarea type="text" name="description" class="form-control" id="description"
                                        placeholder="Optional: explain the reason of the group..." max="255" rows="2"></textarea>

                                </div>
                            </div>

                            <button type="submit" class="btn btn-gradient-primary mr-2">{{ __('Submit') }}</button>
                            <a href="{{ route('lp.admin.group.index') }}" class="btn btn-light">{{ __('Cancel') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('footer')
    @parent
@endsection
