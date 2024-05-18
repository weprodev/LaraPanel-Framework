@can($permission)
    <form action="{{ $action }}" method="{{ $method }}" class="{{ $formClass }}">
        @method('DELETE')
        @csrf
        <button type="submit" class="{{ $btnClass }}">
            @if ($icon)
                <i class="{{ $icon }}"></i>
            @endif
            {{ $label }}
        </button>
    </form>
@endcan
