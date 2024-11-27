<template>
    <div class="wrapper">
        <header>
            <img src="../assets/images/essu.png"  alt="essu logo" width="280">
            <button type="button" class="btn btn-dark">Logout</button>
        </header>
        <div id="grid">
            <div class="status">
                <h1 class="greetings">Good Day, <span class="name">John Doe!</span></h1>
                <h6 class="status2">Admission Status: <span class="result">Processing</span></h6>
            </div>
            <div class="personal-info wrapper2">
                <h4 class="info-title">Personal Information</h4>
                <ul class="infos">
                    <li>Full Name: <strong>John Doe</strong></li>
                    <li>Birth Date: <strong class="bold">05/06/2002</strong></li>
                    <li>Address: <strong class="bold">Barangay 13, Can Avid Eastern Samar</strong></li>
                    <li>Mobile Number: <strong class="bold">09123456789</strong></li>
                    <li>Email: <strong class="bold">johndoe@gmail.com</strong></li>
                </ul>
            </div>
            <div class="acad-info wrapper2">
                <h4 class="info-title">School Information</h4>
                <ul class="infos">
                    <li>Primary: <strong>Can Avid National High School</strong></li>
                    <li>Secondary: <strong class="bold">Can Avid National High School</strong></li>
                    <li>Senior High: <strong class="bold">Can Avid National High School</strong></li>
                    <li>Grade Point Average (GPA): <strong class="bold">90.1</strong></li>
                </ul>
            </div>
            <div class="course-info wrapper2">
                <h4 class="info-title">Admission Information</h4>
                <ul class="infos">
                    <li>First Choice: <strong>Bachelor of Science in Information Technology</strong></li>
                    <li>Second Choice: <strong class="bold">Bachelor of Elementary Education</strong></li>
                    <li>Admission Status: <strong class="bold">Processing</strong></li>
                </ul>
            </div>
        </div>
    </div>
</template>
<style scoped>
.wrapper {
    width: 100%;
    height: 250vh;
    margin-bottom: 1rem;
}
header {
    padding: 1rem 3rem;
    display: flex;
    justify-content: space-between;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
.btn-dark {
    position: absolute;
    right: 2rem;
    top: 2rem;
    padding: 0.6rem 2rem;
}
#grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-auto-rows: minmax(3rem, auto);
    padding: 4rem;
    gap: 1rem;
}
.status {
    grid-column: 1 / 13;
    grid-row: 1 / 2;
    border-bottom: 1px solid rgba(0, 0, 0, 0.3);
    padding-bottom: 4rem;
    margin-bottom: 2rem;
}
.greetings {
    font-weight: 300;
    font-size: 3rem;
}
.status2 {
    position: absolute;
    right: 10rem;
    top: 11.5rem;
    font-weight: 400;
    padding: 0.8rem 1rem;
    background: #f8d731;
    border-radius: 0.5rem;
}
.result {
    font-weight: 600;
}
.name {
    font-weight: 600;
    color:#014422;
}
.personal-info {
    grid-column: 1 / 13;
    grid-row: 2 / 8;
}
.wrapper2 {
    border-radius: 0.5rem;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    padding: 2rem 4rem;
}
.acad-info {
    grid-column: 1 / 13;
    grid-row: 8 / 14;
}
.course-info {
    grid-column: 1 / 13;
    grid-row: 14 / 20;
}
.info-title {
    font-weight: 300;
    font-size: 2rem;
    padding: 0.4rem;
    border-bottom: 2px solid #014422;
}
.infos {
    margin-top: 1.5rem;
    padding: 0;
}
.infos li {
    list-style: none;
    margin-bottom: 0.5rem;
    padding: 0.8rem;
    border-radius: 0.5rem;
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
}
.infos li:hover {
    box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    background: rgba(0, 0, 0, 0.1);
}
</style>