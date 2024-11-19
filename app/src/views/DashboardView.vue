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
        </div>
    </div>
</template>
<style scoped>
.wrapper {
    width: 100%;
    height: 120vh;
    overflow-x: hidden;
}
#grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-auto-rows: minmax(5.5rem, auto);
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
li {
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
</style>