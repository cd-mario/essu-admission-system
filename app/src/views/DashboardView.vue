<template>
    <div class="wrapper">
        <div id="grid">
            <div class="sidebar">
                <h6 class="title">ESSU ADMIN</h6>
                <ul class="links">
                    <li><RouterLink :to="{ name: 'Dhome'}" class="nav-link">Dashboard</RouterLink></li>
                    <li><RouterLink :to="{ name: 'Home'}" class="nav-link">Applicants</RouterLink></li>
                    <li><RouterLink :to="{ name: 'Home'}" class="nav-link">Courses</RouterLink></li>
                    <li><RouterLink :to="{ name: 'Home'}" class="nav-link">Enrollment</RouterLink></li>
                </ul>
            </div>
            <div class="header">

            </div>
        </div>
    </div>
</template>
<style scoped>
.wrapper {
    width: 100%;
    height: 120vh;
}
#grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-auto-rows: minmax(7.5rem, auto);
}
.sidebar {
    grid-column: 1 / 3;
    grid-row: 1 / 7;
    width: 17rem;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}
.header {
    grid-column: 3 / 13;
    grid-row: 1 / 2;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}
.title {
    text-align: center;
    padding: 3rem 0;
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
li {
    list-style: none;
    padding: 1.4rem 0 1.4rem 1.9rem;
    border-radius: 0.6rem;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
li:hover {
    background-color: rgba(0, 0, 0, 0.1);
    cursor: pointer;
}
</style>