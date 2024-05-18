@extends($lp['directory'] . '.' . $lp['theme'] . '.master')

@section('header')
    @parent
@endsection

@section('breadcrumb')
    @include($lp['directory'] . '.' . $lp['theme'] . '.layouts.breadcrumb', [
        'title' => __('Modify User') . $user->getFullName(),
        'lists' => [
            [
                'url' => $lp['dashboard_url'],
                'name' => $lp['name'],
            ],
            [
                'route' => 'lp.admin.user.index',
                'name' => __('Users'),
            ],
            [
                'url' => '#',
                'name' => __('Modify User'),
            ],
        ],
    ])
@endsection

@section('content')
    <form class="row forms-sample" method="POST" action="{{ route('lp.admin.user.edit', $user->getUuid()) }}">
        @method('PUT')
        @csrf

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="first_name">{{ __('First Name') }}</label>
                                <input type="text" name="first_name" value="{{ $user->getFirstName() }}"
                                    class="form-control" id="first_name" placeholder="{{ __('First Name') }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="last_name">{{ __('Last Name') }}</label>
                                <input type="text" name="last_name" value="{{ $user->getLastName() }}"
                                    class="form-control" id="last_name" placeholder="{{ __('Last Name') }}">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="status">{{ __('Status') }}</label>
                                <select class="form-control" name="status" id="status">
                                    @foreach ($statuses as $status)
                                        <option value="{{ $status }}"
                                            {{ $status == $user->getStatus()->value ? 'selected' : '' }}>
                                            {{ $status }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" name="email" value="{{ $user->getEmail() }}" class="form-control"
                                    id="email" placeholder="example@mekaeil.me">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="mobile">{{ __('Mobile') }}</label>
                                <input type="text" name="mobile" value="{{ $user->getMobile() }}" class="form-control"
                                    id="mobile" placeholder="{{ __('Phone Number') }}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="form-group">
                                <label for="groups">{{ __('Groups') }}</label>
                                <select multiple class="form-control form-select" name="groups[]" id="groups">
                                    @foreach ($groups as $item)
                                        <option value="{{ $item->id }}"
                                            {{ in_array($item->id, $userGroups) ? 'selected' : '' }}>
                                            {{ $item->title }}
                                            @if ($item->description)
                                                ({{ $item->description }})
                                            @endif
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Change Password') }}</h4>
                    <p>{{ __('If you would like to avoid changing the password, leave it!') }}</p>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="password">{{ __('Password') }}</label>
                                <input type="text" name="password" class="form-control" id="password"
                                    placeholder="{{ __('The minimum character is 6') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ __('Roles') }}</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                @forelse ($roles as $item)
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="checkbox" {{ in_array($item->id, $userRoles) ? 'checked' : '' }}
                                                name="roles[]" value="{{ $item->name }}" class="form-check-input">
                                            {{ $item->title . ($item->description ? '  [ ' . $item->description . ' ]' : '') }}
                                            <i class="input-helper"></i>
                                        </label>
                                    </div>
                                @empty
                                    ----
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 grid-margin stretch-card">
            <button type="submit" class="btn btn-gradient-primary mr-2">{{ __('Save changes') }}</button>
            <a href="{{ route('lp.admin.user.index') }}" class="btn btn-light">{{ __('Cancel') }}</a>
        </div>
    </form>
@endsection


@section('footer')
    @parent
@endsection
