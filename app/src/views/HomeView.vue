
<template>
  <div class="superwrapper">
    <div class="overlay">
      <div class="wrapper">
        <div class="title">
            <h1><span class="highlight px-3">2024-2025</span> <br> ESSU Admission <br> System</h1>
            <h5>In <span class="highlight px-1">Eastern Samar State University</span>, we offer innumerable opportunities for aspiring students.</h5>
            <div class="buttons">
              <button type="button" class="btn btn-outline-success">Enroll</button>
              <RouterLink :to="{ name: 'Procedure'}">
                <button type="button" class="btn btn-info">Learn more</button>
              </RouterLink>
            </div>
            <small>*Our admission process is designed to be <strong>simple</strong> and <strong>efficient</strong>, ensuring that your journey with us begins smoothly.</small>
        </div>
        <div class="features">
          <RouterLink :to="{ name: 'Procedure'}" class="nav-link">
            <h2>Admission Process</h2>
          </RouterLink>
          <hr>
          <ol>
            <li>
              <span>Register online</span>
            </li>
            <hr>
            <li>
              <span>Login account</span>
            </li>
            <hr>
            <li>
              <span>Apply online</span>
            </li>
            <hr>
            <li>
              <span>Validation of credentials</span>
            </li>
            <hr>
            <li>
              <span>Rejection/Approval of application</span>
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
  .superwrapper {
    background-image: url('../assets/ESSU-campus.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    color: #F0f0E1;
    height: 100vh;
  }
  .wrapper {
    width: 100%;
    height: 100%;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: minmax(3rem, auto);
  }
  .title {
    padding: 1rem;
    grid-column: 1 / 4;
    padding: 6rem 1.5rem 6rem 4.5rem;
  }
  .title h1 {
    text-transform: uppercase;
    font-weight: 900;
    font-size: 4.5rem;
  }
  .title h5 {
    font-size: 1rem;
    font-weight: 400;
  }
  .title small {
    font-weight: 300;
    font-size: 0.7rem;
    position: relative;
    top: 1rem;
  }
  .highlight {
    background: #4b6043;
  }
  .yellow {
    color: #014422;
  }
  .buttons {
    padding: 1rem 0 0.3rem 0;
  }
  .buttons button {
    padding: 0.7rem 3rem;
  }
  .buttons .btn-info {
    margin-left: 1rem;
  }
  .overlay {
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
  }
  .features {
    grid-column: 4 / 5;
    grid-row: 1;
    border: 1px solid rgba(255, 255, 255, 0.4);
    margin: 6rem 3rem 5rem 2rem;
    width: 25rem;
    border-radius: 1rem;
    padding: 2rem;
  }
  .features:hover {
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    border: 2px solid rgba(255, 255, 255, 0.5);
  }
  .features h2 {
    font-weight: 300;
    font-size: 2rem;
    text-align: center;
    color: #ffee8c;
    padding-bottom: 0;
  }
  .features h2:hover {
    font-weight: 400;
  }
  .features li {
    margin-top: 1.5rem;
    font-weight: 200;
    color: white;
  }
  .features li span {
    position: relative;
    left: 0.9rem;
  }
  .features li::marker {
    color: #ffee8c;
    font-size: 1.4rem;
    font-weight: 700;
  }
  a:hover {
    cursor: pointer;
  }
</style>
