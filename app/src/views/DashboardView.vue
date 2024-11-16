<template>
    <div class="wrapper">
        <div id="grid">
            <div class="sidebar">
                <h6 class="title">ESSU ADMIN</h6>
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
    border: 1px solid black;
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
</style>