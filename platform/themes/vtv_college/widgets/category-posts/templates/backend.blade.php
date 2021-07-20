<div class="form-group">
    <label for="widget-name">{{ trans('core/base::forms.name') }}</label>
    <input type="text" class="form-control" name="name" value="{{ $config['name'] }}">
</div>

<div class="form-group">
    <label for="widget_menu">{{ __('Select category') }}</label>
    {!! Form::select('category_id', app(\Botble\Blog\Repositories\Interfaces\CategoryInterface::class)->pluck('name', 'id'), $config['category_id'], ['class' => 'form-control select-full']) !!}
</div>

<div class="form-group">
    <label for="widget-name">Số lượng tin bài</label>
    <input type="number" class="form-control" name="limit" value="{{ $config['limit'] }}">
</div>

<div class="form-group">
    <label for="widget_menu">Hiển thị ảnh đại diện ?</label>
    {!! Form::select('show_image', [1 => 'Có', 0 => 'Không'], $config['show_image'], ['class' => 'form-control select-full']) !!}
</div>

