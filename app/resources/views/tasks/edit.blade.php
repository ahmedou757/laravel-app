<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل المهمة</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">

    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center text-blue-600">📝 قائمة مهامي</h1>

        <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="mb-6 flex gap-2">
            @csrf
            @method('PUT')
            <input type="text" name="title" value="{{ $task->title }}" required
                class="flex-1 p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">حفظ التعديلات</button>
        </form>

        {{--<ul class="space-y-3">
            @if($tasks->isEmpty())
                <p class="text-center text-gray-500">لا توجد مهام حتى الآن.. ابدأ بإضافة واحدة!</p>
            @endif
        </ul> --}}
    </div>

</body>
</html>