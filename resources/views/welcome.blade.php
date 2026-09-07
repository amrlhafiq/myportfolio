<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<title>A little something from Hafiq</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;1,9..144,500&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
  :root{
    --ink:#221019;
    --ink-2:#2c1620;
    --paper:#FAF3EC;
    --paper-dim:#F1E4D6;
    --rose:#E0879A;
    --rose-deep:#C65E76;
    --gold:#CFA24C;
    --text-light:#F4E9DE;
    --text-muted:#CBB6AE;
    --serif:'Fraunces', serif;
    --sans:'Inter', sans-serif;
  }
  *{box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{
    margin:0;
    background:var(--ink);
    color:var(--text-light);
    font-family:var(--sans);
    -webkit-font-smoothing:antialiased;
    overflow-x:hidden;
  }
  @media (prefers-reduced-motion: reduce){
    *{animation-duration:0.001ms !important; animation-iteration-count:1 !important; transition-duration:0.001ms !important; scroll-behavior:auto !important;}
  }

  a{color:inherit;}
  ::selection{background:var(--rose); color:var(--ink);}

  .wrap{max-width:720px; margin:0 auto; padding:0 28px;}
  section{padding:120px 0; position:relative;}

  /* ---------- progress ---------- */
  .progress{position:fixed; top:0; left:0; height:3px; background:var(--rose); z-index:60; width:0%; transition:width .1s linear;}

  /* ---------- reveal ---------- */
  .reveal{opacity:0; transform:translateY(18px); transition:opacity .7s ease, transform .7s ease;}
  .reveal.in{opacity:1; transform:none;}

  /* ---------- HERO ---------- */
  .hero{
    min-height:100svh;
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    padding:clamp(40px,9vw,80px) clamp(14px,4vw,28px);
    background:
      radial-gradient(ellipse at 50% 0%, rgba(224,135,154,0.16), transparent 60%),
      var(--ink);
  }
  .stars{position:absolute; inset:0; overflow:hidden; z-index:0; pointer-events:none;}
  .stars span{
    position:absolute; width:2px; height:2px; background:var(--gold); border-radius:50%;
    opacity:.5; animation:twinkle 4s ease-in-out infinite;
  }
  @keyframes twinkle{0%,100%{opacity:.15;} 50%{opacity:.75;}}

  .hero-grid{
    position:relative; z-index:1;
    width:100%; max-width:1080px;
    display:grid;
    grid-template-columns:1.05fr 0.95fr;
    gap:clamp(14px,4vw,32px);
    align-items:center;
  }
  .hero-inner{text-align:left; min-width:0;}
  .eyebrow-note{
    font-family:var(--sans); font-size:clamp(10px,2.4vw,13px); letter-spacing:.02em; color:var(--text-muted);
    margin-bottom:clamp(10px,2.6vw,22px);
  }
  .hero h1{
    font-family:var(--serif);
    font-weight:600;
    font-size:clamp(22px, 6vw, 62px);
    line-height:1.08;
    margin:0 0 14px;
    letter-spacing:-.01em;
  }
  .hero h1 .script{
    font-style:italic;
    font-weight:500;
    color:var(--rose);
  }
  .hero p.sub{
    font-family:var(--serif);
    font-style:italic;
    font-size:clamp(11px,2.4vw,20px);
    color:var(--text-muted);
    max-width:440px;
    margin:0;
    line-height:1.5;
  }

  /* ---------- photo stack (hero) ---------- */
  .photo-wrap{
    position:relative; z-index:1;
    display:flex; align-items:center; justify-content:center;
    min-width:0;
  }
  .card-stack{
    position:relative;
    width:100%;
    max-width:400px;
    aspect-ratio:16/11;
  }
  .stack-card{
    position:absolute;
    top:0;
    width:47%;
    height:100%;
    border-radius:clamp(8px,1.6vw,16px);
    overflow:hidden;
    background:linear-gradient(135deg, #4a2c38, #1c0f16);
    box-shadow:0 18px 34px rgba(0,0,0,.45);
    transition:left .9s cubic-bezier(.45,0,.2,1), transform .9s cubic-bezier(.45,0,.2,1), opacity .9s ease, z-index 0s .45s;
  }
  .stack-card img{width:100%; height:100%; object-fit:cover; display:block;}
  .stack-card .fallback{
    position:absolute; inset:0; display:flex; align-items:center; justify-content:center;
    font-family:var(--serif); font-style:italic; font-size:clamp(9px,1.8vw,12px);
    color:var(--text-muted); text-align:center; padding:10px;
  }
  .stack-card.slot-center{
    left:26.5%;
    transform:scale(1.04);
    opacity:1;
    z-index:3;
  }
  .stack-card.slot-left{
    left:-6%;
    transform:scale(.88);
    opacity:.55;
    z-index:1;
  }
  .stack-card.slot-right{
    left:59%;
    transform:scale(.88);
    opacity:.55;
    z-index:1;
  }

  .scroll-cue{
    margin-top:clamp(24px,6vw,56px); font-size:12px; color:var(--text-muted);
    display:flex; flex-direction:column; align-items:center; gap:10px;
    position:relative; z-index:1;
  }
  .scroll-cue .stem{width:1px; height:34px; background:linear-gradient(var(--text-muted), transparent); animation:stem 2s ease-in-out infinite;}
  @keyframes stem{0%,100%{transform:scaleY(1); opacity:.6;} 50%{transform:scaleY(1.3); opacity:1;}}

  /* ---------- LETTER ---------- */
  .letter{
    background:var(--paper);
    color:var(--ink);
    border-radius:2px;
    position:relative;
    overflow:hidden;
  }
  .letter .wrap{padding-top:0; padding-bottom:0;}
  .petal-field{position:absolute; inset:0; overflow:hidden; pointer-events:none; z-index:0;}
  .petal-field .petal{
    position:absolute; top:-8%;
    width:9px; height:12px;
    background:var(--rose-deep);
    border-radius:0 100% 0 100%;
    opacity:0;
    animation:petal-fall linear infinite;
  }
  @keyframes petal-fall{
    0%{ transform:translateY(0) rotate(0deg); opacity:0; }
    8%{ opacity:.55; }
    85%{ opacity:.4; }
    100%{ transform:translateY(115vh) rotate(340deg); opacity:0; }
  }
  .letter-card{
    padding:64px 56px;
    position:relative;
    z-index:1;
  }
  .corner-flourish{position:absolute; z-index:1; pointer-events:none;}
  .corner-flourish.tl{top:18px; left:18px;}
  .corner-flourish.br{bottom:18px; right:18px; transform:rotate(180deg);}
  .letter-mark{
    font-family:var(--serif); font-style:italic; font-size:14px; color:var(--rose-deep);
    margin-bottom:28px;
  }
  .letter p{
    font-family:var(--serif);
    font-size:clamp(18px,2.4vw,22px);
    line-height:1.7;
    margin:0 0 22px;
    color:#3a2530;
  }
  .letter p:first-of-type::first-letter{
    font-family:var(--serif);
    font-size:2.6em;
    font-weight:600;
    color:var(--rose-deep);
    float:left;
    line-height:.85;
    padding-right:8px;
    padding-top:4px;
  }
  .letter .sign{
    font-style:italic;
    color:var(--rose-deep);
    margin-top:34px;
  }
  .flourish{
    display:flex; align-items:center; justify-content:center; gap:12px;
    color:var(--rose-deep); margin:0 0 30px;
  }
  .flourish span{width:44px; height:1px; background:currentColor; opacity:.4;}
  .flourish svg{flex-shrink:0; opacity:.75;}
  .ask .flourish{color:var(--gold);}

  /* ---------- ABOUT ---------- */
  .about{background:var(--ink);}
  .about-grid{
    display:grid; grid-template-columns:1fr 1fr; gap:40px 32px;
  }
  .section-head{grid-column:1/-1; margin-bottom:8px;}
  .section-head h2{
    font-family:var(--serif); font-weight:600; font-size:clamp(28px,4vw,38px);
    margin:0 0 14px; letter-spacing:-.01em;
  }
  .section-head p{
    color:var(--text-muted); font-size:16px; line-height:1.7; max-width:520px; margin:0;
  }
  .fact{
    border-top:1px solid rgba(244,233,222,0.14);
    padding-top:16px;
  }
  .fact .k{font-family:var(--serif); font-style:italic; color:var(--rose); font-size:15px; margin-bottom:6px;}
  .fact .v{font-size:15px; line-height:1.6; color:var(--text-light);}

  /* ---------- GALLERY ---------- */
  .gallery{background:var(--ink-2);}
  .gallery-head{margin-bottom:48px;}
  .polaroids{
    display:grid;
    grid-template-columns:repeat(3, 1fr);
    gap:22px 18px;
  }
  .polaroid{
    background:var(--paper);
    padding:12px 12px 20px;
    border-radius:2px;
    box-shadow:0 14px 30px rgba(0,0,0,.35);
  }
  .polaroid:nth-child(2n){transform:rotate(-2.2deg);}
  .polaroid:nth-child(3n){transform:rotate(2deg);}
  .polaroid:nth-child(5n){transform:rotate(-1deg);}
  .polaroid .frame{
    aspect-ratio:1/1;
    background:linear-gradient(135deg, #4a2c38, #1c0f16);
    border-radius:1px;
    overflow:hidden;
    display:flex; align-items:center; justify-content:center;
  }
  .polaroid img{width:100%; height:100%; object-fit:cover; display:block;}
  .polaroid .fallback{
    font-family:var(--serif); font-style:italic; font-size:13px; color:var(--text-muted); text-align:center; padding:14px;
  }
  .polaroid .cap{
    font-family:var(--serif); font-style:italic; font-size:13px; color:#5c4048; text-align:center; padding-top:12px;
  }
  .gallery-hint{
    margin-top:26px; font-size:13px; color:var(--text-muted); line-height:1.7;
  }
  .gallery-hint code{
    background:rgba(244,233,222,.08); padding:2px 6px; border-radius:3px; font-family:'JetBrains Mono', monospace;
  }

  /* ---------- ASK ---------- */
  .ask{
    background:var(--ink);
    text-align:center;
    overflow:hidden;
  }
  .butterfly-field{position:absolute; inset:0; overflow:hidden; pointer-events:none; z-index:0;}
  .butterfly-wrap{position:absolute;}
  .butterfly{display:block;}
  .wing-left, .wing-right{
    transform-box:fill-box;
    animation:flap .42s ease-in-out infinite;
  }
  .wing-left{transform-origin:right center;}
  .wing-right{transform-origin:left center; animation-delay:.03s;}
  @keyframes flap{
    0%,100%{transform:scaleX(1);}
    50%{transform:scaleX(.32);}
  }
  @keyframes flyA{
    0%{transform:translate(0,0) rotate(-6deg);}
    25%{transform:translate(60px,-46px) rotate(9deg);}
    50%{transform:translate(120px,6px) rotate(-5deg);}
    75%{transform:translate(60px,58px) rotate(8deg);}
    100%{transform:translate(0,0) rotate(-6deg);}
  }
  @keyframes flyB{
    0%{transform:translate(0,0) rotate(6deg);}
    30%{transform:translate(-70px,-30px) rotate(-8deg);}
    60%{transform:translate(-40px,40px) rotate(10deg);}
    100%{transform:translate(0,0) rotate(6deg);}
  }
  @keyframes flyC{
    0%{transform:translate(0,0) rotate(0deg);}
    20%{transform:translate(36px,-60px) rotate(-10deg);}
    50%{transform:translate(90px,-10px) rotate(6deg);}
    80%{transform:translate(30px,50px) rotate(-6deg);}
    100%{transform:translate(0,0) rotate(0deg);}
  }
  .ask-head{position:relative; z-index:1;}
  .ask-head h2{
    font-family:var(--serif); font-weight:600; font-size:clamp(30px,5vw,44px); margin:0 0 16px;
  }
  .ask-head p{color:var(--text-muted); font-size:16px; margin:0 0 40px;}

  .stage{
    position:relative; z-index:1;
    height:260px;
    display:flex; align-items:center; justify-content:center;
    gap:20px;
  }
  .btn{
    font-family:var(--sans); font-weight:600; font-size:16px;
    padding:16px 30px;
    border-radius:999px;
    border:none;
    cursor:pointer;
    transition:transform .18s ease, box-shadow .18s ease, background .3s ease;
  }
  .btn-yes{
    background:var(--rose);
    color:var(--ink);
    box-shadow:0 10px 26px rgba(224,135,154,.28);
  }
  .btn-yes:hover{transform:translateY(-2px) scale(1.02); box-shadow:0 14px 32px rgba(224,135,154,.4);}
  .btn-no{
    background:transparent;
    color:var(--text-muted);
    border:1px solid rgba(244,233,222,.28);
    position:relative;
  }
  .btn-no.fleeing{
    position:absolute;
  }
  .dodge-caption{
    position:relative; z-index:1;
    min-height:20px; margin-top:22px; font-size:13px; color:var(--rose); font-style:italic; font-family:var(--serif);
  }

  .celebrate-overlay{
    position:fixed; inset:0; z-index:80;
    background:rgba(34,16,25,.92);
    display:flex; align-items:center; justify-content:center;
    opacity:0; pointer-events:none;
    transition:opacity .4s ease;
  }
  .celebrate-overlay.show{opacity:1; pointer-events:auto;}
  .celebrate-card{
    text-align:center; max-width:420px; padding:0 24px;
    transform:scale(.92); transition:transform .4s ease;
  }
  .celebrate-overlay.show .celebrate-card{transform:scale(1);}
  .celebrate-card h3{
    font-family:var(--serif); font-weight:600; font-size:clamp(30px,6vw,44px); margin:0 0 14px; color:var(--rose);
  }
  .celebrate-card p{color:var(--text-light); font-size:16px; line-height:1.7; margin:0 0 30px;}
  .celebrate-card button{
    background:var(--rose); color:var(--ink); border:none; border-radius:999px;
    padding:14px 32px; font-family:var(--sans); font-weight:600; cursor:pointer;
  }
  .confetti{position:fixed; top:-10px; z-index:81; pointer-events:none; border-radius:2px;}

  /* ---------- CONTACT ---------- */
  .contact{
    background:var(--paper);
    color:var(--ink);
    text-align:center;
  }
  .contact h2{font-family:var(--serif); font-weight:600; font-size:clamp(28px,5vw,40px); margin:0 0 14px;}
  .contact p{color:#5c4048; font-size:16px; margin:0 0 34px;}
  .contact-links{display:flex; gap:14px; justify-content:center; flex-wrap:wrap;}
  .contact-links a{
    font-size:14px; font-weight:600; text-decoration:none;
    display:inline-flex; align-items:center; gap:8px;
    padding:12px 20px; border-radius:999px; border:1px solid rgba(34,16,25,.16);
    color:#3a2530; transition:border-color .2s ease, background .2s ease;
  }
  .contact-links a svg{flex-shrink:0;}
  .contact-links a:hover{background:rgba(198,94,118,.08); border-color:var(--rose-deep);}

  footer{
    background:var(--paper); color:#8a6f75; text-align:center; font-size:13px; padding:0 0 40px;
  }

  @media (max-width:520px){
    .hero-grid{grid-template-columns:1.1fr 0.9fr; gap:10px;}
  }

  @media (max-width:640px){
    section{padding:90px 0;}
    .letter-card{padding:44px 26px;}
    .about-grid{grid-template-columns:1fr;}
    .polaroids{grid-template-columns:repeat(2,1fr);}
    .stage{flex-direction:column; height:auto; min-height:220px;}
  }
</style>
</head>
<body>

<div class="progress" id="progress"></div>

<!-- HERO -->
<header class="hero" id="hero">
  <div class="stars" id="stars"></div>
  <div class="hero-grid">
    <div class="hero-inner">
      <h1>Hi Farah :><br>this one's <span class="script"> for you</span></h1>
      <p class="sub">I build things for a living — but this is the first time I built something because of a feeling.</p>
    </div>
    <div class="photo-wrap">
      <div class="card-stack" id="cardStack"></div>
    </div>
  </div>
</header>

<!-- LETTER -->
<section class="letter" id="letter">
  <div class="petal-field" id="petalField"></div>
  <div class="wrap reveal">
    <div class="letter-card">
      <svg class="corner-flourish tl" width="72" height="72" viewBox="0 0 100 100" fill="none">
        <path d="M6,94 C6,58 22,48 16,18 C13,4 27,1 38,9" stroke="var(--rose-deep)" stroke-width="1.4" stroke-linecap="round" opacity=".4"/>
        <path d="M16,52 C27,47 32,37 26,29" stroke="var(--gold)" stroke-width="1.2" stroke-linecap="round" opacity=".45"/>
        <circle cx="26" cy="29" r="3" fill="var(--rose)" opacity=".5"/>
        <circle cx="38" cy="9" r="2.5" fill="var(--gold)" opacity=".55"/>
      </svg>
      <svg class="corner-flourish br" width="72" height="72" viewBox="0 0 100 100" fill="none">
        <path d="M6,94 C6,58 22,48 16,18 C13,4 27,1 38,9" stroke="var(--rose-deep)" stroke-width="1.4" stroke-linecap="round" opacity=".4"/>
        <path d="M16,52 C27,47 32,37 26,29" stroke="var(--gold)" stroke-width="1.2" stroke-linecap="round" opacity=".45"/>
        <circle cx="26" cy="29" r="3" fill="var(--rose)" opacity=".5"/>
        <circle cx="38" cy="9" r="2.5" fill="var(--gold)" opacity=".55"/>
      </svg>

      <div class="letter-mark">a simple note before anything else</div>
      <p>I'm not great at saying things out loud without overthinking every word first. So I did the thing I'm actually good at instead. I wrote it in code.</p>
      <p>Maybe I'm no one to you yet. We're just two random people who happened to cross paths but I don't think it was really an accident. I guess there was a reason behind it, even if neither of us knows it yet.</p>
      <p>Thank you for accepting my message, and for reading this far. I hope you can see the value in it, and see me for who I actually am. And I really hope we can make this work. But whatever your decision is, I'll respect it and completely understand. So, no worries!</p>
      <p>This page isn't for anyone else. It's just a small, slightly nerdy way of saying I've been enjoying getting to know you :></p>
      <p class="sign">— hafiq, 07/09/2026</p>
    </div>
  </div>
</section>


<!-- GALLERY -->
<section class="gallery" id="gallery">
  <div class="wrap reveal">
    <div class="gallery-head">
      <h2 style="font-family:var(--serif); font-weight:600; font-size:clamp(28px,4vw,38px); margin:0 0 14px;">A little proof I'm real</h2>
      <p style="color:var(--text-muted); font-size:16px; margin:0; max-width:480px;">Some random pictures of me :3</p>
    </div>
    <div class="polaroids" id="polaroids"></div>
  </div>
</section>

<!-- ASK -->
<section class="ask" id="ask">
  <div class="butterfly-field" id="butterflyField"></div>
  <div class="wrap reveal">
    <div class="ask-head">
      <h2>So, Farah....</h2>
      <div class="flourish">
        <span></span>
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4">
          <circle cx="12" cy="12" r="3"/>
          <path d="M12 2v5M12 17v5M2 12h5M17 12h5" stroke-linecap="round"/>
        </svg>
        <span></span>
      </div>
      <p>would you like to go on a date with me?</p>
    </div>
    <div class="stage" id="stage">
      <button class="btn btn-yes" id="yesBtn">Yes, I'd love to</button>
      <button class="btn btn-no" id="noBtn">Not yet</button>
    </div>
    <div class="dodge-caption" id="dodgeCaption"></div>
  </div>
</section>

<!-- CONTACT -->
<section class="contact" id="contact">
  <div class="wrap reveal">
    <h2>whenever you're free</h2>
    <p>My phone's basically always near me.</p>
    <div class="contact-links">
      <a href="tel:013567871">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24c1.12.37 2.33.57 3.57.57a1 1 0 0 1 1 1V20a1 1 0 0 1-1 1C10.61 21 3 13.39 3 4a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.24.2 2.45.57 3.57a1 1 0 0 1-.25 1.02l-2.2 2.2z"/></svg>
        013-567871
      </a>
      <a href="https://instagram.com/amrlhafiq_" target="_blank" rel="noopener">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r="1.1" fill="currentColor" stroke="none"/></svg>
        @amrlhafiq
      </a>
      <a href="https://tiktok.com/@amrlhafiq" target="_blank" rel="noopener">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M16.6 5.82c-.79-.68-1.29-1.66-1.35-2.75h-3.03v13.3c0 1.5-1.22 2.72-2.72 2.72a2.72 2.72 0 0 1-2.72-2.72 2.72 2.72 0 0 1 2.72-2.72c.28 0 .55.04.8.12v-3.08a5.82 5.82 0 0 0-.8-.06 5.75 5.75 0 0 0-5.75 5.75A5.75 5.75 0 0 0 9.5 22.11a5.75 5.75 0 0 0 5.75-5.75V9.01a7.62 7.62 0 0 0 4.4 1.4V7.38a4.86 4.86 0 0 1-3.05-1.56z"/></svg>
        @amrlhafiq
      </a>
    </div>
  </div>
</section>

<footer>made by hafiq, for farah — with more effort than any resume he's ever written</footer>

<!-- celebration overlay -->
<div class="celebrate-overlay" id="celebrateOverlay">
  <div class="celebrate-card">
    <h3>She said yes 🤍</h3>
    <p id="celebrateMsg">Okay, now I actually have to plan something good. We'll discuss this later :></p>
    <button id="closeCelebrate">Close</button>
  </div>
</div>

<script>
// ---------- progress bar ----------
const progress = document.getElementById('progress');
function updateProgress(){
  const h = document.documentElement;
  const scrolled = h.scrollTop / (h.scrollHeight - h.clientHeight) * 100;
  progress.style.width = (scrolled || 0) + '%';
}
document.addEventListener('scroll', updateProgress);

// ---------- reveal on scroll ----------
const reveals = document.querySelectorAll('.reveal');
const io = new IntersectionObserver((entries)=>{
  entries.forEach(e=>{ if(e.isIntersecting) e.target.classList.add('in'); });
}, { threshold: 0.15 });
reveals.forEach(el=>io.observe(el));

// ---------- stars ----------
const starsField = document.getElementById('stars');
for(let i=0;i<50;i++){
  const s = document.createElement('span');
  s.style.left = Math.random()*100 + '%';
  s.style.top = Math.random()*100 + '%';
  s.style.animationDelay = (Math.random()*4) + 's';
  starsField.appendChild(s);
}

// ---------- falling petals (letter section) ----------
const petalField = document.getElementById('petalField');
const reduceMotionGlobal = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
if(petalField && !reduceMotionGlobal){
  const petalCount = 12;
  for(let i=0;i<petalCount;i++){
    const p = document.createElement('span');
    p.className = 'petal';
    p.style.left = Math.random()*100 + '%';
    p.style.width = (7 + Math.random()*6) + 'px';
    p.style.height = p.style.width;
    p.style.animationDuration = (9 + Math.random()*8) + 's';
    p.style.animationDelay = (Math.random()*10) + 's';
    p.style.opacity = (0.3 + Math.random()*0.3).toFixed(2);
    p.style.background = i % 3 === 0 ? 'var(--gold)' : 'var(--rose-deep)';
    petalField.appendChild(p);
  }
}

// ---------- flying butterflies (ask section) ----------
const butterflyField = document.getElementById('butterflyField');
if(butterflyField && !reduceMotionGlobal){
  const flightPaths = ['flyA', 'flyB', 'flyC'];
  const butterflyCount = 5;
  for(let i=0;i<butterflyCount;i++){
    const wrap = document.createElement('div');
    wrap.className = 'butterfly-wrap';
    wrap.style.left = (5 + Math.random()*85) + '%';
    wrap.style.top = (10 + Math.random()*75) + '%';
    const path = flightPaths[i % flightPaths.length];
    wrap.style.animation = `${path} ${11 + Math.random()*7}s ease-in-out infinite`;
    wrap.style.animationDelay = (Math.random()*6) + 's';

    const size = 22 + Math.random()*14;
    const primary = i % 2 === 0 ? 'var(--rose)' : 'var(--gold)';
    const secondary = i % 2 === 0 ? 'var(--gold)' : 'var(--rose)';
    wrap.innerHTML = `
      <svg class="butterfly" width="${size}" height="${size*0.66}" viewBox="0 0 60 40">
        <g class="wing-left"><path d="M30,20 C10,0 -5,5 5,20 C-5,35 10,40 30,20 Z" fill="${primary}" opacity="0.8"/></g>
        <g class="wing-right"><path d="M30,20 C50,0 65,5 55,20 C65,35 50,40 30,20 Z" fill="${secondary}" opacity="0.8"/></g>
        <line x1="30" y1="9" x2="30" y2="31" stroke="#150a10" stroke-width="1.5" stroke-linecap="round"/>
      </svg>
    `;
    butterflyField.appendChild(wrap);
  }
}

// ---------- hero card stack ----------
// Uses images/f1.jpeg, images/f2.jpeg, images/f3.jpeg — from your public/images folder.
const cardStack = document.getElementById('cardStack');
if(cardStack){
  const heroCards = [
    { src:'images/f1.jpeg' },
    { src:'images/f2.jpeg' },
    { src:'images/f3.jpeg' }
  ];
  const slots = ['slot-left', 'slot-center', 'slot-right'];

  const cardEls = heroCards.map((c, i)=>{
    const el = document.createElement('div');
    el.className = 'stack-card ' + slots[i];
    el.innerHTML = `
      <img src="${c.src}" alt="photo of Hafiq" loading="lazy"
        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
      <div class="fallback" style="display:none;">add ${c.src}</div>
    `;
    cardStack.appendChild(el);
    return el;
  });

  // order[0] is in slot-left, order[1] in slot-center, order[2] in slot-right
  let order = [0, 1, 2];
  if(!reduceMotionGlobal){
    setInterval(()=>{
      order = [order[1], order[2], order[0]];
      order.forEach((cardIdx, slotIdx)=>{
        cardEls[cardIdx].className = 'stack-card ' + slots[slotIdx];
      });
    }, 2800);
  }
}

// ---------- polaroid gallery ----------
// Replace these captions with whatever you like. Photos load from ./images/a1.jpeg ... a6.jpeg
const photoCaptions = [
  "refal hady look-alike",
  "manifesting waterfall together :>",
  "young, dumb and broke uncle",
  "Actually cooking",
  "technical guy sometimes",
  "A rider while chasing an assignment due date"
];
const polaroidsEl = document.getElementById('polaroids');
photoCaptions.forEach((caption, idx)=>{
  const n = idx+1;
  const card = document.createElement('div');
  card.className = 'polaroid';
  card.innerHTML = `
    <div class="frame">
      <img src="images/a${n}.jpeg" alt="photo ${n}" loading="lazy"
        onerror="this.style.display='none'; this.parentElement.querySelector('.fallback').style.display='flex';">
      <div class="fallback" style="display:none; align-items:center; justify-content:center; height:100%;">add images/a${n}.jpeg</div>
    </div>
    <div class="cap">${caption}</div>
  `;
  // trigger fallback check after load attempt
  polaroidsEl.appendChild(card);
});
// show fallback immediately for any image missing (in case onerror already fired before append in some browsers)
setTimeout(()=>{
  document.querySelectorAll('.polaroid img').forEach(img=>{
    if(!img.complete || img.naturalWidth === 0){
      img.style.display = 'none';
      img.parentElement.querySelector('.fallback').style.display = 'flex';
    }
  });
}, 300);

// ---------- ask her: dodging "no" button ----------
const stage = document.getElementById('stage');
const yesBtn = document.getElementById('yesBtn');
const noBtn = document.getElementById('noBtn');
const dodgeCaption = document.getElementById('dodgeCaption');

const captions = [
  "hmm, not quite",
  "try again?",
  "so close",
  "nope, still no",
  "you'll have to catch it",
  "getting warmer... or not",
  "okay this is just funny now",
  "I admire the persistence"
];
let dodgeCount = 0;
let noIsFleeing = false;

function activateFleeMode(){
  const rect = stage.getBoundingClientRect();
  const btnRect = noBtn.getBoundingClientRect();
  noBtn.style.position = 'absolute';
  noBtn.style.left = (btnRect.left - rect.left) + 'px';
  noBtn.style.top = (btnRect.top - rect.top) + 'px';
  noIsFleeing = true;
}

function dodge(){
  if(!noIsFleeing) activateFleeMode();
  const stageRect = stage.getBoundingClientRect();
  const btnW = noBtn.offsetWidth;
  const btnH = noBtn.offsetHeight;
  const maxX = Math.max(stageRect.width - btnW, 0);
  const maxY = Math.max(stageRect.height - btnH, 0);
  const newX = Math.random() * maxX;
  const newY = Math.random() * maxY;
  noBtn.style.left = newX + 'px';
  noBtn.style.top = newY + 'px';

  dodgeCount++;
  dodgeCaption.textContent = captions[Math.min(dodgeCount-1, captions.length-1)];

  // grow the yes button a little each time, as gentle encouragement
  const scale = Math.min(1 + dodgeCount * 0.03, 1.35);
  yesBtn.style.transform = `scale(${scale})`;
}

noBtn.addEventListener('click', (e)=>{ e.preventDefault(); dodge(); });
noBtn.addEventListener('touchstart', (e)=>{ e.preventDefault(); dodge(); }, {passive:false});

// ---------- yes: celebrate ----------
const overlay = document.getElementById('celebrateOverlay');
yesBtn.addEventListener('click', ()=>{
  overlay.classList.add('show');
  launchConfetti();
});
document.getElementById('closeCelebrate').addEventListener('click', ()=>{
  overlay.classList.remove('show');
});

function launchConfetti(){
  const colors = ['#E0879A', '#CFA24C', '#FAF3EC', '#C65E76'];
  for(let i=0;i<90;i++){
    const piece = document.createElement('div');
    piece.className = 'confetti';
    const size = 6 + Math.random()*6;
    piece.style.width = size + 'px';
    piece.style.height = (size*0.4) + 'px';
    piece.style.background = colors[Math.floor(Math.random()*colors.length)];
    piece.style.left = Math.random()*100 + 'vw';
    const duration = 2.2 + Math.random()*1.6;
    const rotation = Math.random()*360;
    piece.style.transform = `rotate(${rotation}deg)`;
    piece.style.transition = `transform ${duration}s ease-in, top ${duration}s ease-in, opacity ${duration}s ease-in`;
    document.body.appendChild(piece);
    requestAnimationFrame(()=>{
      piece.style.top = (100 + Math.random()*20) + 'vh';
      piece.style.transform = `rotate(${rotation + 360 + Math.random()*360}deg)`;
      piece.style.opacity = '0.15';
    });
    setTimeout(()=> piece.remove(), duration*1000 + 200);
  }
}
</script>

</body>
</html>