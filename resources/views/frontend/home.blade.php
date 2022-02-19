@extends('frontend.master')
@section('content')
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="slideshow-container">
    <div class="mySlides fade">
        <img src="/assets/css/image1.jpg"  alt="nothing" style="width:100%;height:400px">
    </div>

    <div class="mySlides fade">
        <img src="/assets/css/image2.jpg" style="width:100%;height:400px">
    </div>

    <div class="mySlides fade">
        <img src="/assets/css/image3.jpg" style="width:100%;height:400px">
    </div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<div class="shadow-lg p-3 mb-5 bg-white rounded">
<div class="card mb-3">
  <img class="card-img-top" src="/assets/css/cards1.jpg" alt="Card image cap" style="width:500px; height:400px">
  <div class="card-body">
    <h5 class="card-title">Intermittent fasting boosts health by strengthening daily rhythms</h5>
    <p class="card-text">While the modern world appears awash with fad diets, people seem to be giving a fair bit of attention to intermittent fasting.
As its name implies, intermittent fasting involves eating nothing for extended periods of time.
Some studies have found that this type of diet is beneficial, but exactly why it benefits health is not yet clear.
Recently, a group of scientists at the University of California, Irvine investigated the impact of fasting on our circadian clock.
Daily sleep–wake cycles, or circadian rhythms, drive the ebb and flow of human life; they control much more than just our sleepiness levels. 
Our 24-hour cycles involve metabolic, physiological, and behavioral changes that impact every tissue of the body.
Perhaps the most well-known way to influence the clock is via exposure to bright lights, but this isn't the only way; food intake also impacts the clock.
We are slowly beginning to understand how eating plays a role in modulating circadian rhythms, but we know even less about how a lack of food might affect rhythms.
</p>
</div>
</div>
</div>
<div class="shadow-lg p-3 mb-5 bg-white rounded">
<div class="card">
  <div class="card-body">
    <h2 class="card-title">DASH diet reduced heart failure risk 'by almost half' in people under 75</h2>
    <p class="card-text">Sticking to a plant-rich diet that can reduce high blood pressure may also lower the risk of heart failure 
    in people under the age of 75.This was the conclusion of a study that a team at Wake Forest School of Medicine in Winston-Salem, NC, 
    led to assess the impact of the Dietary Approaches to Stop Hypertension (DASH) eating plan on heart failure.They report their findings 
    in a paper that now features in the American Journal of Preventive Medicine.According to figures from the Centers for Disease Control 
    and Prevention (CDC), there are around 5.7 million adults with heart failure in the United States.The condition arises when the heart 
    continues to beat but cannot pump blood as well as it should.The result is that organs and tissues do not get the oxygen and nutrients 
    they need to function properly and remain healthy."Heart failure is a frequent cause of hospitalization in older adults and is associated 
    with substantial healthcare costs, so identifying modifiable risk factors [for] heart failure is an important public health goal," says lead 
    study author Dr. Claudia L. Campos, an associate professor of general internal medicine at Wake Forest School of Medicine.DASH eating plan can 
    lower blood pressure.The DASH eating plan is high in fruits, vegetables, and whole grains, as well as beans, nuts, low-fat or fat-free dairy, 
    poultry, fish, and vegetable oils.It is low in saturated fats, full-fat dairy, fatty and red meats, salt, sugary drinks, sweets, and tropical 
    oils such as those from coconut and palm.</p>
  </div>
  <img class="card-img-bottom" src="/assets/css/dashdiet.jpg" alt="Card image cap" style="width:300px; height:300px">
</div>
</div>
<div class="shadow-none p-3 mb-5 bg-light rounded">No shadow</div>
<div class="shadow-sm p-3 mb-5 bg-white rounded">Small shadow</div>
<div class="shadow p-3 mb-5 bg-white rounded">Regular shadow</div>
<div class="shadow-lg p-3 mb-5 bg-white rounded">Larger shadow</div>
@endsection