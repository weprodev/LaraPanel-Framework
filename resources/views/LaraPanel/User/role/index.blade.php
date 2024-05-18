@extends($lp['directory'] . '.' . $lp['theme'] . '.master')

@section('header')
    @parent
@endsection

@section('breadcrumb')
    @include($lp['directory'] . '.' . $lp['theme'] . '.layouts.breadcrumb', [
        'title' => 'Roles',
        'lists' => [
            [
                'url' => $lp['dashboard_url'],
                'name' => $lp['name'],
            ],
            [
                'url' => '#',
                'name' => __('Roles'),
            ],
        ],
    ])
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <x-btn-link href="{{ route('lp.admin.role.create') }}" label="{{ __('New role') }}"
                        class="btn btn-outline-primary btn-icon-text float-right btn-sm mb-2" icon="mdi mdi-playlist-plus"
                        permission="lp.admin.role.create" />

                    <h4 class="card-title">{{ __('List of roles') }}</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> {{ __('Role') }} </th>
                                <th> {{ __('Title') }} </th>
                                <th> {{ __('Guard name') }} </th>
                                <th> {{ __('Description') }} </th>
                                <th> {{ __('Actions') }} </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $item)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $item->name }} </td>
                                    <td> {{ $item->title }} </td>
                                    <td> {{ $item->guard_name }} </td>
                                    <td> {{ $item->description }} </td>
                                    <td class="text-right">
                                        <x-btn-link href="{{ route('lp.admin.role.edit', $item->id) }}"
                                            label="{{ __('Edit') }}" class="btn btn-outline-dark btn-sm"
                                            icon="mdi mdi-pencil-box-outline text-primary"
                                            permission="lp.admin.role.edit" />

                                        <x-btn-form-delete-list action="{{ route('lp.admin.role.delete', $item->id) }}"
                                            label="{{ __('Delete') }}" formClass="inline-block btn btn-sm"
                                            btnClass="btn btn-outline-danger btn-sm" icon="mdi mdi-delete-forever"
                                            permission="lp.admin.role.delete" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $roles->links() }}
@endsection


@section('footer')
    @parent
@endsection
