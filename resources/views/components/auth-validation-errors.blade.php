@props(['errors'])

{{-- $error->any() 何かエラーが発生した場合に表示する --}}
@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium text-red-600">
            {{-- 多言語ファイルにある文字情報を引っ張ってくる --}}
            {{ __('Whoops! Something went wrong.') }}
        </div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
