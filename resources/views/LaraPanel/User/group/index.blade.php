@extends($lp['directory'] . '.' . $lp['theme'] . '.master')

@section('header')
    @parent
@endsection

@section('breadcrumb')
    @include($lp['directory'] . '.' . $lp['theme'] . '.layouts.breadcrumb', [
        'title' => __('Groups'),
        'lists' => [
            [
                'url' => $lp['dashboard_url'],
                'name' => $lp['name'],
            ],
            [
                'url' => '#',
                'name' => __('Groups'),
            ],
        ],
    ])
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <x-btn-link href="{{ route('lp.admin.group.create') }}" label="{{ __('New Group') }}"
                        class="btn btn-outline-primary btn-icon-text btn-sm float-right mb-2"
                        icon="mdi mdi-shape-rectangle-plus btn-icon-prepend" permission="lp.admin.group.create" />

                    <h4 class="card-title">{{ __('List of groups') }}</h4>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th> # </th>
                                <th> {{ __('Title') }} </th>
                                <th> {{ __('Parent') }} </th>
                                <th> {{ __('Actions') }} </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($groups as $item)
                                <tr>
                                    <td> {{ $loop->iteration }} </td>
                                    <td> {{ $item->title }} </td>
                                    <td> {{ $item->parent ? $item->parent->title : '----' }} </td>
                                    <td class="text-right">
                                        <x-btn-link href="{{ route('lp.admin.group.edit', $item->id) }}"
                                            label="{{ __('Edit') }}" class="btn btn-outline-dark btn-sm"
                                            icon="mdi mdi-pencil-box-outline text-primary"
                                            permission="lp.admin.group.edit" />

                                        <x-btn-form-delete-list action="{{ route('lp.admin.group.delete', $item->id) }}"
                                            label="{{ __('Delete') }}" formClass="inline-block btn btn-sm"
                                            btnClass="btn btn-outline-danger btn-sm" icon="mdi mdi-delete-forever"
                                            permission="lp.admin.group.delete" />
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{ $groups->links() }}
@endsection

@section('footer')
    @parent
@endsection
