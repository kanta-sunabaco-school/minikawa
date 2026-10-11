<?php
/*
 * Template Name: ミニかわロボ大会
 * Template Post Type: page
 */

get_header();
?>

<style>
@import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Noto+Sans+JP:wght@400;500;700;900&display=swap");







:root {



  font-family: "Noto Sans JP", sans-serif;



  color: #102b3a;



  background: #f5f1e8;



  font-synthesis: none;



}







* {



  box-sizing: border-box;



}







html {



  scroll-behavior: smooth;



}







body {



  margin: 0;



  min-width: 320px;



  background: #f5f1e8;



}







a {



  color: inherit;



  text-decoration: none;



}







img {



  display: block;



  width: 100%;



}







.site-header {



  height: 88px;



  padding: 0 4vw;



  display: flex;



  align-items: center;



  justify-content: space-between;



  border-bottom: 1px solid rgba(16, 43, 58, 0.16);



  background: #f5f1e8;



  position: relative;



  z-index: 20;



}







.brand {



  display: flex;



  align-items: center;



  gap: 12px;



  font-family: "Archivo Black", sans-serif;



  font-size: 13px;



  line-height: 1.05;



  letter-spacing: -0.02em;



}







.brand-mark {



  width: 38px;



  height: 38px;



  border: 3px solid #102b3a;



  border-radius: 8px;



  display: flex;



  align-items: center;



  justify-content: center;



  gap: 5px;



  position: relative;



}







.brand-mark::before {



  content: "";



  position: absolute;



  width: 10px;



  height: 5px;



  border: 3px solid #102b3a;



  border-bottom: 0;



  top: -8px;



  border-radius: 4px 4px 0 0;



}







.brand-mark span {



  width: 6px;



  height: 6px;



  border-radius: 50%;



  background: #ff5c35;



}







nav {



  display: flex;



  gap: 36px;



  font-size: 13px;



  font-weight: 700;



}







nav a {



  transition: color 0.2s ease;



}







nav a:hover {



  color: #ff5c35;



}







.header-cta,



.button {



  display: inline-flex;



  align-items: center;



  justify-content: center;



  gap: 20px;



  font-weight: 900;



  transition: transform 0.2s ease, box-shadow 0.2s ease;



}







.header-cta {



  padding: 13px 20px;



  border: 2px solid #102b3a;



  box-shadow: 4px 4px 0 #102b3a;



  background: #ffd84d;



  font-size: 13px;



}







.header-cta:hover,



.button:hover {



  transform: translate(-2px, -2px);



}







.hero {



  min-height: calc(100vh - 88px);



  position: relative;



  overflow: hidden;



  display: grid;



  grid-template-columns: 54% 46%;



  padding-bottom: 54px;



}







