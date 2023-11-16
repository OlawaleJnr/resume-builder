<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserStepOneRequest;
use App\Http\Requests\UserStepTwoRequest;
use App\Http\Requests\UserStepThreeRequest;

class ResumeController extends Controller
{
  public function index(Request $request)
  {
    $request->session()->invalidate();
    return view("welcome");
  }

  public function onboardingStepOne(Request $request)
  {
    $request->session()->forget('profile_summary');
    return view("resume.onboarding-step-one");
  }

  public function onboardingStepTwo(Request $request)
  {
    $request->session()->forget('employee_job_title');
    $request->session()->forget('employeer');
    $request->session()->forget('start_date');
    $request->session()->forget('end_date');
    $request->session()->forget('employment_city');
    $request->session()->forget('employment_description');
    return view("resume.onboarding-step-two");
  }

  public function onboardingStepThree(Request $request)
  {
    return view("resume.onboarding-step-three");
  }

  public function onboardingStepFinal(Request $request)
  {
    return view("resume.onboarding-final");
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

  public function processStepThree(UserStepThreeRequest $request)
  {
    // Get validated data
    $data = $request->validated();

    // Saving data to session
    $request->session()->put("employee_job_title", $data['employee_job_title']);
    $request->session()->put("employeer", $data['employeer']);
    $request->session()->put("start_date", $data['start_date']);
    $request->session()->put("end_date", $data['end_date']);
    $request->session()->put("employment_city", $data['employment_city']);
    $request->session()->put("employment_description", $data['employment_description']);

    // Redirect to final
    return redirect()->route("resume.final");
  }
}
