<template>
    <div class="wrapper">
        <header>
            <img src="../assets/images/essu.png"  alt="essu logo" width="280">
            <button type="button" class="btn btn-dark">Logout</button>
        </header>
    </div>
</template>
<style scoped>
.wrapper {
    width: 100%;
    height: 110vh;
}
header {
    padding: 1rem 3rem;
    display: flex;
    justify-content: space-between;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
.btn-dark {
    position: absolute;
    right: 2rem;
    top: 16rem;
    padding: 0.6rem 2rem;
}
</style>