.hero-grid {



  position: absolute;



  inset: 0;



  opacity: 0.12;



  background-image:



    linear-gradient(#102b3a 1px, transparent 1px),



    linear-gradient(90deg, #102b3a 1px, transparent 1px);



  background-size: 48px 48px;



  mask-image: linear-gradient(to right, black, transparent 75%);



}







.hero-copy {



  position: relative;



  z-index: 2;



  padding: clamp(60px, 9vw, 132px) 4vw 80px;



}







.hero-label {



  display: flex;



  gap: 8px;



  margin-bottom: 36px;



}







.hero-label span {



  padding: 7px 12px;



  border: 1px solid #102b3a;



  font-size: 12px;



  font-weight: 700;



  background: #f5f1e8;



}







.hero-label span:last-child {



  background: #102b3a;



  color: white;



}







.hero-kicker,



.eyebrow {



  font-family: "Archivo Black", sans-serif;



  letter-spacing: 0.08em;



  font-size: 12px;



}







.hero h1 {



  margin: 10px 0 28px;



  font-size: clamp(52px, 6.2vw, 104px);



  font-weight: 900;



  line-height: 1.05;



  letter-spacing: -0.075em;



}







.hero h1 span {



  color: #ff5c35;



  -webkit-text-stroke: 2px #102b3a;



  text-shadow: 5px 5px 0 #ffd84d;



}







.hero-lead {



  font-size: 15px;



  font-weight: 500;



  line-height: 2;



}







.hero-actions {



  display: flex;



  align-items: center;



  gap: 32px;



  margin-top: 38px;



}







.button {



  min-height: 58px;



  padding: 0 28px;



}







.button-primary {



  color: white;



  background: #ff5c35;



  border: 2px solid #102b3a;



  box-shadow: 6px 6px 0 #102b3a;



}







.text-link {



  font-size: 13px;



  font-weight: 900;



  border-bottom: 2px solid #102b3a;



  padding-bottom: 5px;



}







.hero-visual {



  position: relative;



  min-height: 650px;



  padding: clamp(60px, 9vw, 132px) 2vw 80px 0vw;



  /* background: #0a78b5;



  clip-path: polygon(12% 0, 100% 0, 100% 100%, 0 100%); */



}







.photo-frame {



  position: absolute;



  inset: 10% 0 0 13%;



  /* border: 10px solid #102b3a; */



  border-right: 0;



  overflow: hidden;



  /* transform: rotate(2deg); */



}







.photo-frame::after {



  content: "";



  position: absolute;



  inset: 0;



  background: linear-gradient(20deg, rgba(16, 43, 58, 0.35), transparent 55%);



}







.photo-frame img {



  height: 100%;



  object-fit: cover;



  object-position: 48% center;



}







.date-card {



  position: absolute;



  z-index: 5;



  left: 4%;



  top: 8%;



  width: 180px;



  padding: 18px 18px 15px;



  background: #ffd84d;



  border: 3px solid #102b3a;



  box-shadow: 7px 7px 0 #102b3a;



  transform: rotate(-4deg);



}







.date-card p {



  margin: 0;



  font: 10px "Archivo Black", sans-serif;



  letter-spacing: 0.1em;



}







.date-card strong {



  display: block;



  font: 45px/1 "Archivo Black", sans-serif;



  letter-spacing: -0.08em;



}







.date-card span {



  font: 15px "Archivo Black", sans-serif;



}







.date-card a {



  display: flex;



  align-items: center;



  justify-content: space-between;



  margin-top: 14px;



  padding: 10px 12px;



  background: #ff5c35;



  color: white;



  border: 2px solid #102b3a;



  font-size: 12px;



  font-weight: 900;



  box-shadow: 3px 3px 0 #102b3a;



}







.hero-sticker {



  position: absolute;



  z-index: 5;



  right: 6%;



  bottom: 7%;



  width: 120px;



  height: 120px;



  border-radius: 50%;



  color: #ffd84d;



  background: #ff5c35;



  border: 4px solid #102b3a;



  display: flex;



  flex-direction: column;



  align-items: center;



  justify-content: center;



  font: 14px "Archivo Black", sans-serif;



  transform: rotate(10deg);



}







.hero-sticker svg {



  width: 27px;



}







.dots {



  position: absolute;



  right: 5%;



  top: 4%;



  width: 70px;



  height: 70px;



  background-image: radial-gradient(#ffd84d 3px, transparent 3px);



  background-size: 14px 14px;



}







.ticker {



  position: absolute;



  bottom: 0;



  left: 0;



  right: 0;



  height: 54px;



  background: #102b3a;



  color: #ffd84d;



  display: flex;



  align-items: center;



  overflow: hidden;



}







.ticker div {



  min-width: max-content;



  display: flex;



  align-items: center;



  gap: 38px;



  padding-left: 20px;



  font: 18px "Archivo Black", sans-serif;



  letter-spacing: 0.06em;



  animation: ticker 24s linear infinite;



}







.ticker svg {



  width: 14px;



}







@keyframes ticker {



  to { transform: translateX(-50%); }



}







.container {



  width: min(1180px, 90%);



  margin: 0 auto;



}







.section {



  padding: 120px 0;



}







.section-title {



  display: flex;



  align-items: flex-start;



  gap: 24px;



  margin-bottom: 70px;



}







.section-title h2,



.workshop h2,



.closing h2 {



  margin: 4px 0 0;



  font-size: clamp(38px, 5vw, 68px);



  line-height: 1.15;



  letter-spacing: -0.055em;



  font-weight: 900;



}







.section-index {



  width: 52px;



  height: 52px;



  flex: none;



  display: grid;



  place-items: center;



  background: #ff5c35;



  color: white;



  font: 16px "Archivo Black", sans-serif;



  border: 2px solid #102b3a;



  box-shadow: 4px 4px 0 #102b3a;



  transform: rotate(-5deg);



}







.section-title p {



  margin: 0;



  color: #0a78b5;



}







.about {



  background: #fffdf7;



}







.about-layout {



  display: grid;



  grid-template-columns: 44% 56%;



  align-items: center;



  gap: 8%;



}







.robot-illustration {



  height: 410px;



  position: relative;



  background: #ffd84d;



  border: 3px solid #102b3a;



  overflow: hidden;



}







.robot-body {



  position: absolute;



  width: 210px;



  height: 160px;



  left: 50%;



  top: 42%;



  transform: translate(-50%, -50%) rotate(-3deg);



  border: 10px solid #102b3a;



  border-radius: 30px;



  background: #0a78b5;



  box-shadow: inset 0 -25px 0 rgba(16, 43, 58, 0.2);



}







.antenna {



  position: absolute;



  left: 50%;



  top: 58px;



  height: 55px;



  width: 8px;



  background: #102b3a;



  transform: rotate(7deg);



}







.antenna::before {



  content: "";



  width: 22px;



  height: 22px;



  border-radius: 50%;



  background: #ff5c35;



  border: 5px solid #102b3a;



  position: absolute;



  left: -7px;



  top: -14px;



}







.eye {



  position: absolute;



  top: 42px;



  width: 30px;



  height: 30px;



  background: #ffd84d;



  border: 7px solid #102b3a;



  border-radius: 50%;



}







.eye.left { left: 45px; }



.eye.right { right: 45px; }







.robot-number {



  position: absolute;



  bottom: 18px;



  left: 83px;



  color: white;



  font: 24px "Archivo Black", sans-serif;



}







.robot-leg {



  position: absolute;



  top: 235px;



  width: 54px;



  height: 100px;



  border: 9px solid #102b3a;



  background: #ff5c35;



}







.leg-left { left: calc(50% - 85px); transform: rotate(10deg); }



.leg-right { right: calc(50% - 85px); transform: rotate(-10deg); }







.motion-line {



  position: absolute;



  height: 8px;



  width: 70px;



  background: #102b3a;



  transform: rotate(-20deg);



}







.line-one { left: 20px; top: 90px; }



.line-two { right: 15px; bottom: 85px; width: 90px; }







.about-copy {



  max-width: 620px;



}







.large-copy {



  font-size: clamp(25px, 3vw, 38px);



  font-weight: 900;



  line-height: 1.5;



  letter-spacing: -0.04em;



  margin: 0 0 30px;



}







.large-copy em {



  color: #ff5c35;



  font-style: normal;



  background: linear-gradient(transparent 72%, #ffd84d 0);



}







.about-copy > p:not(.large-copy) {



  line-height: 2.1;



  font-size: 15px;



}







.creator-credit {



  margin-top: 28px;



  padding: 20px;



  border: 2px solid #102b3a;



  background: #dff3fa;



}







.creator-credit p {



  margin: 0 0 12px;



  font-size: 13px;



  font-weight: 900;



}







.creator-credit div {



  display: flex;



  flex-wrap: wrap;



  gap: 10px 22px;



}







.creator-credit a,



.info-list a {



  color: #0a78b5;



  font-size: 12px;



  font-weight: 900;



  text-decoration: underline;



  text-underline-offset: 4px;



}







.feature-row {



  display: grid;



  grid-template-columns: repeat(3, 1fr);



  margin-top: 42px;



  border-top: 2px solid #102b3a;



}







.feature-row div {



  padding: 18px 10px 0 0;



  display: flex;



  flex-direction: column;



  gap: 4px;



}







.feature-row strong {



  font: 13px "Archivo Black", sans-serif;



  color: #ff5c35;



}







.feature-row span {



  font-weight: 900;



  font-size: 18px;



}







.event {



  background: #dff3fa;



}







.event-grid {



  display: grid;



  grid-template-columns: repeat(3, 1fr);



  gap: 24px;



}







.event-card {



  min-height: aute;



  padding: 34px;



  border: 3px solid #102b3a;



  box-shadow: 8px 8px 0 #102b3a;



  display: flex;



  flex-direction: column;



  position: relative;



}







/* .event-card:nth-child(2) {



  transform: translateY(24px);



} */







.card-orange { background: #ff5c35; color: white; }



.card-blue { background: #0a78b5; color: white; }



.card-dark { background: #102b3a; color: white; box-shadow: 8px 8px 0 #ffd84d; }







.card-number {



  font: 13px "Archivo Black", sans-serif;



}







.card-icon {



  width: 94px;



  height: 94px;



  margin: 42px 0 30px;



  display: grid;



  place-items: center;



  border-radius: 50%;



  background: #ffd84d;



  color: #102b3a;



  border: 3px solid #102b3a;



  font: 20px "Archivo Black", sans-serif;



  transform: rotate(-8deg);



}







.event-card h3 {



  margin: 0 0 14px;



  font-size: 23px;



  font-weight: 900;



}







.event-card p {



  margin: 0;



  font-size: 14px;



  line-height: 1.9;



}







.workshop {



  background: #102b3a;



  color: white;



  overflow: hidden;



}







.workshop-heading {



  display: grid;



  grid-template-columns: minmax(0, 1.15fr) minmax(280px, 0.85fr);



  gap: 24px 7vw;



  align-items: end;



  margin-bottom: 58px;



}







.workshop-heading .eyebrow {



  grid-column: 1 / -1;



  margin: 0;



  color: #ffd84d;



}







.workshop-heading h2 {



  margin: 0;



}







.workshop-heading > p:not(.eyebrow) {



  margin: 0;



  color: rgba(255, 255, 255, 0.76);



  font-size: 14px;



  line-height: 2;



}







.process-row {



  grid-column: 1 / -1;



  display: flex;



  align-items: center;



  flex-wrap: wrap;



  gap: 10px;



  margin-top: 4px;



}







.process-row span {



  padding: 8px 14px;



  color: #102b3a;



  background: #ffd84d;



  border: 2px solid #fff;



  font-size: 13px;



  font-weight: 900;



}







.process-row b {



  color: #ff5c35;



  font-family: "Archivo Black", sans-serif;



}







.workshop-gallery {



  display: flex;



  gap: 24px;



  padding: 0 max(5%, calc((100vw - 1180px) / 2)) 24px;



  overflow-x: auto;



  scroll-snap-type: x mandatory;



  scrollbar-color: #ffd84d rgba(255, 255, 255, 0.14);



  scrollbar-width: thin;



}







.workshop-photo {



  flex: 0 0 min(68vw, 620px);



  margin: 0;



  scroll-snap-align: start;



}







.workshop-photo img {



  height: 410px;



  object-fit: cover;



  border: 4px solid #fff;



}







.workshop-photo:nth-child(even) img {



  border-color: #ffd84d;



}







.workshop-photo figcaption {



  display: flex;



  align-items: center;



  gap: 12px;



  margin-top: 12px;



  color: rgba(255, 255, 255, 0.62);



  font-size: 10px;



}







.workshop-photo figcaption span {



  color: #ff5c35;



  font: 15px "Archivo Black", sans-serif;



}







.gallery-hint {



  width: min(1180px, 90%);



  margin: 18px auto 0;



  color: #ffd84d;



  font-size: 12px;



  font-weight: 900;



  text-align: right;



}







.info {



  background: #fffdf7;



}







.info-panel {



  display: grid;



  grid-template-columns: 38% 62%;



  border: 3px solid #102b3a;



  box-shadow: 10px 10px 0 #0a78b5;



}







.info-date {



  background: #ffd84d;



  padding: 52px;



  border-right: 3px solid #102b3a;



}







.info-date > p {



  margin: 0 0 20px;



  font-weight: 900;



}







.info-date > div {



  display: flex;



  align-items: flex-end;



  gap: 12px;



}







.info-date strong {



  font: clamp(55px, 7vw, 92px)/0.9 "Archivo Black", sans-serif;



  letter-spacing: -0.08em;



}







.info-date span {



  font: 18px "Archivo Black", sans-serif;



  margin-bottom: 5px;



}







.info-date small {



  display: block;



  margin-top: 30px;



  font-weight: 700;



}







.info-list {



  margin: 0;



  padding: 20px 48px;



}







.info-list > div {



  display: grid;



  grid-template-columns: 110px 1fr;



  padding: 25px 0;



  border-bottom: 1px solid rgba(16, 43, 58, 0.2);



}







.info-list > div:last-child { border: 0; }







.info-list dt {



  font-weight: 900;



  color: #0a78b5;



}







.info-list dd {



  margin: 0;



  display: flex;



  flex-direction: column;



  gap: 6px;



}







.info-list dd span {



  font-size: 12px;



  color: #62727a;



}







.info-list a {



  width: fit-content;



  margin-top: 5px;



}







.info-note {



  margin: 42px auto 0;



  display: flex;



  align-items: center;



  justify-content: center;



  gap: 18px;



}







.info-note > span {



  width: 38px;



  height: 38px;



  display: grid;



  place-items: center;



  color: white;



  background: #ff5c35;



  border-radius: 50%;



  font: 19px "Archivo Black", sans-serif;



}







.info-note p {



  margin: 0;



  font-size: 13px;



  line-height: 1.7;



  font-weight: 700;



}







.closing {



  min-height: 560px;



  padding: 100px 0;



  background: #ff5c35;



  color: white;



  position: relative;



  overflow: hidden;



}







.closing .container {



  position: relative;



  z-index: 2;



}







.closing .eyebrow { color: #ffd84d; }







.closing h2 {



  margin: 20px 0 50px;



  font-size: clamp(50px, 7vw, 95px);



}







.closing h2 span {



  color: #ffd84d;



}







.button-light {



  background: white;



  color: #102b3a;



  border: 3px solid #102b3a;



  box-shadow: 6px 6px 0 #102b3a;



}







.closing-bolt {



  position: absolute;



  right: 8vw;



  top: 60px;



  color: #ffd84d;



  transform: rotate(8deg);



  opacity: 0.95;



}







.closing-bolt svg {



  width: 240px;



  height: 340px;



  filter: drop-shadow(10px 10px 0 #102b3a);



}







footer {



  min-height: 150px;



  padding: 40px 4vw;



  background: #102b3a;



  color: white;



  display: flex;



  align-items: center;



  justify-content: space-between;



}







.footer-brand .brand-mark { border-color: white; }



.footer-brand .brand-mark::before { border-color: white; }



.footer-brand .brand-mark span { background: #ffd84d; }







footer p {



  font-size: 13px;



  font-weight: 700;



}







footer small {



  color: rgba(255,255,255,.45);



  font-size: 10px;



}







@media (max-width: 900px) {



  nav { display: none; }



  .hero { grid-template-columns: 1fr; }



  .hero-copy { padding: 70px 6vw 80px; }



  .hero-visual { min-height: 560px; clip-path: none; }



  .photo-frame { inset: 7% 4% 3% 8%; border-right: 10px solid #102b3a; }



  .about-layout { grid-template-columns: 1fr; gap: 50px; }



  .robot-illustration { max-width: 520px; width: 100%; margin: auto; }



  .event-grid { grid-template-columns: 1fr; }



  .event-card { min-height: auto; }



  .event-card:nth-child(2) { transform: none; }



  .workshop-heading { grid-template-columns: 1fr; }



  .info-panel { grid-template-columns: 1fr; }



  .info-date { border-right: 0; border-bottom: 3px solid #102b3a; }



}







@media (max-width: 600px) {



  .site-header { height: 72px; }



  .header-cta { padding: 10px 12px; box-shadow: 3px 3px 0 #102b3a; }



  .header-cta span:last-child { display: none; }



  .brand { font-size: 11px; }



  .brand-mark { width: 32px; height: 32px; }



  .hero { min-height: auto; }



  .hero h1 { font-size: 48px; }



  .hero-lead br { display: none; }



  .hero-actions { flex-direction: column; align-items: flex-start; }



  .hero-visual { min-height: 470px; }



  .date-card { width: 145px; }



  .date-card strong { font-size: 35px; }



  .hero-sticker { width: 92px; height: 92px; font-size: 11px; }



  .section { padding: 84px 0; }



  .section-title { margin-bottom: 48px; gap: 16px; }



  .section-index { width: 42px; height: 42px; }



  .section-title h2 { font-size: 34px; }



  .robot-illustration { height: 330px; }



  .robot-body { transform: translate(-50%, -50%) rotate(-3deg) scale(.78); }



  .robot-leg { top: 195px; }



  .leg-left { left: calc(50% - 70px); }



  .leg-right { right: calc(50% - 70px); }



  .workshop-heading { margin-bottom: 40px; }



  .workshop-photo { flex-basis: 84vw; }



  .workshop-photo img { height: 330px; }



  .info-date { padding: 34px 26px; }



  .info-list { padding: 14px 26px; }



  .info-list > div { grid-template-columns: 1fr; gap: 10px; }



  .closing { min-height: 500px; }



  .closing-bolt { opacity: .25; right: -20px; }



  footer { flex-direction: column; align-items: flex-start; gap: 22px; }



}







@media (prefers-reduced-motion: reduce) {



  html { scroll-behavior: auto; }



  .ticker div { animation: none; }



}







/* 参加申し込み */



.entry {



  background: #ffd84d;



}







.entry-panel {



  display: grid;



  grid-template-columns: minmax(0, 1fr) auto;



  align-items: center;



  gap: 48px;



  padding: 48px 52px;



  background: #fffdf7;



  border: 3px solid #102b3a;



  box-shadow: 10px 10px 0 #102b3a;



}







.entry-copy h3 {



  margin: 0 0 14px;



  font-size: clamp(26px, 3.5vw, 42px);



  line-height: 1.35;



  letter-spacing: -0.04em;



  font-weight: 900;



}







.entry-copy p {



  margin: 0;



  max-width: 680px;



  font-size: 15px;



  line-height: 2;



}







.entry-button {



  min-width: 250px;



  min-height: 64px;



  padding: 0 28px;



  display: inline-flex;



  align-items: center;



  justify-content: space-between;



  gap: 24px;



  background: #ff5c35;



  color: white;



  border: 3px solid #102b3a;



  box-shadow: 6px 6px 0 #102b3a;



  font-weight: 900;



  transition: transform 0.2s ease, box-shadow 0.2s ease;



}







.entry-button:hover {



  transform: translate(-2px, -2px);



}







@media (max-width: 900px) {



  .entry-panel {



    grid-template-columns: 1fr;



    gap: 28px;



    padding: 38px;



  }







  .entry-button {



    width: fit-content;



  }



}







@media (max-width: 600px) {



  .entry-panel {



    padding: 26px 22px;



  }







  .entry-button {



    width: 100%;



    min-width: 0;



  }



}
</style>

<main>
<header class="site-header">



    <a class="brand" href="#top" aria-label="ミニかわロボカップ トップへ">



      <span class="brand-mark"><span></span><span></span></span>



      <span>MINI KAWA<br>ROBO CUP</span>



    </a>



    <nav aria-label="メインナビゲーション">



      <a href="#about">ミニかわロボとは</a>



      <a href="#event">大会について</a>



      <a href="#info">開催概要</a>



    </nav>



    <a class="header-cta" href="#info">大会情報を見る <span aria-hidden="true">↗</span></a>



  </header>







  <section class="hero" id="top">



    <div class="hero-grid" aria-hidden="true"></div>



    <div class="hero-copy">



      <!-- <div class="hero-label">



        <span>愛媛・今治</span>



        <span>参加費無料</span>



      </div> -->



      <p class="hero-kicker">BUILD. TRY. REBUILD.</p>



      <h1>つくって、改造して、バトル！</h1>



      <p class="hero-lead">はんだ付けから組み立て、改造、そしてバトルへ。<br>自分の手でつくったロボットと挑む、ちいさなロボコン。</p>



      <div class="hero-actions">



        <a class="button button-primary" href="#info">大会情報を見る <span aria-hidden="true">↗</span></a>



        <a class="text-link" href="#about">ミニかわロボとは？ <span>↓</span></a>



      </div>



    </div>



    <div class="hero-visual">



      <img src="<?php echo esc_url( get_template_directory_uri() . '/img/ミニかわロボ2.png' ); ?>" alt="車型ロボットを真剣な表情で製作する子ども">



      <!-- <div class="date-card">



        <p>IMABARI CUP</p>



        <strong>11.03</strong>



        <span>TUE</span>



        <a href="#info">参加受付中 <span aria-hidden="true">↗</span></a>



      </div> -->



      <!-- <div class="photo-frame">



        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/ミニかわロボ02.png' ); ?>" alt="車型ロボットを真剣な表情で製作する子ども">



      </div> -->



      <!-- <div class="hero-sticker">



        <svg viewBox="0 0 32 40" fill="none" aria-hidden="true"><path d="M19 1 3 23h11l-1 16 16-24H18l1-14Z" fill="currentColor"></path></svg>



        <span>READY?</span>



      </div> -->



      <!-- <div class="dots" aria-hidden="true"></div> -->



    </div>







  </section>







  <section class="about section" id="about">



    <div class="container">



      <div class="section-title">



        <div class="section-index">01</div>



        <div><p class="eyebrow">WHAT IS MINI KAWA ROBO?</p><h2>ミニかわロボとは？</h2></div>



      </div>



      <div class="about-layout">



        <!-- <div class="robot-illustration" aria-label="ミニかわロボのイラスト">



          <div class="antenna"></div>



          <div class="robot-body"><span class="eye left"></span><span class="eye right"></span><span class="robot-number">01</span></div>



          <div class="robot-leg leg-left"></div><div class="robot-leg leg-right"></div>



          <span class="motion-line line-one"></span><span class="motion-line line-two"></span>



        </div> -->



        <img src="<?php echo esc_url( get_template_directory_uri() . '/img/minikawa/kids09.jpg' ); ?>" alt="">



        <div class="about-copy">



          <p class="large-copy">手のひらサイズの<br><em>本格ロボットバトル</em></p>



          <p>ミニかわロボは、手のひらサイズのロボットを自分で作り、コントローラーで操作して対戦する小型ロボット競技です。 相手をひっくり返したり、フィールドの外へ押し出したりして勝敗を競います。3Dプリンタや市販のマイクロサーボなどを使い、比較的低コストかつ省スペースで製作・対戦できるのが特徴です。</p>



          <p>この規格は、本格的な対戦ロボット競技「かわさきロボット競技大会（かわロボ）」の面白さを残しつつ、「広い場所が必要」「製作費や時間がかかる」「初心者にはハードルが高い」といった課題を減らすために考案されました。コンセプトは「どこでも気軽にできる手のひらサイズの小型対戦ロボット競技」。2023年に、かわロボ参加者でもある sin1's studio の sin1さん によって提案されました。</p>



          <div class="creator-credit">



            <p>ミニかわロボ 考案・提唱：sin1（sin1's studio）</p>



            <div>



              <a href="https://sin1.studio/MiniKawaRobo/" target="_blank" rel="noopener noreferrer">ミニかわロボ公式サイト <span aria-hidden="true">↗</span></a>



              <a href="https://sin1.studio/" target="_blank" rel="noopener noreferrer">sin1's studio <span aria-hidden="true">↗</span></a>



            </div>



          </div>



          <!-- <div class="feature-row">



            <div><strong>01</strong><span>つくる</span></div>



            <div><strong>02</strong><span>改造する</span></div>



            <div><strong>03</strong><span>対戦する</span></div>



          </div> -->



        </div>



      </div>



    </div>



  </section>







  <section class="event section" id="event">



    <div class="container">



      <div class="section-title"><div class="section-index">02</div><div><p class="eyebrow">ABOUT THE EVENT</p><h2>自分の作ったロボットでバトル！</h2></div></div>







      <div class="event-grid">



        <article class="event-card card-orange"><span class="card-number">01</span><h3>つくる</h3><p>設計図を基に、部品をつなげたり、パーツを組み立てて自分のロボットをつくる！</p></article>



        <article class="event-card card-blue"><span class="card-number">02</span><h3>改造する</h3><p>独自の機構を加えたり形を変えたりして、自分だけの一台に改造！</p></article>



        <article class="event-card card-dark"><span class="card-number">03</span><h3>バトル</h3><p>コントローラーで自分のロボットを操って勝敗を競う！</p></article>



      </div>



    </div>



  </section>







  <section class="workshop section">



    <div class="container workshop-heading">



      <p class="eyebrow">KIDS AT WORK</p>



      <h2>特別な経験がなくても参加OK！</h2>



      <p>自分でつくったロボットを、自分の手で動かして戦う。思い通りに動かなくても、直して、試して、また挑む。その先にあるのがミニかわロボ大会です。上手につくれるかより、やってみたい気持ちがあれば誰でも参加して楽しむことができます。</p>



    </div>



    <div class="workshop-gallery" aria-label="ロボット製作の写真">



      <!-- <figure class="workshop-photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/minikawa/kids09.jpg' ); ?>" alt="机の上の車型ロボットにはんだ付けをする子ども"></figure> -->



      <figure class="workshop-photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/kids01.jpg' ); ?>" alt="机の上の車型ロボットにはんだ付けをする子ども"></figure>



      <figure class="workshop-photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/kids02.jpg' ); ?>" alt="机の上の車型ロボットにはんだ付けをする子ども"></figure>



      <figure class="workshop-photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/kids03.jpg' ); ?>" alt="机の上の車型ロボットにはんだ付けをする子ども"></figure>



      <figure class="workshop-photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/kids04.jpg' ); ?>" alt="机の上の車型ロボットにはんだ付けをする子ども"></figure>



      <figure class="workshop-photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/kids05.jpg' ); ?>" alt="机の上の車型ロボットにはんだ付けをする子ども"></figure>



      <figure class="workshop-photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/kids06.jpg' ); ?>" alt="机の上の車型ロボットにはんだ付けをする子ども"></figure>



      <figure class="workshop-photo"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/kids07.jpg' ); ?>" alt="机の上の車型ロボットにはんだ付けをする子ども"></figure>



    </div>



    <p class="gallery-hint">横にスワイプして写真を見る →</p>



  </section>







  <section class="entry section" id="entry">



      <div class="container">



        <div class="section-title">



          <div class="section-index">03</div>



          <div>



            <p class="eyebrow">ENTRY</p>



            <h2>参加申し込み</h2>



          </div>



        </div>







        <div class="entry-panel">



          <div class="entry-copy">



            <h3>ミニかわロボ大会に参加しよう！</h3>



            <p>



              大会への参加をご希望の方は、下記の申し込みフォームからお申し込みください。



            </p>



          </div>







          <!-- href を実際の申し込みフォームURLに変更してください -->



          <a class="entry-button" href="https://forms.gle/wA5A3qgz5BrcF1rJ6" target="_blank" rel="noopener noreferrer">



            参加申し込みフォームへ <span aria-hidden="true">↗</span>



          </a>



        </div>



      </div>



    </section>







  <section class="info section" id="info">



    <div class="container">



      <div class="section-title"><div class="section-index">03</div><div><p class="eyebrow">EVENT INFORMATION</p><h2>開催概要</h2></div></div>



      <div class="info-panel">



        <div class="info-date"><p>開催日</p><div><strong>11.03</strong><span>TUE</span></div></div>



        <dl class="info-list">



          <div><dt>会場・住所</dt><dd><strong>今治地域地場産業振興センター</strong><span>〒794-0042 愛媛県今治市旭町2丁目3-5</span></dd></div>



          <div><dt>対象・参加費</dt><dd><strong>小学生程度〜 ／ 参加費無料</strong><span>ロボットづくりや電子工作に興味のある方、ご家族での観戦も歓迎します</span></dd></div>



          <div><dt>アクセス</dt><dd><strong>今治駅から徒歩10分</strong><span>最寄りバス停「今治国際ホテル」／有料駐車場（地下1階・73台）／無料駐車場（正面玄関前）</span><a href="https://izc.or.jp/access.html" target="_blank" rel="noopener noreferrer">会場公式のアクセス情報を見る <span aria-hidden="true">↗</span></a></dd></div>



        </dl>



      </div>



      <!-- <div class="info-note"><span>!</span><p>開催時間や参加方法などの詳細は、<br>決まり次第このページでお知らせします。</p></div> -->



    </div>



  </section>







  <!-- <section class="closing">



    <div class="container"><p class="eyebrow">MAKE IT. MOVE IT. BATTLE!</p><h2>つくって、試して、強くなる。<br><span>11月3日、今治で会おう。</span></h2><a class="button button-light" href="#top">ページの先頭へ <span>↑</span></a></div>



    <div class="closing-bolt"><svg viewBox="0 0 32 40" fill="none" aria-hidden="true"><path d="M19 1 3 23h11l-1 16 16-24H18l1-14Z" fill="currentColor"></path></svg></div>



  </section> -->







  <footer>



    <!-- <div class="brand footer-brand"><span class="brand-mark"><span></span><span></span></span><span>MINI KAWA<br>ROBO CUP</span></div> -->



    <p>2026年11月3日（火）、今治地域地場産業振興センターで開催</p>



    <small>© MINI KAWA ROBO CUP IMABARI</small>



  </footer>
</main>

<?php
get_footer();
?>
