//re-active navbar intersection observer
const observed = document.querySelector('header');

if(observed){
  const observerapi = new IntersectionObserver( (entry)=>{
  const nav =document.querySelector('nav')

  if(!entry[0].isIntersecting ){
    nav.style.backgroundColor = '#2a2a2a' 
  }

  if(entry[0].isIntersecting ){
    if (entry[0].intersectionRatio >= 0.75) {
     nav.style.backgroundColor = 'transparent'      
    }     
  }

},{
  threshold: 0.75
})

observerapi.observe(observed)
}


//slider animation on the header hero
setInterval(function animate() {
  slides = [...document.querySelector("header").querySelectorAll("figure")];
  activeSlide = document
    .querySelector("header")
    .querySelector("[data-active]");
  let offset = slides.indexOf(activeSlide);
  offset += 1;
  if (offset >= slides.length) offset = 0;
  nextSlide = slides[offset];
  nextSlide.dataset.active = "true";
  delete activeSlide.dataset.active;
}, 12000);

//variable declarations 
const audioBtn = document.getElementById('toggleAudio')
const mute = `
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                <path
                  d="M22 9L16 15M16 9L22 15M3 10.5V13.5C3 14.6046 3.5 15.5 5.5 16C7.5 16.5 9 21 12 21C14 21 14 3 12 3C9 3 7.5 7.5 5.5 8C3.5 8.5 3 9.39543 3 10.5Z"
                  stroke="#000000"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                </svg>`

const notmute = `
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none">
                <path
                  d="M19 6C20.5 7.5 21 10 21 12C21 14 20.5 16.5 19 18M16 8.99998C16.5 9.49998 17 10.5 17 12C17 13.5 16.5 14.5 16 15M3 10.5V13.5C3 14.6046 3.5 15.5 5.5 16C7.5 16.5 9 21 12 21C14 21 14 3 12 3C9 3 7.5 7.5 5.5 8C3.5 8.5 3 9.39543 3 10.5Z"
                  stroke="#000000"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                </svg>`

//event listener to toggle video audio
if(audioBtn){
  audioBtn.addEventListener('click' , ()=>{
  const video = document.getElementById('video-banner')
  video.muted = !video.muted
  let dataset = video.dataset.mute
  if(dataset === 'muted'){
    audioBtn.innerHTML = mute;
    video.dataset.mute = 'unmuted'
  } else{
    audioBtn.innerHTML = notmute;
    video.dataset.mute = 'muted'
  }
})
}




//annoying 
// const banner = document.querySelector('.banner')
// const video = document.getElementById('video-banner')
// const videoObsever = new IntersectionObserver((entry)=>{
//   if(entry[0].isIntersecting){
//     if(entry[0].intersectionRatio >=0.9){
//       video.muted = !video.muted
//     }
//   }

//   console.log(entry[0].intersectionRatio)
// },{threshold: 1})

// videoObsever.observe(banner)