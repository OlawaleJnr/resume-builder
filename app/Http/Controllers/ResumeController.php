<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserStepOneRequest;
use App\Http\Requests\UserStepTwoRequest;

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
    return view("resume.onboarding-step-two");
  }

  public function onboardingStepThree(Request $request)
  {
    $data = $request->session()->all();
    return view("resume.onboarding-step-three", compact("data"));
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
    return redirect()->route("resume.stepTwo");
  }

  public function processStepTwo(UserStepTwoRequest $request)
  {
    // Get validated data
    $data = $request->validated();

    // Saving data to session
    $request->session()->put("profile_summary", $data['profile_summary']);

    // Redirect to step three
    return redirect()->route("resume.stepThree");
  }
}
