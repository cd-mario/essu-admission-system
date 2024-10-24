
<template>
  <div class="superwrapper">
    <div class="overlay">
      <div class="wrapper">
        <div class="title">
            <h1><span class="highlight px-3">2024-2025</span> <br> ESSU Admission <br> System</h1>
            <h5>Secure your application here at <span class="highlight px-1">Eastern Samar State University</span>. We offer innumerable opportunities for aspiring students.</h5>
            <div class="buttons">
              <button type="button" class="btn btn-outline-success">Enroll</button>
              <button type="button" class="btn btn-primary">Learn more</button>
            </div>
            <small>*Our admission process is designed to be <strong>simple</strong> and <strong>efficient</strong>, ensuring that your journey with us begins smoothly.</small>
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
  }
  .wrapper {
    width: 100%;
    height: 100%;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-auto-rows: minmax(3rem, auto);
    padding: 4.5rem 4rem;
  }
  .title {
    padding: 1rem;
    grid-column: 1 / 4;

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
    background: #014422;
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
  .buttons .btn-primary {
    margin-left: 1rem;
  }
  .overlay {
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
  }
</style>
