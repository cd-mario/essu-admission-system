
<template>
    <div>
      <!-- Header -->
      <div class="header py-3">
        <!-- Logo -->
        <div class="logo">
          <img src="../assets/images/essu.png"  alt="essu logo" width="350">
          <img src="../assets/images/bp.png" alt="Bagong Pilipinas logo" width="70">
        </div>
        <h1>admission system</h1>
      </div>
        <!-- Navigation bar -->
        <nav class="navbar navbar-expand-lg navbar-light">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <!-- Home -->
                  <RouterLink :to="{ name: 'Home'}" class="nav-link">Home</RouterLink>
                </li>
                <li class="nav-item active">
                  <!-- Procedure -->
                  <RouterLink :to="{ name: 'Procedure'}" class="nav-link">Admission Procedure</RouterLink>
                </li>
                <li class="nav-item active">
                  <!-- Form -->
                  <RouterLink :to="{ name: 'Form'}" class="nav-link">Admission form</RouterLink>
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
  background: #4b6043;
  background: -webkit-linear-gradient(101deg, #4b6043 0%, #9a8933 100%);
  background: linear-gradient(101deg, #4b6043 0%, #9a8933 100%);
  padding: 1.6rem 2rem;
  border-bottom: 2px solid #ffee8c;
}
a {
    color: white;
    text-transform: uppercase;
    font-weight: 400;
}
.nav-link {
    margin-left: 3.6rem;
    padding: 0.2em 0.7rem;
    border-bottom: 3px solid transparent;
}
.nav-link:hover {
  color: #f1e9b8;
  border-bottom: 2px solid #ffee8c;
}
.router-link-exact-active{
    color: #f1e9b8;
    border-bottom: 2px solid #ffee8c;
    font-weight: 500;
}
.router-link-exact-active:hover {
    color: #f1e9b8;
}
.title {
  position: relative;
  left: 30rem;
  color: #ffd300;
  font-weight: 900;
}
.header h1 {
  position: absolute;
  top: 2.5rem;
  left: 71rem;
  text-transform: uppercase;
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
.header {
  display: flex;
  flex-direction: column;
}
.header .logo img{
  margin-right: 1.5rem;
}
.navbar-nav {
  margin-left: 1rem;
}
</style>