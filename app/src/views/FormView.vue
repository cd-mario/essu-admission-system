<template>
    <div class="wrapper">
        <form>
            <h1 class="title">ESSU Admission Form</h1>
            <div class="form-group">
              <label for="f_name">First Name: </label>
              <input type="text" class="form-control" id="f_name" placeholder="First Name">
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
</template>
<style scoped>
    .wrapper {
        height: 100vh;
        padding: 3rem;

    }
    form {
        width: 70%;
        margin: 0 auto;
        border: 1px solid rgba(0, 0, 0, 0.2);

    }
    .title {
        text-align: center;
        text-transform: uppercase;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 2rem;
        background: #4b6043;
        background: -webkit-linear-gradient(101deg, #4b6043 0%, #9a8933 100%);
        background: linear-gradient(101deg, #4b6043 0%, #9a8933 100%);
        padding: 1rem;
        color: #eee;
    }
</style>