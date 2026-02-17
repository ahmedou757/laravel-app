<?php 
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return redirect()->route('tasks.index');
});
Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::delete('tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');
Route::get('tasks/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
Route::put('tasks/{id}', [TaskController::class, 'update'])->name('tasks.update');
