@extends("partials.main")


   @section("styles")
   <link rel="stylesheet" href="{{ asset("css/styles/history.css") }}" />
   @endsection

   @section("body")
   @include('partials.navbar')
   <main>
        <div class="banner">OUR HISTORY</div>
        <section class="history">
            <h1>
              HISTORY AND EVOLUTION OF THE MINISTRY OF DEFENCE
            </h1>
            <figure>
              <img src="{{ asset('images/history 1.jpg') }}" alt="">
              <figcaption>
                <p>
                  At independence, the Ministry of Defence was referred to as the Ministry of Internal Security and Defence. The Ministry of Internal Security and Defence encompassed the military, police and prison. During this period, there were only 21 civilians spread over the Kenya Army, the Kenya Air Force, the Kenya Navy, the Kenya Police and Prisons.
                </p>
                <p>
                  After independence in 1963, an Act of Parliament (KMF Act-Cap 198), created the Kenya Military Forces and the following year in 1964 Prisons and Police were transferred to the Ministry of Home Affairs. In 1966, the Police Department was further transferred from the Home Affairs docket to the Office of the President.
                </p>
                <p>
                  In 1968 an Act of Parliament repealed Chapter 198 which had created the Kenya Military Forces and replaced it with Chapter 199 of the Laws of Kenya creating the Kenya Armed Forces. Defence remained as the Ministry of Defence until 1980.
                </p>
                <p>
                  The Ministry has changed names since independence through Executive Orders of the President that spells out names of Ministry’s. It has been referred to as
                </p>
              </figcaption>
            </figure>
        </section>
        <section class="CIC">
          <h1>
            Former Presidents of the Republic of Kenya <br> and <br>Commander  in  Chief of the Defence Forces.
          </h1>
          <div class="yearsofservice">
            <span data-active>1964 – 1978</span>
            <span>1978 – 2002</span>
            <span>2002 – 2013</span>
            <span>2013 – 2022</span>
            <span>2022 - present</span>
          </div>
          <figure class="profile">
            <img src="{{ asset('images/Mzee Jomo Kenyatta.png') }}" alt="">
            <figcaption>
              <p>
                Mzee Jomo Kenyatta was the President of Kenya from independence in 1963 to his death in 1978, serving first as Prime Minister (1963–64) and then as President (1964–78).
              </p>
              <p>
                Kenyatta was a well-educated intellectual who authored several books, and is remembered as a Pan-Africanist.
              </p>
              <p>
                He is also the father of Kenya’s fourth and current President, Uhuru Kenyatta.
              </p>
            </figcaption>
          </figure>
        </section>

        <section class="Ministers">
          <h1>
            Former Ministry of Defence Cabinet Ministers/Secretaries
          </h1>
          <div class="yearsofservice">
            <span data-active>1963 – 1965</span>
            <span>1965 – 1966</span>
            <span>1974 – 1978</span>
            <span>1979 – 2000</span>
            <span>2000 – 2003</span>
            <span>2003 – 2005</span>
            <span>2006 – 2008</span>
            <span>2008 – 2013</span>
            <span>2013 – 2020</span>
            <span>2020 – 2021</span>
            <span>2021 – 2022</span>
            
          </div>
          <figure class="profile">
            <img src="{{ asset('images/dr-munyua-waiyaki-2.jpg.crdownload') }}" alt="">
            <figcaption>
              <p>
                Dr. Munyua Waiyaki was elected as a member of parliament for North-Eastern Nairobi Currently Kasarani constituency in 1963.
              </p>
              <p>
                He was later appointed the Parliamentary Secretary (Assistant Minister) in the PM’s office in charge of Internal Security and Defence.
              </p>
              <p>
                During his tenure , Dr. Waiyaki spent most of the  time with the Prime Minister (Mzee Jomo Kenyatta) discussing the answers he (Waiyaki) would give on the PM’s behalf in the House of Representatives in regards to Shifta war which was a major security concern at the time.
              </p>
              <p>
                He also handled the Mau Mau issue with the objective of ensuring that freedom fighters left the forest since Kenya had attained independence, an assignment the Prime minister followed keenly.
              </p>
              <p>
                Later in his career, Dr. Waiyaki was appointed Kenya’s Minister for Foreign Affairs where he was tasked by the Prime Minister to pursued US Secretary of State Henry Kissinger into authorizing sale of F5 fighter jets to Kenya , an aircraft simulator and train those who would operate them.
              </p>
            </figcaption>
          </figure>
        </section>

        <section class="CDF">
          <h1>
            Chief of the Defence Forces (CDF) History
          </h1>
          <div class="yearsofservice">
            <span data-active>1963 – 1969</span>
            <span>1969 – 1971</span>
            <span>1971 – 1986</span>
            <span>1986 – 1996</span>
            <span>1996 – 2000</span>
            <span>2000 – 2005</span>
            <span>2005 – 2011</span>
            <span>2011 – 2015</span>
            <span>2015 – 2020</span>
            <span>2020 – 2023</span>
            <span>2023 – 2024</span>
            
          </div>
          <figure class="profile">
            <img src="{{ asset('images/General Bernard.png') }}" alt="">
            <figcaption>
              <p>
                Major-General Robert Bernard Penfold CB LVO was a British Army officer who commanded South East District.
              </p>
              <p>
                In 1957, Penfold moved to the Military Mission at Washington DC. For his service as GSO1, he was appointed LVO at the end of his tour. Command of 6th Battalion King’s African Rifles in Tanganyika followed in 1959. He took great trouble to understand the history of the people of Tanganyika and, in particular, the tensions that could arise if the tribal components of the battalion became unbalanced. To the Askari, Penfold was Bwana Kali (Colonel Fierce) .
              </p>
              <p>
                In 1964, he was promoted to brigadier and posted to Aden as security adviser during the Radfan campaign. Two years later, President Jomo Kenyatta appointed him chief of staff of the Kenya Defence Forces. He was appointed CB in 1969.
              </p>
              <p>
                Penfold went on to be GOC South East District before retiring from the Army in 1972 in the rank of major-general.
              </p>
             
            </figcaption>
          </figure>
        </section>
      </main>

   @endsection
    
    