@props(['href'])

<li class="nav-tab-item" role="presentation">
    @if (!empty($href))
        <a href="{{ $href }}" class="nav-link-item" data-bs-toggle="tab">{{ $slot }}</a>
    @endif
</li>
