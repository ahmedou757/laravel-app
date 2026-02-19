<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        // التحقق من البيانات (Validation)
        $request->validate([
            'title' => 'required|max:255',
        ]);

        // الحفظ في قاعدة البيانات
        Task::create([
            'title' => $request->title,
            /*'description' => $request->description*/
        ]);

        // العودة للصفحة السابقة
        return back(); 
    }

    // دالة الحذف
public function destroy($id)
{
    $task = Task::findOrFail($id); // ابحث عن المهمة أو أظهر خطأ 404
    $task->delete(); // احذفها من قاعدة البيانات
    return back(); // ارجع للصفحة السابقة
}

// دالة عرض صفحة التعديل
public function edit($id)
{
    $task = Task::findOrFail($id);
    return view('tasks.edit', compact('task'));
}

// دالة حفظ التعديلات (Update)
public function update(Request $request, $id)
{
    $request->validate(['title' => 'required|max:255']);
    
    $task = Task::findOrFail($id);
    $task->update(['title' => $request->title]);
    
    return redirect()->route('tasks.index'); // العودة للقائمة الرئيسية
}
}
