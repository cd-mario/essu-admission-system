<template>
  <div class="container p-5">
    <h1 class="title">Admission Procedure</h1>
    <div class="standards">
      <h3 class="title-2">Admission Process</h3>
      <div class="card">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> 
            <span class="num-list">1.</span> 
          </li>
          <li class="list-group-item">
            <span class="num-list">2.</span> All prospective college students will be required to complete screening and testing.
          </li>
          <li class="list-group-item">
            <span class="num-list">3.</span> Students who fulfill the admission criteria and succeed in the entrance exam are eligible for enrollment.
          </li>
        </ul>
      </div>
    </div>
    <div class="standards">
      <h3 class="title-2">Entrance standards</h3>
      <div class="card">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> 
            <span class="num-list">1.</span> The University accepts applications from all high school graduates who meet the necessary qualifications and GPA requirements.
          </li>
          <li class="list-group-item">
            <span class="num-list">2.</span> All prospective college students will be required to complete screening and testing.
          </li>
          <li class="list-group-item">
            <span class="num-list">3.</span> Students who fulfill the admission criteria and succeed in the entrance exam are eligible for enrollment.
          </li>
        </ul>
      </div>
    </div>
    <div class="standards">
      <h3 class="title-2">Admission Requirements</h3>
      <div class="card">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"> 
            <span class="num-list">1.</span> Duly certified (by Principal or his / her authorized representative) Xerox copy of High School Report Card / Form 138 showing at least up to 2nd grading period.
          </li>
          <li class="list-group-item">
            <span class="num-list">2.</span> GPA of 80% or better with no grades lower than 80 in English, Math, Science.
          </li>
          <li class="list-group-item">
            <span class="num-list">3.</span> 3 pieces of recent 2x2 clear close-up ID picture.
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<style scoped>

  .container {
    text-align: center;
  }
  .title {
    color: black;  
    font-weight: 700;
    border-bottom: 4px solid #014422;
    width: fit-content;
    margin: 0 auto;
    padding-bottom: 1rem;
  }
  .standards {
    margin: 3.4rem auto 0.5rem auto;
    text-align: left;
    width: 44rem;
  }
  .title-2 {
    font-size: 1.3rem;
    color: #014422;
  }
  .card {
    width: 100%;
    margin: 0 auto;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
  }
  .card .list {
    position: relative;
    left: 2rem;
    padding: 1rem;
  }
  .num-list {
    position: absolute;
    left: 1.2rem;
    top: auto;
    color:#014422;
    font-weight: 600;
  }
  .list-group-item {
    padding: 2rem 2rem 2rem 4rem;
    line-height: 2rem;
  }
  ul li:nth-child(even) {
    background-color: rgba(0, 0, 0, 0.1);
  }
</style>
