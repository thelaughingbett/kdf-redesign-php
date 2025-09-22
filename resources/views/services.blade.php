@extends('partials.main')

@section('styles')
  <link rel="stylesheet" href="{{ asset('css/styles/services.css') }}" />
@endsection
  
@section('body')
@include('partials.navbar')
<main>
      <div class="banner">KDF SERVICES</div>
      <section class="main">
        <p>
          The Kenya Defence Forces comprises of the Kenya Army, Kenya Air Force
          and Kenya Navy. The current Kenya Defence Forces were established, and
          its composition laid out, in Article 241 of the 2010 Constitution of
          Kenya; the KDF is governed by the Kenya Defence Forces Act of 2012.The
          President of Kenya is the commander-in-chief of all the armed forces.
        </p>
        <div class="main-content">
          <h2>KDF SERVICES</h2>

           @php
            use App\Models\personell;
            $CKA = personell::where('rank','CKA')->get()->first();
          
            $CKAF = personell::where('rank','CKAF')->get()->first();
            $CKA = personell::where('rank','CKA')->get()->first();
          
            $CN = personell::where('rank','CN')->get()->first();
          
          @endphp

          

          <div class="service-container">
            <div class="services">
              <img src="{{ asset('images/Seal_of_the_Kenya_Army.png') }}" alt="" />
              <figure>
                <h2>Kenya Army</h2>
                <img src="{{asset( 'storage/' . $CKA->image )}}" alt="" />
                <figcaption>
                  Lt Gen {{$CKA->FirstName . " " . $CKA->LastName }} <br>{{ $CKA->title }}<br />Commander Kenya Army
                </figcaption>
                <p>
                  The primary mission of the Army is the defence of the nation
                  against external land based aggression.
                </p>
                <button>Visit Kenya Army Website</button>
              </figure>
            </div>

            <div class="services">
              <img src="{{ asset('images/kaf-logo.jpg') }}" alt="" />
              <figure>
                <h2>Kenya Airforce</h2>
                <img src="{{asset( 'storage/' . $CKAF->image )}}" alt="" />
                <figcaption>
                  Maj Gen {{$CKAF->FirstName . " " . $CKAF->LastName }} <br>{{ $CKAF->title }}
                  <br />Commander Kenya Air Force
                </figcaption>
                <p>
                  The Primary Mission is to defend and maintain sovereignty of
                  Kenya airspace at all times.
                </p>
                <button>Visit Kenya Airforce Website</button>
              </figure>
            </div>

            <div class="services">
              <img src="{{ asset('images/kn-3.png') }}" alt="" />
              <figure>
                <h2>Kenya Navy</h2>
                <img src="{{asset( 'storage/' . $CN->image )}}" alt="" />

                <figcaption>
                  Maj Gen {{$CN->FirstName . " " . $CN->LastName }} <br>{{ $CN->title }} <br />
                  Commander Kenya Navy
                </figcaption>
                <p>
                  The Primary Mission is to defend and maintain sovereignty of
                  Kenya waters at all times
                </p>
                <button>Visit Kenya Navy Website</button>
              </figure>
            </div>
          </div>
        </div>
        <div class="service-sergeants">
          <h2>SERVICE SERGEANT MAJORS</h2>
          <div class="container-flex">
            <figure>
              <img src="{{ asset('images/wo1-bwana-227x284.jpg') }}" alt="" />
              <figcaption>
                WO1 Bwana Haji Omari , OGW <br />
                Defence Forces Sergeant Major (DFSM)
              </figcaption>
            </figure>
            <figure>
              <img
                src="{{ asset('images/ASM-01-MURAGE-scaled-227x284.jpg') }}"
                alt=""
              />
              <figcaption>
                WO1 Joel Gatibi Murage <br />Kenya Army Sergeant Major
              </figcaption>
            </figure>
            <figure>
              <img src="{{ asset('images/sma-240x300.jpg') }}" alt="" />
              <figcaption>
                WOI Dennis N Talengo, OGW <br />Kenya Air Force Sergeant Major
              </figcaption>
            </figure>
            <figure>
              <img src="{{ asset('images/navy-240x300.jpg') }}" alt="" />
              <figcaption>
                WO1 Musa Adan Abdi <br />
                Kenya Navy Sergeant Major
              </figcaption>
            </figure>
          </div>
        </div>
      </section>
</main>   
@endsection
    