@extends("partials.main")

@section("styles")
 <link rel="stylesheet" href="{{ asset(('css/styles/mandate.css')) }}" />
@endsection
   
 @section('body')
 @include('partials.navbar')
  <header>
      <figure data-active>
        <img src="{{ asset('images/kdf-holding-flag.webp') }}" alt="" />
        <figcaption>
          <h2>OUR MISSION</h2>
          <p>
            To defend and protect the sovereignty and territorial integrity of
            the Republic, assist and cooperate with other authorities in
            situations of emergency or disaster and restore peace in any part of
            Kenya affected by unrest or instability as assigned.
          </p>
        </figcaption>
      </figure>
      <figure>
        <img src="{{ asset('images/vision.jpg') }}" alt="" />
        <figcaption>
          <h2>OUR VISION</h2>
        </figcaption>
      </figure>
      <figure>
        <img src="{{ asset('images/march.webp') }}" alt="" />
        <figcaption>
          <h2>OUR COMMITMENT</h2>
          <p>
            The Ministry of Defence is committed to defending and protecting the
            people of the Republic of Kenya and their property against external
            aggression and also in providing support to the Civil Authority as
            per the Law.
          </p>
        </figcaption>
      </figure>
      <figure>
        <img src="{{ asset('images/ngao ya taifa.jpg') }}" alt="" />
        <figcaption>
          <h2>OUR SECONDARY MANDATE</h2>
          <p>
            To assist and cooperate with other authorities in situations of
            emergency or disaster and restore peace in any part of Kenya
            affected by unrest or instability as assigned.
          </p>
        </figcaption>
      </figure>
    </header>

    <main>
      <section class="corevalues">
        <h1>Our Corevalues</h1>
        <figure>
          <img src="{{ asset('images/logo2.png') }}" alt="" />
          <figcaption>
            <h2>Apolitical</h2>
            <p>
              The Defence Forces will steer clear of politics and will remain
              steadfastly apolitical.
            </p>
          </figcaption>
        </figure>
        <figure>
          <img src="{{ asset('images/CONSTITUTION-1.png') }}" alt="" />
          <figcaption>
            <h2>The Civil Prerogative</h2>
            <p>
              The Defence Forces shall always subordinate itself to democratic
              Civil Authority and exemplify civility in all its dealings with
              the people of Kenya.
            </p>
          </figcaption>
        </figure>
        <figure>
          <img src="{{ asset('images/loyalty.jpeg') }}" alt="" />
          <figcaption>
            <h2>Loyalty and Commitment</h2>
            <p>
              The Defence Forces will uphold its loyalty and commitment to the
              Commander – in – Chief and the people of Kenya through the chain
              of command.
            </p>
          </figcaption>
        </figure>
        <figure>
          <img
            src="{{ asset('images/silhouette-soldier-kenya-flag-on-260nw-2359131109.webp') }}"
            alt=""
          />
          <figcaption>
            <h2>Patriotism</h2>
            <p>
              The staff of the Ministry of Defence shall always be patriotic to
              the Government and the people of Kenya.
            </p>
          </figcaption>
        </figure>
        <figure>
          <img src="{{ asset('images/salute.jpeg') }}" alt="" />
          <figcaption>
            <h2>Professionalism</h2>
            <p>
              Service delivery will be based on the highest professional
              standards and will be blind to gender, ethnicity, race or any
              other consideration.
            </p>
          </figcaption>
        </figure>
        <figure>
          <img src="{{ asset('images/image-3.webp') }}" alt="" />
          <figcaption>
            <h2>Integrity</h2>
            <p>
              The staff of the Ministry of Defence will carry out their duties
              with the highest integrity and in accordance with the laid down
              rules and regulations.
            </p>
          </figcaption>
        </figure>
        <figure>
          <img src="{{ asset('images/alwaysthere.jpg') }}" alt="" />
          <figcaption>
            <h2>Reliability</h2>
            <p>
              The Defence Forces pledges to be a reliable partner in attending
              to the needs of the nation, its people and the general public at
              large.
            </p>
          </figcaption>
        </figure>
        <figure>
          <img src="{{ asset('images/KDF-combat-engineers-3x2-1.jpg') }}" alt="" />
          <figcaption>
            <h2>Knowledge</h2>
            <p>
              The Ministry of Defence will pursue knowledge for its staff and
              endeavor to integrate new technology in its operations and
              management process.
            </p>
          </figcaption>
        </figure>
        <figure>
          <img src="{{ asset('images/confidential.jpg') }}" alt="" />
          <figcaption>
            <h2>Confidentiality</h2>
            <p>
              The staff of the Ministry of Defence will maintain high standards
              of confidentiality of the data and information in its possession
              strictly adhering to the need to know principle.
            </p>
          </figcaption>
        </figure>
        <figure>
          <img src="{{ asset('images/oath.jpeg') }}" alt="" />
          <figcaption>
            <h2>Fairness</h2>
            <p>
              The Ministry of Defence will ensure fairness in all its activities
              especially in hiring, development and discipline of personnel
              which will be undertaken with utmost impartiality.
            </p>
          </figcaption>
        </figure>
      </section>

      <section class="obligation">
        <h1>Ministry Obligation to Citizens</h1>
        <p>
          <ul>
            <li> 
              <figure>
                <img src="{{ asset('images/collectivesecurity.jpg') }}" alt="">
                <figcaption>
                  The ministry of Defence provides public good in a way of collective security. Our commitment is to offer this service promptly and unreservedly.
                </figcaption>
              </figure> 
          </li>
            <li>
              <figure>
                <img src="{{ asset('images/fairness.jpg') }}" alt="">
                <figcaption>
                  The Ministry of Defence will render services without any discrimination regardless of one’s race, ethnic background, religion, gender, and status or otherwise.
                </figcaption>
              </figure>
            </li>
            <li>
              <figure>
                <img src="{{ asset('images/transparency-icon.jpg') }}" alt="">
                <figcaption>
                  Recruitment process into the Ministry will be conducted in a transparent manner, strictly in accordance with merit and stated eligibility, criteria as advertised I both the print and the electronic media.
                </figcaption>
              </figure>
            </li>
            <li>
              <figure>
                <img src="{{ asset('images/law-icon.jpg') }}" alt="">
                <figcaption>
                  Procurement of goods and services by the Ministry including disposal of assets will be transparent and in accordance with the law, procedures and regulations. The Ministry will also comply with the 30 percent presidential directive of the Ministry’s procurement budget for the youth, women and disabled.
                </figcaption>
              </figure>
            </li>
            <li>
              <figure>
                <img src="{{ asset('images/Contractual-Agreement.webp') }}" alt="">
                <figcaption>
                  The Ministry will only pay for goods received and services rendered in accordance with our contractual obligations.
                </figcaption>
              </figure>
            </li>
            <li>
              <figure>
                <img src="{{ asset('images/quick payments.png') }}" alt="">
                <figcaption>
                  The Ministry pledges to effect payments for goods and services rendered within 30 days of receipt of legitimate bills and invoices and convey the same to the merchants and suppliers by the quickest means possible.
                </figcaption>
              </figure>
            </li>
          </ul>
        </p>
      </section>
      <section class="obligation">
        <h1>Clients Rights and Obligations</h1>
        <p>
          <ul>
            <li>
              <figure>
                <img src="{{ asset('images/reciept-icon.jpg') }}" alt="">
                <figcaption>
                  Defence services are free but whenever the fee is payable, an official receipt will be issued.
                </figcaption>
              </figure>
            </li>

            <li>
              <figure>
                <img src="{{ asset('images/quick response.jpg') }}" alt="">

                <figcaption>
                  It is your right to receive a response to a written enquiry within 14 days, orally within 10 minutes and telephone within 3 rings
                </figcaption>
              </figure>
            </li>

            <li>
              <figure>
                <img src="{{asset('images/expeditious service.jpg')}}" alt="">
                <figcaption>
                  It is your right to be heard expeditiously and for your concerns to be attended to in the shortest time possible.
                </figcaption>
              </figure>
            </li>

            <li>
              <figure>
                <img src="{{ asset('images/quality service.png') }}" alt="">
                <figcaption>
                  It is your right to demand for timely and quality services
                </figcaption>
              </figure>
            </li>

            <li>
              <figure>
                <img src="{{ asset('images/png-anti-corruption.png') }}" alt="">
                <figcaption>
                  You are expected to desist from any acts of corruption, fraud, fitina (mis-information) or any other undesirable conducts, failure to which punitive action may be taken against you in accordance with the law.
                </figcaption>
              </figure>
            </li>
           
          </ul>
        </p>
      </section>
      <section class="feedback">
        <h2>Feedback Mechanism</h2>
        <div class="grid">
          <div>
            <!-- <h2>Correspondence</h2> -->
            <span>Telephone Number: 2721100</span>
            <span>Telephone/Fax Number: 2720663</span>
            <span>Email: publicaffairs@mod.go.ke</span>
            <span>Website: www.mod.go.ke</span>
          </div>
          <div>
            <!-- <h2> Either</h2> -->
            <span>The Principal Secretary</span>
           <span>Ministry of Defence</span> 
            <span>Ulinzi House</span>
            <span>Lenana Road</span>
            <span>P.O. Box 40668-00100</span>
            <span>Nairobi</span>
           <span>Fax: 2737322</span> 
          </div>
          <div>
            <!-- <h2>or</h2> -->
            <span>Chief of the Defence Forces</span>
            <span>Defence Headquarters</span>
            <span>Ulinzi House</span>
            <span>Lenana Road</span>
            <span>P.O. Box 40668-00100</span>
            <span>Nairobi</span>
          </div>
        </div>
      </section>
    </main>

 
 @endsection
   