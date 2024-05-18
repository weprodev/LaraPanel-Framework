@can($permission)
    <a href="{{ $href }}" class="{{ $class }}">
        @if ($icon)
            <i class="{{ $icon }}"></i>
        @endif
        {{ $label }}
    </a>
@endcan
