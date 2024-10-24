
<template>
  <div class="superwrapper">
    <div class="overlay">
      <div class="wrapper">
        <div class="title">
            <h1><span class="highlight px-3">2024-2025</span> <br> ESSU Admission <br> System</h1>
            <h5>Secure your application here at <span class="yellow">Eastern Samar State University</span>. We offer innumerable opportunities for aspiring students.</h5>
            <div class="buttons">
              <button type="button" class="btn btn-outline-success">Enroll</button>
              <button type="button" class="btn btn-secondary">Learn more</button>
            </div>
            <p>*Our admission process is designed to be <strong>simple</strong> and <strong>efficient</strong>, ensuring that your journey with us begins smoothly.</p>
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
  }
  .wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-auto-rows: minmax(3rem, auto);
    padding: 4.5rem 4rem;
  }
  .title {
    padding: 1rem;
    grid-column: 1 / 3;

  }
  .title h1 {
    text-transform: uppercase;
    font-weight: 900;
    font-size: 4.5rem;
    color: #014422;
  }
  .title h5 {
    font-weight: 700;
  }
  .title p {
    font-weight: 500;
    font-size: 0.6rem;
  }
  .highlight {
    background: #ffee8c;
  }
  .yellow {
    color: #014422;
  }
  .buttons {
    padding: 1rem 0 0.3rem 0;
  }
  .buttons button {
    padding: 0.6rem 2rem;
  }
  .buttons .btn-secondary {
    margin-left: 1rem;
  }
  .overlay {
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
  }
</style>
