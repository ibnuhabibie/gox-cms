<template>
  <section class="login-container">
    <div class="container-fluid">
      <div class="row">
        <div class="faded-bg"></div>
        <div class="hidden-xs col-sm-7 col-md-8">
          <div class="login-tm">
            <span class="logo">
              <feather type="aperture"/>
            </span>
            <div class="copy">
              <h1>Dashboard</h1>
              <p>Welcome to Gox Panel. Powered by Mungil Team</p>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-5 offset-md-1 col-md-3 login-sidebar">
          <div class="login-content">
            <p>Sign into your account</p>
            <form>
              <div class="form-group form-group-default">
                <label>E-mail</label>
                <div class="controls">
                  <input type="text" name="email" placeholder="E-mail" class="form-control">
                </div>
              </div>
              <div class="form-group form-group-default">
                <label>Password</label>
                <div class="controls">
                  <input
                    type="password"
                    name="password"
                    placeholder="Password"
                    class="form-control">
                </div>
              </div>
              <a href="/admin/dashboard" class="btn btn-primary">Login</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  created () {
    document.body.className = 'login'
  }
};
</script>