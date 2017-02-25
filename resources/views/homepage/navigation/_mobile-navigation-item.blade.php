{{-- Check whether this url or one of its siblings is being visited --}}
<?php $active = '/' . Request::segment(1) == $url; ?>

<li class="navigation-list__item clearfix">
    <a class="navigation-list__link" href="{{ $url }}">
        {{ $title }}
    </a>
    @if (isset($subItems) && count($subItems) > 0)
        <span aria-expanded="false" class="navigation-sub-list__toggle" role="button">
            &nbsp;<span class="caret" aria-expanded="false" role="button"></span>&nbsp;
        </span>

        {{-- may refactored to a horizontal-list --}}
        <ul class="navigation-sub-list">
            @foreach ($subItems as $item)

                <li>
                    <a class="navigation-sub-list__link" href="{{ $item['url'] }}">
                        {{ $item['title'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</li>
