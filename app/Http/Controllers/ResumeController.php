<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStepOneRequest;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
  public function index(Request $request)
  {
    $request->session()->invalidate();
    return view("welcome");
  }

  public function onboardingStepOne(Request $request)
  {
    return view("resume.onboarding-step-one");
  }

  public function onboardingStepTwo(Request $request)
  {
    // $personal_info = session('personal_info');
    return view("resume.onboarding-step-two");
  }

  public function processStepOne(UserStepOneRequest $request)
  {
    // Get validated data
    $data = $request->validated();

    // Saving data to session
    $request->session()->put("job_title", $data['job_title']);
    $request->session()->put("first_name", $data['first_name']);
    $request->session()->put("last_name", $data['last_name']);
    $request->session()->put("email", $data['email']);
    $request->session()->put("mobile_number", $data['mobile_number']);
    $request->session()->put("address", $data['address']);
    $request->session()->put("postal_code", $data['postal_code']);
    $request->session()->put("city", $data['city']);
    $request->session()->put("country", $data['country']);

    // Redirect to step two
    return redirect()->route("resume.stepTwo")->withInput();
  }
}
