


<template>
    <header>
        <div class="logo">
            <img src="../assets/image/background.png" alt="essu logo">
        </div>
        <nav>
            <ul>
                <li>
                    <RouterLink :to="{name: 'home'}">Home</RouterLink>
                    <span class="tool">Home</span>
                </li>
                <li>
                    <RouterLink :to="{name: 'procedure'}">Admission procedure</RouterLink>
                    <span class="tool">Procedure</span>
                </li>
                <li>
                    <RouterLink :to="{name: 'form'}">Admission form</RouterLink>
                    <span class="tool">Form</span>
                </li>
                <li>
                    <RouterLink :to="{name: 'form'}" class="active">Login</RouterLink>
                    <span class="tool">Login</span>
                </li>
            </ul>
        </nav>
    </header>
</template>
<style scoped>
    .logo {
        padding: 0.8rem;
        background: #eee;
    }
    .logo img {
        width: 300px;
    }
    nav {
        background: darkgreen;
        padding: 0.7rem;
        position: sticky;
    }
    ul {
        display: flex;
        list-style: none;
        width: 60%;
        justify-content: space-around;
    }
    a {
        padding: 0.7rem;
        font-size: 0.9rem;
        text-decoration: none;
        color: white;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    a:hover {
        background: rgba(0, 0, 0, 0.6);
    }
    a.active {
        background: #161b22;
    }
    li {
        display: inline-block;
        position: relative;
    }
    .tool {
        position: absolute;
        top: 170%;
        left: 80%;
        font-size: small;
        background-color: rgba(255, 255, 255, 0.9);
        padding: 0.3rem;
        border: 1px solid rgba(0, 0, 0, 0.6);
        border-radius: 0.3rem;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.7s;
      }
      li:hover .tool {
        visibility: visible;
        opacity: 1; /* Fade in the tooltip */
    }
</style>