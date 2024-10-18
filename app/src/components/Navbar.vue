

<template>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light p-3">
            <RouterLink :to="{ name: 'Home'}" class="nav-link">
                <img src="../assets/logo.png" alt="logo" width="75">
            </RouterLink>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <RouterLink :to="{ name: 'Home'}" class="nav-link">Home</RouterLink>
                </li>
                <li class="nav-item active">
                  <RouterLink :to="{ name: 'Procedure'}" class="nav-link">Procedure</RouterLink>
                </li>
                <li class="nav-item active">
                  <RouterLink :to="{ name: 'Form'}" class="nav-link">Form</RouterLink>
                </li>
              </ul>
            </div>
          </nav>
    </div>
</template>