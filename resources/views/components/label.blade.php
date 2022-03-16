@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{-- null合体演算子 --}}
    {{ $value ?? $slot }}
</label>
