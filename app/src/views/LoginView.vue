<template>
    <!-- need to remove navbar and footer in login page -->
    <div class="container">
        <div id="grid">
            <div class="image">
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
    display: grid;
    grid-template-columns: repeat(10, 1fr);
    grid-auto-rows: minmax(100px, auto);
    margin-top: 4rem;
    height: 85%;
    border-radius: 2rem;
}
.image {
    grid-column: 1 / 6;
    background-image: url('../assets/images/login-bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    border-top-left-radius: 2rem;
    border-bottom-left-radius: 2rem;
}
.login {
    grid-column: 6 / 11;
}
</style>