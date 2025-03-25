<?php

use App\Livewire\ClienteForm;
use Illuminate\Support\Facades\Route;

Route::get('/clientes', ClienteForm::class);