<template>
  <main class="auth-container">
    <div class="auth-card">
      <div class="auth-header">
        <h1>Авторизация</h1>
      </div>

      <form class="auth-form">
        <!-- Валидация на стороне страницы и сервера -->
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" class="auth-input" placeholder="example@mail.com" required/>
        </div>

        <div class="form-group">
          <label for="password">Пароль</label>
          <input
            type="password"
            id="password"
            class="auth-input"
            placeholder="password"
            minlength="8" required
          />
        </div>
        <button type="submit" class="auth-btn">Войти</button>
      </form>

      <div class="auth-footer">
        <span>Нет аккаунта?</span>
        <RouterLink to="/register" class="auth-link">Зарегистрироваться</RouterLink>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  props: {
    email: String,
    password: String,
  }
}
</script>

<style>
@import url(/auth.css);
</style>
