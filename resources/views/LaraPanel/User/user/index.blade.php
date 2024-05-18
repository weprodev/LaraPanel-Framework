@extends($lp['directory'] . '.' . $lp['theme'] . '.master')

@section('header')
    @parent
@endsection

@section('breadcrumb')
    @include($lp['directory'] . '.' . $lp['theme'] . '.layouts.breadcrumb', [
        'title' => __('Users'),
        'lists' => [
            [
                'url' => $lp['dashboard_url'],
                'name' => $lp['name'],
            ],
            [
                'url' => '#',
                'name' => __('Users'),
            ],
        ],
    ])
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <x-btn-link href="{{ route('lp.admin.user.create') }}" label="{{ __('New user') }}"
                        class="btn btn-outline-primary btn-icon-text float-right mb-2 btn-sm"
                        icon="mdi mdi-account-plus btn-icon-prepend" permission="lp.admin.user.create"></x-btn-link>

                    <h4 class="card-title">{{ __('List of users') }}</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Full Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Mobile') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Register Date') }}</th>
                                <th>{{ __('Roles') }}</th>
                                <th>{{ __('Groups') }}</th>
                                <th>{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $item)
                                <tr
                                    class="{{ $item->status == 'blocked' ? ' bg-warning ' : '' }} {{ $item->status == 'deleted' ? ' bg-danger ' : '' }}">
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $item->first_name . ' ' . $item->last_name }} </td>
                                    <td> {{ $item->email }} </td>
                                    <td> {{ $item->mobile }} </td>
                                    <td> {{ $item->status }} </td>
                                    <td> {{ $item->created_at }} </td>
                                    <td>
                                        @forelse ($item->roles as $value)
                                            <span>{{ $value->name }}</span>
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @empty
                                            ---
                                        @endforelse
                                    </td>
                                    <td>
                                        @forelse ($item->groups as $group)
                                            <span>{{ $group->name }}</span>
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @empty
                                            ---
                                        @endforelse
                                    </td>
                                    <td class="text-right">
                                        <x-btn-link href="{{ route('lp.admin.user.edit', $item->uuid) }}"
                                            label="{{ __('Edit') }}" class="btn btn-outline-dark btn-sm"
                                            icon="mdi mdi-pencil-box-outline text-primary"
                                            permission="lp.admin.user.edit" />

                                        <x-btn-form-delete-list action="{{ route('lp.admin.user.delete', $item->uuid) }}"
                                            label="{{ __('Delete') }}" formClass="inline-block btn btn-sm"
                                            btnClass="btn btn-outline-danger btn-sm" icon="mdi mdi-delete-forever"
                                            permission="lp.admin.user.delete" />
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    {{ $users->links() }}
@endsection

@section('footer')
    @parent
@endsection
