
<template>
    <div>
      <!-- Header -->
      <div class="header">
        <!-- Logo -->
        <img src="../assets/essu.png"  alt="" width="350">
        <h1>admission system</h1>
      </div>
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light">
              <ul class="navbar-nav" style="">
                <li class="nav-item">
                  <!-- Home -->
                  <RouterLink :to="{ name: 'Home'}" class="nav-link">Home</RouterLink>
                </li>
                <li class="nav-item active">
                  <!-- Procedure -->
                  <RouterLink :to="{ name: 'Procedure'}" class="nav-link">Procedure</RouterLink>
                </li>
                <li class="nav-item active">
                  <!-- Form -->
                  <RouterLink :to="{ name: 'Form'}" class="nav-link">Form</RouterLink>
                </li>
                <li class="nav-item active">
                  <!-- Login -->
                  <RouterLink :to="{ name: 'Login'}" class="nav-link">Login</RouterLink>
                </li>
              </ul>
          </nav>
    </div>
</template> 

<style scoped>
nav {
  background: #c1a620;
  background: -webkit-linear-gradient(45deg, #c1a620 0%, #4b6043 100%);
  background: linear-gradient(45deg, #c1a620 0%, #4b6043 100%);
    padding: 1.3rem 2rem;
}
a {
    color: white;
    text-transform: uppercase;
    font-weight: 400;
}
.nav-link {
    margin-left: 3rem;
    padding: 0.2em 0.7rem;
    border-bottom: 3px solid transparent;
}
.nav-link:hover {
  color: #014422;
  border-bottom: 3px solid #ffd300;
}
.router-link-exact-active{
    color: #014422;
    border-bottom: 3px solid #ffd300;
}
.router-link-exact-active:hover {
    color: #014422;

}
.title {
  position: relative;
  left: 30rem;
  color: #ffd300;
  font-weight: 900;
}
.header h1 {
  display: inline-block;
  text-transform: uppercase;
  margin-left: 49rem;
  font-size: 1rem;
  color: #014422;
  font-weight: 500;
  background: #ffee8c;
  padding: 1rem 0.9rem;
  border-radius: 0.2rem;
  transition: transform 0.3s ease-in-out;
}
.header h1:hover {
  font-weight: 700;
  cursor: pointer;
  transform: scale(1.1); 
}
</style>