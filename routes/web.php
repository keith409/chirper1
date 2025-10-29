<?php

use App\Http\Controllers\ChirpController;
use Illuminate\Support\Facades\Route;

route::get('/', [ChirpController::class,'index']);