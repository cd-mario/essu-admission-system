<template>
    <div class="wrapper">
        <div id="grid">
            <div class="sidebar">
                <h6 class="title">ESSU ADMIN</h6>
                <ul class="links">
                    <li><RouterLink :to="{ name: 'Dashboard'}" class="nav-link">Dashboard</RouterLink></li>
                    <li><RouterLink :to="{ name: 'Applicants'}" class="nav-link">Applicants</RouterLink></li>
                    <li><RouterLink :to="{ name: 'Home'}" class="nav-link">Courses</RouterLink></li>
                    <li><RouterLink :to="{ name: 'Home'}" class="nav-link">Enrollment</RouterLink></li>
                </ul>
            </div>
            <div class="header">
                <h3 class="header-title">Dashboard</h3>
                <button type="button" class="btn btn-dark">Logout</button>
            </div>
            <div class="boxes">
                <div class="applicants-box">
                    <h6 class="box-title">Total Applicants</h6>
                    <div class="box yellow">
                        <h1 class="number">100</h1>
                        <p class="total">Total applicants</p>
                    </div>
                </div>
                <div class="applicants-box">
                    <h6 class="box-title">Rejected Applicants</h6>
                    <div class="box red">
                        <h1 class="number">20</h1>
                        <p class="total">Total applicants</p>
                    </div>
                </div>
                <div class="applicants-box">
                    <h6 class="box-title">Accepted Applicants</h6>
                    <div class="box green">
                        <h1 class="number">80</h1>
                        <p class="total">Total applicants</p>
                    </div>
                </div>
            </div>
            <div class="tables">
                <h6 class="box-title">Applicant's Table</h6>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">First Choice</th>
                        <th scope="col">Second Choice</th>
                        <th scope="col">GPA</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>Mike Ross</td>
                        <td>BSN</td>
                        <td>BSIT</td>
                        <td>90.1</td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Harvey Specter</td>
                        <td>BSMT</td>
                        <td>BEED</td>
                        <td>89.5</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Louis Litt</td>
                        <td>BSB</td>
                        <td>BSN</td>
                        <td>94.3</td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>Jessica Pearson</td>
                        <td>BSIT</td>
                        <td>BSN</td>
                        <td>95.3</td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Donna Paulsen</td>
                        <td>BSPT</td>
                        <td>BSN</td>
                        <td>94.3</td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="courses">
                <h6 class="box-title">Top Pick Courses</h6>
                <div class="course-box">
                    <h6 class="top-courses">Top Courses:</h6>
                    <ol>
                        <li>Bachelor of Science in Information Technology</li>
                        <li>Bachelor of Science in Nursing</li>
                        <li>Bachelor of Science in Business Administration</li>
                        <li>Bachelor of Science in Biology</li>
                        <li>Bachelor of Science in Agriculture</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>
.wrapper {
    width: 100%;
    height: 115vh;
    overflow: hidden;
    background-color: #f8f7f7;
}
#grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-auto-rows: minmax(5.5rem, auto);
}
.sidebar {
    grid-column: 1 / 3;
    grid-row: 1 / 9;
    width: 17rem;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    background-color: white;
}
.header {
    grid-column: 3 / 13;
    grid-row: 1 / 2;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    background-color: white;
}
.title {
    text-align: center;
    padding: 2rem 0;
    font-weight: 300;
    font-size: 1.3rem;
    background: #4b6043;
    background: -webkit-linear-gradient(101deg, #4b6043 0%, #9a8933 100%);
    background: linear-gradient(101deg, #4b6043 0%, #9a8933 100%);
    color: white;
}
.links {
    padding: 0;
    font-size: 1.3rem;
}
links.li {
    list-style: none;
}
a {
    padding: 1.2rem 0 1.2rem 1.9rem;
    border-radius: 0.6rem;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
a:hover {
    background-color: rgba(0, 0, 0, 0.1);
    cursor: pointer;
}
.header-title {
    font-size: 2rem;
    position: relative;
    top: 1.5rem;
    left: 3rem;
    font-weight: 700;
}
.btn {
    position: relative;
    top: -1.3rem;
    left: 59rem;
    padding: 0.4rem 1.5rem;
}
.router-link-exact-active {
    background: rgba(0, 0, 0, 0.1);
}
.boxes {
    grid-column: 3 / 13;
    grid-row: 2 / 5;
    margin: 2rem;
    display: flex;
    justify-content: space-between;
}
.applicants-box {
    margin-top: 2rem;
}
.box-title {
    font-weight: 400;
}
.box {
    box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
    padding: 2rem;
    width: 18rem;
    text-align: center;
    border-radius: 0.6rem;
}
.number {
    font-size: 3.5rem;
    font-weight: 700;
}
.total {
    font-size: 1rem;
    font-weight: 300;
}
.yellow {
    background-color: #f8d839;
}
.red {
    background-color: #f9747d;
}
.green {
    background-color: #5ea954;
}
.tables {
    grid-column: 3 / 10;
    grid-row: 5 / 9;
    margin: 1rem 2rem;
}
table {
    box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
}
.courses {
    grid-column: 10 / 13;
    margin: 1rem;
    grid-row: 5 / 9;
}
.course-box {
    box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;
    height: 90%;
    border-radius: 0.6rem;
    background: white;
    padding: 1rem;
}
.top-courses {
    text-decoration: underline;
    margin-bottom: 1rem;
}
ol li {
    margin-top: 0.7rem;
    font-size: 0.9rem;
}
</style>