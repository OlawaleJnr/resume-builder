<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>PleskResume Builder</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      width: 100%;
      position: relative;
      display: flex;
      margin-left: auto;
      margin-right: auto;
      justify-content: center;
      align-items: center;
      font-family: "Open Sans", sans-serif;
    }

    hr {
      text-align: center;
      border-style: dotted;
      border-top: 0;
      width: 10%;
      border-width: 4px;
    }

    /* Left-side */
    .left {
      background-color: #0f585b !important;
      color: #fff;
      min-width: 250px;
      padding: 0 px;
      position: relative;
    }

    table {
      /* border: 1px solid black; */
      width: 100%;
      vertical-align: top;
      caption-side: bottom;
      border-collapse: collapse;
    }

    .template-body {
      /* margin-right: auto;
      margin-left: auto;
      width: 100%;
      height: 200px; */

      --tblr-gutter-x: 1.5rem;
      --tblr-gutter-y: 0;
      width: 100%;
      padding-right: calc(var(--tblr-gutter-x) * 0.5);
      padding-left: calc(var(--tblr-gutter-x) * 0.5);
      margin-right: auto;
      margin-left: auto;
    }

    table {
      margin-right: 100px;
      width: 800px;
      max-width: 1000px;
      height: 100%;
    }

    .cv-img {
      width: 50%;
      border-radius: 50%;
    }

    .topLeft {
      text-align: center;
      position: relative;
      bottom: 380px;
      padding: 0;
    }


    .midLeft {
      position: relative;
      bottom: 380px;
    }

    .bottom-left {
      position: relative;
      bottom: 350px;
    }

    .details {
      color: #FAF9F6;
      margin-bottom: 5px;
    }

    .topLeft,
    .profile {
      padding-top: 50px;
    }

    .midLeft,
    .bottom-left {
      padding: 10%;
    }

    .bottom-left {
      padding-top: 0;
    }

    .skillbar {
      width: 100%;
      height: 5px;
      background-color: #fff;
    }

    /* Right */
    .right {
      background-color: #f5f5f5;
      padding-left: 20px;
      padding-right: 20px;
      box-sizing: border-box;
    }
  </style>
</head>

<body class="antialiased">
  <div class="template-body">
    <table>
      <tr>
        <td class="left">
          <div class="topLeft">
            <img class="cv-img" src="images/Linus.jpg" alt="">
            <h1>{{ Str::upper(session('last_name')) }} {{ Str::upper(session('first_name')) }}</h1>
            <hr>
            <p class="details">{{ session('job_title') }}</p>
          </div>

          <div class="midLeft">
            <h3 class="details">Details</h3>
            <p class="details">{{ session('address') }}, {{ session('postal_code') }} {{ session('city') }}
              {{ session('country') }}</p>
            <p class="details">{{ session('mobile_number') }}</p>
            <p class="details">{{ session('email') }}</p>
          </div>

          <div class="bottom-left">
            <h3>Skills</h3>
            <p class="details">HTML5</p>
            <div class="skillbar"></div>
            <p class="details">CSS</p>
            <div class="skillbar"></div>
            <p class="details">Bootstrap</p>
            <div class="skillbar"></div>
            <p class="details">JavaScript</p>
            <div class="skillbar"></div>
            <p class="details">jQuery</p>
            <div class="skillbar"></div>
          </div>
        </td>
        <td class="right" colspan="2">
          <div class="profile">
            <h2 style="font-weight: bold;">Profile</h2>
            <p>{{ session('profile_summary') }}</p>
          </div>

          <br>
          <div class="experience">
            <h2 style="font-weight: bold;">Employment History</h2>
            <div class="experience1">
              <h3>Branch Customer Service Representative, AT&t Inc., Seattle</h3>
              <p class="date">AUGUST 2019 - SEPTEMBER 2016</p>
              <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
              </ul>
            </div>
            <div class="experience2">
              <h3>Branch Customer Service Representative, AT&t Inc., Seattle</h3>
              <p class="date">AUGUST 2019 - SEPTEMBER 2016</p>
              <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
              </ul>
            </div>
            <div class="experience3">
              <h3>Branch Customer Service Representative, AT&t Inc., Seattle</h3>
              <p class="date">AUGUST 2019 - SEPTEMBER 2016</p>
              <ul>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus blanditiis dolorum
                  officia!</li>
              </ul>
            </div>
          </div>

          <div class="education">
            <h2>Education</h2>
            <div class="education1">
              <h3>Bachelor of Communications, University of Seattle</h3>
              <p class="date">AUGUST 2004 - MAY 2011</p>
              <ul>
                <li>Graduated with Second Class Upper</li>
              </ul>
            </div>
            <div class="education2">
              <h3>Bachelor of Communications, University of Seattle</h3>
              <p class="date">AUGUST 2004 - MAY 2011</p>
              <ul>
                <li>Graduated with Second Class Upper</li>
              </ul>
            </div>
          </div>

          <div class="contact">

          </div>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>
