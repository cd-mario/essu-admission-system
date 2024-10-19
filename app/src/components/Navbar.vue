
<template>
    <div>
      <div class="header">
        <img src="../assets/essu.png"  alt="" width="350">
        <h1>admission system</h1>
      </div>
        <nav class="navbar navbar-expand-lg navbar-light">
              <ul class="navbar-nav" style="">
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
                  <RouterLink :to="{ name: 'Login'}" class="nav-link">Login</RouterLink>
                </li>
              </ul>
          </nav>
    </div>
</template> 

<style scoped>
nav{
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
  
}
</style>