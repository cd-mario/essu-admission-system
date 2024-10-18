
<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <RouterLink :to="{ name: 'Home'}">
                <img src="../assets/logo.png" alt="logo" width="75">
            </RouterLink>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav d-flex">
                <li class="nav-item">
                  <RouterLink :to="{ name: 'Home'}" class="nav-link">Home</RouterLink>
                </li>
                <li class="nav-item active">
                  <RouterLink :to="{ name: 'Procedure'}" class="nav-link">Procedure</RouterLink>
                </li>
                <li class="nav-item active">
                  <RouterLink :to="{ name: 'Form'}" class="nav-link">Form</RouterLink>
                </li>
                <li class="nav-item active">
                  <RouterLink :to="{ name: 'Login'}" class="nav-link login">Login</RouterLink>
                </li>
              </ul>
            </div>
          </nav>
    </div>
</template>

<style scoped>
nav{
    background-color: #4B6043;
    padding: 0.5rem 2rem;
}
a {
    color: white;
    border-radius: 0.4rem;
    text-transform: uppercase;
}
.nav-link {
    margin-left: 3rem;
    padding: 0.4em 0.7rem;
}
.nav-link:hover {
    background: rgba(255, 255, 255, 0.6);
    font-weight: 700;
}
.router-link-exact-active{
    color: white;
    font-weight: 500;
    text-decoration: underline;
}
.router-link-exact-active:hover {
    background: rgba(255, 255, 255, 0.6);
    font-weight: 600;
    color: black;

}
.login {
    border: 1px solid white;
}
</style>