<template>
    <div class="wrapper">
        <form>
            <h1 class="title">ESSU Admission Form</h1>
            <p class="note"><strong>Note</strong>: You must <span class="underline">login</span> to access admission form.</p>
            <div class="input-wrapper">
                <div class="name-section">
                    <h5 class="identifier">Name</h5>
                    <div class="form-group-name">
                        <div class="form-group">
                          <label for="f_name">First Name: </label>
                          <input type="text" class="form-control" id="f_name" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                          <label for="m_name">Middle Name: </label>
                          <input type="text" class="form-control" id="m_name" placeholder="Middle Name">
                        </div>
                        <div class="form-group">
                          <label for="l_name">Last Name: </label>
                          <input type="text" class="form-control" id="l_name" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>
                <div class="contact-section">
                    <h5 class="identifier">Contact</h5>
                    <div class="form-group-name">
                        <div class="form-group">
                          <label for="f_name">First Name: </label>
                          <input type="text" class="form-control" id="f_name" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                          <label for="m_name">Middle Name: </label>
                          <input type="text" class="form-control" id="m_name" placeholder="Middle Name">
                        </div>
                        <div class="form-group">
                          <label for="l_name">Last Name: </label>
                          <input type="text" class="form-control" id="l_name" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button> -->
          </form>
    </div>
</template>
<style scoped>
    .wrapper {
        height: 100vh;
        padding: 2rem;
    }
    form {
        margin: 0 auto;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 0.9rem;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
        font-size: 1rem;
        background: #fffefe;
    }
    .title {
        text-align: center;
        text-transform: uppercase;
        font-size: 2rem;
        font-weight: 700;
        margin-bottom: 2rem;
        background: #4b6043;
        padding: 1rem;
        color: #eee;
        border-top-left-radius: 0.7rem;
        border-top-right-radius: 0.7rem;
    }
    .input-wrapper {
        padding: 1rem 3rem;
        display: grid;
        grid-template-columns: repeat(6, 1fr);
        grid-auto-rows: minmax(20rem, auto);
        gap: 1rem;
    }
    .note {
        position: relative;
        left: 4rem;
        border-radius: 0.2rem;
        padding: 0.5rem 0.6rem;
        border-left: 4px solid #f01e2c;
        background: rgba(0, 0, 0, 0.1);
        width: 60%;
        font-size: 0.9rem;
    }
    .underline {
        text-decoration: underline;
        font-weight: 500;
    }
    .form-group {
        margin-bottom: 0.9rem;
    }
    .form-group input {
        background: #fbfafa;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
    }
    .form-group input:focus {
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    .form-group label {
        font-weight: 300;
    }
    .form-group input:placeholder-shown {
        font-weight: 300;
    }
    .form-group-name {
        border: 1px solid rgba(0, 0, 0, 0.2);
        padding: 1rem;
        border-radius: 0.4rem;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        margin-bottom: 0.9rem;
        background: white;
    }
    .identifier {
        font-weight: 300;
        border-radius: 0.3rem;
        font-size: 1.8rem;
        margin: 0.1rem;
    }
    .btn {
        position: relative;
        left: 38.5rem;
        padding: 0.6rem 1.5rem;
        bottom: 1rem;
    }
    .name-section {
        grid-column: 1 / 4;
    }
    .contact-section {
        grid-column: 4 / 7;
    }
</style>