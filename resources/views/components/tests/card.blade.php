<div class="border-2 shadow-sm w-1/4 text-green-600">
@props([
    'title',
    'content' => "content初期値",
    'message' => "メッセージ初期値"
    // 属性がないパターンはpropsが必要
])

    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
    <div>{{ $slot }}</div>
</div>

