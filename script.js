const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["Programmer", "Web developer", "Dancer", "Experimental Chef","Fashion Enthusiast","Designer"];
const typingDelay = 80;
const erasingDelay = 80;
const newTextDelay = 1000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
  	setTimeout(erase, newTextDelay);
  }
}

function erase() {
	if (charIndex > 0) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length) textArrayIndex=0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
  if(textArray.length) setTimeout(type, newTextDelay + 250);
});

let i=0;
window.addEventListener('scroll',function(){
  if(isScrolledIntoView(document.getElementById('continue'))){
    let pbars=document.getElementsByClassName('progress-bar');
  Array.from(pbars).forEach(pbar=>{
    if(i==0)
    pbar.setAttribute(`style`,`width: 90%`);
    if(i==1)
    pbar.setAttribute(`style`,`width: 70%`);
    if(i==2)
    pbar.setAttribute(`style`,`width: 96%`);
    if(i==3)
    pbar.setAttribute(`style`,`width: 65%`);
    if(i==4)
    pbar.setAttribute(`style`,`width: 75%`);
    if(i==5)
    pbar.setAttribute(`style`,`width: 80%`);
    i++;
  })
  
  }
})
function isScrolledIntoView(elem) {
  var rect = elem.getBoundingClientRect();
  var elemTop = rect.top;
  var elemBottom = rect.bottom;

  var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
  
  return isVisible;
}

let clickToReveal=document.getElementById('clickToReveal');
clickToReveal.addEventListener('click',function(){
  clickToReveal.innerText=`8017220465`;
  clickToReveal.setAttribute(`style`,`font-size:100%`);
})

let form=document.getElementById('myform');
let send=form.querySelector('button');
send.addEventListener('click',function(){
  let naam=document.forms['form']['naam'];
  let email=document.forms['form']['email'];
  let mess=document.forms['form']['message'];
  if(naam.value==''||email.value==''||mess.value==''){
    alert('Please fill out all the fields!');
  }
  else{
    console.log('done');
    alert('Yaay! Your message has been sent...');
  }
})