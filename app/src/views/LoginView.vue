<template>
    <div class="container">
        <div id="grid">
            <div class="image">
                this is image
            </div>
            <div class="login">
                this is login
            </div>
        </div>
    </div>
</template>
<style scoped>
.container {
    width: 100%;
    height: 100vh;
}
#grid {
    border: 1px solid black;
    display: grid;
    grid-template-columns: repeat(10, 1fr);
    grid-auto-rows: minmax(100px, auto);
    margin: 5rem 2rem;
}
</style>