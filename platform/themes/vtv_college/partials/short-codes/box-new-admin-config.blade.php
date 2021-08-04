@php
    $categories = get_categories_with_children();
    $types = array(
       array(
           'key' => 1,
           'value'  =>  'Sự kiện'
       ),
       array(
           'key' => 2,
           'value'  =>  'Đào tạo'
       ),
       array(
           'key' => 3,
           'value'  =>  'Tuyển sinh'
       ),
       array(
       'key'    => 4,
       'value'  =>  'Thông tin tuyển sinh'
       )
    );

@endphp

<div class="form-group">
    <label class="control-label">Tiêu đề</label>
    <input name="title" data-shortcode-attribute="title" class="form-control" />
</div>

<div class="form-group">
    <label class="control-label">Loại hiển thị</label>
    <select class="form-select" aria-label="Default select example" name="type" data-shortcode-attribute="type">
        @foreach($types as $type)
            <option value="{{ $type['key'] }}">{!! $type['value'] !!}</option>
        @endforeach
    </select>
</div>

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

<div class="form-group">
    <label class="control-label">Số tin hiển thị</label>
    <input type="number" name="paginate" class="form-control" value="12" data-shortcode-attribute="attribute" placeholder="Số tin hiển thị trong box">
</div>




