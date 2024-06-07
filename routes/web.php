<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('cursos/listar',[CursoController::class,'index'])->name('curso.index');
Route::get('cursos/create',[CursoController::class,'create']);
Route::post('cursos/store', [CursoController::class,'store'])->name('cursos.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}/editar',[CursoController::class,'edit'])->name('curso.edit');

Route::get('producto/listar',[ProductController::class,'index']);
Route::get('formularioproducto',[ProductController::class,'formulario']);
Route::post('formulario/store', [ProductController::class,'store'])->name('product.store');

//
Route::get('usuario/asociar_rol',[RoleUserController::class,'asociar']);
Route::post('usuario/asociar_rol/store',[RoleUserController::class,'store'])->name('role_user.store');

