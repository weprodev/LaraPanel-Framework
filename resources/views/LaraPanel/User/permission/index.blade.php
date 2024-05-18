@extends($lp['directory'] . '.' . $lp['theme'] . '.master')

@section('header')
    @parent
@endsection

@section('breadcrumb')
    @include($lp['directory'] . '.' . $lp['theme'] . '.layouts.breadcrumb', [
        'title' => __('Permissions'),
        'lists' => [
            [
                'url' => $lp['dashboard_url'],
                'name' => $lp['name'],
            ],
            [
                'url' => '#',
                'name' => __('Permissions'),
            ],
        ],
    ])
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <x-btn-link href="{{ route('lp.admin.permission.create') }}" label="{{ __('New permission') }}"
                        class="btn btn-outline-primary btn-icon-text float-right btn-sm mb-2" icon="mdi mdi-playlist-plus"
                        permission="lp.admin.permission.create" />

                    <h4 class="card-title">{{ __('List of permissions') }}</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> {{ __('Permission') }} </th>
                                <th> {{ __('Title') }} </th>
                                <th> {{ __('Guard name') }} </th>
                                <th> {{ __('Description') }} </th>
                                <th> {{ __('Action') }} </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $item)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $item->name }} </td>
                                    <td> {{ $item->title ?? '--' }} </td>
                                    <td> {{ $item->guard_name }} </td>
                                    <td> {{ $item->description ?? '--' }} </td>
                                    <td class="text-right">
                                        <x-btn-link href="{{ route('lp.admin.permission.edit', $item->id) }}"
                                            label="{{ __('Edit') }}" class="btn btn-outline-dark btn-sm"
                                            icon="mdi mdi-pencil-box-outline text-primary"
                                            permission="lp.admin.permission.edit" />

                                        <x-btn-form-delete-list
                                            action="{{ route('lp.admin.permission.delete', $item->id) }}"
                                            label="{{ __('Delete') }}" formClass="inline-block btn btn-sm"
                                            btnClass="btn btn-outline-danger btn-sm" icon="mdi mdi-delete-forever"
                                            permission="lp.admin.permission.delete" />
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $permissions->links() }}
@endsection


@section('footer')
    @parent
@endsection
