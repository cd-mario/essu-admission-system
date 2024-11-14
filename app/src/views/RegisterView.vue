<template>
    <!-- need to remove navbar and footer in login page -->
    <div class="container">
        <div id="grid">
                <div class="image">
                </div>
            <div class="login">
                <h1 class="login-title">
                    ESSU Admission System
                </h1>
                <form action="">
                    <h2>Login</h2>
                    <p>Input your details to sign in to you account.</p>

                    <input type="text" placeholder="Enter your name/email" required>
                    <input type="password" placeholder="Enter your password" required>
                    <br>
                    <button type="button" class="btn btn-primary mt-3">Login</button>
                    <br>
                    <small>Don't have an account? <RouterLink :to="{ name: 'Register'}">Register here.</RouterLink></small>
                </form>
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
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
.image {
    grid-column: 1 / 5;
    background-image: url('../assets/images/login-bg.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    border-top-left-radius: 2rem;
    border-bottom-left-radius: 2rem;

}
.login {
    grid-column: 5 / 11;
    padding: 3rem 1rem;
}
.login-title {
    color: white;
    background: #f8d731;
    font-weight: 300;
    font-size: 1.4rem;
    text-align: center;
    text-transform: uppercase;
    margin: 0 auto;
    border-radius: 0.8rem;
    width: fit-content;
    padding: 0.5rem 2rem;
    box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
} form {
    width: 80%;
    margin: 3rem auto;
    text-align: center;
}
form h2 {
    color: #f8d731;
    font-size: 1.3rem;

}
form p {
    font-size: smaller;
    color: grey;
    margin: 1rem 0 2rem 0;
}
input {
    height: 2.5rem;
    width: 65%;
    padding: 0.5rem;
    border-radius: 0.4rem;
    border: 1px solid rgba(0, 0, 0, 0.3);
    font-size: 0.9rem;
    margin-bottom: 1rem;
}
input:placeholder-shown {
    font-size: small;
}
button {
    width: 65%;
    margin-bottom: 1rem;
}
small {
    font-size: 0.8rem;
}
</style>