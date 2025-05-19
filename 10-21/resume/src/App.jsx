import { useState } from 'react'
import reactLogo from './assets/react.svg'
import viteLogo from '/vite.svg'
import './App.css'

function App() {


  return (
    <body>
      <div class="container">
        <h1>John Doe</h1>
        <div class="contact-info">
          <span>Email: john.doe@example.com</span>
          <span>Phone: +1 234 567 8901</span>
          <span>Location: New York, USA</span>
        </div>

        <div class="section">
          <h2>Summary</h2>
          <p>A passionate software developer with 3+ years of experience in building web applications and working with modern technologies.</p>
        </div>

        <div class="section">
          <h2>Education</h2>
          <p class="subheading">B.Tech in Computer Science - XYZ University (2018 - 2022)</p>
          <p>CGPA: 8.5/10</p>
        </div>

        <div class="section">
          <h2>Skills</h2>
          <ul>
            <li>HTML, CSS, JavaScript</li>
            <li>Python, Java</li>
            <li>React, Node.js</li>
            <li>Git, GitHub</li>
          </ul>
        </div>

        <div class="section">
          <h2>Experience</h2>
          <p class="subheading">Frontend Developer at ABC Corp (2022 - Present)</p>
          <ul>
            <li>Developed responsive user interfaces with React</li>
            <li>Collaborated with backend team to integrate REST APIs</li>
            <li>Improved website performance and accessibility</li>
          </ul>
        </div>

        <div class="section">
          <h2>Projects</h2>
          <p class="subheading">Personal Portfolio Website</p>
          <ul>
            <li>Designed and developed a portfolio using HTML, CSS, and JavaScript</li>
            <li>Deployed on GitHub Pages</li>
          </ul>
        </div>
      </div>
    </body>
  )
}

export default App
