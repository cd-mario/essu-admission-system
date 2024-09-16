

<template>
    <div class="home">
      <div class="overlay">
        <div class="home-title">
          <h1 class="title">2025 <br> SCHOOL <br> <span class="yellow">ADMISSION <br> SYSTEM</span></h1>
          <button class="learn">Learn more</button>
        </div>
      </div>
      <div class="statistics">
        <div class="legacy">
          <h1>Legacy ni icy pangit</h1>
        </div>
      </div>
    </div>
</template>
<style scoped>
 .home {
  --large: 5rem;
  --medium: 2rem;
  --normal: 1rem;
  --small: 0.7rem;
}

  .home {
    background-image: url('../assets/image/ESSU-campus.jpg');
    height: 100vh;
    background-repeat: no-repeat;
    background-size: cover;
    border-bottom: 2rem solid #161b22;
  }
  .overlay {
    width: 100%;
    height: 100%;
    background-color: rgba(4, 56, 2, 0.6);
    overflow: hidden;
  }
  .title {
    line-height: 5.5rem;
    font-size: var(--large);
    color: #ecf2f8;
    text-shadow: 6px 10px 5px #000, 3px 3px 5px #000;
  }
  .home-title {
    position: relative;
    left: 9rem;
    top: 7rem;  
  }
  .yellow {
    color: yellow;
  }
  .learn {
    position: relative;
    top: 1.9rem;
    padding: 0.8rem 3.5rem;
    left: 0.9rem;
    font-weight: 700;
    border-radius: 1.4rem;
    text-transform: uppercase;
    background: transparent;
    color: white;
    border: 2px solid white;
    box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
  }
  .learn:hover {
    cursor: pointer;
    border: 3px solid white;
  }
  .statistics {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    grid-auto-rows: minmax(5rem, auto);
    background: #161b22;
    height: 90vh;
    padding-top: 2.5rem;
  }
  .legacy {
    grid-column: 1 / 6;
    border: 1px solid white;

  }
</style>
