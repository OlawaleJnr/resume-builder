<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStepOneRequest;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
  public function index()
  {
    return view("welcome");
  }

  public function onboardingStepOne(Request $request)
  {
    return view("resume.step-one");
  }

  public function processStepOne(UserStepOneRequest $request)
  {
    return $request->all();
  }
}
