<template>
  <div class="container p-5">
    <h1 class="title">Admission Procedure</h1>

    
    <div class="standards">
      <h3>Entrance standards</h3>
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
    margin: 3.4rem auto;
    text-align: left;
    width: 44rem;
  }
  .standards h3 {
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
    border-bottom: 1px solid rgba;
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
</style>
