<x-tests.app>
    <x-slot name="header">
        ヘッダー１
    </x-slot>

コンポーネントテスト１
</x-tests.app>

<x-tests.card title="属性" content="を指定してる" :message="$message">
    
        $slotで表示してる
   組み合わせて使用することができる
</x-tests.card>
<x-tests.card title="プロップス"></x-tests.card>
<x-tests.card title="ここだけCSS変えたい" title="普段からも" content="この書き方の方がいいね" message="メッセージの上書きも可能" class="bg-black text-yellow-300">slotもできる</x-tests.card>

