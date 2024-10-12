<?php

use App\Http\Controllers\biodata\BioController;
use App\Http\Controllers\biodata\editDataController;
use App\Http\Controllers\Biodata\inputDataController;
use App\Http\Controllers\biodata\updateController;
use Illuminate\Support\Facades\Route;

route::get('/', [BioController::class, 'index'])->name('home');
route::get('/Biodata/forminput', [inputDataController::class, 'index'])->name('input_data_bio');
route::post('/Biodata/prosesInput', [inputDataController::class, 'prosesInput'])->name('proses_inputBio');
route::get('/Biodata/EditData/{id}', [editDataController::class, 'index'])->name('editData');
route::post('/Biodata/UpdateData/{id}', [updateController::class, 'update'])->name('updateData');
