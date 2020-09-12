<div class="{{ $class() }}">
    {{-- label column --}}
    @if($field->show_label)
        <div class="{{ $labelWidth() }}">
            <label for="{{ $field->key }}" class="{{ $field->getAttr('label') }}">
                {{$field->label}} <span class="{{ $labelSuffixClass() }}">{{ $field->labelSuffix }}</span>
            </label>
            @if(!$field->afterLabelView && $field->afterLabel)
                <div class="{{ $field->getAttr('after-label') }}">
                    {{ $field->afterLabel }}
                </div>
            @endif
            @if(filled($field->afterLabelView))
                @include($field->afterLabelView)
            @endif
        </div>
    @endif
    {{-- field column --}}
    <div class="{{ $fieldWidth() }}">
        {{ $slot }}
    </div>
</div>
