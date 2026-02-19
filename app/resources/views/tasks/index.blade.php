<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة المهام</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    @if ($errors->any())
    <div class="text-red-500 mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 text-center text-blue-600">📝 قائمة مهامي</h1>

        <form action="{{ route('tasks.store') }}" method="POST" class="mb-6 flex gap-2">
            @csrf <input type="text" name="title" placeholder="ماذا تريد أن تنجز اليوم؟" required
                class="flex-1 p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">إضافة</button>
        </form>

        <ul class="space-y-3">
            @foreach ($tasks as $task)
    <li class="flex justify-between items-center bg-gray-50 p-3 rounded border border-gray-200">
        <div class="flex flex-col">
            <span class="text-lg">{{ $task->title }}</span>
            <span class="text-xs text-gray-400">{{ $task->created_at->diffForHumans() }}</span>
        </div>

        <div class="flex gap-2">
            <a href="{{ route('tasks.edit', $task->id) }}" 
               class="text-blue-500 hover:text-blue-700 text-sm font-medium">تعديل</a>

            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('هل أنت متأكد؟')">
                @csrf
                @method('DELETE') <button type="submit" class="text-red-500 hover:text-red-700 text-sm font-medium">حذف</button>
            </form>
            <input type="checkbox" class="ml-4" {{ $task->is_completed ? 'checked' : '' }} disabled>
        </div>
    </li>
@endforeach

            @if($tasks->isEmpty())
                <p class="text-center text-gray-500">لا توجد مهام حتى الآن.. ابدأ بإضافة واحدة!</p>
            @endif
        </ul>
    </div>

</body>
</html>