<ul class="breadcrumb-ul">
    @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
        <li><a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a></li>
    @endforeach
</ul>
