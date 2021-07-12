@php
    $categories = get_categories_with_children();
@endphp
<div class="form-group">
    <label class="control-label">Lựa chọn chuyên mục</label>
    @if($categories)
        <select class="form-select" aria-label="Default select example" name="category" data-shortcode-attribute="category">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{!! $category->name !!}</option>
            @endforeach
        </select>
    @endif
</div>

