<template>
    <div class="wrapper">
        <div id="grid">
            <div class="sidebar">
                <h6 class="title">ESSU ADMIN</h6>
                <ul class="links">
                    <li>Dashboard</li>
                    <li>Applicants</li>
                    <li>Courses</li>
                    <li>Enrollment</li>
                </ul>
            </div>
        </div>
    </div>
</template>
<style scoped>
.wrapper {
    width: 100%;
    height: 100vh;
}
#grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-auto-rows: minmax(15rem, auto);
}
.sidebar {
    grid-column: 1 / 3;
    grid-row: 1 / 4;
    width: 17rem;
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
}
.title {
    border-bottom: 1px solid rgba(0, 0, 0, 0.3);
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
    margin-left: 1rem;
    font-size: 1.3rem;
}
li {
    list-style: none;
    margin-top: 3rem;
    border-bottom: 1px solid rgba(0, 0, 0, 0.3);
}
</style>