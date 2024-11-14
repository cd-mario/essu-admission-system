<template>
    <div class="wrapper">
        <header>
            <img src="../assets/images/essu.png"  alt="essu logo" width="280">
            <button type="button" class="btn btn-dark">Logout</button>
        </header>
        <div id="grid">
            <div class="status">
                <h1 class="greetings">Good Day, <span class="name">John Doe</span>!</h1>
                <h6 class="status2">Admission Status: <span class="result">Processing</span></h6>
            </div>
        </div>
    </div>
</template>
<style scoped>
.wrapper {
    width: 100%;
    height: 110vh;
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
    top: 16rem;
    padding: 0.6rem 2rem;
}
#grid {
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    grid-auto-rows: minmax(3rem, auto);
    padding: 3rem;
}
.status {
    grid-column: 1 / 13;
    grid-row: 1 / 2;
    border-bottom: 1px solid rgba(0, 0, 0, 0.3);
    padding-bottom: 3rem;
}
.greetings {
    font-weight: 300;
    font-size: 3rem;
}
.status2 {
    position: absolute;
    right: 6rem;
    top: 24.7rem;
    font-weight: 400;
    padding: 0.6rem;
    background: #f8d731;
}
.result {
    font-weight: 600;
}
.name {
    font-weight: 600;
}
</style>