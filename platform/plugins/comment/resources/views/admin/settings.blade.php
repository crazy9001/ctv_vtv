@extends('core/base::layouts.master')
@section('content')
    <?php
    use Botble\Comment\ScriptVariables;
    ?>
    <div id="app" v-cloak>
        <settings inline-template>
            <div class="card">
                <div class="card-block tabbable-custom">
                    <h4 class="card-title mb-4 pb-2">
                        @lang('plugins/comment::admin.settings_title')
                        <button @click="reset" type="button" class="btn btn-outline-danger btn-sm float-right">
                            @lang('plugins/comment::admin.settings_reset_button')
                        </button>
                    </h4>

                    <ul class="nav nav-tabs ">
                        @foreach (array_keys($tabs) as $tab)
                            <li class="nav-item">
                                <a href="#{{ $tab }}" :class="{ active: tab === '{{ $tab }}' }" class="nav-link"
                                   @click="changeTab('{{ $tab }}')">
                                    {{ trans('plugins/comment::admin.settings_'.$tab) }}
                                </a>
                            </li>
                        @endforeach
                    </ul>

                    <form @submit.prevent="save" class="col-md-7 p-0">
                        <alert-success :form="form" message="@lang('plugins/comment::admin.settings_saved')"></alert-success>

                        <div class="tab-content">
                            @foreach ($tabs as $tab => $inputs)
                                <div class="tab-pane" :class="{ active: tab === '{{ $tab }}' }" role="tabpanel">
                                    @foreach ($inputs as $input)
                                        {{ $input->render() }}
                                    @endforeach
                                </div>
                            @endforeach
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success" :disabled="form.busy">
                                @lang('plugins/comment::admin.settings_save_button')
                            </button>
                        </div>

                        @if (app()->configurationIsCached())
                            <div class="alert alert-danger">
                                @lang('plugins/comment::admin.setting_config_cached', [
                                  'command' => '<br><code>php artisan config:cache</code>'
                                ])
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </settings>
    </div>
    {{ ScriptVariables::render() }}
@endsection















