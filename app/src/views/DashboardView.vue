<template>
    <div class="wrapper">
        <div id="grid">
            <div class="sidebar border">

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
.border {
    border: 1px solid black;
}
.sidebar {
    grid-column: 1 / 3;
    grid-row: 1 / 4;
    width: 17rem;
}
</style>