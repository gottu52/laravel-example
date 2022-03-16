<x-tests.app>
    <x-slot name="header">header1</x-slot>
    コンポーネント１
    <x-tests.card title="タイトル1" content="本文" :message="$message"/>
    <x-tests.card title="タイトル2" />
    <x-tests.card title="cssの変更" class="bg-red-300"/>
</x-tests.app>
