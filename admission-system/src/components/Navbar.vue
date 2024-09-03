


<template>
    <header>
        <div class="logo">
            <img src="../assets/image/essu.png" alt="essu logo">
        </div>
        <nav>
            <i class="fa-solid fa-user fa-2xl">
            </i>
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
            </ul>
        </nav>
    </header>
</template>
<style scoped>
    .logo {
        background: darkgreen;
        text-align: center;
    }
    .logo img {
        width: 500px;
    }
    nav {
        background: #161b22;
        padding: 0.7rem;
    }
    ul {
        width: 50%;
        display: flex;
        list-style: none;
        justify-content: space-evenly;
    }
    a {
        padding: 0.7rem;
        font-size: 0.9rem;
        text-decoration: none;
        color: #76BA1B;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    a:hover {
        background: rgba(0, 0, 0, 0.6);
    }
    i {
        color: #76BA1B;
        position: absolute;
        left: 81rem;
        margin-top: 0.5rem;
        cursor: pointer;
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
        background-color: rgba(255, 255, 255, 0.5);
        padding: 0.3rem;
        border: 1px solid rgba(0, 0, 0, 0.6);
        border-radius: 0.3rem;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.9s;
      }
      li:hover .tool {
        visibility: visible;
        opacity: 1; /* Fade in the tooltip */
    }

</style>